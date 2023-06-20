function mensajeError(titulo, texto) {
  Swal.fire({
    title: titulo,
    text: texto,
    icon: 'error',
    showConfirmButton: false,
    allowOutsideClick: false,
    timer: 2000
  });
}


function campoInvalido(alerta, campo) {
  Swal.fire({
    title: alerta,
    text: campo,
    icon: 'warning',
    showConfirmButton: false,
    allowOutsideClick: false,
    timer: 2000
  });
}