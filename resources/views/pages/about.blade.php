@extends('layout.pages_frame')

@section('page-content')  
<div>
    
        
        <section class="about-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="row about-wrap">
                    <div class="col-md-6 xs-padding">
                        <div class="about-image">
                            <img src="img/study.jpg" alt="about image">
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
        <section class="blog-section bg-grey padding">
            <div class="container">
                <div class="row left-sidebar">
                   <div class="col-lg-3 xs-padding">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget mb-50">
                                <h4>About - ACENTDFB</h4>
                                <ul class="cat-list">
                                    <li><a href="{{url('#history')}}">History</a></li>
                                    <li><a href="{{url('#philosophy')}}">Philosophy</a></li>
                                    <li><a href="{{url('#vision')}}">Vision</a></li>
                                    <li><a href="{{url('#objectives')}}">Objectives</a></li>
                                    <li><a href="{{url('#institutions')}}">Collaborating Institutions</a></li>
                                </ul>
                            </div>
                        </div><!-- /Sidebar Wrapper -->
                    </div>
                    <div class="col-md-9 xs-padding">
                        <div class="blog-items single-post" id="history">
                            <img src="img/building.jpg" alt="ACENTDFB building">
                            <h2>History of ACENTDFB</h2>
                            <p class="text-justify">Following the call for proposal for the establishment of Africa Centres of Excellence by the World Bank and Association of African Universities in August 2013, Ahmadu Bello University, Zaria submitted four proposals in three thematic areas {Agriculture, Health and STEM (Science Technology Education and Mathematics)}. The proposal for the establishment of Africa Centre of Excellence for Neglected Tropical Diseases and Forensic Biotechnology (ACENTDFB), headed by Prof Andrew Jonathan Nok (late) was one of the ten successful Centres in Nigeria that took off in 2014.</p> 
                            <p class="text-justify">The Africa Centre of Excellence for Neglected Tropical Diseases and Forensic Biotechnology is administratively housed at the Centre for Biotechnology Research and Training (CBRT) while the degree programmes are domiciled in the Department of Biochemistry. The research facilities of the Centre are located in the CBRT, Department of Biochemistry, Department of Zoology and the Department of Veterinary Public Health and Preventive Medicine, among others. The postgraduate degree programmes (MSc and PhD Biotechnology and PGD Forensic Biotechnology) was approved at the 463rd Meeting of the Senate of Ahmadu Bello University on 24th April, 2014.</p> 
                        </div>
                        
                        <div class="blog-items single-post" id="philosophy">
                            <h2>Philosophy</h2>
                            <p class="text-justify">Africa has continued to be ranked at the bottom of the ladder in terms of development largely because it bears 24% of the global disease burden, with less than 3% of the World’s health force and less than 1 % of World’s financial resources (Collias et al., 2010). One of such disease burdens is Neglected Tropical Diseases (NTDs), which are a large and diverse group of diseases that disproportionately affect the health and livelihood of the poor in the developing World and typically lack attention and funding for research and development. NTDs are not only a health issue, they also contribute significantly to worsening poverty levels (decreased food and animal outputs) with attendant social implications. Neglected Tropical Diseases (NTDs) continue to adversely  challenge development of Africa due to the persistence of factors that mitigate their control/eradication including lack of sufficient knowledge and database on their distribution and burden; appropriate diagnostic tools; effective therapeutic/prophylactic drugs; treatment failures due to, among other factors, drug resistant strains of pathogens; lack of suitable vaccines and other preventive strategies such as vector control; and safe measures to disrupt the life cycle of the pathogens and their vectors. Another challenge in the region including Nigeria is lack of capacity in forensic science.</p> 
                        </div>
                        
                        <div class="blog-items single-post" id="vision">
                            <h2>Vision of the Centre</h2>
                            <p class="text-justify">Providing a reliable template to address problems of NTDs and related issues and their impacts on the socio-economic and health of communities in concerned developing countries<p>
                        </div>
                        
                        <div class="blog-items single-post" id="objectives">
                            <h2>Objectives of the Centre</h2>
                            <ul class="check-list text-justify" style="margin-top: -6px;">
                            <li><i class="fa fa-check"></i>Development of graduate curriculum for and mounting of MSc and PhD Biotechnology programmes with exceptional bias to regional needs</li>
                            <li><i class="fa fa-check"></i>Provision of skilled manpower in diagnosis, management and prevention of neglected tropical diseases</li>
                            <li><i class="fa fa-check"></i>Provision of baseline data on the epidemiological status of neglected tropical diseases prevalent in the study region</li>
                            <li><i class="fa fa-check"></i>Development  and production of vaccines for prevention of neglected tropical diseases </li>
                            <li><i class="fa fa-check"></i>Training of manpower in the general area of molecular biotechnology techniques and forensic science for solving related problems.</li>
                            <li><i class="fa fa-check"></i>Establishment of a facility and channel for the security agencies and the society in resolving security, legal, paternity and other related issues.</li>
                            </ul>
                        </div>
                        
                        <div class="blog-items single-post" id="institutions">
                            <h2>Collaborating Institutions</h2>
                            <h6><b>i. National</b></h6>
                            <ol type="a" class="check-list text-justify" style="margin-top: -6px; margin-left: 15px;">
                            <li>Nigerian Institute for Trypanosomiasis (and Onchocerciasis) Research (NITR), Kaduna, Nigeria</li>
                            <li>National Institute for Medical Research (NIMR), Lagos, Nigeria </li>
                            <li>SightSavers, Nigeria</li>
                            <li>Africa Field Epidemiology Network (AFENET), Nigeria</li>
                            <li>Friends for Global Health Initiative, Nigeria</li>
                            <li>Inqaba Biotec, West Africa </li>
                            <li>DNA Lab, Kaduna, Nigeria</li>
                            </ol>
                            <h6><b>ii. Regional</b></h6>
                            <ol type="a" class="check-list text-justify" style="margin-top: -6px; margin-left: 15px;">
                            <li>University of Ngaoundere, Cameroon</li>
                            <li>Institute for Agricultural Research for Development (IRAD), Cameroon</li>
                            <li>Kumasi Centre for Collaborative Research (KCCR), Kwame Nkrumah Univ. of Science and Technology, Ghana</li>
                            <li>Centre International e Recherde-Development sur l’Elevage en zone Subhumide (CIRDES), Bobo-Dioulasso, Burkina Faso. </li>
                            </ol>
                            <h6><b>iii. International</b></h6>
                            <ol type="a" class="check-list text-justify" style="margin-top: -6px; margin-left: 15px;">
                            <li>University of Bremen, Germany</li>
                            <li>Institute of Tropical Medicine (NEKKEN), Nagasaki University, Japan</li>
                            <li>J-WEL, MIT, Cambridge, Boston, USA</li>
                            <li>Centre for Science and Technology for Non Aligned Movement and other Developing Countries (NAM S&T), Delhi,  India</li>
                            <li>WIPO-BVGH- Bio Ventures for Global Health, USA</li>
                            </ol>
                        </div>

                        <div class="blog-items single-post" id="whystudy">
                            <h2>Why study with us?</h2>
                            <p>ACENTDFB is the only institution in the West African region that runs postgraduate degree programme in biotechnology targeting neglected tropical diseases that currently number 20 according to the World Health Organisation. The Centre currently runs the following degree programmes:
                                <ul>
                                    <li>1. MSc in Biotechnology</li>
                                    <li>2. PhD Biotechnology</li>
                                    <li>3. PGD in Forensic Biotechnology</li>
                                </ul>
                            </p>
                            <p>When you study with us, you enjoy alot of benefits including:
                                <ul >
                                    <li><i class="fa fa-check"></i>Full access to the expertise and facilities of our partners around the world</li>
                                    <li><i class="fa fa-check"></i>Full and partial scholarships</li>
                                    <li><i class="fa fa-check"></i>State of the art accommodations for international students</li>
                                    <li><i class="fa fa-check"></i>Efficient international students support</li>
                                    <li><i class="fa fa-check"></i>Access to research grants</li>
                                    <li><i class="fa fa-check"></i>On time graduation</li>
                                    <li><i class="fa fa-check"></i>Real-world industry experience</li>
                                </ul>
                            </p>
                        </div>

                        <div class="blog-items single-post" id="partners">
                            <h2>Our partners</h2>
                            <p>
                                <ul class="check-list text-justify" style="margin-top: -6px;">
                                    <li class="sponsor-item">
                                        <?php
                                        $i = 0;
                                        while($i < 11){
                                            $i++
                                            ?>
                                                <img src="{{asset('img/logo/'.$i.'.jpg')}}" style="height:120px; width: auto;" alt="partner-image">
                                            <?php
                                        }                            
                                        ?>
                                    </li>
                                </ul>
                            </p>
                        </div>

                        
                        
                    </div><!-- Blog Posts -->
                </div>
            </div>
        </section><!-- /Blog Section -->
        @include('pages.inc_counter')<!-- Counter Section -->
</div>
@endsection
