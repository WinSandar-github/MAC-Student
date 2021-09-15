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

            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Exam Registration  <span>Form</span></h2>
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

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                <div class="comment-form">
                <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        <form method="post" action="javascript:void();" id="da_exam_register_form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="form_type" id="form_type" class="form-control">
                            <input type="hidden" name="is_private" id="is_private" class="form-control">
                            <div class="row">
                                <div class="card border-success mb-3" style="padding:3% 3% 3% 3%;">
                                    <div class="row">
                                        <div class="col-md-9">

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="name_mm" id="name_mm" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="name_eng" id="name_eng" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                <div class="col-md-8">
                                                    <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                        <div class="col-md-2 col-5 pr-1">
                                                            <input type="text" name="nrc_state_region" id="nrc_state_region" class="form-control" readonly>
                                                        </div>
                                                        <div class="col-md-3 col-7 px-1">
                                                            <input type="text" name="nrc_township" id="nrc_township" class="form-control" readonly>
                                                        </div>
                                                        <div class="col-md-2 col-5 px-1">
                                                            <input type="text" name="nrc_citizen" id="nrc_citizen" class="form-control" readonly>
                                                        </div>

                                                        <div class="col-md-5 col-7 pl-1">
                                                            <input type="text" name="nrc_number" placeholder="၁၂၃၄၅၆"
                                                                id="nrc_number" pattern=".{6,6}" class="form-control"
                                                                oninput="this.value= en2mm(this.value);"
                                                                maxlength="6" minlength="6" placeholder=""
                                                                style="height: 38px" value="{{ old('nrc_number') }}" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <br>

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="father_name_eng" id="father_name_eng" class="form-control" readonly>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-md-3" align="center">
                                            <div class="col-md-8">
                                                <img class="col-md-3 profile-style" name="previewImg" id="previewImg" src="{{asset('/assets/images/blank-profile-picture-1.png')}}" accept="image/png,image/jpeg" alt="">
                                                <p class="mt-2">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">သင်တန်းသားကိုယ်ပိုင်အမှတ်</label>
                                        <div class="col-md-8">
                                            <input type="text" name="personal_no" id="personal_no" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                        <div class="col-md-8">
                                            <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">ဆက်သွယ်ရန်လိပ်စာ</label>
                                        <div class="col-md-8">
                                            <input type="text" name="address" id="address" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>
                                        <div class="col-md-8">
                                            <input type="text" name="phone" id="phone" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">သင်တန်းတက်ရောက်သည့်နေရာ </label>
                                        <div class="col-md-8">
                                            <input type="text" name="class_address" id="class_address" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                        <label for="" class="col-md-3 col-form-label label_align_right">စာဖြေဌာန</label>
                                        <div class="col-md-8">
                                          <div class="form-group">
                                            <select class="form-control form-select" name="exam_department" id="exam_department" style="width:57%;margin-right:3px;" required>
                                                <option value="" disabled selected>စာဖြေဌာန ရွေးချယ်ပါ</option>
                                            </select>
                                          </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="col-md-12"  id="is_private_school" style="display:none">
                                        <div class="row mb-3">
                                            <label class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                            <label class="col-md-3 col-form-label label_align_right">ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်</label>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <select class="form-control form-select" name="private_school_name" id="selected_school_id" style="width: 100%;">
                                                        <option value="" disabled selected>Select School</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<table width="100%">
                                        <tr>
                                            <td width="45%">
                                                <div class="single-form">
                                                    <label class="col-form-label">ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်</label>
                                                </div>
                                            </td>
                                            <td width="55%">
                                                <div class="single-form">
                                                    <input type="text" placeholder="ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်" name="private_school_name" id="private_school_name" class="form-control" value="{{ old('private_school_name') }}">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>--}}

                                    {{--<table width="100%">
                                        <tr>
                                            <td>
                                                <div class="single-form">
                                                    <label class="col-form-label">စာမေးပွဲပြန်လည်ဖြေဆိုသူများဖြည့်သွင်းရန်</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>--}}

                                    <div class="row mb-3">
                                        <label class="col-md-1 col-form-label">(က)</label>
                                        <label class="col-md-3 col-form-label label_align_right">နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ</label>
                                        <div class="col-md-8">
                                            <input type="text" name="date" id="date" class="form-control" placeholder="လ၊ခုနှစ်(MMM-YYYY)" required>
                                        </div>
                                    </div>


                                    {{--<table width="100%">
                                        <tr>
                                            <td width="35%">
                                                <div class="single-form">
                                                    <label class="col-form-label">(ခ) အဆိုပါစာမေးပွဲတွင်အောင်မြင်ခဲ့သည့်Moduleရှိပါကဆိုင်ရာအကွက်တွင်(✓)အမှတ်အသားပြုရန်</label>
                                                </div>
                                            </td>
                                            <td width="65%">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="is_full_module" id="is_full_module" value="1">&nbsp;Module 1
                                                </label>
                                                <label class="checkbox-inline" style="margin-left:3%">
                                                  <input type="checkbox" name="is_full_module" id="is_full_module" value="1">&nbsp;Module 2
                                                </label>
                                            </td>
                                        </tr>
                                    </table>--}}

                                    <div class="row mb-3">
                                        <label class="col-md-1 col-form-label">(ခ)</label>
                                        <label class="col-md-3 col-form-label label_align_right">ယခုဖြေဆိုမည့် Module</label>
                                        <div class="col-md-8">
                                            <div class="row mt-2">
                                                <div class="col-md-3">
                                                    <input type="radio" id="0" name="is_full_module" value="1" required>
                                                    <label for="0">Module 1</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="radio" id="1" name="is_full_module" value="2" style="margin-left: 3%;" required>
                                                    <label for="1">Module 2</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="radio" id="2" name="is_full_module" value="3" style="margin-left: 3%;" required>
                                                    <label for="2">All Modules</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    {{--<table width="100%">
                                        <tr>
                                            <td width="45%">
                                                <div class="single-form">
                                                    <label class="col-form-label">စာမေးပွဲကြေးပေးသွင်းပြီးသည့် ပြေစာအမှတ်</label>
                                                </div>
                                            </td>
                                            <td width="55%">
                                                <div class="">
                                                    <input type="hidden" id="invoice_image" class="form-control" placeholder="upload photo" name="invoice_image" value="invoice_image">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>--}}
                                    {{--<table width="100%" style="display:none;">
                                        <tr>
                                            <td width="45%">
                                                <div class="single-form">
                                                    <label class="col-form-label">ရက်စွဲ</label>
                                                </div>
                                            </td>
                                            <td width="55%">
                                                <div class="single-form">
                                                    <input type="text" name="invoice_date" id="invoice_date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>--}}

                                    <div class="row mt-4">
                                        <div class="col-md-2 offset-md-5">
                                            <button type="submit" class="btn btn-success btn-hover-dark w-100" id="btn_da_exam_submit">{{ __('Submit') }}</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                <!-- Form Wrapper End -->
                </div><br><br>
            </div>
        </div>
    </div>

    <!-- DA One exam -->
    <form method="post" class="needs-validation" action="javascript:createDAExamRegister();" enctype="multipart/form-data" novalidate>
         @csrf
         <div class="modal fade" id="da1examModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <br>
                     <div class="modal-body">
                         <div class="row justify-content-center">
                             <center>
                                 <h4 style="margin-bottom:5%;">Diploma in Accountancy Part One Exam Registeration Form Fee - ****** MMK</h4>
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
                                          data-value="CASH" name="payment_method" id="cash_img">
                                 </center>
                                 <br>
                             </div>
                             <input type="hidden" name="payment_method" value="CASH">
                             <center>
                                 <button type="submit" id="da1exam_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
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
<style>
    .profile-style {
        width: 170px !important;
        height: 190px;
    }
</style>
<script type="text/javascript">
    $(document).ready(function (e) {
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
        var boo=localStorage.getItem("isPrivateSchool");
        $('#is_private').val(boo);
        if(boo=="true" ){
            if(document.getElementById('is_private_school'))
            {document.getElementById('is_private_school').style.display='block';}
        }
        else{
            if(document.getElementById('is_private_school'))
            {document.getElementById('is_private_school').style.display='none';}
        }

        loadSchoolList();

        const queryString = location.search;
        const urlParams = new URLSearchParams(queryString);

        selectedRegistration(urlParams.get("study_type"));

        get_student_info(student_id).then(data => {
            if(data){

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
                $("input[name='address']").val(data.data.address);
                $("input[name='phone']").val(data.data.phone);

                $("input[name='personal_no']").val(data.data.student_register[0].personal_no);

                if(data.data.student_register[0].type == 0){
                    $("input[name='class_address']").val("ကိုယ်တိုင်လေ့လာသူ");
                }else if(data.data.student_register[0].type == 1){
                    $("input[name='class_address']").val("ကိုယ်ပိုင်သင်တန်းကျောင်း");
                }else{
                    $("input[name='class_address']").val("စာရင်းကောင်စီ");
                }

            }

        })
    });

    loadExamDepartment();

</script>
@endpush
