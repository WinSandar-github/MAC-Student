@extends('pages.home.announcement')

@prepend('styles')
    <style>
       .card-header-blue{
        background-color:#EEFBF3;
        color:#FFFFFF;
        border-bottom:3px solid #BBB;
        box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Roboto', sans-serif;
        padding:0px;
        margin-top:0px;
        overflow:hidden;
        -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
    </style>
@endprepend

@section('content')
<div class="row bcolor"> 
    <div class="col-md-12">
            <input type="hidden" id="course_code" name="course_code" value="{{$course['code']}}">
            <div class="card">
                <div class="card-header shadow-sm p-3 mb-3 rounded" style="background-color:#EEFBF3;">
                    <div class="row">
                        <div class="col-md-12">
                            @php
                            $start_year = date('Y',strtotime($course['active_batch'][0]['start_date']));
                            @endphp
                            
                            <h5 class="text-center m-3"> {{$course['name_mm']}}သင်တန်း ({{$start_year}}-{{$start_year+1}})  </h5>
                            <h5 class="text-center m-3"> တက်ရောက်ခွင့်ရသူများစာရင်း</h5>

                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                {{--
                                    <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 text-left" style="font-weight:bold;">Name</div>
                                                <div class="col-md-7 text-left" style="padding-left:0px;">
                                                    <input type="text" name="filter_by_name" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                            <div class="col-md-1"></div>
                                                <div class="col-md-3 text-left" style="font-weight:bold;">Batch</div>
                                                <div class="col-md-7 text-left">
                                                    <select class="form-control form-select" name="selected_batch_id" id="selected_batch_id">
                                                        <option value="all" selected>All Batches</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 text-left" style="font-weight:bold;">NRC</div>
                                                <div class="col-md-7 text-left" style="padding-left:0px;">
                                                    <input type="text" name="filter_by_nrc" class="form-control" placeholder="eg. ၁/ကမတ(နိုင်)၁၂၃၄၅၆">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="vertical-align: top;">
                                            <button type="button" class="btn btn-primary btn-round m-0" onclick="getDAList('da_1')" id="search">Search</button>
                                        </div>
                                    </div>
                                </div>


                                --}}
                               
                                 <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <table width="100%" id="tbl_application" class="table table-hover text-nowrap ">
                                                <thead>
                                                    <tr>
                                                        <th class="bold-font-weight" >စဥ်</th>
                                                        <th class="bold-font-weight" >အမည်</th>
                                                        <th class="bold-font-weight" >နိင်ငံသားစိစစ်ရေးကဒ်ပြားအမှတ်</th>
                                                        <th class="bold-font-weight" >အဘအမည်</th>
                                                       

                                                    </tr>
                                                </thead>
                                                <tbody id="tbl_app_list_body" class="hoverTable">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                            
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


@endsection

@push('scripts')
<script>
        $('document').ready(function(){
            var course_code = $('#course_code').val();
              showAppList(course_code);
        })
        </script>


@endpush