@extends('layouts.passion-layout')


@section('title', 'Passions Jeans')


@section('content')




<div class="site-section" id="about-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <figure class="block-img-video-1" data-aos="fade">


                        <img src="{{URL::asset('assets/images/about.jpg')}}" alt="About" class="img-fluid">

                </figure>
            </div>
            <div class="col-lg-5 ml-auto">
                <h2 class="text-primary mb-4">About Us</h2>
                <p>Passions Jeans, Ltd. Is one of the leading garment manufacturers in
                    Bangladesh with an annual turnover of US$ 15 million.</p>

                <p> Passions Jeans, Ltd. Is organized into two divisions:</p>

                <p> -Manufacturing Division based in Dhaka Bangladesh</p>

                <p> -Agent Division based in Hong Kong</p>

                <p> The factory has nearly 300 machines divided into 3 production lines
                    and a capacity of 105 - 135,000 pieces per month depending on design.
                    A fourth and fifth line are planned for 2005. Average delivery time is 80 days,
                    but for basic jeans, delivery is possible within 45 days.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <figure class="block-img-video-1" data-aos="fade">


                        <img src="{{URL::asset('assets/images/mission.jpg')}}" alt="Mission" class="img-fluid">

                </figure>
            </div>
            <div class="col-lg-5 ml-auto">
                <h2 class="text-primary mb-4">Our Mission</h2>
                <p>To innovate, to lead, to enhance, to provide best-value products and services to global customers.

                    To make a difference through our branding to stay ahead of fashion trends, market changes and the latest technology.

                    To enhance the quality of life for our business partners,customers and employees.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <figure class="block-img-video-1" data-aos="fade">


                    <img src="{{URL::asset('assets/images/vision.jpg')}}" alt="Vision" class="img-fluid">

                </figure>
            </div>
            <div class="col-lg-5 ml-auto">
                <h2 class="text-primary mb-4">Our Vision</h2>
                <p>We strive to be a global leader in fashion-woven and fashion outerwear
                    by empowering innovation
                    and design to provide total customer satisfaction.
                    We strive to be a caring and well-managed organization for our business partners ,customers and
                    employees, and a responsible corporate citizen to our society.</p>
                </div>
        </div>
    </div>
</div>


@endsection