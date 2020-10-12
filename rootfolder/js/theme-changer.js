window.onload = function() {
    if(localStorage.getItem('theme') == 'dark'){
        document.getElementById('stylesheet').setAttribute('href', 'css/style_dark.css');
        document.getElementById('theme_switch').innerHTML = 'Világos téma' 
    }
};

function changeTheme(){
    if(localStorage.getItem('theme') == 'light'){
        document.getElementById('stylesheet').setAttribute('href', 'css/style_dark.css');
        localStorage.setItem('theme', 'dark');
        document.getElementById('theme_switch').innerHTML = 'Világos téma' 

    }
    else{
        document.getElementById('stylesheet').setAttribute('href', 'css/style.css');
        localStorage.setItem('theme', 'light');
        document.getElementById('theme_switch').innerHTML = 'Sötét téma' 

    }
}