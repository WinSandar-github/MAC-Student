function getStudentInfo(){
    if(approve_reject_status==0){
        $('.status-reject').css('display','block');
        $('.status-approve').css('display','block');
    }else{
        $('.status-approve').css('display','block');
    }
}