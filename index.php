<?php
include_once 'lang/lang.php';
?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
      <meta name="description" content="<?php
echo $lang['description-page'];
?>">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="author" content="Adryan Serage - AlloWebs CEO">
      <title>
         <?php
echo $lang['title-page'];
?>
      </title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://ik.imagekit.io/allowebs/tr:w-32/assets/red.png" type="image/x-icon" />
      <!-- Main CSS file -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/contact.css">
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-DH5JPXR221"></script>
      <script>
         window.dataLayer = window.dataLayer || [];



             function gtag() {

               dataLayer.push(arguments);

             }

             gtag('js', new Date());

             gtag('config', 'G-DH5JPXR221');
      </script>
      <script>
         $(document).ready(function(){

             $( "#submitBtn" ).click(function( event ) {
             alert('pressed');
                 //values
                 var name=document.getElementById('name').value;
                 var email=document.getElementById('email').value;
                 var phone=document.getElementById('phone').value;
                 var message=document.getElementById('message').value;
                 var dataString = {"name": name, "email":email, "phone": phone, "message":message}

                 $.ajax({
                     type:"post",
                     url:"",
                     data: dataString,
                     success: function(html) {
                         $('#back').html(html);
                     }
                 });
               event.preventDefault();
             });
         });
      </script>
      <?php
if (isset($_POST["submit"])) {
    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $phone       = $_POST['phone'];
    $subject     = $_POST["subject"];
    $project     = $_POST["project"];
    $typeproject = $_POST["typeproject"];
    $message     = $_POST['message'];
    $msgsent     = $lang['msgsent'];
    $msgnotsent  = $lang['msgnotsent'];


    $formcontent = "<html><head></head><body style='text-align:center;'> <br> <img src='https://ik.imagekit.io/allowebs/tr:w-200/assets/red.png' />";
    $formcontent .= " <br>  Nom : $name
         	<br> Email : $email
         	<br> Phone : $phone
         	<br> Sujet : $subject
         	<br> Projet : $project
         	<br> Type : $typeproject
         	<br> Message: $message
         	</body></html>";
    $recipient  = "support@allowebs.com";
    $subject    = "From: Allowebs - " . $name . "-" . $mail . "\r\n";
    $mailheader = "From: $email \r\n";
    $mailheader .= "Content-type: text/html";

    if (mail($recipient, $subject, $formcontent, $mailheader)) {
        echo '<script language="javascript">';
        echo 'alert("';
        echo $msgsent;
        echo '")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("';
        echo $msgnotsent;
        echo '")';
        echo '</script>';
    }
}

?>
   </head>
   <body>
      <!-- PRELOADER -->
      <div class="ds-preloader"></div>
      <!-- /PRELOADER -->
      <!-- HEADER -->
      <header>
         <!-- HEADER OVERLAY -->
         <div class="ds-overlay ds-overlay-color"></div>
         <!-- /HEADER OVERLAY -->
         <div class="container">
            <!-- LOGO & SOCIALS -->
            <div class="row">
               <!-- LOGO -->
               <div class="col-sm-4 ds-logo">
                  <div>
                     <a href="#" title="">
                     <img src="https://ik.imagekit.io/allowebs/tr:w-200/assets/red.png" class="ds-logo-1x" alt="logo allowebs">
                     <img src="https://ik.imagekit.io/allowebs/tr:w-400/assets/red.png" class="ds-logo-2x" alt="logo allowebs">
                     </a>
                  </div>
                  <div>
                     <a style="padding-right: 0px;padding-left: 0px;margin-left: 10px;margin-right: 10px;">Language / Langue :</a>
                     <a href="?lang=en" class="ds-button-right" style="padding-right: 0px;padding-left: 0px;margin-left: 10px;margin-right: 10px;">EN</a>/
                     <a href="?lang=fr" class="ds-button-right" style="padding-right: 0px;padding-left: 0px;margin-left: 10px;margin-right: 10px;">FR</a>
                  </div>
               </div>
               <!-- /LOGO -->
               <!-- TEXT + BUTTON -->
               <div class="col-sm-8 ds-text-button">
                  <a href="#contact">
                  <?php
echo $lang['user'];
?>
                  </a>
               </div>
               <!-- /TEXT + BUTTON -->
            </div>
            <!-- /LOGO & SOCIALS -->
            <!-- TITLE -->
            <div class="row">
               <div class="col-xs-12 col-md-7 ds-title"
               //style="margin-top: 50px;width: 730px;"
               #style="margin-top: 50px;width: 730px;"
                  >
                  <h1><?php
echo $lang['title-page'];
?> </h1>
               </div>
            </div>
            <!-- /TITLE -->
            <!-- TITLE PARAGRAPH -->
            <div class="row">
               <div class="col-sm-12 col-md-5 ds-title-paragraph">
                  <p>
                     <?php
