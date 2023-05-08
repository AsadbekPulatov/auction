@extends('layouts.master')
@section('content')
<!-- our protien  -->
<div id="protien" class="protien_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Protien</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="protien">
                    <figure><img src="{{asset('assets/images/pro1.png')}}" alt="#"/></figure>
                    <h3>$400</h3>
                    <span> Variations  </span>
                    <a class="read_more mar_top" href="Javascript:void(0)"> Buy Now</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="protien">
                    <figure><img src="{{asset('assets/images/pro2.png')}}" alt="#"/></figure>
                    <h3>$400</h3>
                    <span>  Passages  </span>
                    <a class="read_more mar_top" href="Javascript:void(0)"> Buy Now</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="protien">
                    <figure><img src="{{asset('assets/images/pro3.png')}}" alt="#"/></figure>
                    <h3>$400</h3>
                    <span> Variations </span>
                    <a class="read_more mar_top" href="Javascript:void(0)"> Buy Now</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="protien">
                    <figure><img src="{{asset('assets/images/pro4.png')}}" alt="#"/></figure>
                    <h3>$400</h3>
                    <span> Pedicure </span>
                    <a class="read_more mar_top" href="Javascript:void(0)"> Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end our protien  -->
<!-- about -->
<div id="about" class="about">
    <div class="container-fluid">
        <div class="row d_flex">
            <div class="col-md-6">
                <div class="titlepage">
                    <h2>About Us</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or</p>
                    <a class="read_more" href="Javascript:void(0)"> Read More</a>
                </div>
            </div>
            <div class="col-md-6 pad_right0">
                <div class="about_img ">
                    <figure><img src="{{asset('assets/images/about.png')}}" alt="#"/></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->


<!--  contact -->
<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Request a call back</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form id="request" class="main_form">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Email " type="type" name="Email ">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->
@endsection
