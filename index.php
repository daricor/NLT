<!DOCTYPE html>
<html lang="fr" id="top">
    <head>
        <meta charset="UTF-8">
        <title>Newsletter</title>
        <!--<link rel="icon" type="image/png" href="meteo.png" />-->
        <script src="https:////code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
        <script src="./js/bootstrap-filestyle.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
        <script src="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/locales/bootstrap-datepicker.fr.min.js"></script>
        <script src="plugin/tinymce/js/tinymce/tinymce.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="./css/newsletter.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster"  type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css"/>

    </head>
    <body>
        <!-- Configuration de l'application -->
        <?php //require_once './includes/configuration.inc.php'; ?>
        <?php require_once './controller/system.php'; ?>

        <div class="container">
            <div class="row">
                <!-- Inclusion de la navigation -->
                <?php require_once './views/navigation.inc.php'; ?>
                <!-- Inclusion de la page demandée/attendue -->
                <?php System::getView(isset($_GET['p']) ? $_GET['p'] : null); ?>
            </div>
        </div>
    </body>
</html>