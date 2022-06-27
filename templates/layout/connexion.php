<!DOCTYPE html>
<html class="loading" lang="fr" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Se connecter</title>
    <link rel="apple-touch-icon" href="bo/assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="bo/assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="bo/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="bo/assets/css/pages/authentication.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <a class="brand-logo" href="">
                            <h2 class="brand-text text-primary ms-1">Beeofeed - Administration   </h2>
                        </a>
                        <?= $this->Flash->render() ?>
                         <?= $this->fetch('login') ?> 
                     </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bo/assets/vendors/js/vendors.min.js"></script>
    <script src="bo/assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="bo/assets/js/core/app-menu.js"></script>
    <script src="bo/assets/js/core/app.js"></script>
    <script src="bo/assets/js/scripts/pages/auth-login.js"></script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>

</html>