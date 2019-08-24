@extends('layouts.passion-layout')


@section('title', 'Passions Jeans')


@section('content')



<div class="site-section bg-light" id="contact-section">
    <div class="container">


        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="block-heading-1">
                    <span>Get In Touch</span>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 mb-5">
                <h3 style="color: black">Head Office:</h3>
                <h4>Passions Apparels & Wears Ltd.</h4>
                <p style="color: black">Adress: House # 11/A, Rd 55, Dhaka 1212/p>
                <p style="color: black">Phone: 02-9863293</p>

            </div>

            <div class="col-md-6 mb-5">
                <h3 style="color: black">Factory:</h3>
                <h4>Passions Apparels & Wears Ltd.</h4>
                <p style="color: black">Adress: Tetuljhora, Rajfulbaria, Savar, Dhaka </p>

            </div>

        </div>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <form action="#" method="post">
                    {{ csrf_field() }}
                    <div class="row">
<h3>{{$message}}</h3>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 mb-5 mb-lg-0">
                            <input type="text" class="form-control" placeholder="Full name" name="full_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="Email address" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 ml-auto">
                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 mb-5 ">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14602.239862794962!2d90.411928!3d23.798679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x678188179d50b06d!2sPassion+Jeans+Ltd.!5e0!3m2!1sen!2sbd!4v1564949898717!5m2!1sen!2sbd" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
