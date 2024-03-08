/**
 * Modificación de cookie para guardar el país de la IP o cambiar por preferencia
 */
function setCookie(name, value, days) {
    var d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + "; " + expires + "; path=/";
}

$('#ver-us').click(function (e) {
    e.preventDefault();
    setCookie("prefLang", "en", 365);
    window.location.href = e.target.href;
});

$('#ver-mx').click(function (e) {
    e.preventDefault();
    setCookie("prefLang", "es", 365);
    window.location.href = e.target.href;
});
