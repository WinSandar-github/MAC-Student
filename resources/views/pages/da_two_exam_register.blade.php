@php
	$nrc_language = config('myanmarnrc.language');
	$nrc_regions = config('myanmarnrc.regions_states');
	$nrc_townships = config('myanmarnrc.townships');
	$nrc_citizens = config('myanmarnrc.citizens');
	$nrc_characters = config('myanmarnrc.characters');
@endphp

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
                    <h2 class="title">DA Exam Registration <span>Form</span></h2>
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

                            @csrf
                            <div class="row">
                            <div class="card border-success mb-3">
                            <!-- <form> -->
                                <div class="card-body ">
                                    <div class="col-md-12">


                                        <!-- <div class="row">
                                            <div class="col-md-1 col-form-label">{{ _('၁။') }}</div>
                                            <div class="col-md-4 col-form-label">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
                                            <div class="col-md-7">
                                                <div class="row">
                                                    <div class="col-md-2 col-5 px-1">
                                                        <div class="courses-select">
                                                            <select class="form-control" name="nrc_state_region" id="nrc_state_region">
                                                                @foreach($nrc_regions as $region)
                                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-7 px-1">
                                                        <div class="courses-select">
                                                            <select class="form-control" name="nrc_township" id="nrc_township">
                                                                @foreach($nrc_townships as $township)
                                                                    <option value="{{ $township['township_mm'] }}">
                                                                        {{ $township['township_mm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-5 px-1">
                                                        <div class="courses-select">
                                                            <select class="form-control" name="nrc_citizen" id="nrc_citizen" >
                                                                @foreach($nrc_citizens as $citizen)
                                                                <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                                    {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-7 pl-1">
                                                        <div class="single-form">
                                                            <input type="text" name="nrc_number" id="nrc_number" class="form-control" value="{{ old('nrc_number') }}" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  required="" maxlength="6">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="single-form">
                                                            <button type="submit" onclick="SearchStudentID()"  class="btn btn-primary btn-hover-dark">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br/> -->

                                        <form  method="post" action="javascript:createDAExamRegister();" enctype="multipart/form-data">
                                            <!-- <fieldset id="fieldset" disabled> -->
                                            <input type="hidden" id="form_type" class="form-control" id="form_type">
                                                <div id="is_private_school" style="display=none;">
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label" id="da2_label1">{{ _('၁။') }}</label>
                                                        <label class="col-md-5 col-form-label">{{ __('ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်') }}</label>
                                                        <div class="col-md-6">
                                                            <div class="form-group">                                
                                                                <select class="form-control form-select" name="private_school_name" id="selected_school_id" style="width: 100%;">
                                                                    <option value="" disabled selected>Select School</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><br/>
                                                </div>
                                                

                                                {{--<div class="row">
                                                    <div class="col-md-1 col-form-label"  id="da2_label2">{{ _('၂။') }}</div>
                                                    <label class="col-md-4 col-form-label">{{ __('စာမေးပွဲပြန်လည်ဖြေဆိုသူများဖြည့်သွင်းရန်') }}</label>
                                                </div><br/>--}}

                                                <div class="row mb-3">
                                                    <div class="col-md-1 col-form-label" id="da2_label2">{{ _('၂။') }}</div>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ') }}</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="လ၊နှစ်(MMM-YYYY)" name="last_exam_date" class="form-control" value="" required="">
                                                    </div>
                                                </div><br/>

                                                <div class="row">
                                                    <div class="col-md-1 col-form-label">{{ _('') }}</div>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label class="col-md-4 col-form-label">{{ __('ယခုဖြေဆိုမည့် Module') }}</label>
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
                                                </div><br/>

                                                <div class="row">
                                                    {{--<div class="col-md-1 col-form-label">{{ _('') }}</div>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label class="col-md-3 col-form-label">{{ __('စာမေးပွဲကြေးပေးသွင်းပြီးသည့် ပြေစာအမှတ်') }}</label>--}}
                                                    <div class="col-md-7">
                                                        <input type="hidden" id="invoice_image" class="form-control" placeholder="upload photo" name="invoice_image" value="invoice_image">
                                                    </div>
                                                </div><br/>

                                                <div class="row" style="display:none;">
                                                    <div class="col-md-1 col-form-label">{{ _('') }}</div>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label class="col-md-3 col-form-label">{{ __('ရက်စွဲ') }}</label>
                                                    <div class="col-md-7 single-form">
                                                        <input type="text" name="invoice_date" class="form-control" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div><br/>

                                                <div class="row">
                                                    <div class="col-md-2 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            <!-- </form> -->
                        </div>
                            </div>

                    </div>
                <!-- Form Wrapper End -->
                </div><br><br>
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
    loadSchoolList();

    $(document).ready(function (e) {
        $('#form_type').val(localStorage.getItem('course_id'));
        $("input[name='last_exam_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
        });
        $("input[name='invoice_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
                allowInput: true,
        });
        var boo=localStorage.getItem("isPrivateSchool");
        if(boo=="true" ){
            if(document.getElementById('is_private_school'))
            {document.getElementById('is_private_school').style.display='block';
            document.getElementById('da2_label1').innerHTML="၁။";
            document.getElementById('da2_label2').innerHTML="၂။";
            }
        }
        else{
            if(document.getElementById('is_private_school'))
            {document.getElementById('is_private_school').style.display='none';
                document.getElementById('da2_label2').innerHTML="၁။";}
        }
    });


</script>
@endpush
