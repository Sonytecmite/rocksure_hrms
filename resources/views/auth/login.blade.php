{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
            
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.auth')
@section('content')
    <form  method="POST" action="{{ route('login') }}">
        @csrf
        @if(session()->has('invalid_credentials'))
            <span class="text-danger text-center">{{ session()->get('invalid_credentials') }}</span>
        @endif
        <div class="form-group">
            <input type="text" class="form-control p_input" name="staff_id" placeholder="Staff ID">
            @if ($errors->has('staff_id'))
                <span class="text-danger text-left">{{ $errors->first('staff_id') }}</span>
            @endif
        </div>
        <div class="form-group">
            <input type="password" class="form-control p_input" name="password" placeholder="Password">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="row form-group d-flex align-items-center justify-content-between">
            <div class="col-sm-6 form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="remember_me"> Remember me </label>
            </div>
            <div class="col-sm-6">
                <a href="#" class="forgot-pass">Forgot password</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <p class="sign-up">No Account Yet?  <a href="{{route('register')}}"> Register</a></p>                
    </form>
@endsection 
