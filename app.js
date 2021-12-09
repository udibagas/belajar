const table = $('#myTable').DataTable( {
    "ajax": "proses.php?get_data=true",
    "columns": [
        { "data": "first_name" },
        { "data": "last_name" },
        { "data": "birth_day" },
    ]
});


$('#form-login').submit((e) => {
    e.preventDefault();
    
    const username = $('#username').val();
    const password = $('#password').val();

    // console.log(username, password);

    $.ajax({
        type: 'post',
        url: 'login.php',
        data: { username, password },
        success: function (data, status) {
            alert(data)
        }
    })
});

$('#form-student').submit((e) => {
    e.preventDefault();
    
    const first_name = $('input[name=first_name]').val();
    const last_name = $('input[name=last_name]').val();
    const birth_day = $('input[name=birth_day]').val();

    // console.log(first_name, last_name, birth_day);

    $.ajax({
        type: 'post',
        url: 'proses.php',
        dataType: 'json',
        data: {
            first_name,
            last_name,
            birth_day,
            submit: true
        },
        success: function (res) {
            alertify.notify(res.message, 'error', 5);
            table.ajax.reload();

            $('input[name=first_name]').val('');
            $('input[name=last_name]').val('');
            $('input[name=birth_day]').val('');
        }
    })
});