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
            branch_sch_letter:"required",
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
            branch_sch_letter:"သက်ဆိုင်သည့် အထောက်အထား စာချုပ်စာတမ်းများ ထည့်ပါ",
        },
        
    })){
        loadSchoolSubmit();
    }
    });