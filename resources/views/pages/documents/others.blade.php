@extends('layout.pages_frame')

@section('page-content')
<div>
    <?php
        $type_array = array("committee","accounts","financial","audit", "others", "financialplan");
        if(isset($type)&& in_array($type,$type_array)){
            
        }else{
            $type = 'accounts';
        }
    ?>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>DOCUMENTS OF ACENTDFB</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/documents')}}">Documents</a></li>
                        <li class="breadcrumb-item active">{{$type}}</li>
                    </ol>
                    <p class="text-justify">ACENTDFB documents includes student documents, audited accounts, award documents, interim financial report and internal audit report.</p>
                </div>
            </div>
        </div><!-- /Page Header -->
        <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            <?php                    
                if($type == 'committee'){committee();}
                elseif($type == 'accounts'){accounts();}
                elseif($type == 'financial'){financial();}
				elseif($type == 'others'){others();}
                elseif($type == 'audit'){audit();}
                elseif($type == 'financialplan'){financialplan();}
            ?>
	</div>
        </section>
</div>


<?php
function committee(){
    ?>
    <div class="section-heading text-center mb-40">
        <h2>Audit Committee</h2>
        <span class="heading-border"></span>
    </div><!-- /Section Heading -->
    <div class="row">
        <div class="col-lg-12 xs-padding">
            <div class="blog-items grid-list row">
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>AUDIT COMMITTEE Minutes</a></h3>
                            <a href="{{asset('doc/AC/AUDIT_COMMITTEE_Minutes.pdf')}}" class="post-meta">Download</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>AUDIT COMMITTEE Appointments ACE NTDFB FILE</a></h3>
                            <a href="{{asset('doc/AC/AUDIT_COMMITTEE_Appointments_ACE_NTDFB_FILE.pdf')}}" class="post-meta">Download</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>ACENTDFB Audit Committee Report 2016</a></h3>
                            <a href="{{asset('doc/AC/ACENTDFB_Audit_Committee_Report_2016.pdf')}}" class="post-meta">Download</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>ACENTDFB Audit Committe Report 2017</a></h3>
                            <a href="{{asset('doc/AC/ACENTDFB_Audit_Committee_Report_2017.pdf')}}" class="post-meta">Download</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
                <div class="col-md-4 padding-15">
                    <div class="blog-post">
                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                            <h3><a>ACENTDFB Audit Committe Report 2018</a></h3>
                            <a href="{{asset('doc/AC/ACENTDFB_Audit_Committee_Report_2018.pdf')}}" class="post-meta">Download</a>
                        </div>
                    </div>
                </div><!-- Post 1 -->
            </div>
        </div><!-- Blog Posts -->
    </div>
    <?php
}

function accounts(){
    ?>
        <div class="section-heading text-center mb-40">
            <h2>Audited Accounts</h2>
            <span class="heading-border"></span>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB ABU 2014 AUDITED ACCOUNT</a></h3>
                                <a href="{{asset('doc/AA/ACENTDFB_ABU_2014_AUDITED_ACCOUNT.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                               <h3><a>ACENTDFB ABU 2015 AUDITED ACCOUNT</a></h3>
                                <a href="{{asset('doc/AA/ACENTDFB_ABU_2015_AUDITED_ACCOUNT.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACE NTDFB ABU 2016 AUDITED ACCOUNT REPORT  </a></h3>
                                <a href="{{asset('doc/AA/ACE_NTDFB_ABU_2016_AUDITED_ACCOUNT_REPORT_1.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                    <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                                    <h3><a>ACE NTDFB ABU 2017 AUDITED ACCOUNT REPORT  </a></h3>
                                <a href="{{asset('doc/AA/ACE_NTDFB_ABU_2017_AUDITED_ACCOUNT_REPORT_1.pdf')}}" class="post-meta">Download</a>

                             </div>
                        </div>
                    </div><!-- Post 1 -->
                    
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                    <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACE NTDFB ABU 2018 AUDITED ACCOUNT REPORT</a></h3>
                                <a href="{{asset('doc/AA/ACE_NTDFB_ABU_2018_AUDITED_ACCOUNT_REPORT.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div><!-- Blog Posts -->
        </div>
    <?php
}

