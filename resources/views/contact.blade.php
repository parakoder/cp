@extends('layout')

@section('content')
<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Let's Get In Touch</h5>
            <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            <p class="">Saat ini Kami hanya melayani komunikasi via whatsapp. untuk pertemuan langsung dapat disesuaikan waktu dan tempat (Jakarta, Depok)</p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question (WA only)</h5>
                        <h4 class="text-primary mb-0">+62 813 8930 5438</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email to get free quote</h5>
                        <h5 class="text-primary mb-0"><a href="https://mail.google.com/mail/?view=cm&fs=1&to=marcom@parakoder.com&su=Lets Get In Touch" target="_blank">marcom@parakoder.com</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-map text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Visit our office (temporary)</h5>
                        <h5 class="text-primary mb-0">Jl. Akses UI, Tugu, Cimanggis, Depok</h5>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container py-5">
    <div class="row g-5 mb-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://maps.google.com/maps?q=Tugu,%20Kec.%20Cimanggis,%20Kota%20Depok,%20Jawa%20Barat&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
