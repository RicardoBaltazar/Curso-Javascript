const form = document.querySelector('#form-login');
const email = document.querySelector('#input-email')
const username = document.querySelector('#input-username');
const password = document.querySelector('#input-password');
// let users = Array();
// users = JSON.parse(localStorage.getItem('user') || '[]');


form.addEventListener('submit', function(event){
    event.preventDefault();
    let users = Array(
        {
            id: 1,
            usuario: username.value,
            email: email.value,
            senha: password.value
        }
    );
    console.log(users);
    localStorage.setItem('user', JSON.stringify(users));
    location.href='index.html';
    //location.href='todolist.html';
})