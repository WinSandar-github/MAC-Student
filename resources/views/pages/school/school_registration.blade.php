@php
    $nrc_language = config('myanmarnrc.language');
    $nrc_regions = config('myanmarnrc.regions_states');
    $nrc_townships = config('myanmarnrc.townships');
    $nrc_citizens = config('myanmarnrc.citizens');
    $nrc_characters = config('myanmarnrc.characters');
@endphp

@extends('layouts.app')
@section('content')
    <style>
        .form-group{
            margin-bottom: 1rem;
        }
        .list {
            max-height: 350px; 
            overflow-y: auto !important;
        }
    </style>
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
                    <h2 class="title">School Registration  <span>Form</span></h2>
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
                            <form id="school_register_form" enctype="multipart/form-data" action="javascript:createSchoolRegister();" class="needs-validation" autocomplete="off" novalidate>
                                <div class="row">
                                  <label class="col-md-1 col-form-label"></label>
                                  <label class="col-md-8 col-form-label">{{ __('လျှောက်ထားသူ၏အချက်အလက်များ') }}</label>
	                                      
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                    <label class="col-md-2 col-form-label">{{ __('အီးမေးလ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                    <label class="col-md-2 col-form-label">{{ __('စကားဝှက်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                  <label class="col-md-2 col-form-label">{{ __('အမည်(မြန်မာ)') }}</label>
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <input type="text" name="name_mm" id="name_mm" class="form-control" autocomplete='off' required>
                                      </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <label class="col-md-1 col-form-label"></label>
                                  <label class="col-md-2 col-form-label">{{ __('အမည်(အင်္ဂလိပ်)') }}</label>
                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <input type="text" name="name_eng" class="form-control" autocomplete='off' required>
                                      </div>
                                  </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-2 col-form-label">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                          <div class="col-md-2 col-5 pr-1">
                                                <select class="form-control" name="nrc_state_region" id="nrc_state_region" style="padding-top: 0px; margin-top: 0px !important; margin-bottom: 0px;">
                                                @foreach($nrc_regions as $region)
                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                    </option>
                                                @endforeach
                                                </select>
                                          </div>
                                          <div class="col-md-3 col-7 px-1">
                                                <select class="form-control" name="nrc_township" id="nrc_township" style="margin-top: 0px; margin-bottom: 0px;">
                                                    @foreach($nrc_townships as $township)
                                                        <option value="{{ $township['township_mm'] }}">
                                                            {{ $township['township_mm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                          </div>
                                          <div class="col-md-2 col-5 px-1">
                                              <select class="form-control" name="nrc_citizen" id="nrc_citizen" style="margin-top: 0px; margin-bottom: 0px;">
                                                  @foreach($nrc_citizens as $citizen)
                                                      <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                          {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                      </option>
                                                  @endforeach
                                              </select>
                                          </div>
                                          <div class="col-md-5 col-7 pl-1">
                                              <input type="text" name="nrc_number" id="nrc_number" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" required>
                                          </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-2 col-form-label">{{ __('အဘအမည်(မြန်မာ)') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                            
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-2 col-form-label">{{ __('အဘအမည်(အင်္ဂလိပ်)') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="father_name_eng" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                            
                                </div>
	                                  
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                    <label class="col-md-2 col-form-label">{{ __('မွေးသဣရာဇ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" id="dob" name="dob" placeholder="dd-mm-yyyy" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                    <label class="col-md-2 col-form-label">{{ __('ပညာအရည်အချင်း') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="degree" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('လုပ်ငန်းဖွဲ့စည်းမှုပုံစံကျောင်းကို အောက်ဖော်ပြပါလုပ်ငန်းဖွဲ့စည်းမှုပုံစံဖြင့်ဆောင်ရွက်ပါမည်(ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ရန်)') }} </label>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="school_type[]" value='တစ်ဦးတည်းပိုင်လုပ်ငန်း'>
                                        <label class="form-check-label">တစ်ဦးတည်းပိုင်လုပ်ငန်း </label>
                                        <label class="form-check-label type text-danger" style='display:none;float:right;'>ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ပေးပါ</label>
                                    </div>                
                                </div>
                            
                                <div class="row" style="clear:both;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="school_type[]" value='နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း'>
                                        <label class="form-check-label">နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း</label>
                                    </div>              
                                </div>

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="school_type[]" value='တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ'>
                                        <label class="form-check-label">တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ</label>
                                    </div>                
                                </div>

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="school_type[]" value='တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်'>
                                        <label class="form-check-label">တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း</label>
                                    </div>              
                                </div><br>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                    <label class="col-md-6 col-form-label">{{ __('လျှောက်ထားသူ/အဖွဲ့အစည်း၏နောက်ခံသမိုင်း(သီးခြားစာရွက်ဖြင့်ဖော်ပြရန်)') }}</label>
                                    <div class="col-md-4">
                                        <div class="mb-3 col-auto">
                                            <input type="file" id="attachment" name="attachment" class="form-control" accept="application/pdf"  required />                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                    <label class="col-md-2 col-form-label">{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
	                                    
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                    <label class="col-md-2 col-form-label">{{ __('ဖုန်းနံပါတ်') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" autocomplete='off' required>
                                        </div>
                                    </div>
                                </div>
	                                    
                                

                                <div class="row">
                                    <label class="col-md-1 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('မှတ်ချက်။လျှောက်လွှာကြေး ၁၀၀၀၀ကျပ်၊မှတ်ပုံတင်ကြေး ၅၀၀,၀၀၀ကျပ်၊နှစ်စဥ်ကြေး ၃၀၀,၀၀၀ကျပ်') }}</label>
                                </div>

                                <div class="row m-4">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit Now') }}</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
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
<script src="{{ asset('assets/js/myanmarnrc.js') }}"></script>
<script src="{{asset('assets/js/school.js')}}"></script>
<script type="text/javascript">

$(document).ready(function (e) {
    $( "#school_register_form" ).submit(function( event ) {
        var checkedNum = $('input[name="school_type[]"]:checked').length;
        if (!checkedNum) {
            $(".type").show();
            event.preventDefault();
        }
    });
    $('input[type=checkbox][name="school_type[]"]').change(function() {
        var checkedNum = $('input[name="school_type[]"]:checked').length;
        if (!checkedNum) {
            $(".type").show();
        }
        else {
            $(".type").hide();
        }
    });

    $("input[name='dob']").flatpickr({
            enableTime: false,
            dateFormat: "d-m-Y",
            allowInput: true
    });

    $("input[id*='name_mm'], text[id*='name_mm']").on('keyup', function(e) {
        myanmarLetterOnly($(this));
    });
    $(document).on('keydown', '#name_mm', function () {
        myanmarLetterOnly($(this));
    });
    $("input[id*='father_name_mm'], text[id*='father_name_mm']").on('keyup', function(e) {
        myanmarLetterOnly($(this));
    });
    $(document).on('keydown', '#father_name_mm', function () {
        myanmarLetterOnly($(this));
    });
    function myanmarLetterOnly( self )
    {
        val = self.val();
        if ( /[a-zA-Z0-9]+$/.test( val ) ) {
          self.val( val.replace(/[a-zA-Z0-9]+$/, '') );
        }
    }
});
</script>
@endpush