const usernameSession = document.querySelector('#usernameSession');
const logout = document.querySelector('#logout');
let username = JSON.parse(localStorage.getItem('user'));

if(username != null){
    usernameSession.innerHTML = username[0].usuario.toUpperCase();
} else {
    location.href='index.html';
}

logout.addEventListener('click', function(){
    localStorage.removeItem('user');
    location.href='index.html';
})
