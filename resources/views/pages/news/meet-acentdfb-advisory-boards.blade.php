@extends('layout.pages_frame')

@section('page-content')  
<div>
    

        <section class="gallery-section bg-grey bd-bottom padding">
            <div class="container" id="">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active" data-filter="*">Meet ACENTDFB Advisory Boards</li>
                    </ul><!-- /.gallery filter-->
                </div>
            </div>
			
            <div class="container" id="sectoral">                
                <div class="gallery-items row">
					<?php 
					$titles = array('Sectoral Advisory Board','Chairman, Sectoral Advisory Board', 'Chairman and Members of Sectoral Advisory Board', 'ABU Vice-chancellor, Dr. Joshua Attah and ACENTDFB Centre Leader', 'Members of the Sectoral Advisory Board and the ACENTDFB Management' ); 
					?>
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="col-lg-4 col-sm-6 single-item sectoral">
                            <div class="gallery-wrap">
                                <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/sectoral/'.$i.'.jpg')}}">
                                    <img src="{{asset('img/facilities/sectoral/'.$i.'.jpg')}}" alt="Sectoral Advisory Board">
                                </a>
                            </div>
                            <p class="text-center"><b>{{$titles[$i]}}</b></p>
                        </div><!-- /Item -->

                    @endfor                      
                </div>
            </div>
			
        </section><!-- /Gallery Section -->
</div>
@endsection
