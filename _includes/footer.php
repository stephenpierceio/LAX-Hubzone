<script>
    // .active menu item script
    let pagePath = window.location.pathname,
        pageHost = window.location.hostname,
        menuItems = document.querySelectorAll('#menu ul li a');

    for (let i = 0; i < menuItems.length; i++) {
        if (pagePath == menuItems[i].pathname && pageHost == menuItems[i].hostname) {
            menuItems[i].classList.add('active');
        }
    }
    // End .active menu item script
</script>
</body>

</html> 