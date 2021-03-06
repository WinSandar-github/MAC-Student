@extends('layouts.app')

@section('content')
    <div class="main-wrapper">

        <!-- Header Section Start -->
        <!-- Header Section End -->

        <!-- Mobile Menu Start -->
        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Page Banner Start -->
        <div class="section page-banner">

            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Shape">--}}

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png') }}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">CPA Two Exam Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png') }}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png') }}" alt="Shape">

            </div>--}}
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png') }}" alt="Shape">

            {{--<img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg') }}" alt="Shape">--}}

        </div>

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                <div class="comment-form">
                    <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        <div class="row">
                            <div class="card border-success mb-3">
                                <div class="card-body">
                                    
                                    <div class="row mb-5">
                                        <h5 class="card-title text-center fw-bolder">
                                            ??????????????????????????????????????????????????????????????????????????????<br>
                                            ???????????????????????????????????????????????????????????????????????????(?????????????????????????????????)??????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                        </h5>
                                        <div class="d-flex justify-content-between mt-3">
                                            <h6>?????????????????? - {{ date('d-M-Y') }}</h6>
                                            <h6 style="padding-right:80px">?????????????????????????????????????????????????????? ???/?????????????????? - <span name="exam_date" id="exam_date"></span></h6>
                                            <h6>???????????????????????? - <span class="batch_number"></span></h6>
                                        </div>
                                    </div>

                                    {{-- <form method="post" id="cpa_exam_register" enctype="multipart/form-data"> --}}
                                    <form method="post" id="cpa2_exam_form" action="javascript:void();" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" id="form_type" class="form-control" name="form_type">
                                        <input type="hidden" name="is_private" id="is_private" class="form-control">
                                        <input type="hidden" id="batch_id" class="form-control" name="batch_id">
                                            <div class="col-md-12 mt-3">
                                                <div class="row">
                                                    <div class="col-md-8">

                                                        <div class="row mb-3">
                                                            <label  class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????(??????????????????/???????????????????????????)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_mm" id="name_mm" class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="name_eng" id="name_eng" class="form-control" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????????????????????????????????????????</label>
                                                            <div class="col-md-6">
                                                                <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                    <div class="col-md-2 col-5 pr-1">
                                                                        <input type="text" name="nrc_state_region" id="nrc_state_region" class="form-control" style="padding:6px" readonly>
                                                                    </div>
                                                                    <div class="col-md-3 col-7 px-1">
                                                                        <input type="text" name="nrc_township" id="nrc_township" class="form-control" style="padding:6px" readonly>
                                                                    </div>
                                                                    <div class="col-md-3 col-5 px-1">
                                                                        <input type="text" name="nrc_citizen" id="nrc_citizen" class="form-control"  style="padding:6px" readonly>
                                                                    </div>

                                                                    <div class="col-md-4 col-7 pl-1">
                                                                        <input type="text" name="nrc_number" placeholder="??????????????????"
                                                                            id="nrc_number" pattern=".{6,6}" class="form-control"
                                                                            oninput="this.value= en2mm(this.value);"
                                                                            maxlength="6" minlength="6" placeholder=""
                                                                            style="height: 38px" value="{{ old('nrc_number') }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row mb-3">
                                                            <label  class="col-md-6 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????(??????????????????/???????????????????????????)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" name="father_name_eng" id="father_name_eng" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--User Photo--}}
                                                    <div class="col-md-4" align="center">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-circle shadow">
                                                                <img class="col-md-3 profile-style" name="previewImg" id="previewImg" src="" accept="image/png,image/jpeg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--User Photo--}}
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>???????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="personal_no" id="personal_no" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="address" id="address" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="phone" id="phone" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>?????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="class_address" id="class_address" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('??????') }}</span>??????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <select class="form-control form-select" name="exam_department" id="exam_department"  >
                                                                <option value="" disabled selected>?????????????????????????????????????????????????????? ??????????????????????????????</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="is_private_school" style="display=none;">
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label"
                                                            id="cpa2_label1">{{ __('?????????') }}</label>
                                                        <label class="col-md-3 col-form-label label_align_right">{{ __('????????????????????????????????????????????????????????????????????????????????????') }}</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="private_school_name" id="selected_school_id"
                                                                    class="form-control" value="{{ old('private_school_name') }}" readonly="">
                                                            <!-- <div class="form-group">
                                                                <select class="form-control form-select"
                                                                    name="private_school_name" id="selected_school_id"
                                                                    style="width: 100%;">
                                                                    <option value="" disabled selected>Select School</option>
                                                                </select>
                                                            </div> -->
                                                        </div>
                                                    </div><br />
                                                </div>
                                                <div class="row mb-3" style="display:none">
                                                    <div class="col-md-4 col-form-label" id="">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                    </div>
                                                </div>
                                                <div class="row mb-3" style="display:none">
                                                    <!-- ?????????????????????????????????????????????????????? ??????????????????/??? -->
                                                    <!-- <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????? ??????????????????/???</label> -->
                                                    <label class="col-md-4 col-form-label label">
                                                        <span class="pull-left" id="cpa2_label2">{{ __('?????????') }}</span>
                                                        <span class="pull-left" style="padding-left: 35px;">{{ __('(???)') }}</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="last_ans_exam_no" class="form-control last_ans_exam_no" placeholder="??????????????????????????????????????????????????????????????????????????????????????????????????????????????????"  id="last_ans_exam_no">
                                                    </div>
                                                </div>

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 60px;">{{ __('(???)') }}</span>?????????????????????????????? ??????????????????/???</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="date" class="form-control date" placeholder="??????????????????(MMM-YYYY)"  id="date">
                                                    </div>
                                                </div>
                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left" style="padding-left: 60px;">{{ __('(???)') }}</span>?????????????????????????????????????????????</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="personal_no" class="form-control personal_no" placeholder="?????????????????????????????????????????????"  id="personal_no">
                                                    </div>
                                                </div>
                                                {{--<div class="row mb-3" style="margin-left:33px;">
                                                    <div class="col-md-1">
                                                        <label class="col-form-label">(???)</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="col-form-label label_align_right">?????????????????????????????????????????????????????????????????????????????????????????????????????? Module
                                                            ??????????????????????????????????????????????????????????????????(???)?????????????????????????????????????????????</label>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-6 mx-2 ">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="last_ans_module" id="lst_m1" value="1">&nbsp;Module 1
                                                        </label>
                                                        <label class="checkbox-inline" style="margin-left:3%">
                                                            <input type="checkbox" name="last_ans_module" id="lst_m2" value="2">&nbsp;Module 2
                                                        </label>
                                                    </div>
                                                </div>--}}

                                                <div class="row mb-3" style="display:none">
                                                    <label class="col-md-12 col-form-label"><span class="pull-left" style="margin-right: 40px;padding-left: 60px;">{{ __('(???)') }}</span>?????????????????????????????????????????????????????????????????????????????????????????????????????? Module ??????????????????????????????????????????????????????????????????(???)????????????????????????????????????????????? - </label>
                                                </div>

                                                <div class="row mb-3" style="padding-left: 363px; display:none;" >                                                    
                                                    <div class="row col-md-8 mx-5">
                                                        <div class="col-md-4 form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox"  name="last_ans_module" id="lst_m1" value="1">
                                                                <span class="form-check-sign"></span>
                                                                Module 1
                                                            </label>
                                                        </div>
                                                        <div class="col-md-4 form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox"  name="last_ans_module" id="lst_m2" value="2">
                                                                <span class="form-check-sign"></span>
                                                                Module 2
                                                            </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('?????????') }}</span>?????????????????????????????? Module</label>
                                                    <div class="col-md-8 mt-2">
                                                        <div class="row mx-2">
                                                            <div class="col-md-4 form-check">
                                                                <input class="form-check-input" disabled type="radio" id="module1" name="is_full_module" value="1">
                                                                <label class="form-check-label">{{ __('Module-1') }}</label>
                                                            </div>
                                                            <div class="col-md-4 form-check">
                                                                <input class="form-check-input" disabled type="radio" id="module2" name="is_full_module" value="2">
                                                                <label class="form-check-label">{{ __('Module-2') }}</label>

                                                            </div>
                                                            <div class="col-md-4 form-check">
                                                                <input class="form-check-input" disabled type="radio" id="allmodule" name="is_full_module" value="3" >
                                                                <label class="form-check-label">{{ __('All Module') }}</label>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                {{-- 
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">??????</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="single-form">
                                                                <label class="col-form-label">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <!-- <div class="single-form"> --><br/>
                                                                <input type="hidden" id="invoice_image" class="form-control"  name="invoice_image" required="" value="invoice_image">
                                                            <!-- </div> -->
                                                        </div>
                                                    </div>

                                                    <div class="row mb-" style="display:none;">
                                                        <div class="col-md-1">
                                                            
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="single-form">
                                                                <label class="col-form-label label_align_right">??????????????????</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="single-form">
                                                                <input type="text" name="invoice_date" class="form-control" placeholder="dd/mm/yyyy" >
                                                            </div>
                                                        </div>

                                                    </div> 
                                                --}}

                                                <div class="row mb-3">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" id="submit_confirm_cpa2" onchange="$('#cpa2submit').prop('disabled', !this.checked)">
                                                            <span class="form-check-sign"></span>
                                                            <p class="fw-bolder">
                                                                * ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                                                * ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 justify-content-center">
                                                        {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button> --}}
                                                        <button type="submit" id="cpa2submit" class="btn btn-success btn-hover-dark w-25" disabled>Submit
                                                        </button>
                                                    
                                                </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- Form Wrapper End -->
                </div><br><br>
            </div>
        </div>
    </div>


     <!-- cpa2 exam  -->
     <form method="post" id="cpa_exam_register" class="needs-validation" enctype="multipart/form-data"
           novalidate>
         @csrf
         <div class="modal fade" id="cpa2examModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <br>
                     <div class="modal-body">
                         <div class="row justify-content-center">
                             <center>
                                 <h4 style="margin-bottom:5%;">Certified Public Accountant Part Two Exam Registeration Form Fee - ****** MMK</h4>
                             </center>
                             <div class="col-sm-3 col-5">
                                 <center>
                                     <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                          data-value="CBPAY" name="payment_method" id="cb_img">
                                 </center>
                                 <br>
                             </div>
                             <div class="col-sm-3 col-5">
                                 <center>
                                     <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                          data-value="MPU" name="payment_method" id="mpu_img">
                                 </center>
                                 <br>
                             </div>
                             <div class="col-sm-3 col-5">
                                 <center>
                                     <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                          data-value="CASH" name="payment_method" id="cpa2exam_img">
                                 </center>
                                 <br>
                             </div>
                             <input type="hidden" name="payment_method" value="CASH">
                             <center>
                                 <button type="submit" id="cpa2exam_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                             </center>
                         </div>
                     </div>
                     <br>
                 </div>
             </div>
         </div>
     </form>


    <!-- JavaScript Section -->
