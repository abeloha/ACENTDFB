@extends('layout.pages_frame')

@section('page-content')  
<div>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Our Partners</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Partners</li>
                    </ol>
                    <p class="text-justify">ACENTDFB has partnered with various institutions and organizations.</p>
                </div>
            </div>
        </div><!-- /Page Header -->
        <section class="causes-section bd-bottom shape circle padding">
            <div class="container">
               <div class="causes-wrap row">
                <?php
                    $partners = array("Partner Names","Ahmadu Bello University","The World Bank Group", 
                    "University of Bremen","University of Ngaoundéré" ,
                        "National Institute Of Trypanosomiasis Research", 
                        "Centre International de recherche-développement sur l’élevage en zone subhumide", 
                        "Massachusetts Institute of Technology", 
                        "Nagasaki University Institute of Tropical Medicine", 
                        "BIO Ventures for Global Health", "Kumasi Centre for Collaborative Research","Sightsavers");
                    
                    $i = 0;
                    while($i < 11){
                        $i++
                ?>
                        <div class="col-md-4 xs-padding">
                            <div class="causes-content">
                               <div class="causes-thumb">
                                    <img src="{{asset('img/logo/'.$i.'.jpg')}}" alt="logo" style="width:340px; height:auto;">
                               </div>
                                <div class="causes-details">
                                    <h3 style="text-align:center;"><?php echo $partners[$i]; ?></h3>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ?>   
                </div>
            </div>
        </section><!-- /Causes Section -->
</div>
@endsection
