@extends('layout.pages_frame')

@section('page-content')  
<div>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Programs</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">{{$title}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->
        <br><br>
       <div class="course-details">
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-8 col-md-9">                    	
						<?php echo $data->content; ?>						
                    </div>
                    <div class="col-sm-4 col-md-3">
                    	<div class="right-slide">
                        	<h3>Want the full course outline?</h3>
                            <div class="course-details-list">                                
                                <div class="btn-block">	
                                	<a href="{{asset('doc/Others/ACENTDFB_Student_Handbook.pdf')}}" >Download student handbook</a>
                                </div>
                            </div>
                            
						</div>
                    </div>
                </div>
            	
            </div>
        </div>
        
        
</div>
@endsection
