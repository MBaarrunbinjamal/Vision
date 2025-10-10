<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Propello</title>
    <link rel="icon" type="image/png" href="{{ asset('clients/images/ChatGPT Image Aug 16, 2025, 02_24_34 PM.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="clients/css/animate.css">
    
    <link rel="stylesheet" href="clients/css/owl.carousel.min.css">
    <link rel="stylesheet" href="clients/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="clients/css/magnific-popup.css">
    
    <link rel="stylesheet" href="clients/css/flaticon.css">
    <link rel="stylesheet" href="clients/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Lobster&family=Major+Mono+Display&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pacifico&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
</head>
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
      /* background: linear-gradient(-45deg, #000000, #2c003e, #3a3a3a, #1a001f); */
      /* background-size: 400% 400%;
      animation: gradientMove 15s ease infinite;
      color: #eee; */
    }

    /* @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    } */



/* Background container */
.background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: -1;
  background: radial-gradient(circle at top, #2d0036, #000);
}

/* Glowing particles */
.particle {
  position: absolute;
  width: 3px;
  height: 3px;
  background: #ff00ff;
  border-radius: 50%;
  opacity: 0.8;
  animation: drift 12s linear infinite;
}

@keyframes drift {
  from {
    transform: translateY(0) translateX(0);
    opacity: 1;
  }
  to {
    transform: translateY(-100vh) translateX(50vw);
    opacity: 0;
  }
}

/* Neon streaks */
.streak {
  position: absolute;
  width: 2px;
  height: 120px;
  background: linear-gradient(to bottom, rgba(255,0,255,0.8), rgba(255,0,255,0));
  animation: streakMove 8s linear infinite;
}

@keyframes streakMove {
  from {
    transform: translateY(100vh) translateX(0) rotate(45deg);
    opacity: 1;
  }
  to {
    transform: translateY(-200px) translateX(100vw) rotate(45deg);
    opacity: 0;
  }
}


   .chat-wrapper {
  position: fixed;
  top: 140px; /* height of navbar + top bar */
  left: 0;
  width: 100%;
  bottom: 0;
  display: flex;
  flex-direction: column;
  background: transparent;
}

/* Only chat messages scroll */
.chat-messages {
  flex: 1;
  overflow-y: auto;
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  gap: 0.8rem;
  scroll-behavior: smooth;
}

/* Keep input visible at bottom */
.chat-input-wrapper {
  flex-shrink: 0;
  display: flex;
  justify-content: center;
  padding: 1rem;
  border-top: 1px solid #4b007a;
  background: rgba(0, 0, 0, 0.31);
  backdrop-filter: blur(5px);
  position: sticky;
  bottom: 0;
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
      background: rgba(0, 0, 0, 0.31);
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

/* nav css start */
 .wrap{
    background: #2d2d2dff;
  }
  .navbar{
   background: linear-gradient(135deg, #2d0050ff, #161616ff) !important;
  }
  .mh{
    color: #ffff !important;
     font-family: "Montserrat", sans-serif !important;
       font-size: 40px !important;
  }
  .nav-link{
    color: #ffff !important;
  }
  .nav-link:hover{
    color: #9500f9ff !important;
  }
  .nb1{
    color: #ffffffff !important;
  }
  .nb1:hover{
    color: #ffffffff !important;
  }
  .nb{
    color: #ffff !important;
    border: 1px solid #6b00b2ff !important;
    border-radius: 5px !important;
    background: #6b00b2ff !important;
     margin: 10px !important; 
     }

  .nb:hover{
   background: #9500f9ff !important;
   transition-duration: 0.50s !important;
}

.ftco-navbar-light.scrolled .nav-link:hover {
  color: #9500f9ff !important; /* Use your desired purple */
}

.ibg:hover{
  background: #4e0082ff !important;
  transition-duration: 0.50s !important;
}

.nm{
  color: #ffff !important;
}

.lgobtn{
  background: #440071ff !important;
  color: #ffff !important;
  border: none !important;
  height: 40px !important;
  width: 80px !important;
  border-radius: 5px !important;
  font-weight: 500 !important;
}
/* nav css end */

.btn {
    background: #4B0082; /* dark purple */
    color: #fff;
    padding: 10px 14px;
    border: none;
    border-radius: 10px;
    font-weight: 500;
    cursor: pointer;
    width: 100%;
}
.btn:hover {
    background: #5a00a8;
    color: #fff;
}


/* Sidebar styles */
.sidebar {
  position: fixed;
  top: 0px; /* height of your navbar */
  left: -250px; /* hidden by default */
  width: 250px;
  height: calc(100% - 0px); /* take rest of page below navbar */
  background: #00000055;
  color: #eee;
  overflow-y: auto;
  transition: left 0.3s ease;
  padding: 1rem;
  z-index: 900; /* just under navbar */
  border-right: 1px solid #ae00ffff;
  backdrop-filter: blur(5px);
  border-radius: 0 10px 10px 0;
}

.sidebar.open {
  left: 0;
}

.sidebar-header {
  display: flex;
  justify-content: center;
  margin-bottom: 1rem;
}

.sidebar-header button {
  background: #4b007a;
  color: #fff;
  border: none;
  padding: 10px;
  border-radius: 8px;
  cursor: pointer;
  width: 100%;
}

.sidebar-header button:hover {
  background: #6a00a8ff;
}

.chat-history {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.chat-history div {
  background: #2b2b2b;
  padding: 8px 10px;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.2s;
}

.chat-history div:hover {
  background: #3d3d3d;
}

/* Toggle button */
.sidebar-toggle {
  position: fixed;
  top: 70px; /* just below navbar */
  left: 15px;
  background: #2d0050ff;
  color: #fff;
  border: none;
  border-radius: 50%;
  border: 2px solid #fff;
  width: 45px;
  height: 45px;
  cursor: pointer;
  z-index: 950  ;
  font-size: 20px;
  transition: transform 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sidebar-toggle.open {
  transform: rotate(90deg);
}

/* Typing dots animation */
.typing {
  display: inline-block;
  font-size: 1.2rem;
  font-weight: 900;
  letter-spacing: 2px;
  color: #cfcfcf;
}

.typing span {
  display: inline-block;
  animation: bounce 1.2s infinite;
}

.typing span:nth-child(2) {
  animation-delay: 0.2s;
}
.typing span:nth-child(3) {
  animation-delay: 0.4s;
}

@keyframes bounce {
  0%, 80%, 100% { transform: scale(0); }
  40% { transform: scale(1); }
}

/* Scroll to bottom button */
#scrollToBottomBtn {
   position: absolute;
  bottom: 130px; /* stays above input */
  left: 50%;
  transform: translateX(-50%);
  background: #2c003e;
  color: white;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  cursor: pointer;
  box-shadow: 0 2px 6px rgba(0,0,0,0.3);
  transition: opacity 0.3s ease;
  opacity: 0;
  pointer-events: none;
  z-index: 999;
}
#scrollToBottomBtn.show {
  opacity: 1;
  pointer-events: auto;
}
#scrollToBottomBtn:hover {
  background: #3d0059;
}
  
  </style>
   
<body>

<!-- Background animation -->
<div class="background" id="background"></div>

  <!-- Sidebar -->
  <div id="sidebar" class="sidebar">
    <div class="sidebar-header">
      <button id="newChatBtn">+ New Chat</button>
    </div>
    <div class="chat-history" id="chatHistory"></div>
  </div>

<!-- Sidebar toggle button -->
<button id="toggleSidebar" class="sidebar-toggle">☰</button>


<!-- nav start -->
 <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center ibg"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center ibg"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center ibg"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center ibg"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand mh" href="/">
    <img src="{{ asset('clients/images/ChatGPT Image Aug 9, 2025, 05_03_47 PM.png') }}" alt="Propello Logo" style="height:40px; width:auto;">
</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="/counselor" class="nav-link">Counselor AI</a></li>
            <li class="nav-item"><a href="/glorii" class="nav-link">Career Sphere</a></li>
	          <li class="nav-item"><a href="/cv" class="nav-link">Create CV</a></li>
	          <!-- <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li> -->
	          <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
           @if(Auth::user())
          <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="btn btn-danger my-2">Logout</button>
                </form>
                @else
                    <button class="nb"><a href="/login" class="nav-link nb1">Sign in</a></button>
                     <button class="nb"><a href="/register" class="nav-link nb1">Sign up</a></button>
                @endif
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    <div id="scrollToBottomBtn">
  <i class="fa fa-arrow-down"></i>
   </div>

 


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

  




<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="clients/js/jquery.min.js"></script>
  <script src="clients/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="clients/js/popper.min.js"></script>
  <script src="clients/js/bootstrap.min.js"></script>
  <script src="clients/js/jquery.easing.1.3.js"></script>
  <script src="clients/js/jquery.waypoints.min.js"></script>
  <script src="clients/js/jquery.stellar.min.js"></script>
  <script src="clients/js/owl.carousel.min.js"></script>
  <script src="clients/js/jquery.magnific-popup.min.js"></script>
  <script src="clients/js/jquery.animateNumber.min.js"></script>
  <script src="clients/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="clients/js/google-map.js"></script>
  <script src="clients/js/main.js"></script>
  <script>
 // Full merged AI chat script
document.addEventListener("DOMContentLoaded", () => {
  // -------------------------
  // User & storage helpers
  // -------------------------
  let userId = "{{ Auth::id() ?? 'guest' }}"; // blade template variable preserved
  function getStorageKey(key) {
    return `${userId}_${key}`;
  }

  // Load stored chats per user
  let currentChat = JSON.parse(localStorage.getItem(getStorageKey("currentChat")) || "[]");
  let chats = JSON.parse(localStorage.getItem(getStorageKey("chats")) || "[]");

  // DOM refs (match your HTML)
  const chatMessages = document.getElementById("chatMessages");
  const chatHistoryEl = document.getElementById("chatHistory");
  const newChatBtn = document.getElementById("newChatBtn");
  const sidebar = document.getElementById("sidebar");
  const toggleBtn = document.getElementById("toggleSidebar");
  const scrollToBottomBtn = document.getElementById("scrollToBottomBtn");
  const background = document.getElementById("background");
  const userInputEl = document.getElementById("userInput");

  // typing state
  let isTyping = false;

  // -------------------------
  // Utility functions
  // -------------------------
  function saveChat() {
    localStorage.setItem(getStorageKey("currentChat"), JSON.stringify(currentChat));
    localStorage.setItem(getStorageKey("chats"), JSON.stringify(chats));
  }

  function appendMessage(sender, text, options = {}) {
    // sender: "user" or "ai" or "typing"
    const div = document.createElement("div");
    div.classList.add("chat-message", sender === "ai" ? "ai" : sender === "user" ? "user" : "ai");
    div.textContent = text;
    if (options.html) div.innerHTML = text;
    chatMessages.appendChild(div);
    chatMessages.scrollTop = chatMessages.scrollHeight;
    return div;
  }

  function clearMessages() {
    chatMessages.innerHTML = "";
  }

  function scrollToBottom(smooth = true) {
    if (smooth) {
      chatMessages.scrollTo({ top: chatMessages.scrollHeight, behavior: "smooth" });
    } else {
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }
  }

  // -------------------------
  // Typing indicator & typewriter
  // -------------------------
  function showTypingIndicator() {
    const typingDiv = document.createElement("div");
    typingDiv.classList.add("chat-message", "ai", "typing-indicator");
    typingDiv.innerHTML = '<div class="typing"><span>.</span><span>.</span><span>.</span></div>';
    chatMessages.appendChild(typingDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
    return typingDiv;
  }

  async function typeMessage(el, text, delay = 15) {
    el.textContent = "";
    for (let i = 0; i < text.length; i++) {
      el.textContent += text.charAt(i);
      chatMessages.scrollTop = chatMessages.scrollHeight;
      // small await for typewriter feel
      await new Promise((r) => setTimeout(r, delay));
    }
  }

  // -------------------------
  // Similarity functions (Levenshtein)
  // -------------------------
  function similarity(s1, s2) {
    let longer = s1.length > s2.length ? s1 : s2;
    let shorter = s1.length > s2.length ? s2 : s1;
    let longerLength = longer.length;
    if (longerLength === 0) return 1.0;
    return (longerLength - editDistance(longer, shorter)) / parseFloat(longerLength);
  }

  function editDistance(s1, s2) {
    s1 = s1.toLowerCase();
    s2 = s2.toLowerCase();

    const costs = [];
    for (let i = 0; i <= s1.length; i++) {
      let lastValue = i;
      for (let j = 0; j <= s2.length; j++) {
        if (i === 0) costs[j] = j;
        else {
          if (j > 0) {
            let newValue = costs[j - 1];
            if (s1.charAt(i - 1) !== s2.charAt(j - 1)) {
              newValue = Math.min(Math.min(newValue, lastValue), costs[j]) + 1;
            }
            costs[j - 1] = lastValue;
            lastValue = newValue;
          }
        }
      }
      if (i > 0) costs[s2.length] = lastValue;
    }
    return costs[s2.length];
  }

  // -------------------------
  // Language detection & translate
  // -------------------------
  function detectLanguage(text, callback) {
    // Using public translate endpoint (no API key) — same as original
    $.get("https://translate.googleapis.com/translate_a/single", {
      client: "gtx",
      sl: "auto",
      tl: "en",
      dt: "t",
      q: text,
    })
      .done(function (data) {
        // data[2] often returns detected source language
        callback(data && data[2] ? data[2] : "en");
      })
      .fail(function () {
        callback("en");
      });
  }

  function translateToUrdu(text, callback) {
    $.get("https://translate.googleapis.com/translate_a/single", {
      client: "gtx",
      sl: "auto",
      tl: "ur",
      dt: "t",
      q: text,
    })
      .done(function (data) {
        callback(data && data[0] && data[0][0] && data[0][0][0] ? data[0][0][0] : text);
      })
      .fail(function () {
        callback(text);
      });
  }

  // -------------------------
  // Render & history logic
  // -------------------------
  function renderChatHistory() {
    chatHistoryEl.innerHTML = "";
    chats.forEach((chat, index) => {
      const div = document.createElement("div");
      div.classList.add("history-item");

      // title span
      const titleSpan = document.createElement("span");
      titleSpan.textContent = chat.title || "Chat " + (index + 1);
      titleSpan.style.flex = "1";
      titleSpan.style.cursor = "pointer";
      titleSpan.addEventListener("click", () => loadChat(index));

      // delete btn
      const deleteBtn = document.createElement("i");
      deleteBtn.className = "fa fa-trash";
      deleteBtn.style.color = "red";
      deleteBtn.style.marginLeft = "10px";
      deleteBtn.style.cursor = "pointer";
      deleteBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        if (confirm("Delete this chat?")) {
          chats.splice(index, 1);
          // if loading index was currentChat, reset
          saveChat();
          renderChatHistory();
        }
      });

      div.style.display = "flex";
      div.style.justifyContent = "space-between";
      div.style.alignItems = "center";

      div.appendChild(titleSpan);
      div.appendChild(deleteBtn);
      chatHistoryEl.appendChild(div);
    });
  }

  // Call once to show history initially
  renderChatHistory();

  // -------------------------
  // New chat
  // -------------------------
  newChatBtn.addEventListener("click", () => {
    if (currentChat.length > 0) {
      // push last conversation into chats
      chats.push({
        title: currentChat[0]?.text?.slice(0, 20) || "New Chat",
        messages: currentChat,
      });
    }
    currentChat = [];
    clearMessages();
    appendMessage("ai", "👋 New chat started!");
    saveChat();
    renderChatHistory();
    sidebar.classList.remove("open");
    toggleBtn.classList.remove("open");
  });

  // -------------------------
  // Load chat
  // -------------------------
  function loadChat(index) {
    const chat = chats[index];
    if (!chat) return;
    currentChat = chat.messages || [];
    clearMessages();
    currentChat.forEach((msg) => {
      const div = document.createElement("div");
      div.classList.add("chat-message", msg.sender);
      div.textContent = msg.text;
      chatMessages.appendChild(div);
    });
    sidebar.classList.remove("open");
    toggleBtn.classList.remove("open");
    saveChat();
    scrollToBottom(false);
  }

  // -------------------------
  // Restore on refresh
  // -------------------------
  if (currentChat.length > 0) {
    clearMessages();
    currentChat.forEach((msg) => {
      const div = document.createElement("div");
      div.classList.add("chat-message", msg.sender);
      div.textContent = msg.text;
      chatMessages.appendChild(div);
    });
    scrollToBottom(false);
  } else {
    clearMessages();
    appendMessage("ai", "👋 Hello! I'm your Career Counsellor AI. What would you like to explore today?");
  }

  // -------------------------
  // Sidebar toggle & outside click close
  // -------------------------
  toggleBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    sidebar.classList.toggle("open");
    toggleBtn.classList.toggle("open");
  });

  document.addEventListener("click", (e) => {
    if (
      sidebar.classList.contains("open") &&
      !sidebar.contains(e.target) &&
      !toggleBtn.contains(e.target)
    ) {
      sidebar.classList.remove("open");
      toggleBtn.classList.remove("open");
    }
  });

  // -------------------------
  // Swipe gestures (mobile)
  // -------------------------
  let startX = 0;
  let currentX = 0;
  let touchingSidebar = false;

  document.addEventListener("touchstart", (e) => {
    startX = e.touches[0].pageX;
    if (startX < 30 || sidebar.classList.contains("open")) {
      touchingSidebar = true;
    }
  });

  document.addEventListener("touchmove", (e) => {
    if (!touchingSidebar) return;
    currentX = e.touches[0].pageX;
    let translateX = Math.min(0, currentX - startX);
    if (sidebar.classList.contains("open")) {
      sidebar.style.transform = `translateX(${translateX}px)`;
    } else {
      sidebar.style.transform = `translateX(${translateX - sidebar.offsetWidth}px)`;
    }
  });

  document.addEventListener("touchend", () => {
    if (!touchingSidebar) return;
    touchingSidebar = false;
    let deltaX = currentX - startX;
    if (!sidebar.classList.contains("open") && deltaX > 80) {
      sidebar.classList.add("open");
      toggleBtn.classList.add("open");
    } else if (sidebar.classList.contains("open") && deltaX < -80) {
      sidebar.classList.remove("open");
      toggleBtn.classList.remove("open");
    }
    sidebar.style.transform = "";
  });

  // -------------------------
  // Background animation (particles + streaks) - preserve original approach
  // -------------------------
  if (background) {
    // particles
    for (let i = 0; i < 40; i++) {
      const particle = document.createElement("div");
      particle.className = "particle";
      particle.style.top = Math.random() * 100 + "vh";
      particle.style.left = Math.random() * 100 + "vw";
      particle.style.animationDuration = 8 + Math.random() * 10 + "s";
      background.appendChild(particle);
    }
    for (let i = 0; i < 15; i++) {
      const streak = document.createElement("div");
      streak.className = "streak";
      streak.style.left = Math.random() * 100 + "vw";
      streak.style.animationDuration = 4 + Math.random() * 6 + "s";
      background.appendChild(streak);
    }
  }

  // -------------------------
  // Send / receive message logic (improved)
  // -------------------------
  window.sendMessage = function () {
    let userMessage = $("#userInput").val().trim();
    if (!userMessage) return;

    // push locally & show user bubble
    currentChat.push({ sender: "user", text: userMessage });
    appendMessage("user", userMessage);
    $("#userInput").val("");
    $("#userInput").focus();
    saveChat();

    // show typing indicator
    const typingDiv = showTypingIndicator();

    // Call server to get possible responses (original: /api/returnresponse GET)
    // We keep GET to be compatible with your existing endpoint
    $.ajax({
      url: "/api/returnresponse",
      method: "GET",
      dataType: "json",
      success: function (response) {
        // original response seemed to be an array and used fuzzy matching
        try {
          let data = response[0] || response; // support both shapes
          let bestMatch = null;
          let highestScore = 0;

          if (Array.isArray(data)) {
            data.forEach((chat) => {
              const score = similarity(userMessage.toLowerCase(), (chat.question || "").toLowerCase());
              if (score > highestScore) {
                highestScore = score;
                bestMatch = chat;
              }
            });
          } else if (typeof data === "object") {
            // if your endpoint returns object with direct response
            bestMatch = data;
            highestScore = 1;
          }

          // small delay for realism
          setTimeout(() => {
            $(typingDiv).remove();

            if (bestMatch && highestScore > 0.4) {
              // check language & translate if needed
              detectLanguage(userMessage, function (lang) {
                if (lang === "en") {
                  // Show typing animation with typeMessage
                  const aiDiv = document.createElement("div");
                  aiDiv.classList.add("chat-message", "ai");
                  chatMessages.appendChild(aiDiv);
                  // use explaination or explanation spelling fallback
                  const explanation = bestMatch.explaination || bestMatch.explanation || bestMatch.answer || "I can help with that.";
                  typeMessage(aiDiv, explanation).then(() => {
                    currentChat.push({ sender: "ai", text: explanation });
                    saveChat();
                    scrollToBottom();
                  });
                } else {
                  // translate explanation to Urdu
                  const explanation = bestMatch.explaination || bestMatch.explanation || bestMatch.answer || "I can help with that.";
                  translateToUrdu(explanation, function (translated) {
                    const aiDiv = document.createElement("div");
                    aiDiv.classList.add("chat-message", "ai");
                    chatMessages.appendChild(aiDiv);
                    typeMessage(aiDiv, translated).then(() => {
                      currentChat.push({ sender: "ai", text: translated });
                      saveChat();
                      scrollToBottom();
                    });
                  });
                }
              });
            } else {
              // fallback answer
              const fallback = "Sorry, I don't have information about that yet. Please try asking in a different way";
              const aiDiv = document.createElement("div");
              aiDiv.classList.add("chat-message", "ai");
              chatMessages.appendChild(aiDiv);
              typeMessage(aiDiv, fallback).then(() => {
                currentChat.push({ sender: "ai", text: fallback });
                saveChat();
                scrollToBottom();
              });
            }
          }, 800); // reply delay
        } catch (err) {
          // on parse error, show fallback
          $(typingDiv).remove();
          const aiDiv = document.createElement("div");
          aiDiv.classList.add("chat-message", "ai");
          chatMessages.appendChild(aiDiv);
          typeMessage(aiDiv, "⚠️ معلومات حاصل کرنے میں مسئلہ پیش آیا۔").then(() => {
            currentChat.push({ sender: "ai", text: "⚠️ معلومات حاصل کرنے میں مسئلہ پیش آیا۔" });
            saveChat();
            scrollToBottom();
          });
        }
      },
      error: function () {
        $(typingDiv).remove();
        const aiDiv = document.createElement("div");
        aiDiv.classList.add("chat-message", "ai");
        chatMessages.appendChild(aiDiv);
        typeMessage(aiDiv, "⚠️ معلومات حاصل کرنے میں مسئلہ پیش آیا۔").then(() => {
          currentChat.push({ sender: "ai", text: "⚠️ معلومات حاصل کرنے میں مسئلہ پیش آیا۔" });
          saveChat();
          scrollToBottom();
        });
      },
    });
  };

  // -------------------------
  // Key handling: Enter sends, Shift+Enter newline
  // -------------------------
  userInputEl.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
      if (e.shiftKey) return; // allow newline
      e.preventDefault();
      sendMessage();
    }
  });

  // -------------------------
  // Scroll to bottom button logic
  // -------------------------
  const chatBox = chatMessages;
  chatBox.addEventListener("scroll", () => {
    const nearBottom = chatBox.scrollHeight - chatBox.scrollTop - chatBox.clientHeight < 50;
    if (nearBottom) {
      scrollToBottomBtn.classList.remove("show");
    } else {
      scrollToBottomBtn.classList.add("show");
    }
  });

  scrollToBottomBtn.addEventListener("click", () => {
    chatBox.scrollTo({
      top: chatBox.scrollHeight,
      behavior: "smooth",
    });
  });
});
</script>
</body>
</html>

    

    
		