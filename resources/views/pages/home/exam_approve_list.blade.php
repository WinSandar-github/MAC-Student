@extends('pages.home.announcement')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
                <input type="hidden" id="course_code" name="course_code" value="{{$course['code']}}">
                <div class="card">
                    <div class="card-header shadow-sm p-3 mb-3 rounded" style="background-color:#EEFBF3;">

                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="text-center m-3"> {{$course['name_mm']}}သင်တန်း အမှတ်စဥ် - {{$course['active_batch'][0]['number'] }}</h5>
                                <h5 class="text-center m-3"> Module အလိုက်ဖြေဆိုခွင့်ရရှိသူများစာရင်း</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                <div class="row mb-2">    
                                    <div class="card-body">
                                    <div class="col-md-1 pull-right"  >
                                        <button type="button" class="btn btn-primary btn-round m-0"
                                            id="search">Search</button>
                                    </div>
                                    
                                    <div class="col-md-2 mx-3 pull-right">
                                        
                                            <select class="form-control form-select" name="exam_department" id="exam_department" >
                                                <option value="" disabled selected>စာဖြေဌာန ရွေးချယ်ပါ</option>
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
                                </div>    
                                        <table width="100%" id="tbl_approve_exam" class="table table-hover text-nowrap ">
                                            <thead>
                                                <tr>
                                                    <th class="bold-font-weight" >No</th>
                                                    <th class="bold-font-weight" >အမည်</th>
                                                    <th class="bold-font-weight" >အဖအမည်</th>

                                                    <th class="bold-font-weight" >မှတ်ပုံတင်နံပါတ်</th>
                                                    
                                                    <th class="bold-font-weight" >ကိုယ်ပိုင်နံပါတ်</th>

                                                </tr>
                                            </thead>
                                            <tbody id="tbl_approve_exam_body" class="hoverTable">
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


@endsection

@push('scripts')
<script>
        $('document').ready(function(){
            var course_code = $('#course_code').val();
              showExamList(course_code);
        loadExamDepartment();

        })
        </script>


@endpush