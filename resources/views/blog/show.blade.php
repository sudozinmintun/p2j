@extends('layouts.main')
@section('title', 'Blog')
@section('content')

    <section class="blog-details-section pt-120 pb-120 mt-10 mt-lg-0">
        <div class="container">
            <div class="mb-8 mb-md-15">
                <div data-aos="fade-left" class="aos-init aos-animate">
                    <h3 class="n5-color fs-one">
                        {{$blog->title }}
                    </h3>
                    <div class="d-flex flex-wrap align-items-center gap-2 gap-md-3 mt-3">
                        <span class="n3-color fs-eight"> <span class="n4-color">{{ $blog->upload_date }}</span></span>
                        <ul class="d-flex align-items-center gap-3">
                            <li class="n3-color fs-eight">
                                <span class="n4-color">{{ $blog->category ?? '' }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="my-5 my-md-10 overflow-hidden">
                    <img src="{{$blog->photo}}" alt="..." class="blog-details-img">
                </div>

                <p class="details-description n5-color fs-eight">
                   {!! $blog->description !!}
                </p>
            </div>
            
        </div>
    </section>

@endsection
