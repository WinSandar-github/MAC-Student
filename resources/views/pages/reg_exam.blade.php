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

            <img class="shape-1 animation-round" src="assets/images/shape/shape-8.png" alt="Shape">

            <img class="shape-2" src="assets/images/shape/shape-23.png" alt="Shape">

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

                <img class="icon-shape-1 animation-left" src="assets/images/shape/shape-5.png" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="assets/images/shape/shape-6.png" alt="Shape">

            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="assets/images/shape/shape-24.png" alt="Shape">

            <img class="shape-author" src="assets/images/author/author-11.jpg" alt="Shape">

        </div>

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">
            
            <div class="blog-details-comment">
                <div class="comment-form">
                <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        {!! Form::open(array('url' => 'reg_submit','method'=>'POST', 'files'=>'true')) !!}
                            <div class="row">
                                <input type="hidden" name="student_info_id" value="1">
                                <input type="hidden" name="batch_id" value="1">
                                <input type="hidden" name="exam_type_id" value="1">
                                <input type="hidden" name="grade">

                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်" name="private_school_name" class="form-control" value="{{ old('private_school_name') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <table width="100%">
                                    <tr>
                                        <td>
                                            <div class="single-form">
                                                <label class="form-control">စာမေးပွဲပြန်လည်ဖြေဆိုသူများဖြည့်သွင်းရန်</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">(က)နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" name="date" class="form-control" placeholder="dd/mm/yyyy" required>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">(ခ)အဆိုပါစာမေးပွဲတွင်အောင်မြင်ခဲ့သည့်Moduleရှိပါကဆိုင်ရာအကွက်တွင်ရွေးချယ်ရန်</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                {{ Form::radio('is_past_module', config('global')['PAST_MODULE_ONE']) }} Module 1
                                                &nbsp; &nbsp; &nbsp;
                                                {{ Form::radio('is_past_module', config('global')['PAST_MODULE_TWO']) }} Module 2
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">(ဂ)ယခုဖြေဆိုမည့် Module</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <div class="single-form">
                                                    {{ Form::radio('is_full_module', config('global')['NOW_MODULE_ONE']) }} Module 1
                                                    &nbsp; &nbsp; &nbsp;
                                                    {{ Form::radio('is_full_module', config('global')['NOW_MODULE_TWO']) }} Module 2
                                                    &nbsp; &nbsp; &nbsp;
                                                    {{ Form::radio('is_full_module', config('global')['ALL_MODULES']) }} All Modules
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">စာမေးပွဲကြေးပေးသွင်းပြီးသည့် ပြေစာအမှတ်</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="file" placeholder="upload photo" name="invoice_image" required="" style="padding: 2%;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">ရက်စွဲ</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" name="invoice_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                
                                <div class="col-md-12">
                                    <!-- Form Wrapper Start -->
                                    <div class="single-form text-center">
                                        <button class="btn btn-primary btn-hover-dark">Submit Now</button>
                                    </div>
                                    <!-- Form Wrapper End -->
                                </div>
                            </div>
                        {!! Form::close() !!}
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
        $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
        });
        $("input[name='invoice_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
        });
    });
</script>
@endpush