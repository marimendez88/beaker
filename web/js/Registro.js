/**
 * Created by Maria Jose Mendez on 30/5/17.
 */



//
// function RegistroDeUsuario(usuario) {
//     $.ajax({
//         type: 'POST',
//         url: '/app_dev.php/cliente/registrar/usuario',
//         data: {data: usuario},
//         success: function (resultData) {
//             console.log(usuario);
//             return;
//             if(resultData.status == 'OK'){
//                 window.location.replace("/app_dev.php/cliente/dashboard");
//             } else {
//                 $('#registerModal .title').html(error);
//                 $('#registerModal').modal('show');
//             }
//         }
//     });
// }
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
$(document).ready(function () {

    var form = $("#registerForm");
    form.validate();
    $.validator.messages.required = ''
    $('body').on('click', '#btnRegistro', function (e) {
        e.preventDefault();
        if( $('#registerForm').valid() ) {
            var usuario = {};
            usuario.name = $("input[name='name']").val();
            usuario.lastname =$("input[name='lastname']").val();
            usuario.phone = $("input[name='phone']").val();
            usuario.email = $("select[name='email']").val();
            usuario.company = $("select[name='company']").val();
            usuario.password = $("select[name='password']").val();
            requestReservation(usuario);
        }
    });
});

function RegistroDeUsuario(usuario) {
    $.ajax({
        type: 'POST',
        url: $("#registerForm").attr('action'),
        data: {data: usuario},
        success: function (resultData) {
            if(resultData.status == 'OK'){

                window.location.replace("/app_dev.php/cliente/dashboard");
            } else {
                $('#registerModal .title').html(resultData.error);
                $('#registerModal').modal('show');
            }
        }
    });
}