@extends('layout.pages_frame')

@section('page-content')  
<div>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>News</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">News & Media</li>
                    </ol>
                    <p class="text-justify">Stay updated with the latest news in the center.</p>
                </div>
            </div>
        </div><!-- /Page Header -->
        
        <section class="blog-section bg-grey padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 xs-padding">
                        <div class="blog-items grid-list row">
                            
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <div class="video-wrap">
                                        <img src="{{asset('img/news/covidlab.jpg')}}" alt="video">
                                        <div class="play">
                                            <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=qLvRgcG0g_U"><i class="ti-control-play"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> Jun 03.2020</span>
                                        <h3><a href="#">ACENTDFB Establishes Covid-19 Samples Testing Laboratory</a></h3>
                                        <p>Take a walk around our Covid-19 testing lab</p>
                                        <a href="https://www.youtube.com/watch?v=qLvRgcG0g_U" class="post-meta" target="_blank">Watch on YouTube</a>
                                    </div>
                                </div>
                            </div>          

                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="{{asset('img/news/vc.jpg')}}" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> May 2020</span>
                                        <a href="{{url('/news/abu-vice-chancellor-visits-acentdfb')}}">
                                        <h3>ABU Vice-Chancellor visits ACENTDFB</h3>
                                        <p>Ahmadu Bello University Vice-Chancellor, Prof Kabir Bala visits ACENTDFB.</p>
                                        <span class="post-meta">View photos </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="{{asset('img/news/dg.jpg')}}" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> February 2020</span>
                                        <a href="{{url('/news/kaduna-state-deputy-governor-others-visit-acentdfb')}}">
                                        <h3>Deputy Governor, Others Visit ACENTDFB</h3>
                                        <p>Kaduna State Deputy Governor Commissioner of Health and ABUTH Chief Medical Director visits ACENTDFB</p>
                                        <span class="post-meta">View photos </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="{{asset('img/news/workshop.jpg')}}" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> 2020</span>
                                        <a href="{{url('/news/acentdfb-organizes-workshops')}}">
                                        <h3>ACENTDFB organizes training workshop</h3>
                                        <p>Surveys In Research on Neglected Tropical Diseases: Project Design, Planning, Sampling and Documentation workshop on 13th – 18th January 2020</p>
                                        <span class="post-meta">View photos </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="{{asset('img/news/board.jpg')}}" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> 2019</span>
                                        <a href="{{url('/news/meet-acentdfb-advisory-boards')}}">
                                        <h3>Meet ACENTDFB Advisory Boards</h3>
                                        <p>See photos of some of our Sectoral Advisory Board members</p>
                                        <span class="post-meta">View photos </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            

                        </div>
                        <!-- <ul class="pagination_wrap align-center mt-30">
                            <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                        </ul>Pagination -->
                    </div><!-- Blog Posts -->
                </div>
            </div>
        </section><!-- /Blog Section -->
        

        
        
</div>
@endsection
