
            <footer>
                <footer>
                    <div class="copyright">
                        <p><img src="http://vasesdhonneur.org/images/logo.png" alt="logo" /> © Eglises Vases d'Honneur - Traversée 18 - 19</p>
                    </div>
                </footer>

            </footer>
            
        </div>
    </body>

    <script>
        $("#country").countrySelect();

        $("#country").on('change', function () {
            if ($(this).val() !== 'Côte d’Ivoire')
                $('.evh-online').css("display", "block");

            if ($(this).val() == 'Côte d’Ivoire')
                $('.evh-online').css("display", "none");
        })
    </script>

</html>