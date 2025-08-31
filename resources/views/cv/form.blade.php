
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
     
    
        
                
    </div>
</div>








</body>
</html>