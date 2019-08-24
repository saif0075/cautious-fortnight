@extends('layouts.passion-layout')


@section('title', 'Passions Jeans')


@section('content')







    <div class="pb-5" style="position: relative; z-index: 8;">
    <div class="container">
        <div class="row" style="margin-top: -50px;">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <img  src="{{URL::asset('assets/images/clients/celio.jpg')}}" alt="Celio" class="img-fluid mb-3">
                <h3 class="text-primary h4 mb-2">Celio</h3>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <img  src="{{URL::asset('assets/images/clients/h&m.png')}}" alt="H&M" class="img-fluid mb-3">
                <h3 class="text-primary h4 mb-2">H&M</h3>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <img src="{{URL::asset('assets/images/clients/j&j.jpeg')}}" alt="Jack&Jones" class="img-fluid mb-3">
                <h3 class="text-primary h4 mb-2">Jack & Jones</h3>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <img src="{{URL::asset('assets/images/clients/james.jpg')}}" alt="James" class="img-fluid mb-3">
                <h3 class="text-primary h4 mb-2">James</h3>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <img src="{{URL::asset('assets/images/clients/jules.jpg')}}" alt="Jules" class="img-fluid mb-3">
                <h3 class="text-primary h4 mb-2">Jules</h3>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <img src="{{URL::asset('assets/images/clients/p&b.png')}}" alt="Pull&Bear" class="img-fluid mb-3">
                <h3 class="text-primary h4 mb-2">Pull&Bear</h3>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <img src="{{URL::asset('assets/images/clients/review.png')}}" alt="Review" class="img-fluid mb-3">
                <h3 class="text-primary h4 mb-2">Review</h3>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <img src="{{URL::asset('assets/images/clients/smog.jpg')}}" alt="Smog" class="img-fluid mb-3">
                <h3 class="text-primary h4 mb-2">Smog</h3>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <img src="{{URL::asset('assets/images/clients/zara.png')}}" alt="Zara" class="img-fluid mb-3">
                <h3 class="text-primary h4 mb-2">Zara</h3>
            </div>

        </div>
    </div>
</div>


@endsection