<header id="home">
    <!-- Background Image -->
    <!-- /Background Image -->

    <!-- Nav -->
    <nav id="nav" class="navbar nav-transparent">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a href="">
                        <img class="logo" src="{{asset('images/front_end/logo.png')}}" alt="logo">
                        <img class="logo-alt" src="{{asset('images/front_end/logo-alt.png')}}" alt="logo">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Collapse nav button -->
                <div class="nav-collapse">
                    <span></span>
                </div>
                <!-- /Collapse nav button -->
            </div>

            <!--  Main navigation  -->
            <ul class="main-nav nav navbar-nav navbar-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <!-- /Main navigation -->

        </div>
    </nav>
    <!-- /Nav -->

    <!-- home wrapper -->
    <div class="container">
        <!-- Top Navigation -->
        <div id="boxgallery" class="boxgallery" data-effect="effect-1">
            @foreach($sliders as $slider)
            <div class="panel"><img src="{{asset('/images/back_end/slider/large/'.$slider->image)}}" alt="Image {{$slider->id}}"/></div>
             @endforeach

        </div>

    </div>
    <!-- /home wrapper -->

</header>