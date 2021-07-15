function getEducation(){
    var cpaValue = document.getElementById('cpa_edu');
    var raValue = document.getElementById('ra_edu');
    var accreditdedValue = document.getElementById('accreditded_edu');    

    if(raValue.checked == true){
        $('#ra').css('display','block');               
    }
    else{
        $('#ra').css('display','none');
    }

    if(accreditdedValue.checked == true){
        $('#accredited_foreign_degree').css('display','block');               
    }
    else{
        $('#accredited_foreign_degree').css('display','none');
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