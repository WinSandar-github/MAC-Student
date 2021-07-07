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

            <img class="shape-1 animation-round" src="assets/images/shape/shape-8.png" alt="Shape">

            <img class="shape-2" src="assets/images/shape/shape-23.png" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="assets/images/shape/shape-5.png" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="assets/images/shape/shape-6.png" alt="Shape">

            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="assets/images/shape/shape-24.png" alt="Shape">

            <img class="shape-author" src="assets/images/author/author-11.jpg" alt="Shape">

        </div>

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">
            
            <div class="blog-details-comment">
                <div class="comment-form">
                <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        {!! Form::open(array('url' => 'dasubmit','method'=>'POST', 'files'=>'true')) !!}
                            <div class="row">
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">အမည်(မြန်မာ)</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="အမည်(မြန်မာ)" name="name_mm" class="form-control" value="{{ old('name_mm') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">အမည်(အင်္ဂလိပ်)</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="အမည်(အင်္ဂလိပ်)" name="name_eng" class="form-control" value="{{ old('name_eng') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">နိုင်ငံသားစီစစ်ရေးကတ်ပြားအမှတ်</label>
                                            </div>
                                        </td>
                                        <td width="15%">
                                           <div class="courses-select">
                                                <select class="form-control" name="nrc_state_region" id="nrc_state_region">
                                                    @foreach($nrc_regions as $region)
                                                        <option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
                                                            {{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        <td width="20%"> 
                                            <div class="courses-select">
                                                <select class="form-control" name="nrc_township" id="nrc_township" >
                                                    @foreach($nrc_townships as $township)
                                                        <option value="{{ $township['township_mm'] }}">
                                                            {{ $township['township_mm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td width="15%">
                                            <div class="courses-select">
                                                <select class="form-control" name="nrc_citizen" id="nrc_citizen" >
                                                    @foreach($nrc_citizens as $citizen)
                                                    <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
                                                        {{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td width="25%">
                                            <div class="single-form">
                                                <input type="text" name="nrc_number" id="nrc_number" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  maxlength="6" minlength="6" placeholder="" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">အဘအမည်(မြန်မာ)</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="အဘအမည်(မြန်မာ)" name="father_name_mm" class="form-control" value="{{ old('father_name_mm') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">အဘအမည်(အင်္ဂလိပ်</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="အဘအမည်(အင်္ဂလိပ်)" name="father_name_eng" class="form-control" value="{{ old('father_name_eng') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">လူမျိူး</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="လူမျိူး" name="race" class="form-control" value="{{ old('race') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">ဘာသာ</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="ဘာသာ" name="religion" class="form-control" value="{{ old('religion') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">မွေးသဣရာဇ်</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" name="date_of_birth" class="form-control" placeholder="dd/mm/yyyy" value="{{ old('date_of_birth') }}"  required>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">ဖုန်းနံပါတ်</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="ဖုန်းနံပါတ်" name="phone" class="form-control" value="{{ old('phone') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">နေရပ်လိပ်စာ</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="နေရပ်လိပ်စာ" name="address" class="form-control" value="{{ old('address') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="အမြဲတမ်းနေရပ်လိပ်စာ" name="current_address" class="form-control" value="{{ old('current_address') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">Government Staff</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" placeholder="Government Staff" name="gov_staff" class="form-control" value="{{ old('gov_staff') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="registration_no">
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">ရက်စွဲ</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="text" name="date" class="form-control" placeholder="dd/mm/yyyy" required>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="approve_reject_status">
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">Upload Photo</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="file" placeholder="upload photo" name="image" required="" style="padding: 2%;">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">အီးမေးလ်</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="email" placeholder="အီးမေးလ်" name="email" class="form-control" value="{{ old('email') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%">
                                    <tr>
                                        <td width="25%">
                                            <div class="single-form">
                                                <label class="form-control">Password</label>
                                            </div>
                                        </td>
                                        <td width="75%">
                                            <div class="single-form">
                                                <input type="password" placeholder="Password" name="password" class="form-control" value="{{ old('password') }}" required="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <div class="col-md-12">
                                    <!-- Form Wrapper Start -->
                                    <div class="single-form text-center">
                                        <button class="btn btn-primary btn-hover-dark">Submit Now</button>
                                    </div>
                                    <!-- Form Wrapper End -->
                                </div>
                            </div>
                        {!! Form::close() !!}
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
        $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
        });
        $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
        });
    });
</script>
@endpush