@extends('layout.pages_frame')

@section('page-content')
<div>
    
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>DOCUMENTS OF ACENTDFB</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Documents</li>
                    </ol>
                    <p class="text-justify">ACENTDFB state of the art research documents includes audit committee, audited accounts, award documents, interim financial report and internal audit report.</p>
                </div>
            </div>
        </div><!-- /Page Header -->
        <section class="blog-section bg-grey bd-bottom padding">
			<div class="container">
            
				
				
				<div class="section-heading text-center mb-40">
					<h2>Document Folders</h2>
					<span class="heading-border"></span>
				</div><!-- /Section Heading -->
				<div class="row">
					<div class="col-lg-12 xs-padding">
						<div class="blog-items grid-list row">
							
							<div class="col-md-4 padding-15">
								<div class="blog-post">
									<a href="{{url('/documents/procurement')}}" >
									<div class="blog-content">
										<img src="{{asset('img/folder_icon.png')}}" style="height: 100px; width:100px;"/>
										<h3>Procurement</h3>
									</div>
									</a>
								</div>
							</div><!-- Post 1 -->
							
							<div class="col-md-4 padding-15">
								<div class="blog-post">
									<a href="{{url('/documents/committee')}}" >
									<div class="blog-content">
										<img src="{{asset('img/folder_icon.png')}}" style="height: 100px; width:100px;"/>
										<h3>Audit Committee</h3>
									</div>
									</a>
								</div>
							</div><!-- Post 1 -->
							
							<div class="col-md-4 padding-15">
								<div class="blog-post">
									<a href="{{url('/documents/accounts')}}" >
									<div class="blog-content">
										<img src="{{asset('img/folder_icon.png')}}" style="height: 100px; width:100px;"/>
										<h3>Audited Accounts</h3>
									</div>
									</a>
								</div>
							</div><!-- Post 1 -->
							
							<div class="col-md-4 padding-15">
								<div class="blog-post">
									<a href="{{url('/documents/financial')}}" >
									<div class="blog-content">
										<img src="{{asset('img/folder_icon.png')}}" style="height: 100px; width:100px;"/>
										<h3>Interim Financial Report</h3>
									</div>
									</a>
								</div>
							</div><!-- Post 1 -->
							
							<div class="col-md-4 padding-15">
								<div class="blog-post">
									<a href="{{url('/documents/audit')}}" >
									<div class="blog-content">
										<img src="{{asset('img/folder_icon.png')}}" style="height: 100px; width:100px;"/>
										<h3>Internal Audit Report</h3>
									</div>
									</a>
								</div>
							</div><!-- Post 1 -->

							<div class="col-md-4 padding-15">
								<div class="blog-post">
									<a href="{{url('/documents/financialplan')}}" >
									<div class="blog-content">
										<img src="{{asset('img/folder_icon.png')}}" style="height: 100px; width:100px;"/>
										<h3>Financial Management Plan</h3>
									</div>
									</a>
								</div>
							</div><!-- Post 1 -->
							
							<div class="col-md-4 padding-15">
								<div class="blog-post">
									<a href="{{url('/documents/others')}}" >
									<div class="blog-content">
										<img src="{{asset('img/folder_icon.png')}}" style="height: 100px; width:100px;"/>
										<h3>For Students</h3>
									</div>
									</a>
								</div>
							</div><!-- Post 1 -->
							
							
							
						</div>
					</div><!-- Blog Posts -->
				</div>
				
			</div>
		</section>
</div>   
@endsection
