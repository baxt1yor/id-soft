@extends('layouts.master', ['title' => "Biz haqimizda"])

@section('content')
    <div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/bg.jpg)">
        <div class="container text-center">
            <h1 class="display-2 mb-4">Biz haqimizda</h1>
        </div>
    </div>
    <section id="who-we-are" class="bg-white">
        <div class="container">
            <div class="section-content">
                <div class="title-wrap" data-aos="fade-up">
                    <h2 class="section-title">Eng oson yo'li Internetda <b>veb-saytlarni</b> yaratish</h2>
                    <p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                        Nulla vitae elit libero, a <br> pharetra augue. Donec id elit non mi porta gravida at eget
                        metus.</p>
                </div>

                <div class="row text-center">
                    <div class="col-md-4 col-sm-6" data-aos="fade-up">
                        <img class="rounded-circle" src="img/icons/animat-checkmark.gif" alt="Generic placeholder image"
                            width="140" height="140">
                        <h5 class="mb-4">Oddiy va toza</h5>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                            ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-link" href="#" role="button">View details</a></p>
                    </div>
                    <!-- /.col-md-4 col-sm-6  -->
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <img class="rounded-circle" src="img/icons/animat-customize.gif" alt="Generic placeholder image"
                            width="140" height="140">
                        <h5 class="mb-4">Moslashtirish oson</h5>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                            elit. Vestibulum id ligula porta felis.</p>
                        <p><a class="btn btn-link" href="#" role="button">View details</a></p>
                    </div>
                    <!-- /.col-md-4 col-sm-6  -->
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                        <img class="rounded-circle" src="img/icons/animat-responsive.gif"
                            alt="Generic placeholder image" width="140" height="140">
                        <h5 class="mb-4">To'liq javob beradi</h5>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum
                            id ligula porta felis euismod semper. </p>
                        <p><a class="btn btn-link" href="#" role="button">View details</a></p>
                    </div>
                    <!-- /.col-md-4 col-sm-6  -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </section>
    <section id="skills" class="bg-white">
        <div class="container">
            <div class="section-content pt-0">

                <div class="row">
                    <div class="col-md-6" data-aos="fade-right">
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>BACKEND</p>
                                <p class="text-muted">100%</p>
                            </div>
                            <div class="progress" data-percent="100%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                         <!-- Skill Item -->
                         <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>HTML5</p>
                                <p class="text-muted">90%</p>
                            </div>
                            <div class="progress" data-percent="90%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>CSS3</p>
                                <p class="text-muted">85%</p>
                            </div>
                            <div class="progress" data-percent="85%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>JQUERY</p>
                                <p class="text-muted">73%</p>
                            </div>
                            <div class="progress" data-percent="73%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="73" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>FrontEnd</p>
                                <p class="text-muted">100%</p>
                            </div>
                            <div class="progress" data-percent="100%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>Adobe Photoshop</p>
                                <p class="text-muted">80%</p>
                            </div>
                            <div class="progress" data-percent="80%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>Adobe Illustrator</p>
                                <p class="text-muted">60%</p>
                            </div>
                            <div class="progress" data-percent="60%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                        <!-- Skill Item -->
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <p>Wordpress</p>
                                <p class="text-muted">55%</p>
                            </div>
                            <div class="progress" data-percent="55%">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0"></div>
                            </div>
                        </div>
                        <!-- End Skill Item -->
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Features Section-->
    <section id="cta" class="bg-fixed overlay" style="background-image: url(img/bg.jpg);">
        <div class="container">
            <div class="section-content" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="mb-2">Chiroyli veb-sayt yarating yoki ulardan milliontasi</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, veritatis qui eligendi
                            delectus quia fuga!</p>
                        <a class="btn btn-outline-primary btn-lg">Xususiyatlari</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Features Section-->
    </div>
 @endsection