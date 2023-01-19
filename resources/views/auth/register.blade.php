@extends('layouts.auth')
@section('title')
    {{__('messages.common.register')}}
@endsection
@section('content')
    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="{{ route('home') }}" class="image mb-7 mb-sm-10">
                <div class="wrapper p-0">
                    <div class="top">My Profile</div>
                    <div class="bottom" aria-hidden="true">My Profile</div>
                </div>
            </a>
        </div>
        <div class="width-540">
            @include('layouts.errors')
        </div>
        <div class="box box-register rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <div class="form">
                <h2 class="text-center mb-4">{{__('messages.common.create_an_account')}}</h2>
                <form method="POST" action="{{ route('register') }}" id="UserRegisterForm" class="form-horizontal">
                    @csrf
                        <div class="col-12 mb-4">
                            <label for="formInputFirstName" class="form-label text-color">
                                {{ __('messages.user.first_name').':' }}<span class="required"></span>
                            </label>
                            <input name="first_name" type="text" onfocus="this.removeAttribute('readonly');"  readonly autocomplete="off" class="form-control shadow-css" id="first_name" placeholder=" {{ __('messages.user.first_name') }}"
                                   aria-describedby="firstName" value="{{ old('first_name') }}" required>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="last_name" class="form-label text-color">
                                {{ __('messages.user.last_name').':' }}<span class="required"></span>
                            </label>
                            <input name="last_name" type="text" onfocus="this.removeAttribute('readonly');"  readonly autocomplete="off" class="form-control shadow-css" id="last_name" placeholder=" {{ __('messages.user.last_name') }}"
                                   aria-describedby="lastName" required value="{{ old('last_name') }}">
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="email" class="form-label text-color">
                                {{ __('messages.user.email').':' }}<span class="required"></span>
                            </label>
                            <input name="email" type="email" class="form-control shadow-css" onfocus="this.removeAttribute('readonly');"  readonly autocomplete="off" id="email" aria-describedby="email" placeholder=" {{ __('messages.user.email') }}"
                                   value="{{ old('email') }}" required>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="password" class="form-label text-color">
                                {{ __('messages.user.password').':' }}<span class="required"></span>
                            </label>
                            <div class="mb-3 position-relative">
                                <input type="password" name="password" class="form-control shadow-css" onfocus="this.removeAttribute('readonly');"  readonly autocomplete="off" id="password" placeholder=" {{ __('messages.user.password') }}" aria-describedby="password" required aria-label="Password" data-toggle="password">
                                <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                                    <i class="bi bi-eye-slash-fill"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="password_confirmation" class="form-label text-color">
                                {{ __('messages.user.confirm_password').':' }}<span class="required"></span>
                            </label>
                            <div class="mb-3 position-relative">
                                <input name="password_confirmation" type="password" onfocus="this.removeAttribute('readonly');"  readonly autocomplete="off" class="form-control shadow-css" placeholder=" {{ __('messages.user.confirm_password') }}" id="password_confirmation" aria-describedby="confirmPassword" required aria-label="Password" data-toggle="password">
                                <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                                    <i class="bi bi-eye-slash-fill"></i>
                                </span>
                            </div>
                        </div>
                    <div class="col-md-12 my-2">
                        <div class="form-check">
                            <input type="checkbox" name="term_policy_check" class="form-check-input" id="privacyPolicyCheckbox" placeholder>
                            <label class="form-check-label text-white fs-7" for="remember">
                                @lang('messages.by_signing_up_you_agree_to_our')
                                @if(getSuperAdminSettingValue('is_front_page') == 1)
                                    <a href="{{ route('terms.conditions') }}"
                                       target="_blank"
                                       class="text-decoration-none text-color">{!! __('messages.vcard.term_condition') !!}</a>
                                    &
                                    <a href="{{ route('privacy.policy') }}"
                                       target="_blank"
                                       class="text-decoration-none text-color">{{ __('messages.vcard.privacy_policy') }}</a>
                                    .
                                @else
                                    {!! __('messages.vcard.term_condition') !!} & {{ __('messages.vcard.privacy_policy') }}
                                @endif
                            </label>
                        </div>
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn shadow-css" value="{{ __('messages.common.submit') }}"/>
                    </div>
                    <div class="d-flex align-items-center fs-7 mt-4">
                        <span class="text-gray-700 me-2">{{__('messages.common.already_have_an_account').'?'}}</span>
                        <a href="{{ route('login') }}" class="text-color text-decoration-none">
                            {{__('messages.common.sign_in_here')}}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

