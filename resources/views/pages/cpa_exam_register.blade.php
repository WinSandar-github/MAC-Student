@extends('layouts.auth')

@section('content')
<head>

<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'> -->

<!-- <link rel="stylesheet" href="{{ asset('assets/css/plugins/image_style.css') }}"> -->
</head>

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

                        <form runat="server" method="post" action="javascript:createCpaExamRegister();" enctype="multipart/form-data">
                            @csrf
                            <!-- <div class="row">
                              <div class="col-md-12">
                                <div class="col-md-3 pull-right">
                                  <div class="alert"></div>
                                  <div id='img_container'>
                                    <img id="preview" src="{{url('assets/images/black-profile-green-1.png')}}" alt="your image" title=''/>
                                  </div>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" id="inputGroupFile01" class="imgInp custom-file-input" aria-describedby="inputGroupFileAddon01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> -->

                            <div class="row">
                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၁။</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">အမည်(မြန်မာ/English)</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                          <div class="single-form">
                                              <input type="text" placeholder="အမည်(မြန်မာ/English)" name="student_name" class="form-control" value="" required="">
                                          </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၂။</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                          <div class="single-form">
                                              <input type="text" placeholder="နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်" name="" class="form-control" value="" required="">
                                          </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၃။</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">အဘအမည်(မြန်မာ/English)</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                          <div class="single-form">
                                              <input type="text" name="father_name" class="form-control" placeholder="အဘအမည်(မြန်မာ/English)" required>
                                          </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၄။</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">သင်တန်းသားကိုယ်ပိုင်အမှတ်</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                        <div class="single-form">
                                            <input type="text" name="student_private_no" class="form-control" placeholder="သင်တန်းသားကိုယ်ပိုင်အမှတ်" required>
                                        </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၅။</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">မွေးသက္ကရာဇ်</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                        <div class="single-form">
                                            <input type="text" name="birth_date" class="form-control" placeholder="မွေးသက္ကရာဇ်" required>
                                        </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၆။</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">ဆက်သွယ်ရန်လိပ်စာ/ဖုန်းနံပါတ်/Email</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                        <div class="single-form">
                                            <input type="text" name="address_phone_email" class="form-control" placeholder="ဆက်သွယ်ရန်လိပ်စာ/ဖုန်းနံပါတ်/Email" required>
                                        </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၇။</label>
                                        </div>
                                      </td>
                                      <td width="35%">
                                          <div class="single-form">
                                              <label class="col-form-label">သင်တန်းတက်ရောက်သည့်နေရာ</label>
                                          </div>
                                      </td>
                                      <td width="20%">
                                        <div class="single-form">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              စာရင်းကောင်စီ
                                            </label>
                                          </div>
                                        </div>
                                      </td>
                                      <td width="20%">
                                        <div class="single-form">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="" >
                                            <label class="form-check-label" for="exampleRadios2">
                                              ကိုယ်ပိုင်သင်တန်းကျောင်း
                                            </label>
                                          </div>
                                        </div>
                                      </td>
                                      <td width="20%">
                                        <div class="single-form">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="" >
                                            <label class="form-check-label" for="exampleRadios3">
                                              ကိုယ်တိုင်လေ့လာသူ
                                            </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၁။</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                        <div class="single-form">
                                            <input type="text" name="private_school_name" class="form-control" placeholder="" required>
                                        </div>
                                      </td>
                                    </tr>
                                </table>

                                <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၂။</label>
                                        </div>
                                      </td>
                                      <td width="95%">
                                          <div class="single-form">
                                              <label class="col-form-label">စာမေးပွဲပြန်လည်ဖြေဆိုသူများဖြည့်သွင်းရန်</label>
                                          </div>
                                      </td>
                                    </tr>
                                </table>

                                <table width="100%">
                                  <tr>
                                    <td width="5%">
                                      <div class="single-form">

                                      </div>
                                    </td>
                                    <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">(က)</label>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <div class="single-form">
                                            <label class="col-form-label">နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲအမှတ်စဉ်</label>
                                        </div>
                                    </td>
                                    <td width="15%">
                                        <div class="single-form">
                                            <input type="text" name="last_exam_no" class="form-control" placeholder="" required>
                                        </div>
                                    </td>
                                    <td width="5%">
                                        <div class="single-form">

                                        </div>
                                    </td>
                                    <td width="15%">
                                        <div class="single-form">
                                            <label class="col-form-label">ကျင်းပသည့် ခုနှစ်/လ</label>
                                        </div>
                                    </td>
                                    <td width="25%">
                                        <div class="single-form">
                                            <input type="text" name="last_exam_date" class="form-control" placeholder="" required>
                                        </div>
                                    </td>
                                  </tr>
                                </table>

                                <table width="100%">
                                  <tr>
                                    <td width="5%">
                                      <div class="single-form">

                                      </div>
                                    </td>
                                    <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">(ခ)</label>
                                        </div>
                                    </td>
                                    <td width="60%">
                                        <div class="single-form">
                                            <label class="col-form-label">အဆိုပါစာမေးပွဲတွင်အောင်မြင်ခဲ့သည့် Module ရှိပါကဆိုင်ရာအကွက်တွင်(<span>&#10003;</span>)အမှတ်အသားပြုရန်</label>
                                        </div>
                                    </td>
                                    <td width="10%">
                                        <div class="single-form">
                                            <label class="col-form-label">Module 1</label>
                                        </div>
                                    </td>
                                    <td width="5%">
                                        <div style="margin-top:20px;">
                                          <input type="checkbox" name="passed_modules" id="passed_module_1" value="module_1" class="" placeholder="" >
                                        </div>
                                    </td>
                                    <td width="10%">
                                        <div class="single-form">
                                            <label class="col-form-label">Module 2</label>
                                        </div>
                                    </td>
                                    <td width="5%">
                                      <div style="margin-top:20px;">
                                        <input type="checkbox" name="passed_modules" id="passed_module_2" value="module_2" class="" placeholder="" >
                                      </div>
                                    </td>
                                  </tr>
                                </table>

                                <table width="100%">
                                  <tr>
                                    <td width="5%">
                                      <div class="single-form">

                                      </div>
                                    </td>
                                    <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">(ဂ)</label>
                                        </div>
                                    </td>
                                    <td width="45%">
                                        <div class="single-form">
                                            <label class="col-form-label">ဖြေဆိုမည့် Module</label>
                                        </div>
                                    </td>
                                    <td width="10%">
                                        <div class="single-form">
                                            <label for="0" class="col-form-label">Module 1</label>
                                        </div>
                                    </td>
                                    <td width="5%">
                                        <div style="margin-top:20px;">
                                          <input type="radio" name="is_full_module" id="0" class="" placeholder="" value="0" >
                                        </div>
                                    </td>
                                    <td width="10%">
                                        <div class="single-form">
                                            <label for="1" class="col-form-label">Module 2</label>
                                        </div>
                                    </td>
                                    <td width="5%">
                                      <div style="margin-top:20px;">
                                        <input type="radio" name="is_full_module" id="1" class="" placeholder="" value="1" >
                                      </div>
                                    </td>
                                    <td width="10%">
                                        <div class="single-form">
                                            <label for="2" class="col-form-label">All Module</label>
                                        </div>
                                    </td>
                                    <td width="5%">
                                      <div style="margin-top:20px;">
                                        <input type="radio" name="is_full_module" id="2" class="" placeholder="" value="2" >
                                      </div>
                                    </td>
                                  </tr>
                                </table>

                                <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">၃။</label>
                                        </div>
                                      </td>
                                      <td width="40%">
                                          <div class="single-form">
                                              <label class="col-form-label">စာမေးပွဲကြေးပေးသွင်းပြီးသည့်ပြေစာအမှတ်</label>
                                          </div>
                                      </td>
                                      <td width="15%">
                                        <div class="single-form">
                                            <input type="text" name="paid_exam_fees_receipt_no" class="form-control" placeholder="" required>
                                        </div>
                                      </td>
                                      <td width="5%">
                                          <div class="single-form">
                                          </div>
                                      </td>
                                      <td width="15%">
                                          <div class="single-form">
                                              <label class="col-form-label">ရက်စွဲ</label>
                                          </div>
                                      </td>
                                      <td width="20%">
                                        <div class="single-form">
                                            <input type="text" name="paid_date" class="form-control flatpickr-input" placeholder="dd/mm/yyyy" required readonly>
                                        </div>
                                      </td>
                                    </tr>
                                </table>

                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <!-- Form Wrapper Start -->
                                  <div class="single-form text-center">
                                      <button type="submit" class="btn btn-primary btn-hover-dark">Submit Now</button>
                                  </div>
                                  <!-- Form Wrapper End -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{ asset('assets/js/plugins/image_upload.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function (e) {
        // $("input[name='date']").flatpickr({
        //         enableTime: false,
        //         dateFormat: "d-m-Y",
        // });

        $("input[name='paid_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
        });

    });

</script>
@endpush
