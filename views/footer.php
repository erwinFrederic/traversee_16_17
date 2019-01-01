
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
        $("#country").countrySelect({
            preferredCountries: ['ci']
        });

        $("#country").on('change', function () {
            if ($(this).val() !== 'Côte d’Ivoire')
                $('.evh-online').css("display", "block");

            if ($(this).val() == 'Côte d’Ivoire')
                $('.evh-online').css("display", "none");
        })
    </script>

    <script>
        function dynamic_text() {
            return "create your dynamic text here";
        }

        function download_file(name, contents, mime_type) {
            mime_type = mime_type || "text/plain";

            var blob = new Blob([contents], {type: mime_type});

            var dlink = document.createElement('a');
            dlink.download = name;
            dlink.href = window.URL.createObjectURL(blob);
            dlink.onclick = function(e) {
                // revokeObjectURL needs a delay to work properly
                var that = this;
                setTimeout(function() {
                    window.URL.revokeObjectURL(that.href);
                }, 1500);
            };

            dlink.click();
            dlink.remove();
        }
    </script>

</html>