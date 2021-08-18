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
                    <h2 class="title">Audit <span>Firm</span></h2>
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

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">
            
            <div class="blog-details-comment" id="app_form">
                <div class="comment-form">
                <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        <form id="audit_firm_form" method="post" action="javascript:createAuditFirm();" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-success mb-3" style="padding:3%;">
                                        <div class="card-body">
                                            <div class="row">
                                                <input type="hidden" value="1" name="audit_firm_type_id">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="5%"><label>1</label></td>
                                                        <td width="15%"><label>Accountancy Firm Registration No</label></td>
                                                        <td width="80%">
                                                            <div class="single-form">
                                                                <input type="text" name="accountancy_firm_reg_no" class="form-control" placeholder="Accountancy Firm Registration No" autocomplete="off" value="{{ old('accountancy_firm_reg_no') }}" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="5%"><label>2</label></td>
                                                        <td width="15%"><label>Accountancy Firm Name</label></td>
                                                        <td width="80%">
                                                            <div class="single-form">
                                                                <input type="text" name="accountancy_firm_name"  class="form-control  @error('name') is-invalid @enderror" placeholder="Accountancy Firm Name" autocomplete="off" value="{{ old('accountancy_firm_name') }}" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="5%"><label>3</label></td>
                                                        <td width="15%"><label>Address Of Practice(Head Office</label></td>
                                                        <td width="20%">
                                                            <div class="single-form">
                                                                <input type="text" name="township" class="form-control" placeholder="Township" autocomplete="off" value="{{ old('township') }}" required="">
                                                            </div>
                                                        </td>
                                                        <td width="20%">
                                                            <div class="single-form">
                                                                <input type="text" name="post_code" class="form-control" placeholder="Post Code" autocomplete="off" value="{{ old('post_code') }}" required="">
                                                            </div>
                                                        </td>
                                                        <td width="20%">
                                                            <div class="single-form">
                                                                <input type="text" name="city" class="form-control" placeholder="City" autocomplete="off" value="{{ old('city') }}" required="">
                                                            </div>
                                                        </td>
                                                        <td width="20%">
                                                            <div class="single-form">
                                                                <input type="text" name="state" class="form-control" placeholder="State/Region" autocomplete="off" value="{{ old('state') }}" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="20%">
                                                        </td>
                                                        <td width="25%">
                                                            <div class="single-form">
                                                                <input type="text" name="phone_no" class="form-control" placeholder="Telephone" autocomplete="off" value="{{ old('phone_no') }}" required="">
                                                            </div>
                                                        </td>
                                                        <td width="30%">
                                                            <div class="single-form">
                                                                <input type="email" name="h_email" class="form-control" placeholder="Email Address" autocomplete="off" value="{{ old('h_email') }}" required="">
                                                            </div>
                                                        </td>
                                                        <td width="30%">
                                                            <div class="single-form">
                                                                <input type="text" name="website" class="form-control" placeholder="Website Address" autocomplete="off" value="{{ old('website') }}" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="5%"><label>4</label></td>
                                                        <td width="15%"><label>Branch Office</label></td>
                                                        <td width="80%">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <table class="table branch table-bordered input-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="less-font-weight">Name</th>
                                                                                <th class="less-font-weight">Township</th>
                                                                                <th class="less-font-weight">Post Code</th>
                                                                                <th class="less-font-weight">City</th>
                                                                                <th class="less-font-weight">State</th>
                                                                                <th class="less-font-weight" colspan="2">Telephone Number</th>
                                                                                <th class="less-font-weight">Email</th>
                                                                                <th class="less-font-weight">Website</th>
                                                                                <th >

                                                                                    <button class="btn btn-primary btn-sm" type="button" onclick='addRowBranch("branch")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </th>
                                                                            </tr>
                                                                        <thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><input type="text" name="bo_branch_name[]" class="form-control" autocomplete="off"></td>
                                                                                <td><input type="text" name="bo_township[]" class="form-control" autocomplete="off"></td>
                                                                                <td><input type="text" name="bo_post_code[]" class="form-control" autocomplete="off"></td>
                                                                                <td><input type="text" name="bo_city[]" class="form-control" autocomplete="off"></td>
                                                                                <td><input type="text" name="bo_state_region[]" class="form-control" autocomplete="off"></td>
                                                                                <td>
                                                                                    <input type="text" name="bo_phone[]" class="form-control" autocomplete="off">
                                                                                </td>
                                                                                <td>
                                                                                    <button class="btn btn-primary btn-sm" type="button" onclick='addInputTele("branch")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>

                                                                                </td>
                                                                                <td><input type="text" name="bo_email[]" class="form-control" autocomplete="off"></td>
                                                                                <td><input type="text" name="bo_website[]" class="form-control" autocomplete="off"></td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td><label>5</label></td>
                                                        <td><label>Organization Structure</label></td>
                                                    </tr>
                                                </table>
                                            </div><br>
                                            <div class='row organization_data'>

                                            </div><br/>
                                            <div id="sole-proprietorship">
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-10">
                                                            <div class="card">
                                                                <div class="card-body">                                                                                                        
                                                                    <div class="row">                                                                    
                                                                        <label class="col-md-12 col-form-label"><b>For Sole Proprietorship</b></label>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(a)Copy of Public Practice Accountant Certificate</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls1">
                                                                        <div class="entry1">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="ppa_certis[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls1","entry1")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>   

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(b)Copy of stationery/letterhead to be used in signing of auditor's report</label>                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls2">
                                                                        <div class="entry2">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="letterheads[]">                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls2","entry2")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(c)Copy of Tax clearance from Internal Revenue Department</label>                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls3">
                                                                        <div class="entry3">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="tax_clearances[]">                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls3","entry3")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(d)Representative Letter and Copy of representative's NRC Card if Not Self-Registration</label>                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls4">
                                                                        <div class="entry4">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="representatives[]">                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls4","entry4")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                                                                     
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>                                                       
                                            </div>

                                            <div id="partnership">
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-10">
                                                            <div class="card">
                                                                <div class="card-body">                                                                                                        
                                                                    <div class="row">                                                                    
                                                                        <label class="col-md-12 col-form-label"><b>For Partnership</b></label>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(a)Copy of Public Practice Accountant Certificate all partners</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls9">
                                                                        <div class="entry9">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="ppa_certis[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls9","entry9")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(b)Copy of Certificate or Registration, if any</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls10">
                                                                        <div class="entry10">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="certi_or_regs[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls10","entry10")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(c)Copy of signed Partnership Deeds/ Memorandum of Agreement</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls11">
                                                                        <div class="entry11">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="deeds_memos[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls11","entry11")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(d)Copy of stationery/letterhead to be used in signing of auditor's report</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls12">
                                                                        <div class="entry12">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="letterheads[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls12","entry12")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(e)Copy of Tax clearance from Internal Revenue Department</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls13">
                                                                        <div class="entry13">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="tax_clearances[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls13","entry13")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(f)Representative Letter and Copy of representative's NRC Card if Not Self-Registration</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls14">
                                                                        <div class="entry14">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="representatives[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls14","entry14")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    
                                                                    
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>                                                       
                                            </div>

                                            <div id="company">
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-10">
                                                            <div class="card">
                                                                <div class="card-body">                                                                                                        
                                                                    <div class="row">                                                                    
                                                                        <label class="col-md-12 col-form-label"><b>For Company Incorporated</b></label>
                                                                    </div>

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(a)Copy of Public Practice Accountant Certificate all shareholders</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls19">
                                                                        <div class="entry19">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="ppa_certis[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls19","entry19")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                    
                                                                

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(b)Copy of Certificate of Incorporation</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls20">
                                                                        <div class="entry20">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="certificate_incors[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls20","entry20")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(c)Copy of signed Memorandum of Associations and Articles of Associations or constitution</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls21">
                                                                        <div class="entry21">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="memorandums[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls21","entry21")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(d)Copy of Form 6, Form 26 and Form E</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls22">
                                                                        <div class="entry22">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="form6_26e[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls22","entry22")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(e)Copy of Form A1 and/or Additional Form</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls23">
                                                                        <div class="entry23">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="form_a1[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls23","entry23")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(f)Copy of commercial tax registration certificate</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls24">
                                                                        <div class="entry24">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="tax_reg_certificate[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls24","entry24")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(g)Copy of stationery/letterhead to be used in signing of auditor's report</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls25">
                                                                        <div class="entry25">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="letterheads[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls25","entry25")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(h)Copy of Tax clearance from Internal Revenue Department</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls26">
                                                                        <div class="entry26">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="tax_clearances[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls26","entry26")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="row mb-3">
                                                                        <div class="form-group">
                                                                            <label class="form-label">(i)Representative Letter and Copy of representative's NRC Card if Not Self-Registration</label>
                                                                        
                                                                        </div>  
                                                                    </div>
                                                                    <div class="controls27">
                                                                        <div class="entry27">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-11 col-auto">
                                                                                    <input type="file" class="form-control" name="representatives[]">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-1 col-auto">
                                                                                    <button class="btn btn-primary btn-add btn-sm custom-btn" type="button" onclick='addInputFile("controls27","entry27")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    
                                                                                                                                                                                         
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>                                                       
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td><label style="margin-left: 43%;">6</label></td>
                                                        <td><label style="margin-left: 3%;">Sole Proprietor/Partners/Shareholders</label></td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="20%"></td>
                                                        <td width="80%">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <table id="myTable" class="table partner_list table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="less-font-weight" rowspan="2">Sr</th>
                                                                                <th class="less-font-weight" rowspan="2">Name</th>
                                                                                <th class="less-font-weight" rowspan="2">Public Private Reg.No</th>
                                                                                <th class="less-font-weight" colspan="2">Have authority to sing Auditors' report?</th>
                                                                                <th class="less-font-weight" rowspan="2" style="text-align: right;">

                                                                                    <button class="btn btn-primary btn-sm" type="button" onclick='addRowPartner("partner_list")'>
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </th>
                                                                            </tr>

                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td><input type="text" value="" name="foa_name[]" class="form-control" autocomplete="off"></td>
                                                                                <td><input type="text" value="" name="foa_pub_pri_reg_no[]" class="form-control" autocomplete="off"></td>
                                                                                <td>
                                                                                    <input type="radio" value="1" name="foa_authority_to_sign" id="report_yes">
                                                                                    <label class="form-check-label">Yes</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="radio" value="2" name="foa_authority_to_sign" id="report_yes">
                                                                                    <label class="form-check-label">No</label>
                                                                                </td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td><label style="margin-left: 25%;">7</label></td>
                                                        <td><label>Director(s)/Officer(s)</label></td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                    <td width="20%"></td>
                                                    <td width="80%">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <table id="myTable" class="table director table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="less-font-weight">Sr</th>
                                                                            <th class="less-font-weight">Name</th>
                                                                            <th class="less-font-weight">Position</th>
                                                                            <th class="less-font-weight" >CPA Reg.No/Qualification</th>
                                                                            <th class="less-font-weight" >Public Private Reg.No</th>
                                                                            <th class="less-font-weight" style="text-align: right;">

                                                                                <button class="btn btn-primary btn-sm" type="button" onclick='addRowDirector("director")'>
                                                                                    <i class="fa fa-plus"></i>
                                                                                </button>
                                                                            </th>
                                                                        </tr>

                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td><input type="text" value="" name="do_name[]" class="form-control" autocomplete="off"></td>
                                                                            <td><input type="text" value="" name="do_position[]" class="form-control" autocomplete="off"></td>
                                                                            <td><input type="text" value="" name="do_cpa_reg_no[]" class="form-control" autocomplete="off"></td>
                                                                            <td><input type="text" value="" name="do_pub_pri_reg_no[]" class="form-control" autocomplete="off"></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="5%"><label style="margin-left: 26%;">8</label></td>
                                                        <td width="15%"><label>Name Of Sole Proprietor/Managing Partner</label></td>
                                                        <td width="80%">
                                                            <div class="single-form">
                                                                <input type="text" name="name_sole_proprietor" class="form-control" autocomplete="off" value="{{ old('name_sole_proprietor') }}" required="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td><label style="margin-left: 10%;">9</label></td>
                                                        <td><label style="margin-left:-8%;">Total Staff</label></td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="20%"></td>
                                                        <td width="80%">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <table id="tbl_audit_total_staff" class="table text-nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="less-font-weight" ></th>
                                                                                <th class="less-font-weight">Total</th>
                                                                                <th class="less-font-weight">Audit Staff</th>
                                                                                <th class="less-font-weight">Non-Audit Staff</th>

                                                                            </tr>

                                                                        </thead>
                                                                        <tbody id="tbl_audit_total_staff_body">

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td><label style="margin-left: 7%;">10</label></td>
                                                        <td><label style="margin-left:-17%;">Audit Staff</label></td>
                                                    </tr>
                                                </table>
                                            </div><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="20%"></td>
                                                        <td width="80%">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <table id="tbl_audit_staff" class="table text-nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="less-font-weight" ></th>
                                                                                <th class="less-font-weight">Total</th>
                                                                                <th class="less-font-weight" >Full Time</th>
                                                                                <th class="less-font-weight" >Part Time</th>

                                                                            </tr>

                                                                        </thead>
                                                                        <tbody id="tbl_audit_staff_body">

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td><label style="margin-left: 9%;">11</label></td>
                                                        <td><label style="margin-left:-5%;">Types Of Service Provided</label></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="row type_service_provided"></div><br><br>

                                            <table width="100%">
                                                <tr>
                                                    <td width="5%">12</td>
                                                    <td width="15%"><label class="col-form-label">New Email</label>
                                                    </td>
                                                    <td width="80%">
                                                        <div class="single-form">
                                                            <input type="email" placeholder="New Email" name="email" class="form-control" value="{{ old('email') }}" required="">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table><br>
                                            <table width="100%">
                                                <tr>
                                                    <td width="5%">13</td>
                                                    <td width="15%"><label class="col-form-label">Password</label>
                                                    </td>
                                                    <td width="80%">
                                                        <div class="single-form">
                                                            <input type="password" placeholder="Password" name="password" class="form-control" value="{{ old('password') }}" required="">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table><br>

                                            <table width="100%">
                                                <tr>
                                                    <td width="5%">12</td>
                                                    <td width="15%"><label class="col-form-label">လျှောက်လွှာကြေး(၁၀၀၀ ကျပ်)</label>
                                                    </td>
                                                    <td width="80%">
                                                        <div class="form-group">
                                                            <a href="#" class="btn btn-sm btn-block btn-info">Choose Payment</a>
                                                            <input type="hidden" value="1000" name="form_fee">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table><br>

                                            <table width="100%">
                                                <tr>
                                                    <td width="5%">13</td>
                                                    <td width="15%"><label class="col-form-label">မှတ်ပုံတင်ကြေး Audit Report တွင်လက်မှတ်ရေးထိုးမည့်သူတစ်ဦးလျှင်(၁၀၀,၀၀၀ ကျပ်)</label>
                                                    </td>
                                                    <td width="80%">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                            <a href="#" class="btn btn-sm btn-block btn-info">Choose Payment</a>
                                                            <input type="hidden" value="100000" name="nrc_fee">
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table><br>

                                            <div class="row">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="5%"></td>
                                                        <td width="15%"><label>Declaration</label></td>
                                                        <td width="80%">
                                                            <div class="form-group">
                                                                I <input type="text" name="declaration" class=" @error('date_of_birth') is-invalid @enderror" autocomplete="off" value="{{ old('declaration') }}" required="">
                                                                (sole proprietor/ managing partner) representing all the members of the firm, confirm that the particulars stated in this form, attached supporting documents are correct.
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div><br>
                                            
                                            <div class="row">
                                                <div class="col-md-2 offset-md-5">
                                                    <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <!-- Form Wrapper End -->
                </div><br><br>
            </div>
        </div>
    </div>
    <!-- JavaScript Section -->
@endsection
@push('scripts')
@endpush
@push('scripts')
<script>
    loadAuditOrganization();
    loadAuditTypeOfService();
    loadAuditTotalStaffReg();
    loadAuditStaffReg();
</script>
@endpush
