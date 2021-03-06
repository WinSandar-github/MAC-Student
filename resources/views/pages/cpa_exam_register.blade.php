@extends('layouts.app')

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
                    <h2 class="title">CPA Exam Registration <span>Form</span></h2>
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

                        <form runat="server" method="post" action="javascript:createDAExamRegister();" enctype="multipart/form-data">
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
                                            <label class="col-form-label">??????</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">????????????(??????????????????/English)</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                          <div class="single-form">
                                              <input type="text" placeholder="????????????(??????????????????/English)" name="student_name" class="form-control" value="" required="">
                                          </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">??????</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">??????????????????????????????????????????????????????????????????????????????????????????</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                          <div class="single-form">
                                              <input type="text" placeholder="??????????????????????????????????????????????????????????????????????????????????????????" name="" class="form-control" value="" required="">
                                          </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">??????</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">??????????????????(??????????????????/English)</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                          <div class="single-form">
                                              <input type="text" name="father_name" class="form-control" placeholder="??????????????????(??????????????????/English)" required>
                                          </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">??????</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">???????????????????????????????????????????????????????????????????????????</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                        <div class="single-form">
                                            <input type="text" name="student_private_no" class="form-control" placeholder="???????????????????????????????????????????????????????????????????????????" required>
                                        </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">??????</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">????????????????????????????????????</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                        <div class="single-form">
                                            <input type="text" name="birth_date" class="form-control" placeholder="????????????????????????????????????" required>
                                        </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">??????</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">????????????????????????????????????????????????/?????????????????????????????????/Email</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                        <div class="single-form">
                                            <input type="text" name="address_phone_email" class="form-control" placeholder="????????????????????????????????????????????????/?????????????????????????????????/Email" required>
                                        </div>
                                      </td>
                                    </tr>
                                </table> -->

                                <!-- <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">??????</label>
                                        </div>
                                      </td>
                                      <td width="35%">
                                          <div class="single-form">
                                              <label class="col-form-label">?????????????????????????????????????????????????????????????????????</label>
                                          </div>
                                      </td>
                                      <td width="20%">
                                        <div class="single-form">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              ???????????????????????????????????????
                                            </label>
                                          </div>
                                        </div>
                                      </td>
                                      <td width="20%">
                                        <div class="single-form">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="" >
                                            <label class="form-check-label" for="exampleRadios2">
                                              ????????????????????????????????????????????????????????????????????????
                                            </label>
                                          </div>
                                        </div>
                                      </td>
                                      <td width="20%">
                                        <div class="single-form">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="" >
                                            <label class="form-check-label" for="exampleRadios3">
                                              ???????????????????????????????????????????????????
                                            </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                </table> -->
                              <div class="col-md-12" id="is_private_school">
                                <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label" id="label1">??????</label>
                                        </div>
                                      </td>
                                      <td width="30%">
                                          <div class="single-form">
                                              <label class="col-form-label">????????????????????????????????????????????????????????????????????????????????????</label>
                                          </div>
                                      </td>
                                      <td width="65%">
                                        <div class="single-form">
                                            <input type="text" name="private_school_name" class="form-control" placeholder="">
                                        </div>
                                      </td>
                                    </tr>
                                </table></div>

                                <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label" id="label2">??????</label>
                                        </div>
                                      </td>
                                      <td width="95%">
                                          <div class="single-form">
                                              <label class="col-form-label">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
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
                                            <label class="col-form-label">(???)</label>
                                        </div>
                                    </td>
                                    <td width="30%">
                                        <div class="single-form">
                                            <label class="col-form-label">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
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
                                            <label class="col-form-label">?????????????????????????????? ??????????????????/???</label>
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
                                            <label class="col-form-label">(???)</label>
                                        </div>
                                    </td>
                                    <td width="60%">
                                        <div class="single-form">
                                            <label class="col-form-label">?????????????????????????????????????????????????????????????????????????????????????????????????????? Module ??????????????????????????????????????????????????????????????????(<span>&#10003;</span>)?????????????????????????????????????????????</label>
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
                                            <label class="col-form-label">(???)</label>
                                        </div>
                                    </td>
                                    <td width="45%">
                                        <div class="single-form">
                                            <label class="col-form-label">?????????????????????????????? Module</label>
                                        </div>
                                    </td>
                                    <td width="10%">
                                        <div class="single-form">
                                            <label for="0" class="col-form-label">Module 1</label>
                                        </div>
                                    </td>
                                    <td width="5%">
                                        <div style="margin-top:20px;">
                                          <input type="radio" name="is_full_module" id="0" class="" placeholder="" value="1" >
                                        </div>
                                    </td>
                                    <td width="10%">
                                        <div class="single-form">
                                            <label for="1" class="col-form-label">Module 2</label>
                                        </div>
                                    </td>
                                    <td width="5%">
                                      <div style="margin-top:20px;">
                                        <input type="radio" name="is_full_module" id="1" class="" placeholder="" value="2" >
                                      </div>
                                    </td>
                                    <td width="10%">
                                        <div class="single-form">
                                            <label for="2" class="col-form-label">All Module</label>
                                        </div>
                                    </td>
                                    <td width="5%">
                                      <div style="margin-top:20px;">
                                        <input type="radio" name="is_full_module" id="2" class="" placeholder="" value="3" >
                                      </div>
                                    </td>
                                  </tr>
                                </table>

                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('?????????') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">??????????????????????????????????????????????????????</label>
                                    <div class="col-md-8">
                                      <div class="form-group">
                                        <select class="form-control form-select" name="exam_department" id="exam_department" style="width:57%;margin-right:3px;" required>
                                            <option value="" disabled selected>?????????????????????????????????????????????????????? ??????????????????????????????</option>
                                        </select>
                                      </div>
                                    </div>
                                </div>

                                <table width="100%">
                                    <tr>
                                      <td width="5%">
                                        <div class="single-form">
                                            <label class="col-form-label">??????</label>
                                        </div>
                                      </td>
                                      <td width="40%">
                                          <div class="single-form">
                                              <label class="col-form-label">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                          </div>
                                      </td>
                                      <td width="15%">
                                        <div class="single-form">
                                            <input type="hidden" name="paid_exam_fees_receipt_no" class="form-control" placeholder="" required>
                                        </div>
                                      </td>
                                      <td width="5%">
                                          <div class="single-form">
                                          </div>
                                      </td>
                                      <td width="15%">
                                          <div class="single-form">
                                              <label class="col-form-label">??????????????????</label>
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
                              <div class="col-md-2 offset-md-5">
                                  <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
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
        var boo=localStorage.getItem("isPrivateSchool");
        if(boo=="true" ){
            if(document.getElementById('is_private_school'))
            {document.getElementById('is_private_school').style.display='block';
            document.getElementById('label1').innerHTML="??????";
            document.getElementById('label2').innerHTML="??????";
            }
        }
        else{
            if(document.getElementById('is_private_school'))
            {document.getElementById('is_private_school').style.display='none';
            document.getElementById('label2').innerHTML="??????";
            }
        }
    });

</script>
@endpush
