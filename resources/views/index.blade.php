@extends('layouts.front_layout.front_design')
@section('content')
<div id="about" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Welcome to Website</h2>
            </div>
            <!-- /Section header -->

            <!-- about -->
            @foreach($about as $abo)
            <div class="col-md-4">
                <div class="about">
                    <h3>{{$abo->title}}</h3>
                    <p>{{$abo->title}}</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            @endforeach
            <!-- /about -->


            <!-- /about -->

            <!-- about -->

            <!-- /about -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>

<div id="portfolio" class="section md-padding bg-grey">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Featured Works</h2>
            </div>
            <!-- /Section header -->

            <!-- Work -->
            @foreach($works as $work)
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{asset('/images/back_end/works/large/'.$work->image)}}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>{{$work->title}}</span>
                    <h3>{{$work->desc}}</h3>
                    <div class="work-link">
                        <a href="#"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{asset('/images/back_end/works/large/'.$work->image)}}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /Work -->

            <!-- Work -->

            <!-- /Work -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>

<div id="service" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">What we offer</h2>
            </div>
            <!-- /Section header -->

            <!-- service -->
            @foreach($services as $service)
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-diamond"></i>
                    <h3>{{$service->title}}</h3>
                    <p>{{$service->desc}}</p>
                </div>
            </div>
            <!-- /service -->
            @endforeach

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>

<div id="testimonial" class="section md-padding">

    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('images/front_end/background3.jpg');">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Testimonial slider -->
            <div class="col-md-10 col-md-offset-1">
                <div id="testimonial-slider" class="owl-carousel owl-theme">

                    <!-- testimonial -->
                    @foreach($tests as $test)
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <img src="{{asset('/images/back_end/testimonal/large/'.$test->image)}}" alt="">
                                <h3 class="white-text">{{$test->FName}}</h3>
                                <span>{{$test->status}}</span>
                            </div>
                            <p class="white-text">{{$test->desc}}</p>
                        </div>
                @endforeach
               </div>
            </div>
         </div>
     </div>
    <!-- /Container -->

</div>

<div id="team" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Our Team</h2>
            </div>
            <!-- /Section header -->

            <!-- team -->
            @foreach($teams as $team)
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="{{asset('/images/back_end/team/large/'.$team->image)}}" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="{{$team->facebook}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$team->Googleplus}}"><i class="fa fa-google-plus"></i></a>
                                <a href="{{$team->twitter}}"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>{{$team->FName}}</h3>
                        <span>{{$team->status}}</span>
                    </div>
                </div>
            </div>
            <!-- /team -->
@endforeach
            <!-- team -->

            <!-- /team -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>

<div id="contact" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section-header -->
            <div class="section-header text-center">
                <h2 class="title">Get in touch</h2>
            </div>
            <!-- /Section-header -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-phone"></i>
                    <h3>Phone</h3>
                    <p>512-421-3940</p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-envelope"></i>
                    <h3>Email</h3>
                    <p>email@support.com</p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-map-marker"></i>
                    <h3>Address</h3>
                    <p>1739 Bubby Drive</p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact form -->
            <div class="col-md-8 col-md-offset-2">
                <form class="contact-form">
                    <input type="text" class="input" placeholder="Name">
                    <input type="email" class="input" placeholder="Email">
                    <input type="text" class="input" placeholder="Subject">
                    <textarea class="input" placeholder="Message"></textarea>
                    <button class="main-btn">Send message</button>
                </form>
            </div>
            <!-- /contact form -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
@endsection