import './bootstrap';

function toggleNavbar() {
    var navbar = document.getElementById("navbarNav");
    if (navbar.classList.contains("show")) {
        navbar.classList.remove("show");
    } else {
        navbar.classList.add("show");
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll(".nav-link");
    links.forEach(function(link) {
        link.addEventListener("click", function() {
            var navbar = document.getElementById("navbarNav");
            navbar.classList.remove("show");
        });
    });
});

function showModal() {
    var modal = new bootstrap.Modal(document.getElementById("myModal"));
    modal.show();
}