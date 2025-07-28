@extends('clients.navbar')
@section('content')
    <style> 
    body{
      background: linear-gradient(135deg, #2d0050ff, #161616ff) !important;
    }
    .overlay{
      background: rgba(255, 255, 255, 0) !important ;
    }
    .bte{
      color: #9e9d9dff !important;
    }
    /* .meta1:hover{
      color: #9500f9ff !important;    
    } */
    .blog-entry{
      background: #7a7a7a28 !important;
      
    }
    .blog-entry:hover .meta span {
     color: #ffffffff !important; /* Example: purple */
  transition: color 0.3s;
}



    </style>
    <section class="hero-wrap hero-wrap-2 bgimgb" style="background-image: url('clients/images/Flux_Dev_Create_an_image_depicting_a_serene_and_professional_c_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container ">
        <div class="row no-gutters slider-text align-items-end justify-content-center ">
          <div class="col-md-9 ftco-animate mb-5 text-center ">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/" class="bte">Home <i class="fa fa-chevron-right bte"></i></a></span></p> 
            
            <h1 class="mb-0 bread text-white">Our Blog</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ">
      <div class="container ">
        <div class="row d-flex ">
        @foreach ($rec as $r)
    <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
            <div class="text text-center">
                <a href="#" class="block-20 img post-link" data-id="{{$r->id}}" style="background-image: url('{{ asset('uploads/' . $r->image) }}');"></a>
<form id="postForm" method="POST" style="display: none;">
    @csrf
</form>
                </a>
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                    <div>
                        <span class="day text-dark">{{ $r->created_at->format('d') }}</span>
                        <span class="mos">{{ $r->created_at->format('F') }}</span>
                        <span class="yr text-dark">{{ $r->created_at->format('Y') }}</span>
                    </div>
                </div>
                <h3 class="heading mb-3">
                    <a href="#" class="text-white">{{ $r->heading }}</a>
                </h3>
            </div>
        </div>
    </div>
@endforeach

         
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#" class="text-white">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#" class="text-white">2</a></li>
                <li><a href="#" class="text-white">3</a></li>
                <li><a href="#" class="text-white">4</a></li>
                <li><a href="#" class="text-white">5</a></li>
                <li><a href="#" class="text-white">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>	
<script>
    document.querySelectorAll('.post-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const form = document.getElementById('postForm');
            form.action = '/abc/' + this.getAttribute('data-id');
            form.submit();
        });
    });
</script>
    @endsection