@extends('layouts.master')

@section('title', 'About us')

@section('content')

    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    @for ($i = 1; $i < 9; $i++)
                        <div class="full services_blog">
                            <img class="img-responsive" src="{{asset("/assets/images/s$i.png")}}" alt="#" />
                            <h4>
                                @switch($i)
                                    @case(1)
                                        <span> Safe & Secure</span>
                                        @break

                                    @case(2)
                                        <span>Mobile Apps</span>
                                        @break
                                    @case(3)
                                        <span>Wallet</span>
                                        @break
                                    @default
                                        <span>Experts Support</span>
                                @endswitch

                            </h4>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="row margin-top_30">
                <div class="col-sm-12">
                    <div class="full">
                        <div class="center">
                            <a class="main_bt" href="#">See More ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->


@endsection



