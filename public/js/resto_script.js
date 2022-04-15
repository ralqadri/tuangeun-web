$.ajax({
    url: 'http://127.0.0.1:8000/api/restaurant/',
    type: 'get',
    dataType: 'json',
    data: {},
    success: function (result) {
        let restaurants = result.data;
        $.each(restaurants, function (i, data) {
            $('#resto-table tbody:last-child').append(`
                <tr>
                    <td>` + data.id_resto + `</td>
                    <td>` + data.nama_resto + `</td>
                    <td>` + data.desc_resto + `</td>
                    <td>` + data.category + `</td>
                    <td>` + data.alamat_resto + `</td>
                    <td>
                        <a href="/dashboard/restaurant/edit/#" class="btn btn-warning"><i class='bx bx-edit-alt' ></i> Edit</a>
                        <a href="/dashboard/restaurant/delete/#" class="btn btn-danger"><i class='bx bx-trash' ></i> Delete</a>
                    </td>
                </tr>
            `)
        });
    }
});

function search() {
    $('#resto-table tbody').html();
    $.ajax({
        url: 'http://127.0.0.1:8000/api/restaurant/',
        type: 'get',
        dataType: 'json',
        data: {
            'nama': $('#search-restaurant').val()
        },
        success: function (result) {
            let restaurants = result.data;
            $.each(restaurants, function (i, data) {
                if (result.response == "True") {
                    console.log(result)
                    // $('#resto-table tbody:last-child').append(`
                    // <tr>
                    //     <td>` + data.id_resto + `</td>
                    //     <td>` + data.nama_resto + `</td>
                    //     <td>` + data.desc_resto + `</td>
                    //     <td>` + data.category + `</td>
                    //     <td>` + data.alamat_resto + `</td>
                    //     <td>
                    //         <a href="/dashboard/restaurant/edit/#" class="btn btn-warning"><i class='bx bx-edit-alt' ></i> Edit</a>
                    //         <a href="/dashboard/restaurant/delete/#" class="btn btn-danger"><i class='bx bx-trash' ></i> Delete</a>
                    //     </td>
                    // </tr>
                    // `)
                } else {
                    $('#resto-message').html(`
                        <h2>` + result.error + `</h2>
                    `)
                }
            });
        }
    });
}

$('#resto-search-button').on('click', function () {
    search();
});

$('#resto-search-input').on('keyup', function (e) {
    if (e.which === 13) {
        search();
    }
});