
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

document.addEventListener('DOMContentLoaded', function() {
    // Example default content, adjust as needed
    loadContent('Pages', 'Home'); // Default page
});


const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click',function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})

        document.getElementById("onclickLog").addEventListener("click",function(){
            document.querySelector(".popupLog").style.display="flex";    
        })
