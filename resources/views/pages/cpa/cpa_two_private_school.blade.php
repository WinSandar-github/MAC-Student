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
                    <h2 class="title">CPA Two Registration  <span>Form</span></h2>
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
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <h5 class="card-title text-center">??????????????????????????????????????????????????????????????????????????????</h5>
                                        <h5 class="card-title text-center">??????????????????????????????????????????????????????????????????????????????(?????????????????????????????????) ??????????????????????????????????????????????????????????????????????????????</h5>

                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>

                        <form class="needs-validation" method="post" action="javascript:CPA2_Private_School_Submit();" enctype="multipart/form-data">
                        <input type="hidden" name="batch_id" value="{{$batch['id']}}"/>

                            <fieldset id="fieldset" >
                                <div class="row ">

                                    <div class="col-md-1 col-form-label">{{ __('??????') }}</div>
                                    <div class="col-md-5 col-form-label">???????????????????????????????????? ?????????????????????????????????????????????</div>
                                    <div class="col-md-5">
                                        <div>
                                            <input type="text" class="form-control" readonly value="{{$batch['name']}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                            <label class="col-form-label">{{ _('??????') }}</label>
                                        
                                    </div>
                                    <div class="col-md-11">
                                            <label class="col-form-label">{{ _('?????????????????????????????????????????????????????????????????????????????? (?????????????????????????????????) ????????????????????????????????????????????????????????????????????????') }}</label>
                                        
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5">
										<div>
                                    		<label class="col-form-label">{{ _('(???) ????????????/???') }}</label>
                                    	</div>
									</div>
                                    <div class="col-md-5"> 
                                            <input type="text" class="form-control" placeholder="??? ??? ???????????? (MMM-YYYY)" id="cpa_one_pass_date" value="" required>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5">
                                            <label class="col-form-label">{{ _('(???) ?????????????????????????????????????????????') }}</label>
                                    </div>
                                    <div class="col-md-5">
                                            <input type="text" class="form-control" id="cpa_one_access_no" value="" placeholder="?????????????????????????????????????????????" required>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-5"><div>
                                            <label class="col-form-label">{{ _('(???) ???????????????') }}</label>
                                    </div></div>
                                    <div class="col-md-5"><div>
                                            <input type="text" class="form-control" id="cpa_one_success_no" value="" placeholder="???????????????" required>
                                    </div></div>
                                </div><br/>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('??????') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(???)') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('?????????????????????????????????????????????') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_no" class="form-control" placeholder="?????????????????????????????????????????????" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(???)') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('?????????????????????') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                            <input type="text" name="batch_part_no" class="form-control" placeholder="?????????????????????" id="" >
                                        
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label class="col-md-1 col-form-label">{{ __('') }}</label>                                                        
                                    <label class="col-md-1 col-form-label">{{ __('(???)') }}</label>
                                    <label class="col-md-4 col-form-label">{{ __('?????????????????????????????????????????????') }}</label>                                                  
                                    
                                    <div class="col-md-5">
                                        <input type="text" name="batch_personal_no" class="form-control" placeholder="?????????????????????????????????????????????" id="" >
                                    
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </fieldset>
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
$(document).ready(function (e)
{
    $("#cpa_one_pass_date").flatpickr({
            enableTime: false,
            dateFormat: "M-Y",
            allowInput: true,
    });
});
</script>
@endpush
