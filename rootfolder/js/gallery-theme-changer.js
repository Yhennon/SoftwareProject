window.onload = function() {
    if(localStorage.getItem('theme') == 'dark'){
        document.getElementById('stylesheet').setAttribute('href', 'css/lightbox.min_dark.css');
    }
};
function changeTheme(){
    if(localStorage.getItem('theme') == 'light'){
        document.getElementById('stylesheet').setAttribute('href', 'css/lightbox.min_dark.css');
        localStorage.setItem('theme', 'dark');
    }
    else{
        document.getElementById('stylesheet').setAttribute('href', 'css/lightbox.min.css');
        localStorage.setItem('theme', 'light');
    }
}