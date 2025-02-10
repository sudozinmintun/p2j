@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

    <section class="pt-120 pb-60 br-bottom-n3 overflow-hidden mt-10 mt-lg-0">
        <div class="container">
            <div class="d-flex flex-wrap gap-10 gap-md-15 align-items-center justify-content-between">
                <div class="banner-content">
                    <span class="n5-color fs-five">HI, I'M A FREELANCER</span>
                    <h2 class="typing-text display-one p1-color mt-2 mb-3"></h2>

                    <p class="fs-seven n5-color">
                        I'm a software developer specializing in scalable web & mobile apps.
                        Explore my
                        <a href="{{ route('blog.index') }}" class="p1-color"> blog</a>,
                        <a href="{{ route('client.index') }}" class="p1-color">
                            project portfolio
                        </a>
                        and
                        <a href="{{ route('resume') }}" class="p1-color">online resume</a>.
                    </p>

                    <div class="d-flex flex-wrap align-itmes-center gap-3 gap-md-6 mt-4 mt-md-8">
                        <a href="{{ route('client.index') }}"
                            class="primary-btn px-3 px-md-6 py-2 py-md-4 fw-medium rounded-pill d-flex align-items-center gap-2">
                            <i class="ph ph-arrow-right"></i>
                            View Clients
                        </a>

                        <a href="{{ route('resume') }}"
                            class="primary-btn2 fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2">
                            <img src="assets/images/resume-icon.png" alt="icon" />
                            View Resume
                        </a>
                    </div>
                </div>

                <div class="position-relative profile-img">
                    <div class="user-bg"></div>
                    <div class="bg-white">
                        <img src="{{ asset('assets/images/photo.jpg') }}" alt="user" class="user-img"
                            style="width: 100%; height: 400px; background-size: contain; object-fit: cover; object-position: top" />
                    </div>
                </div>
            </div>

            <!-- counter -->
            <div class="banner-counter d-flex flex-wrap flex-xl-nowrap align-items-center gap-3 gap-md-6 mt-10 mt-md-17">
                <div class="d-flex align-items-center gap-2 gap-xl-4">
                    <h2 class="display-two fw-semibold p1-color">
                        <span class="counter">8</span>
                    </h2>
                    <div class="line"></div>
                    <span class="n5-color">Years of Experience</span>
                </div>

                <div class="d-flex align-items-center gap-2 gap-xl-4">
                    <h2 class="display-two fw-semibold p1-color">
                        <span class="counter">210</span>
                    </h2>
                    <div class="line"></div>
                    <span class="n5-color">Projects Completed</span>
                </div>

                <div class="d-flex align-items-center gap-2 gap-xl-4">
                    <h2 class="display-two fw-semibold p1-color d-flex gap-1">
                        <span class="counter">100+</span>
                    </h2>
                    <div class="line"></div>
                    <span class="n5-color">Clients Worldwide</span>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-120 pb-120">
        <div class="container">
            <div class="d-flex gap-3 flex-wrap flex-xxl-nowrap justify-content-between align-items-end pb-60">
                <div data-aos="zoom-in-left" class="section-heading">
                    <div class="d-flex align-items-center gap-2">
                        <div class="title-line"></div>
                        <h2 class="display-four n5-color fw-semibold">What I do</h2>
                    </div>
                    <p class="fs-seven n4-color mt-2 mt-md-4">
                        I have more than 8 years' experience building software for
                        clients all over the world. Below is a quick overview of my
                        main technical skill sets and technologies I use. Want to find
                        out more about my experience? Check out my
                        <a href="{{ route('resume') }}" class="p1-color">online resume</a> and
                        <a href="{{ route('client.index') }}" class="p1-color">project portfolio</a>.
                    </p>
                </div>

                <a href="{{ route('services') }}" data-aos="zoom-in-right"
                    class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 h-100 text-nowrap">
                    <i class="ph ph-arrow-right"></i>
                    Services & Pricing
                </a>

            </div>

            <div class="row g-3 g-md-6">
                <div data-aos="fade-up" data-aos-duration="600" class="col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('assets/images/js.png') }}" alt="javascript" class="service-icon" />
                            <img src="{{ asset('assets/images/react.png') }}" alt="react" class="service-icon" />
                            <img src="{{ asset('assets/images/vue.png') }}" alt="vue" class="service-icon" />
                        </div>
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            JavaScript, React & Vue
                        </h4>
                        <p class="fs-seven n4-color">
                            Developing dynamic web applications using modern JavaScript frameworks to create interactive
                            user interfaces.
                        </p>
                    </div>
                </div>


                <div data-aos="fade-up" data-aos-duration="800" class="col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <img src="{{ asset('assets/images/python.png') }}" alt="python" class="service-icon" />
                        <img src="{{ asset('assets/images/django-icon.svg') }}" alt="django" class="service-icon"
                            style="width: 28px;" />
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            Python & Django
                        </h4>
                        <p class="fs-seven n4-color">
                            Building robust server-side applications with Python and Django, ensuring efficient and scalable
                            backend solutions.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="500" class="col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <img src="{{ asset('assets/images/php.png') }}" alt="php" class="service-icon" />
                        <img src="{{ asset('assets/images/laravel.svg') }}" alt="laravel" class="service-icon"
                            style="width: 28px;" />
                        <img src="{{ asset('assets/images/codeigniter.svg') }}" alt="codeigniter" class="service-icon"
                            style="width: 29px;" />
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            PHP, Laravel & Codeigniter
                        </h4>
                        <p class="fs-seven n4-color">
                            Crafting dynamic web applications using PHP with frameworks like Laravel and CodeIgniter for
                            rapid development.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="700" class="col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <div class="d-flex gap-3">
                            <img src="{{ asset('assets/images/html.png') }}" alt="html" class="service-icon" />
                            <img src="{{ asset('assets/images/css.png') }}" alt="css" class="service-icon" />
                        </div>
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            HTML, CSS & Web Design
                        </h4>
                        <p class="fs-seven n4-color">
                            Designing responsive and visually appealing websites using HTML and CSS, focusing on user
                            experience and accessibility.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="800" class="col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <div class="d-flex gap-3">
                            <img src="{{ asset('assets/images/database.svg') }}" alt="database" class="service-icon"
                                style="width: 29px;" />
                        </div>
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            Database
                        </h4>
                        <p class="fs-seven n4-color">
                            Managing and optimizing databases to ensure efficient data storage, retrieval, and integrity for
                            applications.
                        </p>
                    </div>
                </div>


                <div data-aos="fade-up" data-aos-duration="800" class="col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <div class="d-flex gap-3">
                            <img src="{{ asset('assets/images/settings-seo-and-web.svg') }}" alt="sass"
                                class="service-icon" style="width: 29px;" />
                        </div>
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            Tools
                        </h4>
                        <p class="fs-seven n4-color">
                            Using GIT for version control, managing domains, hosting, cPanel, and DNS for smooth deployment
                            and maintenance.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="next-project pt-120 pb-120">
        <div class="container d-flex gap-3 gap-md-6 flex-wrap justify-content-between align-items-center">
            <div data-aos="zoom-in-left" class="next-project-content">
                <h3 class="display-four n11-color fw-semibold mb-2 mb-md-4">
                    Let’s Work together on your next Project
                </h3>
                <p class="fs-seven n11-color">
                    I am available for freelance projects. Hire me and get your
                    project done.
                </p>
            </div>
            <a data-aos="zoom-in-right" href="{{ route('contact.index') }}"
                class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 h-100">
                <i class="ph ph-arrow-right"></i>Let’s get in touch
            </a>
        </div>
    </section>

    <section class="projects-section pt-120 pb-120 br-bottom-n3">
        <div class="container">
            <div class="d-flex gap-3 flex-wrap flex-xxl-nowrap justify-content-between align-items-end mb-8 mb-md-15">
                <div data-aos="zoom-in-left" class="section-heading">
                    <div class="d-flex align-items-center gap-2">
                        <div class="title-line"></div>
                        <h2 class="display-four n5-color fw-semibold">
                            Featured Projects
                        </h2>
                    </div>
                    <p class="fs-seven n4-color mt-2 mt-md-4">
                        My step-by-step guide ensures a smooth project journey, from
                        the initial consultation to the final delivery. I take care of
                        every detail, allowing you to focus on what you do best.
                    </p>
                </div>
                <a data-aos="zoom-in-right" href="{{ route('client.index') }}"
                    class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 h-100 text-nowrap">
                    <i class="ph ph-arrow-right"></i>View Portfolio
                </a>
            </div>

            <div class="row g-6 g-md-8">
                @foreach ($clients as $client)
                    <div data-aos="fade-up" data-aos-duration="800" class="col-xl-6">
                        <div class="project-card">

                            <a href="{{ $client->link }}" class="thumb d-block" target="_blank">
                                <div class="post-thumb">
                                    <div class="post-thumb-inner">
                                        <img src="{{ $client->photo }}" alt="..." class="w-100 p-2" />
                                    </div>
                                </div>
                                <div class="post-thumb">
                                    <div class="post-thumb-inner">
                                        <img src="{{ $client->photo }}" alt="..." class="w-100 p-2" />
                                    </div>
                                </div>
                            </a>

                            <div class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
                                <div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="{{ $client->link }}"
                                            class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium" target="_blank">
                                            {{ $client->title }}
                                        </a>
                                    </div>

                                    <a href="{{ $client->link }}"
                                        class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block" target="_blank">
                                        {!! $client->description !!}
                                    </a>
                                </div>

                                <a href="{{ $client->link }}"
                                    class="project-link d-flex align-items-center justify-content-center flex-shrink-0" target="_blank">
                                    <i class="ph-bold ph-arrow-up-right n5-color"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