function financial(){
    ?>
        <div class="section-heading text-center mb-40">
            <h2>Interim Financial Report</h2>
            <span class="heading-border"></span>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>INTERIM FINANCIAL REPORT (IFR) 2015</a></h3>
                                <a href="{{asset('doc/IFR/INTERIM_FINANCIAL_REPORT_(IFR)_2015.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>INTERIM FINANCIAL REPORT IFR JANUARY TO JUNE 2016(1)</a></h3>
                                <a href="{{asset('doc/IFR/INTERIM_FINANCIAL_REPORT_IFR_JANUARY_TO_JUNE_2016(1).xls')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->

                    <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                    <h3><a>INTERIM FINANCIAL REPORT IFR JAN TO JUNE 2017</a></h3>
                                    <a href="{{asset('doc/IFR/INTERIM_FINANCIAL_REPORT_IFR_JAN_TO_JUNE_2017.xls')}}" class="post-meta">Download</a>
    
                                </div>
                            </div>
                        </div><!-- Post 1 -->
                        <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                        <h3><a>INTERIM FINANCIAL REPORT IFR JULY TO DEC 2017</a></h3>
                                        <a href="{{asset('doc/IFR/INTERIM_FINANCIAL_REPORT_IFR_JUL_TO_DEC_2017.xls')}}" class="post-meta">Download</a>
                                     </div>
                                </div>
                            </div><!-- Post 1 -->

                    <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                    <h3><a>INTERIM FINANCIAL REPORT IFR JAN TO JUNE 2018</a></h3>
                                    <a href="{{asset('doc/IFR/INTERIM_FINANCIAL_REPORT_IFR_JAN_TO_JUNE_2018.xls')}}" class="post-meta">Download</a>
    
                                </div>
                            </div>
                        </div><!-- Post 1 -->
                        <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                        <h3><a>INTERIM FINANCIAL REPORT IFR JULY TO DEC 2018</a></h3>
                                        <a href="{{asset('doc/IFR/INTERIM_FINANCIAL_REPORT_IFR_JUL_TO_DEC_2018.xls')}}" class="post-meta">Download</a>
                                     </div>
                                </div>
                            </div><!-- Post 1 -->

                            <div class="col-md-4 padding-15">
                                    <div class="blog-post">
                                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                            <h3><a>INTERIM FINANCIAL REPORT IFR JAN TO JUNE 2019</a></h3>
                                            <a href="{{asset('doc/IFR/INTERIM_FINANCIAL_REPORT_IFR_JAN_TO_JUNE_2019.xls')}}" class="post-meta">Download</a>
            
                                        </div>
                                    </div>
                                </div><!-- Post 1 -->

                            <div class="col-md-4 padding-15">
                                    <div class="blog-post">
                                        <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                            <h3><a>ANNEX TO IFR JAN TO JUNE 2018</a></h3>
                                            <a href="{{asset('doc/IFR/ANNEX_INTERIM_FINANCIAL_REPORT_IFR_JAN_TO_JUNE_2019.xls')}}" class="post-meta">Download</a>
                                         </div>
                                    </div>
                                </div><!-- Post 1 -->
                                <div class="col-md-4 padding-15">
                                        <div class="blog-post">
                                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                                <h3><a>ANNEX TO IFR</a></h3>
                                                <a href="{{asset('doc/IFR/ANNEX_INTERIM_FINANCIAL_REPORT.xlsx')}}" class="post-meta">Download</a>
                                             </div>
                                        </div>
                                    </div><!-- Post 1 -->
                </div>
            </div><!-- Blog Posts -->
        </div>
    <?php
}

