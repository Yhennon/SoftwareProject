window.onload = function() {
    if(localStorage.getItem('theme') == 'dark'){
        document.getElementById('stylesheet').setAttribute('href', 'css/style_dark.css');
    }
};

function changeTheme(){
    if(localStorage.getItem('theme') == 'light'){
        document.getElementById('stylesheet').setAttribute('href', 'css/style_dark.css');
        localStorage.setItem('theme', 'dark');
    }
    else{
        document.getElementById('stylesheet').setAttribute('href', 'css/style.css');
        localStorage.setItem('theme', 'light');
    }
}