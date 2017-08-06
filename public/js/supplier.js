$(document).ready(function () {
    $('save_new').text('hello');
});
$('#new_supplier').submit(function (event) {

    event.preventDefault();
    var formData = new FormData($('#new_supplier')[0]);
    $.ajax({
        url: 'supplier/create',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function () {
            $('#create_new').find('#save_new').text('Saving...');
        },
        success: function (response) {
            if (response.success == true) {
                $('#create_new').find('#save_new').text('Saved');
                var html = '<div class="col-md-12 msg-div"><div class="alert alert-success"><ul>';
                html += '<li>' + response.msg + '</li>';
                html += '</ul></div></div>';
                $('#create_new').find('#save_new').text();
                $('.modal-body').before(html);
                location.reload();
            } else if (response.validation == false) {
                //console.log(response.errors);
                $('msg-div').remove();
                var html = '<div class="col-md-12 msg-div"><div class="alert alert-danger"><ul>'
                $.each(response.errors, function (key, value) {
                    html += '<li>' + value + '</li>';
                });
                html += '</ul></div></div>';
                $('.modal-body').before(html);
                $('#create_new').find('#save_new').text('Save');
            } else {
                $('msg-div').remove();
                var html = '<div class="col-md-12 msg-div"><div class="alert alert-danger"><ul>';
                html += '<li>' + response.msg + '</li>';
                html += '</ul></div></div>';
                $('.modal-body').before(html);
                $('#create_new').find('#save_new').text('Save');
            }
        },
        timeout: 30000,
        error: {function(xhr, status, error) {
                alert(error);
            }},
    });
});
$('#show').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var name = button.data('name') // Extract info from data-* attributes
    var postal_code = button.data('postal_code') // Extract info from data-* attributes
    var address = button.data('address') // Extract info from data-* attributes

    var modal = $(this)
    modal.find('#supplier_name').val(name)
    modal.find('#address').val(address)
    modal.find('#postal_code').val(postal_code)
    modal.find('#row_id').val(id)
//  modal.find('.modal-body input').val(recipient)
})
$('#edit_supplier').submit(function (event) {
    event.preventDefault();
    var formdata = new FormData($('#edit_supplier')[0]);
    $.ajax({
        url: 'supplier/edit',
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        beforeSend: function () {
            $('#show').find('#update').text('Updating....');
        },
        success: function (response) {
            if (response.success == true) {
                var html = '<div class="col-md-12 msg-div"><div class="alert alert-success"><ul>';
                html += '<li>' + response.msg + '</li>';
                html += '</ul></div></div>';
                $('#show').find('#update').text('Updated');
                $('#show').find('.modal-body').before(html);
                location.reload();
            } else if (response.validation == false) {
                console.log(response.errors);
                $('msg-div').remove();
                var html = '<div class="col-md-12 msg-div"><div class="alert alert-danger"><ul>'
                $.each(response.errors, function (key, value) {
                    html += '<li>' + value + '</li>';
                });
                html += '</ul></div></div>';
                //$('#show').find('#update').text('Updated');
                $('#show').find('.modal-body').before(html);
                $('#show').find('#update').text()
            } else {
                $('msg-div').remove();
                var html = '<div class="col-md-12 msg-div"><div class="alert alert-danger"><ul>';
                html += '<li>' + response.msg + '</li>';
                html += '</ul></div></div>';
                $('#show').find('.modal-body').before(html);
                $('#show').find('#update').text()
            }
        },
        timeout: 30000,
        error: {function(xhr, status, error) {
                alert(error);
            }},
    });
});


