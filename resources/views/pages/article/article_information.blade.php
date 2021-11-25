@php
	$nrc_language = config('myanmarnrc.language');
	$nrc_regions = config('myanmarnrc.regions_states');
	$nrc_townships = config('myanmarnrc.townships');
	$nrc_citizens = config('myanmarnrc.citizens');
	$nrc_characters = config('myanmarnrc.characters');
@endphp

@extends('layouts.app')
<style>
    .article_btn{
        width : 180px;
    }
</style>

@section('content')
     <div class="main-wrapper">
        <!-- Page Banner Start -->
        <div class="section page-banner">
            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}
            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">
            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Article <span>Detail</span></h2>
                </div>
                <!-- Page Banner End -->

            </div>
            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">
                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>
                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png')}}" alt="Shape">
            </div>--}}
            <!-- Shape Icon Box End -->
            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">
            {{--<img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg')}}" alt="Shape">--}}
        </div>
        <div class="section"> <!-- section-padding mt-n10 -->
            <div class="container mt-5"> <!-- container-fluid p-4 -->
                <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark mb-3">

                        <div class="card-body">
                            <p class="card-text reject">Your Registration Form need to prepare.Please update your form
                             </p>
                        </div>
                    </div>
                </div>
                <div class="check_registration" style="display:none; margin-left: 7%; margin-right: 7%;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body">
                            <p class="card-text">Your Application Form is checking</p>
                        </div>
                    </div>
                </div>

                <div id="article">
                    <div class="row">
                        <div class="card col-md-7 m-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 widget-information">
                                        <h4 class="col-md-12 card-title text-success">Description</h4>
                                        <hr>
                                        <div class="info-list">
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="description-info"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="col-md-12 card-title text-success">Requirement</h4>
                                                    <hr>
                                                    <div class="requirement-info">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fees -->
                        <div class="card col-md-4 m-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 widget-information">
                                        <h4 class="col-md-12 card-title text-success">Fees</h4>
                                        <hr>
                                        <div class="info-list">
                                            <div class="col-md-12">
                                                <ul>
                                                        <li><i class="icofont-money"></i> <strong>Application Fee</strong> <span class='application-fee'></li>
                                                        <li><i class="icofont-money"></i> <strong>Registration Fee</strong><span class='registration-fee'></li>
                                                        <li><i class="icofont-money"></i> <strong>Resign Fee</strong><span class='reconnected-fee'></li>
                                                        <!-- <li><i class="icofont-money"></i> <strong>Renew Fee</strong><span class='renew-fee'></li>
                                                        <li><i class="icofont-money"></i> <strong>Delay Fee</strong><span class='delay-fee'></li> -->
                                                        <div class="pull-right mt-4">
                                                            <p class="info-btn col-md-2 mb-4 text-dark h6">
                                                                <button class="btn btn-success btn-hover-dark" id="register_btn">Register</button>
                                                            </p>
                                                        </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Selected Article Modal -->
    <div class="modal fade" id="articleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center"  style="font-weight:bold">
                    စာရင်းကိုင်အလုပ်သင်လျှောက်လွှာပုံစံ ရွေးချယ်ပါ</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div id="firm_article_row">
                        <h5 >Firm Article</h5>
                        <button class="btn btn-success btn-hover-dark article_btn" id="c2_pass_3yr_btn">CII Pass 3 yr</button>
                        <button class="btn btn-success btn-hover-dark article_btn" id="c12_btn">CPA I,II</button>
                        <button class="btn btn-success btn-hover-dark article_btn" id="c2_pass_1yr_btn">CII Pass 1 yr</button>
                        <button class="btn btn-success btn-hover-dark article_btn" id="qt_pass_3yr_btn">QT Pass 3 yr</button>
                    </div>
                    <div id="firm_article_renew_row">
                        <h5 >Renew Article</h5>
                        <button class="btn btn-success btn-hover-dark article_btn" id="c2_pass_renew_btn">CII Pass Renew</button>
                        <button class="btn btn-success btn-hover-dark article_btn" id="c12_renew_btn">CI,CII Renew</button>
                    </div>
                    <hr id="article_hr">
                    <div id="gov_article_row">
                        <h5 >Government Article</h5>
                            <button class="btn btn-success btn-hover-dark " id="articel_gov_btn">Government Article</button>
                    </div>
                    <!-- <h5 >Resign</h5>
                        <button class="btn btn-success btn-hover-dark " id="articel_resign_btn">Aticle Resign</button> -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close
                    </button>

                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Section -->
    <script>
         var mmnrc_regions = {!! json_encode($nrc_regions) !!};
        // get NRC Townships data from myanmarnrc.php config file
        var mmnrc_townships = {!! json_encode($nrc_townships) !!};
        // get NRC characters data from myanmarnrc.php config file
        var mmnrc_characters = {!! json_encode($nrc_characters) !!};
        // get language data from myanmarnrc.php config file
        var mmnrc_language = "{{ $nrc_language }}";
    </script>
@endsection
@push('scripts')
<script type="text/javascript">
    $('document').ready(function(){
        var course_type = location.pathname.split('/');
        var student = JSON.parse(localStorage.getItem('studentinfo'));
        if(!student){
            localStorage.setItem('course_type',course_type[2])
        }
        loadDescription('Article');

        $('#register_btn').click(function () {
            if(!student){
                location.href = FRONTEND_URL + '/login';
            }else{
                get_student_info(student_id).then(data => {

                    let student_info = data.data
                    let student_reg = data.data.student_register
                    let qualified_test = data.data.qualified_test
                    let latest_article = data.data.article.slice(-1);
                    let latest_gov_article = data.data.gov_article.slice(-1);
                    let lastest_row = student_reg.length - 1;
                    let course = student_reg[lastest_row]?.course?.code;  // cpa1/cpa2
                    // let exam_result = student_reg[lastest_row]?.status;  // pass/fail
                    let module = student_reg[lastest_row]?.module;  // module 1/2/all
                    //let type = student_reg[lastest_row]?.type;  //  0-self_study / 1-private / 2-mac
                    let type_data=student_info.student_course_regs.pop();
                    let type=type_data?.type;
                    let form_type = student_reg[lastest_row]?.form_type;
                    let internship = student_reg[lastest_row]?.internship;
                    //let exam_result = student_info.exam_results.length;
                    let exam_results = student_info.exam_results.slice(-1);
                    let exam_registers = student_info.exam_registers.slice(-1);
										let article_invoice = data.data.invoice;
										let previous_article_invoice = article_invoice[article_invoice.length -2];

										// validate c12_renew or c2_pass_renew
										if(previous_article_invoice?.invoiceNo.includes("c12_renew")){
											$("#c2_pass_renew_btn").css('display','none');
										}
										else if(previous_article_invoice?.invoiceNo.includes("c2_pass_renew")){
											$("#c12_renew_btn").css('display','none');
										}


                    //var get_year = 0;

                    if(latest_article[0]?.done_status == 1 && latest_article[0]?.article_form_type == 'c12' ){
                        $("#c12_btn").hide();
                        $("#c2_pass_3yr_btn").hide();
                        $("#qt_pass_3yr_btn").hide();
                        $("#firm_article_renew_row").hide();
                        $("#article_hr").hide();
                        $("#gov_article_row").hide();
                        if(exam_registers[0].form_type == 4 && (exam_results[0]?.registeration_id == exam_registers[0]?.id)){
                            $("#c2_pass_1yr_btn").prop('disabled', false);
                        }else{
                            $("#c2_pass_1yr_btn").prop('disabled', true);
                        }
                        $('#articleModal').modal('toggle');
                    }else if(latest_article[0]?.resign_status == 1 && latest_article[0]?.article_form_type == 'resign'){
                        
                        if(student_info.offline_user == 1){
                            if(exam_registers[0].form_type == 4){
                                $("#c12_renew_btn").hide();
                            }else{
                                $("#c2_pass_renew_btn").hide();
                            }
                        }
                        // else{
                        //     if(exam_registers[0].form_type == 4 && (exam_results[0]?.registeration_id == exam_registers[0]?.id)){
                        //         $("#c12_renew_btn").hide();
                        //     }else{
                        //         $("#c2_pass_renew_btn").hide();
                        //     }
                        // }
                        if(data.data.article[0].article_form_type=="c2_pass_qt_pass_3yr" || data.data.article[0].article_form_type=="c2_pass_1yr" || data.data.article[0].article_form_type=="c2_pass_renew"){
                            $("#c12_renew_btn").hide();
                            $('#c2_pass_renew_btn').click(function () {
                                location.href = FRONTEND_URL + '/article_cpa_two_renew?id=' + data.data.article[0].id;
                            });
                        }else if(data.data.article[0].article_form_type=="c12_renew"){
                            $("#c2_pass_renew_btn").hide();
                            $('#c12_renew_btn').click(function () {
                                location.href = FRONTEND_URL + '/article_cpa_one_two_renew?id=' + data.data.article[0].id;
                            });
                        }
                        $("#firm_article_row").hide();
                        $("#c12_btn").hide();
                        $("#c2_pass_1yr_btn").hide();
                        $("#c2_pass_3yr_btn").hide();
                        $("#qt_pass_3yr_btn").hide();
                        $("#article_hr").hide();
                        $("#gov_article_row").hide();
                        $('#articleModal').modal('toggle');
                    }else if(latest_gov_article[0]?.done_status == 1){
                        $("#c12_btn").hide();
                        $("#c2_pass_3yr_btn").hide();
                        $("#qt_pass_3yr_btn").hide();
                        $("#firm_article_renew_row").hide();
                        $("#article_hr").hide();
                        $("#gov_article_row").hide();
                        if(exam_registers[0].form_type == 4 && (exam_results[0]?.registeration_id == exam_registers[0]?.id)){
                            $("#c2_pass_1yr_btn").prop('disabled', false);
                        }else{
                            $("#c2_pass_1yr_btn").prop('disabled', true);
                        }
                        $('#articleModal').modal('toggle');
                    }else{
                        if((form_type == 3 && course == "cpa_1") || (form_type == 3 && course == "cpa_2")){
                            if(internship == "အစိုးရ ဌာနတွင်"){
                                $("#firm_article_row").hide();
                                $("#firm_article_renew_row").hide();
                                $("#article_hr").hide();
                            }else if(internship == "ဒုတိယပိုင်းသင်တန်းအောင်မြင်ပြီးမှ အလုပ်သင်ဆင်းလိုပါသည်"){
                                $("#c12_btn").hide();
                                $("#c2_pass_1yr_btn").hide();
                                $("#qt_pass_3yr_btn").hide();
                                $("#firm_article_renew_row").hide();
                                $("#article_hr").hide();
                                $("#gov_article_row").hide();
                                $("#c2_pass_3yr_btn").prop('disabled', true);
                            }else if(internship == "ကိုယ်ပိုင်စာရင်းကိုင်သင်တန်းတွင်"){
                                $("#c2_pass_3yr_btn").hide();
                                $("#c2_pass_1yr_btn").hide();
                                $("#qt_pass_3yr_btn").hide();
                                $("#firm_article_renew_row").hide();
                                $("#article_hr").hide();
                                $("#gov_article_row").hide();
                            }else{
                                if(student_info.offline_user == 1){
                                    if(type == 2){ //  MAC
                                        $("#c2_pass_3yr_btn").hide();
                                        $("#c2_pass_1yr_btn").hide();
                                        $("#qt_pass_3yr_btn").hide();
                                        $("#firm_article_renew_row").hide();
                                    }else{
                                        $("#c2_pass_3yr_btn").hide();
                                        $("#c2_pass_1yr_btn").hide();
                                        $("#qt_pass_3yr_btn").hide();
                                        $("#firm_article_renew_row").hide();
                                        $("#article_hr").hide();
                                        $("#gov_article_row").hide();
                                    }
                                }else{
									$("#gov_article_row").hide();
                                    $("#c2_pass_3yr_btn").hide();
                                    $("#c2_pass_1yr_btn").hide();
                                    $("#qt_pass_3yr_btn").hide();
                                    $("#firm_article_renew_row").hide();
                                }
                            }
                            $('#articleModal').modal('toggle');
                        }else if(form_type == 4 && course == "cpa_2"){
                            if(student_info.offline_user == 1){
                                $("#c2_pass_3yr_btn").hide();
                                $("#c2_pass_1yr_btn").hide();
                                $("#qt_pass_3yr_btn").hide();
                                $("#firm_article_renew_row").hide();
                                $("#article_hr").hide();
                                $("#gov_article_row").hide();
                            }else{
                                $("#c12_btn").hide();
                                $("#c2_pass_1yr_btn").hide();
                                $("#qt_pass_3yr_btn").hide();
                                $("#firm_article_renew_row").hide();
                                $("#article_hr").hide();
                                $("#gov_article_row").hide();
                                if(exam_registers[0].form_type == 4 && (exam_results[0]?.registeration_id == exam_registers[0]?.id)){
                                    $("#c2_pass_3yr_btn").prop('disabled', false);
                                }else if(student_info.registration_no == 0){
                                    $("#c2_pass_3yr_btn").prop('disabled', false);
                                }else{
                                    $("#c2_pass_3yr_btn").prop('disabled', true);
                                }
                            }
                            $('#articleModal').modal('toggle');
                        }else if(qualified_test){
                            $("#c12_btn").hide();
                            $("#c2_pass_1yr_btn").hide();
                            $("#c2_pass_3yr_btn").hide();
                            $("#firm_article_renew_row").hide();
                            $("#article_hr").hide();
                            $("#gov_article_row").hide();
                            $('#articleModal').modal('toggle');
                        }else{
                            alert("You aren't cpa student.");
                            $("#register_btn").prop('disabled', true);
                        }
                    }
                });
            }
        });

        $('#c2_pass_3yr_btn').click(function () {
            location.href = FRONTEND_URL + '/article_firm_registration?data=' + 'c2_pass_3yr';
        });
        $('#c12_btn').click(function () {
            location.href = FRONTEND_URL + '/article_firm_registration?data=' + 'c12';
        });
        // $('#c2_pass_1yr_btn').click(function () {
        //     location.href = FRONTEND_URL + '/article_firm_registration?data=' + 'c2_pass_1yr';
        // });
        $('#qt_pass_3yr_btn').click(function () {
            location.href = FRONTEND_URL + '/article_qt_firm_registration';
        });
        // $('#c2_pass_renew_btn').click(function () {
        //     //location.href = FRONTEND_URL + '/article_renew_firm_registration?data=' + 'c2_pass_renew';
        //     location.href = FRONTEND_URL + '/article_cpa_two_renew?data=' + 'c2_pass_renew';
        // });
        // $('#c12_renew_btn').click(function () {
        //     location.href = FRONTEND_URL + '/article_renew_firm_registration?data=' + 'c12_renew';
        // });

        $('#articel_gov_btn').click(function () {
            location.href = FRONTEND_URL + '/article_gov_registration';
        });

        $('#articel_resign_btn').click(function () {
            location.href = FRONTEND_URL + '/article_resign_registration';
        });

    })

</script>
@endpush
