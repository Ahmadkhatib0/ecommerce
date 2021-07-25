@extends('frontend.main_master')
@section('content')

 <div class="breadcrumb">
  <div class="container">
   <div class="breadcrumb-inner">
    <ul class="list-inline list-unstyled">
     <li><a href="home.html">Home</a></li>
     <li class='active'>Forgot Passwrod</li>
    </ul>
   </div><!-- /.breadcrumb-inner -->
  </div><!-- /.container -->
 </div><!-- /.breadcrumb -->

 <div class="body-content">
  <div class="container">
   <div class="sign-in-page">
    <div class="row">
     <!-- Sign-in -->
     <div class="col-md-6 col-sm-6 sign-in">
      <h4 class="">Reset Password</h4>

      <form method="POST" action="{{ route('password.update') }}">
       @csrf
       <input type="hidden" name="token" value="{{ $request->route('token') }}">
       <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
        <input type="email" id="email" name="email" class="form-control unicase-form-control text-input">
       </div>
       <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Password<span>*</span></label>
        <input type="password" id="password" name="password" class="form-control unicase-form-control text-input">
       </div>
       <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Confirm Password<span>*</span></label>
        <input type="password" id="password_confirmation" name="password_confirmation"
         class="form-control unicase-form-control text-input">
       </div>

       <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Email Password Reset Link</button>
      </form>
     </div>
     <!-- Sign-in -->
    </div><!-- /.row -->
   </div><!-- /.sigin-in-->

   @include('frontend.body.brands')

  </div>
 </div>
@endsection



{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
