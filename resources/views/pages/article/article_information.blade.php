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
            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">
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
            <div class="shape-icon-box">
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">
                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>
                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png')}}" alt="Shape">
            </div>
            <!-- Shape Icon Box End -->
            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">
            <img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg')}}" alt="Shape">
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
                                                        <li><i class="icofont-money"></i> <strong>Yearly Fee</strong><span class='yearly-fee'></li>
                                                        <li><i class="icofont-money"></i> <strong>Renew Fee</strong><span class='renew-fee'></li>
                                                        <li><i class="icofont-money"></i> <strong>Delay Fee</strong><span class='delay-fee'></li>
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
                    {{--<div id="firm_article_row">
                        <p class="text-start " >စာရင်းကိုင်အလုပ်သင်လျှောက်ထားလိုသည့် ကာလ ကိုရွေးပါ။</p>
                        <div class="row mb-4">
                            <div class="col-md-4" align="right">
                                <input type="radio" class="form-check-input mr-3" value="1" id="article_year1" name="article_year">
                                <label class="form-check-label " for="">One</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" class="form-check-input mr-3" value="2" id="article_year2" name="article_year" >
                                <label class="form-check-label " for="">Two</label>
                            </div>
                            <div class="col-md-4" align="left">
                                <input type="radio" class="form-check-input mr-3" value="3" id="article_year3" name="article_year">
                                <label class="form-check-label " for="">Three</label><br>
                            </div>
                        </div>
                        <!-- <a href="{{url('article_firm_registration')}}" class="btn btn-md btn-success article_btn mt-3">Firm</a> -->
                        <button class="btn btn-success btn-hover-dark article_btn" id="articel_firm_btn">Firm</button>
                    </div>
                    <hr id="article_hr" style="display:none;">
                    <div id="gov_article_row" style="display:none;">
                        <!-- <a href="{{url('article_gov_registration')}}" class="btn btn-md btn-success article_btn" id="articel_gov_btn">Government</a> -->
                        <button class="btn btn-success btn-hover-dark article_btn" id="articel_gov_btn">Government</button>
                    </div>--}}

                    <div id="firm_article_row">
                        <h5 >Firm Article</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-success btn-hover-dark article_btn" id="c2_pass_3yr_btn">CII pass 3 yr</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-success btn-hover-dark article_btn" id="c12_btn">CPA I,II</button><br>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-success btn-hover-dark article_btn" id="c2_pass_1yr_btn">CII pass 1 yr</button><br>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-success btn-hover-dark article_btn" id="qt_pass_3yr_btn">QT pass 3 yr</button><br>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <button class="btn btn-success btn-hover-dark article_btn" id="c2_pass_renew_btn">CII pass Renew</button><br>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-success btn-hover-dark article_btn" id="c12_renew_btn">CI,CII Renew</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <hr>
                        <h5 >Government</h5>
                            <button class="btn btn-success btn-hover-dark " id="articel_gov_btn">Government Article</button>
                    </div>
                    
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
                    let article = data.data.article;
                    let lastest_row = student_reg.length - 1;
                    let course = student_reg[lastest_row].course.code;  // cpa1/cpa2
                    let exam_result = student_reg[lastest_row].status;  // pass/fail
                    let module = student_reg[lastest_row].module;  // module 1/2/all
                    let type = student_reg[lastest_row].type;  //  0-self_study / 1-private / 2-mac
                    var get_year = 0;

                    for(var i=0; i<article.length; i++){
                        get_year += article[i].article_form_type;
                    }

                    if(get_year == 1){
                        $("#article_year3").prop('disabled', true);
                    }else if(get_year == 2){
                        $("#article_year2").prop('disabled', true);
                        $("#article_year3").prop('disabled', true);
                    }else if(get_year == 3){
                        $("#article_year1").prop('disabled', true);
                        $("#article_year2").prop('disabled', true);
                        $("#article_year3").prop('disabled', true);
                        $('#articel_firm_btn').prop('disabled', true);
                        $('#articel_gov_btn').prop('disabled', true);

                    }

                    if(course == "cpa_1" || course == "cpa_2"){
                        if(type == 0 || type == 1){
                            $("#gov_article_row").hide();
                            $("#article_hr").hide();
                        }else{
                            $("#gov_article_row").show();
                            $("#article_hr").show();
                        }
                        $('#articleModal').modal('toggle');
                    }else{
                        alert("You aren't cpa student.");
                        $("#register_btn").prop('disabled', true);
                    }
                });
            }
        });

        $('#articel_firm_btn').click(function () {
            var radioValue = $("input[name='article_year']:checked").val();
            if (radioValue == 1) {
                location.href = FRONTEND_URL + '/article_firm_registration?data=' + 1;
            } else if (radioValue == 2) {
                location.href = FRONTEND_URL + '/article_firm_registration?data=' + 2;
            } else {
                location.href = FRONTEND_URL + '/article_firm_registration?data=' + 3;
            }
        });

        $('#c2_pass_3yr_btn').click(function () {
            location.href = FRONTEND_URL + '/article_firm_registration?data=' + 1;
        });
        $('#c12_btn').click(function () {
            location.href = FRONTEND_URL + '/article_firm_registration?data=' + 2;
        });
        $('#c2_pass_1yr_btn').click(function () {
            location.href = FRONTEND_URL + '/article_firm_registration?data=' + 3;
        });
        $('#qt_pass_3yr_btn').click(function () {
            location.href = FRONTEND_URL + '/article_qt_firm_registration';
        });
        $('#c2_pass_renew_btn').click(function () {
            location.href = FRONTEND_URL + '/article_renew_firm_registration?data=' + 1;
        });
        $('#c12_renew_btn').click(function () {
            location.href = FRONTEND_URL + '/article_renew_firm_registration?data=' + 2;
        });

        $('#articel_gov_btn').click(function () {
            location.href = FRONTEND_URL + '/article_gov_registration';
        });

    })

</script>
@endpush
