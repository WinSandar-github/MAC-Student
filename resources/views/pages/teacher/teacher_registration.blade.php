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
                    <h2 class="title">Teacher Registration  <span>Form</span></h2>
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
                                <div class="col-md-1"></div>
                                <div class="col-md-3 text-center">
                                    <img id="preview-image-before-upload" src="{{ asset('img/logo/no_photo.png') }}" alt="preview image" style="max-height: 150px;">
                                    <div class=" mt-3 mb-3 col-auto">
                                        <input type="file" class="form-control" />                                            
                                    </div>
                                </div>

                                <div class="col-md-4">
                                                                                
                                </div>
                            </div><br> 

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('အမည်(မြန်မာ)') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="အမည်(မြန်မာ)" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('အမည်(အင်္ဂလိပ်)') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="အမည်(အင်္ဂလိပ်)" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('အဘအမည် (မြန်မာ)') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" name="father_name_MM" class="form-control" placeholder="အဘအမည် (မြန်မာ)" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('အဘအမည် (အင်္ဂလိပ်)') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" name="father_name_eng" class="form-control" placeholder="အဘအမည် (အင်္ဂလိပ်)" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label ">{{ __('၃။') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('နိုင်ငံသားစီစစ်ရေးကတ်ပြားအမှတ်') }}</label>
                                <div class="col-md-8">
                                    <div class="row" >
                                        <div class="col-md-2 col-5 pr-1">
                                            <select class="form-control" name="nrc_state_region" id="nrc_state_region" >
                                                @foreach($nrc_regions as $region)
                                                    <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-7 px-1">
                                            <select class="form-control" name="nrc_township" id="nrc_township" >
                                                @foreach($nrc_townships as $township)
                                                    <option value="{{ $township['township_mm'] }}">
                                                        {{ $township['township_mm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-5 px-1">
                                            <select class="form-control" name="nrc_citizen" id="nrc_citizen" >
                                                @foreach($nrc_citizens as $citizen)
                                                <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                    {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-5 col-7 pl-1">
                                            <input type="text" name="nrc_number" id="nrc_number" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  maxlength="6" minlength="6" placeholder="" style="height: 38px">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('တယ်လီဖုန်းနံပါတ်') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" placeholder="တယ်လီဖုန်းနံပါတ်" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('အီးမေးလ်') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="အီးမေးလ်(Email)" required>
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('ပညာအရည်အချင်း (ရရှိထားသော တက္ကသိုလ်/ဘွဲ့/ဒီပလိုမာ)') }}</label>
                                <div class="col-md-8">
                                    <table class="table education1 table-bordered input-table">
                                        <thead>
                                            <tr > 
                                                <th class="less-font-weight text-center" width="10%">စဉ်</th> 
                                                <th class="less-font-weight text-center"  width="80%">ပညာအရည်အချင်း</th>                                                        
                                                <th class="text-center" width="10%"><input type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowEducation("education1")' value="+"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                <label class="col-md-3 col-form-label">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="radio" name="civil-servant1" id="yes-servant">
                                            <label class="form-check-label" for="yes-servant">{{ __('ဟုတ်') }}</label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="radio" name="civil-servant1" id="no-servant">
                                            <label class="form-check-label" for="no-servant">{{ __('မဟုတ်') }}</label>
                                        </div>
                                    </div>                                                                                        
                                </div>
                            </div></br>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                <label class="col-md-3 col-form-label">{{ __('သင်ကြားမည့်သင်တန်းနှင့် ဘာသာရပ်များ') }}</label><br>
                            </div>    

                            <div class="row">
                                <label class="col-md-1 col-form-label" >{{ __('') }}</label>
                                <label class="col-md-2 col-form-label" >{{ __('(က)လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း') }}</label>
                                <div class="col-md-8">
                                    <table class="table subject1 table-bordered input-table">
                                        <thead>
                                            <tr>  
                                                <th class="less-font-weight text-center"  width="10%">စဉ်</th>                                                      
                                                <th class="less-font-weight text-center"  width="80%">လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း</th>                                                        
                                                <th  class="less-font-weight text-center"  width="10%"><input type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowSubject("subject1")' value="+"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                       
                                        </tboddy>
                                    </table>
                                </div>
                            </div>

                            <div class="row" >
                                <label class="col-md-1 col-form-label ">{{ __('') }}</label>
                                <label class="col-md-2 col-form-label" >{{ __('(ခ)ဒီပလိုမာစာရင်းကိုင်သင်တန်း') }}</label>
                                <div class="col-md-8">
                                    <table class="table dipSubject table-bordered input-table">
                                        <thead>
                                            <tr>   
                                                <th class="less-font-weight text-center" width="10%">စဉ်</th>                                                     
                                                <th class="less-font-weight text-center" width="80%">ဒီပလိုမာစာရင်းကိုင်သင်တန်း</th>                                                        
                                                <th class="less-font-weight text-center" width="10%"><input type="button" class="btn btn-success btn-sm btn-plus" onclick='addRowDipSubject("dipSubject")' value="+"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                       
                                        </tboddy>
                                    </table>
                                </div>
                            </div>                                                             
                                    
                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('သင်ကြားမည့်ဘာသာရပ်အတွက် သင်ကြားမှုနှင့် အခြားအတွေ့အကြုံများ') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <textarea class="form-control " name="" rows="3" placeholder="သင်ကြားမည့်ဘာသာရပ်အတွက် သင်ကြားမှုနှင့် အခြားအတွေ့အကြုံများ" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါ အချက်အလက်များမှန်ကန်ကြောင်းကတိပြုဝန်ခံပါသည်။') }}</label>                                        
                            </div>

                            <div class="row">
                                <label class="col-md-1 col-form-label">{{ __('') }}</label>
                                <label class="col-md-2 col-form-label">{{ __('ရက်စွဲ') }}</label>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="register_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                            </div>
                                        </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="လျှောက်ထားသူအမည်" required>
                                    </div>
                                </div>
                            </div>
                                    

                            <div class="row">
                                <label class="col-md-1 col-form-label ">{{ __('မှတ်ချက်။') }}</label>
                                <label class="col-md-11 col-form-label" >{{ __('နိုင်ငံသားစိစစ်ရေးကတ်၊ ဘွဲ့လက်မှတ် မိတ္တူများနှင့် သင်ကြားမှုနှင့် အခြားလုပ်ငန်းအတွေ့အကြုံများအတွက် အထောက်အထားများ ဓာတ်ပုံအပို (၂) ပုံ တင်ပြရမည်။') }}</label>                                
                            </div>
                                                
                            <div class="row">
                                <div class="col-md-2 offset-md-5">
                                    <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Save') }}</button>
                                </div>
                            </div>
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
<script src="{{asset('assets/js/teacher_register.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
       $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#preview-image-before-upload').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
       });

        $("input[name='register_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
                allowInput:true
        });
    });
</script>
@endpush