const form           = document.querySelector('.form');
const errorBlock     = document.querySelector('.error-block');
const errorText      = document.querySelector('.error');
const name           = document.querySelector('.name-input');
const email          = document.querySelector('.email-input');
const message        = document.querySelector('.txt-input');
//Inicio de sesión administrador
const form_login     = document.querySelector('.form-admin');
const username       = document.querySelector('.username-input');
const password_admin = document.querySelector('.password-input');


const fields       = [name, email, message];
const fields_login = [username,password_admin];

const throwError = message => {
    errorBlock.style.display = 'block';
    errorText.innerHTML = message;
};
const emptyFields = fields => {
    let isEmpty;
    fields.forEach(field =>
        field.value.length === 0 ? (isEmpty = true) : (isEmpty = false));
        return isEmpty;
};
const validEmail = email => {
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailRegex.test(email.value) ? true : false;
};
form.addEventListener('submit', e =>{
    e.preventDefault();
    //Valida que los campos no se encuentren vacios
    if (emptyFields(fields)) 
        throwError('Por favor,complete todos los campos.');
    //Valida que el email sea correcto
    else if (!validEmail(email))
        throwError('Ingrese un email valido.');
    //Submit
    else {
        errorBlock.classList.add('success');
        throwError('Mensaje enviado.');
        $('.form').trigger('reset');
    }
});
