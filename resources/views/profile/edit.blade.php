@extends('layouts.app')

@section('content')
    <div class="py-12" style="position: relative; z-index: 10;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="position: relative; z-index: 10;">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-6" style="position: relative; z-index: 10;">
                {{ __('Profile') }}
            </h2>

            <div class="space-y-6" style="position: relative; z-index: 10;">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="position: relative; z-index: 10;">
                    <div class="max-w-xl" style="position: relative; z-index: 10;">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="position: relative; z-index: 10;">
                    <div class="max-w-xl" style="position: relative; z-index: 10;">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="position: relative; z-index: 10;">
                    <div class="max-w-xl" style="position: relative; z-index: 10;">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
