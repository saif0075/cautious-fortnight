@extends('layouts.passion-layout')


@section('title', 'Passions Jeans')


@section('content')



    <div class="site-section" id="overview-section">

        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <figure class="block-img-video-1" data-aos="fade">


                    <img src="{{URL::asset('assets/images/overview.jpg')}}" alt="Overview" class="img-fluid">

                </figure>
            </div>
            <div class="col-lg-5 "  style="margin-left: none">
                <h2 class="text-primary mb-4" >Welcome to PassionsJeans</h2>
                <p>Passions Jeans, 100% exports oriented denim fancy garments manufacturer is now producing around 25000 unit pants every day.</p>

                <p>  Very recently the Group started a modern world standard Washing Plant for both dry process and wet process. Modern front-loading machines have been considered for the project, which delivered high quality and low cost operation required for the high-end retailers.</p>

                <p> The company procured the most modern machines and state-of-the-art technology to finish and wash denim products in the most efficient and productive manner.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
                <span class="number"><span data-number="15">0</span></span>
                <span class="caption">Year of Experience</span>
            </div>
        </div>
        <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
                <span class="text"><span data-number="">Textile</span></span>
                <span class="caption">Industry</span>
            </div>
        </div>
        <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
                <span class="number"><span data-number="5000">5000</span></span>
                <span class="caption">Number of Employees</span>
            </div>
        </div>
        <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
                <span class="text"><span data-number="">Denim</span></span>
                <span class="caption">Speciality</span>
            </div>
        </div>
    </div>

    </div>


@endsection