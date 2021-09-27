$().ready(function (){
if($("#teacher_register_form").validate({
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
        race : "required",
        religion : "required",
        date_of_birth : "required",
        phone : "required",
        current_address : "required",
        address : "required",
        position : {
            required : "#gov_staff1:checked"
        },
        department : {
            required : "#gov_staff1:checked"
        },
        organization : {
            required : "#gov_staff1:checked"
        },
        gov_staff : "required",
        recommend_letter : {
            required : "#gov_staff1:checked"
        },
        exp_desc : "required",
        selected_school_id : {
            required : "#school_staff1:checked"
        },
        school_name : {
            required : "#school_staff2:checked"
        },
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
        race : "Please enter your race",
        religion : "Please enter your religion",
        date_of_birth : "Select your date of birth",
        phone : "Please enter your phone number",
        current_address : "Please enter your current address",
        address : "Please enter your address",
        position : "Please enter your position",
        department : "Please enter your department",
        organization : "Please enter your organization",
        gov_staff : "Please select one",
        recommend_letter : {
            required : "Please upload recommend letter"
        },
        selected_school_id : {
            required :"Please select one"
        },
        exp_desc : "သင်ကြားမည့်ဘာသာရပ်အတွက် သင်ကြားမှုနှင့် အခြားအတွေ့အကြုံများ ထည့်ပါ",
        school_name : {
            required :"Please enter school name"
        },
    },
    submitHandler: function(form) {
        function allFilled(form) {
            var filled = true;
            $(form+' input').each(function() {
              if($(this).attr('name')=="diplomas[]" && $(this).val() == '')
              {  filled = false;  }
              if($(this).attr('name')=="certificates[]" && $(this).val() == '')
              {  filled = false;  }
              
            });
            return filled;
            
        }
        
        
    }
})){
    
}
});