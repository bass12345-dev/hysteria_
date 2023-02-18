<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    
     <?php $this->load->view('includes/meta.php'); ?>
    <?php $this->load->view('includes/css.php'); ?>
    
</head>
<!--end::Head-->
<!--begin::Body-->

    <body id="kt_body" style="background-image: url(assets/media/patterns/header-bg.png)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                        <!--begin::Container-->
                        <div class="container-xxl d-flex align-items-center">
                            <!--begin::Heaeder menu toggle-->
                            <div class="d-flex align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                                <div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Heaeder menu toggle-->
                            <!--begin::Header Logo-->
                            <?php

                            $this->load->view('includes/header_logo.php');

                            ?>
                            <!--end::Header Logo-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                               <!--begin::Navbar-->
                                <div class="d-flex align-items-stretch" id="kt_header_nav">
                                    <!--begin::Menu wrapper-->
                                    <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                        <!--begin::Menu-->
                                        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1" id="back-button">
                                                <span class="menu-link py-3">
                                                    <span class="menu-title">  <i  class="fas fa-arrow-left ms-2 fs-7" ></i></span>
                                                    
                                                </span>
                                                
                                            </div>
                                     


                                          
                                   
                        
                             
                                     
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Navbar-->
                              <?php $this->load->view('includes/topbar.php') ?>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->


                        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">

                            <!--begin::Post-->
                        <div class="content flex-row-fluid" id="kt_content">
                            <!--begin::Layout - Overview-->
                            <div class="d-flex flex-column flex-xl-row">
                                <!--begin::Sidebar-->
                                <div class="flex-column flex-lg-row-auto w-100 w-xl-325px mb-10">
                                    <!--begin::Card-->
                                    <div class="card card-flush" data-kt-sticky="true" data-kt-sticky-name="account-navbar" data-kt-sticky-offset="{default: false, xl: '80px'}" data-kt-sticky-width="{lg: '250px', xl: '325px'}" data-kt-sticky-left="auto" data-kt-sticky-top="90px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                                        <!--begin::Card header-->
                                        <div class="card-header justify-content-end">
                                           
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 p-10">
                                            <!--begin::Summary-->
                                            <div class="d-flex flex-center flex-column mb-10">
                                                <!--begin::Avatar-->
                                                <div class="symbol mb-3 symbol-100px symbol-circle ">
                                                    <img alt="Pic" class="mem-profile-pic" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Name-->
                                                <a href="#" class="fs-2 text-gray-800 text-hover-primary fw-bolder mb-1 mem-name">....</a>
                                                <!--end::Name-->
                                                <!--begin::Position-->
                                                <div class="fs-6 fw-bold text-gray-400 mb-2"> <span class="badge badge-light-success fw-bolder fs-7 px-2 py-1  mem-position" >...</span></div>
                                                <!--end::Position-->
                                                <!--begin::Actions-->
                                                <div class="d-flex flex-center">
                                                    <a href="#" class="btn btn-sm btn-light-primary py-2 px-4 fw-bolder me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_update_profile_pic" >Update Profile Pic</a>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Summary-->
                                            <!--begin::Menu-->
                                            <ul class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bolder fs-5 mb-10">

                                                 <li class="menu-item mb-1">
                                                    <!--begin::Menu link-->
                                                    <a class="menu-link px-6 py-4 active" href="#kt_profile_details_view">
                                                        <span class="menu-bullet">
                                                            <span class="bullet"></span>
                                                        </span>
                                                        <span class="menu-title">Profile</span>
                                                    </a>
                                                    <!--end::Menu link-->
                                                </li>

                                                
                                                <!--begin::Menu item-->
                                                <li class="menu-item mb-1">
                                                    <!--begin::Menu link-->
                                                    <a class="menu-link px-6 py-4 " href="#suggested-songs">
                                                        <span class="menu-bullet">
                                                            <span class="bullet"></span>
                                                        </span>
                                                        <span class="menu-title">Suggested Songs To You</span>
                                                    </a>
                                                    <!--end::Menu link-->
                                                </li>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->

                                                <?php if ($admin_access) :
                                                    # code...
                                                 ?>
                                                <li class="menu-item mb-1">
                                                    <!--begin::Menu link-->
                                                    <a class="menu-link px-6 py-4" href="#manage-admin">
                                                        <span class="menu-bullet">
                                                            <span class="bullet"></span>
                                                        </span>
                                                        <span class="menu-title">Manage Admin</span>
                                                    </a>
                                                    <!--end::Menu link-->
                                                </li>

                                            <?php endif; ?>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <li class="menu-item mb-1">
                                                    <!--begin::Menu link-->
                                                    <a class="menu-link px-6 py-4" href="#security">
                                                        <span class="menu-bullet">
                                                            <span class="bullet"></span>
                                                        </span>
                                                        <span class="menu-title">Security</span>
                                                    </a>
                                                    <!--end::Menu link-->
                                                </li>
                                                <!--end::Menu item-->
                                             
                                                <!--begin::Menu item-->
                                                <li class="menu-item mb-1">
                                                    <!--begin::Menu link-->
                                                    <a class="menu-link px-6 py-4" href="<?php echo base_url() ?>activity">
                                                        <span class="menu-bullet">
                                                            <span class="bullet"></span>
                                                        </span>
                                                        <span class="menu-title">Activity</span>
                                                    </a>
                                                    <!--end::Menu link-->
                                                </li>
                                                <!--end::Menu item-->
                                            </ul>
                                            <!--end::Menu-->
                                           
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Sidebar-->
                                <!--begin::Content-->
                                <div class="flex-lg-row-fluid ms-lg-10">
                                    <!--begin::details View-->
                                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                        <!--begin::Card header-->
                                        <div class="card-header cursor-pointer">
                                            <!--begin::Card title-->
                                            <div class="card-title m-0">
                                                <h3 class="fw-bolder m-0">Profile Details</h3>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Action-->
                                           <!--  <a href="#" class="btn btn-primary align-self-center" data-bs-toggle="modal" data-bs-target="#kt_modal_update_userdata">Edit Profile</a> -->
                                            <!--end::Action-->
                                        </div>
                                        <!--begin::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body p-9">
                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark mem-name">...</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                              <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Username</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <span class="fw-bold fs-6 mem-username"></span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--begin::Input group-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted mem">Position</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <span class="fw-bold fs-6 badge badge-success mem-position ">...</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Contact Phone 
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 d-flex align-items-center">
                                                    <span class="fw-bolder fs-6 me-2 mem-phone-number"></span>
                                                   <!--  <span class="badge badge-success">Verified</span> -->
                                                </div>
                                                <!--end::Col-->
                                            </div>

                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted ">Email</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <span class="fw-bold fs-6 mem-email"></span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                           
                                         
                                            <!--begin::Input group-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold text-muted">Communication</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark">Email, Phone</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                          
                                          
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::details View-->
                                  
                                 
                                    <!--end::Chart widget 2-->
                                    <!--begin::Table Widget 1-->
                                    <div class="card mb-5 mb-xl-10" id="suggested-songs">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5 pb-3">
                                            <!--begin::Card title-->
                                            <h3 class="card-title fw-bolder text-gray-800 fs-2">Leading Partners</h3>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <div class="my-1">
                                                    <!--begin::Select-->
                                                    <select class="form-select fw-bold w-125px" data-control="select2" data-placeholder="Status" data-hide-search="true">
                                                        <option value="1" selected="selected">Status</option>
                                                        <option value="2">Pending</option>
                                                        <option value="3">In Progress</option>
                                                        <option value="3">Complete</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <!--begin::Table row-->
                                                        <tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                                            <th class="min-w-200px px-0">Authors</th>
                                                            <th class="min-w-125px">Progress</th>
                                                            <th class="text-end pe-2 min-w-70px">Action</th>
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Author=-->
                                                            <td class="p-0">
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Logo-->
                                                                    <div class="symbol symbol-50px me-2">
                                                                        <span class="symbol-label">
                                                                            <img alt="" class="w-25px" src="/ceres-html-free/assets/media/svg/brand-logos/aven.svg" />
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Logo-->
                                                                    <div class="ps-3">
                                                                        <a href="/ceres-html-free/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Brad Simmons</a>
                                                                        <span class="text-gray-400 fw-bold d-block">HTML, JS, ReactJS</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Author=-->
                                                            <!--begin::Progress=-->
                                                            <td>
                                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">65%</span>
                                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Company=-->
                                                            <!--begin::Action=-->
                                                            <td class="pe-0 text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                                    <span class="svg-icon svg-icon-2x">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment 
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3 my-1">
                                                                        <a href="#" class="menu-link px-3">Settings</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </td>
                                                            <!--end::Action=-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Author=-->
                                                            <td class="p-0">
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Logo-->
                                                                    <div class="symbol symbol-50px me-2">
                                                                        <span class="symbol-label">
                                                                            <img alt="" class="w-25px" src="/ceres-html-free/assets/media/svg/brand-logos/leaf.svg" />
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Logo-->
                                                                    <div class="ps-3">
                                                                        <a href="/ceres-html-free/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Jessie Clarcson</a>
                                                                        <span class="text-gray-400 fw-bold d-block">C#, ASP.NET, MS SQL</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Author=-->
                                                            <!--begin::Progress=-->
                                                            <td>
                                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">85%</span>
                                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Company=-->
                                                            <!--begin::Action=-->
                                                            <td class="pe-0 text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                                    <span class="svg-icon svg-icon-2x">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment 
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3 my-1">
                                                                        <a href="#" class="menu-link px-3">Settings</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </td>
                                                            <!--end::Action=-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Author=-->
                                                            <td class="p-0">
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Logo-->
                                                                    <div class="symbol symbol-50px me-2">
                                                                        <span class="symbol-label">
                                                                            <img alt="" class="w-25px" src="/ceres-html-free/assets/media/svg/brand-logos/atica.svg" />
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Logo-->
                                                                    <div class="ps-3">
                                                                        <a href="/ceres-html-free/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Lebron Wayde</a>
                                                                        <span class="text-gray-400 fw-bold d-block">PHP, Laravel, VueJS</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Author=-->
                                                            <!--begin::Progress=-->
                                                            <td>
                                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">40%</span>
                                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Company=-->
                                                            <!--begin::Action=-->
                                                            <td class="pe-0 text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                                    <span class="svg-icon svg-icon-2x">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment 
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3 my-1">
                                                                        <a href="#" class="menu-link px-3">Settings</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </td>
                                                            <!--end::Action=-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Author=-->
                                                            <td class="p-0">
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Logo-->
                                                                    <div class="symbol symbol-50px me-2">
                                                                        <span class="symbol-label">
                                                                            <img alt="" class="w-25px" src="/ceres-html-free/assets/media/svg/brand-logos/volicity-9.svg" />
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Logo-->
                                                                    <div class="ps-3">
                                                                        <a href="/ceres-html-free/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Natali Trump</a>
                                                                        <span class="text-gray-400 fw-bold d-block">Python, ReactJS</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Author=-->
                                                            <!--begin::Progress=-->
                                                            <td>
                                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">71%</span>
                                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 71%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Company=-->
                                                            <!--begin::Action=-->
                                                            <td class="pe-0 text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                                    <span class="svg-icon svg-icon-2x">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment 
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3 my-1">
                                                                        <a href="#" class="menu-link px-3">Settings</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </td>
                                                            <!--end::Action=-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Author=-->
                                                            <td class="p-0">
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Logo-->
                                                                    <div class="symbol symbol-50px me-2">
                                                                        <span class="symbol-label">
                                                                            <img alt="" class="w-25px" src="/ceres-html-free/assets/media/svg/brand-logos/bebo.svg" />
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Logo-->
                                                                    <div class="ps-3">
                                                                        <a href="/ceres-html-free/account/overview.html" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Carles Puyol</a>
                                                                        <span class="text-gray-400 fw-bold d-block">PHP, SQLite, Artisan CLI</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Author=-->
                                                            <!--begin::Progress=-->
                                                            <td>
                                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">45%</span>
                                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--end::Company=-->
                                                            <!--begin::Action=-->
                                                            <td class="pe-0 text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                                    <span class="svg-icon svg-icon-2x">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment 
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3 my-1">
                                                                        <a href="#" class="menu-link px-3">Settings</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </td>
                                                            <!--end::Action=-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Table Widget 1-->
                                    <!--begin::List Widget 4-->

                                       <?php if ($admin_access) :
                                                    # code...
                                                 ?>
                                    <div class="card mb-5 mb-xl-10" id="manage-admin">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0 mt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="fw-bolder text-dark fs-2">Administrators</span>
                                               
                                            </h3>
                                            <div class="card-toolbar">
                                                <!--begin::Menu-->
                                                <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--begin::Menu 3-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                                    <!--begin::Heading-->
                                                    <div class="menu-item px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_admin">
                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Add Admin</div>
                                                    </div>


                                                  
                                                
                                                        
                                                    
                                                </div>
                                                <!--end::Menu 3-->
                                                <!--end::Menu-->
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-1" id="admin-list">
                                            <!--begin::Item-->
                                           
                                            <!--end::Item-->
                                    
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                <?php endif; ?>




                                      <!--begin::List Widget 4-->
                                    <div class="card mb-5 mb-xl-10" id="security">
                                      
                                        <!--begin::Body-->
                                        <div class="card-body pt-1">
                                        
                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold">Username</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bolder fs-6 text-dark mem-username">...</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                              <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-bold">Password</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <span class="fw-bold fs-6 mem-password">******</span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        <button class="btn btn-primary update-sec" data-bs-toggle="modal" data-bs-target="#kt_modal_update_security">Update Security</button>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List Widget 4-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Layout - Overview-->
                        </div>
                        <!--end::Post-->

                        </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
        <!--begin::Drawers-->
      
         <?php $this->load->view('includes/drawer'); ?>
    
        
       
 <?php $this->load->view('view/modals/add_admin'); ?>
  <?php $this->load->view('view/modals/update_security_modal'); ?>       
<?php $this->load->view('view/modals/update_profile_pic_modal'); ?>
<?php $this->load->view('view/modals/update_user_data'); ?>

      <?php $this->load->view('modals/new_target'); ?>
     <?php $this->load->view('includes/scroll_to_top.php'); ?>
    <!--end::Main-->
    <?php $this->load->view('includes/scripts.php'); ?>
    <!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->

</html>