@extends('admin.headerfooter')
@section('content')
<style>
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

    .ai-form-wrapper {
         min-height: calc(100vh - 70px - 60px); /* subtract navbar + footer heights */
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Segoe UI', sans-serif;
    padding: 20px;
    }

    /* @keyframes gradientFlow {
        0% { background-position: 0% 50%; }
        25% { background-position: 50% 100%; }
        50% { background-position: 100% 50%; }
        75% { background-position: 50% 0%; }
        100% { background-position: 0% 50%; }
    } */

    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        box-shadow: 0 8px 32px 0 rgba(93, 31, 135, 0.37);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1.5px solid rgb(153, 0, 255);
        padding: 30px;
        width: 100%;
        max-width: 400px;
        color: white;
        margin-top: 0%;
    }

    .glass-card input,
    .glass-card textarea {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        padding: 10px;
        border-radius: 8px;
        width: 100%;
        margin-bottom: 15px;
    }

    .glass-card input::placeholder,
    .glass-card textarea::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .glass-card button {
        width: 100%;
        padding: 10px;
        border: none;
        background: rgb(47, 0, 65);
        color: white;
        border-radius: 8px;
        transition: 0.3s;
    }

    .glass-card button:hover {
        background: rgb(60, 0, 84);
        color: rgb(120, 120, 120);
    }

    .upb {
        margin-top: 20px;
    }
</style>
<br>
<br>
<br>
<div class="ai-form-wrapper">
<div class="glass-card">
        <h4 class="mb-4 text-center">Upload Study Material</h4>
        <form id="studyform">
            @csrf
            <input type="text" name="title" placeholder="Enter your title" required />
            <textarea rows="3" name="description" placeholder="Enter the description" required></textarea>
            <input type="file" id="file" name="file" />
            <input type="text" name="link" id="link" placeholder="Enter the link" />
           <select name="category" id="category">
          <option value="pdf">PDF</option>
<option value="video">Video</option>
<option value="image">Image</option>
<option value="link">Link</option>

           </select>
            <select id="career_choice" name="career_choice" class="form-control" placeholder="chose for which carrer you want to upload the material for">
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
            <button type="submit" class="upb">Upload</button>
        </form>
    </div>
</div>
<br>
<br>
<br>
<script src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('#studyform').on('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(this); // this includes file + all input fields

        $.ajax({
            url: '/uploadstudymaterial',
            type: 'POST',
            data: formData,
            processData: false,    // important for file upload
            contentType: false,    // important for file upload
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Study Material Uploaded',
                    text: response.message || 'Your study material has been uploaded!'
                });
                $('#studyform')[0].reset();
            },
            error: function (xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: xhr.responseJSON?.message || 'Failed to upload your study material.'
                });
            }
        });
    });
</script>
@endsection