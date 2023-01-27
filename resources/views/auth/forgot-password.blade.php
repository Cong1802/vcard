@extends('layouts.auth')
@section('title')
    {{__('messages.common.forgot_password')}}
@endsection
@section('content')
    <div class="d-flex flex-column flex-column-fluid align-items-center mt-12 p-4">
        <div class="col-12 text-center">
            <a href="{{ route('home') }}" class="image mb-7 mb-sm-10">
                <div class="wrapper p-0">
                    <div class="top">Digital Card</div>
                    <div class="bottom" aria-hidden="true">Digital Card</div>
                </div>
            </a>
        </div>
        <div class="width-540">
            @include('layouts.errors')
            @include('flash::message')
            @if(Session::has('status'))
            <div class="alert alert-success fs-4 text-white align-items-center" role="alert">
                <i class="fa-solid fa-face-smile me-4"></i>
                {{ Session::get('status') }}
            </div>
            @endif
        </div>
        <div class="box rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <div class="form">
            <form class="w-100" method="POST" action="{{ route('password.email') }}">
                @csrf
                <h2 class="text-center mb-4">{{__('messages.common.forgot_password').' ?'}}</h2>
                <div class="text-white mb-4 text-center">{{__('messages.placeholder.enter_your_email_to_reset')}}</div>
                <div class="text-center text-white mb-4">{{ __('messages.placeholder.forgot_your_password_no_problem') }}</div>
                <div class="row">
                    <div class="mb-4">
                        <label for="email" class="form-label text-color">
                            {{ __('messages.user.email').':' }}<span class="required"></span>
                        </label>
                        <input id="email" class="form-control shadow-css" type="email"
                               value="{{ old('email') }}"
                               required name="email" onfocus="this.removeAttribute('readonly');"  readonly autocomplete="off" placeholder="{{ __('messages.user.email') }}"/>
                    </div>
                </div>
                <div class="row">
                    <!-- Submit Field -->
                    <div class="form-group col-sm-12 text-start align-items-center">
                        <input type="submit" class="btn shadow-css2 w-100" value="{{ __('messages.email_password_reset_link') }}" />
                        <a href="{{ route('login') }}"
                           class="btn text-white w-100 my-4">{{__('messages.common.cancel')}}</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection

