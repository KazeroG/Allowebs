<?php include_once 'config.php';
if (isset($_REQUEST['submit']) and $_REQUEST['submit'] != "") {
 extract($_REQUEST);
 if ($entreprises == "") {
  header('location:' . $_SERVER['PHP_SELF'] . '?msg=un');
  exit;
 } elseif ($web == "") {
  header('location:' . $_SERVER['PHP_SELF'] . '?msg=ue');
  exit;
 } elseif ($description == "") {
  header('location:' . $_SERVER['PHP_SELF'] . '?msg=up');
  exit;
 } else {

  $userCount = $db->getQueryCount('users', 'id');
  if ($userCount[0]['total'] < 20) {
   $data = array(
    'entreprises' => $entreprises,
    'web'         => $web,
    'description' => $description,
   );
   $insert = $db->insert('users', $data);
   if ($insert) {
    header('location:index.php?msg=ras');
    exit;
   } else {
    header('location:index.php?msg=rna');
    exit;
   }
  } else {
   header('location:' . $_SERVER['PHP_SELF'] . '?msg=dsd');
   exit;
  }
 }
}
?>

<!doctype html>

<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"
    prefix="og: http://ogp.me/ns#" class="no-js">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Entrepreneurs QC</title>



    <link rel="shortcut icon" href="https: //allowebs.com/img/red.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->


    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6XQK13YLH"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-Y6XQK13YLH');
    </script>

</head>



<body>



    <div class="container">

        <h1><a href="https://allowebs.com/groupe-entrepreneur/">Entrepreneurs
                QC</a></h1>

        <?php

if (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "un") {

 echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> nom dentrprise est un champ obligatoire!</div>';

} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "ue") {

 echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> site web isest un champ obligatoire!</div>';

} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "up") {

 echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Description est un champ obligatoire!</div>';

} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "ras") {

 echo '<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Enregistrement ajouté avec succès</div>';

} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rna") {

 echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Un problème est survenu. <strong> Veuillez réessayer!!</strong></div>';

} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "dsd") {

 echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Veuillez supprimer un utilisateur, puis réessayer <strong> Nous avons défini une limite pour des raisons de sécurité!</strong></div>';

}

?>

        <div class="card">

            <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Ajouté une entreprise</strong> <a
                    href="index.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>
                    Parcourir les entreprises</a></div>

            <div class="card-body">



                <div class="col-sm-6">

                    <h5 class="card-title">Les champs avec <span class="text-danger"> * </span> sont obligatoires!</h5>

                    <form method="post">

                        <div class="form-group">

                            <label>Nom de l'entreprises<span class="text-danger">*</span></label>

                            <input type="text" name="entreprises" id="entreprises" class="form-control"
                                placeholder="Ex: Allowebs" required>

                        </div>

                        <div class="form-group">

                            <label>site web de l'entreprises<span class="text-danger">*</span></label>

                            <input type="text" name="web" id="web" class="form-control"
                                placeholder="Ex: allowebs.com (Sans https:// )" required>

                        </div>

                        <div class="form-group">

                            <label>Description de l'entreprises<span class="text-danger">*</span></label>

                            <input type="text" class="form-control" name="description" id="description"
                                placeholder="Ex: Agence Conception Web (500 caracteres)" required>
                        </div>

                        <div class="form-group">

                            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i
                                    class="fa fa-fw fa-plus-circle"></i>Ajouter</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
    <script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
    <script>
    $(document).ready(function() {
        jQuery(function($) {
            var input = $('[type=tel]')
            input.mobilePhoneNumber({
                allowPhoneWithoutPrefix: '+1'
            });
            input.bind('country.mobilePhoneNumber', function(e, country) {
                $('.country').text(country || '')
            })
        });
    });
    </script>



</body>

</html>
