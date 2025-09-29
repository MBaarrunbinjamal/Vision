<!doctype html>
<html lang="en">
<head>
    <title>Career Suggestion</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        html, body { overflow: hidden; }
        .ai-form-wrapper {
            height: 100vh;
            background: linear-gradient(-45deg, #2c003e, #000000, #444444, #2c003e);
            background-size: 400% 400%;
            animation: gradientFlow 20s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }
        @keyframes gradientFlow {
            0% { background-position: 0% 50%; }
            25% { background-position: 50% 100%; }
            50% { background-position: 100% 50%; }
            75% { background-position: 50% 0%; }
            100% { background-position: 0% 50%; }
        }
        .centerdiv {
            width: 800px;
            min-height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid #4B0082;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            padding: 30px;
            color: white;
        }
        label { font-weight: 500; margin-bottom: 5px; }
        #result {
            margin-top: 20px;
            font-size: 1.2em;
            padding: 15px;
            border-radius: 10px;
            background: rgba(0,0,0,0.4);
            display: none;
        }
        .abc{
            background-color: #4B0082;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 15px;
            display: none
        }
        .abc:hover{
            background-color: #6A5ACD;
        }
    </style>
</head>
<body>
<div class="ai-form-wrapper">
    <div class="centerdiv">
        <h3 class="text-center mb-4">Career Suggestion Form</h3>

        <div class="mb-3">
            <label for="interest">What subject do you enjoy most?</label>
            <select id="interest" class="form-select">
                <option value="">-- Select --</option>
                <option value="technology">Technology</option>
                <option value="science">Science</option>
                <option value="arts">Arts</option>
                <option value="business">Business</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="workstyle">Do you prefer working with people or alone?</label>
            <select id="workstyle" class="form-select">
                <option value="">-- Select --</option>
                <option value="people">With People</option>
                <option value="alone">Alone</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="skill">What skill describes you best?</label>
            <select id="skill" class="form-select">
                <option value="">-- Select --</option>
                <option value="creative">Creative Thinking</option>
                <option value="analytical">Analytical Problem Solving</option>
                <option value="leadership">Leadership</option>
                <option value="technical">Technical Skills</option>
            </select>
        </div>

        <button id="suggest" class="btn btn-primary w-100">Suggest Career</button>

        <div id="result">
            <p id="suggestedText"></p>

            <div class="mt-3">
                <label for="career_choice">Choose or enter a career:</label>
                <select id="career_choice" class="form-control" placeholder="Suggested career will appear here or type your own">
                <option value="">-- Select --</option>
                <option value="UI/UX Designer">UI/UX Designer</option>
                <option value="IT Consultant">IT Consultant</option>
                <option value="Tech Project Manager">Tech Project Manager</option>
                <option value="Network Engineer">Network Engineer</option>
                <option value="Game Developer">Game Developer</option>
                <option value="Software Engineer">Software Engineer</option>
                <option value="Science Communicator">Science Communicator</option>
                <option value="Doctor">Doctor</option>
                <option value="Lab Manager">Lab Manager</option>
                <option value="Biotech Specialist">Biotech Specialist</option>
                <option value="Scientific Writer">Scientific Writer</option>
                <option value="Research Scientist">Research Scientist</option>
                <option value="Principal Investigator">Principal Investigator</option>
                <option value="Chemist">Chemist</option>
                <option value="Performer / Actor">Performer / Actor</option>
                <option value="Data Scientist">Data Scientist</option>
                <option value="Art Critic">Art Critic</option>
                <option value="Creative Director">Creative Director</option>
                <option value="Digital Artist">Digital Artist</option>
                <option value="Author / Writer">Author / Writer</option>
                <option value="Historian">Historian</option>
                <option value="Independent Filmmaker">Independent Filmmaker</option>
                <option value="Illustrator">Illustrator</option>
                <option value="Marketing Specialist">Marketing Specialist</option>
                <option value="Financial Consultant">Financial Consultant</option>
                <option value="Entrepreneur">Entrepreneur</option>
                <option value="Operations Manager">Operations Manager</option>
                <option value="Business Strategist">Business Strategist</option>
                <option value="Data Analyst">Data Analyst</option>
                <option value="Investor">Investor</option>
                <option value="Accountant">Accountant</option>
                    
                </select>
            </div>
            <button id="saveCareer" class="btn btn-success mt-3">Save Career</button>
            <a href="/"><button class="abc"><b>Next</b></button></a>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function(){

    // Handle suggestion
    $("#suggest").click(function(){
        let interest = $("#interest").val();
        let workstyle = $("#workstyle").val();
        let skill = $("#skill").val();

        if(!interest || !workstyle || !skill){
            $("#suggestedText").text("⚠️ Please answer all questions.");
            $("#result").fadeIn();
            return;
        }

        // Predefined career map for every combo
        let careerMap = {
      "technology-people-creative": "UI/UX Designer",
    "technology-people-analytical": "IT Consultant",
    "technology-people-leadership": "Tech Project Manager",
    "technology-people-technical": "Network Engineer",

    "technology-alone-creative": "Game Developer",
    "technology-alone-analytical": "Data Scientist",
    "technology-alone-leadership": "CTO (Tech Leader)",
    "technology-alone-technical": "Software Engineer",

    "science-people-creative": "Science Communicator",
    "science-people-analytical": "Doctor",
    "science-people-leadership": "Lab Manager",
    "science-people-technical": "Biotech Specialist",

    "science-alone-creative": "Scientific Writer",
    "science-alone-analytical": "Research Scientist",
    "science-alone-leadership": "Principal Investigator",
    "science-alone-technical": "Chemist",

    "arts-people-creative": "Performer / Actor",
    "arts-people-analytical": "Art Critic",
    "arts-people-leadership": "Creative Director",
    "arts-people-technical": "Digital Artist",

    "arts-alone-creative": "Author / Writer",
    "arts-alone-analytical": "Historian",
    "arts-alone-leadership": "Independent Filmmaker",
    "arts-alone-technical": "Illustrator",

    "business-people-creative": "Marketing Specialist",
    "business-people-analytical": "Financial Consultant",
    "business-people-leadership": "Entrepreneur",
    "business-people-technical": "Operations Manager",

    "business-alone-creative": "Business Strategist",
    "business-alone-analytical": "Data Analyst",
    "business-alone-leadership": "Investor",
    "business-alone-technical": "Accountant"
        };

        let key = `${interest}-${workstyle}-${skill}`;
        let career = careerMap[key] || "Explore more fields based on your interests.";

        $("#suggestedText").html("<strong>Suggested Career:</strong> " + career);
        $("#career_choice").val(career); // prefill input
        $("#result").fadeIn();
      var a =  $(".abc");
    });

    // Handle save
    $("#saveCareer").click(function(){
        let selectedCareer = $("#career_choice").val();

        if(!selectedCareer){
            alert("⚠️ Please select or enter a career.");
            return;
        }

        $.ajax({
            url: "/save-career", // your Laravel route
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                career: selectedCareer
            },
            success: function(response){
             Swal.fire({
        icon: 'success',
        title: 'Saved!',
        text: response.message || 'Your career choice has been saved.'
    }).then(() => {
        // After SweetAlert is closed
        $(".abc").css("display", "block"); // show "Next" button
    });
            },
             error: function(){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "❌ Something went wrong while saving your career."
                });
            }
        });
    });

});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
