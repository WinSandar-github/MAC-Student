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
                    <h2 class="title">CPA Registration  <span>Form</span></h2>
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
        <div class="section section-padding">
            <div class="container">
                    {{-- <div class="status-reject" style="display:none">
                    <div class="card text-white bg-dark my-3">

                        <div class="card-body">
                            <!-- status == 2 => reject -->
                            <p class="card-text reject">Your CPA 1 Registration Form need to prepare.Please update your form
                                </p>
                        </div>
                    </div>
                    </div>
                    <div class="check_registration" style="display:none;">
                        <div class="card text-white bg-primary my-3">

                            <div class="card-body">
                                <p class="card-text">Your CPA 1 Registration Form is checking</p>
                            </div>
                        </div>
                    </div>
                    <div class="approve" style="display:none;">
                        <table width="100%">
                            <tr>
                                <td width="75%">
                                    <div class="card text-white bg-primary my-3">

                                        <div class="card-body">
                                            <p class="card-text">You have the opportunity to attend the training  </p>


                                        </div>
                                    </div>
                                </td>
                                <td width="25%">
                                    <div class="card text-white bg-primary my-3" id="aa_form" style="display:none;">

                                        <div class="card-body">
                                            <p id="aa" style="text-align:center;"></p>


                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div class="card text-white bg-primary my-3">

                            <div class="card-body add_exam">


                            </div>
                        </div>
                    </div> --}}

                <div class="comment-form study" style="display:none;">


                

                        <div class="row" id="private_school_container">
                            <div class="card border-success mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                                    <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                                    <h5 class="card-title text-center">(ကိုယ်ပိုင်သင်တန်းကျောင်း)</h5>
                                                </div>
                                            </div>
                                            <br/>

                                        </div>
                                    </div>

                                    <form class="needs-validation" id="cpa_pp_form" method="post" action="javascript:void();" enctype="multipart/form-data" novalidate>

                                        

                                <br>
                                <div class="row">
                                  <div class="col-md-8">
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                        <label for="" class="col-md-5 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="အမည်(မြန်မာ)" id="name_mm" name="name_mm"
                                                   class="form-control"  disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" id="name_eng" name="name_eng"
                                                   class="form-control"  disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                        <label for=""
                                               class="col-md-5 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                        <div class="col-md-6">
                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                <div class="col-md-2 col-5 pr-1">
                                                    <input type="text" placeholder="" id="nrc_state_region" name="nrc_state_region"
                                                           class="form-control" disabled>
                                                </div>
                                                <div class="col-md-3 col-7 px-1">
                                                  <input type="text" placeholder="" id="nrc_township" name="nrc_township"
                                                         class="form-control" disabled>
                                                </div>
                                                <div class="col-md-2 col-5 px-1">
                                                  <input type="text" placeholder="" id="nrc_citizen" name="nrc_citizen"
                                                         class="form-control" disabled>
                                                </div>

                                                <div class="col-md-5 col-7 pl-1">
                                                  <input type="text" placeholder="" id="nrc_number" name="nrc_number"
                                                         class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-10">
                                          {{--<div class="row">
                                              <div class="col-md-6">
                                                  <div class="row">
                                                      <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                                  </div>
                                                  <div class="row">
                                                      <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                      <p class="mt-2">
                                                      <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                          value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" >
                                                      </p>
                                                      <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                  </div>
                                              </div>

                                              <div class="col-md-6">
                                                  <div class="row">
                                                      <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                  </div>
                                                  <div class="row">
                                                      <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                      <p class="mt-2">
                                                      <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                          value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" >
                                                      </p>
                                                      <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                  </div>
                                              </div>
                                          </div>--}}
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                        <label for="" class="col-md-5 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="အဘအမည်(မြန်မာ)" id="father_name_mm" name="father_name_mm"
                                                   class="form-control"  disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" id="father_name_eng" name="father_name_eng"
                                                   class="form-control"  disabled>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="col-md-7 pull-right">
                                        <img class="col-md-3 pull-right profile-style" id="private_preview_img" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">

                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right" >လူမျိုး</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="လူမျိုး" name="race" id="race" class="form-control"
                                               value="{{ old('race') }}"  disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" id="religion" name="religion"
                                               class="form-control" value="{{ old('religion') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                    <div class="col-md-8">
                                        <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"
                                               placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">ပညာအရည်အချင်း</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="" id="degree_name" name="degree_name"
                                               class="form-control" value="" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ဖုန်းနံပါတ်" id="phone" name="phone"
                                               class="form-control" value="{{ old('phone') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">နေရပ်လိပ်စာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="နေရပ်လိပ်စာ" id="address" name="address"
                                               class="form-control" value="{{ old('address') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" id="current_address" name="current_address"
                                               class="form-control" disabled value="{{ old('current_address') }}" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">လက်ရှိအလုပ်အကိုင်</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" id="name" name="name"
                                               class="form-control" value="{{ old('name') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">ရာထူး</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ရာထူး" disabled id="position" name="position" class="form-control"
                                               value="{{ old('position') }}" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">ဌာန</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ဌာန" id="department" name="department" class="form-control"
                                               value="{{ old('department') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                {{--<div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၆။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">အဖွဲ့အစည်း</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="အဖွဲ့အစည်း" name="organization" id="organization"
                                               class="form-control" value="{{ old('organization') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၇။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">ကုမ္ပဏီအမည်</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ကုမ္ပဏီအမည်" name="company_name" id="company_name"
                                               class="form-control" value="{{ old('company_name') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၈။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">လစာနှင့်လစာနှုန်း</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary" id="salary"
                                               class="form-control" value="{{ old('salary') }}" disabled >
                                    </div>
                                </div>
                                <br> --}}

                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">ရုံးလိပ်စာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address" id="office_address"
                                               class="form-control" value="{{ old('office_address') }}" disabled >
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <label class="col-sm-1 col-form-label">{{ __('၁၅။') }}</label>
                                    <label class="col-md-3 col-form-label label_align_right">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                    <div class="col-md-2 pt-2">
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-md-4"><input type="radio"
                                                                             class="form-check-input mr-3" id="yes"
                                                                             name="gov_staff" value="1"
                                                                             style="margin-left: 3%;" disabled  onclick="selectStaff()">
                                                </div>
                                                <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 pt-2">
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-md-4"><input type="radio"
                                                                             class="form-check-input mr-3" id="no"
                                                                             name="gov_staff" disabled value="0"
                                                                             style="margin-left: 3%;"  onclick="selectStaff()">
                                                </div>
                                                <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label>
                                                    <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                        ရွေးချယ်ပါ
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ __('၁၆။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label class="col-form-label">{{ __('ကိုယ်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်းအမည်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">

                                        <div class="form-group">
                                            <select class="form-control" name="private_school_name" id="selected_school_id" style="width: 100%;">
                                                <option value="" disabled selected>Select School</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ __('၁၇။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label class="col-form-label">{{ __('ပညာသင်နှစ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" id="academic_year_private" class="form-control" value="" required placeholder="ပညာသင်နှစ်">
                                        </div>
                                    </div>
                                </div>
                                                                <br>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ __('၁၈။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label class="col-form-label">{{ __('တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့် အမှတ်စဥ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" id="direct_access_no_private" class="form-control" value="" placeholder="တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့် အမှတ်စဥ်" required>
                                        </div>
                                    </div>
                                </div>
                                                                <br>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ __('၁၉။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label class="col-form-label">{{ __('ဝင်ခွင့်စာမေးပွဲ အောင်မြင်သည့်အမှတ်စဥ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" id="entry_success_no_private" class="form-control" value="" placeholder="ဝင်ခွင့်စာမေးပွဲ အောင်မြင်သည့်အမှတ်စဥ်" required>
                                        </div>
                                    </div>
                                </div><br/>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၂၀။') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-2 col-form-label label_align_right">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                    <div class="col-md-8">
                                            <input type="text" name="batch_no" class="form-control" placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_private" required>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-2 col-form-label label_align_right">{{ __('အပိုင်း') }}</label>

                                    <div class="col-md-8">
                                            <input type="text" name="batch_part_no" class="form-control" placeholder="အပိုင်း" id="part_no_private" required>

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-2 col-form-label label_align_right">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                    <div class="col-md-8">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_private" required>

                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-md-2 offset-md-5">
                                            <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_pp" >Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                        <div class="row" id="self_study_container">
                            <div class="card border-success mb-3">
                                <div class="card-body">
                                    <div class="row">
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
                                    <form id="cpa_ss_form" class="needs-validation" method="post" action="javascript:void();" enctype="multipart/form-data" novalidate>

                                        

                                <br>
                                <div class="row">
                                  <div class="col-md-8">
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                        <label for="" class="col-md-5 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="အမည်(မြန်မာ)" id="name_mm" name="name_mm"
                                                   class="form-control"  disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" id="name_eng" name="name_eng"
                                                   class="form-control"  disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                        <label for=""
                                               class="col-md-5 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                        <div class="col-md-6">
                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                <div class="col-md-2 col-5 pr-1">
                                                    <input type="text" placeholder="" id="nrc_state_region" name="nrc_state_region"
                                                           class="form-control" disabled>
                                                </div>
                                                <div class="col-md-3 col-7 px-1">
                                                  <input type="text" placeholder="" id="nrc_township" name="nrc_township"
                                                         class="form-control" disabled>
                                                </div>
                                                <div class="col-md-2 col-5 px-1">
                                                  <input type="text" placeholder="" id="nrc_citizen" name="nrc_citizen"
                                                         class="form-control" disabled>
                                                </div>

                                                <div class="col-md-5 col-7 pl-1">
                                                  <input type="text" placeholder="" id="nrc_number" name="nrc_number"
                                                         class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-10">
                                          {{--<div class="row">
                                              <div class="col-md-6">
                                                  <div class="row">
                                                      <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                                  </div>
                                                  <div class="row">
                                                      <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                      <p class="mt-2">
                                                      <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                          value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" >
                                                      </p>
                                                      <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                  </div>
                                              </div>

                                              <div class="col-md-6">
                                                  <div class="row">
                                                      <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                  </div>
                                                  <div class="row">
                                                      <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                      <p class="mt-2">
                                                      <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                          value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" >
                                                      </p>
                                                      <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                  </div>
                                              </div>
                                          </div>--}}
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                        <label for="" class="col-md-5 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="အဘအမည်(မြန်မာ)" id="father_name_mm" name="father_name_mm"
                                                   class="form-control"  disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" id="father_name_eng" name="father_name_eng"
                                                   class="form-control"  disabled>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="col-md-7 pull-right">
                                        <img class="col-md-3 pull-right profile-style" id="self_study_preview_img" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">

                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right" >လူမျိုး</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="လူမျိုး" name="race" id="race" class="form-control"
                                               value="{{ old('race') }}"  disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ကိုးကွယ်သည့်ဘာသာ" id="religion" name="religion"
                                               class="form-control" value="{{ old('religion') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                    <div class="col-md-8">
                                        <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"
                                               placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">ပညာအရည်အချင်း</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="" id="degree_name" name="degree_name"
                                               class="form-control" value="" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">ဖုန်းနံပါတ်</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ဖုန်းနံပါတ်" id="phone" name="phone"
                                               class="form-control" value="{{ old('phone') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">နေရပ်လိပ်စာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="နေရပ်လိပ်စာ" id="address" name="address"
                                               class="form-control" value="{{ old('address') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                    <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" id="current_address" name="current_address"
                                               class="form-control" disabled value="{{ old('current_address') }}" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">လက်ရှိအလုပ်အကိုင်</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" id="name" name="name"
                                               class="form-control" value="{{ old('name') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">ရာထူး</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ရာထူး" disabled id="position" name="position" class="form-control"
                                               value="{{ old('position') }}" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">ဌာန</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ဌာန" id="department" name="department" class="form-control"
                                               value="{{ old('department') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                {{--<div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၆။') }}</label>
                                     <label for="" class="col-md-3 col-form-label">အဖွဲ့အစည်း</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="အဖွဲ့အစည်း" name="organization" id="organization"
                                               class="form-control" value="{{ old('organization') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၇။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">ကုမ္ပဏီအမည်</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ကုမ္ပဏီအမည်" name="company_name" id="company_name"
                                               class="form-control" value="{{ old('company_name') }}" disabled >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၈။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">လစာနှင့်လစာနှုန်း</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary" id="salary"
                                               class="form-control" value="{{ old('salary') }}" disabled >
                                    </div>
                                </div>
                                <br> --}}

                                <div class="row">
                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                     <label for="" class="col-md-3 col-form-label label_align_right">ရုံးလိပ်စာ</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address" id="office_address"
                                               class="form-control" value="{{ old('office_address') }}" disabled >
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <label class="col-sm-1 col-form-label">{{ __('၁၅။') }}</label>
                                    <label class="col-md-3 col-form-label label_align_right">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                    <div class="col-md-2 pt-2">
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-md-4"><input type="radio"
                                                                             class="form-check-input mr-3" id="yes"
                                                                             name="gov_staff" value="1"
                                                                             style="margin-left: 3%;" disabled  onclick="selectStaff()">
                                                </div>
                                                <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 pt-2">
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-md-4"><input type="radio"
                                                                             class="form-check-input mr-3" id="no"
                                                                             name="gov_staff" disabled value="0"
                                                                             style="margin-left: 3%;"  onclick="selectStaff()">
                                                </div>
                                                <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label>
                                                    <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                        ရွေးချယ်ပါ
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row mb-3">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ __('၁၆။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 label_align_right">
                                        <div>
                                            <label class="col-form-label">{{ __('ပညာသင်နှစ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <input type="text" id="academic_year_self" class="form-control" value="" placeholder="ပညာသင်နှစ်" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ __('၁၇။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <div>
                                            <label class="col-form-label">{{ __('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(က)</div>
                                    <div class="col-md-9 " style="padding-top:10px">
                                        <input type="checkbox" class="form-check-input" value="ယခုနှစ်တက်ရောက်ခွင့်ရရှိခြင်း" id="cpa_check" name="reg_reason[]" >
                                                                                <label class="">{{ __('ယခုနှစ်တက်ရောက်ခွင့်ရရှိခြင်း') }}</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>

                                    <div class="col-md-4">
                                        <label class="col-form-label">{{ __('(၁) တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်') }}</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="direct_access_no_self" class="form-control" value="" placeholder="တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့်အမှတ်စဥ်">
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4">
                                        <label class="col-form-label">{{ __('(၂) ဝင်ခွင့်စာမေးပွဲအောင်မြင်သည့် အမှတ်စဥ်') }}</label>

                                    </div>
                                    <div class="col-md-5">
                                            <input type="text" id="entry_success_no_self" class="form-control" value="" placeholder="ဝင်ခွင့်စာမေးပွဲအောင်မြင်သည့် အမှတ်စဥ်">
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ခ)</div>
                                    <div class="col-md-9 " style="padding-top:10px">
                                                                            <input type="checkbox" class="form-check-input " value="သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း" id="enrol_no_exam" name="reg_reason[]" >
                                                                            <label class="">{{ __(' သင်တန်းတက်ရောက်ခဲ့ပြီး စာမေးပွဲဝင်ရောက်မဖြေဆိုခြင်း') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ဂ)</div>
                                    <div class="col-md-4 " style="padding-top:10px">
                                                                            <input type="checkbox" class="form-check-input col-form-label" value="သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း" id="attendance" name="reg_reason[]" >
                                                                            <label class="">{{ __(' သင်တန်းတက်ရောက်ချိန် ၆၀% မပြည့်ခြင်း') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ဃ)</div>
                                    <div class="col-md-4 " style="padding-top:10px">
                                        <input type="checkbox" class="form-check-input" value="စာမေးပွဲကျရှုံးခြင်း" id="fail_exam" name="reg_reason[]" >
                                                                                <label class="">{{ __(' စာမေးပွဲကျရှုံးခြင်း') }}</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(င) </div>
                                    <div class="col-md-4 " style="padding-top:10px">
                                        <input type="checkbox" class="form-check-input " value="သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း" id="resigned" name="reg_reason[]" >
                                                                                <label class="">{{ __('သင်တန်းမှနုတ်ထွက်ခဲ့ခြင်း') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2 col-form-label">(စ)</div>
                                    <div class="col-md-4">
                                            <label class="col-form-label">{{ __('ဖြေဆိုမည့် Module') }}</label>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-4 form-check">
                                                <input type="radio" class="form-check-input" name="module" value="1" id="module1" required>
                                                <label class="form-check-label">{{ __('Module-1') }}</label>
                                            </div>
                                            <div class="col-md-4 form-check">
                                                <input type="radio" class="form-check-input" name="module" value="2" id="module2" >
                                                <label class="form-check-label">{{ __('Module-2') }}</label>
                                            </div>
                                            <div class="col-md-4 form-check">
                                                <input type="radio" class="form-check-input" name="module" value="3" id="allmodule" >
                                                <label class="form-check-label">{{ __('All Module') }}</label>
                                                                                                <div class="invalid-feedback mt-3">ဖြေဆိုမည့် Module ရွေးချယ်ပါ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br/>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၁၈။') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-2 col-form-label label_align_right">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                    <div class="col-md-8">
                                            <input type="text" name="batch_no" class="form-control" placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_self" required>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-2 col-form-label label_align_right">{{ __('အပိုင်း') }}</label>

                                    <div class="col-md-8">
                                            <input type="text" name="batch_part_no" class="form-control" placeholder="အပိုင်း" id="part_no_self" required>

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-2 col-form-label label_align_right">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                    <div class="col-md-8">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_self" required>

                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_ss">{{ __('Submit') }}</button>
                                    </div>
                                </div><br/>
                                </form>
                                </div>
                            </div>

                        </div>

                        <div class="row" id="mac_container">
                            <div class="card border-success mb-3" style="padding:3% 5% 3% 5%;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">                                           

                                            <div class="row mb-5">
                                                <h5 class="card-title text-center fw-bolder">
                                                    မြန်မာနိုင်ငံစာရင်းကောင်စီ<br>
                                                    လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း)မှတ်ပုံတင်ခွင့်လျှောက်လွှာ
                                                </h5>
                                                
                                            </div>
                                        </div>

                                    <div>
                                    <form  method="post" id="cpa_mac_form" class="needs-validation" action="javascript:void();" enctype="multipart/form-data" novalidate>

                                            
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row mb-3">
                                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၁။') }}</span>အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_mm" class="form-control" readonly="">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="name_eng" class="form-control" readonly="">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၂။') }}</span>နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                        <div class="col-md-6">
                                                            <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control nrc_state_region" name="nrc_state_region" style="padding: 6px;" readonly>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control nrc_township" name="nrc_township" readonly>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control nrc_citizen" name="nrc_citizen" readonly>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control nrc_number" name="nrc_number" readonly="">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--<div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-10">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အရှေ့)</label>
                                                                    </div>
                                                                    <div class="row">
                                                                        <img class="col-md-12 nrc-image-style" id="previewNRCFrontImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                        <p class="mt-2">
                                                                        <input type="file" class="nrc-custom-file-input" id="nrc_front"  name="nrc_front"
                                                                            value="{{ old('nrc_front') }}" accept="image/*"  onchange="previewNRCFrontImageFile(this);" >
                                                                        </p>
                                                                        <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <label for="" class="col-form-label">နိုင်ငံသားစိစစ်ရေးကတ်ပြား (အနောက်)</label>
                                                                    </div>
                                                                    <div class="row">
                                                                        <img class="col-md-12 nrc-image-style" id="previewNRCBackImg" src="/assets/images/blank-profile-picture-1.png" accept="image/png,image/jpeg" alt="">
                                                                        <p class="mt-2">
                                                                        <input type="file" class="nrc-custom-file-input" id="nrc_back"  name="nrc_back"
                                                                            value="{{ old('nrc_back') }}" accept="image/*"  onchange="previewNRCBackImageFile(this);" >
                                                                        </p>
                                                                        <div class="form-text mb-2 text-danger">Allowed Jpeg and Png Image.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>--}}

                                                    <div class="row mb-3">
                                                        <label class="col-md-6 col-form-label label"><span class="pull-left">{{ __('၃။') }}</span>အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_mm" class="form-control" readonly="">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="father_name_eng" class="form-control" readonly="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 text-center">
                                                    {{--User Photo--}}
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-circle shadow" style="line-height: 160px;">
                                                            <img src="{{ asset('assets/images/blank-profile-picture-2.png') }}"
                                                                alt="Upload Photo" class="profile_image" id="mac_preview_img">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle "></div>
                                                        
                                                    </div>
                                                    {{--User Photo--}}
                                                </div>
                                            </div>

                                            <div class="row  mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၄။') }}</span>လူမျိုး</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="race" id="race" class="form-control" value="{{ old('race') }}" readonly="">
                                                </div>
                                            </div>

                                            <div class="row  mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၅။') }}</span>ကိုးကွယ်သည့်ဘာသာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="religion" name="religion" class="form-control" value="{{ old('religion') }}" readonly="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၆။') }}</span>မွေးသက္ကရာဇ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="date_of_birth" id="date_of_birth" class="form-control"
                                                        placeholder="ရက်၊လ၊နှစ်(DD-MMM-YYYY)" readonly="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၇။') }}</span>ပညာအရည်အချင်း</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="ဘွဲ့အမည်" id="degree_name" name="degree_name"
                                                        class="form-control" value="{{ old('degree_name') }}" readonly="">
                                                </div>
                                            </div>                                            
                                            
                                            <div class="row mb-3">
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၈။') }}</span>ဖုန်းနံပါတ်</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="ဖုန်းနံပါတ်" id="phone" name="phone"
                                                           class="form-control" value="{{ old('phone') }}" disabled >
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">နေရပ်လိပ်စာ</label>
                                                <label class="col-md-4 col-form-label label"><span class="pull-left">{{ __('၉။') }}</span>ဆက်သွယ်ရန်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="ဆက်သွယ်ရန်လိပ်စာ" id="address" name="address"
                                                           class="form-control" value="{{ old('address') }}" disabled >
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                                <label for="" class="col-md-3 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" id="current_address" name="current_address"
                                                           class="form-control" disabled value="{{ old('current_address') }}" >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                                 <label for="" class="col-md-3 col-form-label label_align_right">လက်ရှိအလုပ်အကိုင်</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" id="name" name="name"
                                                           class="form-control" value="{{ old('name') }}" disabled >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                                 <label for="" class="col-md-3 col-form-label label_align_right">ရာထူး</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="ရာထူး" disabled id="position" name="position" class="form-control"
                                                           value="{{ old('position') }}" >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                                 <label for="" class="col-md-3 col-form-label label_align_right">ဌာန</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="ဌာန" id="department" name="department" class="form-control"
                                                           value="{{ old('department') }}" disabled >
                                                </div>
                                            </div>
                                            <br>
                                            {{--<div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁၆။') }}</label>
                                                 <label for="" class="col-md-3 col-form-label">အဖွဲ့အစည်း</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="အဖွဲ့အစည်း" name="organization" id="organization"
                                                           class="form-control" value="{{ old('organization') }}" disabled >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁၇။') }}</label>
                                                 <label for="" class="col-md-3 col-form-label label_align_right">ကုမ္ပဏီအမည်</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="ကုမ္ပဏီအမည်" name="company_name" id="company_name"
                                                           class="form-control" value="{{ old('company_name') }}" disabled >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁၈။') }}</label>
                                                 <label for="" class="col-md-3 col-form-label label_align_right">လစာနှင့်လစာနှုန်း</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary" id="salary"
                                                           class="form-control" value="{{ old('salary') }}" disabled >
                                                </div>
                                            </div>
                                            <br> --}}

                                            <div class="row">
                                                <label for="" class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                                 <label for="" class="col-md-3 col-form-label label_align_right">ရုံးလိပ်စာ</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address" id="office_address"
                                                           class="form-control" value="{{ old('office_address') }}" disabled >
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <label class="col-sm-1 col-form-label">{{ __('၁၅။') }}</label>
                                                <label class="col-md-3 col-form-label label_align_right">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                                <div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input type="radio"
                                                                                         class="form-check-input mr-3" id="yes"
                                                                                         name="gov_staff" value="1"
                                                                                         style="margin-left: 3%;" disabled  onclick="selectStaff()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 pt-2">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-4"><input type="radio"
                                                                                         class="form-check-input mr-3" id="no"
                                                                                         name="gov_staff" disabled value="0"
                                                                                         style="margin-left: 3%;"  onclick="selectStaff()">
                                                            </div>
                                                            <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label>
                                                                <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                                    ရွေးချယ်ပါ
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label class="col-form-label">{{ __('၁၆။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 label_align_right">
                                                    <div>
                                                        <label class="col-form-label">{{ __('ပညာသင်နှစ်') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <input type="text" id="academic_year_mac" class="form-control" value="" placeholder="ပညာသင်နှစ်" required >
                                                    </div>
                                                </div>
                                            </div>
                                                                            <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label class="col-form-label">{{ __('၁၇။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 label_align_right">
                                                    <div>
                                                        <label class="col-form-label">{{ __('တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့် အမှတ်စဥ်') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <input type="text" id="direct_access_no_mac" class="form-control" value="" placeholder="တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့် အမှတ်စဥ်" required>
                                                    </div>
                                                </div>
                                            </div>
                                                                            <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label class="col-form-label">{{ __('၁၈။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 label_align_right">
                                                    <div>
                                                        <label class="col-form-label">{{ __('ဝင်ခွင့်စာမေးပွဲ အောင်မြင်သည့်အမှတ်စဥ်') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <input type="text" id="entry_success_no_mac" class="form-control" value="" placeholder="ဝင်ခွင့်စာမေးပွဲ အောင်မြင်သည့်အမှတ်စဥ်" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div>
                                                        <label class="col-form-label">{{ __('၁၉။') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <label class="col-form-label">{{ __('မှတ်ပုံတင်ရသည့်အကြောင်းအရင်း') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                                                <br>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(က)</div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">{{ __(' သင်တန်းကာလအတွင်း အောက်ပါအတိုင်း အလုပ်သင်ဆင်းလိုပါသည်-') }}</label>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <input type="checkbox" value="" id="cpa_check" >
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-1">
                                        <label class="col-form-label">{{ __('(၁)') }}</label>
                                    </div>
                                    <div class="col-md-8" style="padding-top:10px">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="internship" value="အစိုးရ ဌာနတွင်" id="gov_department" required >
                                            <label class="form-check-label">{{ __('အစိုးရ ဌာနတွင်') }}</label>
                                        </div>
                                    </div>

                                </div><br/>

                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-1">
                                        <label class="col-form-label">{{ __('(၂)') }}</label>
                                    </div>
                                    <div class="col-md-8" style="padding-top:10px">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="internship"  value="ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းတွင်" id="personal_acc_training" required>
                                            <label class="form-check-label">{{ __('ကိုယ်ပိုင်စာရင်းကိုင်လုပ်ငန်းတွင်') }}</label>
                                        </div>
                                    </div>
                                </div><br/>

                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2 col-form-label">(ခ)</div>
                                    <div class="col-md-8" style="padding-top:10px">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" value="ဒုတိယပိုင်းသင်တန်းအောင်မြင်ပြီးမှ အလုပ်သင်ဆင်းလိုပါသည်"  name="internship"  id="after_second_exam" required>
                                            <label class="form-check-label">{{ __('ဒုတိယပိုင်းသင်တန်းအောင်မြင်ပြီးမှ အလုပ်သင်ဆင်းလိုပါသည်') }}</label>

                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-1">
                                        <label class="col-form-label">{{ __('၂၀။') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                            <label class="col-form-label">{{ __('အစိုးရဌာနတွင်အလုပ်သင်ဆင်းလိုကြောင်းအဆိုပြုသူများအတွက် ပူးတွဲတင်ပြရမည့် စာရွက်စာတမ်းများ') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(က) </div>
                                    <div class="col-md-2 label_align_right">
                                        <label class="col-form-label">{{ __('အကျင့်စာရိတ္တကောင်းမွန်ကြောင်းထောက်ခံချက်') }}</label>

                                    </div>
                                    <div class="col-md-8">
                                            <input type="file" id="good_morale_file" class="form-control" value="" required>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1 col-form-label">(ခ)</div>
                                    <div class="col-md-2 label_align_right">
                                            <label class="col-form-label">{{ __(' ပြစ်မှုကင်းရှုင်းကြောင်းထောက်ခံချက်') }}</label>

                                    </div>
                                    <div class="col-md-8" >
                                        <input type="file" class="form-control" value="" id="no_crime_file" required>
                                    </div>
                                </div><br/><br>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('၂၁။') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                    <label class="col-md-2 col-form-label label_align_right">{{ __('သင်တန်းအမှတ်စဥ်') }}</label>

                                    <div class="col-md-8">
                                            <input type="text" name="batch_no" class="form-control" placeholder="သင်တန်းအမှတ်စဥ်" id="batch_no_mac" required >

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                    <label class="col-md-2 col-form-label label_align_right">{{ __('အပိုင်း') }}</label>

                                    <div class="col-md-8">
                                            <input type="text" name="batch_part_no" class="form-control" placeholder="အပိုင်း" id="part_no_mac" required>

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                    <label class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                    <label class="col-md-2 col-form-label label_align_right">{{ __('ကိုယ်ပိုင်အမှတ်') }}</label>

                                    <div class="col-md-8">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="ကိုယ်ပိုင်အမှတ်" id="personal_no_mac" required>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1">
                                        <label class="col-form-label">{{ __('၂၂။') }}</label>
                                    </div>
                                    <div class="col-md-4">
                                            <label class="col-form-label">{{ __('ဖြေဆိုမည့် Module') }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4 form-check">
                                                <input class="form-check-input" type="radio"  name="module" value="1" id="module1" required>
                                                <label class="form-check-label">{{ __('Module-1') }}</label>
                                            </div>
                                            <div class="col-md-4 form-check">
                                                <input class="form-check-input" type="radio" name="module" value="2" id="module2" required>
                                                <label class="form-check-label">{{ __('Module-2') }}</label>

                                            </div>
                                            <div class="col-md-4 form-check">
                                                <input class="form-check-input" type="radio" name="module" value="3" id="allmodule" required>
                                                <label class="form-check-label">{{ __('All Module') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn_mac">{{ __('Submit') }}</button>
                                    </div>
                                </div>
                                </form>
                                </div>
                            </div>

                        </div>

                <!-- Exam Feedback Text -->
                <div class="exam_feedback" style="display:none;">
                    <div class="card text-white bg-primary my-3">

                        <div class="card-body exam_text">

                        </div>
                    </div>
                </div>
        </div>
    </div>

    <!-- MAC -->
    <form method="post" class="needs-validation" action="javascript:Mac_Submit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="macModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Registeration(MAC) Form Fee - ****** MMK</h4>
                            </center>
                            <div class="col-sm-3 col-5">
                                <center>
                                    <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                         data-value="CBPAY" name="payment_method" id="cb_img">
                                </center>
                                <br>
                            </div>
                            <div class="col-sm-3 col-5">
                                <center>
                                    <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                         data-value="MPU" name="payment_method" id="mpu_img">
                                </center>
                                <br>
                            </div>
                            <div class="col-sm-3 col-5">
                                <center>
                                    <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                         data-value="CASH" name="payment_method" id="cash_img_mac">
                                </center>
                                <br>
                            </div>
                            <input type="hidden" name="payment_method" value="CASH">
                            <center>
                                <button type="submit" id="cpa1mac_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>

    <!-- private -->
    <form method="post" class="needs-validation" action="javascript:Private_School_Submit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="privateSchoolModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Registeration(Private School) Form Fee - ****** MMK</h4>
                            </center>
                            <div class="col-sm-3 col-5">
                                <center>
                                    <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                         data-value="CBPAY" name="payment_method" id="cb_img">
                                </center>
                                <br>
                            </div>
                            <div class="col-sm-3 col-5">
                                <center>
                                    <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                         data-value="MPU" name="payment_method" id="mpu_img">
                                </center>
                                <br>
                            </div>
                            <div class="col-sm-3 col-5">
                                <center>
                                    <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                         data-value="CASH" name="payment_method" id="cash_img_private">
                                </center>
                                <br>
                            </div>
                            <input type="hidden" name="payment_method" value="CASH">
                            <center>
                                <button type="submit" id="cpa1private_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>


    <!-- self -->
    <form method="post" class="needs-validation" action="javascript:Self_Study_Submit();" enctype="multipart/form-data"
          novalidate>
        @csrf
        <div class="modal fade" id="selfStudyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <center>
                                <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Registeration(Self Study) Form Fee - ****** MMK</h4>
                            </center>
                            <div class="col-sm-3 col-5">
                                <center>
                                    <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                         data-value="CBPAY" name="payment_method" id="cb_img">
                                </center>
                                <br>
                            </div>
                            <div class="col-sm-3 col-5">
                                <center>
                                    <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                         data-value="MPU" name="payment_method" id="mpu_img">
                                </center>
                                <br>
                            </div>
                            <div class="col-sm-3 col-5">
                                <center>
                                    <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                         data-value="CASH" name="payment_method" id="cash_img_self">
                                </center>
                                <br>
                            </div>
                            <input type="hidden" name="payment_method" value="CASH">
                            <center>
                                <button type="submit" id="cpa1self_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                            </center>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>

@endsection
@push('scripts')
<script type="text/javascript">


 $('document').ready(function(){

        const queryString = location.search;
        const urlParams = new URLSearchParams(queryString);
        selectedRegistration(urlParams.get("study_type"))

        get_student_info(student_id).then(data => {
            if(data){
                var info = data.data;
                console.log("info >>>",info);
                var job_history = data.data.student_job;
                var education_history = data.data.student_education_histroy;
                if(info){
                  $("#mac_container").find("input[name=name_mm]").val(info.name_mm);
                  $("#mac_container").find("input[name=name_eng]").val(info.name_eng);
                  $("#mac_container").find("input[name=nrc_state_region]").val(info.nrc_state_region);
                  $("#mac_container").find("input[name=nrc_township]").val(info.nrc_township);
                  $("#mac_container").find("input[name=nrc_citizen]").val(info.nrc_citizen);
                  $("#mac_container").find("input[name=nrc_number]").val(info.nrc_number);
                  $("#mac_container").find("input[name=father_name_mm]").val(info.father_name_mm);
                  $("#mac_container").find("input[name=father_name_eng]").val(info.father_name_eng);
                  $("#mac_container").find("input[name=race]").val(info.race);
                  $("#mac_container").find("input[name=religion]").val(info.religion);
                  $("#mac_container").find("input[name=date_of_birth]").val(info.date_of_birth);
                  $("#mac_container").find("input[name=phone]").val(info.phone);
                  $("#mac_container").find("input[name=address]").val(info.address);
                  $("#mac_container").find("input[name=current_address]").val(info.current_address);
                  document.getElementById('mac_preview_img').src = BASE_URL + data.data.image;
                  //$("#mac_container").find("previewImg").attr('src',BASE_URL + data.data.image);

                  $("#self_study_container").find("input[name=name_mm]").val(info.name_mm);
                  $("#self_study_container").find("input[name=nrc_state_region]").val(info.nrc_state_region);
                  $("#self_study_container").find("input[name=name_eng]").val(info.name_eng);
                  $("#self_study_container").find("input[name=nrc_township]").val(info.nrc_township);
                  $("#self_study_container").find("input[name=nrc_citizen]").val(info.nrc_citizen);
                  $("#self_study_container").find("input[name=nrc_number]").val(info.nrc_number);
                  $("#self_study_container").find("input[name=father_name_mm]").val(info.father_name_mm);
                  $("#self_study_container").find("input[name=father_name_eng]").val(info.father_name_eng);
                  $("#self_study_container").find("input[name=race]").val(info.race);
                  $("#self_study_container").find("input[name=religion]").val(info.religion);
                  $("#self_study_container").find("input[name=date_of_birth]").val(info.date_of_birth);
                  $("#self_study_container").find("input[name=phone]").val(info.phone);
                  $("#self_study_container").find("input[name=address]").val(info.address);
                  $("#self_study_container").find("input[name=current_address]").val(info.current_address);
                  document.getElementById('self_study_preview_img').src = BASE_URL + data.data.image;

                  $("#private_school_container").find("input[name=name_mm]").val(info.name_mm);
                  $("#private_school_container").find("input[name=nrc_state_region]").val(info.nrc_state_region);
                  $("#private_school_container").find("input[name=name_eng]").val(info.name_eng);
                  $("#private_school_container").find("input[name=nrc_township]").val(info.nrc_township);
                  $("#private_school_container").find("input[name=nrc_citizen]").val(info.nrc_citizen);
                  $("#private_school_container").find("input[name=nrc_number]").val(info.nrc_number);
                  $("#private_school_container").find("input[name=father_name_mm]").val(info.father_name_mm);
                  $("#private_school_container").find("input[name=father_name_eng]").val(info.father_name_eng);
                  $("#private_school_container").find("input[name=race]").val(info.race);
                  $("#private_school_container").find("input[name=religion]").val(info.religion);
                  $("#private_school_container").find("input[name=date_of_birth]").val(info.date_of_birth);
                  $("#private_school_container").find("input[name=phone]").val(info.phone);
                  $("#private_school_container").find("input[name=address]").val(info.address);
                  $("#private_school_container").find("input[name=current_address]").val(info.current_address);
                  document.getElementById('private_preview_img').src = BASE_URL + data.data.image;

                  // government staff OR not
                  if(info.gov_staff == 1){
                    $("#mac_container").find("input[name=gov_staff][value=1]").prop("checked",true);
                    $("#self_study_container").find("input[name=gov_staff][value=1]").prop("checked",true);
                    $("#private_school_container").find("input[name=gov_staff][value=1]").prop("checked",true);
                  }
                  else{
                    $("#mac_container").find("input[name=gov_staff][value=0]").prop("checked",true);
                    $("#self_study_container").find("input[name=gov_staff][value=1]").prop("checked",true);
                    $("#private_school_container").find("input[name=gov_staff][value=1]").prop("checked",true);
                  }
                }

                if(education_history){
                  $("#self_study_container").find("input[name=degree_name]").val(education_history.degree_name);
                  $("#mac_container").find("input[name=degree_name]").val(education_history.degree_name);
                  $("#private_school_container").find("input[name=degree_name]").val(education_history.degree_name);
                }

                if(job_history){
                  $("#mac_container").find("input[name=name]").val(job_history.company_name);
                  $("#mac_container").find("input[name=position]").val(job_history.position);
                  $("#mac_container").find("input[name=department]").val(job_history.department);
                  $("#mac_container").find("input[name=organization]").val(job_history.organization);
                  //$("#mac_container").find("input[name=address]").val(job_history.address);
                  //$("#mac_container").find("input[name=current_address]").val(job_history.current_address);
                  $("#mac_container").find("input[name=company_name]").val(job_history.company_name);
                  $("#mac_container").find("input[name=salary]").val(job_history.salary);
                  $("#mac_container").find("input[name=office_address]").val(job_history.office_address);

                  $("#self_study_container").find("input[name=name]").val(job_history.company_name);
                  $("#self_study_container").find("input[name=position]").val(job_history.position);
                  $("#self_study_container").find("input[name=department]").val(job_history.department);
                  $("#self_study_container").find("input[name=organization]").val(job_history.organization);
                  //$("#mac_container").find("input[name=address]").val(job_history.address);
                  //$("#mac_container").find("input[name=current_address]").val(job_history.current_address);
                  $("#self_study_container").find("input[name=company_name]").val(job_history.company_name);
                  $("#self_study_container").find("input[name=salary]").val(job_history.salary);
                  $("#self_study_container").find("input[name=office_address]").val(job_history.office_address);

                  $("#private_school_container").find("input[name=name]").val(job_history.company_name);
                  $("#private_school_container").find("input[name=position]").val(job_history.position);
                  $("#private_school_container").find("input[name=department]").val(job_history.department);
                  $("#private_school_container").find("input[name=organization]").val(job_history.organization);
                  //$("#mac_container").find("input[name=address]").val(job_history.address);
                  //$("#mac_container").find("input[name=current_address]").val(job_history.current_address);
                  $("#private_school_container").find("input[name=company_name]").val(job_history.company_name);
                  $("#private_school_container").find("input[name=salary]").val(job_history.salary);
                  $("#private_school_container").find("input[name=office_address]").val(job_history.office_address);
                }

              }

        })

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


reg_feedback();
var exam_date=localStorage.getItem("exam_date");

loadSchoolList();
</script>
<script>
    $( "#submit_btn_mac" ).click(function() {
      console.log("*****",allFilled('#cpa_mac_form'));
        if(allFilled('#cpa_mac_form')){
            $('#macModal').modal('show');
        }
        else{
        }
    });
    $( "#submit_btn_ss" ).click(function() {
        if(allFilled('#cpa_ss_form')){
            $('#selfStudyModal').modal('show');
        }
        else{
        }
    });
    $( "#submit_btn_pp" ).click(function() {
        if(allFilled('#cpa_pp_form')){
            $('#privateSchoolModal').modal('show');
        }
        else{
        }
    });

    function allFilled(form_id) {
        var filled = true;

        $(form_id+' input').each(function() {
            // if($(this).attr('id')=="direct_access_no_mac")
            // {   }
            // else if( $(this).attr('id')=="entry_success_no_mac")
            // {   }
            // else{
            //     if($(this).val() == ''  ) filled = false;
            // }
            console.log($(this).attr('id'));
            if($('input[type=text]') && $(this).val() == ''  ) filled = false;
            //if($(this).is(':checkbox') && $('input[type=checkbox][name=reg_reason]:checked').length == 0) filled = false;
        });
        return filled;
    }


    // function allFilled(form_id) {​
    //     var filled = true;
    //     $(form_id+' input').each(function() {​
    //     console.log($(this).attr('id'));
    //     if($('input[type=text]') && $(this).val() == ''  ) filled = false;
    //             }​);
    //     return filled;
    // }​






    // mac
    $('#cash_img_mac').click(function() {
        $('#cpa1mac_btn').prop('disabled', false);
    });

    $('#cb_img').click(function() {
        $('#cpa1mac_btn').prop('disabled', true);
    });

    $('#mpu_img').click(function() {
        $('#cpa1mac_btn').prop('disabled', true);
    });
    $('#cpa1mac_btn').prop('disabled', true);

    $('#cpa1mac_btn').click(function () {
        setTimeout(function () {
            $('#exampleModal3').modal('hide');
        }, 1000);
    });

    // private
    $('#cash_img_private').click(function() {
        $('#cpa1private_btn').prop('disabled', false);
    });

    $('#cb_img').click(function() {
        $('#cpa1private_btn').prop('disabled', true);
    });

    $('#mpu_img').click(function() {
        $('#cpa1private_btn').prop('disabled', true);
    });
    $('#cpa1private_btn').prop('disabled', true);

    $('#cpa1private_btn').click(function () {
        setTimeout(function () {
            $('#privateSchoolModal').modal('hide');
        }, 1000);
    });

    // self
    $('#cash_img_self').click(function() {
        $('#cpa1self_btn').prop('disabled', false);
    });

    $('#cb_img').click(function() {
        $('#cpa1self_btn').prop('disabled', true);
    });

    $('#mpu_img').click(function() {
        $('#cpa1self_btn').prop('disabled', true);
    });
    $('#cpa1self_btn').prop('disabled', true);

    $('#cpa1self_btn').click(function () {
        setTimeout(function () {
            $('#exampleModal2').modal('hide');
        }, 1000);
    });

    // $(document).on('click', '#macChannel', function () {
    //         setTimeout(function() {$('#macModal').modal('hide');}, 1000);
    //         $('#macPaymentModal').modal('show');
    //         return true;
    //     })
    //     $('#mac_btn').click(function() {
    //         setTimeout(function() {
    //             $('#macPaymentModal').modal('hide');
    //         }, 1000);
    //     });

    //     $(document).on('click', '#schoolChannel', function () {
    //         setTimeout(function() {$('#privateSchoolModal').modal('hide');}, 1000);
    //         $('#schoolPaymentModal').modal('show');
    //         return true;
    //     })
    //     $('#private_btn').click(function() {
    //         setTimeout(function() {
    //             $('#schoolPaymentModal').modal('hide');
    //         }, 1000);
    //     });

    //     $(document).on('click', '#selfChannel', function () {
    //         setTimeout(function() {$('#selfStudyModal').modal('hide');}, 1000);
    //         $('#selfPaymentModal').modal('show');
    //         return true;
    //     })
    //     $('#self_btn').click(function() {
    //         setTimeout(function() {
    //             $('#selfPaymentModal').modal('hide');
    //         }, 1000);
    //     });
</script>
@endpush
