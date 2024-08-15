<div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800">
    <div class="px-4">
        @auth
            <div class="font-medium text-lg text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</div>
        @else
            <div class="font-medium text-lg text-gray-800 dark:text-gray-200">Guest</div>
        @endauth
    </div>

    <div class="mt-3 space-y-1">
        @auth
            <x-responsive-nav-link :href="route('profile.edit')" class="block px-4 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                {{ __('Profile') }}
            </x-responsive-nav-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                @csrf
                <button type="submit">{{ __('Logout') }}</button>
            </form>
        @else
            <x-responsive-nav-link :href="route('login')" class="block px-4 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                {{ __('Login') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register')" class="block px-4 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                {{ __('Register') }}
            </x-responsive-nav-link>
        @endauth
    </div>
</div>