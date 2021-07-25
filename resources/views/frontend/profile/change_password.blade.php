@extends('frontend.main_master')
@section('content')

 <div class="body-content">
  <div class="container">
   <div class="row">

    <div class="col-md-2">
     <br>
     <img class="card-img-top" style="border-radius: 50%"
      src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/' . $user->profile_photo_path) : url('upload/no_image.jpg') }}"
      height="100%" width="100%">
     <br><br>
     <ul class="list-group list-group-flush">
      <a href="{{ route('dashboard') }}" class="btn btn-primary btn-block btn-sm ">Home</a>
      <a href="{{ route('user.profile') }}" class="btn btn-primary btn-block btn-sm ">Profile Update </a>
      <a href="{{ route('user.logout') }}" class="btn btn-danger btn-block btn-sm ">Logout</a>
     </ul>
    </div>

    <div class="col-md-2">

    </div>
    <div class="col-md-6">
     <div class="card">
      <h3 class="text-center"><span class="text-danger"> Change Passswrd</span></h3>

      <div class="card-body">
       <form method="post" action="{{ route('user.password.update') }}">
        @csrf
        <div class="form-group">
         <label class="info-title" for="exampleInputEmail1">Current Password<span> </span></label>
         <input type="password" name="oldpassword" id="current_password" class="form-control">
        </div>

        <div class="form-group">
         <label class="info-title" for="exampleInputEmail1">New Password<span> </span></label>
         <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
         <label class="info-title" for="exampleInputEmail1">Confirm Passwrod<span> </span></label>
         <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>

        <div class="form-group">
         <button type="submit" class="btn btn-danger">Update</button>
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
@endsection
