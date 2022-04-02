    @extends("layouts.admin")
    @section('contents')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Blank</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index-2.html">
                <i data-feather="home"></i></a>
            </li>
            <li class="breadcrumb-item">Blank Page</li>
          </ul>
          <div class="section-body">
             <div class="row">
                <div class="col-4 t_button text-center">
                  <a href="{{url('profile')}}" class="btn btn-icon icon-left btn-secondary"><i class="far fa-user"></i> All user Information</a>
                </div>
                <div class="col-4 t_button text-center">
                  <h4> User Information</h4>
                </div>
                <div class="col-4  text-center t_button">
                  <a href="{{url('user/create')}}" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Add User</a>
                </div>
            </div>
             
             <div class="row">
               <div class="col-3"></div>
               <div class="col-6">
                   
                   <div class="viewform">
                     <div class="form-group row ">
                       <label for="inputPassword" class="col-sm-2 col-form-label">User Name</label>
                       <div class="col-sm-8">
                         <input type="" value="{{$user->name}}" class="form-control">
                       </div>
                     </div>
                     <div class="form-group row ">
                       <label for="inputPassword" class="col-sm-2 col-form-label">User Phone</label>
                       <div class="col-sm-8">
                         <input type="" value="{{$user->phone}}" class="form-control">
                       </div>
                     </div>
                     <div class="form-group row ">
                       <label for="inputPassword" class="col-sm-2 col-form-label">User Email</label>
                       <div class="col-sm-8">
                         <input type="" value="{{$user->email}}" class="form-control">
                       </div>
                     </div>
                     <div class="form-group row ">
                       <label for="inputPassword" class="col-sm-2 col-form-label">User Role</label>
                       <div class="col-sm-8">
                         <input type="" value="{{$user->role_id}}" class="form-control">
                       </div>
                     </div>
                     <div class="form-group row ">
                       <label for="inputPassword" class="col-sm-2 col-form-label">User Image</label>
                       <div class="col-sm-8">
                        <img src="{{asset('uploads/users/' . $user->photo)}}" width="80px;" height="80px;"  alt="Your Image">
                       </div>
                     </div>
                   </div>
               </div>
               <div class="col-3"></div>
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
                    <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
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
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
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