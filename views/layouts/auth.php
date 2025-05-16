<!-- header files -->
<?php

use sigawa\mvccore\Application;
use sigawa\mvccore\AuthProvider;

$requiredProfile = Application::$app->session->get('password_expired');
$farmerProfileSession = Application::$app->session->get('farmer');
$VoterProfileSession = Application::$app->session->get('Voter');
$permissions = Application::$app->user->getPermissions();
$user = AuthProvider::user();
if (!$user) {
    Application::$app->session->remove('password_expired');
    header('Location: /login');
    exit;
}
if ($farmerProfileSession) {
    Application::$app->session->remove('password_expired');
}
// Redirect Voters to /landing
if ($VoterProfileSession) {
    header('Location: /landing');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="mcdcu" name="author">
    <link rel="shortcut icon" href="/assets1/favicon/favicon.ico" type="image/x-icon">
    <title>Mount Kenya Farmers management Portal| <?= $this->title ?>;</title>
    <!--font-awesome-css-->
    <link href="/assets1/vendor/fontawesome/css/all.css" rel="stylesheet">

    <link href="/assets1/vendor/notifications/toastify.min.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="/assets1/css2?family=Montserrat:ital,wght@0,100900;1,100900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/45.0.0/ckeditor5.css" />
    <!-- iconoir icon css  -->
    <link href="/assets1/vendor/ionio-icon/css/iconoir.css" rel="stylesheet">
    <!-- GridJs -->
    <link href="/assets1/vendor/gridjs/theme/mermaid.min.css" rel="stylesheet" type="text/css" />

    <!-- Animation css -->
    <link href="/assets1/vendor/animation/animate.min.css" rel="stylesheet">

    <!-- tabler icons-->
    <link href="/assets1/vendor/tabler-icons/tabler-icons.css" rel="stylesheet" type="text/css">

    <!--flag Icon css-->
    <link href="/assets1/vendor/flag-icons-master/flag-icon.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap css-->
    <link href="/assets1/vendor/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- apexcharts css-->
    <link href="/assets1/vendor/apexcharts/apexcharts.css" rel="stylesheet" type="text/css">

    <!-- simplebar css-->
    <link href="/assets1/vendor/simplebar/simplebar.css" rel="stylesheet" type="text/css">

    <!-- slick css -->
    <link href="/assets1/vendor/slick/slick.css" rel="stylesheet">
    <link href="/assets1/vendor/slick/slick-theme.css" rel="stylesheet">
    <!-- filepond css -->
    <link href="/assets1/vendor/filepond/filepond.css" rel="stylesheet">
    <link href="/assets1/vendor/filepond/image-preview.min.css" rel="stylesheet">
    <!-- App css-->
    <link href="/assets1/css/style.css" rel="stylesheet" type="text/css">
    <!-- Responsive css-->
    <link href="/assets1/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- Data Table css-->
    <link href="/assets1/vendor/datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="/assets1/vendor/datatable/datatable2/buttons.dataTables.min.css" rel="stylesheet" type="text/css">


    <style>
        #table-gridjs .gridjs thead th {
            background-color: #3730a3;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            border-bottom: 2px solid #d9a500;
            padding: 12px 8px;
        }

        #table-gridjs {
            border-radius: 2px;
        }

        #table-gridjs {
            width: 100%;
        }

        .gridjs-container {
            width: 100% !important;
        }

        .gridjs-table {
            width: 100% !important;
            table-layout: auto !important;
        }
    </style>



</head>

