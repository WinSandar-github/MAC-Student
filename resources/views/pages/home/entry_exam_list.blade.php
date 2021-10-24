@extends('pages.home.announcement')

@section('content')
<div class="row">
        <div class="col-md-12 text-center">
                    <div class="card">
                    <div class="card-header shadow-sm p-3 mb-3 rounded" style="background-color:#EEFBF3;">

                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="text-center m-3">{{$course['name_mm']}} အမှတ်စဥ် - {{$course['active_batch'][0]['number'] }}
                                     ဝင်ခွင့်စာမေးပွဲဖြေဆိုခွင့်ရှိသူများစာရင်း</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                  
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table width="100%"  id="tbl_entered_exam" class="table table-hover text-nowrap ">
                                                    <thead>
                                                        <tr>
                                                            <th class="bold-font-weight" >စဥ်</th>
                                                            <th class="bold-font-weight" >ခုံအမှတ်</th>
                                                            <th class="bold-font-weight" >အမည်</th>
                                                            <th class="bold-font-weight" >နိင်ငံသားစိစစ်ရေးကဒ်ပြားအမှတ်</th>
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
            url: BACKEND_URL + "/entered_exam_list",
            type: "POST",
            data: function (d) {
              
                // d.grade = 1;

            }
        },
        columns: [

            {
                data: null, render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { data: 'sr_no',name:'sr_no'},
            { data: 'student_info.name_mm', name: 'student_info.name_mm' },
            { data: 'nrc', name: 'nrc' },
            { data: 'student_info.father_name_mm', name: 'father_name_mm' },


        ],
            // "dom": '<"float-left"l><"float-right"f>rt<"bottom float-left"i><"bottom float-right"p><"clear">',

    });
            
        })
        </script>


@endpush