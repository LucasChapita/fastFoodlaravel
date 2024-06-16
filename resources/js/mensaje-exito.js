// resources/js/mensaje-exito.js
document.addEventListener('DOMContentLoaded', function () {
    // Verificar si hay un mensaje de éxito para mostrar
    var successMessage = document.getElementById('success-message');
    if (successMessage) {
        // Mostrar el mensaje de éxito como un alert
        alert(successMessage.innerText);

        // Redireccionar a la página principal de tu aplicación Laravel
        window.location.href = "./"; // Asegúrate de que 'index' sea la ruta correcta
    }
});
