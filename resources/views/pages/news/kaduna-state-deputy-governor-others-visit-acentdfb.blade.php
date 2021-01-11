@extends('layout.pages_frame')

@section('page-content')  
<div>
    

        <section class="gallery-section bg-grey bd-bottom padding">
            <div class="container" id="">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active" data-filter="*">Deputy Governor, Others Visit ACENTDFB</li>
                    </ul><!-- /.gallery filter-->
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
            </div>
			
        </section><!-- /Gallery Section -->
</div>
@endsection
