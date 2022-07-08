<!DOCTYPE html>
<html class="loading" lang="fr" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="tableau de bord administration Candice VIVIAN-LATIL Diététicienne Nutritionniste">
    <meta name="keywords" content="tableau de bord administration Candice VIVIAN-LATIL Diététicienne Nutritionniste">
    <meta name="author" content="Alexis OLIVE">
    <title>Dashboard - Candice Diététique</title>
    <link rel="apple-touch-icon" href="/bo/assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/bo/    assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/vendors/css/vendors.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/vendors/css/charts/apexcharts.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/vendors/css/extensions/toastr.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/bootstrap-extended.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/colors.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/components.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/themes/dark-layout.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/themes/bordered-layout.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/themes/semi-dark-layout.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/core/menu/menu-types/vertical-menu.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/pages/dashboard-ecommerce.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/plugins/charts/chart-apex.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/plugins/extensions/ext-component-toastr.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= $this->Url->build('/bo/assets/css/custom.css'); ?>">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">


</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <!--   <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="<?= $this->Url->build('/backoffice/tasks') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                </ul> -->
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?= $this->Identity->get('prenom') ?> <?= $this->Identity->get('nom') ?></span><span class="user-status">Bonjour Candice !</span></div><span class="avatar"><img class="round" style="background-color:#fff" src="<?= $this->Url->build('\img\logo\android-chrome-192x192.png'); ?>" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="auth-login-cover.html"><i class="me-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= $this->Url->build('/assets/images/icons/xls.png'); ?>" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= $this->Url->build('/assets/images/icons/jpg.png'); ?>" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= $this->Url->build('/assets/images/icons/pdf.png'); ?>" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= $this->Url->build('/assets/images/icons/doc.png'); ?>" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= $this->Url->build('webroot\img\logo\android-chrome-192x192.png'); ?>" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= $this->Url->build('/assets/images/portrait/small/avatar-s-1.jpg'); ?>" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= $this->Url->build('/assets/images/portrait/small/avatar-s-14.jpg'); ?>" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="<?= $this->Url->build('/assets/images/portrait/small/avatar-s-6.jpg'); ?>" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="/html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                        </span>
                        <h2 class="brand-text">Dashboard</h2>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?= $this->Url->build('/backoffice') ?>"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Accueil</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-email.html"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Email</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?= $this->Url->build('/backoffice/newsletters') ?>"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Newsletter">Newsletter</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?= $this->Url->build('/backoffice/tasks') ?>"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Liste des tâches</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="<?= $this->Url->build('/backoffice/sliders') ?>"><i class="fa-solid fa-images"></i><span class="menu-title text-truncate" data-i18n="Calendar">Slider</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="File Manager">File Manager</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="app-content content ">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">Copyrights &copy; <?php echo date("Y") ?> Candice VIVIAN-LATIL - Site developpé par <a href=https://github.com/AlexDev4 target="_blank">Alexis OLIVE</a>.</p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>

    <script src="<?= $this->Url->build('/bo/assets/vendors/js/vendors.min.js'); ?>"></script>
    <script src="<?= $this->Url->build('/bo/assets/vendors/js/charts/apexcharts.min.js'); ?>"></script>
    <script src="<?= $this->Url->build('/bo/assets/vendors/js/extensions/toastr.min.js'); ?>"></script>
    <script src="<?= $this->Url->build('/bo/assets/js/core/app-menu.js'); ?>"></script>
    <script src="<?= $this->Url->build('/bo/assets/js/core/app.js'); ?>"></script>
    <script src="<?= $this->Url->build('/bo/assets/js/scripts/pages/dashboard-ecommerce.js'); ?>"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.12.1/dataRender/datetime.js"></script>
    <script src="https://kit.fontawesome.com/2ace45f598.js" crossorigin="anonymous"></script>




    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
        $(document).ready(function() {
            $('.data-table-tasks').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.12.1/i18n/fr-FR.json",
                },
                "ordering": false,
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                    'csvHtml5',
                    {
                        text: 'Créer une nouvelle tâche',
                        className: 'btn-add',
                        action: function(e, dt, button, config) {
                            window.location = '<?= $this->Url->build('/backoffice/tasks/add') ?>'
                        }
                    }
                ]
            });
            $('.data-table-news').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.12.1/i18n/fr-FR.json",
                },
                "ordering": false,
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                    'csvHtml5',
                ]
            });
        });
    </script>
</body>

</html>