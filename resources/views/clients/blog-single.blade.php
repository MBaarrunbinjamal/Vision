@extends('clients.navbar')
@section('content')
    <style>
      /* is css se small screen agar responsive ho or phir bhi masla kray responsiveness main to is se theek hojata h  */
html, body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
  width: 100%;
  background:  linear-gradient(135deg, #2d0050ff, #161616ff) !important;
}

html, body {
  overflow-x: hidden;
  width: 100%;
}
.lsbp{
   color: rgba(138, 138, 138, 1)  !important;
}

.cmtf{
  background:rgba(138, 138, 138, 0.34)  !important;
  color: #000 !important;
  border-radius: 10px !important;
  
}

.cmtbtn{
  background: #280043ff !important;
  color: #fff !important;
}

.cmtbtn:hover{
  background: #36005aff !important;
  color: #fff !important;
  transition: 0.3s;
}

.abcd{
  background: rgba(138, 138, 138, 0.34) !important;
  color:rgba(147, 147, 147, 1) !important;
  border-radius: 10px !important;
}

.cmtdt{
  color: rgba(147, 147, 147, 1) !important;
}

/* ended */
    </style>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('clients/images/Flux_Dev_Create_an_image_depicting_a_serene_and_professional_c_2.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate mb-5 text-center">
        <p class="breadcrumbs mb-0">
          <span class="mr-2"><a href="/" class="lsbp">Home <i class="fa fa-chevron-right lsbp"></i></a></span>
          <span class="mr-2"><a href="/blog" class="lsbp">Blog <i class="fa fa-chevron-right lsbp"></i></a></span>
        </p>
        <h1 class="mb-0 bread text-white">Blog Single</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <p>
          <img src="{{ asset('uploads/' . $rec->image) }}" alt="" class="img-fluid">
        </p>
        <h2 class="mb-3 text-white">{{ $rec->heading }}</h2>
        <p>{{ $rec->blog }}</p>

        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">Life</a>
            <a href="#" class="tag-cloud-link">Sport</a>
            <a href="#" class="tag-cloud-link">Tech</a>
            <a href="#" class="tag-cloud-link">Travel</a>
          </div>
        </div>

        

        <div class="pt-5 mt-5">
          <h3 class="mb-5 text-white">{{ $comments->count() }} comments</h3>
          <ul class="comment-list">
@foreach($comments as $c)
    <li class="comment">
        <div class="comment-body">
            <h3 class="text-white">{{ $c->user->name }}</h3>
            <div class="meta cmtdt">{{ $c->created_at->format('F d, Y \a\t h:i A') }}</div>
            <p>{{ $c->message }}</p>
        </div>
    </li>
@endforeach
          </ul>

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5 text-white">Leave a comment</h3>
       <form id="commentForm" action="{{ route('comment.store') }}" method="POST" class="p-5 cmtf">

  @csrf
  <input type="hidden" name="blog_id" id="blog_id" value="{{ $rec->id }}">
  <div class="form-group">
    <label for="message">Message:</label>
    <textarea id="message" name="message" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn py-3 px-4 cmtbtn">Post</button>
  </div>
</form>

          </div>
        </div>
      </div>
</section>
<!-- Make sure jQuery and SweetAlert are loaded first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function () {
  $('#commentForm').submit(function(e) {
    e.preventDefault();

    $.ajax({
      url: "{{ route('comment.store') }}",
      method: "POST",
      data: {
        _token: '{{ csrf_token() }}',
        message: $('#message').val(),
        blog_id: $('#blog_id').val()
      },
      success: function(response) {
        Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: response.success,
        });

        $('#commentsContainer').append(`
          <div class="comment-box">
            <strong>${response.username}</strong><br>
            <p>${response.message}</p>
          </div>
        `);

        $('#commentForm')[0].reset();
      },
      error: function(xhr) {
        let errMsg = "Something went wrong.";
        if (xhr.responseJSON && xhr.responseJSON.errors) {
          errMsg = Object.values(xhr.responseJSON.errors).join(', ');
        }

        Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: errMsg,
        });
      }
    });
  });
});
</script>
       @endsection 