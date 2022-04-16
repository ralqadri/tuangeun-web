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
                    <td>` + data.name_resto + `</td>
                    <td>` + data.desc_resto + `</td>
                    <td>` + data.category + `</td>
                    <td>` + data.alamat_resto + `</td>
                    <td>
                        <a href="/dashboard/restaurant/edit/` + data.id_resto + `" class="btn btn-warning"><i class='bx bx-edit-alt' ></i> Edit</a>
                        <a href="/dashboard/restaurant/delete/` + data.id_resto + `#" class="btn btn-danger"><i class='bx bx-trash' ></i> Delete</a>
                    </td>
                </tr>
            `)
        });
    }
});

function search() {
    $('#resto-table tbody').html('');
    let searchinput = $('#resto-search-input').val();
    let uripath = 'http://127.0.0.1:8000/api/restaurant/' + searchinput
    $.ajax({
        url: uripath,
        type: 'get',
        dataType: 'json',
        data: {
            'nama': $('#resto-search-input').val()
        },
        success: function (result) {
            // console.log($('#search-restaurant').val())
            let restaurants = result.data;
            $.each(restaurants, function (i, data) {
                if (result.response == "True") {
                    // console.log(result)
                    $('#resto-table tbody:last-child').append(`
                    <tr>
                        <td>` + data.id_resto + `</td>
                        <td>` + data.name_resto + `</td>
                        <td>` + data.desc_resto + `</td>
                        <td>` + data.category + `</td>
                        <td>` + data.alamat_resto + `</td>
                        <td>
                            <a href="/dashboard/restaurant/edit/` + data.id_resto + `" class="btn btn-warning"><i class='bx bx-edit-alt' ></i> Edit</a>
                            <a href="/dashboard/restaurant/delete/` + data.id_resto + `#" class="btn btn-danger"><i class='bx bx-trash' ></i> Delete</a>
                        </td>
                    </tr>
                    `)
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
    // let test = $('#resto-search-input').val()
    // console.log(test)
    search();
});

$('#resto-search-input').on('keyup', function (e) {
    // let test = $('#resto-search-input').val()
    if (e.which === 13) {
        search();
    }
});
