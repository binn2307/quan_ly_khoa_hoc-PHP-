
<?php
if(!defined('_BIN')){
    die('Truy cập ko hợp lệ!');
}


?>

<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Đăng nhập</title>

    <!--begin::Theme Init (prevents flash of incorrect theme on load, #6043)-->
    <script>
      (() => {
        'use strict';
        const root = document.documentElement;

        // Applications with their own theming opt out of AdminLTE's color mode
        // entirely, here as well as in the bundle.
        if (root.getAttribute('data-lte-color-mode') === 'off') {
          return;
        }

        const STORAGE_KEY = 'lte-theme';
        let stored = null;
        try {
          stored = localStorage.getItem(STORAGE_KEY);
        } catch {
          // localStorage may be unavailable (private mode, sandboxed iframe).
        }
        // Mirror the precedence in color-mode.ts: the visitor's stored choice
        // wins, then a theme this page declared itself, then the OS preference.
        const authored = root.getAttribute('data-bs-theme');
        let resolved = 'light';
        if (stored === 'dark' || stored === 'light') {
          resolved = stored;
        } else if (authored === 'dark' || authored === 'light') {
          resolved = authored;
        } else if (globalThis.matchMedia('(prefers-color-scheme: dark)').matches) {
          resolved = 'dark';
        }
        root.setAttribute('data-bs-theme', resolved);
        root.style.colorScheme = resolved;
        // Flag values computed here, so the bundle does not mistake them for a
        // theme the page declared and stop following the OS preference.
        if (resolved !== authored) {
          root.setAttribute('data-lte-theme-resolved', '');
        }
      })();
    </script>
    <!--end::Theme Init-->

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="./css/adminlte.css" as="style" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.3.1/index.css"
      integrity="sha256-VzMk9RVNVApO0cXfOO7il3dD8OPyu0aDyyLDd8EEGk8="
      crossorigin="anonymous"
      media="print"
      onload="this.media = 'all'"
    />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.17.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?php echo _HOST_URL_TEMPLATES; ?>/assets/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->

  </head>
  <!--end::Head-->
  
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link"
                data-lte-toggle="sidebar"
                href="#"
                role="button"
                aria-label="Toggle sidebar"
              >
                <i class="bi bi-list"></i>
              </a>
            </li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                data-lte-toggle="fullscreen"
                aria-label="Toggle fullscreen"
              >
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit d-none"></i>
              </a>
            </li>
            <!--end::Fullscreen Toggle-->

            <!--begin::Color Mode Toggle (#6010)-->
            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="#"
                id="bd-theme"
                aria-label="Toggle color scheme"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-sun-fill" data-lte-theme-icon="light"></i>
                <i class="bi bi-moon-fill d-none" data-lte-theme-icon="dark"></i>
                <i class="bi bi-circle-half d-none" data-lte-theme-icon="auto"></i>
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="bd-theme"
                style="--bs-dropdown-min-width: 8rem"
              >
                <li>
                  <button
                    type="button"
                    class="dropdown-item d-flex align-items-center"
                    data-bs-theme-value="light"
                    aria-pressed="false"
                  >
                    <i class="bi bi-sun-fill me-2"></i>
                    Light
                    <i class="bi bi-check-lg ms-auto d-none"></i>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item d-flex align-items-center"
                    data-bs-theme-value="dark"
                    aria-pressed="false"
                  >
                    <i class="bi bi-moon-fill me-2"></i>
                    Dark
                    <i class="bi bi-check-lg ms-auto d-none"></i>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item d-flex align-items-center active"
                    data-bs-theme-value="auto"
                    aria-pressed="true"
                  >
                    <i class="bi bi-circle-half me-2"></i>
                    Auto
                    <i class="bi bi-check-lg ms-auto d-none"></i>
                  </button>
                </li>
              </ul>
            </li>
            <!--end::Color Mode Toggle-->

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="data:image/jpeg;base64,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"
                  class="user-image rounded-circle shadow"
                  alt="Alexander Pierce"
                />
                <span class="d-none d-xl-inline">BINXU</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK58jO2-R-On5ygDtfNP-IayA1lmByfv_EzsSdLBcuZA&s=10"
                    class="rounded-circle shadow"
                    alt="Alexander Pierce"
                  />
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2023</small>
                  </p>
                </li>
                <li class="user-footer">

                  <a href="#" class="btn btn-outline-secondary" style="width: 100%">Profile</a>
                </li>
                                  
                <!--end::User Image-->
                <!--begin::Menu Footer-->
                <li class="user-footer">

                  <a href="#" class="btn btn-outline-danger float-end" style="width: 100%">Sign out</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
