@extends('layouts.main')
@section('title', 'Clients')
@section('content')

    <section class="pt-120 pb-120 mt-10 mt-lg-0">
        <div class="pb-60 br-bottom-n3">
            <div data-aos="zoom-in" class="page-heading">
                <h3 class="page-title n5-color fs-onefw-semibold n5-color mb-2 mb-md-3 text-center">
                    A collection of my best projects
                </h3>
                <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                    With many years in web development, I acquired extensive
                    experience working on projects across multiple industries and
                    technologies. Let me show you my best creations.
                </p>

                <a href="{{ route('contact.index') }}"
                    class="w-max primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto">
                    <i class="ph ph-paper-plane-tilt"></i>Hire Me
                </a>
            </div>
        </div>

        <div class="container mt-8 mt-md-15">
            <div>

                <ul data-aos="zoom-in" data-aos-duration="800"
                    class="tabs d-flex gap-3 gap-md-6 justify-content-center flex-wrap p-2 pb-5 pb-md-10 aos-init aos-animate">

                    <li class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab active">
                        <a href="{{route('client.index')}}" style="font-weight: bold">
                            All
                        </a>
                    </li>

                    @foreach ($categories as $category)
                        <li class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab">
                            <a href="{{ route('client.index', ['type' => $category->id]) }}" style="font-weight: bold">
                                {{ $category->title ?? '' }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content position-relative overflow-hidden">
                    <div id="all" data-tab-content class="active">
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

                                        <div
                                            class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
                                            <div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <a href="{{ $client->link }}"
                                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium"
                                                        target="_blank">
                                                        {{ $client->title }}
                                                    </a>
                                                </div>

                                                <a href="{{ $client->link }}"
                                                    class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block"
                                                    target="_blank">
                                                    {!! $client->description !!}
                                                </a>
                                            </div>

                                            <a href="{{ $client->link }}"
                                                class="project-link d-flex align-items-center justify-content-center flex-shrink-0"
                                                target="_blank">
                                                <i class="ph-bold ph-arrow-up-right n5-color"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
