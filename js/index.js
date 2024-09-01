function loadContent(page) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET',page + '.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('main-content').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}
// Load default content on page load
document.addEventListener('DOMContentLoaded', function() {
    loadContent('../Pages/Cart');
});
