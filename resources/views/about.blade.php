@extends('layout')

@section('content')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">Digitize Almost Everything!</h1>
                </div>
                <p class="mb-4">Parakoder is an IT solution dedicated to the digitalization of various processes to create convenience for business owners and organizations. We strive to provide digital solutions that make existing processes more effective and efficient.</p>
                <p class="mb-4">Parakoder initially started as a software house that was involved in various software development projects. Now, Parakoder has transformed into an IT Solution company that aims to participate in the digital evolution.</p>
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Our Values</h5>
                </div>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Client Focus</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Quality</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Integrity</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Proactive</h5>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Meet The Founders</h5>
                </div>
                <div class="row g-4 text-center">
                    <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/p1.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Syafril Rahimansyah</h4>
                                <h6 class="small mt-3">Founder | Head of Project</h6>
                                <p class="text-muted small mt-2">Manages the technical vision and project execution at Parakoder. Leads our development teams and collaborates with clients.</p>
                                <a href="https://www.linkedin.com/in/syafril-rahimansyah-241378148/" target="_blank" class="text-primary mt-3 d-inline-block">
                                    <i class="fab fa-linkedin fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/p2.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Satrio Nugroho</h4>
                                <h6 class="small mt-3">Co-Founder | Head of Product</h6>
                                <p class="text-muted small mt-2">The visionary behind our solutions. Focuses on product strategy and UI/UX to identify new business opportunities.</p>
                                <a href="https://www.linkedin.com/in/satrio-nugroho-30b87214b/" target="_blank" class="text-primary mt-3 d-inline-block">
                                    <i class="fab fa-linkedin fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/p3.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Twin Edo</h4>
                                <h6 class="small mt-3">Co-Founder | Technical Lead</h6>
                                <p class="text-muted small mt-2">Ensures every user interface is robust and intuitive. Excels at collaborating with our network of freelance developers.</p>
                                <a href="https://www.linkedin.com/in/twinedo/" target="_blank" class="text-primary mt-3 d-inline-block">
                                    <i class="fab fa-linkedin fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection