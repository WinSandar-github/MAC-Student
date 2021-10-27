@extends('layouts.app')
@section('content')
     <div class="main-wrapper">
        <!-- Page Banner Start -->
        <div class="section page-banner">
            {{--<img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">--}}
            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">
            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">CPA (Full-Fledged) Renewal Registration  <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->

            </div>
            <!-- Shape Icon Box Start -->
            {{--<div class="shape-icon-box">
                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">
                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>
                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png')}}" alt="Shape">
            </div>--}}
            <!-- Shape Icon Box End -->
            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">
            {{--<img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg')}}" alt="Shape">--}}
        </div>
        <div class="section"> <!-- section-padding mt-n10 -->
            <div class="container mt-5"> 

            <div class="card border-success mb-3" id="cpaff_renew_form"><br/><!---->
                <div class="row mb-5">
                    <div style="text-align: right;margin-top:1%;">
                        <h6 style="font-weight:bold;">ပုံစံ၊ မစက(၂)</h6>
                    </div>
                    <h5 class="card-title text-center fw-bolder" style="margin-top:1%;">
                        မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                        လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) အဖြစ်မှတ်ပုံတင်ထားခြင်းကိုသက်တမ်းတိုးမြှင့်ရန်လျှောက်ထားခြင်း
                    </h5>
                </div>
                <form method="post" enctype="multipart/form-data"  id="cpaff_renew_form_submit">
                    @csrf
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row mb-3">
                                    <label class="col-md-5 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>{{ __('လျှောက်ထားသူ၏ကိုယ်ရေးအချက်အလက်') }}</label>
                                </div>
                                {{--<div class="row" style="padding-left: 90px;">
                                    <div class="col-md-2 col-form-label pt-4" >{{ __('(က)') }}</div>
                                    <div class="col-md-5 col-form-label pt-4">{{ __('အသက်') }}</div>
                                    <div class="col-md-4 col-form-label pt-4">
                                        <lable id="age"></label>
                                    </div>
                                </div>--}}
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(က)') }}</span>{{ __('အမည် (မြန်မာ/အင်္ဂလိပ်)') }}</div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="name_mm" id="name_mm">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="name_eng" id="name_eng">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ခ)') }}</span>{{ __('နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-2 col-5 pr-1">
                                                <input type="text" name="nrc_state_region" class="form-control" id="nrc_state_region" readonly="">
                                            </div>
                                            <div class="col-md-3 col-7 px-1">
                                                <input type="text" name="nrc_township" class="form-control" id="nrc_township" readonly="">
                                            </div>
                                            <div class="col-md-2 col-5 px-1">
                                                <input type="text" name="nrc_citizen" class="form-control" id="nrc_citizen" readonly="">
                                            </div>

                                            <div class="col-md-5 col-7 pl-1">
                                                <input type="text" name="nrc_number" class="form-control" id="nrc_number" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 100px;">
                                    <div class="col-md-4 col-form-label label"><span class="pull-left">{{ __('(ဂ)') }}</span>{{ __('အဘအမည် (မြန်မာ/အင်္ဂလိပ်)') }}</div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="father_name_mm" id="father_name_mm">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="father_name_eng" id="father_name_eng">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 text-center">
                                {{--User Photo--}}
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle shadow">
                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                alt="Upload Photo">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                    <div class="d-flex justify-content-center">
                                        <span class="btn btn-round btn-secondary btn-file">
                                        <span class="fileinput-new">ဓာတ်ပုံ</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required=""></span>
                                        <br>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                                {{--User Photo--}}
                            </div>
                            <div class="row mb-3" style="padding-left: 110px;">
                                <div class="col-md-3 col-form-label label"><span class="pull-left">(ဃ)</span>ကျား / မ (Gender)</div>
                                <div class="row col-md-8 py-2">
                                    <div class="col-md-3 form-check-radio mx-2">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" id="male"
                                                    name="gender" value="Male">
                                            <span class="form-check-sign"></span>
                                            ကျား
                                        </label>
                                    </div>
                                    <div class="col-md-3 form-check-radio mx-2">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" id='female'
                                                    name="gender" value='Female' >
                                            <span class="form-check-sign"></span>
                                            မ
                                        </label>
                                    </div>
                                </div>
                            </div>

                                <div class="row" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(င)') }}</span>{{ __('ပညာအရည်အချင်း') }}</div>
                                    <div class="col-md-9">
                                        <div class="row mb-2">
                                            <div class="col-md-7">
                                                <input type="radio" name="education" id="cpa_edu" value="1" onclick="getCPAEducation()">
                                                <label class="col-form-label" style="padding-left:5%;">CPA</label>
                                            </div>
                                        </div>
                                        <div id="cpa">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2 cpa_file"></div>
                                                <div class="col-md-8">
                                                    <input type="file"  class="form-control" name="cpa" style="display:none">
                                                </div>
                                            </div><br/>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-7">
                                                <input type="radio" name="education" id="ra_edu" value="2" onclick="getCPAEducation()">
                                                <label class="col-form-label" style="padding-left:5%;">RA</label>
                                            </div>
                                        </div>
                                        <div id="ra">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-2 ra_file" id="ra_file"></div>
                                                <div class="col-md-8">
                                                    <!-- <div class="single-form"> -->
                                                        <input type="file"  class="form-control" name="ra" style="display:none">
                                                    <!-- </div> -->
                                                </div>
                                            </div><br/>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-7">
                                                <input type="radio" name="education" id="education" value="3" onclick="getCPAEducation()">
                                                <label class="col-md-5 col-form-label label">အသိအမှတ်ပြုပြည်ပဘွဲ့</label>
                                            </div>
                                        </div>
                                        <div  id="edu" style="display:none;">
                                            <div class="row mb-1" id="degree0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 col-auto">
                                                    <label for="" class="col-form-label"> ဘွဲ့အမည်</label>
                                                </div>
                                                <div class="col-md-7 col-auto">
                                                    <input type="text"  class="form-control" name="degree_name[]" placeholder="ဘွဲ့အမည်" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2" id="degree_year0">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 col-auto">
                                                    <label for="" class="col-form-label"> အောင်မြင်သည့်နှစ်/လ</label>
                                                </div>
                                                <div class="col-md-7 col-auto">
                                                    <input type="type" class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)" readonly>
                                                </div>
                                            </div>

                                            <div class="row mb-4" id="edu0" >
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 col-auto">
                                                    <label for="" class="col-form-label"> Attached Certificate</label>
                                                </div>
                                                <div class="col-md-2 foreign_degree_file">
                                                </div>
                                                <div class="col-md-5"  id="degree_edu" style="padding-left:5px; display: none;" >
                                                    <input type="file"  class="form-control" id="degree_file0"  name="degree_file[]" >
                                                </div>
                                                <div class="col-md-1" id="add_div" >
                                                    <button type="button" class="btn btn-primary"  style="padding-left:5px; display: none;" id="add_btn" onclick="AddCPAFFDegree()" >
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <label  class="error attend_place_error" style="display:none;" for="education">Please select one</label><br/>
                                    </div>
                                </div>

                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(စ)') }}</span>{{ __('CPA အပတ်စဉ်/ကိုယ်ပိုင်အမှတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="cpa_batch_no" id="cpa_batch_no">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label"><span class="pull-left">{{ __('(ဆ)') }}</span>{{ __('ဆက်သွယ်ရန်လိပ်စာ') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="address" id="address">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label">{{ __('တယ်လီဖုန်းနံပါတ်၊ Fax ဖုန်းနံပါတ်') }}</div>
                                    <div class="col-md-8">
                                        <input type="text"  class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="row mb-3" style="padding-left: 110px;">
                                    <div class="col-md-3 col-form-label label">{{ __('E-mail Address') }}</div>
                                    <div class="col-md-8">
                                        <input type="email"  class="form-control" name="contact_mail" id="contact_mail">
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                            <label class="col-md-10 col-form-label">ကျွန်ုပ်အား <input type="text" name="cpaff_pass_date" id="cpaff_pass_date" class="form-control" style="display: inline;width: 100px;" required=""> ခုနှစ်အတွက် လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) မှတ်ပုံတင်လက်မှတ်ထုတ်ပေးပြီးဖြစ်ပါသည်။ ထိုမှတ်ပုံတင်ကို <input type="text" name="cpaff_renew_date" id="cpaff_renew_date" class="form-control" style="display: inline;width: 100px;" required=""> ခုနှစ်အတွက် သက်တမ်းတိုးမြှင့်ပေးပါရန် လျှောက်ထားပါသည်။</label>                                
                        </div><br/>

                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                            <label class="col-md-10 col-form-label">လျှောက်ထားသူသည် မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေအရ ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းလုပ်ကိုင်ခွင့်/အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့်ရရှိထားသူ သို့မဟုတ် ရရှိခဲ့ဖူးသူဖြစ်ပါက အောက်ပါအချက်များကို ရှင်းလင်းဖော်ပြပါ-</label>                                
                        </div><br/>
                            <div class="row">
                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>

                                    <div class="col-md-7 col-form-label">နောက်ဆုံးထုတ်ပေးခဲ့သည့် ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းလုပ်ကိုင်ခွင့်/ အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့် မှတ်ပုံတင်အမှတ် </div>
                                    <div class="col-md-3">
                                        <input type="text" name="papp_reg_no" id="papp_reg_no" class="form-control" style="width:90%;">
                                    </div>

                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>

                                    <div class="col-md-7 col-form-label">လုပ်ကိုင်ခွင့်ပြုသည့်ခုနှစ်</div>
                                    <div class="col-md-3">
                                        <input type="text" name="papp_reg_year" id="papp_reg_year" class="form-control" style="width:90%;">
                                    </div><br><br>

                                    <div class="col-md-1"></div>
                                    <label class="col-md-1 col-form-label"></label>

                                    <div class="col-md-7 col-form-label">(မိတ္တူတင်ပြရန်)</div>
                                    <div class="col-md-3">
                                        <input type="file"  class="form-control" name="renew_file" style="width:90%;">
                                    </div>
                                </div><br/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                <div class="col-md-9 col-form-label"> အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းလုပ်ကိုင်ရာတွင် မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ တွင်ဖော်ပြထားသည့် တာဝန်တစ်ရပ်ရပ်ကို ဆောင်ရွက်ရန်ပျက်ကွက်ခြင်း၊ ပုဒ်မ ၆၈ တွင် ဖော်ပြထားသည့် ကျင့်ဝတ်သိက္ခာတစ်ရပ်ရပ်ဖောက်ဖျက်ခြင်းတို့နှင့် စပ်လျဉ်း၍ ပုဒ်မ ၇၄ ပုဒ်မခွဲ (ခ) (ဂ) နှင့်ပုဒ်မ ၇၅ တို့အရပြစ်ဒဏ်ချမှတ်ခံထားရသူ ဟုတ်/မဟုတ်။ <input type="text" name="fine_person" class="form-control" style="display: inline;width: 100px;" >
                            </div><br/><br>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ နှင့် ၆၈ ပါပြဌာန်းချက်များကို လိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံပါသည်။') }}</label>                                
                            </div><br/><br>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                <label class="col-md-8 col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်') }}</label>                                
                            </div><br/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                <div class="col-md-6 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မှီ)မှတ်ပုံတင်လက်မှတ်</div>
                                <div class="col-md-4">
                                            <input type="file"  class="form-control" name="cpa_certificate" required="">
                                </div>
                            </div><br/><br>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အရှေ့)</div>
                                <div class="col-md-4">
                                            <input type="file"  class="form-control" name="mpa_mem_card" required="" accept="image/*">
                                </div>
                            </div><br><br>
                            <div class="row mb-3">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label"></label>
                                <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အနောက်)</div>
                                <div class="col-md-4">
                                            <input type="file"  class="form-control" name="mpa_mem_card_back" required="" accept="image/*">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-1"></div>
                                <div class="col-md-1 col-form-label">{{ __('(ဂ)') }}</div>
                                <div class="col-md-10">
                                <div class="row">
                                        <div class="col-md-6 text-center">
                                            <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail shadow">
                                                    <img src="{{ asset('assets/images/image_placeholder.png') }}" alt="Upload Photo">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                <div>
                                                    <span class="btn btn-secondary btn-round btn-file">
                                                        <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အရှေ့)</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="hidden" value="">
                                                        <input type="file" id="nrc_front" name="nrc_front" value="{{ old('nrc_front') }}" accept="image/*">
                                                    </span>
                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                                <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 text-center">
                                            <div class="fileinput fileinput-new text-center mt-4" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail shadow">
                                                    <img src="{{ asset('assets/images/image_placeholder.png') }}"
                                                         alt="Upload Photo">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                <div>
                                                     <span class="btn btn-secondary btn-round btn-file">
                                                         <span class="fileinput-new">နိုင်ငံသားစိစစ်ရေးကတ်ပြား(အနောက်)</span>
                                                         <span class="fileinput-exists">Change</span>
                                                         <input type="hidden" value=""><input type="file" id="nrc_back" name="nrc_back" value="{{ old('nrc_back') }}" accept="image/*">
                                                     </span>
                                                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                                <span class="form-text text-danger">Allowed Jpeg and Png Image.</span>
                                            </div>
                                        </div>
                                </div>
                            </div>                                        
                          </div><br> 

                          <div class="row">
                              <div class="col-md-1"></div>
                              <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                              <div class="col-md-6 col-form-label">{{ __('စတင်လျှောက်ထားသည့်နေ့မတိုင်မီ ၁၂ လအတွင်း စဥ်ဆက်မပြတ်လေ့လာသင်ယူမှု(Continuous professional Development-CPD)မှတ်တမ်း') }}</div>
                              <div class="col-md-4">
                                          <input type="file"  class="form-control" name="cpd_record" required="">
                              </div>
                          </div><br/>

                          <div class="row">
                              <div class="col-md-2"></div>
                              <!-- <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label> -->
                              <label class="col-md-6 col-form-label">{{ __('စုစုပေါင်း နာရီ') }}</label>
                              <div class="col-md-4">
                                  <input type="text"  class="form-control" name="total_hours" id="total_hours" placeholder="Enter CPD Total hours">
                              </div>
                          </div><br/><br>
                          <div class="row">
                              <div class="col-md-1"></div>
                              <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                              <div class="col-md-6 col-form-label">{{ __('CPA(Full-Fledged) နောက်ဆုံးသက်တမ်းတိုးခဲ့သော ခုနှစ်') }}</div>
                              <div class="col-md-4">
                                          <input type="text"  class="form-control" name="last_paid_year" id="last_paid_year" disabled>
                              </div>
                          </div><br/>
                          <input type="hidden" name="last_paid_year" id="last_paid_year">
                          <input type="hidden" name="resign_date" id="resign_date">

                          <div class="row mb-3" style="padding-left:50px;">
                              <div class="form-check">
                                  <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="cpaff_submit_confirm" onchange="$('#cpaff_submit').prop('disabled', !this.checked)">
                                      <span class="form-check-sign"></span>
                                      <p class="fw-bolder">
                                          * အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။
                                      </p>
                                  </label>

                              </div>
                          </div>
                          <div class="row mb-3">
                              <div class="col-md-2 offset-md-5">
                                  <button type="submit" id="cpaff_submit" class="btn btn-success btn-hover-dark w-100" disabled>{{ __('Submit') }}</button>
                              </div>
                          </div>

                            {{--<div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm_ss" ></div>
                                <label class="col-md-10 col-form-label fw-bolder">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                            </div><br/>
                                            
                            <br/>
                            <div class="row ">
                                <div class="col-md-2 offset-md-5">
                                    <button type="submit" class="btn btn-success btn-hover-dark w-100 renew_submit">{{ __('Submit') }}</button>
                              </div>
                            </div>--}}
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    {{-- Self_Confession_modal --}}
    <div class="modal fade" id="renewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ကိုယ်တိုင်ဝန်ခံချက်</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="{{ asset('assets/images/pa_promise.pdf') }}"  style="overflow:scroll;height:70vh;width:100%" height="100vh" width="70vh"></iframe>
                <div class="pull-right mt-1">
                    <h6 class="pull-left me-4 fw-bold">အထက်ဖော်ပြပါအချက်များအား</h6>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="self_confession_renew" id="accept_cpaffRenew" value="1">
                    <label class="fw-bold">လက်ခံသည်</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="self_confession_renew" id="not-accept_cpaffRenew" value="2">
                    <label class="fw-bold">လက်မခံပါ</label>
                    </div>
                    <div class="text-danger" id="valid_self_confession" style="display : none">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
              <button type="button" style="background-color: #39c0ba" class="btn btn-sm text-white" onclick="RenewCPAFF()">Submit</button>
            </div>
          </div>
        </div>
      </div>
      
    <!-- JavaScript Section -->
    {{-- <script>
         var mmnrc_regions = {!! json_encode($nrc_regions) !!};
        // get NRC Townships data from myanmarnrc.php config file
        var mmnrc_townships = {!! json_encode($nrc_townships) !!};
        // get NRC characters data from myanmarnrc.php config file
        var mmnrc_characters = {!! json_encode($nrc_characters) !!};
        // get language data from myanmarnrc.php config file
        var mmnrc_language = "{{ $nrc_language }}";
    </script> --}}
@endsection
@push('scripts')
<script src="{{ asset('js/form_validation/cpaff_renew_validation.js') }}"></script>
<script type="text/javascript">
    $('document').ready(function(){
        var course_type = location.pathname.split('/');
        var student = JSON.parse(localStorage.getItem('studentinfo'));
        if(!student){
            localStorage.setItem('course_type',course_type[2]);
        }
        $('#profile').on('click', function(e) {
            $('#file').click();
        });
        $('#file').change(function(e) {
            var input = e.target;
            if (input.files && input.files[0]) {
                var file = input.files[0];

                var reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    $('.dashes-label').css('color','transparent');
                    $('#profile').css('background-image', 'url(' + reader.result + ')').addClass('hasImage');
                }
            }
        });    
    });
    $("#cpaff_pass_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
    $("#cpaff_renew_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    }); 
    $("#papp_reg_year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
    // form_feedback();
    // loadDescription('CPAFF');
    // checkPaymentCpaff();
    loadCpaffData();
    loadCpaffInitialData();
    loadCpaffInfo();
</script>
@endpush
