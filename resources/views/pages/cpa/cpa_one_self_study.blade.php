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
                    <h2 class="title">CPA One Registration  <span>Form</span></h2>
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
                <div class="card border-success mb-3">
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                        <h5 class="card-title text-center">(ကိုယ်တိုင်လေ့လာသင်ယူမည့်သူများ)</h5>
                                    </div>
                                </div>

                            </div>

                            </div>
                        </div>
                        <div>
                            <form id="cpa_one_self_study_form" class="needs-validation" method="post" action="javascript:Self_Study_Submit();" enctype="multipart/form-data" novalidate>

                                <div class="row mb-3">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ _('၁။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <label class="col-form-label">{{ _('ပညာသင်နှစ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <input type="text" id="academic_year" class="form-control" value="" placeholder="ပညာသင်နှစ်" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ _('၂။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                            <label class="col-form-label">{{ _('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(က)</div>
                                    <div class="col-md-9 form-check" style="padding-top:10px">
                                        <input type="checkbox" class="" value="ယခုနှစ်တက်ရောက်ခွင့်ရရှိခြင်း" id="cpa_check" name="reg_reason[]" >
																				<label class="">{{ _('ယခုနှစ်တက်ရောက်ခွင့်ရရှိခြင်း') }}</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>

                                    <div class="col-md-4">
                                        <label class="col-form-label">{{ _('(၁) တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်') }}</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="direct_access_no" class="form-control" value="" placeholder="တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်" required>
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4">
                                        <label class="col-form-label">{{ _('(၂) ဝင်ခွင့်စာမေးပွဲအောင်မြင်သည့် အမှတ်စဥ်') }}</label>

                                    </div>
                                    <div class="col-md-5">
                                            <input type="text" id="entry_success_no" class="form-control" value="" placeholder="ဝင်ခွင့်စာမေးပွဲအောင်မြင်သည့် အမှတ်စဥ်" required >
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ခ)</div>
                                    <div class="col-md-9 form-check" style="padding-top:10px">
                                        <input type="checkbox" class="" value="သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း" id="enrol_no_exam" name="reg_reason[]" >
                                        <label class="">{{ _(' သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ဂ)</div>
                                    <div class="col-md-4 form-check" style="padding-top:10px">
																			<input type="checkbox" class="" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း" id="attendance" name="reg_reason[]" >
																			<label class="">{{ _(' သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ဃ)</div>
                                    <div class="col-md-4 form-check" style="padding-top:10px">
                                        <input type="checkbox" class="" value="စာမေးပွဲကျရှုံးခြင်း" id="fail_exam" name="reg_reason[]" >
																				<label class="">{{ _(' စာမေးပွဲကျရှုံးခြင်း') }}</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(င) </div>
                                    <div class="col-md-4 form-check" style="padding-top:10px">
                                        <input type="checkbox" class="" value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း" id="resigned" name="reg_reason[]" >
																				<label class="">{{ _('သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2 col-form-label">(စ)</div>
                                    <div class="col-md-4">
                                            <label class="col-form-label">{{ _('ဖြေဆိုမည့် Module') }}</label>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-4 form-check">
                                                <input type="radio" class="form-check-input" name="module" value="" id="module1" required>
                                                <label class="form-check-label">{{ _('Module-1') }}</label>
                                            </div>
                                            <div class="col-md-4 form-check">
                                                <input type="radio" class="form-check-input" name="module" value="" id="module2" >
                                                <label class="form-check-label">{{ _('Module-2') }}</label>
                                            </div>
                                            <div class="col-md-4 form-check">
                                                <input type="radio" class="form-check-input" name="module" value="" id="allmodule" >
                                                <label class="form-check-label">{{ _('All Module') }}</label>
																								<div class="invalid-feedback mt-3">ဖြေဆိုမည့် Module ရွေးချယ်ပါ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br/>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-5 col-form-label">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_no" class="form-control" placeholder="သင်တန်းအမှတ်စဥ်" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-5 col-form-label">{{ __('အပိုင်း') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_part_no" class="form-control" placeholder="အပိုင်း" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-5 col-form-label">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="" >
                                    
                                    </div>
                                </div>

                               



                                {{--<div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm" onclick="ConfirmSubmit()"></div>
                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                </div><br/>

                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့် နည်းဥပဒေများအတိုင်း ကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                </div>--}}

                                <div class="row">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn" >{{ __('Submit') }}</button>
                                    </div>
                                </div><br/>
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
<script type="text/javascript">
	$(document).ready(function(){
		$("#cpa_one_self_study_form").submit(function( event ) {
			var fields = $("input[name='reg_reason[]']").serializeArray();
	    if (fields.length === 0)
	    {
	        //alert('nothing selected');
					$("input[name='reg_reason[]']").siblings("label").css('color','red');
	        return false;
	    }
	    else
	    {
				$("input[name='reg_reason[]']").siblings("label").css('color','#212529');
	        //alert(fields.length + " items selected");
	    }

		});

		$("input[name='reg_reason[]']").change(function(){
			$("input[name='reg_reason[]']").siblings("label").css('color','#212529');
		});
	});
</script>
@endpush
