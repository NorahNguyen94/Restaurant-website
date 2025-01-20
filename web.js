const menu = document.querySelector(".menu");
const closeMenu = document.querySelector(".closeMenu");
const openMenu = document.querySelector(".openMenu");

openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

function show() {
    menu.style.display = 'flex';
    menu.style.top = '0';
}

function close() {
    menu.style.top = '-100%';

}

function check() {
    var name = document.getElementById("user-name").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;

    if (!name || !address || !phone) {
        alert("Please fill all fields!")
    }
    else {
        alert("Save information successfully! \nName: " + name + "\nAddress: " + address + "\nPhone: " + phone);
    }
}

