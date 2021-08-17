let counter = 0;
function addRowEducation(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" name="degrees[]" class="form-control" placeholder="ပညာအရည်အချင်း"/></td>';
    cols += '<td class="text-center"><input type="button" class="delete btn btn-sm btn-danger" onclick=delRowEducation("'+tbody+'")  value="X"></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function delRowEducation(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
}

function addRowSubject(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" class="form-control" name="certificates[]" placeholder="လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း"/></td>';
    cols += '<td class="text-center"><input type="button" class="delete btn btn-sm btn-danger" onclick=delRowSubject("'+tbody+'")  value="X"></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function addRowDipSubject(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td>'+ (row)+'</td>';
    cols += '<td><input type="text" class="form-control" name="diplomas[]" placeholder="လက်မှတ်ရ ပြည်သူ့စာရင်းကိုင်သင်တန်း"/></td>';
    cols += '<td class="text-center"><input type="button" class="delete btn btn-sm btn-danger" onclick=delRowSubject("'+tbody+'")  value="X"></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function delRowSubject(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
}

function createTeacherRegister(){
    let formData = new FormData($( "#teacher_register_form" )[0]);
    formData.append('nrc_township',$("#nrc_township + .nice-select span").text());
    $.ajax({
        type: "POST",
        data: formData,
        url: BACKEND_URL + "/teacher",
        async: false,  
        cache: false,  
        contentType: false,  
        processData: false, 
        success: function (data) {
            successMessage(data.message);
            resetForm("#teacher_register_form");
            $(".tbl_degree_body").empty();
            $(".tbl_certificate_body").empty();
            $(".tbl_diploma_body").empty();
        },
        error: function (result) {
        },
    });
    
}