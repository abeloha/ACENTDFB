@extends('layout.pages_frame')

@section('page-content')  
<div>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Advisory Board</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Advisory Board</li>
                    </ol>
                  </div>
            </div>
        </div><!-- /Page Header -->
        
        <section class="about-section bg-grey bd-bottom padding">
            <div class="container">
               
				<div class="row about-wrap">
                    <div class="col-md-6 xs-padding">
                       <div class="about-content">
							<h2>International Scientific Advisory Board</h2>
                            <ol>
								<li><b>Prof. Kenji Hirayama</b>, Institute of Tropical Medicine, Nagasaki University, Nagasaki, Japan.</li>	
								<li><b>Prof. Kiyoshi Kita</b>, School of Tropical Medicine and Global Health, Nagasaki University, Nagasaki, Japan.</li>	
								<li><b>Prof. Kelm Sorge</b>, Center for Bio-molecular Interactions, Universitat Bremen, Bremen.</li>	
								<li><b>Prof. Hazel Sive</b>, Director, MIT-Africa and Head, JWEL, MIT Whitehead Institute, MIT Biology, Cambridge, Boston, MA, USA</li>	
								<li><b>Dr. Robin Cotton</b>, Director, Biomedical Forensic Science Department, Graduate School of Medical Sciences, Boston University, Boston, MA, USA.</li>
								<li><b>Prof. Oyewale Tomori</b>, WHO Consultant on Polio, Yellow Fever and Measles, University of Ibadan, Nigeria.</li>
							<ul>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
							<h2>Sectoral Advisory Board</h2>
                            <ol>
								<li><b>Dr. Sunday Isiyaku</b>, Country Director, Sightsaver (Nigeria and Ghana), Kaduna, Nigeria.</li>	
								<li><b>Dr. Patrick Nguku</b>, West Africa Regional Director, Africa Field Epidemiology Network, Abuja, Nigeria.</li>	
								<li><b>Dr. Usman I. Gebi</b>, Country Director, Friends for Global Health Initiative in Nigeria, Abuja, Nigeria.</li>	
								<li><b>Mr Lukman Arowomimo</b>, West Africa Regional Representative, Inqaba Biotec SA, IITA, Ibadan Nigeria.</li>	
								<li><b>Dr. Stella Smith</b>, Nigerian Institute for Medical Research, NIMR, Yaba, Lagos, Nigeria.</li>
								<li><b>Dr. Zakari Imam</b>, Chief Executive, DNA Labs, Kaduna, Nigeria.</li>
							<ul>
                        </div>
                    </div>
                </div>
                
               
			</div>
        </section><!-- /About Section -->
</div>
@endsection
