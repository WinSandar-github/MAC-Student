function previewImageFile(input){
    var file = $("input[type=file]").get(0).files[0];
    if(file){
        var reader = new FileReader();
        reader.onload = function(){
          if(file.type == "image/jpeg"){
            $("#previewImg").attr("src", reader.result);
          }
          else{
            alert("Please upload only with JPEG type !!!");
          }
        }
        reader.readAsDataURL(file);
    }
}
