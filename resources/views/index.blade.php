<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login Basic - Pages | Materio - Bootstrap Material Design Admin Template</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/materialdesignicons.css') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />
  <!-- Page CSS -->
  <!-- Page -->
  <!-- <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" /> -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/materialdesignicons.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <!-- Helpers -->
  <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('assets/js/config.js') }}"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
              <span style="color: var(--bs-primary)">
                <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor" />
                  <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black" />
                  <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor" />
                  <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black" />
                  <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3" />
                </svg>
              </span>
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">Materio</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
              <div data-i18n="Dashboards">Dashboards</div>
              <div class="badge bg-danger rounded-pill ms-auto">5</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/dashboards-crm.html" target="_blank" class="menu-link">
                  <div data-i18n="CRM">CRM</div>
                  <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                </a>
              </li>
              <li class="menu-item active">
                <a href="index.html" class="menu-link">
                  <div data-i18n="Analytics">Analytics</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html" target="_blank" class="menu-link">
                  <div data-i18n="eCommerce">eCommerce</div>
                  <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-logistics-dashboard.html" target="_blank" class="menu-link">
                  <div data-i18n="Logistics">Logistics</div>
                  <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-academy-dashboard.html" target="_blank" class="menu-link">
                  <div data-i18n="Academy">Academy</div>
                  <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
              <div data-i18n="Layouts">Layouts</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="layouts-without-menu.html" class="menu-link">
                  <div data-i18n="Without menu">Without menu</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-without-navbar.html" class="menu-link">
                  <div data-i18n="Without navbar">Without navbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-container.html" class="menu-link">
                  <div data-i18n="Container">Container</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-fluid.html" class="menu-link">
                  <div data-i18n="Fluid">Fluid</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-blank.html" class="menu-link">
                  <div data-i18n="Blank">Blank</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Front Pages -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
              <div data-i18n="Front Pages">Front Pages</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/landing-page.html" class="menu-link" target="_blank">
                  <div data-i18n="Landing">Landing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/pricing-page.html" class="menu-link" target="_blank">
                  <div data-i18n="Pricing">Pricing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/payment-page.html" class="menu-link" target="_blank">
                  <div data-i18n="Payment">Payment</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/checkout-page.html" class="menu-link" target="_blank">
                  <div data-i18n="Checkout">Checkout</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/help-center-landing.html" class="menu-link" target="_blank">
                  <div data-i18n="Help Center">Help Center</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-header fw-medium mt-4">
            <span class="menu-header-text">Apps &amp; Pages</span>
          </li>
          <!-- Apps -->
          <li class="menu-item">
            <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
              <div data-i18n="Email">Email</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-chat.html" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-message-outline"></i>
              <div data-i18n="Chat">Chat</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-calendar.html" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
              <div data-i18n="Calendar">Calendar</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-kanban.html" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
              <div data-i18n="Kanban">Kanban</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <!-- Pages -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
              <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="pages-account-settings-account.html" class="menu-link">
                  <div data-i18n="Account">Account</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-notifications.html" class="menu-link">
                  <div data-i18n="Notifications">Notifications</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-account-settings-connections.html" class="menu-link">
                  <div data-i18n="Connections">Connections</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-lock-open-outline"></i>
              <div data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="auth-login-basic.html" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Login</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Register</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Forgot Password</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
              <div data-i18n="Misc">Misc</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="pages-misc-error.html" class="menu-link">
                  <div data-i18n="Error">Error</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-misc-under-maintenance.html" class="menu-link">
                  <div data-i18n="Under Maintenance">Under Maintenance</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Components -->
          <li class="menu-header fw-medium mt-4"><span class="menu-header-text">Components</span></li>
          <!-- Cards -->
          <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
              <div data-i18n="Basic">Cards</div>
            </a>
          </li>
          <!-- User interface -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-archive-outline"></i>
              <div data-i18n="User interface">User interface</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="ui-accordion.html" class="menu-link">
                  <div data-i18n="Accordion">Accordion</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-alerts.html" class="menu-link">
                  <div data-i18n="Alerts">Alerts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-badges.html" class="menu-link">
                  <div data-i18n="Badges">Badges</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-buttons.html" class="menu-link">
                  <div data-i18n="Buttons">Buttons</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-carousel.html" class="menu-link">
                  <div data-i18n="Carousel">Carousel</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-collapse.html" class="menu-link">
                  <div data-i18n="Collapse">Collapse</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-dropdowns.html" class="menu-link">
                  <div data-i18n="Dropdowns">Dropdowns</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-footer.html" class="menu-link">
                  <div data-i18n="Footer">Footer</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-list-groups.html" class="menu-link">
                  <div data-i18n="List Groups">List groups</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-modals.html" class="menu-link">
                  <div data-i18n="Modals">Modals</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-navbar.html" class="menu-link">
                  <div data-i18n="Navbar">Navbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-offcanvas.html" class="menu-link">
                  <div data-i18n="Offcanvas">Offcanvas</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                  <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-progress.html" class="menu-link">
                  <div data-i18n="Progress">Progress</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-spinners.html" class="menu-link">
                  <div data-i18n="Spinners">Spinners</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-tabs-pills.html" class="menu-link">
                  <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-toasts.html" class="menu-link">
                  <div data-i18n="Toasts">Toasts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-tooltips-popovers.html" class="menu-link">
                  <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-typography.html" class="menu-link">
                  <div data-i18n="Typography">Typography</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Extended components -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-star-outline"></i>
              <div data-i18n="Extended UI">Extended UI</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                  <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-text-divider.html" class="menu-link">
                  <div data-i18n="Text Divider">Text Divider</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Icons -->
          <li class="menu-item">
            <a href="icons-mdi.html" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
              <div data-i18n="Icons">Icons</div>
            </a>
          </li>

          <!-- Forms & Tables -->
          <li class="menu-header fw-medium mt-4"><span class="menu-header-text">Forms &amp; Tables</span></li>
          <!-- Forms -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-form-select"></i>
              <div data-i18n="Form Elements">Form Elements</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="forms-basic-inputs.html" class="menu-link">
                  <div data-i18n="Basic Inputs">Basic Inputs</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-input-groups.html" class="menu-link">
                  <div data-i18n="Input groups">Input groups</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
              <div data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="form-layouts-vertical.html" class="menu-link">
                  <div data-i18n="Vertical Form">Vertical Form</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="form-layouts-horizontal.html" class="menu-link">
                  <div data-i18n="Horizontal Form">Horizontal Form</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Form Validation -->
          <li class="menu-item">
            <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/form-validation.html" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
              <div data-i18n="Form Validation">Form Validation</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <!-- Tables -->
          <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-table"></i>
              <div data-i18n="Tables">Tables</div>
            </a>
          </li>
          <!-- Data Tables -->
          <li class="menu-item">
            <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/tables-datatables-basic.html" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-grid"></i>
              <div data-i18n="Datatables">Datatables</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <!-- Misc -->
          <li class="menu-header fw-medium mt-4"><span class="menu-header-text">Misc</span></li>
          <li class="menu-item">
            <a href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free/issues" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
              <div data-i18n="Support">Support</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
              <div data-i18n="Documentation">Documentation</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="mdi mdi-menu mdi-24px"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none bg-body" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <a class="github-button" href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/materio-bootstrap-html-admin-template-free on GitHub">Star</a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                  <li>
                    <a class="dropdown-item pb-2 mb-1" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-2 pe-1">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-0">John Doe</h6>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider my-1"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-cog-outline me-1 mdi-20px"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 mdi mdi-credit-card-outline me-1 mdi-20px"></i>
                        <span class="flex-grow-1 align-middle ms-1">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider my-1"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);">
                      <i class="mdi mdi-power me-1 mdi-20px"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-4">
              <!-- Congratulations card -->
              <div class="col-md-12 col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-1">Congratulations John! 🎉</h4>
                    <p class="pb-0">Best seller of the month</p>
                    <h4 class="text-primary mb-1">$42.8k</h4>
                    <p class="mb-2 pb-1">78% of target 🚀</p>
                    <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
                  </div>
                  <img src="../assets/img/icons/misc/triangle-light.png" class="scaleX-n1-rtl position-absolute bottom-0 end-0" width="166" alt="triangle background" data-app-light-img="icons/misc/triangle-light.png" data-app-dark-img="icons/misc/triangle-dark.png" />
                  <img src="../assets/img/illustrations/trophy.png" class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4 pb-2" width="83" alt="view sales" />
                </div>
              </div>
              <!--/ Congratulations card -->

              <!-- Transactions -->
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Transactions</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                          <a class="dropdown-item" href="javascript:void(0);">Update</a>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3"><span class="fw-medium">Total 48.5% growth</span> 😎 this month</p>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-primary rounded shadow">
                              <i class="mdi mdi-trending-up mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Sales</div>
                            <h5 class="mb-0">245k</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-success rounded shadow">
                              <i class="mdi mdi-account-outline mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Customers</div>
                            <h5 class="mb-0">12.5k</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-warning rounded shadow">
                              <i class="mdi mdi-cellphone-link mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Product</div>
                            <h5 class="mb-0">1.54k</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-info rounded shadow">
                              <i class="mdi mdi-currency-usd mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Revenue</div>
                            <h5 class="mb-0">$88k</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Transactions -->

              <!-- Weekly Overview Chart -->
              <div class="col-xl-4 col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <h5 class="mb-1">Weekly Overview</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="weeklyOverviewDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                          <a class="dropdown-item" href="javascript:void(0);">Update</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="weeklyOverviewChart"></div>
                    <div class="mt-1 mt-md-3">
                      <div class="d-flex align-items-center gap-3">
                        <h3 class="mb-0">45%</h3>
                        <p class="mb-0">Your sales performance is 45% 😎 better compared to last month</p>
                      </div>
                      <div class="d-grid mt-3 mt-md-4">
                        <button class="btn btn-primary" type="button">Details</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Weekly Overview Chart -->

              <!-- Total Earnings -->
              <div class="col-xl-4 col-md-6">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Total Earning</h5>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="totalEarnings" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3 mt-md-3 mb-md-5">
                      <div class="d-flex align-items-center">
                        <h2 class="mb-0">$24,895</h2>
                        <span class="text-success ms-2 fw-medium">
                          <i class="mdi mdi-menu-up mdi-24px"></i>
                          <small>10%</small>
                        </span>
                      </div>
                      <small class="mt-1">Compared to $84,325 last year</small>
                    </div>
                    <ul class="p-0 m-0">
                      <li class="d-flex mb-4 pb-md-2">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="../assets/img/icons/misc/zipcar.png" alt="zipcar" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Zipcar</h6>
                            <small>Vuejs, React & HTML</small>
                          </div>
                          <div>
                            <h6 class="mb-2">$24,895.65</h6>
                            <div class="progress bg-label-primary" style="height: 4px">
                              <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex mb-4 pb-md-2">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="../assets/img/icons/misc/bitbank.png" alt="bitbank" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Bitbank</h6>
                            <small>Sketch, Figma & XD</small>
                          </div>
                          <div>
                            <h6 class="mb-2">$8,6500.20</h6>
                            <div class="progress bg-label-info" style="height: 4px">
                              <div class="progress-bar bg-info" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex mb-md-3">
                        <div class="avatar flex-shrink-0 me-3">
                          <img src="../assets/img/icons/misc/aviato.png" alt="aviato" class="rounded" />
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0">Aviato</h6>
                            <small>HTML & Angular</small>
                          </div>
                          <div>
                            <h6 class="mb-2">$1,2450.80</h6>
                            <div class="progress bg-label-secondary" style="height: 4px">
                              <div class="progress-bar bg-secondary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--/ Total Earnings -->

              <!-- Four Cards -->
              <div class="col-xl-4 col-md-6">
                <div class="row gy-4">
                  <!-- Total Profit line chart -->
                  <div class="col-sm-6">
                    <div class="card h-100">
                      <div class="card-header pb-0">
                        <h4 class="mb-0">$86.4k</h4>
                      </div>
                      <div class="card-body">
                        <div id="totalProfitLineChart" class="mb-3"></div>
                        <h6 class="text-center mb-0">Total Profit</h6>
                      </div>
                    </div>
                  </div>
                  <!--/ Total Profit line chart -->
                  <!-- Total Profit Weekly Project -->
                  <div class="col-sm-6">
                    <div class="card h-100">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="avatar">
                          <div class="avatar-initial bg-secondary rounded-circle shadow">
                            <i class="mdi mdi-poll mdi-24px"></i>
                          </div>
                        </div>
                        <div class="dropdown">
                          <button class="btn p-0" type="button" id="totalProfitID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body mt-mg-1">
                        <h6 class="mb-2">Total Profit</h6>
                        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                          <h4 class="mb-0 me-2">$25.6k</h4>
                          <small class="text-success mt-1">+42%</small>
                        </div>
                        <small>Weekly Project</small>
                      </div>
                    </div>
                  </div>
                  <!--/ Total Profit Weekly Project -->
                  <!-- New Yearly Project -->
                  <div class="col-sm-6">
                    <div class="card h-100">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="avatar">
                          <div class="avatar-initial bg-primary rounded-circle shadow-sm">
                            <i class="mdi mdi-wallet-travel mdi-24px"></i>
                          </div>
                        </div>
                        <div class="dropdown">
                          <button class="btn p-0" type="button" id="newProjectID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body mt-mg-1">
                        <h6 class="mb-2">New Project</h6>
                        <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                          <h4 class="mb-0 me-2">862</h4>
                          <small class="text-danger mt-1">-18%</small>
                        </div>
                        <small>Yearly Project</small>
                      </div>
                    </div>
                  </div>
                  <!--/ New Yearly Project -->
                  <!-- Sessions chart -->
                  <div class="col-sm-6">
                    <div class="card h-100">
                      <div class="card-header pb-0">
                        <h4 class="mb-0">2,856</h4>
                      </div>
                      <div class="card-body">
                        <div id="sessionsColumnChart" class="mb-3"></div>
                        <h6 class="text-center mb-0">Sessions</h6>
                      </div>
                    </div>
                  </div>
                  <!--/ Sessions chart -->
                </div>
              </div>
              <!--/ Total Earning -->

              <!-- Sales by Countries -->
              <div class="col-xl-4 col-md-6">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Sales by Countries</h5>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="saleStatus" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleStatus">
                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                          <div class="avatar-initial bg-label-success rounded-circle">US</div>
                        </div>
                        <div>
                          <div class="d-flex align-items-center gap-1">
                            <h6 class="mb-0">$8,656k</h6>
                            <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                            <small class="text-success">25.8%</small>
                          </div>
                          <small>United states of america</small>
                        </div>
                      </div>
                      <div class="text-end">
                        <h6 class="mb-0">894k</h6>
                        <small>Sales</small>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                          <span class="avatar-initial bg-label-danger rounded-circle">UK</span>
                        </div>
                        <div>
                          <div class="d-flex align-items-center gap-1">
                            <h6 class="mb-0">$2,415k</h6>
                            <i class="mdi mdi-chevron-down mdi-24px text-danger"></i>
                            <small class="text-danger">6.2%</small>
                          </div>
                          <small>United Kingdom</small>
                        </div>
                      </div>
                      <div class="text-end">
                        <h6 class="mb-0">645k</h6>
                        <small>Sales</small>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                          <span class="avatar-initial bg-label-warning rounded-circle">IN</span>
                        </div>
                        <div>
                          <div class="d-flex align-items-center gap-1">
                            <h6 class="mb-0">865k</h6>
                            <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                            <small class="text-success"> 12.4%</small>
                          </div>
                          <small>India</small>
                        </div>
                      </div>
                      <div class="text-end">
                        <h6 class="mb-0">148k</h6>
                        <small>Sales</small>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                          <span class="avatar-initial bg-label-secondary rounded-circle">JA</span>
                        </div>
                        <div>
                          <div class="d-flex align-items-center gap-1">
                            <h6 class="mb-0">$745k</h6>
                            <i class="mdi mdi-chevron-down mdi-24px text-danger"></i>
                            <small class="text-danger">11.9%</small>
                          </div>
                          <small>Japan</small>
                        </div>
                      </div>
                      <div class="text-end">
                        <h6 class="mb-0">86k</h6>
                        <small>Sales</small>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                          <span class="avatar-initial bg-label-danger rounded-circle">KO</span>
                        </div>
                        <div>
                          <div class="d-flex align-items-center gap-1">
                            <h6 class="mb-0">$45k</h6>
                            <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                            <small class="text-success">16.2%</small>
                          </div>
                          <small>Korea</small>
                        </div>
                      </div>
                      <div class="text-end">
                        <h6 class="mb-0">42k</h6>
                        <small>Sales</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Sales by Countries -->

              <!-- Deposit / Withdraw -->
              <div class="col-xl-8">
                <div class="card h-100">
                  <div class="card-body row g-2">
                    <div class="col-12 col-md-6 card-separator pe-0 pe-md-3">
                      <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                        <h5 class="m-0 me-2">Deposit</h5>
                        <a class="fw-medium" href="javascript:void(0);">View all</a>
                      </div>
                      <div class="pt-2">
                        <ul class="p-0 m-0">
                          <li class="d-flex mb-4 align-items-center pb-2">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/payments/gumroad.png" class="img-fluid" alt="gumroad" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Gumroad Account</h6>
                                <small>Sell UI Kit</small>
                              </div>
                              <h6 class="text-success mb-0">+$4,650</h6>
                            </div>
                          </li>
                          <li class="d-flex mb-4 align-items-center pb-2">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/payments/mastercard-2.png" class="img-fluid" alt="mastercard" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Mastercard</h6>
                                <small>Wallet deposit</small>
                              </div>
                              <h6 class="text-success mb-0">+$92,705</h6>
                            </div>
                          </li>
                          <li class="d-flex mb-4 align-items-center pb-2">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/payments/stripes.png" class="img-fluid" alt="stripes" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Stripe Account</h6>
                                <small>iOS Application</small>
                              </div>
                              <h6 class="text-success mb-0">+$957</h6>
                            </div>
                          </li>
                          <li class="d-flex mb-4 align-items-center pb-2">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/payments/american-bank.png" class="img-fluid" alt="american" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">American Bank</h6>
                                <small>Bank Transfer</small>
                              </div>
                              <h6 class="text-success mb-0">+$6,837</h6>
                            </div>
                          </li>
                          <li class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/payments/citi.png" class="img-fluid" alt="citi" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Bank Account</h6>
                                <small>Wallet deposit</small>
                              </div>
                              <h6 class="text-success mb-0">+$446</h6>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 ps-0 ps-md-3 mt-3 mt-md-2">
                      <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                        <h5 class="m-0 me-2">Withdraw</h5>
                        <a class="fw-medium" href="javascript:void(0);">View all</a>
                      </div>
                      <div class="pt-2">
                        <ul class="p-0 m-0">
                          <li class="d-flex mb-4 align-items-center pb-2">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/brands/google.png" class="img-fluid" alt="google" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Google Adsense</h6>
                                <small>Paypal deposit</small>
                              </div>
                              <h6 class="text-danger mb-0">-$145</h6>
                            </div>
                          </li>
                          <li class="d-flex mb-4 align-items-center pb-2">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/brands/github.png" class="img-fluid" alt="github" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Github Enterprise</h6>
                                <small>Security &amp; compliance</small>
                              </div>
                              <h6 class="text-danger mb-0">-$1870</h6>
                            </div>
                          </li>
                          <li class="d-flex mb-4 align-items-center pb-2">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/brands/slack.png" class="img-fluid" alt="slack" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Upgrade Slack Plan</h6>
                                <small>Debit card deposit</small>
                              </div>
                              <h6 class="text-danger mb-0">$450</h6>
                            </div>
                          </li>
                          <li class="d-flex mb-4 align-items-center pb-2">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/payments/digital-ocean.png" class="img-fluid" alt="digital" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Digital Ocean</h6>
                                <small>Cloud Hosting</small>
                              </div>
                              <h6 class="text-danger mb-0">-$540</h6>
                            </div>
                          </li>
                          <li class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <img src="../assets/img/icons/brands/aws.png" class="img-fluid" alt="aws" height="30" width="30" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">AWS Account</h6>
                                <small>Choosing a Cloud Platform</small>
                              </div>
                              <h6 class="text-danger mb-0">-$21</h6>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Deposit / Withdraw -->

              <!-- Data Tables -->
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="table-light">
                        <tr>
                          <th class="text-truncate">User</th>
                          <th class="text-truncate">Email</th>
                          <th class="text-truncate">Role</th>
                          <th class="text-truncate">Age</th>
                          <th class="text-truncate">Salary</th>
                          <th class="text-truncate">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                <img src="../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0 text-truncate">Jordan Stevenson</h6>
                                <small class="text-truncate">@amiccoo</small>
                              </div>
                            </div>
                          </td>
                          <td class="text-truncate">susanna.Lind57@gmail.com</td>
                          <td class="text-truncate">
                            <i class="mdi mdi-laptop mdi-24px text-danger me-1"></i> Admin
                          </td>
                          <td class="text-truncate">24</td>
                          <td class="text-truncate">34500$</td>
                          <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                <img src="../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                                <small class="text-truncate">@brossiter15</small>
                              </div>
                            </div>
                          </td>
                          <td class="text-truncate">estelle.Bailey10@gmail.com</td>
                          <td class="text-truncate">
                            <i class="mdi mdi-pencil-outline text-info mdi-24px me-1"></i> Editor
                          </td>
                          <td class="text-truncate">29</td>
                          <td class="text-truncate">64500$</td>
                          <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                <img src="../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                                <small class="text-truncate">@bemblinf</small>
                              </div>
                            </div>
                          </td>
                          <td class="text-truncate">milo86@hotmail.com</td>
                          <td class="text-truncate">
                            <i class="mdi mdi-cog-outline text-warning mdi-24px me-1"></i> Author
                          </td>
                          <td class="text-truncate">44</td>
                          <td class="text-truncate">94500$</td>
                          <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0 text-truncate">Bertha Biner</h6>
                                <small class="text-truncate">@bbinerh</small>
                              </div>
                            </div>
                          </td>
                          <td class="text-truncate">lonnie35@hotmail.com</td>
                          <td class="text-truncate">
                            <i class="mdi mdi-pencil-outline text-info mdi-24px me-1"></i> Editor
                          </td>
                          <td class="text-truncate">19</td>
                          <td class="text-truncate">4500$</td>
                          <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                <img src="../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0 text-truncate">Beverlie Krabbe</h6>
                                <small class="text-truncate">@bkrabbe1d</small>
                              </div>
                            </div>
                          </td>
                          <td class="text-truncate">ahmad_Collins@yahoo.com</td>
                          <td class="text-truncate">
                            <i class="mdi mdi-chart-donut mdi-24px text-success me-1"></i> Maintainer
                          </td>
                          <td class="text-truncate">22</td>
                          <td class="text-truncate">10500$</td>
                          <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0 text-truncate">Bradan Rosebotham</h6>
                                <small class="text-truncate">@brosebothamz</small>
                              </div>
                            </div>
                          </td>
                          <td class="text-truncate">tillman.Gleason68@hotmail.com</td>
                          <td class="text-truncate">
                            <i class="mdi mdi-pencil-outline text-info mdi-24px me-1"></i> Editor
                          </td>
                          <td class="text-truncate">50</td>
                          <td class="text-truncate">99500$</td>
                          <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0 text-truncate">Bree Kilday</h6>
                                <small class="text-truncate">@bkildayr</small>
                              </div>
                            </div>
                          </td>
                          <td class="text-truncate">otho21@gmail.com</td>
                          <td class="text-truncate">
                            <i class="mdi mdi-account-outline mdi-24px text-primary me-1"></i> Subscriber
                          </td>
                          <td class="text-truncate">23</td>
                          <td class="text-truncate">23500$</td>
                          <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                        </tr>
                        <tr class="border-transparent">
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-3">
                                <img src="../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0 text-truncate">Breena Gallemore</h6>
                                <small class="text-truncate">@bgallemore6</small>
                              </div>
                            </div>
                          </td>
                          <td class="text-truncate">florencio.Little@hotmail.com</td>
                          <td class="text-truncate">
                            <i class="mdi mdi-account-outline mdi-24px text-primary me-1"></i> Subscriber
                          </td>
                          <td class="text-truncate">33</td>
                          <td class="text-truncate">20500$</td>
                          <td><span class="badge bg-label-secondary rounded-pill">Inactive</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/ Data Tables -->
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
              <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                <div class="text-body mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
                </div>
                <div class="d-none d-lg-inline-block">
                  <a href="https://themeselection.com/license/" class="footer-link me-3" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-3">More Themes</a>

                  <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-3">Documentation</a>

                  <a href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free/issues" target="_blank" class="footer-link">Support</a>
                </div>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <div class="buy-now">
    <a href="https://themeselection.com/item/materio-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
  <!-- END: Page Vendor JS-->
  <!-- BEGIN: Theme JS-->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>