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
                    <h2 class="title">Registration  <span>Form</span></h2>
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
        <div class="container" style="overflow: hidden;">
            
            <div class="row mt-5">
                                            
                
                <!-- <input type="hidden" name="student_info_id" class="form-control" value="1"> -->
                <div class="card border-success mb-3">
                    <div class="card-body">
                        <div class="row">   
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                        <h5 class="card-title text-center">(ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)</h5>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-form-label pt-4">{{ __('၁။') }}</div>
                            <div class="col-md-4 col-form-label pt-4">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-2  px-1">
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
                                    <div class="col-md-3 px-1">
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
                                    <div class="col-md-2 px-1">
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

                                    <div class="col-md-3 pl-1">
                                        <div class="single-form">
                                        <input type="text" name="nrc_number" id="nrc_number" class="form-control" value="{{ old('nrc_number') }}" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"   maxlength="6">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <button type="submit" onclick="SearchCPAOneByNRC()"  class="btn btn-primary btn-hover-dark">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <form  method="post" action="javascript:CPA2_Private_School_Submit();" enctype="multipart/form-data">
                        <fieldset id="fieldset" disabled>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('၂။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="single-form">
                                            <label class="col-form-label">{{ _('လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပထမပိုင်း) စာမေးပွဲအောင်မြင်ခဲ့သည့်') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-3"><div class="single-form">
                                            <label class="col-form-label">{{ _('(က) နှစ်/လ') }}</label>
                                    </div></div>
                                    <div class="col-md-4"> <div class="single-form">
                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="cpa_one_pass_date" value="" required>
                                    </div></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-3"><div class="single-form">
                                            <label class="col-form-label">{{ _('(ခ) ကိုယ်ပိုင်အမှတ်') }}</label>
                                    </div></div>
                                    <div class="col-md-4"><div class="single-form">
                                            <input type="text" class="form-control" id="cpa_one_access_no" value="" required>
                                    </div></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-3"><div class="single-form">
                                            <label class="col-form-label">{{ _('(ဂ) အဆင့်') }}</label>
                                    </div></div>
                                    <div class="col-md-4"><div class="single-form">
                                            <input type="text" class="form-control" id="cpa_one_success_no" value="" required>
                                    </div></div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
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

</script>
@endpush