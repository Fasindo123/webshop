var btn = document.getElementById("myBtn");

window.onscroll = function () {
    scrollFunction();
};

// Figyeljük az onmouseover eseményt is
btn.onmouseover = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

