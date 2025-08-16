@extends('clients.navbar')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Lobster&family=Oswald:wght@200..700&family=Pacifico&display=swap" rel="stylesheet">
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


.blog-image{
  width: 100%;
  height: 100%;
}

.blog-heading{
  font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: normal;
}

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
      <div class="col-lg-8 ftco-animate mx-auto">
        <!-- Blog Image -->

        <div class="text-center mb-4">
          <img src="{{ asset('uploads/' . $rec->image) }}" 
               alt="{{ $rec->heading }}" 
               class="img-fluid rounded blog-image">
        </div>

        <h2 class="mb-3 text-white blog-heading">{{ $rec->heading }}</h2>
        <p>{{ $rec->blog }}</p>

        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">Life</a>
            <a href="#" class="tag-cloud-link">Sport</a>
            <a href="#" class="tag-cloud-link">Tech</a>
            <a href="#" class="tag-cloud-link">Travel</a>
          </div>
        </div>

        

<!-- Comments Section -->
       <div class="pt-5 mt-5">
  <h3 class="mb-5 text-white">
    <span id="commentCount">{{ $comments->count() }}</span> comments
  </h3>

  <ul id="commentList" class="comment-list">
    @foreach($comments as $c)
      <li class="comment" id="comment-{{ $c->id }}">
        <div class="comment-body">
          <h3 class="text-white">{{ $c->user->name }}</h3>
          <div class="meta cmtdt">
            {{ $c->created_at->format('F d, Y \a\t h:i A') }}
          </div>
          <p>{{ $c->message }}</p>
        @if(Auth::check() && Auth::id() === $c->user_id)
       <img src="{{ asset('clients/images/ChatGPT Image Aug 16, 2025, 12_08_41 PM.png') }}" 
     alt="Delete" 
     class="delete-comment" 
     data-id="{{ $c->id }}" 
     style="width:24px; height:24px; cursor:pointer;">
      @endif
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

</section>
<script>
    const deleteIcon = "{{ asset('clients/images/ChatGPT Image Aug 16, 2025, 12_08_41 PM.png') }}";
</script>
<!-- Make sure jQuery and SweetAlert are loaded first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
function escapeHtml(str) {
  return String(str)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;');
}

$(document).ready(function () {
  // ADD COMMENT
  $('#commentForm').submit(function(e) {
    e.preventDefault();

    $.ajax({
      url: "{{ route('comment.store') }}",
      method: "POST",
      dataType: "json",
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
          timer: 1200,
          showConfirmButton: false
        });

        const c = response.comment;

        // Build new comment HTML with delete image
        const newComment = `
          <li class="comment" id="comment-${c.id}">
            <div class="comment-body">
              <h3 class="text-white">${escapeHtml(c.username)}</h3>
              <div class="meta cmtdt">${escapeHtml(c.created_at)}</div>
              <p>${escapeHtml(c.message)}</p>

              <!-- delete image -->
              <img src="{{ asset('clients/images/ChatGPT Image Aug 16, 2025, 12_08_41 PM.png') }}" 
                   alt="Delete" 
                   class="delete-comment" 
                   data-id="${c.id}" 
                   style="width:24px; height:24px; cursor:pointer; margin-top:5px;">
            </div>
          </li>
        `;

        // Add to the top of the list
        $('#commentList').prepend(newComment);

        // Increase comment count
        const $count = $('#commentCount');
        $count.text(parseInt($count.text(), 10) + 1);

        // Reset form
        $('#commentForm')[0].reset();

        // Scroll to the new comment
        document.getElementById(`comment-${c.id}`).scrollIntoView({ 
          behavior: 'smooth', block: 'start' 
        });
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

  // DELETE COMMENT
  $(document).on('click', '.delete-comment', function () {
    const commentId = $(this).data('id');

    Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this comment?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "{{ url('/delete-comment') }}/" + commentId,
          type: 'DELETE',
          data: { _token: '{{ csrf_token() }}' },
          success: function (response) {
            Swal.fire({
              icon: 'success',
              title: 'Deleted!',
              text: response.success,
              timer: 1200,
              showConfirmButton: false
            });

            // remove comment from DOM
            $('#comment-' + commentId).fadeOut(500, function () {
              $(this).remove();

              // decrease comment count
              const $count = $('#commentCount');
              $count.text(parseInt($count.text(), 10) - 1);
            });
          },
          error: function (xhr) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: xhr.responseJSON?.error || "Something went wrong"
            });
          }
        });
      }
    });
  });
});
</script>




       @endsection 