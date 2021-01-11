@extends('layout.pages_frame')

@section('page-content')
<div>
    
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>DOCUMENTS OF ACENTDFB</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/documents')}}">Documents</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/documents/procurement')}}">Procurement</a></li>
                        <li class="breadcrumb-item active">2015/2016</li>
                    </ol>
                    <p class="text-justify">ACENTDFB documents includes audit committee, audited accounts, award documents, interim financial report and internal audit report.</p>
                </div>
            </div>
        </div><!-- /Page Header -->
        <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            
            <div class="section-heading text-center mb-40" id='advert'>
                <h2>Procurement Plans</h2>
                <span class="heading-border"></span>
            </div><!-- /Section Heading -->
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                            <div class="col-md-4 padding-15">
                                    <div class="blog-post">
                                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                            <h3><a>Procurement Procedure Manual</a></h3>
                                            <a href="{{asset('doc/procurement/Procurement_Procedure_Manual.pdf')}}" class="post-meta">Download</a>
                                        </div>
                                    </div>
                                </div><!-- Post 1 -->
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                    <h3><a>ACENTDFB 2016 Procurement Plan</a></h3>
                                    <a href="{{asset('doc/procurement/ACENTDFB_2016_Procurement_Plan.xls')}}" class="post-meta">Download</a>
                                </div>
                            </div>
                        </div><!-- Post 1 -->

                        <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                        <h3><a>ACENTDFB 2017 Procurement Plan</a></h3>
                                        <a href="{{asset('doc/procurement/ACENTDFB_2017_Procurement_Plan.xls')}}" class="post-meta">Download</a>
                                    </div>
                                </div>
                            </div><!-- Post 1 -->
                            <div class="col-md-4 padding-15">
                                    <div class="blog-post">
                                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                            <h3><a>ACENTDFB 2018 Procurement Plan</a></h3>
                                            <a href="{{asset('doc/procurement/ACENTDFB_2018_Procurement_Plan.xls')}}" class="post-meta">Download</a>
                                        </div>
                                    </div>
                                </div><!-- Post 1 -->
                                <div class="col-md-4 padding-15">
                                        <div class="blog-post">
                                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                                <h3><a>ACENTDFB 2019 Procurement Plan</a></h3>
                                                <a href="{{asset('doc/procurement/ACENTDFB_2019_Procurement_Plan.xls')}}" class="post-meta">Download</a>
                                            </div>
                                        </div>
                                    </div><!-- Post 1 -->

                    </div>
                </div><!-- Blog Posts -->
            </div>
            
	</div>
        </section>
</div>

@endsection
