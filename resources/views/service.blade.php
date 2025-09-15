@extends('layout')

@section('content')
<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{$data->link_image}}" alt="">
                    <h1 class="mb-4">{{$data->sub_title}}</h1>
                    {!! $data->description !!}
                </div>
                <!-- Blog Detail End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <!-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div> -->
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Layanan Lainnya</h3>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{url('/service?service-id=web-development')}}"><i class="bi bi-arrow-right me-2"></i>Web Development</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{url('/service?service-id=mobile-development')}}"><i class="bi bi-arrow-right me-2"></i>Mobile App Development</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{url('/service?service-id=custom-development')}}"><i class="bi bi-arrow-right me-2"></i>Custom Software Development</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{url('/service?service-id=cloud-devops')}}"><i class="bi bi-arrow-right me-2"></i>Cloud Services & DevOps</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{url('/service?service-id=consulting-digital-strategy')}}"><i class="bi bi-arrow-right me-2"></i>IT Consulting & Digital Strategy</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{url('/service?service-id=qa-testing')}}"><i class="bi bi-arrow-right me-2"></i>Quality Assurance (QA) & Testing</a>
                    </div>
                </div>
                <!-- Category End -->
            </div>
            <!-- Sidebar End -->
        </div>
        <div class="row g-5">
            <!-- <h1 class="mb-4">{{$data->sub_title}}</h1>
            {!! $data->description !!} -->
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection