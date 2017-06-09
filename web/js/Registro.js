/**
 * Created by Maria Jose Mendez on 30/5/17.
 */


$(document).ready(function () {

    $('#registerForm').validate({
        errorPlacement: function(error, element) {
            error.appendTo( element.parent() );
        },
        errorElement: "p",
        rules: {
            'email': {
                email: true,
            },
            'password': {
                minlength: 6
            }
        }
    });

    $('body').on('click', '#btnRegistro', function () {
        if( $('#registerForm').valid() ) {
            var usuario = {};
            usuario.nombre = $('#name').val();
            usuario.apellido = $('#lastname').val();
            usuario.phone = $('#phone').val();
            usuario.email = $('#email').val();
            usuario.company = $('#company').val()
            usuario.password = $('#password').val();
            RegistroDeUsuario(Usuario);
        }
    });

});

function RegistroDeUsuario(Usuario) {
    $.ajax({
        type: 'POST',
        url: '/app.php/registrar/usuario',
        data: {data: Usuario},
        success: function (resultData) {
            if(resultData.status == 'OK'){
                window.location.replace("/app.php/cdashboard");
            } else {
                $('#registerModal .title').html(resultData.error);
                $('#registerModal').modal('show');
            }
        }
    });
}
/*

function ActualizaDatosDelUsuario(Usuario) {
    $.ajax({
        type: 'POST',
        url: '/actualizar/usuario',
        data: {
            data: Usuario
        },
        success: function (resultData) {
            if(resultData.status == 'OK'){


            }else{// mostrar mensaje de error

            }
        }
    });
}*/