@endsection
@push('scripts')
<script src="{{ asset("js/form_validation/cpa_two_exam_validation.js") }}"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#form_type').val(localStorage.getItem('course_id'));

            $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
            });

            $("input[name='invoice_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
                allowInput: true,
            });

            var boo = localStorage.getItem("isPrivateSchool");
            if (boo == "true") {
                if (document.getElementById('is_private_school')) {
                    document.getElementById('is_private_school').style.display = 'block';
                    document.getElementById('cpa2_label1').innerHTML = "?????????";
                    document.getElementById('cpa2_label2').innerHTML = "?????????";
                }
            } else {
                if (document.getElementById('is_private_school')) {
                    document.getElementById('is_private_school').style.display = 'none';
                    document.getElementById('cpa2_label2').innerHTML = "?????????";
                }
            }
        });

        get_student_info(student_id).then(data => {
            if(data){
                let student_info = data.data;
                // console.log('student_info',student_info)
                let current_course_reg=student_info.student_course_regs.slice(-1);
                let current_stu_reg=student_info.student_register.slice(-1);
                // console.log('current_stu_reg',current_stu_reg);
                $('.batch_number').append(number2mm(current_course_reg[0].batch.number));
                $('#batch_id').val(current_course_reg[0].batch.id);
                $('#exam_date').append(formatDateMY(current_course_reg[0].batch.exam_start_date))
                    if(current_stu_reg[0].module=="1"){
                         $("#module1").prop("checked", true);
                    }
                    else if(current_stu_reg[0].module=="2"){
                        $("#module2").prop("checked", true);
                    }
                    else if(current_stu_reg[0].module=="3"){
                        $("#allmodule").prop("checked", true);
                    }

                let exam_registers = student_info.exam_registers.slice(-1);
                let student_course_regs = student_info.student_course_regs.slice(-1);
                // console.log('student_course_regs',student_course_regs);
                
                document.getElementById('previewImg').src = BASE_URL + data.data.image;
                $("input[name='name_mm']").val(data.data.name_mm);
                $("input[name='name_eng']").val(data.data.name_eng);
                $("input[name='nrc_state_region']").val(data.data.nrc_state_region);
                $("input[name='nrc_township']").val(data.data.nrc_township);
                $("input[name='nrc_citizen']").val(data.data.nrc_citizen);
                $("input[name='nrc_number']").val(data.data.nrc_number);
                $("input[name='father_name_mm']").val(data.data.father_name_mm);
                $("input[name='father_name_eng']").val(data.data.father_name_eng);
                $("input[name='date_of_birth']").val(data.data.date_of_birth);
                // $("input[name='personal_no']").val(data.data.cpersonal_no);
                // console.log(data.data.cpersonal_no)
                $("input[name='address']").val(data.data.address);
                $("input[name='phone']").val(data.data.phone);
                $("input[name='private_school_name']").val(current_stu_reg[0].private_school_name);
                if(exam_registers )
                {

                    // if(exam_registers[0].is_full_module == "1")
                    // {
                            
                    //     $("#module2").prop("checked", true);
                        
                    //     $(':radio:not(:checked)').attr('disabled', true);

                    // }
                    // else if(exam_registers[0].is_full_module=="2")
                    // {
                    //         $("#module1").prop("checked", true);
                    //         $(':radio:not(:checked)').attr('disabled', true);

                    // }
                    // else if(exam_registers[0].is_full_module=="3")
                    // {
                    //         $("#allmodule").prop("checked", true);

                    //     $(':radio:not(:checked)').attr('disabled', true);
                        
                    // }

                    // if(exam_registers[0].is_full_module == "1")
                    // {
                       
                    //     $("#lst_m1").prop("checked", true);
                    //     $("#lst_m2").attr("disabled", "disabled"); 
                        
                    // }
                    // else if(exam_registers[0].is_full_module=="2"){
                        

                    //     $("#lst_m2").prop("checked", true);
                    //     $("#lst_m1").attr("disabled", "disabled"); 


                    // }
                    if(exam_registers[0].course.code == 'cpa_2') {
                            // $("input[name='date']").val(formatDate(last_exam[0].created_at));

                            // if(exam_registers[0].is_full_module == "1")
                            // {
                                
                            //     $("#module2").prop("checked", true);
                                
                            //     $(':radio:not(:checked)').attr('disabled', true);

                            // }
                            // else if(exam_registers[0].is_full_module=="2"){
                            //     $("#module1").prop("checked", true);
                            //     $(':radio:not(:checked)').attr('disabled', true);

                            // }
                            // else if(exam_registers[0].is_full_module=="3"){
                            //     $("#allmodule").prop("checked", true);

                            // $(':radio:not(:checked)').attr('disabled', true);
                                
                            // }

                            // if(last_exam[0].is_full_module == "1"){
                                
                            //     $("#lst_m1").prop("checked", true);
                            //     $("#lst_m2").attr("disabled", "disabled");  
                            // }
                            // else if(last_exam[0].is_full_module=="2"){
                            //     $("#lst_m2").prop("checked", true);
                            //     $("#lst_m1").attr("disabled", "disabled"); 
                            // }
                        }
                    }else{
                         if(current_stu_reg[0].module=="1"){
                            $("#module1").prop("checked", true);
                            $(':radio:not(:checked)').attr('disabled', true);

                        }
                        else if(current_stu_reg[0].module=="2"){
                            $("#module2").prop("checked", true);
                        $(':radio:not(:checked)').attr('disabled', true);

                        }
                        else if(current_stu_reg[0].module=="3"){
                            $("#allmodule").prop("checked", true);
                            $(':radio:not(:checked)').attr('disabled', true);

                        }
                }

                

                if(data.data.course_type_id==1){
                    $("input[name='personal_no']").val(data.data.personal_no);
                }else if(data.data.course_type_id==2){
                    $("input[name='personal_no']").val(data.data.cpersonal_no);
                }else{
                    $("input[name='personal_no']").val("-");
                }
                

                $("#last_ans_exam_no").val(exam_registers[0].batch.number);
                $("#date").val(formatDate(exam_registers[0].updated_at));

                if(current_course_reg[0].type == 0){
                    $("input[name='class_address']").val("??????????????????????????????????????????????????????????????????????????????????????????");
                }else if(current_course_reg[0].type == 1){
                    $("input[name='class_address']").val("?????????????????????????????????????????????????????????????????????????????????????????????????????????");
                }else if(current_course_reg[0].type == 2 && current_course_reg[0].mac_type==1){
                    $("input[name='class_address']").val("???????????????????????????????????????????????????????????????????????????????????????(???????????????????????????????????????????????????????????????)");
                }else if(current_course_reg[0].type == 2 && current_course_reg[0].mac_type==2){
                    $("input[name='class_address']").val("???????????????????????????????????????????????????????????????????????????????????????(????????????????????????????????????????????????????????????????????????)");
                }else{
                    $("input[name='class_address']").val("");
                }

            }

        })
        loadExamDepartment();
        // loadSchoolList();
    </script>
@endpush
