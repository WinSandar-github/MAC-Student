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
            
        </div>
        <div class="section"> <!-- section-padding mt-n10 -->
            <div class="container mt-5"> <!-- container-fluid p-4 -->
                
            {{--<div class="col-md-12 text-center mb-5" style="font-weight:bold;font-size:20px;" name="remark" id="remark">
                <label>Reject လုပ်ရသည့်အကြောင်းအရင်း</label><label class="col-md-12 col-form-label text-danger" id="remark_description"></label>
            </div>--}}

            <div class="card border-success mb-3" id="cpaff_renew_form"><br/><!---->
                <div class="row mb-5">
                    <div style="text-align: right;margin-top:1%;">
                        <h6 style="font-weight:bold;">ပုံစံ၊ မစက(၂)</h6>
                    </div>
                    <h5 class="card-title text-center fw-bolder" style="margin-top:1%;">
                        မြန်မာနိုင်ငံစာရင်းကောင်စီ<br><br>
                        လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) အဖြစ်မှတ်ပုံတင်ထားခြင်းကိုသက်တမ်းတိုးမြှင့်ရန်လျှောက်ထားခြင်း
                    </h5>
                    {{--<div class="d-flex justify-content-between">
                        <h6>ရက်စွဲ - {{ __("dd-mm-yyyy") }}</h6>
                        <h6>အမှတ်စဥ် - {{ __("____") }}</h6>
                    </div>--}}
                </div>
                <form method="post" enctype="multipart/form-data"  id="cpaff_renew_form_submit" action="javascript:void(0)">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" id="cpaff_id" name="cpaff_id"/>
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
                                        <input type="text"  class="form-control" name="name_mm" id="name_mm" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="name_eng" id="name_eng" readonly>
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
                                        <input type="text"  class="form-control" name="father_name_mm" id="father_name_mm" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text"  class="form-control" name="father_name_eng" id="father_name_eng" readonly>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 text-center">
                                {{--User Photo--}}
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle shadow">
                                        <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                alt="Upload Photo" id="cpaff_img">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                    <div class="d-flex justify-content-center">
                                        <span class="btn btn-round btn-secondary btn-file">
                                        <span class="fileinput-new">ဓာတ်ပုံ</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" id="profile_photo" name="profile_photo" accept="image/*" ></span>
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
                                                    <input type="file"  class="form-control" name="cpa" style="display: none;">
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
                                                        <input type="file"  class="form-control" name="ra" style="display: none;">
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
                                                    <input type="text" class="form-control degree_pass_year" name="degree_pass_year[]" placeholder="လ၊နှစ်(MMM-YYYY)" disabled>
                                                </div>
                                            </div>

                                            <div class="row mb-4" id="edu0" >
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 col-auto">
                                                    <label for="" class="col-form-label"> Attached Certificate</label>
                                                </div>
                                                <div class="col-md-2 foreign_degree_file">
                                                </div>
                                                {{--<div class="col-md-5"  id="degree_edu" >
                                                    <input type="file"  class="form-control" id="degree_file0"  name="degree_file[]" >
                                                </div>--}}
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
                                        <input type="text"  class="form-control" name="cpa_batch_no" id="cpa_batch_no" readonly>
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
                            <label class="col-md-10 col-form-label">ကျွန်ုပ်အား <input type="text" name="cpaff_pass_date" id="cpaff_pass_date" class="form-control" style="display: inline;width: 100px;" > ခုနှစ်အတွက် လက်မှတ်ရပြည်သူ့စာရင်းကိုင် (ပြည့်မှီ) မှတ်ပုံတင်လက်မှတ်ထုတ်ပေးပြီးဖြစ်ပါသည်။ ထိုမှတ်ပုံတင်ကို <input type="text" name="cpaff_renew_date" id="cpaff_renew_date" class="form-control" style="display: inline;width: 100px;" > ခုနှစ်အတွက် သက်တမ်းတိုးမြှင့်ပေးပါရန် လျှောက်ထားပါသည်။</label>                                
                        </div><br/>

                        <div class="row">
                            <label class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                            <label class="col-md-10 col-form-label">လျှောက်ထားသူသည် မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေအရ ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းလုပ်ကိုင်ခွင့်/အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့်ရရှိထားသူ သို့မဟုတ် ရရှိခဲ့ဖူးသူဖြစ်ပါက အောက်ပါအချက်များကို ရှင်းလင်းဖော်ပြပါ-</label>                                
                        </div><br/>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>

                                <div class="col-md-7 col-form-label">နောက်ဆုံးထုတ်ပေးခဲ့သည့် ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းလုပ်ကိုင်ခွင့်/ အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့် လုပ်ငန်းလုပ်ကိုင်ခွင့် မှတ်ပုံတင်အမှတ်</div>
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

                                <div class="col-md-6 col-form-label">(မိတ္တူတင်ပြရန်)</div>
                                <div class="col-md-1 renew_file_old"></div>
                                <div class="col-md-3">
                                    <input type="file" class="form-control" name="renew_file" id="renew_file" style="width:90%;">
                                </div>
                            </div><br/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                <div class="col-md-9 col-form-label"> အများပြည်သူသို့စာရင်းဝန်ဆောင်မှုပေးသည့်လုပ်ငန်းလုပ်ကိုင်ရာတွင် မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ တွင်ဖော်ပြထားသည့် တာဝန်တစ်ရပ်ရပ်ကို ဆောင်ရွက်ရန်ပျက်ကွက်ခြင်း၊ ပုဒ်မ ၆၈ တွင် ဖော်ပြထားသည့် ကျင့်ဝတ်သိက္ခာတစ်ရပ်ရပ်ဖောက်ဖျက်ခြင်းတို့နှင့် စပ်လျဉ်း၍ ပုဒ်မ ၇၄ ပုဒ်မခွဲ (ခ) (ဂ) နှင့်ပုဒ်မ ၇၅ တို့အရပြစ်ဒဏ်ချမှတ်ခံထားရသူ ဟုတ်/မဟုတ်။ <input type="text" name="fine_person" id="fine_person" class="form-control" style="display: inline;width: 100px;" >
                            </div><br/><br>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေပုဒ်မ ၆၆ နှင့် ၆၈ ပါပြဋ္ဌာန်းချက်များကို လိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံပါသည်။') }}</label>                                
                            </div><br/><br>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                <label class="col-md-8 col-form-label">{{ __('အောက်ပါစာရွက်စာတမ်းများကို ပူးတွဲတင်ပြလျှက် လျှောက်ထားပါသည်') }}</label>                                
                            </div><br/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                <div class="col-md-6 col-form-label">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပြည့်မှီ)မှတ်ပုံတင်လက်မှတ်</div>
                                <div class="col-md-1 cpa_certificate_old"></div>
                                <div class="col-md-3">
                                            <input type="file"  class="form-control" name="cpa_certificate" id="cpa_certificate">
                                </div>
                            </div><br/><br>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အရှေ့)</div>
                                <div class="col-md-1 mpa_mem_card_old"></div>
                                <div class="col-md-3">
                                    <input type="file"  class="form-control" name="mpa_mem_card" id="mpa_mem_card" accept="image/*">
                                </div>
                            </div><br><br>
                            <div class="row mb-3">
                                <div class="col-md-1"></div>
                                <label class="col-md-1 col-form-label"></label>
                                <div class="col-md-6 col-form-label">မြန်မာနိုင်ငံလက်မှတ်ရပြည်သူ့စာရင်းကိုင်များအသင်းဝင်ကတ်ပြား (အနောက်)</div>
                                <div class="col-md-1 mpa_mem_card_back_old"></div>
                                <div class="col-md-3">
                                    <input type="file"  class="form-control" name="mpa_mem_card_back" id="mpa_mem_card_back"  accept="image/*">
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
                                                    <img src="{{ asset('assets/images/image_placeholder.png') }}" alt="Upload Photo" id="nrc_front">
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
                                                         alt="Upload Photo" id="nrc_back">
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
                              <div class="col-md-1 cpd_record_old"></div>
                              <div class="col-md-3">
                                    <input type="file"  class="form-control" name="cpd_record" id="cpd_record">
                              </div>
                          </div><br/>

                          <div class="row">
                              <div class="col-md-2"></div>
                              <!-- <label class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label> -->
                              <label class="col-md-6 col-form-label">{{ __('စုစုပေါင်း နာရီ') }}</label>
                              <div class="col-md-4">
                                  <input type="text"  class="form-control" name="total_hours" id="total_hours"  placeholder="စုစုပေါင်း နာရီ" >

                              </div>
                          </div><br/><br>

                          <div class="row">
                              <div class="col-md-1"></div>
                              <label class="col-md-1 col-form-label">{{ __('(င)') }}</label>
                              <div class="col-md-6 col-form-label">{{ __('CPA(Full-Fledged) နောက်ဆုံးသက်တမ်းတိုးခဲ့သော ခုနှစ်') }}</div>
                              <div class="col-md-4">
                                    <input type="text"  class="form-control" name="last_paid_year" id="last_paid_year" disabled>
                              </div>
                          </div><br/><br>
                          <div class="row">
                              <div class="col-md-1"></div>
                              <label class="col-md-1 col-form-label">{{ __('(စ)') }}</label>
                              <div class="col-md-6 col-form-label">{{ __('CPA(Full-Fledged) Registration No.') }}</div>
                              <div class="col-md-4">
                                    <input type="text"  class="form-control" name="cpaff_reg_no" id="cpaff_reg_no" disabled>
                              </div>
                          </div><br/><br>

                        <div class="row mb-3" style="padding-left:50px; margin-top:10px;">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="cpaff_submit_confirm" onchange="$('#cpaff_submit').prop('disabled', !this.checked)">
                                    <span class="form-check-sign"></span>
                                    <p class="fw-bolder">
                                        * အထက်ဖော်ပြပါ အချက်အလက်များမှန်ကန်ကြောင်းကတိပြုဝန်ခံပါသည်။
                                    </p>
                                </label>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2 offset-md-5">
                                <button type="submit" id="cpaff_submit" data-toggle="modal" data-target="#renewModal" class="btn btn-success btn-hover-dark w-100 renew_submit" disabled="">{{ __('Update') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
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
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="renewRejectCpaff()">Save changes</button>
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
<script type="text/javascript">
    // $('document').ready(function(){
    //     var course_type = location.pathname.split('/');
    //     var student = JSON.parse(localStorage.getItem('studentinfo'));
    //     if(!student){
    //         localStorage.setItem('course_type',course_type[2]);
    //     }
    //     $('#profile').on('click', function(e) {
    //         $('#file').click();
    //     });
    //     $('#file').change(function(e) {
    //         var input = e.target;
    //         if (input.files && input.files[0]) {
    //             var file = input.files[0];

    //             var reader = new FileReader();

    //             reader.readAsDataURL(file);
    //             reader.onload = function(e) {
    //                 $('.dashes-label').css('color','transparent');
    //                 $('#profile').css('background-image', 'url(' + reader.result + ')').addClass('hasImage');
    //             }
    //         }
    //     });    
    // });
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
    // loadCpaffInitialData();
    var cpaff_id=localStorage.getItem('cpaff_id');
    var reject_description=localStorage.getItem('reject_reason');
    $('#cpaff_id').val(cpaff_id);
    $('#remark_description').text(reject_description);

    $.ajax({
        url: BACKEND_URL + "/cpa_ff/" + cpaff_id,
        type: 'get',
        success: function (result) {
            console.log(result);
            var cpaff=result.data[0];
            console.log(cpaff)
            document.getElementById('cpaff_img').src=BASE_URL + cpaff.student_info.image;
            document.getElementById('nrc_front').src=BASE_URL + cpaff.student_info.nrc_front;
            document.getElementById('nrc_back').src=BASE_URL + cpaff.student_info.nrc_back;
            $('#cpa_batch_no').val(cpaff.cpa_batch_no);
            $('#address').val(cpaff.student_info.address);
            $('#phone').val(cpaff.student_info.phone);
            $('#contact_mail').val(cpaff.contact_mail);
            $('#total_hours').val(cpaff.total_hours);
            $('#fine_person').val(cpaff.fine_person);
            $('#papp_reg_no').val(cpaff.papp_reg_no);
            $('#last_paid_year').val(cpaff.last_paid_year);
            $('#cpaff_reg_no').val(cpaff.cpaff_reg_no);

            var cpaff_pass_date=new Date(cpaff.cpaff_pass_date);
            $('#cpaff_pass_date').val(cpaff_pass_date.getFullYear());
            var cpaff_renew_date=new Date(cpaff.cpaff_renew_date);
            $('#cpaff_renew_date').val(cpaff_renew_date.getFullYear());
            // var papp_reg_year=new Date(cpaff.papp_reg_year);
            $('#papp_reg_year').val(cpaff.papp_reg_year);

            $('.cpa_certificate_old').append("<a href='" + BASE_URL + cpaff.cpa_certificate + "'  target='_blank'>View File</a><br/>");
            $('.mpa_mem_card_old').append("<a href='" + BASE_URL + cpaff.mpa_mem_card + "'  target='_blank'>View File</a><br/>");
            $('.mpa_mem_card_back_old').append("<a href='" + BASE_URL + cpaff.mpa_mem_card_back + "'  target='_blank'>View File</a><br/>");
            $('.cpd_record_old').append("<a href='" + BASE_URL + cpaff.cpd_record + "'  target='_blank'>View File</a><br/>");
            if(cpaff.renew_file != null && cpaff.renew_file !="null" && cpaff.renew_file !=""){
                $('.renew_file_old').append("<a href='" + BASE_URL + cpaff.renew_file + "'  target='_blank'>View File</a><br/>");
            }

            if (cpaff.ra != null && cpaff.ra != "null") {
                $('#ra_edu').attr('checked', true);
                $('#cpa_edu').attr('disabled', true);   
                $('#education').attr('disabled', true); 
                getCPAEducation();        
                $(".ra_file").append("<a href='"+BASE_URL+cpaff.ra+"'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".ra_file").append("");
            }
            if(cpaff.cpa!=null && cpaff.cpa!="null"){
                $('#cpa_edu').attr('checked', true);   
                $('#education').attr('disabled', true); 
                $('#ra_edu').attr('disabled', true);            
                getCPAEducation();
                $(".cpa_file").show();
                $(".cpa_file").append("<a href='" + BASE_URL + cpaff.cpa + "'  target='_blank'>View File</a><br/>");
            }
            else {
                getCPAEducation();
                $(".cpa_file").append("");
            }
            if (cpaff.foreign_degree != null && cpaff.foreign_degree != "null") {
                $('#education').attr('checked', true);
                $('#cpa_edu').attr('disabled', true); 
                $('#ra_edu').attr('disabled', true);
                getCPAEducation();
                let foreign_degree = JSON.parse(cpaff.foreign_degree);
                let degree_name = JSON.parse(cpaff.degree_name);
                let degree_pass_year = JSON.parse(cpaff.degree_pass_year);
                for (let j = 0; j < degree_name.length - 1; j++) {
                    AddCPAFFDegree();
                }
                for (let i = 0; i < degree_name.length; i++) {
                    $('input[name="degree_name[]"]').eq(i).val(degree_name[i]);
                    $('input[name="degree_pass_year[]"]').eq(i).val(degree_pass_year[i]);
                    $($(".foreign_degree_file")[i]).append(jQuery("<a href='" + BASE_URL + foreign_degree[i] + "'  target='_blank'>View File</a><br/>"));
                }
            }
        }
    });
</script>
@endpush
