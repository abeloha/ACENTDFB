@extends('layout.pages_frame')

@section('page-content')  
<div>
    

        <section class="gallery-section bg-grey bd-bottom padding">
            <div class="container" id="">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active" data-filter="*">All</li>
                    </ul><!-- /.gallery filter-->
                </div>
            </div>
			
            <div class="container" id="visits">
                <div class="gallery-items row">
					<?php 
                    $titles = array('Dignitaries Visit','Ahmadu Bello University Vice-Chancellor, Prof Kabir Bala visits ACENTDFB', 'ABU Vice-Chancellor, Prof Kabir Bala visits ACENTDFB', 'ABU Vice-Chancellor, Prof Kabir Bala visits ACENTDFB', 'ABU Vice-Chancellor, Prof Kabir Bala and ACENTDFB Centre Leader', 'Kaduna State Deputy Governor - Hadiza Sabuwa Balarabe, Commissioner of Health and ABUTH Chief Medical Director visits ACENTDFB', 'Kaduna State Deputy Governor, Commissioner of Health and ABUTH Chief Medical Director visits ACENTDFB', 'Kaduna State Deputy Governor, Commissioner of Health and ABUTH Chief Medical Director visits ACENTDFB', 'Kaduna State Deputy Governor, Commissioner of Health and ABUTH Chief Medical Director visits ACENTDFB'); 
                    ?>
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="col-lg-4 col-sm-6 single-item visits">
                            <div class="gallery-wrap">
                                <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/visit/'.$i.'.jpg')}}">
                                    <img src="{{asset('img/facilities/visit/'.$i.'.jpg')}}" alt="Dignitaries Visit to ACENTDFB">
                                </a>
                            </div>
                            <p class="text-center"><b>{{$titles[$i]}}</b></p>
                        </div><!-- /Item -->

                    @endfor                      
                </div>
            </div>
			
			<div class="container" id="workshop">
                <div class="gallery-items row">
                    @for ($i = 1; $i < 10; $i++)
                        <div class="col-lg-4 col-sm-6 single-item workshop">
                            <div class="gallery-wrap">
                                <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/training/'.$i.'.jpeg')}}">
                                    <img src="{{asset('img/facilities/training/'.$i.'.jpeg')}}" alt="collaboration">
                                </a>
                            </div>
                            <p class="text-center"><b>Workshop</b></p>
                        </div><!-- /Item -->

                    @endfor                      
                </div>
            </div>

			<div class="container" id="collaboration">
                <div class="gallery-items row">                    
                    <div class="col-lg-4 col-sm-6 single-item collaboration">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/nagasaki/1.JPG')}}">
                                <img src="{{asset('img/facilities/nagasaki/1.JPG')}}" alt="collaboration">
                            </a>
                        </div>
                        <p class="text-center"><b>Collaboration with University of Nagasaki</b></p>
                    </div><!-- /Item -->
					<div class="col-lg-4 col-sm-6 single-item collaboration">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/nagasaki/2.JPG')}}">
                                <img src="{{asset('img/facilities/nagasaki/2.JPG')}}" alt="collaboration">
                            </a>
                        </div>
                        <p class="text-center"><b>Collaboration with University of Nagasaki</b></p>
                    </div><!-- /Item -->
					<div class="col-lg-4 col-sm-6 single-item collaboration">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/nagasaki/3.JPG')}}">
                                <img src="{{asset('img/facilities/nagasaki/3.JPG')}}" alt="collaboration">
                            </a>
                        </div>
                        <p class="text-center"><b>Collaboration with University of Nagasaki</b></p>
                    </div><!-- /Item -->
					<div class="col-lg-4 col-sm-6 single-item collaboration">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/nagasaki/4.JPG')}}">
                                <img src="{{asset('img/facilities/nagasaki/4.JPG')}}" alt="collaboration">
                            </a>
                        </div>
                        <p class="text-center"><b>Collaboration with University of Nagasaki</b></p>
                    </div><!-- /Item -->
                    <div class="col-lg-4 col-sm-6 single-item collaboration">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/nagasaki/5.JPG')}}">
                                <img src="{{asset('img/facilities/nagasaki/5.JPG')}}" alt="collaboration">
                            </a>
                        </div>
                        <p class="text-center"><b>Collaboration with University of Nagasaki</b></p>
                    </div><!-- /Item -->
					<div class="col-lg-4 col-sm-6 single-item collaboration">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/nagasaki/6.JPG')}}">
                                <img src="{{asset('img/facilities/nagasaki/6.JPG')}}" alt="collaboration">
                            </a>
                        </div>
                        <p class="text-center"><b>Collaboration with University of Nagasaki</b></p>
                    </div><!-- /Item -->
                   
                    
                </div>
            </div>
			
        </section><!-- /Gallery Section -->
</div>
@endsection
