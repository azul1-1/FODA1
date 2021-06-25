<script src="<?= base_url('assets/custom/outside/js/auth.js') ?>"></script>

<script>
    $(document).ready(function() {
        $("#btnLogin").click(function() {
            closeLoginInfo();
            $(this).parent().find('span').css("display", "none");
            $(this).parent().find('span').removeClass("i-save");
            $(this).parent().find('span').removeClass("i-warning");
            $(this).parent().find('span').removeClass("i-close");

            var proceed = true;
            $("#login_form input").each(function() {

                if (!$.trim($(this).val())) {
                    $(this).parent().find('span').addClass("i-warning");
                    $(this).parent().find('span').css("display", "block");
                    proceed = false;
                }
            });

            if (proceed) //everything looks good! proceed...
            {
                $(this).parent().find('span').addClass("i-save");
                $(this).parent().find('span').css("display", "block");
            }
        });

        //reset previously results and hide all message on .keyup()
        $("#login_form input").keyup(function() {
            $(this).parent().find('span').css("display", "none");
        });

        openLoginInfo();
        setTimeout(closeLoginInfo, 1000);
    });

    function openLoginInfo() {
        $(document).ready(function() {
            $('.b-form').css("opacity", "0.01");
            $('.box-form').css("left", "-37%");
            $('.box-info').css("right", "-37%");
        });
    }

    function closeLoginInfo() {
        $(document).ready(function() {
            $('.b-form').css("opacity", "1");
            $('.box-form').css("left", "0px");
            $('.box-info').css("right", "-5px");
        });
    }

    $(window).on('resize', function() {
        closeLoginInfo();
    });
</script>

<script>
    function login() {
        var url = "<?= base_url('index.php/Login/validarUsuario') ?>";
        $.ajax({
                url: url,
                dataType: 'json',
                type: 'POST',
                data: {
                    'user': $("#nombre").val(),
                    'pass': $("#clave").val(),
                },
            })
            .done(function(response) {
                if (response.ok) {
                    location.href = "<?= base_url('index.php/Home') ?>";
                } else {
                    $.alert({
                        title: response.titulo,
                        content: response.mensaje,
                        typeAnimated: true,
                        scrollToPreviousElement: false,
                        columnClass: 'medium',
                        icon: 'fas fa-info-circle',
                        type: response.color,
                        theme: 'light',
                        buttons: {
                            aceptar: {
                                text: 'Aceptar',
                                btnClass: 'btn-orange',
                            }
                        }
                    });
                    $("#sql_error").removeClass("d-none");
                }

            })
            .fail(function() {
                console.log("error al loguearse");
            });
    }
</script>


</body>

</html>