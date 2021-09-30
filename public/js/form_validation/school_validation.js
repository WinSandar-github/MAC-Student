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
            $( "#school_submit" ).click(function(e) {
    
    
                var send_data = new FormData();
                  send_data.append('email',$("input[name='email']").val());
                  send_data.append('nrc_state_region',$("#nrc_state_region").val());
                  send_data.append('nrc_township',$("#nrc_township").val());
                  send_data.append('nrc_citizen',$("#nrc_citizen").val());
                  send_data.append('nrc_number',$("#nrc_number").val());
                //if(isValid) {
                  
                    $.ajax({
                      url: BACKEND_URL+"/checkEmail",
                      type: 'post',
                      data:send_data,
                      contentType: false,
                      processData: false,
                      success: function(result){
                          console.log(result)
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
               // }  
          
                 
              
            });
        }
        
        
    })){
        //loadSchoolSubmit();
    }
});