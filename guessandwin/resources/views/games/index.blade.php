<!DOCTYPE html>


<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,SCSS,HTML,RWD,Dashboard">
    <title>CoreUI Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">

    <link href="{{url('css/template.css')}}" rel="stylesheet">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-118965717-1');
    </script>
</head>

<body class="dark-theme">
    <div class="sidebar sidebar-light sidebar-fixed sidebar-self-hiding-xl" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link" href="index.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg> Dashboard<span class="badge bg-info-gradient ms-auto">NEW</span></a></li>
            <li class="nav-title">Theme</li>
            <li class="nav-item"><a class="nav-link" href="colors.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
                    </svg> Colors</a></li>
            <li class="nav-item"><a class="nav-link" href="typography.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                    </svg> Typography</a></li>
            <li class="nav-title">Components</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg> Base</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span>
                            Accordion</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span>
                            Breadcrumb</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"></span>
                            Cards</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"></span>
                            Carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"></span>
                            Collapse</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"></span>
                            List group</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/navs.html"><span class="nav-icon"></span>
                            Navs</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"></span>
                            Pagination</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"></span>
                            Popovers</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"></span>
                            Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><span class="nav-icon"></span>
                            Scrollspy</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"></span>
                            Spinners</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"></span>
                            Tables</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/tabs.html"><span class="nav-icon"></span>
                            Tabs</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"></span>
                            Tooltips</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
                    </svg> Buttons</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"></span>
                            Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span
                                class="nav-icon"></span> Buttons Group</a></li>
                    <li class="nav-item"><a class="nav-link" href="buttons/loading-buttons.html"> Loading Buttons<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span
                                class="nav-icon"></span> Dropdowns</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                    </svg> Forms</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="forms/form-control.html"> Form Control</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/select.html"> Select</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/multi-select.html"><span
                                class="nav-icon"></span> Multi Select<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"> Checks and radios</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/range.html"> Range</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/input-group.html"> Input group</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"> Floating labels</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/layout.html"> Layout</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/validation.html"> Validation</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg> Icons</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span
                                class="badge badge-sm bg-success ms-auto">Free</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons -
                            Brand</a></li>
                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons -
                            Flag</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg> Notifications</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span
                                class="nav-icon"></span> Alerts</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span
                                class="nav-icon"></span> Badge</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span
                                class="nav-icon"></span> Modals</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span
                                class="nav-icon"></span> Toasts</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="widgets.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                    </svg> Widgets<span class="badge bg-info-gradient ms-auto">NEW</span></a></li>
            <li class="nav-divider"></li>
            <li class="nav-title">Plugins</li>
            <li class="nav-item"><a class="nav-link" href="calendar.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                    </svg> Calendar<span class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
            <li class="nav-item"><a class="nav-link" href="charts.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                    </svg> Charts</a></li>
            <li class="nav-item"><a class="nav-link" href="datatables.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-spreadsheet"></use>
                    </svg> DataTables<span class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
            <li class="nav-item"><a class="nav-link" href="google-maps.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-map"></use>
                    </svg> Google Maps<span class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
            <li class="nav-title">Extras</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg> Pages</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg> Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg> Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                            </svg> Error 404</a></li>
                    <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                            </svg> Error 500</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
                    </svg> Apps</a>
                <ul class="nav-group-items">
                    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                            </svg> Invoicing</a>
                        <ul class="nav-group-items">
                            <li class="nav-item"><a class="nav-link" href="apps/invoicing/invoice.html"> Invoice<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg> Email</a>
                        <ul class="nav-group-items">
                            <li class="nav-item"><a class="nav-link" href="apps/email/inbox.html"> Inbox<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="apps/email/message.html"> Message<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="apps/email/compose.html"> Compose<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item mt-auto"><a class="nav-link" href="docs.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                    </svg> Docs</a></li>
            <li class="nav-title">System Utilization</li>
            <li class="nav-item px-3 d-narrow-none">
                <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis-inverse">348 Processes. 1/4 Cores.</small>
            </li>
            <li class="nav-item px-3 d-narrow-none">
                <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-warning-gradient" role="progressbar" style="width: 70%"
                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis-inverse">11444GB/16384MB</small>
            </li>
            <li class="nav-item px-3 mb-3 d-narrow-none">
                <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 95%"
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis-inverse">243GB/256GB</small>
            </li>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="sidebar sidebar-light sidebar-lg sidebar-end sidebar-overlaid sidebar-self-hiding-xxl" id="aside">
        <div class="sidebar-header bg-transparent p-0">
            <ul class="nav nav-underline nav-underline-primary" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#timeline" role="tab">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#messages" role="tab">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#settings" role="tab">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                        </svg></a></li>
            </ul>
            <button class="sidebar-close" type="button" data-coreui-close="sidebar">
                <svg class="icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-x"></use>
                </svg>
            </button>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="list-group list-group-flush">
                    <div
                        class="list-group-item border-start-4 border-start-secondary bg-light text-center fw-bold text-medium-emphasis text-uppercase small">
                        Today</div>
                    <div class="list-group-item border-start-4 border-start-warning list-group-item-divider">
                        <div class="avatar avatar-lg float-end"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"></div>
                        <div>Meeting with <strong>Lucas</strong></div><small class="text-medium-emphasis me-3">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg> 1 - 3pm</small><small class="text-medium-emphasis">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                            </svg> Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item border-start-4 border-start-info">
                        <div class="avatar avatar-lg float-end"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                alt="user@email.com"></div>
                        <div>Skype with <strong>Megan</strong></div><small class="text-medium-emphasis me-3">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg> 4 - 5pm</small><small class="text-medium-emphasis">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-skype"></use>
                            </svg> On-line</small>
                    </div>
                    <div
                        class="list-group-item border-start-4 border-start-secondary bg-light text-center fw-bold text-medium-emphasis text-uppercase small">
                        Tomorrow</div>
                    <div class="list-group-item border-start-4 border-start-danger list-group-item-divider">
                        <div>New UI Project - <strong>deadline</strong></div><small class="text-medium-emphasis me-3">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg> 10 - 11pm</small><small class="text-medium-emphasis">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                            </svg> creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/2.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/3.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/5.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/6.jpg"
                                    alt="user@email.com"></div>
                        </div>
                    </div>
                    <div class="list-group-item border-start-4 border-start-success list-group-item-divider">
                        <div><strong>#10 Startups.Garden</strong> Meetup</div><small class="text-medium-emphasis me-3">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg> 1 - 3pm</small><small class="text-medium-emphasis">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                            </svg> Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item border-start-4 border-start-primary list-group-item-divider">
                        <div><strong>Team meeting</strong></div><small class="text-medium-emphasis me-3">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                            </svg> 4 - 6pm</small><small class="text-medium-emphasis">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                            </svg> creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/2.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/3.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/5.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/6.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                                    alt="user@email.com"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                            class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                            class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                            class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                            class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                            class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>
                <div class="aside-options">
                    <div class="clearfix mt-4">
                        <div class="form-check form-switch form-switch-lg">
                            <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox"
                                checked="">
                            <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                                1</label>
                        </div>
                    </div>
                    <div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <div class="form-check form-switch form-switch-lg">
                            <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox">
                            <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                                2</label>
                        </div>
                    </div>
                    <div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <div class="form-check form-switch form-switch-lg">
                            <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox">
                            <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                                3</label>
                        </div>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <div class="form-check form-switch form-switch-lg">
                            <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox"
                                checked="">
                            <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                                4</label>
                        </div>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small></div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis">348 Processes. 1/4 Cores.</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small></div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis">11444GB/16384MB</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small></div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis">243GB/256GB</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small></div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis">25GB/256GB</small>
            </div>
        </div>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                </ul>
                <nav class="header-nav ms-auto me-4">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input class="btn-check" id="btn-light-theme" type="radio" name="theme-switch"
                            autocomplete="off" value="light" onchange="handleThemeChange(this)">
                        <label class="btn btn-primary" for="btn-light-theme">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sun"></use>
                            </svg>
                        </label>
                        <input class="btn-check" id="btn-dark-theme" type="radio" name="theme-switch" autocomplete="off"
                            value="dark" onchange="handleThemeChange(this)">
                        <label class="btn btn-primary" for="btn-dark-theme">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                            </svg>
                        </label>
                    </div>
                </nav>
                <ul class="header-nav me-3">
                    <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon icon-lg my-1 mx-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg><span
                                class="badge rounded-pill position-absolute top-0 end-0 bg-danger-gradient">5</span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                            <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2 text-success">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                                </svg> New user registered</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-danger">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
                                </svg> User deleted</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-info">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart"></use>
                                </svg> Sales report is ready</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-success">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                                </svg> New client</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-warning">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                </svg> Server overloaded</a>
                            <div class="dropdown-header bg-light"><strong>Server</strong></div><a
                                class="dropdown-item d-block" href="#">
                                <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div><span
                                    class="progress progress-thin">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </span><small class="text-medium-emphasis">348 Processes. 1/4 Cores.</small>
                            </a><a class="dropdown-item d-block" href="#">
                                <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div><span
                                    class="progress progress-thin">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </span><small class="text-medium-emphasis">11444GB/16384MB</small>
                            </a><a class="dropdown-item d-block" href="#">
                                <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div><span
                                    class="progress progress-thin">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%"
                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </span><small class="text-medium-emphasis">243GB/256GB</small>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon icon-lg my-1 mx-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                            </svg><span
                                class="badge rounded-pill position-absolute top-0 end-0 bg-warning-gradient">5</span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                            <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div><a
                                class="dropdown-item d-block" href="#">
                                <div class="small mb-1">Upgrade NPM &amp; Bower<span
                                        class="float-end"><strong>0%</strong></span></div><span
                                    class="progress progress-thin">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block" href="#">
                                <div class="small mb-1">ReactJS Version<span
                                        class="float-end"><strong>25%</strong></span></div><span
                                    class="progress progress-thin">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block" href="#">
                                <div class="small mb-1">VueJS Version<span class="float-end"><strong>50%</strong></span>
                                </div><span class="progress progress-thi n">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block" href="#">
                                <div class="small mb-1">Add new layouts<span
                                        class="float-end"><strong>75%</strong></span></div><span
                                    class="progress progress-thin">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block" href="#">
                                <div class="small mb-1">Angular 8 Version<span
                                        class="float-end"><strong>100%</strong></span></div><span
                                    class="progress progress-thin">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item text-center border-top" href="#"><strong>View all
                                    tasks</strong></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon icon-lg my-1 mx-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg><span
                                class="badge rounded-pill position-absolute top-0 end-0 bg-info-gradient">7</span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                            <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a
                                class="dropdown-item" href="#">
                                <div class="message">
                                    <div class="py-3 me-3 float-start">
                                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                                alt="user@email.com"><span class="avatar-status bg-success"></span>
                                        </div>
                                    </div>
                                    <div><small class="text-medium-emphasis">John Doe</small><small
                                            class="text-medium-emphasis float-end mt-1">Just now</small></div>
                                    <div class="text-truncate font-weight-bold"><span class="text-danger">!</span>
                                        Important message</div>
                                    <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="message">
                                    <div class="py-3 me-3 float-start">
                                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/6.jpg"
                                                alt="user@email.com"><span class="avatar-status bg-warning"></span>
                                        </div>
                                    </div>
                                    <div><small class="text-medium-emphasis">John Doe</small><small
                                            class="text-medium-emphasis float-end mt-1">5 minutes ago</small></div>
                                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                    <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="message">
                                    <div class="py-3 me-3 float-start">
                                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/5.jpg"
                                                alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                                    </div>
                                    <div><small class="text-medium-emphasis">John Doe</small><small
                                            class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                    <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="message">
                                    <div class="py-3 me-3 float-start">
                                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                                alt="user@email.com"><span class="avatar-status bg-info"></span></div>
                                    </div>
                                    <div><small class="text-medium-emphasis">John Doe</small><small
                                            class="text-medium-emphasis float-end mt-1">4:03 PM</small></div>
                                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                    <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                                </div>
                            </a><a class="dropdown-item text-center border-top" href="#"><strong>View all
                                    messages</strong></a>
                        </div>
                    </li>
                </ul>
                <ul class="header-nav me-4">
                    <li class="nav-item dropdown d-flex align-items-center"><a class="nav-link py-0"
                            data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                                    alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Account</div>
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                </svg> Updates<span class="badge badge-sm bg-info-gradient ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                </svg> Messages<span class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                                </svg> Tasks<span class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                                </svg> Comments<span class="badge badge-sm bg-warning-gradient ms-2">42</span></a>
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg> Profile</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                </svg> Settings</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                                </svg> Payments<span
                                    class="badge badge-sm bg-secondary-gradient text-dark ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                                </svg> Projects<span class="badge badge-sm bg-primary-gradient ms-2">42</span></a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                </svg> Lock Account</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg> Logout</a>
                        </div>
                    </li>
                </ul>
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
                    </svg>
                </button>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Theme</a>
                        </li>
                        <li class="breadcrumb-item active"><span>Colors</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="card mb-4">
                    <div class="card-header"> Theme colors</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="bg-primary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                                <h6>Brand Primary Color</h6>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="bg-secondary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                                <h6>Brand Secondary Color</h6>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="bg-success theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                                <h6>Brand Success Color</h6>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="bg-danger theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                                <h6>Brand Danger Color</h6>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="bg-warning theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                                <h6>Brand Warning Color</h6>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="bg-info theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                                <h6>Brand Info Color</h6>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="bg-light theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                                <h6>Brand Light Color</h6>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="bg-dark theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                                <h6>Brand Dark Color</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div><a href="https://coreui.io">CoreUI</a> © 2021 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI PRO</a></div>
        </footer>
    </div>

    <script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <script>
        if (document.body.classList.contains('dark-theme')) {
            var element = document.getElementById('btn-dark-theme');
            if (typeof (element) != 'undefined' && element != null) {
                document.getElementById('btn-dark-theme').checked = true;
            }
        } else {
            var element = document.getElementById('btn-light-theme');
            if (typeof (element) != 'undefined' && element != null) {
                document.getElementById('btn-light-theme').checked = true;
            }
        }

        function handleThemeChange(src) {
            var event = document.createEvent('Event');
            event.initEvent('themeChange', true, true);

            if (src.value === 'light') {
                document.body.classList.remove('dark-theme');
            }
            if (src.value === 'dark') {
                document.body.classList.add('dark-theme');
            }
            document.body.dispatchEvent(event);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/autoloader/prism-autoloader.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>

    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/colors.js"></script>
    <script>
    </script>
</body> 

</html>