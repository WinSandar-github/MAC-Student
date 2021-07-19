function getEducation(){
    var checkedValue = $("input[name='education']:checked").val();
    if(checkedValue==1){
        $('#cpa').css('display','block');
        $('#ra').css('display','none');
        $('#accredited_foreign_degree').css('display','none');
    }
    else if(checkedValue==2){
        $('#cpa').css('display','none');
        $('#ra').css('display','block');
        $('#accredited_foreign_degree').css('display','none');         
    }
    else if(checkedValue==3){
        $('#cpa').css('display','none');
        $('#ra').css('display','none');
        $('#accredited_foreign_degree').css('display','block');
    }
    else{
        $('#cpa').css('display','none');
        $('#ra').css('display','none');
        $('#foreign_degree').css('display','none');
    }
}

function addInputFile(divname,diventry){
    var controlForm = $('.'+divname+':first'),
            currentEntry = $('.btn-add').parents('.'+diventry+':first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');
        controlForm.find('.'+diventry+':not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-primary').addClass('btn-danger')
            .attr("onclick","delInputFile('"+diventry+"')")
            .html('<span class="fa fa-trash"></span>');           

}

function delInputFile(diventry){
    $('.btn-remove').parents('.'+diventry+':first').remove();
}