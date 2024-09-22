    <footer class="page-footer white">
        <h6 class="black-text center-align">&copy; 2024 TradeHaven.com</h6>
    </footer>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/materialize.js"></script>
    <script>
        $(document).ready(function(){
        $('.gender').formSelect();
        $('.sidenav').sidenav();
        $('.slider').slider({
            indicators: false,
            interval: 5000,
            height: 500,
        });
        $('.collapsible').collapsible();
        $('.parallax').parallax();
        $('.materialboxed').materialbox();
        $('.scrollspy').scrollSpy();
        $('.fixed-action-btn').floatingActionButton();
        $('.modal').modal();
    })
    </script>
</body>
</html>