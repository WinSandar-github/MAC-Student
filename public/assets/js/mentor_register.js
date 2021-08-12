var counter = 0;
function addRowEducation(tbody){
    //$(".degree").hide();
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" style="border:none;text-align:center" class="form-control" value="'+(row)+'" /></td>';
    cols += '<td><input type="text" name="degrees[]" class="form-control" placeholder="ပညာအရည်အချင်း" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function delRow(tbody){
    $("table."+tbody).on("click", ".delete", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
}

function addRowPrivateShareBusiness(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" style="border:none;text-align:center" class="form-control" value="'+(row)+'" /></td>';
    cols += '<td><input type="text" name="private_share_businesses[]" class="form-control" placeholder="လုပ်ငန်းများ" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function addRowGovBusiness(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" style="border:none;text-align:center" class="form-control" value="'+(row)+'" /></td>';
    cols += '<td><input type="text" name="government_businesses[]" class="form-control" placeholder="လုပ်ငန်းများ" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function addRowPrivateBandInsurBusiness(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" style="border:none;text-align:center" class="form-control" value="'+(row)+'" /></td>';
    cols += '<td><input type="text" name="private_bank_insurance_business[]" class="form-control" placeholder="လုပ်ငန်းများ" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}

function addRowNonGovOrg(tbody){
    var newRow = $("<tr>");
    var cols = "";
    var row=$('.'+tbody+' tr').length;
    cols += '<td><input type="text" style="border:none;text-align:center" class="form-control" value="'+(row)+'" /></td>';
    cols += '<td><input type="text" name="non_government_org[]" class="form-control" placeholder="Organizations" required/></td>';
    cols += '<td class="text-center"><button type="button" class="delete btn btn-sm btn-danger m-2" onclick=delRow("'+tbody+'")><li class="fa fa-times"></li></button></td>';
    newRow.append(cols);
    $("table."+tbody).append(newRow);
    counter++;
}
