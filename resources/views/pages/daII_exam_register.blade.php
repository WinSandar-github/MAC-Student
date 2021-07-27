@php
	$nrc_language = config('myanmarnrc.language');
	$nrc_regions = config('myanmarnrc.regions_states');
	$nrc_townships = config('myanmarnrc.townships');
	$nrc_citizens = config('myanmarnrc.citizens');
	$nrc_characters = config('myanmarnrc.characters');
@endphp

@extends('layouts.auth')

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
                        <form method="post" action="javascript:createExamRegister();" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="card border-success mb-3">                                                     
                            <!-- <form> -->
                                <div class="card-body ">
                                    <div class="col-md-12">
                                        
                                        <div class="row">
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
                                        </div><br/>

                                        <form  method="post" action="javascript:();" enctype="multipart/form-data">
                                            <fieldset id="fieldset" disabled>

                                                <div class="row">
                                                    <div class="col-md-1 col-form-label">{{ _('၂။') }}</div>
                                                    <label class="col-md-4 col-form-label">{{ __('ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်') }}</label>
                                                    <div class="col-md-7 single-form">
                                                        <input type="text" placeholder="ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်" name="private_school_name" class="form-control" value="" required="">
                                                    </div>
                                                </div><br/>

                                                <div class="row">
                                                    <div class="col-md-1 col-form-label">{{ _('၃။') }}</div>
                                                    <label class="col-md-4 col-form-label">{{ __('စာမေးပွဲပြန်လည်ဖြေဆိုသူများဖြည့်သွင်းရန်') }}</label>                                                    
                                                </div><br/>

                                                <div class="row">
                                                    <div class="col-md-1 col-form-label">{{ _('') }}</div>
                                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                    <label class="col-md-3 col-form-label">{{ __('နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ') }}</label>
                                                    <div class="col-md-7 single-form">
                                                        <input type="text" placeholder="dd/mm/yyyy" name="last_exam_date" class="form-control" value="" required="">
                                                    </div>
                                                </div><br/>

                                                <div class="row">
                                                    <div class="col-md-1 col-form-label">{{ _('') }}</div>
                                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label class="col-md-3 col-form-label">{{ __('ယခုဖြေဆိုမည့် Module') }}</label>
                                                    <div class="col-md-7">
                                                        <div class="row">
                                                            <div class="col-md-3"><input type="radio" name="module" value=""> <label class="col-form-label">Module 1</label></div>
                                                            <div class="col-md-3"><input type="radio" name="module" value=""> <label class="col-form-label">Module 2</label></div>
                                                            <div class="col-md-3"><input type="radio" name="module" value=""> <label class="col-form-label">All Modules</label></div>
                                                        </div> 
                                                    </div>
                                                </div><br/>

                                                <div class="row">
                                                    <div class="col-md-1 col-form-label">{{ _('') }}</div>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label class="col-md-3 col-form-label">{{ __('စာမေးပွဲကြေးပေးသွင်းပြီးသည့် ပြေစာအမှတ်') }}</label>
                                                    <div class="col-md-7">
                                                    <input type="file" id="invoice_image" class="form-control" placeholder="upload photo" name="invoice_image" required="">
                                                    </div>
                                                </div><br/>

                                                <div class="row">
                                                    <div class="col-md-1 col-form-label">{{ _('') }}</div>
                                                    <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                                    <label class="col-md-3 col-form-label">{{ __('ရက်စွဲ') }}</label>
                                                    <div class="col-md-7 single-form">
                                                        <input type="text" name="invoice_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                                    </div>
                                                </div><br/>
                                                
                                                <div class="row">
                                                    <div class="col-md-3 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Save') }}</button>
                                                    </div>
                                                </div>	
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            <!-- </form> -->
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
    $(document).ready(function (e) {
        $("input[name='last_exam_date']").flatpickr({
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
