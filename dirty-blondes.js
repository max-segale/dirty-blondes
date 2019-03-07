(function (window) {
    function toggleMenu() {
        var menuNav = document.getElementById('menu_nav');
        if (menuNav.className === 'open') {
            menuNav.className = '';
        } else {
            menuNav.className = 'open';
        }
    }
    window.addEventListener('load', function () {
        var menuBtn = document.getElementById('menu_btn');
        menuBtn.addEventListener('click', toggleMenu);
    });
}(window));