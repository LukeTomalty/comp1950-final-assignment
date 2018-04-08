window.onresize = function(event) {
    var bigbox = document.getElementById("bigtext");
    var smlbox = document.getElementById("smltext");
        bigbox.style.width = smlbox.style.width;
};