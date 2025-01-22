@extends('site.common')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="p-3 mb-3">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="p-4 sm:p-8 shadow sm:rounded-lg mb-3">
                        <div class="max-w-xl">
                            <section>
                                <header>
                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ __('Profile Information') }}
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ __("Update your account's profile information and email address.") }}
                                    </p>
                                </header>

                                <form method="post" action="{{ route('admin.profile.update') }}" class="mt-6 space-y-6">
                                    @csrf
                                    @method('patch')

                                    <div class="mb-3">
                                        <x-input-label for="name" class="form-label" :value="__('Name')" />
                                        <x-text-input id="name" name="name" type="text" class="form-control"
                                            :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>
                                    <div class="mb-3">
                                        <x-input-label for="email" class="form-label" :value="__('Email')" />
                                        <x-text-input id="email" name="email" type="email" class="form-control"
                                            :value="old('email', $user->email)" required autocomplete="username" />
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <button type="submit" class="btn btn-primary btn-sm">{{ __('Save') }}</button>
                                        @if (session('status') === 'profile-updated')
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ 'Saved' }}
                                                <button type="button" class="btn btn-sm float-end float-right"
                                                    data-bs-dismiss="alert" aria-label="Close">&times;</button>
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            </section>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="p-4 sm:p-8 shadow sm:rounded-lg mb-3">
                        <div class="max-w-xl">
                            <section>
                                <header>
                                    <h2 class="text-lg font-medium text-gray-900">
                                        {{ __('Update Password') }}
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ __('Ensure your account is using a long, random password to stay secure.') }}
                                    </p>
                                </header>

                                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                    @csrf
                                    @method('put')

                                    <div class="mb-3">
                                        <x-input-label for="current_password" :value="__('Current Password')" />
                                        <x-text-input id="current_password" name="current_password" type="password"
                                            class="form-control" autocomplete="current-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-danger" />
                                    </div>

                                    <div class="mb-3">
                                        <x-input-label for="password" :value="__('New Password')" />
                                        <x-text-input id="password" name="password" type="password" class="form-control"
                                            autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-danger" />
                                    </div>

                                    <div class="mb-3">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                        <x-text-input id="password_confirmation" name="password_confirmation"
                                            type="password" class="form-control" autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-danger" />
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <button class="btn btn-primary btn-sm" type="submit">{{ __('Save') }}</button>

                                        @if (session('status') === 'password-updated')
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ 'Saved' }}
                                                <button type="button" class="btn btn-sm float-end float-right"
                                                    data-bs-dismiss="alert" aria-label="Close">&times;</button>
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            </section>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
