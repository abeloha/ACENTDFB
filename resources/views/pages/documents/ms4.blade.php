@extends('layout.pages_frame')

@section('page-content')
<div>
    <?php
        $type_ms4 = array("cbrt","hostel","animal");
        if(isset($type)&& in_array($type,$type_ms4)){
            
        }else{
            $type = 'cbrt';
        }
    ?>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>DOCUMENTS OF ACENTDFB</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/documents')}}">Documents</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/documents/procurement')}}">Procurement</a></li>
                        <li class="breadcrumb-item active">{{$type}}</li>
                    </ol>
                    <p class="text-justify">ACENTDFB documents includes audit committee, audited accounts, award documents, interim financial report and internal audit report.</p>
                </div>
            </div>
        </div><!-- /Page Header -->
        <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            <?php                    
                if($type == 'cbrt'){cbrt();}
                elseif($type == 'hostel'){hostel();}
                elseif($type == 'animal'){animal();}
            ?>
	</div>
        </section>
</div>


<?php
function cbrt(){
    ?>
    <div class="section-heading text-center mb-40">
        <h2>Renovation of CBRT</h2>
        <span class="heading-border"></span>
    </div><!-- /Section Heading -->
    <div class="row">
        <div class="col-lg-12 xs-padding">
            <div class="blog-items grid-list row">
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>Award Letter for the Rehabilitation of CBRT 2018</a></h3>
                            <a href="{{asset('doc/AD/Award_Letter_for_the_Rehabilitation_of_CBRT_2018.pdf')}}" class="post-meta">Download</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
                
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>Acceptance Letter for the Rehabilitation of CBRT 2018</a></h3>
                            <a href="{{asset('doc/AD/Acceptance_letter_CBRT_Nnabiz.pdf')}}" class="post-meta">Download</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
                
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>Contract Agreement for the Rehabilitation of CBRT 2018</a></h3>
                            <a href="{{asset('doc/CC/Contract_Agreement_Nnabiz.pdf')}}" class="post-meta">Download</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>Request for Final Payment for CBRT</a></h3>
                            <a href="{{asset('doc/RP/CBRT_Request_for_final_payment.pdf')}}" class="post-meta">Download</a>

                        </div>
                    </div>
                </div><!-- Post 1 -->
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>Certificate of Completion for the Rehabilitation of CBRT 2018</a></h3>
                            <a href="{{asset('doc/CC/certificate_of_completion_Nnabiz.pdf')}}" class="post-meta">Download</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
                
            </div>
        </div><!-- Blog Posts -->
    </div>
    <?php
}

function hostel(){
    ?>
        <div class="section-heading text-center mb-40">
            <h2>Renovation of Foreign Student Hostel</h2>
            <span class="heading-border"></span>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                   <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Award Letter for the Renovation of student hostel Sassakawa </a></h3>
                                <a href="{{asset('doc/AD/Award_Letter_for_the_Renovation_of_student_hostel_sassakawa_2017.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Acceptance Letter for the Renovation of student hostel Sassakawa </a></h3>
                                <a href="{{asset('doc/AD/Acceptance_Letter_Hostel.pdf')}}" class="post-meta">Download</a>
                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Contract Agreement for the Renovation of student hostel Sassakawa</a></h3>
                                <a href="{{asset('doc/CC/Contract_Agrement_Zasan.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Request for Final Payment for Renovation Student Hostel</a></h3>
                                <a href="{{asset('doc/RP/Renovation_of_Student_Hostel_Request_for_final_payment.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Certificate of Completion for the Renovation of student hostel Sassakawa</a></h3>
                                <a href="{{asset('doc/CC/Certificates_of_Completion_Zasan_and_AB_Abubakar.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->

                    <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                    <h3><a>SASSAKAWA STUDENTS HOSTEL CONTRACT: ADDITIONAL WORKS</a></h3>
                                    <a href="{{asset('doc/additional/SASSAKAWA_STUDENTS_HOSTEL_CONTRACT_ADDITIONAL_WORKS.pdf')}}" class="post-meta">Download</a>
    
                                </div>
                            </div>
                        </div><!-- Post 1 -->

                    
                </div>
            </div><!-- Blog Posts -->
        </div>
    <?php
}

function animal(){
    ?>
        <div class="section-heading text-center mb-40">
            <h2>Construction of Animal House</h2>
            <span class="heading-border"></span>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Award Letter for the Construction of Animal House </a></h3>
                                <a href="{{asset('doc/AD/Award_Letter_for_the_Construction_of_Animal_House_2018.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Acceptance Letter for the Construction of Animal House </a></h3>
                                <a href="{{asset('doc/AD/Acceptance_Letter_Animal_House_AB_Abubakar.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Contract Agreement for the Construction of Animal House </a></h3>
                                <a href="{{asset('doc/CC/Contract_Agreement_AB_Abubakar.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Request for Final Payment for the Construction of Animal House</a></h3>
                                <a href="{{asset('doc/RP/Construction_of_Animal_House_Request_for_final_payment.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Certificate of Completion for the Construction of Animal House </a></h3>
                                <a href="{{asset('doc/CC/Certificates_of_Completion_Zasan_and_AB_Abubakar.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->

                    <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                    <h3><a>SMALL ANIMAL HOUSING CONTRACT: ADDITIONAL WORKS</a></h3>
                                    <a href="{{asset('doc/additional/SMALL_ANIMAL_HOUSING_CONTRACT_ADDITIONAL_WORKS.pdf')}}" class="post-meta">Download</a>
    
                                </div>
                            </div>
                        </div><!-- Post 1 -->
                        
                </div>
            </div><!-- Blog Posts -->
        </div>
    <?php
}

?>
@endsection
