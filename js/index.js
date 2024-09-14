/*Dynamic change ..........................................................................*/
function loadContent(directory, pageName,id_Dispaly) {
    var xhr = new XMLHttpRequest();
    // Construct the URL using directory and page name
    var url = directory + '/' + pageName + '.php';

    xhr.open('GET', url, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById(id_Dispaly).innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

document.addEventListener('DOMContentLoaded', function() {
    // Example default content, adjust as needed
    loadContent('Pages', 'Home','main-content'); // Default page
});

document.addEventListener('DOMContentLoaded', function() {
    // Example default content, adjust as needed
    loadContent('Components', 'SignIn','left-content'); // Default page
});
/*Dynamic change ..........................................................................*/

document.getElementById("onclickLog").addEventListener("click", function() {
    document.querySelector(".popupLog").style.display = "flex";
})


window.addEventListener("click", function(event) {
    if (event.target === document.querySelector(".popupLog")) {
        document.querySelector(".popupLog").style.display = "none";
    }
});