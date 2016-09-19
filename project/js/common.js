$(document).ready(function () {

    // Удаление фото
    $(document).on('click','button.delete', function(){
        $(this).closest('button.delete').prop('disabled', true);;
        var thumbnail_wrapper = $(this).closest('div.thumbnail-wrapper');

        var id = $(this).closest('div.thumbnail').children('div.id').html();
        var param = {"id":id};
        $.getJSON('controller.php?action=delete',
        param,
        function(response) {
                if(response.status=='success'){
                    thumbnail_wrapper.fadeOut('slow', function () {
                        thumbnail_wrapper.remove();
                    });
                }
                if(response.status=='error'){
                    $('#thumbnail-'+id).append('<div class="alert alert-danger">'+response.message+'</div>');
                }
        });
    }); 

    // Загрузка фото на сервер
    function showResponse(response) {

        $('#container_info').html(response.message);

        if(response.status=='success') {
            $('#container_info').removeClass('alert-danger').addClass('alert-success');
            $('#uploaded_img').attr('src',response.photo_url);
            var newThumbnail = $('.thumbnail-wrapper:first').clone(true,true).insertBefore($('.thumbnail-wrapper:first'));
            var caption = newThumbnail.children('div.thumbnail').children('div.caption');
            caption.children('h3.img-description').html( response.description );
            caption.children('p.img-author').children('span').html( response.author );
            caption.children('p.img-date').children('span').html( response.date );
            newThumbnail.children('div.thumbnail').children('img').attr('src', response.photo_url );
            newThumbnail.children('div.thumbnail').children('div.id').html( response.id );
            newThumbnail.children('div.thumbnail').attr('id','thumbnail-'+response.id);
        }

        if(response.status=='error') {
            $('#container_info').removeClass('alert-success').addClass('alert-danger');
            $('#uploaded_img').attr('src','');
        }

        $('#after_upload').fadeIn('slow');
        $('#dateField').val( formatDate(Date()) );
    }

    // Изменение фото в модальном окне
    function ModalResponse(response) {
        switch( response.status ) {
            case 'success':
                var caption = $('#thumbnail-'+$('#modal_item_id').val()).children('div.caption');
                caption.children('h3.img-description').html( $('#modal-description').val() );
                caption.children('p.img-author').children('span').html( $('#modal-author').val() );
                caption.children('p.img-date').children('span').html( $('#modal-date').val() );
                break;

            case 'error':
                break;
        }
        $('#editItemModal').modal('hide'); 
    }
 
    $('#photo_form').ajaxForm({ 
        success:       showResponse,   // post-submit callback 
        url:       'controller.php?action=upload_photo',         // override for form's 'action' attribute 
        dataType:  'json',        // 'xml', 'script', or 'json' (expected server response type) 
        clearForm: true,           // clear all form fields after successful submit 
        resetForm: true         // reset the form after successful submit 
    });

    $('#editItemModalForm').ajaxForm({ 
        success:       ModalResponse,   // post-submit callback 
        url:       'controller.php?action=save',         // override for form's 'action' attribute 
        dataType:  'json',        // 'xml', 'script', or 'json' (expected server response type) 
    });


    $('#editItemModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      var modal = $(this);
      var caption = button.closest('div.thumbnail').children('div.caption');

      $('#modal_item_id').val( button.closest('div.thumbnail').children('div.id').html() );

      modal.find('#modal-description').val(caption.children('h3.img-description').html());
      modal.find('#modal-author').val(caption.children('p.img-author').children('span').html());
      modal.find('#modal-date').val(caption.children('p.img-date').children('span').html());
    });

    function formatDate(date) {
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

        return [year, month, day].join('-');
    }
    
    $('#dateField').val( formatDate(Date()) );

});