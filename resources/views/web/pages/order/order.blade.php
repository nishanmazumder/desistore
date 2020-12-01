@extends('web.master')

@section('content')
{{-- LOGIN --}}
<div class="container">
    <!-- Modal1 -->
    <div class="modal-body modal-body-sub_agile nm-sing-in">
        <div class="col-md-8 modal_body_left modal_body_left1">
            <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
            <form action="#" method="post">
                <div class="styled-input agile-styled-input-top">
                    <input type="text" name="Name" required="">
                    <label>Name</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="email" name="Email" required="">
                    <label>Email</label>
                    <span></span>
                </div>
                <input type="submit" value="Sign In">
            </form>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </a></li>
            </ul>
            <div class="clearfix"></div>
        <p><a href="{{url('register')}}"> Don't have an account?</a>
            </p>

        </div>
        <div class="col-md-4 modal_body_right modal_body_right1">
            <img src="{{asset('public/web')}}/images/log_pic.jpg" alt=" " />
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //Modal1 -->






</div>

@include('web.pages.home.sections.service')

@endsection
