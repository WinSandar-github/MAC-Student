@extends('pages.home.announcement')

@section('content')
<div class="row">
    <div class="col-md-12 ">
            <input type="hidden" id="course_code" name="course_code" value="{{$course['code']}}">
            <div class="card">
            <div class="card-header shadow-sm p-3 mb-3 rounded" style="background-color:#EEFBF3;">

                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-center m-3"> {{$course['name_mm']}} အမှတ်စဥ် - {{$course['active_batch'][0]['number'] }} စာမေးပွဲတွင်</h5>
                            <h5 class="text-center m-3"> Module အလိုက်ဖြေဆိုရန် မှတ်ပုံတင်ထားသူများစာရင်း</h5>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                {{-- <div class="card-header">
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

                                

                                </div> --}}
                                 <div class="card-body">
                                     
                                 
                                       
                                             
                                            <div class="col-md-1 pull-right"  >
                                                <button type="button" class="btn btn-primary btn-round m-0"
                                                    id="search">Search</button>
                                            </div>
                                            <div class="col-md-2 mx-3 pull-right">
                                                
                                                <select class="form-control form-select" name="student_type" id="student_type">
                                                    <option value="" selected >Select Student Type</option>
                                                     
                                                    <option value="2">MAC</option>
                                                    <option value="1">Private School</option>
                                                    <option value="0">Selfstudy</option>

                                                    
                                                </select>
                                            </div>
                                            <div class="col-md-2 pull-right">
                                                
                                                <select class="form-control form-select" name="selected_module" id="selected_module">
                                                    <option value="" selected >Select Module</option>
                                                    @foreach($modules as $module)
                                                    <option value="{{$module['id']}}">{{$module['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                           
                                                
                                        

                                            <table width="100%" class="tbl_reg_list table table-hover text-nowrap ">
                                                <thead>
                                                    <tr>
                                                        <th class="bold-font-weight" >No</th>
                                                        <th class="bold-font-weight" >အမည်</th>
                                                        <th class="bold-font-weight" >အဖအမည်</th>
                                                        <th class="bold-font-weight" >မှတ်ပုံတင်နံပါတ်</th>
                                                        
                                                        <th class="bold-font-weight" >ခုံနံပါတ်</th>
                                                 

                                                    </tr>
                                                </thead>
                                                <tbody id="tbl_reg_list_body" class="hoverTable">
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


@endsection

@push('scripts')
<script>
        $('document').ready(function(){
            var course_code = $('#course_code').val();
              showRegList(course_code);
        })
        </script>


@endpush