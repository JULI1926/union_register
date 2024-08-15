<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="py-12">    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/usuarios" class="text-blue-500 hover:text-blue-700">
                        {{ __('Usuarios') }}
                    </a>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/empresas" class="text-blue-500 hover:text-blue-700">
                        {{ __('Empresas') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection