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

  </style>
   
<body>
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
	          <!-- <li class="nav-item"><a href="/service" class="nav-link">Services</a></li> -->
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
function sendMessage() {
    var userMessage = $('#userInput').val().trim();
    if (!userMessage) return;

    // Show user message
    $('#chatMessages').append('<div class="chat-message user">' + userMessage + '</div>');
    $('#userInput').val(""); 

    $.ajax({
        url: "/api/returnresponse",
        method: "GET",
        dataType: "json",
        success: function(response) {
            let chats = response[0];
            let bestMatch = null;
            let highestScore = 0;

            // Find best matching question
            chats.forEach(chat => {
                let score = similarity(userMessage.toLowerCase(), chat.question.toLowerCase());
                if (score > highestScore) {
                    highestScore = score;
                    bestMatch = chat;
                }
            });

            if (bestMatch && highestScore > 0.4) { 
                // Detect user input language first
                detectLanguage(userMessage, function(lang) {
                    if (lang === "en") {
                        // If English → reply in English
                        $('#chatMessages').append('<div class="chat-message ai">' + bestMatch.explaination + '</div>');
                    } else {
                        // Otherwise → translate answer to Urdu
                        translateToUrdu(bestMatch.explaination, function(translated) {
                            $('#chatMessages').append('<div class="chat-message ai">' + translated + '</div>');
                        });
                    }
                });
            } else {
                $('#chatMessages').append('<div class="chat-message ai">معاف کریں، میرے پاس اس قسم کی معلومات موجود نہیں ہیں۔</div>');
            }

            // Auto scroll
            $('#chatMessages').scrollTop($('#chatMessages')[0].scrollHeight);
        },
        error: function() {
            $('#chatMessages').append('<div class="chat-message ai">⚠️ معلومات حاصل کرنے میں مسئلہ پیش آیا۔</div>');
        }
    });
}

// Similarity check
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

    let costs = [];
    for (let i = 0; i <= s1.length; i++) {
        let lastValue = i;
        for (let j = 0; j <= s2.length; j++) {
            if (i === 0) costs[j] = j;
            else {
                if (j > 0) {
                    let newValue = costs[j - 1];
                    if (s1[i - 1] !== s2[j - 1])
                        newValue = Math.min(Math.min(newValue, lastValue), costs[j]) + 1;
                    costs[j - 1] = lastValue;
                    lastValue = newValue;
                }
            }
        }
        if (i > 0) costs[s2.length] = lastValue;
    }
    return costs[s2.length];
}

// Detect input language
function detectLanguage(text, callback) {
    $.get("https://translate.googleapis.com/translate_a/single", {
        client: "gtx",
        sl: "auto",
        tl: "en", // just detect
        dt: "t",
        q: text
    }, function(data) {
        // Extract detected source language
        let detectedLang = data[2];
        callback(detectedLang);
    });
}

// Translate answer to Urdu
function translateToUrdu(text, callback) {
    $.get("https://translate.googleapis.com/translate_a/single", {
        client: "gtx",
        sl: "auto",
        tl: "ur",
        dt: "t",
        q: text
    }, function(data) {
        callback(data[0][0][0]);
    });
}




  </script>
</body>
</html>

    

    
		