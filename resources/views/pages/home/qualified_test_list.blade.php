@extends('pages.home.announcement')

@section('content')
<div class="row">
        <div class="col-md-12 text-center">
                    <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="text-center m-3">အရည်အချင်းစစ် စာမေးပွဲဖြေဆိုခွင့်ရသူများစာရင်း</h5>
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table width="100%"  id="tbl_entered_exam" class="table table-hover text-nowrap ">
                                                    <thead>
                                                        <tr>
                                                            <th class="bold-font-weight" >စဥ်</th>
                                                            <th class="bold-font-weight" >အမည်</th>
                                                            <th class="bold-font-weight" >မှတ်ပုံတင်နံပါတ်</th>
                                                            <th class="bold-font-weight" >အဘအမည်</th>
                                                        
                                                            
                                                            

                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbl_entered_exam_body" class="hoverTable">
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
            $('#tbl_entered_exam').DataTable({
        scrollX: true,
        processing: false,
        serverSide: true,
        searching: false,
        paging: false,
        ajax: {
            url: BACKEND_URL + "/current_qt_list",
            type: "POST",
            data: function (d) {
              
               

            }
        },
        columns: [

            {
                data: null, render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { data: 'student_info.name_mm', name: 'student_info.name_mm' },
            { data: 'nrc', name: 'nrc' },
            { data: 'student_info.father_name_mm', name: 'father_name_mm' },


        ],
            // "dom": '<"float-left"l><"float-right"f>rt<"bottom float-left"i><"bottom float-right"p><"clear">',

    });
            
        })
        </script>


@endpush