@extends('layouts.app')
@section('main')

        <!-- Email Address -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="align-items-center justify-content-between mb-3">
                            <div class="mb-4">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input name="email" type="email" class="form-control" id="floatingInput" :value="old('email')" required autocomplete="username">
                                    <x-input-label for="email" :value="__('Email')" />
                                    {{-- <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus /> --}}
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">{{ __('Email Password Reset Link') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
