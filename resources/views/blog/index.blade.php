@extends('layouts.main')
@section('title', 'Blog')
@section('content')

    <section class="pt-120 pb-120 mt-10 mt-lg-0">
        <div class="pb-60 br-bottom-n3">
            <div class="container">
                <div data-aos="zoom-in" class="page-heading">
                    <h3 class="page-title fs-onefw-semibold n5-color mb-2 mb-md-3 text-center">
                        A Blog About Software Development And Life
                    </h3>
                    <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                        Welcome to my blog. Subscribe and get my latest blog post in
                        your inbox.
                    </p>
                    <form class="d-flex flex-wrap flex-sm-nowrap gap-3 gap-md-6">
                        <input placeholder="Enter your email" class="brn4 px-4 px-md-8 py-2 py-md-4 rounded-pill n5-color" />
                        <button
                            class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto h-100 flex-shrink-0">
                            <i class="ph ph-paper-plane-tilt"></i>Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- blog card  -->
        <div class="container">
            <div class="row g-5 g-md-10 mt-5">
                @foreach ($blogs as $blog)
                    <div data-aos="fade-up" data-aos-duration="700" class="col-sm-6 col-xxl-4">
                        <a href="{{ route('blog.show', Str::slug($blog->title)) }}" class="blog-card">
                            <div class="blog-img rounded-3 overflow-hidden">
                                <img src="{{ $blog->photo ?? '' }}" alt="blog" class="rounded-3 w-full" />
                            </div>
                            <div class="pt-4 pt-md-8 px-3 px-md-5">
                                <div class="d-flex align-items-center gap-3 mb-2 mb-md-3">
                                    <span class="n4-color fs-eight">{{ $blog->upload_date ?? '' }}</span>
                                    <span class="p1-color fs-eight">/</span>
                                    <span class="n4-color fs-eight">{{ $blog->category ?? '' }}</span>
                                </div>
                                <h4 class="blog-title fs-five n5-color fw-semibold">
                                    {{ $blog->title ?? '' }}
                                </h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
