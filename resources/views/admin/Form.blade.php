@extends('admin.headerfooter')
@section('content')

<style>
html, body {
    overflow: hidden;
}

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
        margin-top: -9%;
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
</style>

<div class="ai-form-wrapper">
    <div class="glass-card">
        <h4 class="mb-4 text-center">Ask a Question</h4>
        <form id="aiForm">
            @csrf
            <input type="text" name="question" placeholder="Enter your question" required />
            <textarea rows="3" name="explaination" placeholder="Enter the answer" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('#aiForm').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: '/ask-ai',
            method: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Answer Submitted',
                    text: response.message || 'Your question has been saved!'
                });
                $('#aiForm')[0].reset();
            },
            error: function (xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: xhr.responseJSON?.message || 'Failed to submit your question.'
                });
            }
        });
    });
</script>

@endsection
