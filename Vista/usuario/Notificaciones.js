// Obtén una referencia al elemento de la caja de notificaciones
const notificationBox = document.querySelector('.notification-box');

// Función para agregar una notificación a la caja
function agregarNotificacion(mensaje) {
    const nuevaNotificacion = document.createElement('div');
    nuevaNotificacion.classList.add('notification');
    nuevaNotificacion.textContent = mensaje;
    notificationBox.appendChild(nuevaNotificacion);
}

// Ejemplo: Agregar algunas notificaciones (puedes cargarlas desde tu servidor)
agregarNotificacion('Nueva notificación 1');
agregarNotificacion('Nueva notificación 2');

// Verificar si hay notificaciones
if (notificationBox.children.length === 0) {
    const noNotificationsMessage = document.querySelector('.no-notifications');
    noNotificationsMessage.style.display = 'block';
}
