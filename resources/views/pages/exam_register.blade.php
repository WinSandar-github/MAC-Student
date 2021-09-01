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
                    <h2 class="title">Exam Registration <span>Form</span></h2>
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
                        <form method="post" action="javascript:createDAExamRegister();" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="form_type" id="form_type" class="form-control">
                            <div class="row">
                                <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                <div class="col-md-12"  id="is_private_school" style="display:none">
                                    <div class="row mb-3">
                                        <label class="col-md-6 col-form-label">ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်</label>
                                        <div class="col-md-6">
                                            <div class="form-group">                                
                                                <select class="form-control form-select" name="private_school_name" id="selected_school_id" style="width: 100%;" >
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
                                                    <input type="text" placeholder="ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်" name="private_school_name" class="form-control" value="{{ old('private_school_name') }}">
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
                                        <label class="col-md-5 col-form-label">နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ</label>
                                        <div class="col-md-6">
                                            <input type="text" name="date" class="form-control" placeholder="MMM-YYYY" required>
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
                                        <label class="col-md-5 col-form-label">ယခုဖြေဆိုမည့် Module</label>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="radio" id="0" name="is_full_module" value="0">
                                                    <label for="0">Module 1</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="radio" id="1" name="is_full_module" value="1" style="margin-left: 3%;">
                                                    <label for="1">Module 2</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="radio" id="2" name="is_full_module" value="2" style="margin-left: 3%;">
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
                                                    <input type="text" name="invoice_date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>--}}

                                    <div class="row mt-4">
                                        <div class="col-md-2 offset-md-5">
                                            <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
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
    <!-- JavaScript Section -->
@endsection
@push('scripts')
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
        if(boo=="true" ){
            console.log(boo,"true");
            if(document.getElementById('is_private_school'))
            {document.getElementById('is_private_school').style.display='block';}
        }
        else{
            console.log(boo,"false");
            if(document.getElementById('is_private_school'))
            {document.getElementById('is_private_school').style.display='none';}
        }
    }); 

    loadSchoolList();
</script>
@endpush
