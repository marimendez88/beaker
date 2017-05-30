$(function(){
//    $('<img src="/images/ajax-loader.gif" id="spinner" />').css('position','absolute').hide().appendTo('body');
    
    // Initialize the jQuery File Upload widget:
   
    $('#fileupload').fileupload({        
        url                   : $("#fileupload").attr('action'),
        previewAsCanvas       : true,
        acceptFileTypes       : /(\.|\/)(gif|jpe?g|png)$/i,
        limitMultiFileUploads : 5,
        limitConcurrentUploads: 5,
        previewMaxWidth       : 0,
        previewMaxHeight      : 110,
        xhrFields: {withCredentials: true},
        dataType              : 'json'
    }).bind('fileuploadalways', function(e, data) {
        
        console.log(data.result);
        var response = data.result.files[0];
        cargarImagenProductoAjaxCallback(response);
        console.log(response.status);
        
    }).bind('fileuploadstart', function(e, data) {
        
        //Mostrar spinner
        console.log('Inicio de carga de imagen');
        
    });
    
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/js/fileUpload/cors/result.html?%s'
        )
    );
    
    $('#trigger_submit_form').click(function() {
        var formToSubmit = 'formProducto';
        $('#submit_' + formToSubmit).click();
    });
    $('#trigger_upload_input').click(function() {
        $('#imagen_url').click();
    });
    addMediaDinamicEvents();

});

function cargarImagenProductoAjaxCallback(response)
{
    if (response.status == 0)
    {
        var errorMessage = response.error.replace('|', '')
        alert('Hay un problema con la imagen que intenta cargar: '+errorMessage, 'alert', true);
        return;
    } else if (response.status == 2)
    {
        showdialog('Necesita iniciar sesión para continuar.', 'alert', true);
        return;
    } else if (response.status == 500)
    {
        showdialog('Ocurrio un error por favor intentelo mas tarde.', 'alert', true);
        return;
    }
    appendNewMedia(response);
    clearField();
//    $('#contenedor-fotos').append(response.partial);
}
function clearField()
{
    $('#Beaker_PORTAFOLIO_gallery_image_titulo').val('');
    $('#Beaker_PORTAFOLIO_gallery_image_year').val('');
}

function appendNewMedia(media)
{
    var html = '<div style="display: inline;" id="media_container_'+ media.imagen_id +'">'
             + '<img src="' + media.url + '" width="60px" height="60px"/>'
             + '<a id="media_id_'+ media.imagen_id +'" class="evt_delete_media" href="javascript:;" data-id="'+ media.imagen_id +'" data-url="' + media.delte_url + '">X</a>'
             + '</div>';
    
    $('#gallery_images_list').append($(html));
    addMediaDinamicEvents();
}

function addMediaDinamicEvents()
{
    $('.evt_delete_media').click(deleteMedia).removeClass('evt_delete_media');
}

function deleteMedia()
{
    var el         = $(this);
    var requestUrl = el.data('url');
    var mediaId    = el.data('id');
    
    $.ajax({
        type: "POST",
        url: requestUrl,
        dataType: 'json',
        data: ({
            media_id : mediaId
        }),
        success: function(response) {
            $('#media_container_' + mediaId).remove();
        }
    });
}