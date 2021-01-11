@extends('layout.pages_frame')

@section('page-content')
<div>
    <?php
    $Page_title = '';
        $type_ms3 = array("l1","l2");
        if(isset($type)){
            if($type == 'l1'){$Page_title = 'Lot 1';}
            elseif($type == 'l2'){$Page_title = 'Lot 2';}
        }else{
            $type = 'l1';
            $Page_title = 'Lot 1';
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
                        <li class="breadcrumb-item active">{{$Page_title}}</li>
                    </ol>
                    <p class="text-justify">ACENTDFB documents includes audit committee, audited accounts, award documents, interim financial report and internal audit report.</p>
                </div>
            </div>
        </div><!-- /Page Header -->
        <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            <?php    
            
                if($type == 'l1'){l1();}
                elseif($type == 'l2'){l2();}
            ?>
	</div>
        </section>
</div>


<?php

function l1(){
    ?>
    <div class="section-heading text-center mb-40">
        <h2>LOT 1</h2>
        <span class="heading-border"></span>
    </div><!-- /Section Heading -->
     <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Award Letter for LOT 1</a></h3>
                                <a href="{{asset('doc/AD/Award_Letter_Lot1.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Acceptance Letter for LOT 1</a></h3>
                                <a href="{{asset('doc/AD/Acceptance_letter_lot1.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Contract Agreement for LOT 1</a></h3>
                                <a href="{{asset('doc/CC/Contract_Agreement_Femimat_Lot_1.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Request for Final Payment for LOT 1</a></h3>
                                <a href="{{asset('doc/RP/LOT1_Request_for_final_payment.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                                    
                </div>
            </div><!-- Blog Posts -->
        </div>
    <?php
}

function l2(){
    ?>
        <div class="section-heading text-center mb-40">
            <h2>LOT 2</h2>
            <span class="heading-border"></span>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                   
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Award Letter for LOT 2</a></h3>
                                <a href="{{asset('doc/AD/Award_Letter_Lot2.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Acceptance Letter for LOT 2</a></h3>
                                <a href="{{asset('doc/AD/Acceptance_letter_lot2.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Contract Agreement for LOT 2</a></h3>
                                <a href="{{asset('doc/CC/Contract_Agreement_Femimat_Lot_2.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>Request for Final Payment for LOT 2</a></h3>
                                <a href="{{asset('doc/RP/LOT2_Request_for_final_payment.pdf')}}" class="post-meta">Download</a>

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
