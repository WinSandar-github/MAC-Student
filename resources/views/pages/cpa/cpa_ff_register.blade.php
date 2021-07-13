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
            
            <div class="row mt-5 pt-5">
                                            
                <form>
                    <div class="card border-success mb-3">
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                <label class="col-md-8 col-form-label">{{ __('လျှောက်ထားသူ၏ကိုယ်ရေးအချက်အလက်(အင်္ဂလိပ်ဘာသာဖြင့်ဖြည့်စွက်ပေးပါရန်)') }}</label>                                
                            </div><br/>                       

                            <div class="row">
                                <div class="col-md-1 col-form-label"></div>
                                <div class="col-md-1 col-form-label pt-5">{{ __('(က)') }}</div>
                                <div class="col-md-3 col-form-label pt-5">{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
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
                                                    <select class="form-control" name="nrc_township" id="nrc_township" >
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

                                            <div class="col-md-5 col-7 pl-1">
                                                <div class="single-form">
                                                    <input type="text" name="nrc_number" id="nrc_number" class="form-control" required="" maxlength="6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div> <br/>                           
                            
                            <div class="row">
                                <label class="col-md-1 col-form-label"></label>
                                <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                <label class="col-md-3 col-form-label">{{ __('ပညာအရည်အချင်း') }}</label>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" name="education" value="1" onclick="getEducation()">
                                            <label class="form-check-label">CPA</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="radio" name="education" value="2" onclick="getEducation()">
                                            <label class="form-check-label">RA</label>
                                        </div>
                                    </div>
                                    <div id="ra">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input type="file"  class="form-control p-4" name="image" required="" style="padding: 2%;">
                                                </div>
                                            </div>
                                        </div><br/>
                                    </div>
                                    
                                    <div class="row" >
                                        <div class="col-md-4">
                                            <input type="radio" name="education" value="3" onclick="getEducation()">
                                            <label class="form-check-label">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                        </div>
                                        
                                    </div>
                                    
                                    <div id="accredited_foreign_degree">
                                        <div class="file1">
                                            <div class="fileupload1">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <input type="file"  class="form-control p-4" name="image" required="" style="padding: 2%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 pt-4">
                                                        <button class="btn btn-primary btn-md btn-add" type="button" onclick='addInputFile("file1","fileupload1")'>
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>     
                            </div><br/>

                            <div class="row">
                                <label class="col-md-1 col-form-label"></label>
                                <label class="col-md-1 col-form-label pt-5">{{ __('(ဂ)') }}</label>
                                <label class="col-md-3 col-form-label pt-5">{{ __('CPAအပတ်စဥ် /ကိုယ်ပိုင်အမှတ်') }}</label>
                                <div class="col-md-7">
                                    <div class="single-form">
                                        <input type="text" name="cpa_no" class="form-control" id="cpa_no">
                                    </div>
                                </div>
                            </div></br>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                <label class="col-md-10 form-check-label">{{ __('လျှောက်ထားသူ၏ပညာအရည်အချင်းဆိုင်ကြေညာချက်(ဆိုင်ရာအကွက်တွင်အမှန်ခြစ်အမှတ်အသားပြု၍ဖြည့်ပေးပါ)') }}</label>                                
                            </div><br/>

                            <div class="row">
                                <label class="col-md-1 col-form-label"></label>
                                <label class="col-md-10 col-form-label">{{ __('ကျွန်ုပ်သည် ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံသားတော်၏နိုင်ငံသားဖြစ်ပြီး ') }}</label>
                                
                            </div><br/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-1"><input type="checkbox" name="local_degree" id="local_degree" value="1"></div>
                                <div class="col-md-10">
                                    
                                    <label class="form-check-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်ဒုတိယပိုင်းစာမေးပွဲကိုအောင်မြင်ပါသည်။</label>
                                </div>                                        
                            </div>                           

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-1">
                                    <input type="checkbox" name="foreign_degree" id="foreign_degree" value="1">
                                    
                                </div>                                                                               
                                <label class="col-md-10 col-form-label">စာရင်းပညာဆိုင်ရာဘွဲ့/လက်မှတ်ရရရှိခဲ့ပြီးမြန်မာနိုင်ငံစာရင်းကောင်စီက ကျင်းပခဲ့သည့် အရည်အချင်းစစ်စာမေးပွဲကို အောင်မြင်ခဲ့ပါသည်။</label>
                            </div><br/>                           

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ နှင့် ၆၈ ပါပြဌာန်းချက်များကို လိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံပါသည်။') }}</label>                                
                            </div><br/>
                                
                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                <label class="col-md-8 col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်') }}</label>                                
                            </div><br/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label pt-5">{{ __('(က)') }}</label>
                                <div class="col-md-5 col-form-label pt-5">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်စာမေးပွဲအောင်လက်မှတ်</div>
                                <div class="col-md-5">
                                    <div class=" mt-3 mb-3 col-auto">
                                        <div class="single-form">
                                            <input type="file"  class="form-control p-4" name="cpa" required="" style="padding: 2%;">
                                        </div>                                            
                                    </div>
                                </div>
                            </div><br/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label pt-5">{{ __('(ခ)') }}</label>
                                <div class="col-md-5 col-form-label pt-5">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား </div>
                                <div class="col-md-5">
                                    <div class=" mt-3 mb-3 col-auto"> 
                                        <div class="single-form">
                                            <input type="file"  class="form-control p-4" name="mpa_mem_card" required="" style="padding: 2%;">
                                        </div>                                         
                                    </div>
                                </div>                                
                            </div><br/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label pt-5">{{ __('(ဂ)') }}</label>
                                <div class="col-md-5 col-form-label pt-5">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</div>

                                <div class="col-md-5">
                                    <div class=" mt-3 mb-3 col-auto">
                                        <div class="single-form">
                                            <input type="file"  class="form-control p-4" name="nrc" required="" style="padding: 2%;">
                                        </div>                                        
                                    </div>
                                </div>
                            </div><br/>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                <div class="col-md-5 col-form-label pt-5">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</div>

                                <div class="col-md-5">
                                    <div class=" mt-3 mb-3 col-auto">
                                        <div class="single-form">
                                            <input type="file"  class="form-control p-4" name="nrc" required="" style="padding: 2%;">
                                        </div>                                        
                                    </div>
                                </div>
                            </div><br/>

                            <div class="row">
                                <label class="col-md-1 col-form-label"></label>
                                <label class="col-md-1 col-form-label pt-5">{{ __('(ဃ)') }}</label>
                                <label class="col-md-5 col-form-label pt-5">{{ __('စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ်လေ့လာသင်ယူမှု(Continuous professional Development-CPD)မှတ်တမ်း') }}</label>
                                <div class="col-md-5">
                                    <div class=" mt-3 mb-3 col-auto">
                                        <div class="single-form">
                                            <input type="file"  class="form-control p-4" name="cdp_record" required="" style="padding: 2%;">
                                        </div>                                           
                                    </div>
                                </div>
                            </div><br/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label pt-5">{{ __('(င)') }}</label>
                                
                                <div class="col-md-5 col-form-label pt-5">ပတ်စပို့အရွယ်ဓာတ်ပုံ</div>
                                <div class="col-md-5">
                                    <div class=" mt-3 mb-3 col-auto">
                                        <div class="single-form">
                                            <input type="file"  class="form-control p-4" name="passport_photo" required="" style="padding: 2%;">
                                        </div>                                          
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                <label class="col-md-4 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                
                            </div>
                            
                            <div class="row">
                                <label class="col-md-1 col-form-label"></label>
                                <label class="col-md-6 col-form-label">{{ __('ရက်စွဲ') }}</label>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="cpaff_dateone" placeholder="dd-mm-yyyy" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-11 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-success btn-round">{{ __('Save') }}</button>
                                </div>
                            </div>	
                            
                        </div>
                    </div>
                </form>
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
    getStudentInfo();
</script>
@endpush