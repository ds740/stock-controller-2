
//testing


document.addEventListener("DOMContentLoaded", function () {
    const chatInput = document.querySelector(".chat-input textarea");
    const sendChatBtn = document.querySelector(".chat-input span");
    const chatbox = document.querySelector(".chatbox");

    let userMessage;
    const API_KEY = "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"; 

    const createChatLi = (message, className) => {
        const chatLi = document.createElement("li");
        chatLi.classList.add("chat", className);

        let chatContent;
        if (className === "outgoing") {
            chatContent = `<p>${message}</p>`;
        } else {
            chatContent = `<i class='bx bx-bot'></i><p>${message}</p>`;
        }

        chatLi.innerHTML = chatContent;
        return chatLi;
    };

    const generateResponse = async (incomingChatLi) => {
        const API_URL = "https://api.openai.com/v1/chat/completions";
        const messageElement = incomingChatLi.querySelector("p");

        const requestOptions = {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${API_KEY}`
            },
            body: JSON.stringify({
                model: "gpt-3.5-turbo",
                messages: [{ role: "user", content: userMessage }]
            })
        };

        try {
            const response = await fetch(API_URL, requestOptions);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            messageElement.textContent = data.choices[0].message.content;
        } catch (error) {
            console.error("Error:", error);
            messageElement.textContent = "Sorry, something went wrong. Please try again.";
        }
    };

    const handleChat = async () => {
        userMessage = chatInput.value.trim();
        if (!userMessage) return;


        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatInput.value = "";

        const incomingChatLi = createChatLi("Processing...", "incoming");
        chatbox.appendChild(incomingChatLi);


        await generateResponse(incomingChatLi);
    };

    sendChatBtn.addEventListener("click", handleChat);

    const chatbotToggler = document.querySelector('.chatbot-toggler');
    const chatbot = document.querySelector('.chatbot');
    const toggleIcon1 = chatbotToggler.querySelector('span:first-child');
    const toggleIcon2 = chatbotToggler.querySelector('span:last-child');

    chatbotToggler.addEventListener('click', function () {
        chatbot.classList.toggle('show-chatbot');
        toggleIcon1.classList.toggle('active');
        toggleIcon2.classList.toggle('active');
    });
});
