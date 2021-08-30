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
                        <li><a href="/">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">DA One Application <span>Form</span></h2>
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
                        
                        <form method="post" class="needs-validation" action="javascript:createDARegister();" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="row">
                                <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">

                                <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                <h5 class="card-title text-center">ဒီပလိုမာစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းတက်ရောက်ခွင့်လျှောက်လွှာ</h5>
                                <br/>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" placeholder="Enter your Email address!" name="email" class="form-control" value="{{ old('email') }}" required="">
                                            @if ($errors->has('email'))
                                                    <span class="text-danger">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                        </div>                                              
                                    </div><br>

                                    

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" placeholder="Enter your Password!" name="password" class="form-control" value="{{ old('password') }}" required="">
                                        </div>
                                        
                                    </div><br>
                                     

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input type="password" placeholder="Enter your Password again!" name="confirm_password" class="form-control"  required="">
                                        </div>                                                
                                    </div><br>																	
                                    

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">အမည်(မြန်မာ/အင်္ဂလိပ်)'</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm" class="form-control"  required="">
                                        </div> 
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" class="form-control"  required="">
                                        </div>                                                
                                    </div><br>

                                    

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                        <div class="col-md-8">
                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
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
                                                    <input type="text" name="nrc_number" placeholder="ဥပမာ။ ။ ၁၂၃၄၅၆" id="nrc_number" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px" value="{{ old('nrc_number') }}" required="">
                                                </div>
                                            </div>
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-3 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                        <div class="col-md-8">
                                            <input type="file" name="nrc_front" class="form-control">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-3 col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                        <div class="col-md-8">
                                            <input type="file" name="nrc_back" class="form-control">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" class="form-control"  required="">
                                        </div> 
                                        <div class="col-md-4">
                                            <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" class="form-control"  required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">လူမျိုး</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="လူမျိုး" name="race" class="form-control" value="{{ old('race') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">ကိုးကွယ်သည့်ဘာသာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" name="religion" class="form-control" value="{{ old('religion') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">မွေးသက္ကရာဇ်</label>
                                        <div class="col-md-8">
                                            <input type="text" name="date_of_birth" class="form-control" placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" required>
                                        </div>                                                
                                    </div><br> 

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">ဖုန်းနံပါတ်</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone" class="form-control" value="{{ old('phone') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">နေရပ်လိပ်စာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="နေရပ်လိပ်စာ" name="address" class="form-control" value="{{ old('address') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address" class="form-control" value="{{ old('current_address') }}" required="">
                                        </div>                                                
                                    </div><br>
                                    
                                    <input type="hidden" name="registration_no" value="1">                                    
																		
                                    <input type="hidden" name="approve_reject_status">

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                        <label for="" class="col-md-3 col-form-label">Upload Photo</label>
                                        <div class="col-md-8">
                                            <input type="file" id="image" class="form-control" name="image" value="{{ old('image') }}"  accept="image/*" required="" >
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">လက်ရှိအလုပ်အကိုင်</label>
                                        <div class="col-md-7">
                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="name" class="form-control" value="{{ old('name') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">ရာထူး</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="ရာထူး" name="position" class="form-control" value="{{ old('position') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">ဌာန</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="ဌာန" name="department" class="form-control" value="{{ old('department') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">အဖွဲ့အစည်း</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="အဖွဲ့အစည်း" name="organization" class="form-control" value="{{ old('organization') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">ကုမ္ပဏီအမည်</label>
                                        <div class="col-md-7">
                                        <input type="text" placeholder="ကုမ္ပဏီအမည်" name="company_name" class="form-control" value="{{ old('company_name') }}" required="">
                                        </div>                                                
                                    </div><br> 

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(စ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">လစာနှင့်လစာနှုန်း</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary" class="form-control" value="{{ old('salary') }}" required="">
                                        </div>                                                
                                    </div><br>  

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ဆ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">ရုံးလိပ်စာ</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address" class="form-control" value="{{ old('office_address') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label class="col-sm-1 col-form-label">{{ __('၁၄။') }}</label>
                                        <label class="col-md-4 col-form-label">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                        <div class="col-md-2 pt-2">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4"><input type="radio" class="form-check-input mr-3" id="yes" name="gov_staff" value="1" style="margin-left: 3%;"  required></div>
                                                    <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label></div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <div class="row">
                                                    <div class="col-md-4"><input type="radio" class="form-check-input mr-3" id="no" name="gov_staff" value="0" style="margin-left: 3%;"  required></div>
                                                    <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label><div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ် ရွေးချယ်ပါ</div></div>
                                                    
                                                </div>
                                    
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                        <label for="" class="col-md-11 col-form-label">တက္ကသိုလ်တစ်ခုခုမှ အောင်မြင်ပြီးခဲ့သော</label>                                                                                        
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">ဘွဲ့အမည်</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name" class="form-control" value="{{ old('degree_name') }}" required="">
                                        </div>                                                
                                    </div><br>  

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">တက္ကသိုလ်အမည်</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="တက္ကသိုလ်အမည်" name="university_name" class="form-control" value="{{ old('university_name') }}" required="">
                                        </div>                                                
                                    </div><br>

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">ခုံအမှတ်</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="ခုံအမှတ်" name="roll_number" class="form-control" value="{{ old('roll_number') }}" required="">
                                        </div>                                                
                                    </div><br>                                   
                                    

                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                        <label for="" class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                        <label for="" class="col-md-3 col-form-label">နှစ်၊လ</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="နှစ်၊လ(MMM-YYYY)" name="qualified_date" class="form-control"  required="">
                                        </div>                                                
                                    </div><br>

                                    <div  id="edu" > 
                                        <div class="row mb-3" id="edu0" >
                                            <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                            <label for="" class="col-md-1 col-form-label">{{ __('(င)') }}</label>                                                            
                                            <label for="" class="col-md-3 col-form-labe mt-1"> Attached Certificate</label>
                                            
                                            <div class="col-md-6"  id="degree_edu" >
                                                <input type="file"  class="form-control" id="certificate0"  name="certificate0" required="">
                                            </div>
                                            <div class="col-md-1" id="add_div" >
                                                <button type="button" class="btn btn-primary" id="add_btn" onclick="AddDAEdu()" >
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div><br>

                                    
                                    
                                    
                                    <div class="row m-4">
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
        localStorage.removeItem('course_type');
        $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
                allowInput: true,
        });
        $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
				allowInput: true,
        });
        $("input[name='qualified_date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
				allowInput: true,
        });

        $("input[id*='nrc_number'], text[id*='nrc_number']").change(function(e) {
            myanmarLetterOnly($(this));
        });

        $(document).on('keydown', '#nrc_number', function () {
            myanmarLetterOnly($(this));
        });

        $("input[id*='name_mm'], text[id*='name_mm']").change(function(e) {
            myanmarLetterOnly($(this));
        });

        $(document).on('keydown', '#name_mm', function () {
            myanmarLetterOnly($(this));
        });

        $("input[id*='father_name_mm'], text[id*='father_name_mm']").change(function(e) {
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
