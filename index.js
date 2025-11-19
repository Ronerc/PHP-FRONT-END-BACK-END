document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const usuario = document.getElementById('usuario').value;
        const contrasena = document.getElementById('contrasena').value;

        if (usuario && contrasena) {
            console.log('--- Datos de Ingreso ---');
            console.log('Usuario:', usuario);
            console.log('Contraseña:', contrasena);
            alert('Intento de inicio de sesión con éxito. Revisa la consola.');
        } else {
            alert('Por favor, ingresa tu usuario y contraseña.');
        }
    });
});