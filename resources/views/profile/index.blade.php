@extends('layouts.main')
@section('title', 'Profile')
@section('content')
    <div class="breadcumb-area">
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">
                                About Me
                            </h2>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-us-area section-padding-100-0 clearfix" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 mt-s">
                    <div class="who-we-contant">
                        <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s">
                            <span class="gradient-text">
                                Cloud Based Development with
                            </span>
                        </div>
                        <h4 class="fadeInUp" data-wow-delay="0.3s">
                             Python, PHP, and JS.
                        </h4>
                        <p class="fadeInUp" data-wow-delay="0.4s" style="text-align: justify">
                            Full Stack Developer with over 7 years of experience in web development, specializing in
                            PHP, Laravel, CodeIgniter, Python, Django, JavaScript, VUE, Livewire, and REST APIs. I
                            possess excellent problem-solving skills and am a strong team player. Staying updated with
                            the latest digital trends is a must for me, and I am enthusiastic about integrating AI
                            technologies to drive innovation and enhance functionality in web development.
                        </p>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="side-feature-list-item">
                                    <img src="https://cdn-icons-png.flaticon.com/128/11524/11524065.png"
                                        class="check-mark-icon" alt="">
                                    <div class="foot-c-info">
                                        Websites & Portal - over 250 company websites
                                    </div>
                                </div>
                                <div class="side-feature-list-item">
                                    <img src="https://cdn-icons-png.flaticon.com/128/7892/7892621.png"
                                        class="check-mark-icon" alt="">
                                    <div class="foot-c-info">
                                        Customized Accounting Software
                                    </div>
                                </div>
                                <div class="side-feature-list-item">
                                    <img src="https://cdn-icons-png.flaticon.com/128/5230/5230997.png"
                                        class="check-mark-icon" alt="">
                                    <div class="foot-c-info">
                                        Overseas Employment Agency Management
                                    </div>
                                </div>
                                <div class="side-feature-list-item">
                                    <img src="https://cdn-icons-png.flaticon.com/128/1029/1029022.png"
                                        class="check-mark-icon" alt="">
                                    <div class="foot-c-info">
                                        Real Estate Management Software
                                    </div>
                                </div>
                                <div class="side-feature-list-item">
                                    <img src="https://cdn-icons-png.flaticon.com/128/1056/1056692.png"
                                        class="check-mark-icon" alt="">
                                    <div class="foot-c-info">
                                        Construction Management Software
                                    </div>
                                </div>

                                <div class="side-feature-list-item">
                                    <img src="https://cdn-icons-png.flaticon.com/128/15871/15871432.png"
                                        class="check-mark-icon" alt="">
                                    <div class="foot-c-info">
                                        Tender Managements Software
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12">
                    <div class="welcome-meter">
                        <img draggable="false" class="floating" src="https://images.unsplash.com/photo-1536104968055-4d61aa56f46a?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>









    <section class="darky how section-padding-100-70">
        <div class="container">
            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/img/svg/divider-01.svg') }}" width="100" class="mb-15" alt="divider">
                </div>

                <h2 class="fadeInUp" data-wow-delay="0.3s">
                    Best-in-class
                    Web & Mobile Consulting
                </h2>
                <p class="fadeInUp" data-wow-delay="0.4s" style="max-width: 100%;">
                    I have the right combination of skill set and experience to deliver high-quality software.
                    <br>
                    I am helping businesses turn their innovative ideas into reality.
                </p>
            </div>

            <div class="row">

                <div class="col-12 col-md-12 col-lg-12">
                    <a class='service_single_content grediant-borders box-shadow text-left wow fadeInUp'
                        data-wow-delay='0.2s' href='javascript::void(0)'>

                        <div class="service_icon v2">
                            <img draggable="false" src="{{ asset('assets/img/icons/1.png') }}" class="white-icon"
                                alt="">
                        </div>

                        <div class="service_content">
                            <h6>
                                Web Development
                            </h6>
                            <p>
                                I excel at building, delivering, and maintaining web applications. With my strong skills, I
                                can help you improve your existing web application or find the right solution. I keep up
                                with the changing technology and use the techniques and tools that actually work.
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <div class="section-padding-0-0">
        <div class="container pre-sale-bg">
            <div class="section-heading text-center">
                <h2>
                    Technologies & Skills
                </h2>
                <p class="w-text" style="width: 100%;">
                    I have extensive knowledge of the latest technologies to build a business-centric web application. Check
                    out my technical expertise to facilitate advanced full stack web application development:
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="fact-box count-box col-lg-3 col-xs-12">
                        <div class="inner">
                            <div class="icon-box">
                                <img src="{{ asset('assets/data/php-code.png') }}" alt="">
                            </div>
                            <div class="content">
                                <div class="count-outer">
                                    <span class="count-text ">
                                        PHP
                                    </span>
                                </div>
                                <div class="counter-title">
                                    Laravel, CI, Symfony
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fact-box count-box col-lg-3 col-xs-12 fact-box-xs">
                        <div class="inner">
                            <div class="icon-box">
                                <img src="{{ asset('assets/data/python.png') }}" alt="">
                            </div>
                            <div class="content">
                                <div class="count-outer">
                                    <span class="count-text">
                                        Python
                                    </span>
                                </div>
                                <div class="counter-title">
                                    Django, Flask
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fact-box count-box col-lg-3 col-xs-12 fact-box-sm">
                        <div class="inner">
                            <div class="icon-box">
                                <img src="{{ asset('assets/data/javascript.png') }}" alt="">
                            </div>
                            <div class="content">
                                <div class="count-outer">
                                    <span class="count-text">
                                        JS
                                    </span>
                                </div>
                                <div class="counter-title">
                                    React, VUE, Node
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fact-box count-box col-lg-3 col-xs-12 fact-box-sm">
                        <div class="inner">
                            <div class="icon-box">
                                <img src="{{ asset('assets/data/cloud-network.png') }}" alt="">
                            </div>
                            <div class="content">
                                <div class="count-outer">
                                    <span class="count-text">
                                        Tools
                                    </span>
                                </div>
                                <div class="counter-title">
                                    Server, DB, API, GIT
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
