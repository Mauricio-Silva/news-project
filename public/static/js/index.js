
(() => {
  'use strict'

  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()


window.onload = function() {
  const alertArea = document.getElementById('alert-area');
  const alert = document.querySelector('.alert');
  if (alert) {
    alert.style.opacity = 1;
    alertArea.style.height = '70px';
    setTimeout(() => {
      alert.style.opacity = 0;
    }, 2000);
    setTimeout(() => {
      alertArea.style.height = '0px';
    }, 2200);
    setTimeout(() => {
      new bootstrap.Alert(alert).close();
    }, 2500);
  }
}

function deleteNews(element) {
  const title = element.getAttribute('data-title');
  document.getElementById('plaintext-title').value = title;
  const url = element.getAttribute('data-url');
  document.getElementById('deleteModalForm').action = url;
}
