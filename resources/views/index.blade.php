@extends('layouts.master', ['title' => "Home"])



@section('content')

<div class="jumbotron d-flex align-items-center">
  <div class="container text-center">
    <p class="display-1 mb-4"><d style="color:#ff00cc;">ID</d>soft</p>
  </div>
  <div class="rectangle-1"></div>
  <div class="rectangle-2"></div>
  <div class="rectangle-transparent-1"></div>
  <div class="rectangle-transparent-2"></div>
  <div class="circle-1"></div>
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="triangle triangle-1">
  	<img src="img/obj_triangle.png" alt="">
  </div>
  <div class="triangle triangle-2">
  	<img src="img/obj_triangle.png" alt="">
  </div>
  <div class="triangle triangle-3">
  	<img src="img/obj_triangle.png" alt="">
  </div>
  <div class="triangle triangle-4">
  	<img src="img/obj_triangle.png" alt="">
  </div>
</div>	<!-- Features Section-->
<section id="features" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class="section-title">
                 @lang('home.home1')
                </h2>
                <p class="section-sub-title"><br>@lang('home.home2')</p>
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Features Holder-->
                <div class="col-md-10 offset-md-1 features-holder">
                    <div class="row">
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-12 text-center mt-4">
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-cog fs-40"></i>
                                </div>
                                <h4>@lang('home.home3') </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-frame-contract fs-40"></i>
                                </div>
                                <h4>@lang('home.home6')</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <!-- End of Feature Item -->
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-12 text-center">
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-bubble fs-40"></i>
                                </div>
                                <h4>@lang('home.home4')</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-magic-wand fs-40"></i>
                                </div>
                                <h4>@lang('home.home7')</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <!-- End of Feature Item -->
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-12 text-center mt-4">
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-clock fs-40"></i>
                                </div>
                                <h4>@lang('home.home5')</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                            <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                <div class="my-4">
                                    <i class="lnr lnr-thumbs-up fs-40"></i>
                                </div>
                                <h4>@lang('home.home8')</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <!-- End of Feature Item -->
                    </div>
                </div>
                <!-- End of Features Holder-->
            </div>
        </div>
    </div>
</section>

<!-- End of Features Section-->
<section id="section-featurettes" class="featurettes overlay bg-fixed" style="background-image: url(img/bg.jpg);">

    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center text-white">

                        <div class="col-md-4 offset-md-2 col-sm-6" data-aos="fade-right">
                            <h4 class="mb-4">@lang('home.home11')</h4>
                            <p>Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet.</p>
                            <button type="button" class="btn btn-outline-primary">FEATURES</button>
                        </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                        <div class="col-md-4 offset-md-right-2 col-sm-6" data-aos="flip-right">
                            <img class="my-5" src="img/app-profile-mockup.png" alt="">
                        </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                    </div><!--/ .featurettes-item -->

                </div><!--/ .col-md-12 -->

            </div><!--/ .row -->
        </div>
    </div><!--/ .container -->

</section>	
<section id="section-featurettes" class="featurettes">

    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">

                        <div class="col-md-4 offset-md-2 col-sm-6" data-aos="flip-left">
                            <img class="my-5" src="img/app-profile-mockup.png" alt="">
                        </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                        <div class="col-md-4 offset-md-right-2 col-sm-6" data-aos="fade-left">
                            <h4 class="mb-4">Har bir daqiqani suratga oling va uni barcha do'stlaringizga ulashing</h4>
                            <p>Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet.</p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">HTML5 95%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">CSS3 90%</div>
                            </div>
                        </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                    </div><!--/ .featurettes-item -->

                </div><!--/ .col-md-12 -->

            </div><!--/ .row -->
        </div>
    </div><!--/ .container -->

