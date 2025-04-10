<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

?>

<!-- This code use for render base file -->
<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <?php include "temp/head.php" ?>

    </head>

    <body class="">

        <!-- Start::main-switcher -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header border-bottom d-block p-0">
                <div class="d-flex align-items-center justify-content-between p-3">
                    <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <nav class="border-top border-block-start-dashed">
                    <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                        <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                            type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                        <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                            type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                    </div>
                </nav>
            </div>
            <div class="offcanvas-body">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                        tabindex="0">
                        <div class="">
                            <p class="switcher-style-head">Theme Color Mode:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-light-theme">
                                            Light
                                        </label>
                                        <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                            checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-dark-theme">
                                            Dark
                                        </label>
                                        <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Directions:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-ltr">
                                            LTR
                                        </label>
                                        <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-rtl">
                                            RTL
                                        </label>
                                        <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Navigation Styles:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-vertical">
                                            Vertical
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                            checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-horizontal">
                                            Horizontal
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-style"
                                            id="switcher-horizontal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navigation-menu-styles">
                            <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                            <div class="row switcher-style gx-0 pb-2 gy-2">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-menu-click">
                                            Menu Click
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                            id="switcher-menu-click">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-menu-hover">
                                            Menu Hover
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                            id="switcher-menu-hover">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-icon-click">
                                            Icon Click
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                            id="switcher-icon-click">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-icon-hover">
                                            Icon Hover
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                            id="switcher-icon-hover">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidemenu-layout-styles">
                            <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                            <div class="row switcher-style gx-0 pb-2 gy-2">
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-default-menu">
                                            Default Menu
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-default-menu" checked>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-closed-menu">
                                            Closed Menu
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-closed-menu">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-icontext-menu">
                                            Icon Text
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-icontext-menu">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-icon-overlay">
                                            Icon Overlay
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-icon-overlay">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-detached">
                                            Detached
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-detached">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-double-menu">
                                            Double Menu
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-double-menu">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Page Styles:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-regular">
                                            Regular
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-classic">
                                            Classic
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-modern">
                                            Modern
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Layout Width Styles:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-sm-4 col-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-full-width">
                                            Full Width
                                        </label>
                                        <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                            checked>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-boxed">
                                            Boxed
                                        </label>
                                        <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Menu Positions:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-menu-fixed">
                                            Fixed
                                        </label>
                                        <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                            checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-menu-scroll">
                                            Scrollable
                                        </label>
                                        <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Header Positions:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-header-fixed">
                                            Fixed
                                        </label>
                                        <input class="form-check-input" type="radio" name="header-positions"
                                            id="switcher-header-fixed" checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-header-scroll">
                                            Scrollable
                                        </label>
                                        <input class="form-check-input" type="radio" name="header-positions"
                                            id="switcher-header-scroll">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Loader:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-loader-enable">
                                            Enable
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-loader"
                                            id="switcher-loader-enable">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-loader-disable">
                                            Disable
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-loader"
                                            id="switcher-loader-disable" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                        <div>
                            <div class="theme-colors">
                                <p class="switcher-style-head">Menu Colors:</p>
                                <div class="d-flex switcher-style pb-2">
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                            id="switcher-menu-light" checked>
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                            id="switcher-menu-dark">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                            id="switcher-menu-primary">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                            id="switcher-menu-gradient">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-transparent"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                            type="radio" name="menu-colors" id="switcher-menu-transparent">
                                    </div>
                                </div>
                                <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                            </div>
                            <div class="theme-colors">
                                <p class="switcher-style-head">Header Colors:</p>
                                <div class="d-flex switcher-style pb-2">
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                            id="switcher-header-light" checked>
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                            id="switcher-header-dark">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                            id="switcher-header-primary">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                            id="switcher-header-gradient">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                            id="switcher-header-transparent">
                                    </div>
                                </div>
                                <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                            </div>
                            <div class="theme-colors">
                                <p class="switcher-style-head">Theme Primary:</p>
                                <div class="d-flex flex-wrap align-items-center switcher-style">
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-1" type="radio"
                                            name="theme-primary" id="switcher-primary">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-2" type="radio"
                                            name="theme-primary" id="switcher-primary1">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                            id="switcher-primary2">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                            id="switcher-primary3">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                            id="switcher-primary4">
                                    </div>
                                    <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                        <div class="theme-container-primary"></div>
                                        <div class="pickr-container-primary"  onchange="updateChartColor(this.value)"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-colors">
                                <p class="switcher-style-head">Theme Background:</p>
                                <div class="d-flex flex-wrap align-items-center switcher-style">
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-1" type="radio"
                                            name="theme-background" id="switcher-background">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-2" type="radio"
                                            name="theme-background" id="switcher-background1">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                            id="switcher-background2">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-4" type="radio"
                                            name="theme-background" id="switcher-background3">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-5" type="radio"
                                            name="theme-background" id="switcher-background4">
                                    </div>
                                    <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                        <div class="theme-container-background"></div>
                                        <div class="pickr-container-background"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-image mb-3">
                                <p class="switcher-style-head">Menu With Background Image:</p>
                                <div class="d-flex flex-wrap align-items-center switcher-style">
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img1" type="radio"
                                            name="menu-background" id="switcher-bg-img">
                                    </div>
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img2" type="radio"
                                            name="menu-background" id="switcher-bg-img1">
                                    </div>
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img3" type="radio" name="menu-background"
                                            id="switcher-bg-img2">
                                    </div>
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img4" type="radio"
                                            name="menu-background" id="switcher-bg-img3">
                                    </div>
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img5" type="radio"
                                            name="menu-background" id="switcher-bg-img4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between canvas-footer flex-nowrap gap-2">
                         <a href="https://themeforest.net/item/zeno-php-bootstrap-dashboard-admin-panel-template/57477093" target="_blank" class="btn btn-primary text-nowrap flex-fill">Buy Now</a>  
                         <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-secondary text-nowrap flex-fill">Our Portfolio</a>  
                        <a href="javascript:void(0);" id="reset-all" class="btn btn-danger flex-fill">Reset</a> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End::main-switcher -->

        <!-- Loader -->
        <div id="loader" >
            <img src="https://php.spruko.com/zeno/zeno/assets/images/media/loader.svg" alt="">
        </div>
        <!-- Loader -->

        <div class="page">

            <?php include "temp/header.php" ?>

            <?php include "temp/sideheader.php" ?>

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    	
                    <!-- Start::page-header -->
                    <div class="d-flex align-items-center justify-content-between my-4 page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <p class="fw-medium fs-20 mb-0">Hey, Jack Miller &#128075;</p>
                            <p class="fs-13 text-muted mb-0">Manage customers and sales with real-time insights.</p>
                        </div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div>
                                <input type="text" class="form-control breadcrumb-input" id="daterange" placeholder="Search By Date Range">
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <button class="btn bg-white text-default border btn-wave btn-icon pt-1">
                                    <i class="ri-upload-cloud-line align-middle"></i>
                                </button>
                                <button class="btn btn-primary btn-wave border-0"> <i class="ri-filter-3-fill me-2 lh-1 align-middle"></i>Filter </button>
                            </div>
                        </div>
                    </div>
                    <!-- End::page-header -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xxl-9">
                            <div class="row">
                                <div class="col-xxl-5">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap mb-3">
                                                        <div>
                                                            <span class="avatar avatar-rounded bg-primary-transparent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="72" x2="128" y2="88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="128" y1="168" x2="128" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M104,168h36a20,20,0,0,0,0-40H116a20,20,0,0,1,0-40h36" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
                                                            </span>
                                                            <h4 class="mb-0 mt-3 fw-smeibold">$315,244</h4>
                                                            <div class="fs-12 text-muted fw-medium">Total Revenue</div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block text-success lh-1 fs-12 fw-medium"><i class="ti ti-trending-up me-1 align-middle fs-16 d-inline-block"></i>12%</span>
                                                            <span class="text-muted fs-11 op-5 fw-medium">This week</span>
                                                        </div>
                                                    </div>
                                                    <div id="total-revenue"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap mb-3">
                                                        <div>
                                                            <span class="avatar avatar-rounded bg-success-transparent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="144" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M72,216a65,65,0,0,1,112,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M164,72.55a32,32,0,1,1,39.63,45.28c14.33,3.1,27.89,14.84,36.4,26.17" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M16,144c8.51-11.33,22.06-23.07,36.4-26.17A32,32,0,1,1,92,72.55" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
                                                            </span>
                                                            <h4 class="mb-0 mt-3 fw-smeibold">153,432</h4>
                                                            <div class="fs-12 text-muted fw-medium">Total Customers</div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block text-danger lh-1 fs-12 fw-medium"><i class="ti ti-trending-down me-1 align-middle fs-16 d-inline-block"></i>5%</span>
                                                            <span class="text-muted fs-11 op-5 fw-medium">This week</span>
                                                        </div>
                                                    </div>
                                                    <div id="total-customers"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap mb-3">
                                                        <div>
                                                            <span class="avatar avatar-rounded bg-info-transparent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="80" y1="100" x2="176" y2="100" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="80" y1="140" x2="176" y2="140" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M32,208V56a8,8,0,0,1,8-8H216a8,8,0,0,1,8,8V208l-32-16-32,16-32-16L96,208,64,192Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
                                                            </span>
                                                            <h4 class="mb-0 mt-3 fw-smeibold">75,275</h4>
                                                            <div class="fs-12 text-muted fw-medium">Total Transactions</div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block text-success lh-1 fs-12 fw-medium"><i class="ti ti-trending-up me-1 align-middle fs-16 d-inline-block"></i>11%</span>
                                                            <span class="text-muted fs-11 op-5 fw-medium">This week</span>
                                                        </div>
                                                    </div>
                                                    <div id="total-transactions"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-end gap-2 justify-content-between flex-wrap mb-3">
                                                        <div>
                                                            <span class="avatar avatar-rounded bg-secondary-transparent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="32.7 76.92 128 129.08 223.3 76.92" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="128" y1="129.09" x2="128" y2="231.97" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M219.84,182.84l-88,48.18a8,8,0,0,1-7.68,0l-88-48.18a8,8,0,0,1-4.16-7V80.18a8,8,0,0,1,4.16-7l88-48.18a8,8,0,0,1,7.68,0l88,48.18a8,8,0,0,1,4.16,7v95.64A8,8,0,0,1,219.84,182.84Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><polyline points="81.56 48.31 176 100 176 152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
                                                            </span>
                                                            <h4 class="mb-0 mt-3 fw-smeibold">6,26,532</h4>
                                                            <div class="fs-12 text-muted fw-medium">Total Products</div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="d-block text-success lh-1 fs-12 fw-medium"><i class="ti ti-trending-up me-1 align-middle fs-16 d-inline-block"></i>6.5%</span>
                                                            <span class="text-muted fs-11 op-5 fw-medium">This week</span>
                                                        </div>
                                                    </div>
                                                    <div id="total-products"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card overflow-hidden">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">Orders Overview</div>
                                                    <a href="javascript:void(0);" class="fs-13 text-muted"> View All<i
                                                            class="ti ti-arrow-narrow-right ms-1 d-inline-block"></i> </a>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="px-4 py-3 border-bottom">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <h5 class="mb-0">1,45,876</h5>
                                                                <span class="d-block fs-12 text-muted">Orders</span>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <span class="text-orange fw-medium d-block">+0.125%</span>
                                                                <span class="fs-11 text-muted mb-0">This Month</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="progress-stacked progress-animate bg-transparent progress-sm mt-2 mb-1">
                                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                                                style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                                                style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                                style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                            <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar"
                                                                style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table text-nowrap">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div class="lh-1"> 
                                                                                <span
                                                                        class="avatar avatar-md border border-primary border-primary border-opacity-25 avatar-rounded">
                                                                        <span
                                                                            class="avatar avatar-sm bg-primary-transparent  avatar-rounded">
                                                                            <i class="ri-box-3-fill fs-20"></i>
                                                                        </span>
                                                                    </span>
                                                                            </div>
                                                                            <div> <span
                                                                                class="fw-medium d-block">Delivered</span> <span
                                                                                class="d-block text-muted fs-12">12,864 Orders</span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger badge bg-danger-transparent fw-medium"><i class="ri-arrow-down-line"></i>12.6%</span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <div>
                                                                            <span class="d-block fw-medium mb-0">$5,11,754</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div class="lh-1"> 
                                                                                <span
                                                                                class="avatar avatar-md border border-secondary border-secondary border-opacity-25 avatar-rounded">
                                                                                <span
                                                                                    class="avatar avatar-sm bg-secondary-transparent  avatar-rounded">
                                                                                    <i class="ri-survey-fill fs-20"></i>
                                                                                </span>
                                                                            </span>
                                                                            </div>
                                                                            <div> <span
                                                                                class="fw-medium d-block">Pending</span> <span
                                                                                class="d-block text-muted fs-12">15,875 Orders</span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success badge bg-success-transparent fw-medium"><i class="ri-arrow-up-line"></i>2.76%</span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <div> <span class="d-block fw-medium mb-0">$1,234.78</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div class="lh-1"> 
                                                                                <span
                                                                                class="avatar avatar-md border border-orange border-orange border-opacity-25 avatar-rounded">
                                                                                <span
                                                                                    class="avatar avatar-sm bg-orange-transparent  avatar-rounded">
                                                                                    <i class="ri-close-circle-fill fs-20"></i>
                                                                                </span>
                                                                            </span> 
                                                                            </div>
                                                                            <div> <span
                                                                                class="fw-medium d-block">Cancelled</span> <span
                                                                                class="d-block text-muted fs-12">32,190 Orders</span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger badge bg-danger-transparent fw-medium"><i class="ri-arrow-down-line"></i>4.76%</span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <div> <span class="d-block fw-medium mb-0">$1,234.78</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="border-bottom-0">
                                                                        <div class="d-flex align-items-center gap-2">
                                                                            <div class="lh-1"> 
                                                                                <span
                                                                                class="avatar avatar-md border border-info border-info border-opacity-25 avatar-rounded">
                                                                                <span class="avatar avatar-sm bg-info-transparent  avatar-rounded">
                                                                                    <i class="ri-caravan-fill fs-20"></i>
                                                                                </span>
                                                                            </span>
                                                                            </div>
                                                                            <div> <span
                                                                                class="fw-medium d-block">Returned</span> <span
                                                                                class="d-block text-muted fs-12">19,765 Orders</span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="border-bottom-0">
                                                                        <span class="text-success badge bg-success-transparent fw-medium"><i class="ri-arrow-up-line"></i>11.6%</span>
                                                                    </td>
                                                                    <td class="border-bottom-0 text-end">
                                                                        <div> <span class="d-block fw-medium mb-0">$14,867</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Sales Statistics
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div id="sales-statistics"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Top Customers
                                                    </div>
                                                </div>
                                                <div class="card-body p-0">
                                                    <ul class="list-group list-group-flush rounded-bottom">
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-md avatar-rounded">
                                                                        <img src="assets/images/faces/14.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="d-block fw-medium">John Doe</span>
                                                                    <span class="fs-12 text-muted">United States</span>
                                                                </div>
                                                                <div class="fw-medium">$1,425</div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-md avatar-rounded">
                                                                        <img src="assets/images/faces/1.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="d-block fw-medium">Maria Gonzalez</span>
                                                                    <span class="fs-12 text-muted">Spain</span>
                                                                </div>
                                                                <div class="fw-medium">	$1,356</div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-md avatar-rounded">
                                                                        <img src="assets/images/faces/9.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="d-block fw-medium">Ahmed Al-Farsi</span>
                                                                    <span class="fs-12 text-muted">UAE</span>
                                                                </div>
                                                                <div class="fw-medium">$1,276</div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-md avatar-rounded">
                                                                        <img src="assets/images/faces/15.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="d-block fw-medium">Akira Tanaka</span>
                                                                    <span class="fs-12 text-muted">Japan</span>
                                                                </div>
                                                                <div class="fw-medium">$1,055</div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-md avatar-rounded">
                                                                        <img src="assets/images/faces/4.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="d-block fw-medium">Priya Sharma</span>
                                                                    <span class="fs-12 text-muted">India</span>
                                                                </div>
                                                                <div class="fw-medium">$946</div>
                                                            </div>
                                                        </li>
                                                        <!-- <li class="list-group-item">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-md avatar-rounded">
                                                                        <img src="https://php.spruko.com/zeno/zeno/assets/images/faces/6.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill">
                                                                    <span class="d-block fw-medium">Sophie Müller</span>
                                                                    <span class="fs-12 text-muted">Germany</span>
                                                                </div>
                                                                <div class="fw-medium">$773</div>
                                                            </div>
                                                        </li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Top Country Sales
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-unstyled top-countries-list">
                                                        <li>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="assets/images/flags/us_flag.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill d-flex align-items-end gap-3">
                                                                    <div class="flex-fill">
                                                                        <span class="fw-medium d-block mb-1">United States</span>
                                                                        <div class="progress progress-animate progress-sm" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 45%">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fw-medium lh-1">45%</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="assets/images/flags/italy_flag.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill d-flex align-items-end gap-3">
                                                                    <div class="flex-fill">
                                                                        <span class="fw-medium d-block mb-1">Italy</span>
                                                                        <div class="progress progress-animate progress-sm" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 67%">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fw-medium lh-1">67%</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="assets/images/flags/spain_flag.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill d-flex align-items-end gap-3">
                                                                    <div class="flex-fill">
                                                                        <span class="fw-medium d-block mb-1">Spain</span>
                                                                        <div class="progress progress-animate progress-sm" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 52%">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fw-medium lh-1">52%</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="assets/images/flags/germany_flag.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill d-flex align-items-end gap-3">
                                                                    <div class="flex-fill">
                                                                        <span class="fw-medium d-block mb-1">Germany</span>
                                                                        <div class="progress progress-animate progress-sm" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 32%">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fw-medium lh-1">32%</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="assets/images/flags/uae_flag.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill d-flex align-items-end gap-3">
                                                                    <div class="flex-fill">
                                                                        <span class="fw-medium d-block mb-1">Uae</span>
                                                                        <div class="progress progress-animate progress-sm" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 80%">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fw-medium lh-1">80%</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div class="lh-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="assets/images/flags/mexico_flag.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill d-flex align-items-end gap-3">
                                                                    <div class="flex-fill">
                                                                        <span class="fw-medium d-block mb-1">Mexico</span>
                                                                        <div class="progress progress-animate progress-sm" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 39%">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fw-medium lh-1">39%</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Recent Orders
                                            </div>
                                            <div class="d-flex flex-wrap gap-2"> 
                                                <div> 
                                                    <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example"> 
                                                </div> 
                                                <div class="dropdown"> 
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> 
                                                    </a> 
                                                    <ul class="dropdown-menu" role="menu"> 
                                                        <li><a class="dropdown-item" href="javascript:void(0);">New</a></li> 
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li> 
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li> 
                                                    </ul> 
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob1" value="" aria-label="..."></th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Category</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Qty</th>
                                                            <th scope="col">Date Ordered</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob2" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="assets/images/ecommerce/jpg/1.jpg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="fw-medium fs-13 mb-0 d-flex align-items-center"><a href="javascript:void(0);">Elegance Wall Clock</a></p>
                                                                        <p class="fs-12 text-muted mb-0">TechBrand</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                Home Decor
                                                            </td>
                                                            <td><span class="badge bg-primary-transparent">Pending</span></td>
                                                            <td>
                                                                <span class="d-block fw-medium fs-13">John Smith</span>
                                                                <span class="d-block text-muted fs-12 fw-normal">johnsmith@mail.com</span>
                                                            </td>
                                                            <td>
                                                                8
                                                            </td>
                                                            <td>01 Dec 2024</td>
                                                            <td class="fw-medium">$1,200</td>
                                                            <td>
                                                                <div class="btn-list">
                                                                    <button class="btn btn-sm btn-icon btn-secondary-light btn-wave rounded-circle">
                                                                        <i class="ri-edit-line"></i>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-icon btn-primary-light btn-wave rounded-circle">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob3" value="" aria-label="..." checked=""></td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="assets/images/ecommerce/jpg/2.jpg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="fw-medium fs-13 mb-0 d-flex align-items-center"><a href="javascript:void(0);">StrideX Pro</a></p>
                                                                        <p class="fs-12 text-muted mb-0">WearCo</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                Footwear
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-transparent">Completed</span>
                                                            </td>
                                                            <td>
                                                                <span class="d-block fw-medium fs-13">Alice Brown</span>
                                                                <span class="d-block text-muted fs-12 fw-normal">aliceb@mail.com</span>
                                                            </td>
                                                            <td>
                                                                15
                                                            </td>
                                                            <td>29 Nov 2024</td>
                                                            <td class="fw-medium">$750</td>
                                                            <td>
                                                                <div class="btn-list">
                                                                    <button class="btn btn-sm btn-icon btn-secondary-light btn-wave rounded-circle">
                                                                        <i class="ri-edit-line"></i>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-icon btn-primary-light btn-wave rounded-circle">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob4" value="" aria-label="..." checked=""></td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="assets/images/ecommerce/jpg/3.jpg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="fw-medium mb-0 fs-13 d-flex align-items-center"><a href="javascript:void(0);">EduCarry 360</a></p>
                                                                        <p class="fs-12 text-muted mb-0">DecorArts</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                School Supplies
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-secondary-transparent">Shipped</span>
                                                            </td>
                                                            <td>
                                                                <span class="d-block fw-medium fs-13">Leo Phillip</span>
                                                                <span class="d-block text-muted fs-12 fw-normal">leophillip@mail.com</span>
                                                            </td>
                                                            <td>
                                                                10
                                                            </td>
                                                            <td>03 Dec 2024</td>
                                                            <td class="fw-medium">$500</td>
                                                            <td>
                                                                <div class="btn-list">
                                                                    <button class="btn btn-sm btn-icon btn-secondary-light btn-wave rounded-circle">
                                                                        <i class="ri-edit-line"></i>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-icon btn-primary-light btn-wave rounded-circle">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob5" value="" aria-label="..."></td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="assets/images/ecommerce/jpg/4.jpg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="fw-medium mb-0 fs-13 d-flex align-items-center"><a href="javascript:void(0);">BloomCraft Pot</a></p>
                                                                        <p class="fs-12 text-muted mb-0">FurniWorld</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                Garden & Decor
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-warning-transparent">Pending</span>
                                                            </td>
                                                            <td>
                                                                <span class="d-block fw-medium fs-13">Michael Green</span>
                                                                <span class="d-block text-muted fs-12 fw-normal">mgreen@mail.com</span>
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>30 Nov 2024</td>
                                                            <td class="fw-medium">$2,400</td>
                                                            <td>
                                                                <div class="btn-list">
                                                                    <button class="btn btn-sm btn-icon btn-secondary-light btn-wave rounded-circle">
                                                                        <i class="ri-edit-line"></i>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-icon btn-primary-light btn-wave rounded-circle">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob7" value="" aria-label="..."></td>
                                                            <td class="border-bottom-0">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="assets/images/ecommerce/jpg/5.jpg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <p class="fw-medium mb-0 fs-13 d-flex align-items-center"><a href="javascript:void(0);">Leather Wallet</a></p>
                                                                        <p class="fs-12 text-muted mb-0">StylePro</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                Accessories
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <span class="badge bg-danger-transparent">In Progress</span>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <span class="d-block fw-medium fs-13">BrewBuddy Mug</span>
                                                                <span class="d-block text-muted fs-12 fw-normal">Kitchen & Dining</span>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                20
                                                            </td>
                                                            <td class="border-bottom-0">02 Dec 2024</td>
                                                            <td class="fw-medium border-bottom-0">$600</td>
                                                            <td class="border-bottom-0">
                                                                <div class="btn-list">
                                                                    <button class="btn btn-sm btn-icon btn-secondary-light btn-wave rounded-circle">
                                                                        <i class="ri-edit-line"></i>
                                                                    </button>
                                                                    <button class="btn btn-sm btn-icon btn-primary-light btn-wave rounded-circle">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer"> 
                                            <div class="d-flex align-items-center"> 
                                                <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i> </div>
                                                <div class="ms-auto"> 
                                                <nav aria-label="Page navigation" class="pagination-style-4"> 
                                                    <ul class="pagination mb-0"> 
                                                        <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li> 
                                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li> 
                                                            <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li> 
                                                        </ul> 
                                                    </nav> 
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card oveflow-hidden">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Visitors By Device
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="visitors-device"></div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row gy-4">
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md bg-primary-transparent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="24" y="64" width="208" height="128" rx="16" transform="translate(256) rotate(90)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><circle cx="128" cy="68" r="16"/></svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fs-12 text-muted fw-medium">Mobile</span>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <h6 class="fw-medium mb-0">4,289</h6>
                                                                <span class="text-success fs-12 fw-medium"><i class="ti ti-arrow-narrow-up"></i>6.85%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md bg-secondary-transparent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="48" width="192" height="140" rx="16" transform="translate(256 236) rotate(180)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="160" y1="224" x2="96" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="32" y1="148" x2="224" y2="148" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="128" y1="192" x2="128" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fs-12 text-muted fw-medium">Desktop</span>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <h6 class="fw-medium mb-0">3,655</h6>
                                                                <span class="text-success fs-12 fw-medium"><i class="ti ti-arrow-narrow-up"></i>3.54%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md bg-success-transparent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M40,168V72A16,16,0,0,1,56,56H200a16,16,0,0,1,16,16v96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M24,168H232a0,0,0,0,1,0,0v24a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V168a0,0,0,0,1,0,0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="144" y1="96" x2="112" y2="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fs-12 text-muted fw-medium">Laptop</span>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <h6 class="fw-medium mb-0">2,964</h6>
                                                                <span class="text-danger fs-12 fw-medium"><i class="ti ti-arrow-narrow-down"></i>0.53%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-rounded avatar-md bg-info-transparent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="48" width="192" height="160" rx="16" transform="translate(256) rotate(90)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="48" y1="72" x2="208" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><line x1="48" y1="184" x2="208" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fs-12 text-muted fw-medium">Tablet</span>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <h6 class="fw-medium mb-0">1,573</h6>
                                                                <span class="text-success fs-12 fw-medium"><i class="ti ti-arrow-narrow-up"></i>8.25%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Recent Activity
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled recent-activity-sales-list">
                                                <li>
                                                    <div class="mb-1">Acquired <span class="fw-medium text-primary">3,156</span> New Products</div>
                                                    <span class="d-block text-muted fs-12">25 mins ago</span>
                                                </li>
                                                <li>
                                                    <div class="mb-1">Updated <span class="fw-medium text-secondary">Ecommerce</span> Offer Details</div>
                                                    <span class="d-block text-muted fs-12">4 hrs ago</span>
                                                </li>
                                                <li>
                                                    <div class="mb-1">New Categories Added <span class="fw-medium text-success">Clothing & Sports</span></div>
                                                    <span class="d-block text-muted fs-12">Yesterday at 12:47PM</span>
                                                </li>
                                                <li>
                                                    <div class="mb-1">Resolved <span class="fw-medium text-warning">#32982</span> Invoice Issue</div>
                                                    <span class="d-block text-muted fs-12">24 Dec at 2:45PM</span>
                                                </li>
                                                <li>
                                                    <div class="mb-1">Sent a invoice to <span class="fw-medium text-danger">jhon@gmail.com</span> $15,000</div>
                                                    <span class="d-block text-muted fs-12">22 Dec at 10:15AM</span>
                                                </li>
                                                <li>
                                                    <div class="mb-1">Received <span class="fw-medium text-teal">457</span> Positive Reviews</div>
                                                    <span class="d-block text-muted fs-12">21 Dec at 11:55AM</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Recent Transactions
                                            </div>
                                            <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1 d-inline-block"></i> </a>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Payment Mode</th>
                                                            <th scope="col" class="text-end">Amount Paid</th>
                                                        </tr>
                                                    </thead> 
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-start gap-2">
                                                                    <div>
                                                                        <span class="avatar avatar-md p-2 border">
                                                                            <img src="assets/images/media/payment-gateways/paypal.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="d-block fw-medium mb-1">Paypal ****2783</span>
                                                                        <span class="d-block fs-11 text-muted">Online Transaction</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-end">
                                                                    <span class="d-block fw-medium mb-1">$1,234.78</span>
                                                                    <span class="d-block fs-11 text-muted">Nov 22,2024</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-start gap-2">
                                                                    <div>
                                                                        <span class="avatar avatar-md p-2 border">
                                                                            <img src="assets/images/media/payment-gateways/wallet.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="d-block fw-medium mb-1">Digital Wallet</span>
                                                                        <span class="d-block fs-11 text-muted">Online Transaction</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-end">
                                                                    <span class="d-block fw-medium mb-1">$623.99</span>
                                                                    <span class="d-block fs-11 text-muted">Nov 22,2024</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-start gap-2">
                                                                    <div>
                                                                        <span class="avatar avatar-md p-2 border">
                                                                            <img src="assets/images/media/payment-gateways/maestro.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="d-block fw-medium mb-1">Mastro Card ****7893</span>
                                                                        <span class="d-block fs-11 text-muted">Card Payment</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-end">
                                                                    <span class="d-block fw-medium mb-1">$1,324</span>
                                                                    <span class="d-block fs-11 text-muted">Nov 21,2024</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-start gap-2">
                                                                    <div>
                                                                        <span class="avatar avatar-md p-2 border">
                                                                            <img src="assets/images/media/payment-gateways/stripe.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="d-block fw-medium mb-1">Stripe</span>
                                                                        <span class="d-block fs-11 text-muted">Online Payment</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-end">
                                                                    <span class="d-block fw-medium mb-1">$1,123.49</span>
                                                                    <span class="d-block fs-11 text-muted">Nov 20,2024</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0">
                                                                <div class="d-flex align-items-start gap-2">
                                                                    <div>
                                                                        <span class="avatar avatar-md p-2 border">
                                                                            <img src="assets/images/media/payment-gateways/visa-card.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="d-block fw-medium mb-1">Visa Card ****2563</span>
                                                                        <span class="d-block fs-11 text-muted">Card Payment</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <div class="text-end">
                                                                    <span class="d-block fw-medium mb-1">$1,289</span>
                                                                    <span class="d-block fs-11 text-muted">Nov 18,2024</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                
                </div>
            </div>
            <!-- End::app-content -->

            <!-- Start::main-modal -->        
            <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="input-group">
                                <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                                    aria-label="Search Anything ..." aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button"
                                    id="button-addon2"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <!-- End::main-modal -->

            <?php include "temp/footer.php" ?>

        </div>

    </body> 

</html>
<!-- This code use for render base file -->
