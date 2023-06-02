@extends('layouts.master')

@section('title', 'About us')

@section('content')

    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>News</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>News</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="full news_blog">
                            <img class="img-responsive" src="{{asset("/assets/images/b$i.png")}}" alt="#" />
                            <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                            <div class="blog_details">
                                <h3>Bitcoin News</h3>
                                <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- end section -->

@endsection



