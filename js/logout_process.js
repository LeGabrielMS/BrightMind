document.addEventListener("DOMContentLoaded", function () {
    feather.replace();

    document.getElementById("logout-icon").addEventListener("click", function (event) {
        event.preventDefault();
        if (confirm("Are you sure you want to logout?")) {
            sessionStorage.clear();
            localStorage.clear();
            window.location.href = "../php/index.html";
        }
    });
});
