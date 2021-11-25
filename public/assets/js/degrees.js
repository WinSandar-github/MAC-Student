function getDegree() {
    $.ajax({
        url: BACKEND_URL + "/degrees",
        type: 'get',
        data: "",
        success: function (data) {

            var degree_data = data.data;
            var opt = `<option  disabled  >Select Degree </option>`;

            degree_data.forEach(function (element) {
                opt += `<option value=${element.id}  >${element.degree_name}</option>`;

            });
            $(".degree_id").append(opt);
        },
        error: function (message) {

        }

    });
}
