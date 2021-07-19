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
            <div class="comment-form">
                <div class="form-wrapper">
                    <div class="row"> 
                        <div class="card border-success mb-3">                                                     
                            <!-- <form> -->
                                <div class="card-body ">
                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                    <h5 class="card-title text-center">အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူအဖြစ် မှတ်ပုံတင်ရန် ကနဦးလျှောက်ထားခြင်း</h5>
                                    <br/>
                                    <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="single-form">
                                                        <label class="col-form-label">{{ _('၁။') }}</label>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="single-form">
                                                        <label class="col-form-label">{{ _('လျှော​က်ထားသူ၏ ကိုယ်ရေးအချက်အလက် (အင်္ဂလိပ်ဘာသာဖြင့် ဖြည့်စွက်ပေးပါရန်)') }}</label>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                        <div class="single-form">
                                                            <label>(က) နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                        </div>
                                                    </div>
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
                                                            <div class="col-md-4 col-7 pl-1">
                                                                <div class="single-form">
                                                                    <input type="text" name="nrc_number" id="nrc_number" class="form-control" value="{{ old('nrc_number') }}" required="" maxlength="6">
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
                                            <form  method="post" action="javascript:Papp_Submit();" enctype="multipart/form-data">
                                                <fieldset id="fieldset" disabled="disabled">
                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-3">
                                                                    <label>(ခ) ပညာအရည်အချင်း</label>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input type="checkbox" value="" id="cpa_check" onclick="CPA_Check()" >
                                                                <label  style="font-size:15px;">CPA</label>
                                                            </div>
                                                            <div class="col-md-1">                                                    
                                                            </div>
                                                            <div class="col-md-3"  id="cpa_edu" style="display:none;">
                                                                <div class="row">
                                                                    <input type="file"  class="form-control" id="cpa_file" name="cpa_file">                                                                
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-md-4"></div>
                                                            <div class="col-md-2">
                                                                <input type="checkbox" value=""  id="ra_check" onclick="RA_Check()" >
                                                                <label  style="font-size:15px;">RA</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                        
                                                            </div>
                                                            <div class="col-md-3"  id="ra_edu" style="display:none;">
                                                                <div class="row">
                                                                    <input type="file" class="form-control" id="ra_file"  name="ra_file">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4"></div>
                                                            <div class="col-md-3">
                                                                <input type="checkbox" value=""  id="degree_check" onclick="Degree_Check()"  >
                                                                <label  style="font-size:15px;">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                                            </div>
                                                            <!-- <div class="col-md-1" id="add_div" style="display:none;">
                                                            <input type="button" id="add_btn" value="Add" onclick="Add()" >
                                                            </div> -->
                                                            <div class="col-md-4" id="edu" style="display:none;padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px">  
                                                                <div class="row" id="edu0" >  
                                                                    <div class="col-md-9"  id="degree_edu" >
                                                                        <input type="file"  class="form-control" id="degree_file0"  name="degree_file0" >
                                                                    </div>
                                                                    <!-- <div class="col-md-1" id="edu0_remove" style="display:block;">
                                                                        <a id="myLink" onclick="remove(edu0)">
                                                                        <span class="fa fa-trash danger text-danger">

                                                                        </span></a></div> -->
                                                                    <div class="col-md-3" id="add_div" style="display:none;">
                                                                        <input type="button" class="form-control" id="add_btn" value="Add" onclick="Add()" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-md-1" id="add_div" style="display:none;">
                                                                        <input type="button" class="form-control" id="add_btn" value="Add" onclick="Add()" >
                                                                        </div> -->
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                                <label class="col-form-label">{{ _('၂။') }}</label>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <label class="col-form-label"  style="font-size:15px;">ကျွန်ုပ်အား အများပြည်သူသို့ စာရင်းဝန်တောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်သူအဖြစ်
                                                            <input type="text" name="papp_date" placeholder="dd/mm/yyyy" required>
                                                            ခုနှစ်အတွက် မှတ်ပုံတင်ပေးပါရန် လျှောက်ထားပါသည်။</label>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ _('၃။') }}</label>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ _('ကျွန်ုပ်သည် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ရာတွင်') }}</label>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" id="firm_check" value="" >
                                                            <label style="font-size:15px;"> လုပ်ငန်းအမည် Firm Name အသုံးမပြုပါ။</label>
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-10">
                                                            <input type="checkbox" id="used_firm_check" value="">
                                                            <label style="font-size:15px;"> အသုံးပြုမည့်လုပ်ငန်းအမည် Firm Name, လုပ်ငန်းအမျိုးစားနှင့် မိမိ၏ အဆင့်မှာ အောက်ပါအတိုင်းဖြစ်ပါသည်-</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-3">
                                                        <div class="single-form">
                                                            <label>- လုပ်ငန်းအမည်</label>
                                                        </div></div>
                                                        <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" class="form-control" value="" name="used_firm_name" ></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-3">
                                                        <div class="single-form">
                                                            <label>- လုပ်ငန်းအမျိုးအစား (တစ်ဦးတည်းပိုင်/ အစုစပ်/ ကုမ္ပဏီ စသည်)</label>
                                                        </div></div>
                                                        <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" class="form-control" value="" name="used_firm_type"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-3">
                                                        <div class="single-form">
                                                            <label>-အဆင့်(Principal/ Managing Partner/ Partner စသည်)</label>
                                                        </div></div>
                                                        <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" class="form-control" value="" name="used_firm_level"></div>
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" id="staff_firm_check" value="">
                                                            <label style="font-size:15px;"> ဝန်ထမ်းအနေဖြင့် ဆောင်ရွက်နေသည့် လုပ်ငန်းအမည်</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" class="form-control" name="staff_firm_name" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ _('၄။') }}</label>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="single-form">
                                                                <label class="col-form-label">{{ _('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျက် လျှောက်ထားပါသည်-') }}</label>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-8">
                                                                <label style="font-size:15px;">(က) လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မှီ) မှတ်ပုံတင်လက်မှတ်၊</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                                <input type="file" class="form-control"  id="cpa_ff_file">
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-8">
                                                                <label style="font-size:15px;">(ခ) မှတ်ပုံတင်မည့် ပြက္ခဒိန်နှစ်မတိုင်မီနှစ်တွင် မြန်မာနိုင်ငံ၌ ၁၈၃ ရက်ထက်မနည်း နေထိုင်သူဖြစ်ကြောင်း ခံဝန်ချက်၊</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                                <input type="file" class="form-control" id="file_183">
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-8">
                                                                <label style="font-size:15px;">(ဂ) အခြားလုပ်ငန်းအဖွဲ့အစည်းတစ်ရပ်ရပ်တွင် အချိန်ပြည့် တာဝန်ထမ်းတောင်နေသူ မဟုတ်ကြောင်း ခံဝန်ချက်၊</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                                <input type="file" class="form-control" id="not_fulltime_file">
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-8">
                                                                <label style="font-size:15px;">(ဃ) လျှောက်ထားသည့်နှစ်အတွက် အများပြည်သူသို့ စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းကို မိမိ၏ အဓိကအသက်မွေးဝမ်းကျောင်းလုပ်ငန်းအဖြစ် မြန်မာနိုင်ငံအတွင်းတွင် လုပ်ကိုင်မည်ဖြစ်​ကြောင်း ခံဝန်ချက်၊</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                                <input type="file"  class="form-control" id="work_in_mm_file">
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-8">
                                                                <label style="font-size:15px;">(င) လုပ်ငန်းဆောင်ရွက်ရာတွင် မြန်မာနိုင်ငံစာရင်းကောင်စီ၏ ၉-၈-၂၀၁၈ ရက်စွဲပါအမိန့်ကြော်ငြာစာအမှတ် ၂၇/၂၀၁၈ ၏ နောက်ဆက်တွဲတွင် ဖော်ပြထားသည့်စည်းကမ်းချက်များနှင့် စပ်လျဥ်း၍ လိုက်နာခြင်း ရှိ/မရှိ၊</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                                <input type="file" class="form-control" id="rule_conf_file">
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-8">
                                                                <label style="font-size:15px;">(စ) စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ် လေ့လာသင်ယူမှု (Continuous Professional Development - CPD) မှတ်တမ်း၊</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                                <input type="file" class="form-control" id="cpd_record_file" >
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-8">
                                                                <label style="font-size:15px;">(ဆ) ပြည်တွင်းအခွန်ဦးစီးဌာနသို့ 
                                                                <input type="text" name="tax_year" placeholder="dd/mm/yyyy" required>ပြက္ခဒိန်နှစ်အတွက် အခွန်ပေးဆောင်မှု အထောက်အထား (ရှိလျှင်) (သို့မဟုတ်) အခွန်ကင်းရှင်းကြောင်း ထောက်ခံချက်၊</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                                <input type="file" class="form-control" id="tax_free_file" >
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-2 offset-md-5">
                                                            <button type="submit" class="btn btn-success btn-hover-dark w-100">Save</button>
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
                </div>
            
        </div><br/></br/>

        
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