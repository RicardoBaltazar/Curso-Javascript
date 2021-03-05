let inputValue = document.querySelector("#input-add");
let list = document.querySelector('#todolist');
let form = document.querySelector('#form');
let btnDeleteItem = document.getElementsByClassName("btn-delete-item");
let status = 'Concluir';
let data = new Date();
let hour = data.getHours();
let minutes = data.getMinutes();
let day = data.getDate();
let month = data.getMonth() + 1;
let year = data.getFullYear();
let time = hour + ": " + minutes + " " + day + "/" + month + "/" + year;

list.addEventListener('click', function (event) {
    if (event.target.tagName === 'P') {
        event.target.classList.toggle('checked');
        if (event.target.textContent === 'Concluído') {
            event.target.textContent === 'Concluir';
        } else {
            event.target.textContent === 'Concluído';
        }
    }
});

form.addEventListener('submit', function (event) {
    event.preventDefault();

    let li = document.createElement("li");
    
    let item = document.createElement('span')
    item = document.createTextNode(inputValue.value);
    li.appendChild(item);
    console.log("Iten adicionado com sucesso");
    list.appendChild(li);
    inputValue.value = "";
    inputValue.focus();

    let spanTime = document.createElement('span');
    let spanTimeText = document.createTextNode(time);
    spanTime.appendChild(spanTimeText);
    li.appendChild(spanTime);

    let spanStatus = document.createElement('p');
    let spanStatusText = document.createTextNode(status);
    spanStatus.className = "status";
    spanStatus.appendChild(spanStatusText);
    li.appendChild(spanStatus);

    let spanDeleteItem = document.createElement('span');
    let spanDeleteItemText = document.createTextNode("\u00D7");
    spanDeleteItem.className = "btn-delete-item";
    spanDeleteItem.appendChild(spanDeleteItemText);
    li.appendChild(spanDeleteItem);

    for (i = 0; i < btnDeleteItem.length; i++) {
        btnDeleteItem[i].onclick = function () {
            var div = this.parentElement;
            div.style.display = "none";
        }
    }
})

// let inputValue = document.querySelector("#input-add");
// let list = document.querySelector('#todolist');
// let form = document.querySelector('#form');
// let items = [];
// let data = new Date();
// let hour = data.getHours();
// let minutes = data.getMinutes();
// let day = data.getDate();
// let month = data.getMonth() + 1;
// let year = data.getFullYear();
// let time = hour + ": " + minutes + ":h " + day + "/" + month + "/" + year;

// form.addEventListener('submit', function(event){
//     event.preventDefault();
//     items.push(inputValue.value);
//     alert(items);
//     todoList();
//     inputValue.value = "";
//     inputValue.focus();
// });

// function todoList(){
//     list.innerHTML = "";
//     for(let i = 0; i < items.length; i++){
//         list.innerHTML += 
//         "<li><span>"+items[i]+"</span>"+
//         "<span>"+time+"</span>"+
//         "<p class='status' id='status'>Concluir</p>"+
//         "<span class='btn-delete-item' onclick='deleteItem()'>\u00D7</span></li>"
//     }
// }

// function deleteItem(){
//     var div = this.parentElement;
//     div.style.display = "none";
//     todoList();
// }

// document.querySelector("#status").addEventListener('click', function(event){
//     if (event.target.tagName === 'P') {
//         event.target.classList.toggle('checked');
//     }
// })