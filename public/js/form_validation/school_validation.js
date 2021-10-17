$().ready(function (){
    if($("#school_register_form").validate({
        rules:{
            email : "required",
            password : "required",
            confirm_password : {
                required : true,
                equalTo : "#password"
            },
            profile_photo : "required",
            name_mm : "required",
            name_eng : "required",
            nrc_state_region : "required",
            nrc_township : "required",
            nrc_citizen : "required",
            nrc_number : {
                required : true,
            },
            nrc_front : "required",
            nrc_back : "required",
            father_name_mm : "required",
            father_name_eng : "required",
            dob : "required",
            phone : "required",
            current_address : "required",
            address : "required",
            school_name : "required",
            school_address:"required",
            school_location_attach:"required",
            own_type_letter:"required",
            "branch_sch_letter[]":"required",
            "degrees[]": "required",
            "degrees_certificates[]": "required",
            "attachment[]":"required",
            "attend_course[]":"required",
            
            "business_license[]":"required",
            "sch_establish_notes_attach[]":"required",
            "branch_school_address[]":"required",
            "branch_school_attach[]":"required",
            // branch_sch_own_type:{
            //     required : true,
            // },
            "establisher_name[]":"required",
            "establisher_nrc[]":"required",
            "establisher_cpa_papp_no[]":"required",
            "establisher_education[]":"required",
            "establisher_address[]":"required",
            "establisher_ph_number[]":"required",
            "establisher_email[]":"required",
            "govern_name[]":"required",
            "govern_nrc[]":"required",
            "govern_cpa_papp_no[]":"required",
            "govern_education[]":"required",
            "govern_responsibility[]":"required",
            "govern_email[]":"required",
            "govern_ph_number[]":"required",
            "teacher_registration_no[]":"required",
            "teacher_name[]":"required",
            "teacher_nrc[]":"required",
            "teacher_education[]":"required",
            "teaching_subject[]":"required",
            "teacher_ph_number[]":"required",
            "teacher_email[]":"required",
            "teacher_reg_copy[]":"required",
            "member_name[]":{
                required : "#school_type:checked"
            },
            "member_nrc[]":{
                required : "#school_type:checked"
            },
            "member_cpa_papp_no[]":{
                required : "#school_type:checked"
            },
            "member_education[]":{
                required : "#school_type:checked"
            },
            "member_responsibility[]":{
                required : "#school_type:checked"
            },
            "member_ph_number[]":{
                required : "#school_type:checked"
            },
            "member_email[]":{
                required : "#school_type:checked"
            },
            "bulding_type[]":"required",
            "building_measurement[]":"required",
            "floor_numbers[]":"required",
            "school_building_attach[]":"required",
            "classroom_number[]":"required",
            "classroom_measurement[]":"required",
            "student_num_limit[]":"required",
            "air_con[]":"required",
            "classroom_attach[]":"required",
            "toilet_type[]":"required",
            "toilet_number[]":"required",
            "toilet_attach[]":"required",
            "manage_room_numbers[]":"required",
            "manage_room_measurement[]":"required",
            "manage_room_attach[]":"required",
            
        },
        messages:{
            email : "Please enter your email",
            password : "Please provide your password",
            confirm_password : {
                required : "Please provide your password",
                equalTo : "Please enter the same password as above"
            },
            profile_photo : "Upload photo",
            name_mm : "Please enter your name",
            name_eng : "Please enter your name in english",
            nrc_state_region : "Please select one",
            nrc_township : "Please select one",
            nrc_citizen : "Please select one",
            nrc_number : {
                required : "Please enter your nrc number",
            },
            nrc_front : "Please upload nrc photo (front)",
            nrc_back : "Please upload nrc photo (front)",
            father_name_mm : "Please enter your father name",
            father_name_eng : "Please enter your father name in english",
            dob : "Select your date of birth",
            phone : "Please enter your phone number",
            current_address : "Please enter your current address",
            address : "Please enter your address",
            school_name : "ကျောင်းအမည် ထည့်ပါ",
            school_address:"ကျောင်းတည်နေရာလိပ်စာ ထည့်ပါ",
            school_location_attach:"ဓါတ်ပုံ ထည့်ပါ",
            own_type_letter:"သက်ဆိုင်သည့် အထောက်အထား စာချုပ်စာတမ်းများ ထည့်ပါ",
            "branch_sch_letter[]":"Please attach",
            "degrees[]": "Please enter your degress",
            "degrees_certificates[]": "Please attach certificates",
            "attachment[]":"Please Choose File",
            "attend_course[]":"သင်ကြားမည့်သင်တန်း ထည့်ပါ",
            "branch_school_address[]":"Please enter",
            "branch_school_attach[]":"Please attach",
            "branch_sch_own_type":"Please choose",
            "business_license[]":"Please choose file",
            "sch_establish_notes_attach[]":"Please choose file",
            "establisher_name[]":"Please enter",
            "establisher_nrc[]":"Please enter",
            "establisher_cpa_papp_no[]":"Please enter",
            "establisher_education[]":"Please enter",
            "establisher_address[]":"Please enter",
            "establisher_email[]":"Please enter",
            "establisher_ph_number[]":"Please enter",
            "govern_name[]":"Please enter",
            "govern_nrc[]":"Please enter",
            "govern_cpa_papp_no[]":"Please enter",
            "govern_education[]":"Please enter",
            "govern_responsibility[]":"Please enter",
            "govern_email[]":"Please enter",
            "govern_ph_number[]":"Please enter",
            "teacher_registration_no[]":"Please enter",
            "teacher_name[]":"Please enter",
            "teacher_nrc[]":"Please enter",
            "teacher_education[]":"Please enter",
            "teaching_subject[]":"Please enter",
            "teacher_ph_number[]":"Please enter",
            "teacher_email[]":"Please enter",
            "teacher_reg_copy[]":"Please choose file",
            "member_name[]":"Please enter",
            "member_nrc[]":"Please enter",
            "member_cpa_papp_no[]":"Please enter",
            "member_education[]":"Please enter",
            "member_responsibility[]":"Please enter",
            "member_ph_number[]":"Please enter",
            "member_email[]":"Please enter",
            "bulding_type[]":"Please enter",
            "building_measurement[]":"Please enter",
            "floor_numbers[]":"Please enter",
            "school_building_attach[]":"Please choose file",
            "classroom_number[]":"Please enter",
            "classroom_measurement[]":"Please enter",
            "student_num_limit[]":"Please enter",
            "air_con[]":"Please enter",
            "classroom_attach[]":"Please choose file",
            "toilet_type[]":"Please enter",
            "toilet_number[]":"Please enter",
            "toilet_attach[]":"Please choose file",
            "manage_room_numbers[]":"Please enter",
            "manage_room_measurement[]":"Please enter",
            "manage_room_attach[]":"Please choose file",
        },
        
        submitHandler: function(form) {
            var isValid,attachmentValid,own_type_letterValid,business_licenseValid,sch_establishValid,
            teacherValid,buldingValid,classroomValid,toiletValid,manage_roomValid,establisherValid,
            branchValid,governValid,memberValid;
                    var attachment = document.getElementsByName('attachment[]');  
                    for (var i = 0; i < attachment.length; i++){     
                        if(attachment[i].value==''){
                            attachment[i].focus(); 
                            isValid = false;
                            attachmentValid=false
                        }else{
                            isValid = true;
                            attachmentValid=true
                        }
                        
                        
                    } 
                    var own_type_letter = document.getElementsByName('own_type_letter[]');  
                    for (var i = 0; i < own_type_letter.length; i++){         
                        if (own_type_letter[i].value=='') 
                        { 
                            own_type_letter[i].focus(); 
                            isValid = false;            
                            own_type_letterValid=false;
                        }else{
                            isValid = true;
                            own_type_letterValid=true;
                        }
                    } 
                    var business_license = document.getElementsByName('business_license[]');  
                    for (var i = 0; i < business_license.length; i++){         
                        if (business_license[i].value=='') 
                        { 
                            business_license[i].focus(); 
                            isValid = false;            
                            business_licenseValid=false;
                        }else{
                            isValid = true;
                            business_licenseValid=true;
                        }
                    }
                    var sch_establish_notes_attach = document.getElementsByName('sch_establish_notes_attach[]');  
                    for (var i = 0; i < sch_establish_notes_attach.length; i++){         
                        if (sch_establish_notes_attach[i].value=='') 
                        { 
                            sch_establish_notes_attach[i].focus(); 
                            isValid = false;            
                            sch_establishValid=false;
                        }else{
                            isValid = true;
                            sch_establishValid=true;
                        } 
                    } 
                    var degrees = document.getElementsByName('degrees[]');  
                    for (var i = 0; i < degrees.length; i++){         
                        if (degrees[i].value=="") 
                        { 
                            degrees[i].focus(); 
                            isValid = false;            
                        }else isValid = true; 
                    } 
                    var degrees_certificates = document.getElementsByName('degrees_certificates[]');  
                    for (var i = 0; i < degrees_certificates.length; i++){         
                        if (degrees_certificates[i].value=="") 
                        { 
                            degrees_certificates[i].focus(); 
                            isValid = false;   
                               
                        }else isValid = true;
                            
                    } 
                    var row_branch_school = document.getElementById('tbl_branch_school').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
                    
                    if(row_branch_school >= 2){
                        var branch_school_address = document.getElementsByName('branch_school_address[]');  
                        for (var i = 0; i < branch_school_address.length; i++){         
                            if (branch_school_address[i].value=="") 
                            { 
                                branch_school_address[i].focus(); 
                                isValid = false;
                                branchValid = false;        
                            }else {
                                isValid = true;
                                branchValid = true;  
                            } 
                        }
                        var branch_school_attach = document.getElementsByName('branch_school_attach[]');  
                        for (var i = 0; i < branch_school_attach.length; i++){         
                            if (branch_school_attach[i].value=="") 
                            { 
                                branch_school_attach[i].focus(); 
                                isValid = false;            
                                branchValid = false;        
                            }else {
                                isValid = true;
                                branchValid = true;  
                            } 
                        }
                        var branch_sch_own_type = document.getElementById('branch_sch_own_type');  
                        for (var i = 0; i < branch_sch_own_type.length; i++){         
                            if (branch_sch_own_type[i].value=="") 
                            { 
                                branch_sch_own_type[i].focus(); 
                                isValid = false;            
                                branchValid = false;        
                            }else {
                                isValid = true;
                                branchValid = true;  
                            }  
                        }
                        var branch_sch_letter = document.getElementsByName('branch_sch_letter[]');  
                        for (var i = 0; i < branch_sch_letter.length; i++){         
                            if (branch_sch_letter[i].value=="") 
                            { 
                                branch_sch_letter[i].focus(); 
                               isValid = false;            
                                branchValid = false;        
                            }else {
                                isValid = true;
                                branchValid = true;  
                            } 
                        } 
                    }else branchValid = true;  
                    
                    //teacher bio
                    var row_teacher = document.getElementById('tbl_teacher_list_biography').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
                    if(row_teacher >= 2){
                        var teacher_registration_no = document.getElementsByName('teacher_registration_no[]');  
                        for (var i = 0; i < teacher_registration_no.length; i++){         
                            if (teacher_registration_no[i].value=="") 
                            { 
                                teacher_registration_no[i].focus(); 
                                isValid = false;
                                teacherValid = false ;           
                            }else {
                                isValid = true;
                                teacherValid = true;   
                            } 
                        } 
                        var teacher_name = document.getElementsByName('teacher_name[]');  
                        for (var i = 0; i < teacher_name.length; i++){         
                            if (teacher_name[i].value=="") 
                            { 
                                teacher_name[i].focus(); 
                                isValid = false;            
                                teacherValid = false ;           
                            }else {
                                isValid = true;
                                teacherValid = true;   
                            }  
                        } 
                        var teacher_education = document.getElementsByName('teacher_education[]');  
                        for (var i = 0; i < teacher_education.length; i++){         
                            if (teacher_education[i].value=="") 
                            { 
                                teacher_education[i].focus(); 
                                isValid = false;            
                                teacherValid = false ;           
                            }else {
                                isValid = true;
                                teacherValid = true;   
                            } 
                        } 
                        var teaching_subject = document.getElementsByName('teaching_subject[]');  
                        for (var i = 0; i < teaching_subject.length; i++){         
                            if (teaching_subject[i].value=="") 
                            { 
                                teaching_subject[i].focus(); 
                                isValid = false;            
                                teacherValid = false ;           
                            }else {
                                isValid = true;
                                teacherValid = true;   
                            } 
                        } 
                        var teacher_ph_number = document.getElementsByName('teacher_ph_number[]');  
                        for (var i = 0; i < teacher_ph_number.length; i++){         
                            if (teacher_ph_number[i].value=="") 
                            { 
                                teacher_ph_number[i].focus(); 
                                isValid = false;            
                                teacherValid = false ;           
                            }else {
                                isValid = true;
                                teacherValid = true;   
                            }  
                        } 
                        var teacher_email = document.getElementsByName('teacher_email[]');  
                        for (var i = 0; i < teacher_email.length; i++){         
                            if (teacher_email[i].value=="") 
                            { 
                                teacher_email[i].focus(); 
                                isValid = false;            
                                teacherValid = false ;           
                            }else {
                                isValid = true;
                                teacherValid = true;   
                            } 
                        } 
                        var teacher_reg_copy = document.getElementsByName('teacher_reg_copy[]');  
                        for (var i = 0; i < teacher_reg_copy.length; i++){         
                            if (teacher_reg_copy[i].value=="") 
                            { 
                                teacher_reg_copy[i].focus(); 
                                isValid = false;            
                                teacherValid = false ;           
                            }else {
                                isValid = true;
                                teacherValid = true;   
                            } 
                        } 
                    }else teacherValid = true;  

                    //bulding
                        var row_bulding = document.getElementById('tbl_bulding_type').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
                        if(row_bulding >= 2){
                            var bulding_type = document.getElementsByName('bulding_type[]');  
                            for (var i = 0; i < bulding_type.length; i++){         
                                if (bulding_type[i].value=="") 
                                { 
                                    bulding_type[i].focus(); 
                                    isValid = false;
                                    buldingValid=false;            
                                }else {
                                    isValid = true; 
                                    buldingValid=true; 
                                }
                            } 
                            var building_measurement = document.getElementsByName('building_measurement[]');  
                            for (var i = 0; i < building_measurement.length; i++){         
                                if (building_measurement[i].value=="") 
                                { 
                                    building_measurement[i].focus(); 
                                    isValid = false;            
                                    buldingValid=false;            
                                }else {
                                    isValid = true; 
                                    buldingValid=true; 
                                }
                            } 
                            var floor_numbers = document.getElementsByName('floor_numbers[]');  
                            for (var i = 0; i < floor_numbers.length; i++){         
                                if (floor_numbers[i].value=="") 
                                { 
                                    floor_numbers[i].focus(); 
                                    isValid = false;            
                                    buldingValid=false;            
                                }else {
                                    isValid = true; 
                                    buldingValid=true; 
                                } 
                            } 
                            var school_building_attach = document.getElementsByName('school_building_attach[]');  
                            for (var i = 0; i < school_building_attach.length; i++){         
                                if (school_building_attach[i].value=="") 
                                { 
                                    school_building_attach[i].focus(); 
                                    isValid = false;            
                                    buldingValid=false;            
                                }else {
                                    isValid = true; 
                                    buldingValid=true; 
                                } 
                            } 
                        }else buldingValid=true;
                        
                        //classroom
                        var row_classroom = document.getElementById('tbl_classroom').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
                        if(row_classroom >= 2){
                            var classroom_number = document.getElementsByName('classroom_number[]');  
                            for (var i = 0; i < classroom_number.length; i++){         
                                if (classroom_number[i].value=="") 
                                { 
                                    classroom_number[i].focus(); 
                                    isValid = false;            
                                    classroomValid=false;            
                                }else {
                                    isValid = true; 
                                    classroomValid=true; 
                                } 
                            } 
                            var classroom_measurement = document.getElementsByName('classroom_measurement[]');  
                            for (var i = 0; i < classroom_measurement.length; i++){         
                                if (classroom_measurement[i].value=="") 
                                { 
                                    classroom_measurement[i].focus(); 
                                    isValid = false;            
                                    classroomValid=false;            
                                }else {
                                    isValid = true; 
                                    classroomValid=true; 
                                } 
                            } 
                            var student_num_limit = document.getElementsByName('student_num_limit[]');  
                            for (var i = 0; i < student_num_limit.length; i++){         
                                if (student_num_limit[i].value=="") 
                                { 
                                    student_num_limit[i].focus(); 
                                    isValid = false;            
                                    classroomValid=false;            
                                }else {
                                    isValid = true; 
                                    classroomValid=true; 
                                }  
                            } 
                            var air_con = document.getElementsByName('air_con[]');  
                            for (var i = 0; i < air_con.length; i++){         
                                if (air_con[i].value=="") 
                                { 
                                    air_con[i].focus(); 
                                    isValid = false;            
                                    classroomValid=false;            
                                }else {
                                    isValid = true; 
                                    classroomValid=true; 
                                } 
                            } 
                            var classroom_attach = document.getElementsByName('classroom_attach[]');  
                            for (var i = 0; i < classroom_attach.length; i++){         
                                if (classroom_attach[i].value=="") 
                                { 
                                    classroom_attach[i].focus(); 
                                    isValid = false;            
                                    classroomValid=false;            
                                }else {
                                    isValid = true; 
                                    classroomValid=true; 
                                }  
                            } 
                        }else classroomValid=true;
                        
                        //toilet
                        var row_toilet = document.getElementById('tbl_toilet_type').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
                        if(row_toilet >= 2){
                            var toilet_type = document.getElementsByName('toilet_type[]');  
                            for (var i = 0; i < toilet_type.length; i++){         
                                if (toilet_type[i].value=="") 
                                { 
                                    toilet_type[i].focus(); 
                                    isValid = false;            
                                    toiletValid=false;            
                                }else {
                                    isValid = true; 
                                    toiletValid=true; 
                                }  
                            } 
                            var toilet_number = document.getElementsByName('toilet_number[]');  
                            for (var i = 0; i < toilet_number.length; i++){         
                                if (toilet_number[i].value=="") 
                                { 
                                    toilet_number[i].focus(); 
                                    isValid = false;            
                                    toiletValid=false;            
                                }else {
                                    isValid = true; 
                                    toiletValid=true; 
                                }  
                            } 
                            var toilet_attach = document.getElementsByName('toilet_attach[]');  
                            for (var i = 0; i < toilet_attach.length; i++){         
                                if (toilet_attach[i].value=="") 
                                { 
                                    toilet_attach[i].focus(); 
                                    isValid = false;            
                                    toiletValid=false;            
                                }else {
                                    isValid = true; 
                                    toiletValid=true; 
                                }  
                            }
                        }else toiletValid=true;
                         
                        //manage_room
                        var row_manage_room = document.getElementById('tbl_manage_room_numbers').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
                        if(row_manage_room >= 2){
                            var manage_room_numbers = document.getElementsByName('manage_room_numbers[]');  
                            for (var i = 0; i < manage_room_numbers.length; i++){         
                                if (manage_room_numbers[i].value=="") 
                                { 
                                    manage_room_numbers[i].focus(); 
                                    isValid = false;            
                                    manage_roomValid=false;            
                                }else {
                                    isValid = true; 
                                    manage_roomValid=true; 
                                }  
                            } 
                            var manage_room_measurement = document.getElementsByName('manage_room_measurement[]');  
                            for (var i = 0; i < manage_room_measurement.length; i++){         
                                if (manage_room_measurement[i].value=="") 
                                { 
                                    manage_room_measurement[i].focus(); 
                                    isValid = false;            
                                    manage_roomValid=false;            
                                }else {
                                    isValid = true; 
                                    manage_roomValid=true; 
                                }  
                            } 
                            var manage_room_attach = document.getElementsByName('manage_room_attach[]');  
                            for (var i = 0; i < manage_room_attach.length; i++){         
                                if (manage_room_attach[i].value=="") 
                                { 
                                    manage_room_attach[i].focus(); 
                                    isValid = false;            
                                    manage_roomValid=false;            
                                }else {
                                    isValid = true; 
                                    manage_roomValid=true; 
                                }  
                            }
                        }else manage_roomValid=true; 
                         
                        //establisher
                        var row_established = document.getElementById('tbl_sch_established_persons').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
                        if(row_established >= 2){
                            var establisher_name = document.getElementsByName('establisher_name[]');  
                            for (var i = 0; i < establisher_name.length; i++){         
                                if (establisher_name[i].value=="") 
                                { 
                                    establisher_name[i].focus(); 
                                    isValid = false;            
                                    establisherValid=false;            
                                }else {
                                    isValid = true; 
                                    establisherValid=true; 
                                }  
                            } 
                            var establisher_nrc = document.getElementsByName('establisher_nrc[]');  
                            for (var i = 0; i < establisher_nrc.length; i++){         
                                if (establisher_nrc[i].value=="") 
                                { 
                                    establisher_nrc[i].focus(); 
                                    isValid = false;            
                                    establisherValid=false;            
                                }else {
                                    isValid = true; 
                                    establisherValid=true; 
                                }  
                            } 
                            var establisher_cpa_papp_no = document.getElementsByName('establisher_cpa_papp_no[]');  
                            for (var i = 0; i < establisher_cpa_papp_no.length; i++){         
                                if (establisher_cpa_papp_no[i].value=="") 
                                { 
                                    establisher_cpa_papp_no[i].focus(); 
                                    isValid = false;            
                                    establisherValid=false;            
                                }else {
                                    isValid = true; 
                                    establisherValid=true; 
                                }  
                            } 
                            var establisher_education = document.getElementsByName('establisher_education[]');  
                            for (var i = 0; i < establisher_education.length; i++){         
                                if (establisher_education[i].value=="") 
                                { 
                                    establisher_education[i].focus(); 
                                    isValid = false;            
                                    establisherValid=false;            
                                }else {
                                    isValid = true; 
                                    establisherValid=true; 
                                }  
                            }
                            var establisher_address = document.getElementsByName('establisher_address[]');  
                            for (var i = 0; i < establisher_address.length; i++){         
                                if (establisher_address[i].value=="") 
                                { 
                                    establisher_address[i].focus(); 
                                    isValid = false;            
                                    establisherValid=false;            
                                }else {
                                    isValid = true; 
                                    establisherValid=true; 
                                }  
                            }
                            var establisher_ph_number = document.getElementsByName('establisher_ph_number[]');  
                            for (var i = 0; i < establisher_ph_number.length; i++){         
                                if (establisher_ph_number[i].value=="") 
                                { 
                                    establisher_ph_number[i].focus(); 
                                    isValid = false;            
                                    establisherValid=false;            
                                }else {
                                    isValid = true; 
                                    establisherValid=true; 
                                }  
                            }
                            var establisher_email = document.getElementsByName('establisher_email[]');  
                            for (var i = 0; i < establisher_email.length; i++){         
                                if (establisher_email[i].value=="") 
                                { 
                                    establisher_email[i].focus(); 
                                    isValid = false;            
                                    establisherValid=false;            
                                }else {
                                    isValid = true; 
                                    establisherValid=true; 
                                }  
                            } 
                        }else establisherValid=true;
                        
                        //govern
                        var row_governs = document.getElementById('tbl_sch_governs').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
                        if(row_governs >= 2){
                            var govern_name = document.getElementsByName('govern_name[]');  
                            for (var i = 0; i < govern_name.length; i++){         
                                if (govern_name[i].value=="") 
                                { 
                                    govern_name[i].focus(); 
                                    isValid = false;            
                                    governValid=false;            
                                }else {
                                    isValid = true; 
                                    governValid=true; 
                                }  
                            } 
                            var govern_nrc = document.getElementsByName('govern_nrc[]');  
                            for (var i = 0; i < govern_nrc.length; i++){         
                                if (govern_nrc[i].value=="") 
                                { 
                                    govern_nrc[i].focus(); 
                                    isValid = false;            
                                    governValid=false;            
                                }else {
                                    isValid = true; 
                                    governValid=true; 
                                }  
                            } 
                            var govern_cpa_papp_no = document.getElementsByName('govern_cpa_papp_no[]');  
                            for (var i = 0; i < govern_cpa_papp_no.length; i++){         
                                if (govern_cpa_papp_no[i].value=="") 
                                { 
                                    govern_cpa_papp_no[i].focus(); 
                                    isValid = false;            
                                    governValid=false;            
                                }else {
                                    isValid = true; 
                                    governValid=true; 
                                }  
                            } 
                            var govern_education = document.getElementsByName('govern_education[]');  
                            for (var i = 0; i < govern_education.length; i++){         
                                if (govern_education[i].value=="") 
                                { 
                                    govern_education[i].focus(); 
                                    isValid = false;            
                                    governValid=false;            
                                }else {
                                    isValid = true; 
                                    governValid=true; 
                                }  
                            }
                            var govern_responsibility = document.getElementsByName('govern_responsibility[]');  
                            for (var i = 0; i < govern_responsibility.length; i++){         
                                if (govern_responsibility[i].value=="") 
                                { 
                                    govern_responsibility[i].focus(); 
                                    isValid = false;            
                                    governValid=false;            
                                }else {
                                    isValid = true; 
                                    governValid=true; 
                                }  
                            }
                            var govern_ph_number = document.getElementsByName('govern_ph_number[]');  
                            for (var i = 0; i < govern_ph_number.length; i++){         
                                if (govern_ph_number[i].value=="") 
                                { 
                                    govern_ph_number[i].focus(); 
                                    isValid = false;            
                                    governValid=false;            
                                }else {
                                    isValid = true; 
                                    governValid=true; 
                                }  
                            }
                            var govern_email = document.getElementsByName('govern_email[]');  
                            for (var i = 0; i < govern_email.length; i++){         
                                if (govern_email[i].value=="") 
                                { 
                                    govern_email[i].focus(); 
                                    isValid = false;            
                                    governValid=false;            
                                }else {
                                    isValid = true; 
                                    governValid=true; 
                                }  
                            }
                        }else governValid=true;
                        
                        //member
                            var row_member = document.getElementById('tbl_member_list_biography').getElementsByTagName('tbody')[0].getElementsByTagName('tr').length;
                            if(row_member >=2){
                                
                                var member_name = document.getElementsByName('member_name[]');  
                                for (var i = 0; i < member_name.length; i++){         
                                    if (member_name[i].value=="") 
                                    { 
                                        member_name[i].focus(); 
                                        isValid = false;            
                                        memberValid=false;            
                                    }else {
                                        isValid = true; 
                                        memberValid=true; 
                                    }  
                                } 
                                var member_nrc = document.getElementsByName('member_nrc[]');  
                                for (var i = 0; i < member_nrc.length; i++){         
                                    if (member_nrc[i].value=="") 
                                    { 
                                        member_nrc[i].focus(); 
                                        isValid = false;            
                                        memberValid=false;            
                                    }else {
                                        isValid = true; 
                                        memberValid=true; 
                                    }  
                                } 
                                var member_cpa_papp_no = document.getElementsByName('member_cpa_papp_no[]');  
                                for (var i = 0; i < member_cpa_papp_no.length; i++){         
                                    if (member_cpa_papp_no[i].value=="") 
                                    { 
                                        member_cpa_papp_no[i].focus(); 
                                        isValid = false;            
                                        memberValid=false;            
                                    }else {
                                        isValid = true; 
                                        memberValid=true; 
                                    }  
                                } 
                                var member_education = document.getElementsByName('member_education[]');  
                                for (var i = 0; i < member_education.length; i++){         
                                    if (member_education[i].value=="") 
                                    { 
                                        member_education[i].focus(); 
                                        isValid = false;            
                                        memberValid=false;            
                                    }else {
                                        isValid = true; 
                                        memberValid=true; 
                                    }  
                                }
                                var member_responsibility = document.getElementsByName('member_responsibility[]');  
                                for (var i = 0; i < member_responsibility.length; i++){         
                                    if (member_responsibility[i].value=="") 
                                    { 
                                        member_responsibility[i].focus(); 
                                        isValid = false;            
                                        memberValid=false;            
                                    }else {
                                        isValid = true; 
                                        memberValid=true; 
                                    }  
                                }
                                var member_ph_number = document.getElementsByName('member_ph_number[]');  
                                for (var i = 0; i < member_ph_number.length; i++){         
                                    if (member_ph_number[i].value=="") 
                                    { 
                                        member_ph_number[i].focus(); 
                                        isValid = false;            
                                        memberValid=false;            
                                    }else {
                                        isValid = true; 
                                        memberValid=true; 
                                    }  
                                }
                                var member_email = document.getElementsByName('member_email[]');  
                                for (var i = 0; i < member_email.length; i++){         
                                    if (member_email[i].value=="") 
                                    { 
                                        member_email[i].focus(); 
                                        isValid = false;            
                                        memberValid=false;            
                                    }else {
                                        isValid = true; 
                                        memberValid=true; 
                                    }  
                                }
                            }else memberValid=true; 
                        
                        
            if(isValid==true){
                if(attachmentValid==true && own_type_letterValid==true && business_licenseValid==true && sch_establishValid==true &&
                    branchValid==true && teacherValid==true && buldingValid==true && classroomValid==true && toiletValid==true &&
                    manage_roomValid==true && establisherValid==true && governValid==true && memberValid==true)
                    {
                        $( "#school_submit" ).click(function(e) {
    
    
                            var send_data = new FormData();
                              send_data.append('email',$("input[name='email']").val());
                              send_data.append('nrc_state_region',$("#nrc_state_region").val());
                              send_data.append('nrc_township',$("#nrc_township").val());
                              send_data.append('nrc_citizen',$("#nrc_citizen").val());
                              send_data.append('nrc_number',$("#nrc_number").val());
                            
                              
                                $.ajax({
                                  url: BACKEND_URL+"/checkEmail",
                                  type: 'post',
                                  data:send_data,
                                  contentType: false,
                                  processData: false,
                                  success: function(result){
                                      
                                      if(result==2){
                                          $('#student_info_id').val(0);
                                          $('#schoolModal').modal('show');
                                          send_email(); 
                                      }else if(result==1){                    
                                        Swal.fire("Email has been used, please check again!");
                                      }
                                      else{
                                          
                                        $('#student_info_id').val(result[0].id);
                                        $('#schoolModal').modal('show');
                                        send_email();
                                        
                                      }
                                    
                                  }
                                });
                            
                      
                             
                          
                        });
                    }
                
            }
            
            
        }
        
        
    })){
        //loadSchoolSubmit();
    }
});