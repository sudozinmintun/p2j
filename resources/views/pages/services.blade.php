@extends('layouts.main')
@section('title', 'Services & Pricing')
@section('content')

    <section class="pt-120 pb-120 br-bottom-n3 mt-10 mt-lg-0">
        <div class="pb-60 br-bottom-n3">
            <div data-aos="zoom-in" class="page-heading">
                <h3 class="page-title fs-onefw-semibold n5-color mb-2 mb-md-3 text-center">
                    Services & Pricing
                </h3>
                <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                    I have 8+ years of development experience building software for
                    the web and mobile devices. You can take a look at my
                    <a href="{{ route('resume') }}" class="p1-color">online resume</a> and
                    <a href="{{ route('client.index') }}" class="p1-color">project portfolio</a>
                    to find out more about my skills and experiences.
                </p>

                <a href="{{ route('contact.index') }}"
                    class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto w-max">
                    <i class="ph ph-paper-plane-tilt"></i>Hire Me
                </a>
            </div>
        </div>

        <div class="container mt-8 mt-md-15">
            <div data-aos="zoom-in" class="section-heading">
                <div class="d-flex align-items-center gap-2">
                    <div class="title-line"></div>
                    <h2 class="display-four n5-color fw-semibold">
                        Service Packages
                    </h2>
                </div>
                <p class="fs-seven n4-color mt-2 mt-md-4">
                    Explore the range of services I provide to help bring your
                    projects to life. From initial concept to final delivery, I am
                    committed to delivering high-quality results tailored to your
                    needs.
                </p>
            </div>

            <div class="mt-8 mt-md-15">
                <div class="row g-6">
                    <div data-aos="fade-up" data-aos-delay="700" class="col-sm-12 col-xl-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Service Tiers
                                        <br><br>
                                    </th>
                                    <th scope="col">
                                        Starter
                                        <br> $110
                                    </th>
                                    <th scope="col">
                                        Standard
                                        <br> $210
                                    </th>
                                    <th scope="col">
                                        Advanced
                                        <br> Customize
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Delivery Time
                                    </td>
                                    <td>
                                        3 days
                                    </td>
                                    <td>
                                        5 days
                                    </td>
                                    <td>
                                        - days
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Number of Pages
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        13
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Number of Revisions
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Design Customization
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Responsive Design
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Member Login / Register
                                    </td>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Roles & Permissions
                                    </td>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Multiple Languages
                                    </td>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Contact Form
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Addition Form (Booking, Service, Application)
                                    </td>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        5
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Admin Panel
                                    </td>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                    <td>
                                        Customize
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Maintenance support
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                    <td>
                                        Yes
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Domain / Hosting
                                    </td>
                                    <td>
                                        Addition Charges
                                    </td>
                                    <td>
                                        Addition Charges
                                    </td>
                                    <td>
                                        Addition Charges
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div data-aos="zoom-in" class="hire-content mt-8 mt-md-15">
                <h4 class="n5-color fs-three fw-semibold text-center mb-2 mb-md-4">
                    Big business starts from a small startup.
                </h4>
                <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                    Don't leave for tomorrow what you can order today.
                </p>
                <a href="{{ route('contact.index') }}"
                    class="w-max primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto">
                    <i class="ph ph-paper-plane-tilt"></i>Hire Me
                </a>
            </div>
        </div>
    </section>

@endsection
