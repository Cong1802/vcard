@extends('layouts.auth')
@section('title')
    {{__('messages.common.login')}}
@endsection
@section('content')
    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="{{ route('home') }}" class="image mb-7 mb-sm-10">
                <div class="wrapper p-0">
                    <div class="top">Digital Card</div>
                    <div class="bottom" aria-hidden="true">Digital Card</div>
                </div>
            </a>
        </div>
        <div class="width-540">
            @include('flash::message')
            @include('layouts.errors')
        </div>
        <div class="box rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
           <div class="form">
            <h2 class="text-center mb-7">{{__('auth.sign_in')}}</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-7">
                    <label for="email" class="text-color mb-1">
                        {{ __('messages.user.email').':' }}<span class="required"></span>
                    </label>
                    <input name="email" type="email" class="form-control shadow-css" onfocus="this.removeAttribute('readonly');"  readonly autocomplete="off" id="email" aria-describedby="emailHelp" required placeholder=" {{ __('messages.user.email') }}">
                </div>
                <div class="mb-7">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="text-color mb-1">{{ __('messages.user.password').':' }}<span
                                class="required"></span></label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-color text-decoration-none">
                                {{ __('messages.common.forgot_your_password').'?' }}
                            </a>
                        @endif
                    </div>
                    <div class="mb-3 position-relative">
                        <input name="password" autocomplete="off" onfocus="this.removeAttribute('readonly');" readonly type="password" class="form-control shadow-css" id="password" required placeholder="{{ __('messages.user.password')}}" aria-label="Password" data-toggle="password">
                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                                <i class="bi bi-eye-slash-fill"></i>
                            </span>
                    </div>
                </div>
                {{-- <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" >
                    <label class="form-check-label text-color" for="remember_me">{{ __('messages.common.remember_me') }}</label>
                </div> --}}
                <div class="d-grid">
                    <input type="submit" class="btn shadow-css2" value="{{ __('messages.common.login') }}"/>
                </div>
                <div class="d-flex align-items-center mb-5 mt-4">
                    <span class="text-gray-700 me-2">{{__('messages.common.new_here').'?'}}</span>
                    <a href="{{ route('register') }}" class="text-color text-decoration-none">
                        {{__('messages.common.create_an_account')}}
                    </a>
                </div>
                <div class="d-grid">
                    @if(config('app.google_client_id') && config('app.google_client_secret') && config('app.google_redirect'))
                        <a href="{{route('social.login','google')}}"
                           class="btn btn-danger d-flex align-items-center justify-content-center mb-sm-5 mb-4">
                            <i class="fa-brands fa-google fs-2 me-3"></i>{{__('messages.placeholder.login_via_google')}}
                        </a>
                    @endif
                    @if(config('app.facebook_app_id') && config('app.facebook_app_secret') && config('app.facebook_redirect'))
                        <a href="{{route('social.login','facebook')}}"
                           class="btn btn-info d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-facebook-f fs-2 me-3"></i>{{__('messages.placeholder.login_via_facebook')}}
                        </a>
                    @endif
                </div>
            </form>
           </div>
        </div>
    </div>
@endsection