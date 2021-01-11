@extends('layout.pages_frame')

@section('page-content')  
<div>
    
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>RESEARCH AT ACENTDFB</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Research Facilities</li>
                    </ol>
                    <p class="text-justify">ACENTDFB state of the art research facilities includes research laboratories, equipments, and animal house. As well as teaching facilities and student hostel</p>
                </div>
            </div>
        </div><!-- /Page Header -->
        
       <section class="gallery-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active">Laboratories</li>
                    </ul><!-- /.gallery filter -->
                </div>
                
                <div class="gallery-items row">
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/lab/DFG_lab.jpg')}}">
                                <img src="{{asset('img/facilities/lab/DFG_lab.jpg')}}" alt="laboratory">
                            </a>
                        </div>
                        <p class="text-center"><b>DFG Laboratory</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/lab/DFG_lab_1.jpg')}}">
                                <img src="{{asset('img/facilities/lab/DFG_lab_1.jpg')}}" alt="laboratory">
                            </a>
                        </div>
                        <p class="text-center"><b>DFG Laboratory</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/lab/General_lab.jpg')}}">
                                <img src="{{asset('img/facilities/lab/General_lab.jpg')}}" alt="laboratory">
                            </a>
                        </div>
                        <p class="text-center"><b>General Laboratory</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/lab/Genetic_Engineering_lab.jpg')}}">
                                <img src="{{asset('img/facilities/lab/Genetic_Engineering_lab.jpg')}}" alt="laboratory">
                            </a>
                        </div>
                        <p class="text-center"><b>Genetic Engineering Laboratory</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/lab/PCR_Room.jpg')}}">
                                <img src="{{asset('img/facilities/lab/PCR_Room.jpg')}}" alt="laboratory">
                            </a>
                        </div>
                        <p class="text-center"><b>PCR Room</b></p>
                    </div><!-- /Item -->
                    
                </div>
            </div>
           
            
           
            <div class="container">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active">Animal House</li>
                    </ul><!-- /.gallery filter -->
                </div>
                
                <div class="gallery-items row">
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/animal/under_construction.jpg')}}">
                                <img src="{{asset('img/facilities/animal/under_construction.jpg')}}" alt="animal house">
                            </a>
                        </div>
                        <p class="text-center"><b>Animal House Under Construction</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/animal/completed.jpg')}}">
                                <img src="{{asset('img/facilities/animal/completed.jpg')}}" alt="aminal house">
                            </a>
                        </div>
                        <p class="text-center"><b>Animal House Completed</b></p>
                    </div><!-- /Item -->
                                        
                </div>
            </div>
           
           <div class="container">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active">EQUIPMENTS: Animal Cell Tissue Culture Lab</li>
                    </ul><!-- /.gallery filter -->
                </div>
                
               <div class="gallery-items row">
                   
               </div>
           </div>
           <div class="container">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active">EQUIPMENTS</li>
                    </ul><!-- /.gallery filter -->
                </div>
                
                <div class="gallery-items row">
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/flow_cytometer.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/flow_cytometer.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Flow Cytometer</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/HPLC.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/HPLC.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>HPLC</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/low_temperature_freezer.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/low_temperature_freezer.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Low Temperature Freezer</b></p>
                    </div><!-- /Item Bench Autoclave-->
                    
                    
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Bench_Autoclave.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Bench_Autoclave.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Bench Autoclave</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Centrifuge.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Centrifuge.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Tabletop Centrifuge</b></p>
                    </div><!-- /Item -->
                    
                             <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Electrophoresis_Tank_Midi.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Electrophoresis_Tank_Midi.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Electrophoresis Tank Midi</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Electrophoresis_Tank_Mini_with_Power_System.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Electrophoresis_Tank_Mini_with_Power_System.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Electrophoresis Tank Mini with Power System</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Electroprator.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Electroprator.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Electroprator</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Gradient_Thermal_Cycler.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Gradient_Thermal_Cycler.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Gradient Thermal Cycler</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Inverted_Miscroscope.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Inverted_Miscroscope.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Inverted Miscroscope</b></p>
                    </div><!-- /Item -->
                    
                             <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Laminar_Flow_Safety_Cabinet.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Laminar_Flow_Safety_Cabinet.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Laminar Flow Safety Cabinet</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/MasterCycler_Thermal_Cycler.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/MasterCycler_Thermal_Cycler.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>MasterCycler Thermal Cycler</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Micro_and_Haematocrit_centrifuge.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Micro_and_Haematocrit_centrifuge.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Micro and Haematocrit centrifuge</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/PCR_Laminar_Flow_Cabinet.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/PCR_Laminar_Flow_Cabinet.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>PCR Laminar Flow Cabinet</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Preparatory_Room.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Preparatory_Room.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Preparatory Room</b></p>
                    </div><!-- /Item -->
                    
                             <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Refrigearated_Centrifuge.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Refrigearated_Centrifuge.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Refrigearated Centrifuge</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Shaking_Waterbath.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Shaking_Waterbath.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Shaking Waterbath</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Stereo_Miscroscope.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Stereo_Miscroscope.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Stereo Miscroscope</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Tissue_Culture_Lab.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Tissue_Culture_Lab.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Tissue Culture Lab</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/Top_Loading_Vertical_Autoclave.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/Top_Loading_Vertical_Autoclave.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>Top Loading Vertical Autoclave</b></p>
                    </div><!-- /Item -->
                    
                             <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/equipment/UV_Vis_Spectrophotometer.jpg')}}">
                                <img src="{{asset('img/facilities/equipment/UV_Vis_Spectrophotometer.jpg')}}" alt="equipment">
                            </a>
                        </div>
                        <p class="text-center"><b>UV Vis Spectrophotometer</b></p>
                    </div><!-- /Item -->
                    
                </div>
            </div>
           <div class="container">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active">Student Hostel</li>
                    </ul><!-- /.gallery filter -->
                </div>
                
                <div class="gallery-items row">
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/hostel/Student_Hostel_under_Rehabilitation.jpg')}}">
                                <img src="{{asset('img/facilities/hostel/Student_Hostel_under_Rehabilitation.jpg')}}" alt="hostel">
                            </a>
                        </div>
                        <p class="text-center"><b>Student Hostel under Rehabilitation</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/hostel/Student_Hostel_After_Rehabilitation.jpg')}}">
                                <img src="{{asset('img/facilities/hostel/Student_Hostel_After_Rehabilitation.jpg')}}" alt="hostel">
                            </a>
                        </div>
                        <p class="text-center"><b>Student Hostel After Rehabilitation</b></p>
                    </div><!-- /Item -->
                    
                </div>
            </div>
           <div class="container">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                        <li class="active">CBRT Buildings</li>
                    </ul><!-- /.gallery filter -->
                </div>
                
                <div class="gallery-items row">
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/cbrt/CBRT_Frontage_After_Rehabilitation.jpg')}}">
                                <img src="{{asset('img/facilities/cbrt/CBRT_Frontage_After_Rehabilitation.jpg')}}" alt="cbrt">
                            </a>
                        </div>
                        <p class="text-center"><b>CBRT Frontage After Rehabilitation</b></p>
                    </div><!-- /Item -->
                    
                   <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/cbrt/CBRT_After_Rehabilitation_2.jpg')}}">
                                <img src="{{asset('img/facilities/cbrt/CBRT_After_Rehabilitation_2.jpg')}}" alt="cbrt">
                            </a>
                        </div>
                        <p class="text-center"><b>CBRT After Rehabilitation 2</b></p>
                    </div><!-- /Item -->
                    
                    <div class="col-lg-4 col-sm-6 single-item">
                        <div class="gallery-wrap">
                            <a class="img-popup" data-gall="galleryimg" href="{{asset('img/facilities/cbrt/CBRT_After_Rehabilitation_3.jpg')}}">
                                <img src="{{asset('img/facilities/cbrt/CBRT_After_Rehabilitation_3.jpg')}}" alt="cbrt">
                            </a>
                        </div>
                        <p class="text-center"><b>CBRT After Rehabilitation 3</b></p>
                    </div><!-- /Item -->
                    
                </div>
            </div>
        </section><!-- /Gallery Section -->
</div>
@endsection
