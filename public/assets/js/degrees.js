function loadDegreeList(){
    var select = document.getElementById("selected_degree_id");
    $.ajax({
        url: BACKEND_URL+"/degrees",
        type: 'get',
        data:"",
        success: function(data){

            var degree_data = data.data;
            
            degree_data.forEach(function (element) {
                console.log('degree_data',element)
                var option = document.createElement('option');
                option.text = element.name;
                option.value = element.id;
                select.add(option,0);

            });
            
        },
        error:function (message){

        }

    });
}
