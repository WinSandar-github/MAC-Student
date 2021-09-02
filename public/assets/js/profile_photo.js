function previewImageFile(input){
    var file = $(input).get(0).files[0];
    if(file){
        var reader = new FileReader();
        reader.onload = function(){
          if(file.type == "image/jpeg" || file.type == "image/png"){
            $("#previewImg").attr("src", reader.result);
          }
          else{
            alert("Please upload only with JPEG or PNG type !!!");
          }
        }
        reader.readAsDataURL(file);
    }
}
