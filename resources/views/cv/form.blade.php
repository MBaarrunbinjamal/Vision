
<!DOCTYPE html>
<html>
<head>
    <title>Create CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container{
            margin-top: 80px;
            gap: 20px;

        }
        .preview-card {
            border: 2px solid #0d6efd;
            border-radius: 10px;
            padding: 20px;
            background: #f9f9f9;
        }
        .section-title {
            font-weight: bold;
            color: #0d6efd;
        }
    </style>
</head>

 <center>  <h2>Create Your CV</h2></center>


<div class="container">
     
    <div class="row">
 
        <!-- CV Form -->
        <div class="col-md-6">
   

           
            <form method="POST" action="{{ route('cv.store') }}" id="cvForm">
                @csrf

                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" name="full_name" id="full_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Summary</label>
                    <textarea name="summary" id="summary" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Education</label>
                    <textarea name="education" id="education" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Experience</label>
                    <textarea name="experience" id="experience" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Skills</label>
                    <textarea name="skills" id="skills" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Choose Template</label>
                    <select name="template" id="template" class="form-select">
                        <option value="classic">Classic</option>
                        <option value="modern">Modern</option>
                        <option value="creative">Creative</option>
                        <option value="retropaper">Retro Paper</option>
                        <option value="boldmagazine">Bold Magazine</option>
                        <option value="darklava">Dark Lava</option>
                        <option value="pastelbloom">Pastel Bloom</option>
                        <option value="urbanminimal">Urban Minimal</option>
                        <option value="nordicice">Nordic Ice</option>
                        <option value="template5">Template 5</option>
                        <option value="ElegantSerif">Elegant Serif</option>
                        <option value="Infographicstyle">Infographic Style</option>
                        <option value="GradientModern">Gradient Modern</option>
                        <option value="CorporateBlue">Corporate Blue</option>
                        <option value="ClassicResume">Classic Resume</option>
                        <option value="BeigeGold">Beige Gold</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save CV</button>
              

            </form>
        </div>
     
        <!-- Live Preview -->
        <!-- <div class="col-md-6">
           <center> <h3>Live CV Preview</h3></center>
            <div id="cvPreview" class="p-3 border rounded bg-white">
                <h2 id="preview_full_name">Your Name</h2>
                <p id="preview_email">Your Email</p>
                <p id="preview_phone">Your Phone</p>

                <h4>Summary</h4>
                <p id="preview_summary">Your summary will appear here</p>

                <h4>Education</h4>
                <p id="preview_education">Your education will appear here</p>

                <h4>Experience</h4>
                <p id="preview_experience">Your experience will appear here</p>

                <h4>Skills</h4>
                <p id="preview_skills">Your skills will appear here</p>
            </div>
           
        </div> -->
        
                
    </div>
</div>




<script>
document.addEventListener("DOMContentLoaded", function() {

    // Full Name
    document.getElementById("full_name").addEventListener("input", function() {
        document.getElementById("preview_full_name").textContent = this.value || "Your Name";
    });

    // Email
    document.getElementById("email").addEventListener("input", function() {
        document.getElementById("preview_email").textContent = this.value || "Your Email";
    });

    // Phone
    document.getElementById("phone").addEventListener("input", function() {
        document.getElementById("preview_phone").textContent = this.value || "Your Phone";
    });

    // Summary
    document.getElementById("summary").addEventListener("input", function() {
        document.getElementById("preview_summary").textContent = this.value || "Your Summary";
    });

    // Education
    document.getElementById("education").addEventListener("input", function() {
        document.getElementById("preview_education").textContent = this.value || "Your Education";
    });

    // Experience
    document.getElementById("experience").addEventListener("input", function() {
        document.getElementById("preview_experience").textContent = this.value || "Your Experience";
    });

    // Skills
    document.getElementById("skills").addEventListener("input", function() {
        document.getElementById("preview_skills").textContent = this.value || "Your Skills";
    });

   
   
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const ids = ["full_name", "email", "phone", "summary", "education", "experience", "skills"];

    // Fill template with form values
    function populate() {
        ids.forEach(f => {
            const input = document.getElementById(f);
            const target = document.querySelector(`#cv-preview [data-field="${f}"]`);
            if (input && target) {
                target.textContent = input.value || target.dataset.default || "";
            }
        });
    }

    // Update on typing
    ids.forEach(f => {
        ["input", "change", "blur"].forEach(evt => {
            const el = document.getElementById(f);
            if (el) el.addEventListener(evt, populate);
        });
    });

    // Change template
    document.getElementById("template").addEventListener("change", function () {
        fetch(`/cv/template/${this.value}`)
            .then(res => res.text())
            .then(html => {
                document.getElementById("cv-preview").innerHTML = html;
                populate(); // apply current values into new template
            });
    });

    populate(); // Initial fill
});
</script>


</body>
</html>