@extends('layout.pages_frame')

@section('page-content')  
    <div>
        <section class="slider-section">
            <div class="slider-wrapper">
                <div id="main-slider" class="nivoSlider">
					<img src="{{asset('img/slider-covidlab.jpg')}}" alt="" title="#slider-caption-covid"/>
                    <img src="{{asset('img/slider-1.jpg')}}" alt="" title="#slider-caption-1"/>
                    <img src="{{asset('img/slider-2.jpg')}}" alt="" title="#slider-caption-2"/>
                    <img src="{{asset('img/slider-3.jpg')}}" alt="" title="#slider-caption-3"/>
                </div><!-- /#main-slider -->
				<div id="slider-caption-covid" class="nivo-html-caption slider-caption">
                    <div class="display-table">
                        <div class="table-cell">
                            <div class="container">
                               <div class="slider-text">
                                    <h5 class="wow cssanimation fadeInBottom">Covid-19</h5>
                                   <h1 class="wow cssanimation leFadeInRight sequence" data-wow-duration="900ms">ACENTDFB Covid-19 Samples Testing Lab</h1>
                                    <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Take a tour of our well equipped Covid-19 Samples Testing Laboratory</p>
                                    <a href="https://www.youtube.com/watch?v=qLvRgcG0g_U"  class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s" target="_blank">Watch video</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div> <!-- /#slider-caption-1 -->
                <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                    <div class="display-table">
                        <div class="table-cell">
                            <div class="container">
                               <div class="slider-text">
                                    <h5 class="wow cssanimation fadeInBottom">What we do</h5>
                                   <h1 class="wow cssanimation leFadeInRight sequence">Research for Healthier Life</h1>
                                    <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Research leading to development of drugs and vaccines for control and eradication of neglected tropical diseases: Trypanosomiasis, Lymphatic Filariaisis/Onchocerciasis and Rabies.</p>
                                    <a href="{{url('about')}}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Learn More</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div> <!-- /#slider-caption-1 -->
                <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                    <div class="display-table">
                        <div class="table-cell">
                            <div class="container">
                               <div class="slider-text">
                                    <h5 class="wow cssanimation fadeInBottom">What we do</h5>
                                    <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">Capacity Building   <br>and Training</h1>
                                    <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Training courses to impart skills and improve capacities of personnel involved in the health sector.</p>
                                    <a href="{{url('about')}}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Learn More</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div> <!-- /#slider-caption-2 -->
                <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                    <div class="display-table">
                        <div class="table-cell">
                            <div class="container">
                               <div class="slider-text">
                                    <h5 class="wow cssanimation fadeInBottom">What we do</h5>
                                    <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Center with a Vision.</h1>
                                    <p class="wow cssanimation fadeInTop" data-wow-delay="1s"> Providing a reliable template to address problems of NTDs and related issues and their impacts on the socio-economic and health of communities in concerned developing countries.</p>
                                    <a href="{{url('about')}}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Learn More</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div> <!-- /#slider-caption-3 -->
            </div>
        </section><!-- /#slider-Section -->
        
        <section class="promo-section bd-bottom">
            <div class="promo-wrap">
               <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 xs-padding">
                            <div class="promo-content">
                                <h3>Research</h3>
                                <p style="text-align: justify;">ACENTDFB is poised with a responsibility to conduct research that would illuminate complex molecular interactions between host and parasite with a view of developing potential vaccine targets and improved molecular diagnostics and identification of parasites in Trypanosomiasis, Filariasis and Rabies.</p>
                                <a href="{{url('#')}}">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 xs-padding">
                            <div class="promo-content">
                                <h3>Graduate Program</h3>
                                <p style="text-align: justify;">ACENTDFB graduate students would be distributed equitably among the three core research focus of the programme. Graduate students are supervised in a multidisciplinary approach to enable translational driven research.</p>
                                <a href="{{url('#')}}">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 xs-padding">
                            <div class="promo-content">
                                <h3>Training</h3>
                                <p style="text-align: justify;">Workshops, international conferences on NTDs  and training programs on diverse topics in molecular biotechnology will be held not only in Nigeria but also in Cameroon, which will involve scientists from the international partners.</p>
                                <a href="{{url('#')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Promo Section -->
        
		 <section class="events-section bd-bottom padding">
           <div class="container">
                <div id="event-carousel" class="events-wrap owlCarousel">
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="{{asset('img/phd_accreditation.jpg')}}" alt="accreditation">
                        </div>
                        <div class="event-details">
                            <h3>Our Biotechnology PhD Program is Fully Accredited!.</h3>
                            <div class="event-info">
                                <p><i class="ti-calendar"></i>Sept. 2019 - Sept. 2024.</p>
                                <p><i class="ti-location-pin"></i>By HCRERES.</p>
                            </div>
                        </div>
                    </div><!-- Event-1 -->
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="{{asset('img/msc_accreditation.jpg')}}" alt="accreditation">
                        </div>
                        <div class="event-details">
                            <h3>Our Biotechnology M.Sc, Program is Fully Accredited!.</h3>
                            <div class="event-info">
                                <p><i class="ti-calendar"></i>Sept. 2019 - Sept. 2024.</p>
                                <p><i class="ti-location-pin"></i>By HCRERES.</p>
                            </div>
                        </div>
                    </div><!-- Event-2 -->
                    
                </div>
           </div>
        </section><!-- Events Section -->
		
		 <section class="campaigns-covid bd-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs-padding">
                        <div class="campaigns-wrap">
                            <h4>COVID-19</h4>
                            <h2>ACENTDFB Covid-19 Samples Testing Laboratory.</h2>
                            <p>Take a walk around our Covid-19 testing lab located in the ACENTDFB, Ahmadu Bello University, Kaduna State, Nigeria.</p>
                            
                            <a href="https://www.youtube.com/watch?v=qLvRgcG0g_U" class="default-btn" target="_blank">Watch on YouTube</a>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="video-wrap">
                            <img src="{{asset('img/covidlab.jpg')}}" alt="video">
                            <div class="play">
                                <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=qLvRgcG0g_U"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Featured Campaigns Section -->
        
		
        <section class="causes-section bd-bottom shape circle padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Our Research Areas</h2>
                    <span class="heading-border"></span>
                    <p>Research activities of the Centre are mainly directed on the following tropical diseases: Trypanosomiasis, Lymphatic Filariaisis/Onchocerciasis and Rabies. <br>Other diseases recently included are Trachoma, Dengue and Schistosomiasis. <br>Research is also ongoing in the area of forensic science with emphasis on genetic profiling. </p>
                </div><!-- /Section Heading -->
                <div class="causes-wrap row">
                    <div class="col-md-4 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="{{asset('img/trypanosomiasis.jpg')}}" alt="causes">
                           </div>
                            <div class="causes-details">
                                <h3>Trypanosomiasis</h3>
                                <p>One of the focus of this reseach is on molecular identification and characterization of trypanosoma parasites and to research into DNA-based vaccines using molecular targets capable of disrupting the life cycle of the parasite identified using novel approaches of molecular biology.</p>
                               
                                <a href="{{url('research#trypanosomiasis')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="{{asset('img/filiariasis.jpg')}}" alt="causes">
                           </div>
                            <div class="causes-details">
                                <h3>Filiariasis</h3>
                                <p>Our research unit, “Filariasis”, will carry out research focused on diagnosis and distribution of Filaria parasites in Nigeria and the sub-region. Vaccination experiments with other NTDs (trypanosomiasis and rabies) will be used to investigate this effect in novel DNA- and/or bionanoparticle-based vaccination strategies.</p>
                               
                                <a href="{{url('research#filiariasis')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="causes-content">
                           <div class="causes-thumb">
                                <img src="{{asset('img/rabies.jpg')}}" alt="causes">
                           </div>
                            <div class="causes-details">
                                <h3>Rabies</h3>
                                <p>A key objective that will be pursued in this research area is to build on the existing groundwork for the development of recombinant DNA vaccine for rabies, anchored on the knowledge of circulating genotypes that is safe, stable and effective, in view of the problems attendant to the existing vaccine.</p>
                                <a href="{{url('research#rabies')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Causes Section -->
        
        <section class="campaigns-section bd-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs-padding">
                        <div class="campaigns-wrap">
                            <h2>About ACENTDFB.</h2>
                            <p>The Africa Center of Excellence for Neglected Tropical Diseases and Forensic Biotechnology was established in collaboration with the World Bank to drive Molecular Research and innovations on:
                                <br><br>1. Novel standardized molecular diagnostic tools for the characterization of these parasites in their natural habitats which would be used to map the burden and distribution of the pathogens in the region.
                                <br>2. Developing and maintaining pathogen sample and strain repositories.
                                <br>3. To develop a vaccine development facility for innovative vaccination approaches on animals of economic relevance
                                <br>many more
                            </p>
                            <a href="{{url('about')}}" class="default-btn">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="video-wrap">
                            <img src="{{asset('img/study.jpg')}}" alt="video">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Featured Campaigns Section -->
        
        @include('pages.inc_team')<!-- /Team Section -->
        
        @include('pages.inc_counter')<!-- Counter Section -->
    </div>

@endsection
