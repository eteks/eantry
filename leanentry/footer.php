</div><!-- content holder -->
                
                <footer>        
                    <p>Aviso legal /</br> Política de privacidad /</br> Mapa de sitio</p>
                </footer>
            </div>
        </div>
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () 
                {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    if ($('#content').hasClass('active')) 
                    {
                            $(".navbar").css("width", "100%");
                            $("footer").css("width", "100%");
                    }
                    else
                    {
                        $(".navbar").css("width", "calc(100% - 185px)");
                        $("footer").css("width", "calc(100% - 185px)");
                    }
                });


                
                    if ($(window).width() < 992) 
                    {
                        $('#sidebar,#content').addClass('active');
                        $(".navbar").css("width", "100%");
                        $("footer").css("width", "100%");
                    }
                    else 
                    {
                         $('#sidebar,#content').removeClass('active');
                         $(".navbar").css("width", "calc(100% - 185px)");
                        $("footer").css("width", "calc(100% - 185px)");
                    }
               // Get all the links.
                var link = $("#accordion > li > a");

                // On clicking of the links do something.
                link.on('click', function(e) {

                    var a = $(this).attr("href");

                    $(a).slideDown('fast');

                    //$(a).slideToggle('fast');
                    $("#accordion ul").not(a).slideUp('fast');
                    
                });
            });
        </script>
    </body>
</html>