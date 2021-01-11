@extends('layout.pages_frame')

@section('page-content')  
<div>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>About Us</h2>
                    <p>Unveiling vaccines for parasites in Trypanosomiasis, Filariasis and Rabies. </p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->
        
        <section class="about-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="row about-wrap">
                    <div class="col-md-6 xs-padding">
                        <div class="about-image">
                            <img src="img/video.jpg" alt="about image">
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h2>About ACENTDFB.</h2>
                            <p>The Africa Center of Excellence for Neglected Tropical Diseases and Forensic Biotechnology was established in collaboration with the World Bank to drive Molecular Research and innovations on:
                                <br><br>1. Novel standardized molecular diagnostic tools for the characterization of these parasites in their natural habitats which would be used to map the burden and distribution of the pathogens in the region.
                                <br>2. Developing and maintaining pathogen sample and strain repositories.
                                <br>3. To develop a vaccine development facility for innovative vaccination approaches on animals of economic relevance
                                <br>many more
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->
        
        @include('pages.inc_team')<!-- /Team Section -->
        
        @include('pages.inc_counter')<!-- Counter Section -->
</div>
@endsection
