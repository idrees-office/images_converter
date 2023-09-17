@extends('layouts.app')
@section('content')
@section('title', 'Home Page')
<section class="toolsection">
    <div class="container">
        <div class="section-title">
            <h2>User-Friendly and Robust Image Editing Tools</h2>
            <p>Everything you need to work with Images more efficiently and productively.</p>
        </div>
        <div class="row">
            <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                    <div class="pic">
                        <img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="member-info">
                        <h4>JPG to PNG</h4>
                        <p>Converting an image from JPG to PNG is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('jpg-to-png') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic">
                        <img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="member-info">
                        <h4>JPG to JPEG</h4>
                        <p>Converting an image from JPG to JPEG is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('jpg-to-jpeg') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic">
                        <img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="member-info">
                        <h4>JPG to WEBP</h4>
                        <p>Converting an image from JPG to WEBP is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('jpg-to-webp') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic">
                        <img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="member-info">
                        <h4>JPG to HEIC</h4>
                        <p>Converting an image from JPG to HEIC is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{route('jpg-to-heic')}}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                    <div class="pic">
                        <img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="member-info">
                        <h4>PNG to JPG </h4>
                        <p>Converting an image from PNG to PNG is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('png-to-jpg') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="member-info">
                        <h4>PNG to JPEG</h4>
                        <p>Converting an image from PNG to JPEG is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('png-to-jpeg') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="member-info">
                        <h4>PNG to WEBP</h4>
                        <p>Converting an image from PNG to WEBP is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('png-to-webp') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="member-info">
                        <h4>PNG to HEIC</h4>
                        <p>Converting an image from PNG to HEIC is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('png-to-heic') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                    <div class="pic">
                        <img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="member-info">
                        <h4>JPEG to JPG </h4>
                        <p>Converting an image from JPEG to JPG is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('jpeg-to-jpg') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="member-info">
                        <h4>JPEG to PNG</h4>
                        <p>Converting an image from JPEG to PNG is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('jpeg-to-png') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="member-info">
                        <h4> JPEG to WEBP</h4>
                        <p>Converting an image from JPEG to WEBP is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('jpeg-to-webp') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset('assets/img/tools/jpg-to-png.webp') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="member-info">
                        <h4>JPEG to HEIC</h4>
                        <p>Converting an image from JPEG to HEIC is a transformation that changes the file format while
                            preserving the image's visual quality.</p>
                        <a href="{{ route('jpeg-to-heic') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="mb-4">Related Tools</h1>
        </div>
    </div>
    </div>
    {{-- <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="design-tab" data-bs-toggle="tab"
                        data-bs-target="#jpgTab" type="button" role="tab" aria-controls="jpgTab"
                        aria-selected="true">Jpg Converter</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="marketing-tab" data-bs-toggle="tab"
                        data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane"
                        aria-selected="false">Jpg to Png Converter</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane"
                        type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Webp
                        Converter</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane"
                        type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Gif
                        Converter</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                        data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane"
                        aria-selected="false">Resize Images</button>
                </li>
            </ul>
        </div>
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="jpgTab" role="tabpanel"
                        aria-labelledby="design-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <div class="d-flex">
                                            <div> <h5 class="mb-2">Compress IMAGE</h5> </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="#">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Resize IMAGE</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div> <h5 class="mb-2">Crop IMAGE</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Rotate IMAGE</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Graduation</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Graduation</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Graduation</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Graduation</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Graduation</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>
                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
</section>


<section class="timeline-section section-padding" id="section_3">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-white mb-4">How does it work?</h1>
            </div>

            <div class="col-lg-10 col-12 mx-auto">
                <div class="timeline-container">
                    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                        <div class="list-progress">
                            <div class="inner"></div>
                        </div>

                        <li>
                            <h4 class="text-white mb-3">Select a Tool or Software</h4>

                            <p class="text-white">There are numerous software applications, online tools, and programming libraries available that can perform this conversion. Some common options include</p>

                            <div class="icon-holder">
                                <i class="bi-search"></i>
                            </div>
                        </li>

                        <li>
                            <h4 class="text-white mb-3">Load &amp; or Upload the JPG Image</h4>

                            <p class="text-white">Depending on the tool you're using, you'll either open the JPG file in the software or upload it to the online converter.</p>

                            <div class="icon-holder">
                                <i class="bi-bookmark"></i>
                            </div>
                        </li>

                        <li>
                            <h4 class="text-white mb-3">Click the Upload &amp; Enjoy</h4>
                            <p class="text-white">Click the "Upload" button, and then wait for your images to be downloaded in a zip file after 2 minutes</p>

                            <div class="icon-holder">
                                <i class="bi-book"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- <div class="col-12 text-center mt-5">
                <p class="text-white">
                    Want to learn more?
                    <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                </p>
            </div> --}}
        </div>
    </div>
</section>

<section class="faq-section section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4">Frequently Asked Questions</h2>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-5 col-12">
                <img src="{{ asset('assets/images/faq_graphic.jpg')}}" class="img-fluid" alt="FAQs">
            </div>
            <div class="col-lg-6 col-12 m-auto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is an image converter ?
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                An image converter is a tool or software that changes the format of an image from one type to another, such as from JPG to PNG.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I use an online image converter?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To use an online image converter, visit a conversion website, upload your image, select the desired format, and click "Convert." Download the converted image when it's ready.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Why might I need to convert images?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                A3: Image conversion is useful for various purposes, including compatibility with different devices or software, reducing file size, or changing an image's characteristics, such as transparency.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="contact-section section-padding section-bg" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Get in touch</h2>
            </div>

            <div class="col-lg-5 col-12 mb-4 mb-lg-0">

                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14433.037165016929!2d55.32541979999999!3d25.2618616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sae!4v1694955395845!5m2!1sen!2sae" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto mt-5">
                <h4 class="mb-3">Lhore office</h4>
                <p>Bay St &amp; johar town Lahore</p>
                <hr>
                <p class="d-flex align-items-center mb-1">
                    <span class="me-2">Phone</span>
                    <a href="tel:+923237077" class="site-footer-link">
                        305-240-9671
                        
                    </a>
                </p>
                <p class="d-flex align-items-center">
                    <span class="me-2">Email</span>
                    <a href="mailto:info@lovely-img.com" class="site-footer-link">
                        info@lovely-img.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mx-auto mt-5">
                <h4 class="mb-3">Dubai office</h4>
                <p>Deria Dubai</p>
                <hr>
                <p class="d-flex align-items-center mb-1">
                    <span class="me-2">Phone</span>
                    <a href="tel: 110-220-3400" class="site-footer-link"> 110-220-3400</a>
                </p>
                <p class="d-flex align-items-center">
                    <span class="me-2">Email</span>
                    <a href="mailto:info@lovely-img.com" class="site-footer-link"> info@lovely-img.com</a>
                </p>
            </div>

        </div>
    </div>
</section> --}}




@endsection