@extends('layout.pages_frame')

@section('page-content')  
<div>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>RESEARCH AT ACENTDFB</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Research</li>
                    </ol>
                    <p class="text-justify">ACENTDFB is poised with a responsibility to conduct research that would illuminate complex molecular interactions between host and parasite with a view of developing potential vaccine targets and improved molecular diagnostics and identification of parasites in Trypanosomiasis, Filariasis and Rabies.</p>
                    <p class="text-justify">The center is committed to Excellence in Translational Research through extensive national and regional collaborations.</p>
                </div>
            </div>
        </div><!-- /Page Header -->
        
        <section class="about-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="row about-wrap">
                    <div class="col-md-4 xs-padding">
                        <div class="about-image">
                            <img src="img/trypanosomiasis.jpg" alt="Trypanosomiasis image">
                        </div>
                    </div>
                    <div class="col-md-8 xs-padding" id="trypanosomiasis">
                        <div class="about-content">
                            <h2>Trypanosomiasis</h2>
                            <p class="text-justify">This research has several goals:</p>
                            <p class="text-justify">Firstly its focus is on researches to establish a region-wide map on the distribution of Trypanosoma species in mammalian host and tsetse vectors using optimized trypanosomal infection detection method.</p>
                            <p class="text-justify">Studies in this research unit are also focused on molecular identification and characterization of trypanosoma parasites.</p>
                            <p class="text-justify">Research into DNA-based vaccines using molecular targets capable of disrupting the life cycle of the parasite identified using novel approaches of molecular biology. Also studies would focus on vaccine guided delivery using either recombinant DNA or bionanoparticles or a combination thereof.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row about-wrap">
                    <div class="col-md-4 xs-padding">
                        <div class="about-image">
                            <img src="img/filiariasis.jpg" alt="Filiariasis image">
                        </div>
                    </div>
                    <div class="col-md-8 xs-padding" id="filiariasis">
                        <div class="about-content">
                            <h2>Filiariasis</h2>
                            <p class="text-justify">The Africa Center for Excellence research unit “Filariasis” will carry out research focused on diagnosis and distribution of Filaria parasites in Nigeria and the sub-region.</p>
                            <p class="text-justify">Research in this unit is also focused on studies of the vectors, Anopheles gambiae, A. funestus and Culex quinquefasciatus involved in transmission. Since concurrent helminth infections have been shown to alter optimal vaccine-induced responses, vaccination experiments with other NTDs (trypanosomiasis and rabies) will be used to investigate this effect in novel DNA- and/or bionanoparticle-based vaccination strategies.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row about-wrap">
                    <div class="col-md-4 xs-padding">
                        <div class="about-image">
                            <img src="img/rabies.jpg" alt="Rabies image">
                        </div>
                    </div>
                    <div class="col-md-8 xs-padding" id="rabies">
                        <div class="about-content">
                            <h2>Rabies</h2>
                            <p class="text-justify">For the research unit “Rabies”, focuses on the deployment and use of extant molecular biotechnologies for a more sensitive and specific molecular diagnosis of rabies in dogs and other animals and the determination of the definite genotypes that are circulating in Nigeria and the sub-region. </p>
                            <p class="text-justify">A key objective that will be pursued is to build on the existing groundwork for the development of recombinant DNA vaccine for rabies, anchored on the knowledge of circulating genotypes that is safe, stable and effective, in view of the problems attendant to the existing vaccine. </p>
                            <p class="text-justify">Concurrent field-based studies to better understand the ecology of dogs will be undertaken to guide proposed intervention strategies. Control of this invariably fatal disease of man can best be achieved through its control in the principal reservoir.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->
</div>
@endsection
