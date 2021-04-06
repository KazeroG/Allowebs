<?php include_once 'config.php'; ?>
<?php include_once '../lang/lang.php'; ?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"
    prefix="og: http://ogp.me/ns#" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Entrepreneurs QC</title>
    <link rel="shortcut icon" href="//allowebs.com/img/red.png" alt="allowebs logo" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <style>
    table {
        table-layout: fixed;
        border-collapse: collapse;
        width: 100%;
        text-size-adjust: auto;
    }

    @media (min-width: 1200px) {
        #container {
            max-width: 100%;
        }
    }
    </style>

    <script id="domain" data-name="1147785" type="text/javascript"
        src="https://seo.allowebs.com/intra/js/analytics_js/client.js"></script>
</head>

<body>

    <?php $condition = '';

if (isset($_REQUEST['entreprises']) and $_REQUEST['entreprises'] != "") {
 $condition .= ' AND entreprises LIKE "%' . $_REQUEST['entreprises'] . '%" ';
}

if (isset($_REQUEST['web']) and $_REQUEST['web'] != "") {
 $condition .= ' AND web LIKE "%' . $_REQUEST['web'] . '%" ';
}

if (isset($_REQUEST['description']) and $_REQUEST['description'] != "") {
 $condition .= ' AND description LIKE "%' . $_REQUEST['description'] . '%" ';
}

if (isset($_REQUEST['df']) and $_REQUEST['df'] != "") {

 $condition .= ' AND DATE(dt)>="' . $_REQUEST['df'] . '" ';

}

if (isset($_REQUEST['dt']) and $_REQUEST['dt'] != "") {

 $condition .= ' AND DATE(dt)<="' . $_REQUEST['dt'] . '" ';

}

$userData = $db->getAllRecords('users', '*', $condition, 'ORDER BY id DESC');

?><div class="container" id="container">
        <h1><a href="https://allowebs.com/groupe-entrepreneur/">Entrepreneurs
                QC</a></h1>
        <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-globe"></i><strong>Parcourir les entreprises</strong><a
                    href="add-users.php" class="float-right btn btn-dark btn-sm"><i
                        class="fa fa-fw fa-plus-circle"></i>Ajouté une entreprise</a></div>
            <div class="card-body"><?php if (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rds") {
 echo '<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Enregistrement supprimé avec succès!</div>';
} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rus") {
 echo '<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Enregistrement mis à jour avec succès!</div>';
} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rnu") {
 echo '<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> Tu nas rien changé!</div>';
} elseif (isset($_REQUEST['msg']) and $_REQUEST['msg'] == "rna") {
 echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Un problème est survenu. <strong> Veuillez réessayer!!</strong></div>';
} ?>
                <div class="col-sm-12">
                    <h5 class="card-title"><i class="fa fa-fw fa-search"></i>Trouver des entreprises</h5>
                    <form method="get">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group"><label>Nom</label><input type="text" name="entreprises"
                                        id="entreprises" class="form-control"
                                        value="<?php echo isset($_REQUEST['entreprises']) ? $_REQUEST['entreprises'] : '' ?>"
                                        placeholder="Nom de l'entreprise"></div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group"><label>Site web</label><input type="text" name="web" id="web"
                                        class="form-control"
                                        value="<?php echo isset($_REQUEST['web']) ? $_REQUEST['web'] : '' ?>"
                                        placeholder="site web de l'entreprise"></div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group"><label>Description</label><input type="text" name="description"
                                        id="description" class="form-control"
                                        value="<?php echo isset($_REQUEST['description']) ? $_REQUEST['description'] : '' ?>"
                                        placeholder="description de l'entreprise"></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group"><label>Date</label>
                                    <div class="input-group"><input type="text"
                                            class="fromDate form-control hasDatepicker" name="df" id="df" value=""
                                            placeholder="Entrer à partir de la date">
                                        <div class="input-group-prepend"><span class="input-group-text">-</span></div>
                                        <input type="text" class="toDate form-control hasDatepicker" name="dt" id="dt"
                                            value="" placeholder="Enter to date">
                                        <div class="input-group-append"><span class="input-group-text"><a
                                                    href="javascript:;" onclick="$('#df,#dt').val('');"><i
                                                        class="fa fa-fw fa-sync"></i></a></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group"><label>&nbsp;
                                    </label>
                                    <div><button type="submit" name="submit" value="search" id="submit"
                                            class="btn btn-primary"><i class="fa fa-fw fa-search"></i>Chercher
                                        </button><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-danger"><i
                                                class="fa fa-fw fa-sync"></i>Reset</a></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white">
                        <th class="exsmall">#</th>
                        <th class="small">Nom</th>
                        <th class="medium">site web</th>
                        <th class="absorbing-column">Description</th>
                        <th class="medium">Date d'ajout</th>
                    </tr>
                </thead>
                <tbody><?php if (count($userData) > 0) {
 $s = '';

 foreach ($userData as $val) {
  $s++;
  ?><tr>
                        <td><?php echo $s;
  ?></td>
                        <td><?php echo $val['entreprises'];
  ?></td>
                        <td><?php echo $val['web'];
  ?></td>
                        <td><?php echo $val['description'];
  ?></td>
                        <td align="center"><?php echo date('Y-m-d', strtotime($val['dt']));
  ?></td>
                    </tr><?php
}
} else {
 ?><tr>
                        <td colspan="6" align="center">Aucun enregistrement trouvé !</td>
                    </tr><?php
}

?></tbody>
            </table>
        </div>
        <?php echo $lang['copyright-groupe-entrepreneur']; ?>
        </br>Membres du groupe : <br>
        <a href="https://www.facebook.com/groups/EntrepreneursQC">Entrepreneurs Québec</a>
        <a href="https://www.facebook.com/groups/Entreprendtu">Entreprend tu ?</a>
        <br>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mobilephonenumber/1.0.7/jquery.mobilePhoneNumber.js">
    </script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        jQuery(function($) {
            //From, To date range start
            var dateFormat = "yy-mm-dd";

            fromDate = $(".fromDate").datepicker({
                        changeMonth: true,
                        dateFormat: 'yy-mm-dd',
                        numberOfMonths: 2
                    }

                ).on("change", function() {
                        toDate.datepicker("option", "minDate", getDate(this));
                    }

                ),
                toDate = $(".toDate").datepicker({
                        changeMonth: true,
                        dateFormat: 'yy-mm-dd',
                        numberOfMonths: 2
                    }

                ).on("change", function() {
                        fromDate.datepicker("option", "maxDate", getDate(this));
                    }

                );


            function getDate(element) {
                var date;

                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }

            //From, To date range End here

        });
    });
    </script>
</body>

</html>
