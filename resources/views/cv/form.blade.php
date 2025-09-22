@extends('clients.navbar')

@section('content')
<div class="container mt-5">
    <center><h2 class="text-white">Create Your CV</h2></center>

    <div class="row mt-4 cvform justify-content-center">
        <!-- CV Form -->
        <div class="col-lg-8 col-md-10 col-sm-12">
            <form method="POST" action="{{ route('cv.store') }}" id="cvForm">
                @csrf

                <div class="mb-3">
                    <label class="form-label text-white">Full Name</label>
                    <input type="text" name="full_name" id="full_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Summary</label>
                    <textarea name="summary" id="summary" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Education</label>
                    <textarea name="education" id="education" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Experience</label>
                    <textarea name="experience" id="experience" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Skills</label>
                    <textarea name="skills" id="skills" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Choose Template</label>
                    <select name="template" id="template" class="form-select sel">
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

                <div class="text-center">
                    <button type="submit" class="btn">Save CV</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<style>
body {
    background: linear-gradient(135deg, #161616ff, #2d0050ff) !important;
    min-height: 100vh;
}

.cvform {
    background: rgba(0, 0, 0, 0.5) !important;
    padding: 30px;
    border: 2px solid #230047ff;
    border-radius: 10px;
    margin: 0 auto;
    width: 100%;
}

.sel{
   
    border-radius: 5px !important;   
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

.text-white {
    color: white !important;
}
</style>
@endsection