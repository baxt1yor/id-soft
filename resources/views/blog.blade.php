@extends('layouts.master', ['title' => "Blog"])

@section('content')


	<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/bg.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">Blog</h1>
  </div>
</div>	<!-- Blog Section -->
<section id="blog" class="bg-grey">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class="section-title">So'nggi <b>yangiliklar</b></h2>
                <p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>
            <div class="row">
                <!-- Blog -->
                <div class="col-md-12 blog-holder">
                    <div class="row">
                
                    @foreach($posts as $post)
                        <!-- Blog Item -->
                        <div class="col-md-4 blog-item-wrapper" data-aos="fade-up">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="single.html"><img src="storage/{{ $post->image }}" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-tag">
                                        <a href="#"><h6><small>{{ $post->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale') }}</small></h6></a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="single.html"><h4>{{ $post->getTranslatedAttribute('title', app()->getLocale(), "fallbackLocale") }}</h4></a>
                                    </div>
                                    <div class="blog-meta">
                                        <p class="blog-date">{{ $post->created_at }}</p> /
                                        <p class="blog-comment"><a href="">23 Comments</a></p>
                                    </div>
                                    <div class="blog-desc">
                                        <p>{!! $post->getTranslatedAttribute('body', app()->getLocale(), 'fallbackLocale') !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Item -->
                    @endforeach
              
                    </div>
                </div>
                <!-- End of Blog -->
            </div>
            <div style="margin-left: 1  00px">
                {{ $link }}
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Section -->	<!-- Features Section-->
<section id="cta" class="bg-fixed overlay" style="background-image: url(img/bg.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mb-2">Chiroyli veb-sayt yarating yoki ulardan milliontasi</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, veritatis qui eligendi delectus quia fuga!</p>
                    <a class="btn btn-outline-primary btn-lg">FEATURES</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection