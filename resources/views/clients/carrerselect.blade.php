@extends('clients.navbar')
@section('content')
    <style>
    html, body { 
        height: 100%;
        margin: 0;
        overflow-x: hidden; /* allow vertical scroll but no horizontal scroll */
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(-45deg, #2c003e, #000000, #444444, #2c003e);
        background-size: 400% 400%;
        animation: gradientFlow 20s ease infinite;
    }

    @keyframes gradientFlow {
        0% { background-position: 0% 50%; }
        25% { background-position: 50% 100%; }
        50% { background-position: 100% 50%; }
        75% { background-position: 50% 0%; }
        100% { background-position: 0% 50%; }
    }

    /* Container for whole page */
    .ai-form-wrapper {
        min-height: 100vh;
        padding: 20px;
    }

    /* Material section */
    .material {
        background: rgba(255, 255, 255, 0.08);
        border: 2px solid #4B0082;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        padding: 25px;
        margin-bottom: 40px;
        color: white;
        overflow-y: auto;
    }

    .material h2 {
        color: #fff;
        font-weight: bold;
        margin-bottom: 15px;
        border-bottom: 2px solid #4B0082;
        padding-bottom: 5px;
        text-align: left;
    }

    .material video, 
    .material img {
        border-radius: 10px;
        margin-bottom: 10px;
        border: 1px solid #4B0082;
        max-height: 200px;
        object-fit: cover;
    }

    .material a {
        color: #FFD700;
        text-decoration: none;
        font-weight: bold;
    }
    .material a:hover {
        color: #FF69B4;
        text-decoration: underline;
    }

    /* Career form */
    .centerdiv {
        width: 800px;
        max-width: 95%;
        min-height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid #4B0082;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        padding: 30px;
        color: white;
        margin: 40px auto;
        display: none;
    }
    .abc{
        display: none;
    }

    /* Buttons */
    .abc, .but, .scb, .btn {
        background-color: #41009cff !important;
        color: white !important;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1em;
        margin-top: 15px;
        transition: all 0.3s ease;
    }
    .abc:hover, .but:hover, .scb:hover, .scb:hover {
        background-color: #4b00b4ff !important;
        transform: translateY(-2px);
    }

    .hide {
        text-align: center;
        margin-top: 100px;
        color: white;
    }

    /* Grid for videos, photos, pdfs */
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid #4B0082;
        border-radius: 15px;
        padding: 15px;
        text-align: center;
        color: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        transition: all 0.3s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .card:hover {
        transform: translateY(-8px) scale(1.02);
        border-color: #6A5ACD;
        box-shadow: 0 6px 18px rgba(0,0,0,0.4);
    }
    .card h4 {
        margin: 10px 0 5px 0;
        font-size: 1.1rem;
        color: #FFD700;
    }
    .card p {
        font-size: 0.9rem;
        color: #ddd;
    }

    /* Table for links */
    .link-table {
        width: 100%;
        border-collapse: collapse;
        background: rgba(255,255,255,0.05);
        color: white;
        border-radius: 12px;
        overflow: hidden;
    }
    .link-table th, .link-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #4B0082;
        text-align: left;
    }
    .link-table th {
        background: rgba(75, 0, 130, 0.8);
        font-weight: bold;
    }
    .link-table tr:hover {
        background: rgba(255,255,255,0.08);
    }
    .link-table a {
        color: #FFD700;
        text-decoration: none;
        font-weight: bold;
    }
    .link-table a:hover {
        color: #FF69B4;
    }

    #result {
        display: none;
        margin-top: 20px;
        padding: 15px;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid #4B0082;
        border-radius: 10px;
    }

    .op{
        font-family: "Dancing Script", cursive !important;
        color: #ffffffff;
        font-size: 40px;
    }

    /* Styled select fields */
    select.form-select, 
    select.form-control {
        background: rgba(255,255,255,0.1);
        /* border: 1px solid #4B0082; */
        color: #fff;
        border-radius: 8px;
        padding: 10px;
        font-size: 1rem;
        width: 100%;
        margin-top: 5px;
        outline: none;
        transition: all 0.3s ease;
    }
    select.form-select:focus, 
    select.form-control:focus {
        border-color: #4B0082;;
        box-shadow: 0 0 10px rgba(119, 0, 255, 0.6);
    }
    option {
        background: #2c003e;
        color: #fff;
    }
    </style>


<div class="ai-form-wrapper">
     @if(Auth::user()->careeer)
     {{-- Videos --}}
    <div class="material">
        <h2><b>Videos</b></h2>
        <div class="grid">
            @foreach($rec as $r)
                @if($r->category === 'video')
                    <div class="card">
                        <video width="100%" height="200" controls>
                            <source src="{{ asset('uploads/' . $r->file) }}" type="video/mp4">
                        </video>
                        <h4>{{ $r->title }}</h4>
                        <p>{{ $r->description }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Photos --}}
    <div class="material">
        <h2><b>Photos</b></h2>
        <div class="grid">
            @foreach($rec as $r)
                @if($r->category === 'image')
                    <div class="card">
                        <img src="{{ asset('uploads/' . $r->file) }}" width="100%" height="200" />
                        <h4>{{ $r->title }}</h4>
                        <p>{{ $r->description }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- PDFs --}}
    <div class="material">
        <h2><b>PDFs</b></h2>
        <div class="grid">
            @foreach($rec as $r)
                @if($r->category == 'pdf')
                    <div class="card">
                        <a href="{{ asset('uploads/' . $r->file) }}" target="_blank">📄 {{ $r->title }}</a>
                        <p>{{ $r->description }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Links --}}
    <div class="material">
        <h2><b>Links</b></h2>
        <table class="link-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rec as $r)
                    @if($r->category == 'link')
                        <tr>
                            <td>{{ $r->title }}</td>
                            <td>{{ $r->description }}</td>
                            <td><a href="{{ $r->link }}" >🔗 Visit</a></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>

      @else
    <div class="hide">
        <h2 class="op">Please choose a career to get study material</h2>
        <button class="but" onclick="showform()"><b>click to chose career</b></button>
    </div>
    <div class="centerdiv">
        <h3 class="text-center mb-4 text-white">Career Suggestion Form</h3>

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

        <button id="suggest" class="btn scb w-100">Suggest Career</button>

        <div id="result">
            <p id="suggestedText"></p>

            <div class="mt-3">
                <label for="career_choice">Choose or enter a career:</label>
                <select id="career_choice" class="form-control">
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
           <form > <a><button class="abc" onclick="hide()" type="submit"><b>Next</b></button></a></form>
        </div>
    </div>
  @endif
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
function hide(){
    $(".centerdiv").css("display","none");
    $(".abc").css("display","none");
    $(".material").css("display","block");

}
function showform(){
    $(".centerdiv").css("display","block");
    $(".hide").css("display","none");

}
</script>
@endsection
