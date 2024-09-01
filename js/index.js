
function loadContent(directory, pageName) {
    var xhr = new XMLHttpRequest();
    // Construct the URL using directory and page name
    var url = directory + '/' + pageName + '.php';

    xhr.open('GET', url, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('main-content').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

// Load default content on page load
document.addEventListener('DOMContentLoaded', function() {
    // Example default content, adjust as needed
    loadContent('Pages', 'Index'); // Default page
});