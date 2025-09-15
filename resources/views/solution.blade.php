@extends('layout')

@section('content')
<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <img class="img-fluid w-100 rounded mb-5" src="{{$data->link_image}}" alt="{{$data->sub_title}}">
                <h2 class="mb-4">{{$data->sub_title}}</h2>
                {!! $data->description !!}
            </div>
            <div class="col-lg-5">
                <div class="row g-4">
                    @foreach($features as $feature)
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <div class="icon me-3">
                                <i class="{{ $feature->fa_icon }}"></i>
                            </div>
                            <div class="text">
                                <h5>{{ $feature->title }}</h5>
                                <p class="mb-0">{{ $feature->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="mb-4">Why Businesses Choose Parakoder Smart Analytics</h2>
        </div>
        <div class="row g-4 text-center">
            @foreach($advantages as $advantage)
            <div class="col-md-4 wow zoomIn" data-wow-delay="{{ 0.2 + ($loop->index * 0.2) }}s">
                <div class="d-flex flex-column align-items-center">
                    <i class="{{ $advantage->fa_icon }}"></i>
                    <h5 class="mt-2">{{ $advantage->title }}</h5>
                    <p class="mb-0">{{ $advantage->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- FAQ -->
<!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="mb-4">Frequently Asked Questions</h2>
        </div>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        How does Smart Analytics handle data security?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our platform uses end-to-end encryption and adheres to strict data privacy standards to ensure all your business data is secure. We also provide user-access controls to manage who can view and modify data.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Can I customize my dashboard?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, Parakoder Smart Analytics offers full customization. You can create personalized dashboards by dragging and dropping widgets, charts, and graphs to visualize the metrics that matter most to your business.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What kind of support is available?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We provide a range of support options, including 24/7 technical assistance, a comprehensive knowledge base, and a dedicated account manager to assist with any questions or issues you may have.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Blog End -->
@endsection