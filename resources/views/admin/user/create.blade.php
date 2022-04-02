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
                  <a href="{{url('user')}}" class="btn btn-icon icon-left btn-secondary"><i class="far fa-user"></i> All user Information</a>
                </div>
                <div class="col-4 t_button text-center">
                  <h4> User Information</h4>
                </div>
                <div class="col-4  text-center t_button">
                  <a href="{{url('user/create')}}" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Add User</a>
                </div>
            </div>
             
             <div class="row">
               <div class="col-2"></div>
               <div class="col-8">
                  <form  method="post" action="{{url('user')}}" enctype="multipart/form-data">
                    @csrf
                   <div class="form-group row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-10">
                       <input type="text" class="form-control @error('name') is-invalid @enderror " id="inputPassword" name="name" placeholder="Enter Your Name">
                       @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                     <div class="col-sm-10">
                       <input type="text" class="form-control @error('phone') is-invalid @enderror" id="inputPassword" name="phone" placeholder="Enter Your Phone Number">
                       @error('phone')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                       <input type="email" class="form-control @error ('email') is-invalid @enderror" id="inputPassword" name="email" placeholder="Enter Your Email">
                       @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                     </div>
                   </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control @error ('password') is-invalid @enderror" id="inputPassword" name="password" placeholder="Enter Your Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                   <div class="form-group row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                     <div class="col-sm-10">
                       <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="inputPassword" name="password_confirmation" placeholder="Confirm Your Password ">
                       @error('password_confirmation')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                     </div>
                   </div>
                   <div class="form-group row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
                     <div class="col-sm-5">
                      <select class="form-control @error('role_id') is-invalid @enderror" name="role_id" type="text" placeholder="">
                          <option value="">Select User Role</option>
                          @foreach($allRole as $urole)
                              @if(Auth::user()->role_id == 1)
                                  @if($urole->id == 1 || $urole->id == 2 || $urole->id == 3 || $urole->id == 4)
                                      <option value="{{$urole->id}}">{{$urole->name}}</option>
                                  @endif
                              
                              @endif
                          @endforeach
                          @error('role_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </select>
                     </div>
                   </div>
                   <div class="form-group row">
                     <label  class="col-sm-2 col-form-label">Image</label>
                    <div class="col-5">
                        <input  class="form-control" type="file" name="image" onchange="readURL(this);" >
                        <img src="{{ asset('uploads') }}/avatar.jpg"  class="img-thumbnail img-fluid upload_profile" alt="Image preview..." id="imgpreview" style="max-width: 200px">
                    </div>
                   </div>
                   <div class="card-footer text-center">
                     <button class="btn btn-primary mr-1" type="submit">Submit</button>
                     <button class="btn btn-secondary"     type="reset">Reset</button>
                   </div>
                 </form>
               </div>
               <div class="col-2"></div>
             </div>
          </div>
      </div>
     @endsection