</section>	<!-- Testimonial Section-->
<section id="testimonial" class="section-padding bg-fixed bg-white overlay" style="background-image: url(img/bg-white.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="heading-section text-center">
                <h2>
                    @lang('home.home9')
                </h2>
            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <h4 class="testi-text"><b>ID soft</b> bu men hozirgacha ishlatgan eng yaxshi mavzu. <br> Bu men kabi bilimlarni kodlamaydigan bolalar uchun juda mos!</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="img/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">John Doe</p>
                                <p class="testi-desc mb-0">Web Designer</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <h4 class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci <br> non doloribus ut, alias doloremque perspiciatis.</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="img/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">John Doe</p>
                                <p class="testi-desc mb-0">Web Designer</p>
                            </div>
                        </div>
                    </div>
                     <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <h4 class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci <br> non doloribus ut, alias doloremque perspiciatis.</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="img/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">John Doe</p>
                                <p class="testi-desc mb-0">Web Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Testimonial -->
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap">
                <h2 class="section-title"> @lang('home.home10') </h2>
                <p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <br> pharetra augue. Donec id elit non mi.</p>
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Portfolio Holder -->
                <div class="col-md-12 portfolio-holder mt-3">
                    <!-- Btn Filter -->
                    <div class="filter-button-group btn-filter d-flex justify-content-center">
                        <a tabindex="0" class="is-checked" data-filter="*">@lang('home.home24')</a>
                        <a tabindex="0" data-filter=".minimalism"> @lang('home.home25') </a>
                        <a tabindex="0" data-filter=".vintage">@lang('home.home26')</a>
                        <a tabindex="0" data-filter=".creative">Ijodiy</a>
                    </div>
                    <!-- End of Btn Filter -->
                    <!-- Portfolio Content -->
                    <div class="grid-portfolio">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <!-- Portfolio Item -->
                        <div class="grid-item creative" data-aos="fade-up">
                       
                            <div class="grid-item-wrapper" style="margin: 5px">
                                <img src="storage/{{ $portfolio[0]->picture }}" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-6.jpg" title="Ship">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>{{ $portfolio[0]->name }}</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End of Portfolio Item -->
                    </div>
                    <!-- End of Portfolio Content -->
                </div>
                <!-- End of Portfolio Holder -->
            </div>
        </div>
    </div>
</section>
<!-- End of Portfolio Section -->	<!-- Client Section -->
<section id="client" class="overlay bg-fixed" style="background-image: url(img/bg.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row ">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="title-wrap mb-5">
                        <h2>@lang('home.home22')</h2>
                    </div>
                    <!-- End of Section Title -->
                </div>
                <!-- Client Holder -->
                <div class="col-md-12 client-holder">
                    <div class="client-slider owl-carousel">
                        <div class="client-item">
                            <img class="img-responsive" src="img/client.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/client.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/client.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/client.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/client.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/client.png" alt=" ">
                        </div>
                    </div>
                    <!-- End of Client Holder -->
                </div>
            </div>
        </div>
</section>
<!-- End of Client Section -->	<!-- Reservation Section -->
<section id="reservation" class="bg-white section-content">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-1 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <h2 class="mb-4">
                            @lang('home.home12')
                        </h2>
                    </div>
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="@lang('home.home15')">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="@lang('home.home17')">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="@lang('home.home18')"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">@lang('home.home14')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1" data-aos="fade-left">
                <h2 class="mb-4">
                    @lang('home.home13')
                </h2>
                <ul class="list-inline py-2">
                    <li class="list-inline-item text-center">
                        <span class="lnr fs-40 lnr-rocket"></span>
                        <p>@lang('home.home19')</p>
                    </li>
                    <li class="list-inline-item text-center">
                        <span class="lnr fs-40 lnr-magic-wand"></span>
                        <p>@lang('home.home20')</p>
                    </li>
                    <li class="list-inline-item text-center">
                        <span class="lnr fs-40 lnr-cog"></span>
                        <p>@lang('home.home21')</p>
                    </li>
                </ul>

               <!--  <a href="#" class="btn btn-link p-0">
                    <span>Hozir soting</span>
                    <span class="lnr lnr-arrow-right"></span>
                </a> -->
            </div>
        </div>
        
    </div>
</section>
<!-- End of Reservation Section -->	<!-- Features Section-->
<section id="cta" class="bg-fixed overlay" style="background-image: url(img/bg.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row">
               <!--  <div class="col-md-12 text-center">
                    <h2 class="mb-2"> Chiroyli veb-sayt yarating yoki ulardan milliontasi</h2>
                    <a class="btn btn-outline-primary btn-lg">XUSUSIYATLARI</a>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- End of Features Section--></div>

@endsection