echo $lang['description'];
?>
                  </p>
               </div>
            </div>
            <!-- /TITLE PARAGRAPH -->
            <!-- BUTTONS -->
            <div class="row">
               <div class="col-xs-12 col-sm-8 ds-buttons">
                  <a href="#contact" class="ds-button-left">
                  <?php
echo $lang['start'];
?> <i class="fa fa-long-arrow-right"></i>
                  </a> <a href="https://allowebs.manage-orders.com/" class="ds-button-right">Déja membre</a>
               </div>
            </div>
            <!-- /BUTTONS -->
            <!-- SCROLL DOWN -->
            <div class="row">
               <div class="col-sm-12 ds-scroll-down"> <a href="#" title=""><i class="fa fa-chevron-down"></i></a>
               </div>
            </div>
            <!-- /SCROLL DOWN -->
         </div>
      </header>
      <!-- /HEADER -->
      <!-- ICONS -->
      <div class="icons module" style="padding-bottom: 0px;">
      <div class="container">
         <!-- TITLE -->
         <div class="row">
            <div class="col-sm-12 ds-icons-title">
               <h2><?php
echo $lang['title'];
?></h2>
               <p>
                  <?php
echo $lang['slogan'];
?>
                  <br>
               </p>
            </div>
            <div class="col-sm-12 ds-icons-title" id="contact">
               <form class="cf" id="contact" method="POST" action="">
                  <div class="half left cf">
                     <input type="text" name="name" id="name" placeholder="Nom / Name" />
                     <input type="email" name="email" id="email" placeholder="Email" />
                     <input type="text" name="phone" id="phone" placeholder="Telephone / Phone" />
                     <input type="text" name="subject" id="subject" placeholder="Sujet / Subject" />
                     <input type="text" name="project" id="project" placeholder="Nom du Projet / Project Name" />
                     <input type="text" name="typeproject" id="typeproject" placeholder="Type de Projet / Project Type (ex:ecommerce)" />
                  </div>
                  <div class="half right cf">
                     <textarea name="message" type="text" id="message" placeholder="Message"></textarea>
                  </div>
                  <input type="submit" value="Submit / Envoyer" id="submit" name="submit">
               </form>
               <div id="back"></div>
            </div>
         </div>
         <!-- /TITLE -->
      </div>
      <!-- /ICONS -->
      <!-- CONTACT -->
      <div class="contact module">
         <div class="container">
            <div class="row">
               <div class="col-sm-3 ds-contact">
                  <h4>ADDRESS</h4>
                  <p>Montreal
                     <br>
                  </p>
                  <a href="https://g.page/allowebs?share">
                  <?php
echo $lang['moreinfos'];
?>
                  </a>
               </div>
               <div class="col-sm-3 ds-contact">
                  <h4><?php
echo $lang['moreinfos'];
?></h4>
                  <p>+1 438 397 0133 </p>
                  <p>+1 514 893 9709 </p>
               </div>
               <div class="col-sm-3 ds-contact">
                  <h4>EMAIL</h4>
                  <p>support@allowebs.com</p>
               </div>
               <div class="col-sm-3 ds-contact ds-footer-socials">
                  <h4>SOCIAL</h4>
                  <ul>
                     <li>
                        <a class="fa fa-facebook" href="https://www.facebook.com/allowebs"></a>
                     </li>
                     <li>
                        <a class="fa fa-google-plus" href="https://g.page/allowebs?share"></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- /CONTACT -->
      <!-- FOOTER -->
      <div class="footer module">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 ds-footer-copyrights">
                  <p>
                     <?php
echo $lang['copyright'];
?>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- /FOOTER -->
      <!-- jQuery -->
      <script src="js/jquery-1.11.0.min.js"></script>
      <!-- Backstretch -->
      <script src="js/jquery.backstretch.min.js"></script>
      <!-- slick -->
      <script src="js/slick.min.js"></script>
      <!-- Featherlight -->
      <script src="js/featherlight.min.js"></script>
      <!-- WordsRotator -->
      <script src="js/jquery.wordrotator.min.js"></script>
      <!-- Countdown -->
      <script src="js/jquery.countdown.js"></script>
      <!-- Smooth Scroll -->
      <script src="js/smoothscroll.js"></script>
      <!-- Ajax mailchimp -->
      <script src="js/jquery.ajaxchimp.js"></script>
      <!-- WOW.js -->
      <script src="js/wow.min.js"></script>
      <!-- Masnoo js scripts -->
      <script src="js/ds-masnoo.js"></script>
      <!-- Contact js scripts -->
      <script src="js/contact.js"></script>
   </body>
</html>
