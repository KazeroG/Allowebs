<?php
include_once 'lang/lang.php';
?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" dir="ltr" lang="fr" xml:lang="fr">

<head>
    <title>
        <?php echo $lang['title-page']; ?>
    </title>
    <?php include_once 'header.php'; ?>
    <script>
    function sendContact() {
        var valid;
        valid = validateContact();
        if (valid) {
            jQuery.ajax({
                url: "contact.php",
                data: 'Name=' + $("#name").val() + '&email=' +
                    $("#email").val() + '&subject=' +
                    $("#phone").val() + '&content=' +
                    $(content).val(),
                type: "POST",
                success: function(data) {
                    $("#mail-status").html(data);
                },
                error: function() {}
            });
        }
    }
    </script>
    <script>
    function validateContact() {
        var valid = true;
        $(".footer__form").css('background-color', '');
        $(".info").html('');
        if (!$("#name").val()) {
            $("#name-info").html("(required)");
            $("#Name").css('background-color', '#FFFFDF');
            valid = false;
        }
        if (!$("#email").val()) {
            $("#email-info").html("(required)");
            $("#email").css('background-color', '#FFFFDF');
            valid = false;
        }
        if (!$("#Email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#email-info").html("(invalid)");
            $("#email").css('background-color', '#FFFFDF');
            valid = false;
        }
        if (!$("#phone").val()) {
            $("#phone-info").html("(required)");
            $("#phone").css('background-color', '#FFFFDF');
            valid = false;
        }
        if (!$("#message").val()) {
            $("#message-info").html("(required)");
            $("#message").css('background-color', '#FFFFDF');
            valid = false;
        }
        return valid;
    }
    </script>
</head>

<body>
    <?php include_once 'visualy-hidden.php'; ?>
    <div class="wrapper">
        <div class="header-wrap" data-animate="">
            <header class="header fit-60 d-300">
                <div class="container">
                    <?php include_once 'nav.php'; ?>
                </div>
            </header>
        </div>
        <?php include_once 'loader.php'; ?>
        <main class="page page--no-padding">
            <div class="letter-a"><svg width="708" height="770" viewBox="0 0 708 770" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M519.059 768.298L519.278 769H520.014H705H706.404L705.945 767.673L440.323 -0.326864L440.091 -1H439.378H354H268.622H267.91L267.677 -0.327466L2.05514 766.092L1.59507 767.42H3H180.081H180.822L181.038 766.711L225.092 622.037H473.427L519.059 768.298ZM430.122 477.815H273.142L352.409 223.051L430.122 477.815Z"
                        stroke="currentColor" stroke-width="2" />
                </svg>
            </div>
            <section class="intro" id="intro">
                <div class="container">
                    <?php include_once 'intro.php'; ?>
                </div>
            </section>
            <section class="coloured-section tools">
                <div class="container">
                    <?php include_once 'comment-nous-fesons.php'; ?>
                </div>
            </section>
            <section class="expertise">
                <div class="expertise__what">
                    <div class="container">
                        <?php include_once 'expertise.php'; ?>
                    </div>
                </div>
                <div class="expertise__how" data-animate>
                    <?php include_once 'expertise__how.php'; ?>
                </div>
            </section>
            <section class="wwdid coloured-section" style="color:#FF0000 !important;">
                <?php include_once 'coloured-section.php'; ?>
            </section>
            <?php include_once 'about.php'; ?>
        </main>
        <footer class="footer coloured-section" id="footer">
            <?php include_once 'footer.php'; ?>
</body>

</html>
