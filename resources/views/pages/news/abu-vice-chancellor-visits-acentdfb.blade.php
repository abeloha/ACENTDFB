@extends('layout.pages_frame')

@section('page-content')  
<div>
    

        <section class="gallery-section bg-grey bd-bottom padding">
            <div class="container" id="">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active" data-filter="*">ABU Vice-Chancellor visits ACENTDFB</li>
                    </ul><!-- /.gallery filter-->
                </div>
            </div>
			
            <div class="container" id="visits">
                <div class="gallery-items row">
					<?php 
                    $titles = array('ABU Vice-Chancellor visits ACENTDFB','Ahmadu Bello University Vice-Chancellor, Prof Kabir Bala visits ACENTDFB', 'ABU Vice-Chancellor, Prof Kabir Bala visits ACENTDFB', 'ABU Vice-Chancellor, Prof Kabir Bala visits ACENTDFB', 'ABU Vice-Chancellor, Prof Kabir Bala and ACENTDFB Centre Leader'); 
                    ?>
                    @for ($i = 1; $i <= 4; $i++)
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
			
        </section><!-- /Gallery Section -->
</div>
@endsection
