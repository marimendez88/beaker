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
            usuario.name = $('#name').val();
            usuario.lastname = $('#lastname').val();
            usuario.phone = $('#phone').val();
            usuario.email = $('#email').val();
            usuario.company = $('#company').val()
            usuario.password = $('#password').val();
            RegistroDeUsuario(usuario);
        }
    });

});

function RegistroDeUsuario(usuario) {
    $.ajax({
        type: 'POST',
        url: '/app_dev.php/cliente/registrar/usuario',
        data: {data: usuario},
        success: function (resultData) {
            if(resultData.status == 'OK'){
                window.location.replace("/app_dev.php/cliente/dashboard");
            } else {
                $('#registerModal .title').html(error);
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
