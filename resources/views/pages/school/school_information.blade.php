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
                    <h2 class="title">School <span>Detail</span></h2>
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
        <div class="section"> <!-- section-padding mt-n10 -->
            <div class="container mt-5"> <!-- container-fluid p-4 -->
                <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark mb-3">

                        <div class="card-body">
                            <p class="card-text reject">Your Registration Form need to prepare.Please update your form
                             </p>
                        </div>
                    </div>
                </div>
                <div class="check_registration" style="display:none; margin-left: 7%; margin-right: 7%;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body">
                            <p class="card-text">Your Application Form is checking</p>
                        </div>
                    </div>
                </div>

								<div id="school_detail">
									<div class="row">
										<div class="card col-md-7 m-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 widget-information">
														<h4 class="col-md-12 card-title text-success">Description</h4>
														<hr>
														<div class="info-list description-info">
                                                            
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card col-md-4 m-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12 widget-information">
														<h4 class="col-md-12 card-title text-success">Fees</h4>
														<hr>
														<div class="info-list">
															<div class="col-md-12">
																<ul>
																		<li><i class="icofont-money"></i> <strong>Application Fee</strong> </li>
																		<li><i class="icofont-money"></i> <strong>Registration Fee</strong></li>
																		<div class="pull-right mt-4">
																			<p class="info-btn col-md-2 mb-4 text-dark h6">
																				<a href="{{url('school_register')}}" class="btn btn-success btn-hover-dark" >Register</a>
																			</p>
																		</div>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

                <div class="card border-success mb-3" id="school_renew_form" style="display:none;"><br/>
                    <h5 class="card-title text-center">ကျောင်းမှတ်ပုံတင် သက်တမ်းတိုးလျှောက်ထားလွှာ</h5> <br/>

                    <div class="card-body">
                            <form method="post" action="javascript:renewSchool();" enctype="multipart/form-data" id="school_renew_form_data">
                                
                            {{--User Photo--}}
                            <div class="row">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle shadow">
                                        <img id="previewImg"
                                             alt="Upload Photo">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                    <div>
                                        <span class="btn btn-round btn-secondary btn-file">
                                        <span class="fileinput-new">ဓာတ်ပုံ</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required></span>
                                        <br>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                           data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            {{--User Photo--}}
                                    <div class="row">
                                  
                                        <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">{{ __('၁။') }}</span>{{ __('အီးမေးလ်') }}</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" autocomplete='off' disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">{{ __('၂။') }}</span>{{ __('အမည်(မြန်မာ/အင်္ဂလိပ်)') }}
                                        </label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name_mm" id="name_mm" class="form-control" autocomplete='off' disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name_eng" class="form-control"  autocomplete='off' disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">{{ __('၃။') }}</span>{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}
                                        </label>
                                        <div class="col-md-9">
                                            <div class="row">
                                            <div class="col-md-2">
                                                    <select class="form-control" name="nrc_state_region" id="nrc_state_region" disabled>
                                                    @foreach($nrc_regions as $region)
                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                        </option>
                                                    @endforeach
                                                    </select>
                                            </div>
                                            <div class="col-md-3">
                                                    <select class="form-control" name="nrc_township" id="nrc_township" disabled>
                                                        @foreach($nrc_townships as $township)
                                                            <option value="{{ $township['township_mm'] }}">
                                                                {{ $township['township_mm'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="col-md-2 ">
                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen"  disabled>
                                                    @foreach($nrc_citizens as $citizen)
                                                        <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-5 ">
                                                <input type="text" name="nrc_number" id="nrc_number"  pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^၀-၉]/g,'');"  maxlength="6" minlength="6" disabled style="height: 38px" autocomplete='off'>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                  <!-- <div class="col-md-4">
                                    <div class="col-md-7 pull-right">
                                      <img class="col-md-3 profile-style" id="previewImg"  accept="image/png,image/jpeg" alt="">
                                      <p class="mt-2">
                                        <input type="file" class="custom-file-input form-control" id="profile_photo" name="profile_photo" onchange="previewImageFile(this);" required>
                                        <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                      </p>
                                    </div>
                                    
                                  </div> -->
                                
                                <br>
                                 <div class="row">
                                    <label for="" class="col-md-3 col-form-label">{{ __('') }}</label>
                                    <input type="hidden" id="hidden_nrc_front">
                                    <input type="hidden" id="hidden_nrc_back">
                                    <div class="col-md-9">
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" id="hidden_nrc_front">
                                                    <div class="row">
                                                        
                                                                 <img class="nrc-style" id="nrc_front_img"  accept="image/png,image/jpeg" alt="">
                                                                
                                                                <p class="mt-2">
                                                                    
                                                                    <input type="file" class="nrc-custom-file-input" name="nrc_front"  onchange="previewNRCFile('nrc_front','nrc_front_img');">
                                                                    <br/><span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                                    
                                                                </p>
                                                                
                                                       
                                                    </div>            
                                                       
                                                         
                                            </div>
                                            <div class="col-md-6">
                                                <input type="hidden" id="hidden_nrc_back">
                                                        <div class="row">
                                                            
                                                                <img class="nrc-style" id="nrc_back_img"  accept="image/png,image/jpeg" alt="">
                                                                <p class="mt-2">
                                                                    
                                                                    <input type="file" name="nrc_back" class="nrc-custom-file-input" onchange="previewNRCFile('nrc_back','nrc_back_img');">
                                                                    <br/><span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                                                    
                                                                </p>
                                                                
                                                            
                                                        </div>   
                                                    
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img id="nrc_front_img"
                                                            alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                    <span class="btn btn-secondary btn-round btn-file">
                                                    <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အရှေ့)</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="hidden" value=""><input type="file" id="nrc_front"
                                                                                        name="nrc_front"
                                                                                        value="{{ old('nrc_front') }}"
                                                                                        accept="image/*" >
                                                    </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail shadow">
                                                        <img id="nrc_back_img"
                                                            alt="Upload Photo">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                    <span class="btn btn-secondary btn-round btn-file">
                                                    <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အနောက်)</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back"
                                                                                        value="{{ old('nrc_back') }}"
                                                                                        accept="image/*" >
                                                    </span>
                                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                    </div>
                                                    <span class="form-text text-danger">Allowed Jpeg,Jpg and Png Image.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <label class="col-md-3 col-form-label text-end"><span
                                                class="pull-left">{{ __('၄။') }}</span>{{ __('အဘအမည်(မြန်မာ/အင်္ဂလိပ်)') }}
                                    </label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="father_name_mm" id="father_name_mm"  class="form-control" autocomplete='off' disabled>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="father_name_eng" class="form-control"  autocomplete='off' disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <label class="col-md-3 col-form-label text-end"><span class="pull-left">{{ __('၅။') }}</span>{{ __('မွေးသက္ကရာဇ်') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" id="dob" name="dob"  class="form-control" autocomplete='off' disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <label class="col-md-3 col-form-label text-end"><span class="pull-left">{{ __('၆။') }}</span>{{ __('ပညာအရည်အချင်း') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="degree" class="form-control"  autocomplete='off' disabled>
                                        </div>
                                    </div>
                                </div>

                                
                                <!-- <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input class="" type="checkbox" name="school_type[]" id='schoolတစ်ဦးတည်းပိုင်လုပ်ငန်း' value='တစ်ဦးတည်းပိုင်လုပ်ငန်း' >
                                        <label class="">တစ်ဦးတည်းပိုင်လုပ်ငန်း </label>
                                        <label class="form-check-label type text-danger" style='display:none;float:right;'>ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ပေးပါ</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input class="" type="checkbox" name="school_type[]" id='schoolနိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း' value='နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း' >
                                        <label class="">နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input type="checkbox" class="" name="school_type[]" id='schoolတည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ' value='တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ' >
                                        <label class="">တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 form-check">
                                        <input type="checkbox" class="" name="school_type[]" id='schoolတည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်' value='တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း' >
                                        <label class="">တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း</label>
                                    </div>
                                </div><br> -->
                                <div class="row mb-4">
                                    <label class="col-md-3 col-form-label text-end">
                                        <span class="pull-left">{{ __('၇။') }}</span>
                                        {{ __('လုပ်ငန်းဖွဲ့စည်းမှုပုံစံကျောင်းကို အောက်ဖော်ပြပါလုပ်ငန်းဖွဲ့စည်းမှုပုံစံဖြင့်ဆောင်ရွက်ပါမည်(ဆိုင်ရာတွင်အမှန်ခြစ် ခြစ်ရန်)') }}
                                    </label>

                                    <div class="col-sm-9 checkbox-radios">
                                        <div class="form-check px-0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="school_type[]"
                                                    value='တစ်ဦးတည်းပိုင်လုပ်ငန်း' id='schoolတစ်ဦးတည်းပိုင်လုပ်ငန်း'>
                                                <span class="form-check-sign"></span>
                                                တစ်ဦးတည်းပိုင်လုပ်ငန်း
                                            </label>
                                        </div>
                                        <div class="form-check px-0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="school_type[]"
                                                    value='နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း' id='schoolနိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း'>
                                                <span class="form-check-sign"></span>
                                                နိုင်ငံသားများပိုင်အစုစပ်လုပ်ငန်း
                                            </label>
                                        </div>
                                        <div class="form-check px-0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="school_type[]"
                                                    value='တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောကုမ္ပဏီလီမိတက်'  id='schoolတည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောလီမိတက်ကုမ္ပဏီ'>
                                                <span class="form-check-sign"></span>
                                                တည်ဆဲကုမ္ပဏီများအက်ဥပဒေအရတည်ထောင်ထားသောကုမ္ပဏီလီမိတက်
                                            </label>
                                        </div>
                                        <div class="form-check px-0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="school_type[]"
                                                    value='တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း' id='schoolတည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း'>
                                                <span class="form-check-sign"></span>
                                                တည်ဆဲဥပဒေတစ်ရပ်ရပ်နှင့်အညီဖွဲ့စည်းထားရှိသောလုပ်ငန်းအဖွဲ့အစည်း
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">{{ __('၈။') }}</span>{{ __('လျှောက်ထားသူ/အဖွဲ့အစည်း၏နောက်ခံသမိုင်း(သီးခြားစာရွက်ဖြင့်ဖော်ပြရန်)') }}
                                    </label>
                                    
                                    
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" id="hidden_attachment">
                                                <input type="file" id="attachment" name="attachment" class="form-control" accept="application/pdf"  />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 view_attachment"></div>
                                        </div> 
                                    </div>
                                </div>
                                                                           
                                <div class="row">
                                        <label class="col-md-3 col-form-label label"><span
                                                    class="pull-left">{{ __('၉။') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</label>
                                        <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea type="text" name="address" style="resize:none;" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                        <label class="col-md-3 col-form-label label"><span
                                                    class="pull-left">{{ __('၁၀။') }}</span>{{ __('ဖုန်းနံပါတ်') }}</label>
                                        <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control"  autocomplete='off'>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <h5 class="p-4">{{ __('သင်တန်းကျောင်းအချက်အလက်များ') }}</h5>
                                </div>
                                <div class="row">
                                        <label class="col-md-3 col-form-label label"><span
                                                    class="pull-left">၁။</span>{{ __('ကျောင်းအမည်') }}</label>
                                        <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="school_name" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <label class="col-md-3 col-form-label label"><span
                                                    class="pull-left">၂။</span>{{ __('သင်ကြားမည့်သင်တန်း') }}</label>
                                        <div class="col-md-9">
                                        <div class="form-group col-md-5">
                                           
                                            <select name="attend_course[]" id="attend_course" class="form-control multiple-attend-course" multiple="multiple" style="width:100%" >
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <label class="col-md-3 col-form-label label"><span
                                                    class="pull-left">၃။</span>{{ __('ကျောင်းတည်နေရာလိပ်စာ') }}</label>
                                        <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea type="text" style="resize:none;" name="school_address" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၄။</span>{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>

                                    <div class="col-md-9">
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="own_type" id="private"
                                                    value="private" >
                                                ကိုယ်ပိုင်
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="own_type" id="rent"
                                                    value="rent">
                                                အငှား
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="own_type"
                                                    id="use_sharing" value="use_sharing" >
                                                တွဲဖက်သုံး
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                <div class="row">
                                        <label class="col-md-3 col-form-label label"><span
                                                    class="pull-left">၅။</span>{{ __('ကျောင်းခွဲတည်နေရာလိပ်စာ') }}</label>
                                        <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea type="text" style="resize:none;" name="branch_school_address" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-3 col-form-label label">{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="branch_private" value="private" >
                                            <label class="form-check-label" for="">ကိုယ်ပိုင်</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="branch_rent" value="rent" >
                                            <label class="form-check-label" for="">အငှား</label>
                                          </div>
                                          <div class="form-check mt-2 form-check-inline">
                                            <input class="form-check-input" type="radio" name="branch_sch_own_type" id="branch_use_sharing" value="use_sharing" >
                                            <label class="form-check-label" for="">တွဲဖက်သုံး</label>
                                          </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၆။</span>{{ __('ပိုင်ဆိုင်မှုပုံစံ') }}</label>

                                    <div class="col-md-9">
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="branch_sch_own_type"
                                                    id="branch_private" value="private" >
                                                ကိုယ်ပိုင်
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="branch_sch_own_type"
                                                    id="branch_rent" value="rent">
                                                အငှား
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="branch_sch_own_type"
                                                    id="branch_use_sharing" value="use_sharing">
                                                တွဲဖက်သုံး
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                <br>
                                <div class="row">
                                    <h5 class="p-4">{{ __('ပူးတွဲတင်ပြသည့်အထောက်အထားများ') }}</h5>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(က)</span>{{ __('လုပ်ငန်းလိုင်စင်') }}</label>
                                    <div class="col-md-9">
                                    
                                        
                                            <div class="mb-1 col-auto">
                                            
                                                <input type="hidden" id="hidden_business_license">
                                                <input type="file" id="business_license" name="business_license" class="form-control" accept="application/pdf"   />
                                            
                                            </div>
                                        
                                        <div class="row">
                                            <div class="mb-1 col-auto view_business_license"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ခ)</span>{{ __('ကုမ္ပဏီမှတ်ပုံတင်လက်မှတ်') }}</label>
                                    <div class="col-md-9">
                                        
                                        
                                            <div class="mb-1 col-auto">
                                            <input type="hidden" id="hidden_company_reg">
                                                <input type="file" id="" name="company_reg" class="form-control" accept="application/pdf"   />
                                            </div>
                                        
                                        <div class="row">
                                            <div class="mb-1 col-auto view_company_reg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဂ)</span>{{ __('အဖွဲ့အစည်း၏မှတ်ပုံတင်လက်မှတ်မူရင်းနှင့်မိတ္တူ') }}
                                    </label>
                                    <div class="col-md-9">
                                        
                                        
                                            <div class="mb-1 col-auto">
                                            <input type="hidden" id="hidden_org_reg_origin_and_copy">
                                                <input type="file" id="" name="org_reg_origin_and_copy" class="form-control" accept="application/pdf"   />
                                            </div>
                                        
                                        <div class="row">
                                            <div class="mb-1 col-auto view_org_reg_origin"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဃ)</span>{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်(ပုံစံ-၂)') }}
                                    </label>
                                    <div class="col-md-9">
                                        
                                        
                                            <div class="mb-1 col-auto">
                                                <input type="hidden" id="hidden_estiblisher_list_and_bio">
                                                <input type="file" id="" name="estiblisher_list_and_bio" class="form-control" accept="application/pdf"   />
                                            </div>
                                        
                                        <div class="row">
                                            <div class="mb-1 col-auto view_estiblisher_list"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(င)</span>{{ __('ကျောင်းစီမံအုပ်ချုပ်သူများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်(ပုံစံ-၂)') }}
                                    </label>
                                    <div class="col-md-9">
                                        
                                        
                                            <div class="mb-1 col-auto">
                                            <input type="hidden" id="hidden_governer_list_and_bio">
                                                <input type="file" id="" name="governer_list_and_bio" class="form-control" accept="application/pdf"   />
                                            </div>
                                        
                                        <div class="mb-1 col-auto view_governer"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(စ)</span>{{ __('အဖွဲ့အစည်းဖြစ်ပါက သက်ဆိုင်ရာအဖွဲ့အစည်း၏ အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ(ပုံစံ-၃)') }}
                                    </label>
                                    <div class="col-md-9">
                                        
                                        
                                            <div class="mb-1 col-auto">
                                            <input type="hidden" id="hidden_nrc_back">
                                                <input type="file" id="" name="org_member_list_and_bio" class="form-control" accept="application/pdf"   />
                                            </div>
                                        
                                        <div class="mb-1 col-auto view_org_member_list_and_bio"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဆ)</span>{{ __('သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ(ပုံစံ-၄)') }}
                                    </label>
                                    <div class="col-md-9">
                                    
                                        
                                            <div class="mb-1 col-auto">
                                            <input type="hidden" id="hidden_teacher_list_and_bio">
                                                <input type="file" id="" name="teacher_list_and_bio" class="form-control" accept="application/pdf"   />
                                            </div>
                                        
                                        <div class="mb-1 col-auto view_teacher_list"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဇ)</span>{{ __('ကောင်စီရုံးကထုတ်ပေးထားသည့်သင်တန်းဆရာမှတ်ပုံတင်မိတ္တူများ') }}
                                    </label>
                                    <div class="col-md-9">
                                        
                                        <div class="col-md-12">
                                            <div class="mb-1 col-auto">
                                            <input type="hidden" id="hidden_teacher_reg_copy">
                                                <input type="file" id="" name="teacher_reg_copy" class="form-control" accept="application/pdf"   />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-auto view_teacher_reg"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဈ)</span>{{ __('ကျောင်းတည်နေရာလိပ်စာ(ပုံစံ-၅)') }}
                                    </label>
                                    <div class="col-md-9">
                                        <div class="mb-1 col-auto">
                                        <input type="hidden" id="hidden_location_attach">
                                            <input type="file" id="" name="school_location_attach" class="form-control" accept="application/pdf"   />
                                        </div>
                                        <div class="mb-3 col-auto view_school_location"></div>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ည)</span>{{ __('ကျောင်းအဆောက်အဦ(ပုံစံ-၅)') }}</label>
                                    <div class="col-md-9">
                                        <div class="mb-1 col-auto">
                                        <input type="hidden" id="hidden_school_building_attach">
                                            <input type="file" id="" name="school_building_attach" class="form-control" accept="application/pdf"   />
                                        </div>
                                        <div class="mb-3 col-auto view_school_building"></div>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဋ)</span>{{ __('စာသင်ခန်း(ပုံစံ-၅)') }}</label>
                                    <div class="col-md-9">
                                        <div class="mb-1 col-auto">
                                        <input type="hidden" id="hidden_classroom_attach">
                                            <input type="file" id="" name="classroom_attach" class="form-control" accept="application/pdf"   />
                                        </div>
                                        <div class="mb-3 col-auto view_classroom"></div>
                                  </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဌ)</span>{{ __('သန့်စင်ခန်း(ပုံစံ-၅)') }}</label>
                                    <div class="col-md-9">
                                        <div class="mb-1 col-auto">
                                        <input type="hidden" id="hidden_toilet_attach">
                                            <input type="file" id="" name="toilet_attach" class="form-control" accept="application/pdf"   />
                                        </div>
                                        <div class="mb-3 col-auto view_toilet_attach"></div>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဍ)</span>{{ __('စီမံရုံးခန်း(ပုံစံ-၅)') }}</label>
                                    <div class="col-md-9">
                                        <div class="mb-1 col-auto">
                                        <input type="hidden" id="hidden_manage_room_attach">
                                            <input type="file" id="" name="manage_room_attach" class="form-control" accept="application/pdf"   />
                                        </div>
                                        <div class="mb-3 col-auto view_manage_room"></div>
                                  </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဎ)</span>{{ __('အထောက်အကူအခင်းအကျင်းများကိုဓါတ်ပုံနှင့်တကွဖော်ပြချက်') }}
                                    </label>
                                    <div class="col-md-9">
                                        <div class="mb-1 col-auto">
                                        <input type="hidden" id="hidden_supporting_structure_photo">
                                            <input type="file" id="" name="supporting_structure_photo" class="form-control" accept="application/pdf"   />
                                        </div>
                                        <div class="mb-3 col-auto view_supporting"></div>
                                  </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">(ဏ)</span>{{ __('အဆောက်အဦအခင်းအကျင်းများအားရယူသုံးစွဲပုံ') }}
                                    </label>
                                    
                                   
                                    <div class="col-md-9">
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="using_type" 
                                                    value="private" id="using_type_private">
                                                ကိုယ်ပိုင်
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="using_type" 
                                                    value="rent" id="using_type_rent">
                                                အငှား
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio">
                                            <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="using_type"
                                                        value="use_sharing" id="using_type_use_sharing">
                                                တွဲဖက်သုံး
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 label col-form-label"><span
                                                class="pull-left">(န)</span>{{ __('သက်ဆိုင်သည့်အထောက်အထားများ၊စာချုပ်စာတမ်းများ') }}
                                    </label>
                                    <div class="col-md-9">
                                        <div class="mb-3 col-auto">
                                        <input type="hidden" id="hidden_relevant_evidence_contracts">
                                            <input type="file" id="" name="relevant_evidence_contracts" class="form-control" accept="application/pdf"   />
                                        </div>
                                        <div class="mb-3 col-auto view_relevant_evidence_contracts"></div>
                                  </div>
                                </div>
                                
                                <div class="row">
                                    <label class="col-md-3 col-form-label"><span
                                                class="pull-left">(ပ)</span>{{ __('ကျောင်းတည်ထောင်ခြင်းအတွက်ရွေးချယ်ထားသည့်လုပ်ငန်းဖွဲ့စည်းမှုပုံစံအရပူးတွဲတင်ပြရမည့်အထောက်အထားများ(အစုအစပ်သဘောတူညီချက်/သင်းဖွဲ့စည်းမျဉ်း/သင်းဖွဲ့မှတ်တမ်း၊ဉပဒေနှင့်အညီရေးဆွဲပြုစုထားသောအခြားစာချုပ်စာတမ်းများ)') }}
                                    </label>
                                    <div class="col-md-9">
                                        <div class="mb-3 col-auto">
                                        <input type="hidden" id="hidden_sch_establish_notes_attach">
                                            <input type="file" id="" name="sch_establish_notes_attach" class="form-control" accept="application/pdf"   />
                                        </div>
                                        <div class="col-auto view_sch_establish_notes_attach"></div>
                                    </div>
                                </div>


                                <div class="row">
                                    <h5 class="p-4">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)နှင့်ကျောင်းစီမံအုပ်ချုပ်သူများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်') }}</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-11 col-form-label">{{ __('ကျောင်းတည်ထောင်သူပုဂ္ဂိုလ်(များ)') }}</label>
                                </div>
                                <div class="row">
                                    
                                        <div class="col-md-1"></div>
                                        <div class="col-md-11">
                                            <div class="tbl-responsive">
                                                <table class="table tbl_sch_established_persons table-bordered input-table">
                                                    <thead>
                                                        <tr >
                                                            <th class="less-font-weight text-center"  >စဉ်</th>
                                                            <th class="less-font-weight text-center"  >အမည်</th>
                                                            <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                            <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                            <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                            <th class="less-font-weight text-center"  >ဆက်သွယ်ရန်လိပ်စာ</th>
                                                            <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                            <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                            <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchEstablishPerson("tbl_sch_established_persons")'><li class="fa fa-plus"></li></button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbl_sch_established_persons_body">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                </div>
                                <br>
                                
                                <div class="row">
                                    <div class="col-md-1"></div>
                                        <label class="col-md-11 col-form-label">{{ __('ကျောင်းစီမံအုပ်ချုပ်သူများ') }}</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-11">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_sch_governs table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >တာဝန်</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSchGoverns("tbl_sch_governs")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_sch_governs_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                
                                <div class="row">
                                    <div class="col-md-1"></div>
                                        <label class="col-md-11 col-form-label">{{ __('အဖွဲ့အစည်း၏အလုပ်အမှုဆောင်အဖွဲ့ဝင်များ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
                                </div>

                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-11">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_member_list_biography table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >CPA(P)/CPA(FF)/PAPP No.</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >တာဝန်</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowMembershipBio("tbl_member_list_biography")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_member_list_biography_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                
                                <div class="row">
                                    <div class="col-md-1"></div>
                                        <label class="col-md-11 col-form-label">{{ __('သင်တန်းဆရာများ၏အမည်စာရင်းနှင့်ကိုယ်ရေးအချက်အလက်များ') }}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <div class="col-md-11">
                                      <div class="tbl-responsive">
                                        <table class="table tbl_teacher_list_biography table-bordered input-table">
                                            <thead>
                                                <tr >
                                                    <th class="less-font-weight text-center"  >စဉ်</th>
                                                    <th class="less-font-weight text-center"  >အမည်</th>
                                                    <th class="less-font-weight text-center"  >နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >သင်တန်းဆရာမှတ်ပုံတင်အမှတ်</th>
                                                    <th class="less-font-weight text-center"  >ပညာအရည်အချင်း</th>
                                                    <th class="less-font-weight text-center"  >သင်ကြားမည့်ဘာသာရပ်(များ)</th>
                                                    <th class="less-font-weight text-center"  >ဖုန်းနံပါတ်</th>
                                                    <th class="less-font-weight text-center"  >အီးမေးလ်</th>
                                                    <th class="text-center" ><button type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowTeacherBio("tbl_teacher_list_biography")'><li class="fa fa-plus"></li></button></th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbl_teacher_list_biography_body">

                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <h5 class="p-4">{{ __('ကျောင်းတည်ရာလိပ်စာ၊ကျောင်းအဆောက်အဦး၊စာသင်ခန်း၊သန့်စင်ခန်း၊စီမံရုံးခန်း') }}</h5>
                                </div>

                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၁။</span>{{ __('ကျောင်းတည်ရာလိပ်စာ') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea type="text" name="school_location" style="resize:none;" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၂။</span>{{ __('ကျောင်းခွဲတည်ရာလိပ်စာ') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea type="text" style="resize:none;" name="branch_school_location" class="form-control" autocomplete='off' ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၆။') }}</label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('ကျောင်းအဆောက်အဦး(အဆောက်အဦအမျိုးအစား/အတိုင်းအတာ/အထပ်အရေအတွက်)') }}</b></label>
                                </div> -->
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၃။</span>{{ __('အဆောက်အဦးအမျိုးအစား') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="bulding_type" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၄။</span>{{ __('အတိုင်းအတာ') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="building_measurement" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၅။</span>{{ __('အထပ်အရေအတွက်') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" name="floor_numbers" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၁၇။') }}</label>
                                    <label class="col-md-10 col-form-label"><b>{{ __('စာသင်ခန်း(အခန်းအရေအတွက်/အတိုင်းအတာ/ဝင်ဆံ့သင်တန်းသား/လေအေးပေးစက်)') }}</b></label>
                                </div> -->
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၆။</span>{{ __('အခန်းအရေအတွက်') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" name="classroom_number" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၇။</span>{{ __('အတိုင်းအတာ') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="classroom_measurement" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၈။</span>{{ __('ဝင်ဆံ့သင်တန်းသား') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" name="student_num_limit" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၉။</span>{{ __('လေအေးပေးစက်') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="air_con" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('သန့်စင်ခန်း(အမျိုးအစား/အရေအတွက်)') }}</label>
                                </div> -->
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၁၀။</span>{{ __('အမျိုးအစား') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="toilet_type" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၁၁။</span>{{ __('အရေအတွက်') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" name="toilet_number" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label class="col-md-10 col-form-label">{{ __('စီမံရုံးခန်း(အခန်းအရေအတွက်/အတိုင်းအတာ)') }}</label>
                                </div> -->
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၁၂။</span>{{ __('အခန်းအရေအတွက်') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" name="manage_room_numbers" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၁၃။</span>{{ __('အတိုင်းအတာ') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="manage_room_measurement" class="form-control" autocomplete='off' >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၁။</span>ကျောင်းမှတ်ပုံတင်အမှတ်</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="regno" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၂။</span>Applied Date</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                                <input type="text" class="form-control" id="register_date" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label label"><span
                                                class="pull-left">၃။</span>Status</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="message" readonly="">
                                        </div>
                                    </div>
                                </div><br/>
                                        <div class="row ">
                                            <div class="col-md-2 offset-md-5">
                                                <button type="submit" class="btn btn-success btn-hover-dark w-100 renew_submit">{{ __('Submit') }}</button>
                                            </div>
                                        </div>
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
    $('document').ready(function(){
        $('.multiple-attend-course').select2({
            placeholder: "Select Requirement"
        });
        var course_type = location.pathname.split('/');
        // console.log('course_type',course_type[2]);
        var student = JSON.parse(localStorage.getItem('studentinfo'));


        if(!student){
        localStorage.setItem('course_type',course_type[2])
        }
        loadRenewSchool();
        loadDescription('school');
        getCourses();
        // if(course_type[2]==1){
        //     // console.log("DA");
        //     var li = "<li class='mb-2'> <i class='fa fa-check'></i>အသိအမှတ်ပြုတက္ကသိုလ်တစ်ခုခုမှ ဘွဲ့ရရှိသူများ လျှောက်ထားနိုင်ပါသည်။ </li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA I  သင်တန်း (MAC,SS,Private)(၃)မျိုးပေါင်းနှစ်စဉ် ၅၀၀ ဦးခန့်ရှိ။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA II သင်တန်း(၂)တန်း (MAC,SS,Private)(၃)မျိုးပေါင်း နှစ်စဉ် ၃၀၀  ဦးခန့်ရှိ။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>Module အားလုံးကိုဖြစ်စေ၊ ကြိုက်နှစ်သက်ရာ Module တစ်ခုကိုဖြစ်စေ ၅ နှစ်အတွင်းဖြေဆိုနိုင်သည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA I သင်တန်းတွင် ဘာသာရပ် ၅ ခု၊ Module I တွင် ဘာသာရပ် ၃ ခု၊ Module II တွင် ဘာသာရပ် ၂ ခု ရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>DA II သင်တန်းတွင် ဘာသာရပ် ၆ ခုရှိပြီး ရှိပြီး Module တစ်ခုစီတွင် ဘာသာရပ် ၃ ခုရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>ယနေ့ထိ DA I အောင်မြင်ပြီးသူ  ၈၇၄၃ ဦး၊ တက်ရောက်ဆဲ ၂၇၉ ဦး ရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>ယနေ့ထိ DA II အောင်မြင်ပြီးသူ  ၄၆၀၉ ဦး ရှိပါသည်။</li>";
        //     $(".requirement_lists").append(li);
        // }else{
        //     // console.log("CPA");
        //     var li = "<li class='mb-2'> <i class='fa fa-check'></i>BCom,BAct,BBA,DA,BBSc ,ACCA (Fundamental skill level),CIMA ဘွဲ့များကို အဆိုပါသင်တန်းသို့ တိုက်ရိုက် တက်ရောက်ခွင့်ပေးပြီး အခြားဘွဲ့များ ဝင်ခွင့်စာမေးပွဲ အောင်မြင်ပါက တက်ရောက်ခွင့်ရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>CPA I & II သင်တန်း(၂)တန်းဖွင့်လှစ်ပြီး (MAC,SS,Private)(၃)မျိုးပေါင်းနှစ်စဉ် ၃၅၀၀ ဦးခန့်ရှိ။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>Module အားလုံးကိုဖြစ်စေ၊ ကြိုက်နှစ်သက်ရာ Module တစ်ခုကိုဖြစ်စေ ၅ နှစ်အတွင်းဖြေဆိုနိုင်သည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>သင်တန်းတစ်ခုတွင်ဘာသာရပ် ၆ ခုရှိပြီး Module တစ်ခုတွင် ဘာသာရပ် ၃ ခုရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>ယနေ့ထိ CPA I အောင်မြင်ပြီးသူ  ၃၈၁၀ ဦး၊တက်ရောက်ဆဲ၂၇၄၁ ဦး တက်ရောက်ခွင့်ရရှိထားသူ ၁၅၀၀ ဦး ခန့်ရှိပါသည်။</li>";
        //     li += "<li class='mb-2'>  <i class='fa fa-check'></i>CPA II  အောင်မြင်ပြီးသူ ၂၆၂၈ ဦး ၊ CPA II တက်ရောက်ဆဲ    ၅၀၀ ဦး ရှိပါသည်။</li>";
        //     $(".requirement_lists").append(li);
        // }
    })
    //app_form_feedback();
    
</script>
@endpush
