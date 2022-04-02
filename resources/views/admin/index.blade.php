
@extends('layouts.admin');
@section('contents');

<!-- Main Content -->
           <div class="main-content">
               <section class="section">
                   <ul class="breadcrumb breadcrumb-style ">
                       <li class="breadcrumb-item">
                           <h4 class="page-title m-b-0">Dashboard</h4>
                       </li>
                   </ul>
                   <div class="row">
                       <div class="col-lg-3 col-sm-6">
                           <div class="card">
                               <div class="card-statistic-5">
                                   <div class="info-box7-block">
                                       <div class="row pt-3 ps-3 pe-3">
                                           <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                               <div class="banner-img">
                                                   <img src="{{asset('contents/admin')}}/assets/img/banner/1.png" alt="" width="120px">
                                               </div>
                                           </div>
                                           <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                               <h5 class="m-b-20 text-end">All Customers</h5>
                                               <h4 class="text-end"><span>2,342</span>
                                               </h4>
                                           </div>
                                       </div>
                                       <div id="cardChart1"></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-sm-6">
                           <div class="card">
                               <div class="card-statistic-5">
                                   <div class="info-box7-block">
                                       <div class="row pt-3 ps-3 pe-3">
                                           <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                               <div class="banner-img">
                                                   <img src="{{asset('contents/admin')}}/assets/img/banner/2.png" alt="" width="120px">
                                               </div>
                                           </div>
                                           <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                               <h5 class="m-b-20 text-end">New Order</h5>
                                               <h4 class="text-end"><span>10.3K</span>
                                               </h4>
                                           </div>
                                       </div>
                                       <div id="cardChart2"></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-sm-6">
                           <div class="card">
                               <div class="card-statistic-5">
                                   <div class="info-box7-block">
                                       <div class="row pt-3 ps-3 pe-3">
                                           <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                               <div class="banner-img">
                                                   <img src="{{asset('contents/admin')}}/assets/img/banner/3.png" alt="" width="120px">
                                               </div>
                                           </div>
                                           <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                               <h5 class="m-b-20 text-end">Total Orer</h5>
                                               <h4 class="text-end"><span>754</span>
                                               </h4>
                                           </div>
                                       </div>
                                       <div id="cardChart3"></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-sm-6">
                           <div class="card">
                               <div class="card-statistic-5">
                                   <div class="info-box7-block">
                                       <div class="row pt-3 ps-3 pe-3">
                                           <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                               <div class="banner-img">
                                                   <img src="{{asset('contents/admin')}}/assets/img/banner/4.png" alt="" width="120px">
                                               </div>
                                           </div>
                                           <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                               <h5 class="m-b-20 text-end">Total Revenue</h5>
                                               <h4 class="text-end"><span>$22,973</span>
                                               </h4>
                                           </div>
                                       </div>
                                       <div id="cardChart4"></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-12 col-lg-8 col-xl-8 ">
                           <div class="card">
                               <div class="card-header">
                                   <h4>Revenue Chart</h4>
                                   <div class="card-header-action">
                                       <ul class="nav nav-pills" role="tablist" id="chart-tabs">
                                           <li class="nav-item">
                                               <a class="nav-link active card-tab-style" data-bs-toggle="tab" data-id="1" role="tab" aria-selected="true">2017</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link card-tab-style" data-bs-toggle="tab" data-id="2" role="tab" aria-selected="false">2018</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link card-tab-style" data-bs-toggle="tab" data-id="3" role="tab" aria-selected="false">2019</a>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="card-body">
                                   <div id="chart1"></div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-12 col-lg-4 col-xl-4">
                           <div class="card">
                               <div class="card-header">
                                   <h4>Project Team</h4>
                               </div>
                               <div class="card-body">
                                   <div class="media-list position-relative">
                                       <div class="table-responsive" id="project-team-scroll">
                                           <table class="table table-hover table-xl mb-0">
                                               <thead>
                                                   <tr>
                                                       <th>Project Name</th>
                                                       <th>Employees</th>
                                                       <th>Cost</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td class="text-truncate">Project X</td>
                                                       <td class="text-truncate">
                                                           <ul class="list-unstyled order-list m-b-0">
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-8.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-9.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-10.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                                               <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span></li>
                                                           </ul>
                                                       </td>
                                                       <td class="text-truncate">$8999</td>
                                                   </tr>
                                                   <tr>
                                                       <td class="text-truncate">Project AB2</td>
                                                       <td class="text-truncate">
                                                           <ul class="list-unstyled order-list m-b-0">
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-1.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-3.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-2.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                                               <li class="avatar avatar-sm"><span class="badge badge-primary">+1</span></li>
                                                           </ul>
                                                       </td>
                                                       <td class="text-truncate">$5550</td>
                                                   </tr>
                                                   <tr>
                                                       <td class="text-truncate">Project DS3</td>
                                                       <td class="text-truncate">
                                                           <ul class="list-unstyled order-list m-b-0">
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-5.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-9.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                                               <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                                           </ul>
                                                       </td>
                                                       <td class="text-truncate">$9000</td>
                                                   </tr>
                                                   <tr>
                                                       <td class="text-truncate">Project XCD</td>
                                                       <td class="text-truncate">
                                                           <ul class="list-unstyled order-list m-b-0">
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-8.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-3.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-5.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                                               <li class="avatar avatar-sm"><span class="badge badge-primary">+2</span></li>
                                                           </ul>
                                                       </td>
                                                       <td class="text-truncate">$7500</td>
                                                   </tr>
                                                   <tr>
                                                       <td class="text-truncate">Project Z2</td>
                                                       <td class="text-truncate">
                                                           <ul class="list-unstyled order-list m-b-0">
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-8.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-10.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                                               <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span></li>
                                                           </ul>
                                                       </td>
                                                       <td class="text-truncate">$8500</td>
                                                   </tr>
                                                   <tr>
                                                       <td class="text-truncate">Project GTe</td>
                                                       <td class="text-truncate">
                                                           <ul class="list-unstyled order-list m-b-0">
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-3.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                                               <li class="team-member team-member-sm"><img class="rounded-circle" src="{{asset('contents/admin')}}/assets/img/users/user-5.png" alt="user" data-bs-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                                               <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span></li>
                                                           </ul>
                                                       </td>
                                                       <td class="text-truncate">$8500</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div class="row">
                       <div class="col-md-12 col-lg-4 col-xl-4">
                           <div class="card">
                               <div class="card-header">
                                   <h4>Project List</h4>
                               </div>
                               <div class="card-body">
                                   <div class="table-responsive" id="project-list">
                                       <table class="table table-hover table-xl mb-0">
                                           <tbody>
                                               <tr>
                                                   <td>Java Software</td>
                                                   <td class="text-end">
                                                       <span class="badge-outline col-purple">25%</span>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Landing Page</td>
                                                   <td class="text-end">
                                                       <div class="badge-outline col-red">Rejected</div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Logo Design</td>
                                                   <td class="text-end">
                                                       <div class="badge-outline col-green">Completed</div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>E-commerce Website</td>
                                                   <td class="text-end">
                                                       <span class="badge-outline col-purple">40%</span>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>.Net Project</td>
                                                   <td class="text-end">
                                                       <span class="badge-outline col-orange">Pending</span>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>PHP Website</td>
                                                   <td class="text-end">
                                                       <span class="badge-outline col-green">Completed</span>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Angular Website</td>
                                                   <td class="text-end">
                                                       <span class="badge-outline col-purple">98%</span>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>SEO Website</td>
                                                   <td class="text-end">
                                                       <span class="badge-outline col-red">Rejected</span>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-12 col-lg-8 col-xl-8">
                           <div class="card">
                               <div class="card-header">
                                   <h4>Client Details</h4>
                               </div>
                               <div class="card-body">
                                   <div class="tableBody" id="client-details">
                                       <div class="table-responsive">
                                           <table class="table table-hover dashboard-task-infos">
                                               <thead>
                                                   <tr>
                                                       <th>#</th>
                                                       <th>Name</th>
                                                       <th>Email</th>
                                                       <th>Rating</th>
                                                       <th>Project Name</th>
                                                       <th>Action</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td class="table-img">
                                                           <img src="{{asset('contents/admin')}}/assets/img/users/user-5.png" alt="">
                                                       </td>
                                                       <td>John Doe</td>
                                                       <td><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="770f0e0d37121a161e1b5914181a">[email&#160;protected]</a></td>
                                                       <td>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="far fa-star col-orange"></i>
                                                       </td>
                                                       <td>ERP System</td>
                                                       <td>
                                                           <a class="btn tblEditBtn" data-bs-toggle="tooltip" title="" data-original-title="Edit">
                                                               <i class="material-icons">mode_edit</i>
                                                           </a>
                                                           <a class="btn tblDelBtn" data-bs-toggle="tooltip" title="" data-original-title="Delete">
                                                               <i class="material-icons">delete</i>
                                                           </a>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td class="table-img">
                                                           <img src="{{asset('contents/admin')}}/assets/img/users/user-2.png" alt="">
                                                       </td>
                                                       <td>Sarah Smith</td>
                                                       <td><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="245c5d5e644149454d480a474b49">[email&#160;protected]</a></td>
                                                       <td>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star-half-alt col-orange"></i>
                                                           <i class="far fa-star col-orange"></i>
                                                           <i class="far fa-star col-orange"></i>
                                                       </td>
                                                       <td>Abc Website</td>
                                                       <td>
                                                           <a class="btn tblEditBtn" data-bs-toggle="tooltip" title="" data-original-title="Edit">
                                                               <i class="material-icons">mode_edit</i>
                                                           </a>
                                                           <a class="btn tblDelBtn" data-bs-toggle="tooltip" title="" data-original-title="Delete">
                                                               <i class="material-icons">delete</i>
                                                           </a>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td class="table-img">
                                                           <img src="{{asset('contents/admin')}}/assets/img/users/user-7.png" alt="">
                                                       </td>
                                                       <td>Airi Satou</td>
                                                       <td><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="09717073496c64686065276a6664">[email&#160;protected]</a></td>
                                                       <td>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star-half-alt col-orange"></i>
                                                       </td>
                                                       <td>Android App</td>
                                                       <td>
                                                           <a class="btn tblEditBtn" data-bs-toggle="tooltip" title="" data-original-title="Edit">
                                                               <i class="material-icons">mode_edit</i>
                                                           </a>
                                                           <a class="btn tblDelBtn" data-bs-toggle="tooltip" title="" data-original-title="Delete">
                                                               <i class="material-icons">delete</i>
                                                           </a>
                                                       </td>
                                                   </tr>

                                                   <tr>
                                                       <td class="table-img">
                                                           <img src="{{asset('contents/admin')}}/assets/img/users/user-1.png" alt="">
                                                       </td>
                                                       <td>Ashton Cox</td>
                                                       <td><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f48c8d8eb49199959d98da979b99">[email&#160;protected]</a></td>
                                                       <td>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                       </td>
                                                       <td>Java Website</td>
                                                       <td>
                                                           <a class="btn tblEditBtn" data-bs-toggle="tooltip" title="" data-original-title="Edit">
                                                               <i class="material-icons">mode_edit</i>
                                                           </a>
                                                           <a class="btn tblDelBtn" data-bs-toggle="tooltip" title="" data-original-title="Delete">
                                                               <i class="material-icons">delete</i>
                                                           </a>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td class="table-img">
                                                           <img src="{{asset('contents/admin')}}/assets/img/users/user-9.png" alt="">
                                                       </td>
                                                       <td>Cara Stevens</td>
                                                       <td><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5bdbcbf85a0a8a4aca9eba6aaa8">[email&#160;protected]</a></td>
                                                       <td>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="far fa-star col-orange"></i>
                                                       </td>
                                                       <td>Desktop App</td>
                                                       <td>
                                                           <a class="btn tblEditBtn" data-bs-toggle="tooltip" title="" data-original-title="Edit">
                                                               <i class="material-icons">mode_edit</i>
                                                           </a>
                                                           <a class="btn tblDelBtn" data-bs-toggle="tooltip" title="" data-original-title="Delete">
                                                               <i class="material-icons">delete</i>
                                                           </a>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td class="table-img">
                                                           <img src="{{asset('contents/admin')}}/assets/img/users/user-8.png" alt="">
                                                       </td>
                                                       <td>Angelica Ramos</td>
                                                       <td><a href="https://www.radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81f9f8fbc1e4ece0e8edafe2eeec">[email&#160;protected]</a></td>
                                                       <td>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="fas fa-star col-orange"></i>
                                                           <i class="far fa-star col-orange"></i>
                                                       </td>
                                                       <td>Angular App</td>
                                                       <td>
                                                           <a class="btn tblEditBtn" data-bs-toggle="tooltip" title="" data-original-title="Edit">
                                                               <i class="material-icons">mode_edit</i>
                                                           </a>
                                                           <a class="btn tblDelBtn" data-bs-toggle="tooltip" title="" data-original-title="Delete">
                                                               <i class="material-icons">delete</i>
                                                           </a>
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
               </section>
               <div class="settingSidebar">
                   <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                   </a>
                   <div class="settingSidebar-body ps-container ps-theme-default">
                       <div class=" fade show active">
                           <div class="setting-panel-header">Setting Panel
                           </div>
                           <div class="p-15 border-bottom">
                               <h6 class="font-medium m-b-10">Select Layout</h6>
                               <div class="selectgroup layout-color w-50">
                                   <label class="selectgroup-item">
                                       <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                                       <span class="selectgroup-button">Light</span>
                                   </label>
                                   <label class="selectgroup-item">
                                       <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                       <span class="selectgroup-button">Dark</span>
                                   </label>
                               </div>
                           </div>
                           <div class="p-15 border-bottom">
                               <h6 class="font-medium m-b-10">Sidebar Color</h6>
                               <div class="selectgroup selectgroup-pills sidebar-color">
                                   <label class="selectgroup-item">
                                       <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                       <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip" data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                   </label>
                                   <label class="selectgroup-item">
                                       <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                                       <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip" data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                   </label>
                               </div>
                           </div>
                           <div class="p-15 border-bottom">
                               <h6 class="font-medium m-b-10">Color Theme</h6>
                               <div class="theme-setting-options">
                                   <ul class="choose-theme list-unstyled mb-0">
                                       <li title="white" class="active">
                                           <div class="white"></div>
                                       </li>
                                       <li title="cyan">
                                           <div class="cyan"></div>
                                       </li>
                                       <li title="black">
                                           <div class="black"></div>
                                       </li>
                                       <li title="purple">
                                           <div class="purple"></div>
                                       </li>
                                       <li title="orange">
                                           <div class="orange"></div>
                                       </li>
                                       <li title="green">
                                           <div class="green"></div>
                                       </li>
                                       <li title="red">
                                           <div class="red"></div>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                           <div class="p-15 border-bottom">
                               <div class="theme-setting-options">
                                   <label class="m-b-0">
                                       <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting">
                                       <span class="custom-switch-indicator"></span>
                                       <span class="control-label p-l-10">Mini Sidebar</span>
                                   </label>
                               </div>
                           </div>
                           <div class="p-15 border-bottom">
                               <div class="theme-setting-options">
                                   <label class="m-b-0">
                                       <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="sticky_header_setting">
                                       <span class="custom-switch-indicator"></span>
                                       <span class="control-label p-l-10">Sticky Header</span>
                                   </label>
                               </div>
                           </div>
                           <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                               <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                   <i class="fas fa-undo"></i> Restore Default
                               </a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           @endsection