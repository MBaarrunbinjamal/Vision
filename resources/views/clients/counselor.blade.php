@extends('clients.navbar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Career Counselling AI</title>
 <style>

/* is css se small screen agar responsive ho or phir bhi masla kray responsiveness main to is se theek hojata h  */
html, body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
  width: 100%;
}

html, body {
  overflow-x: hidden;
  width: 100%;
}
/* ended */



    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    html, body {
      height: 100%;
      background: linear-gradient(-45deg, #000000, #2c003e, #3a3a3a, #1a001f);
      background-size: 400% 400%;
      animation: gradientMove 15s ease infinite;
      color: #eee;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .chat-wrapper {
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    .chat-messages {
      flex: 1;
      overflow-y: auto;
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
    }

    .chat-message {
  max-width: 70%;
  padding: 0.75rem 1rem;
  border-radius: 15px;
  line-height: 1.5;
  word-wrap: break-word;
  display: inline-block;
  width: fit-content; /* ADDED: auto-width bubble */
  white-space: pre-wrap;
}

    .user {
      align-self: flex-end;
      background: #4b007a;
      color: white;
    }

    .ai {
      align-self: flex-start;
      background: #2b2b2b;
      color: #cfcfcf;
    }

    .chat-input-wrapper {
      display: flex;
      justify-content: center;
      padding: 1rem;
      border-top: 1px solid #4b007a;
      background: rgba(0, 0, 0, 0.8);
      backdrop-filter: blur(5px);
    }

    .chat-input {
      width: 60%;
      display: flex;
      gap: 10px;
    }

    .chat-input input {
      flex: 1;
      padding: 0.8rem 1rem;
      font-size: 1rem;
      border-radius: 10px;
      border: none;
      background: #1a001f;
      color: #eee;
      outline: none;
    }

    .chat-input button {
      background: #4b007a;
      border: none;
      padding: 0.8rem 1.2rem;
      color: white;
      font-size: 1rem;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .chat-input button:hover {
      background: #6a00a8;
    }

    ::-webkit-scrollbar {
      width: 8px;
	  background: rgba(48, 48, 48, 1);
    }

    ::-webkit-scrollbar-thumb {
      background: #4b007a;
      border-radius: 10px;
    }

    /* Responsive Fixes */
@media (max-width: 768px) {
  .chat-input {
    width: 90%;
  }

  .chat-message {
    max-width: 90%;
  }
}

@media (max-width: 480px) {
  .chat-input {
    flex-direction: column;
    width: 100%;
  }

  .chat-input input {
    width: 100%;
  }

  .chat-input button {
    width: 100%;
  }

  .chat-message {
    max-width: 95%;
  }
}
  </style>
  
  
  </head>
<body>
  <div class="chat-wrapper">
    <div class="chat-messages" id="chatMessages">
      <div class="chat-message ai">
        👋 Hello! I'm your Career Counsellor AI. What would you like to explore today?
      </div>
    </div>
    <div class="chat-input-wrapper">
      <div class="chat-input">
        <input type="text" id="userInput" placeholder="Type your message..." />
        <button onclick="sendMessage()">Send</button>
      </div>
    </div>
  </div>

  <script>
    function sendMessage() {
      const input = document.getElementById('userInput');
      const message = input.value.trim();
      if (!message) return;

      const chatMessages = document.getElementById('chatMessages');

      // Create user message
      const userMsg = document.createElement('div');
      userMsg.className = 'chat-message user';
      userMsg.textContent = message;
      chatMessages.appendChild(userMsg);

      // Simulate AI response
      setTimeout(() => {
        const aiMsg = document.createElement('div');
        aiMsg.className = 'chat-message ai';
        aiMsg.textContent = "Thanks for sharing! Let's discuss your options. 📚";
        chatMessages.appendChild(aiMsg);
        chatMessages.scrollTop = chatMessages.scrollHeight;
      }, 600);

      input.value = "";
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    document.getElementById("userInput").addEventListener("keydown", function(e) {
      if (e.key === "Enter") {
        sendMessage();
      }
    });
  </script>
</body>
</html>

    

    
						
					
						
					

		
	        

     @endsection