<body>
    <div class="app-wrapper">
        <div class="loader-wrapper">
            <div class="app-loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Menu Navigation starts -->
        <nav>
            <div class="app-logo text-center">
                <a class="logo d-inline-block" href="/dashboard">
                    <img alt="#" class="h-50 w-60 img-fluid" src="/assets1/images/logo/1.png">
                </a>
                <span class="bg-light-primary toggle-semi-nav">
                    <i class="ti ti-chevrons-right f-s-20"></i>
                </span>
            </div>
            <div class="app-nav" id="app-simple-bar">
                <ul class="main-nav p-0 mt-2">

                    <li>
                        <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#dashboard">
                            <i class="iconoir-home-alt"></i>
                            dashboard
                            <span class="badge text-primary-dark bg-primary-300  badge-notification ms-2">2</span>
                        </a>
                        <ul class="collapse" id="dashboard">
                            <?php if (isset($permissions['ai_dept'])): ?>
                                <li><a href="/ai_dashboard">AI departmnet</a></li>
                            <?php endif; ?>
                            <?php if (isset($permissions['exs_dept'])): ?>
                                <li><a href="/ex_dashboard">Extension department</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php if (isset($permissions['farmers_access'])): ?>
                        <li>
                            <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#apps">
                                <i class="iconoir-community"></i>
                                Farmers
                            </a>
                            <ul class="collapse" id="apps">
                                <?php if (isset($permissions['manage_farmers_report'])): ?>
                                    <li><a href="/farmers">Manage Farmers/Reports</a></li>
                                <?php endif; ?>
                                <?php if (isset($permissions['see_my_listings'])): ?>
                                    <li><a href="/listings_farm">My Listings</a></li>
                                    <li class="another-level">
                                        <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#my_request">
                                            My Requests
                                        </a>
                                        <ul class="collapse" id="my_request">
                                            <li><a href="/ai_service">AI Service</a></li>
                                            <li><a href="/extension_service">Extension Service</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                                <?php if (isset($permissions['manage_listings'])): ?>
                                    <li class="another-level">
                                        <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#Profile-page">
                                            Farmer Listings
                                        </a>
                                        <ul class="collapse" id="Profile-page">
                                            <li><a href="/listings">Listings Manage</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                                <?php if (isset($permissions['manage_societies'])): ?>
                                    <li class="another-level">
                                        <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#projects-page">
                                            societies
                                        </a>
                                        <ul class="collapse" id="projects-page">
                                            <li><a href="societies">Societies List</a></li>
                                            <li><a href="societies-reports">Reports</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </li>
                    <?php endif; ?>

                    <li>
                        <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#ui-kits">

                            <i class="iconoir-handbag"></i>
                            Stock management
                        </a>
                        <ul class="collapse" id="ui-kits">
                            <?php if (isset($permissions['manage_stocks'])): ?>
                                <li><a href="/stocks">Stocks Management</a></li>
                            <?php endif; ?>
                            <?php if (isset($permissions['manage_stocks']) || isset($permissions['purchase_stocks'])): ?>
                                <li><a href="/create_purchase">Create Purchases</a></li>
                                <li><a href="/purchase-reports">Stock & Purchase Report</a></li>
                            <?php endif; ?>
                            <?php if (isset($permissions['manage_stocks']) || isset($permissions['transfer_stocks']) || isset($permissions['purchase_stocks'])): ?>
                                <li><a href="/create_transfer">Request Stock Transfer</a></li>
                            <?php endif; ?>
                            <?php if (isset($permissions['manage_stocks'])): ?>
                                <li><a href="/approve_requests">Manage Transfer Requests</a></li>
                            <?php endif; ?>
                            <?php if (isset($permissions['manage_stocks']) || isset($permissions['allocate_stocks']) || isset($permissions['purchase_stocks'])): ?>
                                <li><a href="/allocations">Create/Manage Allocations</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>

                    <?php if (isset($permissions['software_developer']) || isset($permissions['manage_users'])): ?>
                        <li>
                            <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#ui-manage">
                                <i class="iconoir-settings"></i>
                                Admin Management
                            </a>
                            <ul class="collapse" id="ui-manage">
                                <li><a href="/roles">Roles Management</a></li>
                                <li><a href="/users">Users Management</a></li>
                            </ul>
                        </li>

                    <?php endif; ?>
                    <li>
                        <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#services">
                            <i class="iconoir-keyframes-couple"></i>
                            Services
                        </a>
                        <ul class="collapse" id="services">
                            <li class="another-level">
                                <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#my_request">
                                    Farmer Requests
                                </a>
                                <ul class="collapse" id="my_request">
                                    <?php if (isset($permissions['ai_dept'])): ?>
                                        <li><a href="/farmer_ai_request">AI Service</a></li>
                                    <?php endif; ?>
                                    <?php if (isset($permissions['exs_dept'])): ?>
                                        <li><a href="/farmer_extension_request">Extension Service</a></li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                            <?php if (isset($permissions['manage_invoices'])): ?>
                                <li><a href="/services">Services Offered</a></li>
                            <?php endif; ?>

                            <li><a href="/missed_cases">Missed Cases</a></li>
                        </ul>
                    </li>

                    <?php if (isset($permissions['exs_dept'])): ?>
                        <li>
                            <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#inquiries">
                                <i class="iconoir-help-circle"></i>
                                Inquiries
                            </a>
                            <ul class="collapse" id="inquiries">
                                <li><a href="/listing_inquiry">Voters Inquiry</a></li>
                                <li><a href="/inquiry">Extension Inquiries</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if (isset($permissions['publisher'])): ?>
                        <li class="another-level">
                            <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#learning">
                                <i class="iconoir-open-book"></i>
                                Learning
                            </a>
                            <ul class="collapse" id="learning">
                                <li><a href="/create_blog">Create Blog</a></li>
                                <li><a href="/manage_blog">Manage Blogs</a></li>
                                <li><a href="/#">Learning Materials</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li class="another-level">
                        <a aria-expanded="false" class="" data-bs-toggle="collapse" href="#society">
                            <i class="iconoir-open-book"></i>
                            Society
                        </a>
                        <ul class="collapse" id="society">
                            <li><a href="/insurances">Insurance</a></li>
                        </ul>
                    </li>
                    <li class="no-sub">
                        <a class="mb-0" href="/auth/staff/logout" role="button">
                            <i class="ph-duotone  ph-sign-out pe-1 f-s-20"></i> Log Out
                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu-navs">
                <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
                <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
            </div>

        </nav>
        <!-- Menu Navigation ends -->


        <div class="app-content ">
            <div class="">

                <!-- Header Section starts -->
                <header class="header-main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 col-sm-4 d-flex align-items-center header-left p-0">
                                <span class="header-toggle me-3">
                                    <i class="iconoir-view-grid"></i>
                                </span>
                            </div>

                            <div class="col-6 col-sm-8 d-flex align-items-center justify-content-end header-right p-0">

                                <li class="header-profile">
                                    <a aria-controls="profilecanvasRight" class="d-block head-icon" data-bs-target="#profilecanvasRight" data-bs-toggle="offcanvas" href="#" role="button">
                                        <img alt="avtar" class="b-r-50 h-35 w-35 bg-dark" src="/assets1/images/avtar/woman.jpg">
                                    </a>

                                    <div aria-labelledby="profilecanvasRight" class="offcanvas offcanvas-end header-profile-canvas" id="profilecanvasRight" tabindex="-1">
                                        <div class="offcanvas-body app-scroll">
                                            <ul class="">
                                                <li class="d-flex gap-3 mb-3">
                                                    <div class="d-flex-center">
                                                        <span class="h-45 w-45 d-flex-center b-r-10 position-relative">
                                                            <img alt="" class="img-fluid b-r-10" src="/assets1/images/avtar/woman.jpg">
                                                        </span>
                                                    </div>
                                                    <div class="text-center mt-2">
                                                        <h6 class="mb-0"> <?= htmlspecialchars($user->fname) ?> <?= htmlspecialchars($user->lname) ?> <img alt="instagram-check-mark" class="w-20 h-20" src="/assets1/images/profile-app/01.png"></h6>
                                                        <p class="f-s-12 mb-0 text-secondary"></p> <?= $user->email ?> </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a class="f-w-500" href="/profile">
                                                        <i class="iconoir-user-love pe-1 f-s-20"></i> Profile
                                                        Details
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="f-w-500" href="/settings">
                                                        <i class="iconoir-settings pe-1 f-s-20"></i> Settings
                                                    </a>
                                                </li>
                                                <li class="app-divider-v dotted py-1"></li>
                                                <li>
                                                    <a class="mb-0 btn btn-light-danger btn-sm justify-content-center " href="/auth/staff/logout" role="button">
                                                        <i class="ph-duotone  ph-sign-out pe-1 f-s-20"></i> Log Out
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Header Section ends -->
                {{content}}
            </div>
        </div>
        <!-- Body main section ends -->


        <!-- tap on top -->
        <div class="go-top">
            <span class="progress-value">
                <i class="ti ti-chevron-up"></i>
            </span>
        </div>


        <!-- Footer Section starts-->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-12">
                        <ul class="footer-text">
                            <li>
                                <p class="mb-0">2025© Mt Kenya Milk</p>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </footer>
        <!-- Footer Section ends-->
    </div>


    <!-- modal -->

    <div class="modal" data-bs-backdrop="static" id="welcomeCard">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content welcome-card">

                <div class="modal-body p-0">
                    <div class="text-center position-relative welcome-card-content z-1 p-3">
                        <div class="text-end position-relative z-1">
                            <i class="ti ti-x fs-5 text-dark f-w-600" data-bs-dismiss="modal"></i>
                        </div>
                        <h2 class="f-w-700 text-primary-dark mb-0"><span>Welcome!</span> <img alt="gif" class="w-45 d-inline align-baseline" src="/assets1/images/dashboard/ecommerce-dashboard/celebration.gif">
                        </h2>

                        <div class="modal-img-box">
                            <img alt="img" class=" img-fluid" src="/assets1/images/modals/welcome-1.png">
                        </div>
                        <div class="modal-btn mb-4">
                            <button class="btn btn-primary text-white btn-sm rounded" data-bs-dismiss="modal" type="button">
                                Get Started
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /product -->
    <?php if ($requiredProfile): ?>
        <div class="modal fade show" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true" style="display: block; background: rgba(0, 0, 0, 0.5); z-index: 1050;">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content shadow-lg border-0 rounded-3">
                    <div class="modal-header bg-dark text-white rounded-top">
                        <h5 class="modal-title text-white" id="profileModalLabel">🔐 Update Your Password</h5>
                        <a href="/auth/staff/logout" class="btn btn-sm btn-outline-light ms-auto" title="Logout">
                            <i class="bi bi-box-arrow-right">Logout</i>
                        </a>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">Your password has expired. Please update it to regain full access.</p>
                        <div class="alert alert-warning py-1 small mb-3">
                            <strong>Note:</strong> Passwords expire every 30 days for security.
                        </div>
                        <form id="updatePasswordForm" data-user-id="<?= $user->id ?>">
                            <div class="mb-3 position-relative">
                                <label for="old_password" class="form-label">Old Password</label>
                                <input type="password" class="form-control" id="old_password" name="old_password" required>
                                <span toggle="#old_password" class="toggle-password iconoir-eye position-absolute top-50 end-0 translate-middle-y me-2 cursor-pointer"></span>
                            </div>

                            <div class="mb-3 position-relative">
                                <label for="new_password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="new_password" name="new_password" required minlength="8">
                                <span toggle="#new_password" class="toggle-password iconoir-eye position-absolute top-50 end-0 translate-middle-y me-2 cursor-pointer"></span>
                                <div class="progress mt-2">
                                    <div class="progress-bar" id="passwordStrengthBar" role="progressbar" style="width: 0%"></div>
                                </div>
                                <small id="passwordStrengthText" class="form-text text-muted"></small>
                            </div>

                            <div class="mb-3 position-relative">
                                <label for="confirm_password" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                <span toggle="#confirm_password" class="toggle-password iconoir-eye position-absolute top-50 end-0 translate-middle-y me-2 cursor-pointer"></span>
                                <small id="confirmFeedback" class="form-text"></small>
                            </div>

                            <button type="submit" id="profile_update_btn" class="btn btn-success w-100 mt-2">
                                🔄 Update Password
                            </button>
                        </form>
                        <div id="passwordUpdateFeedback" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- toastify js -->
    <script src="/scripts/auth/expiredPassword.js"></script>
    <script src="/assets1/vendor/notifications/toastify-js.js"></script>
</body>

</html>