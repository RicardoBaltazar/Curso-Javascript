const form = document.querySelector('#form-login');
const email = document.querySelector('#input-email');
const password = document.querySelector('#input-password');
let username = JSON.parse(localStorage.getItem('user'));
// let usersArrayLocalstorage = JSON.parse(localStorage.getItem('user'))
// usersArrayLocalstorage = usersArrayLocalstorage.length;

let index = 0;
console.log(index);

form.addEventListener('submit', function (event) {
    event.preventDefault();

    if (email.value == username[0].email && password.value == username[0].senha) {
        //alert('certo')
        index = 0;
        location.href = 'todolist.html';
    } else {
        index = index + 1;
        console.log(index);
        console.log('login inválido')
        email.value = '';
        password.value = ''
        //location.href = 'index.html';
    }
})