function audit(){
    ?>
        <div class="section-heading text-center mb-40">
            <h2>Internal Audit Report</h2>
            <span class="heading-border"></span>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">

                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB Internal Audit Report 2015</a></h3>
                                <a href="{{asset('doc/IAR/INTERNAL_AUDIT_REPORT_2015.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->

                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB Internal Audit Report 2017 (Jan-June)</a></h3>
                                <a href="{{asset('doc/IAR/ACENTDFB_Internal_Audit_Report_2017_(Jan-June).pdf')}}" class="post-meta">Download</a>
                            </div>
                        </div>
                    </div><!-- Post 1 -->

                    <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                    <h3><a>ACENTDFB Internal Audit Report 2017 (Jul-Dec)</a></h3>
                                    <a href="{{asset('doc/IAR/ACENTDFB_Internal_Audit_Report_2017_(Jul-Dec).pdf')}}" class="post-meta">Download</a>
                                </div>
                            </div>
                        </div><!-- Post 1 -->

                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB Internal Audit Report 2018 (Jan-Jun)</a></h3>
                                <a href="{{asset('doc/IAR/ACENTDFB_Internal_Audit_Report_2018_(Jan-Jun).pdf')}}" class="post-meta">Download</a>
                            </div>
                        </div>
                    </div><!-- Post 1 -->

                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB Internal Audit Report 2018 (Jul-Dec)</a></h3>
                                <a href="{{asset('doc/IAR/ACENTDFB_Internal_Audit_Report_2018_(Jul-Dec).pdf')}}" class="post-meta">Download</a>
                            </div>
                        </div>
                    </div><!-- Post 1 -->


                </div>
            </div><!-- Blog Posts -->
        </div>    
    <?php
}

function financialplan(){
    ?>
        <div class="section-heading text-center mb-40">
            <h2>Financial Management Plan</h2>
            <span class="heading-border"></span>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">

                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB Financial Management Plan</a></h3>
                                <a href="{{asset('doc/financialplan/ACENTDFB_Financial_Management_Plan.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
					
					<div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB 2019 WorkPlan uncosted</a></h3>
                                <a href="{{asset('doc/financialplan/ACENTDFB_2019_WorkPlan_uncosted.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
					
					<div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB 2019 Budget</a></h3>
                                <a href="{{asset('doc/financialplan/ACENTDFB_2019_Budget.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
					
					<div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB 2018 WorkPlan reviewed</a></h3>
                                <a href="{{asset('doc/financialplan/ACENTDFB_2018_WorkPlan_reviewed.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->


                </div>
            </div><!-- Blog Posts -->
        </div>    
    <?php
}

function others(){
    ?>
        <div class="section-heading text-center mb-40">
            <h2>Other Documents</h2>
            <span class="heading-border"></span>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB Sexual Harassment Policy</a></h3>
                                <a href="{{asset('doc/Others/ACENTDFB_Sexual_Harassment_Policy.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->

                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB Student Handbook</a></h3>
                                <a href="{{asset('doc/Others/ACENTDFB_Student_Handbook.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
					
					<div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB Guidelines and Rules of Conduct</a></h3>
                                <a href="{{asset('doc/Others/Guidelines_and_Rules_of_Conduct.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
					
					<div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDFB Scholarship Policy</a></h3>
                                <a href="{{asset('doc/Others/ACENTDFB_Scholarship_Policy.pdf')}}" class="post-meta">Download</a>

                            </div>
                        </div>
                    </div><!-- Post 1 -->
					
					<div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <div class="blog-content"><img src="{{asset('img/file_icon.png')}}" style="height: 100px; width:100px;"/>
                                <h3><a>ACENTDB Authorship Guidelines</a></h3>
                                <a href="{{asset('doc/Others/ACENTDB_Authorship_Guidelines.pdf')}}" class="post-meta">Download</a>

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
