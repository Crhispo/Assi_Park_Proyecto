//validar formulario

// const form = document.querySelector('#form-email');
// const formLogin = document.querySelector('#form-login');

// const validarForm = e => {
//     e.preventDefault();
//     const email = document.querySelector('#email');

//     if (email.value.trim() == '') {
//         swal('Error', 'Debe de rellenar el campo de correo electrónico.', 'error');
//     }
// }
// if (form) {
//     form.addEventListener('submit', (e) => validarForm(e));
// }

// const signIn = async () => {
//     const url = `${base_url}`;
//     const formData = new FormData(formLogin);
//     try {
//         const req = await fetch(url, {
//             method: 'POST',
//             body: formData
//         });

//         const data = req.json();
//         console.log(data)
//     } catch (error) {
//         console.error(error);
//     }
// }

// /**
//  * Función para validar el login
//  *
//  * @param {Event} e Donde se produce el evento
//  */
// const validarFormLogin = (e) => {
//     e.preventDefault();
//     const numDoc = document.querySelector('#numero_identificacion');
//     const password = document.querySelector('#password');

//     if (numDoc.value.trim() == '' || password.value.trim() == '') {
//         swal('Campos obligatorios', 'Todos los campos son obligatorios !!', 'error');
//     } else {
//         signIn();
//     }
// }

// if (formLogin) {
//     formLogin.addEventListener('submit', (e) => validarFormLogin(e));
// }


