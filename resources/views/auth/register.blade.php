<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <div class="flex items-center mb-2">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="#3A6F8F" stroke="black" stroke-width="2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path d="M192 128c0-17.7 14.3-32 32-32s32 14.3 32 32l0 7.8c0 27.7-2.4 55.3-7.1 82.5l-84.4 25.3c-40.6 12.2-68.4 49.6-68.4 92l0 71.9c0 40 32.5 72.5 72.5 72.5c26 0 50-13.9 62.9-36.5l13.9-24.3c26.8-47 46.5-97.7 58.4-150.5l94.4-28.3-12.5 37.5c-3.3 9.8-1.6 20.5 4.4 28.8s15.7 13.3 26 13.3l128 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-83.6 0 18-53.9c3.8-11.3 .9-23.8-7.4-32.4s-20.7-11.8-32.2-8.4L316.4 198.1c2.4-20.7 3.6-41.4 3.6-62.3l0-7.8c0-53-43-96-96-96s-96 43-96 96l0 32c0 17.7 14.3 32 32 32s32-14.3 32-32l0-32zm-9.2 177l49-14.7c-10.4 33.8-24.5 66.4-42.1 97.2l-13.9 24.3c-1.5 2.6-4.3 4.3-7.4 4.3c-4.7 0-8.5-3.8-8.5-8.5l0-71.9c0-14.1 9.3-26.6 22.8-30.7zM24 368c-13.3 0-24 10.7-24 24s10.7 24 24 24l40.3 0c-.2-2.8-.3-5.6-.3-8.5L64 368l-40 0zm592 48c13.3 0 24-10.7 24-24s-10.7-24-24-24l-310.1 0c-6.7 16.3-14.2 32.3-22.3 48L616 416z" />
                </svg>
                <x-input-label for="name" :value="__('Nombre Completo')" />
            </div>

            <x-text-input id="name" class="block mt-1 w-full border-1 border-gray-400" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Ingrese su nombre completo"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Tipo de Documento -->
        <div class="mt-6">
            <div class="flex items-center mb-2">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="#3A6F8F" stroke="black" stroke-width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M0 64C0 28.7 28.7 0 64 0L384 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zM183 278.8c-27.9-13.2-48.4-39.4-53.7-70.8l39.1 0c1.6 30.4 7.7 53.8 14.6 70.8zm41.3 9.2l-.3 0-.3 0c-2.4-3.5-5.7-8.9-9.1-16.5c-6-13.6-12.4-34.3-14.2-63.5l47.1 0c-1.8 29.2-8.1 49.9-14.2 63.5c-3.4 7.6-6.7 13-9.1 16.5zm40.7-9.2c6.8-17.1 12.9-40.4 14.6-70.8l39.1 0c-5.3 31.4-25.8 57.6-53.7 70.8zM279.6 176c-1.6-30.4-7.7-53.8-14.6-70.8c27.9 13.2 48.4 39.4 53.7 70.8l-39.1 0zM223.7 96l.3 0 .3 0c2.4 3.5 5.7 8.9 9.1 16.5c6 13.6 12.4 34.3 14.2 63.5l-47.1 0c1.8-29.2 8.1-49.9 14.2-63.5c3.4-7.6 6.7-13 9.1-16.5zM183 105.2c-6.8 17.1-12.9 40.4-14.6 70.8l-39.1 0c5.3-31.4 25.8-57.6 53.7-70.8zM352 192A128 128 0 1 0 96 192a128 128 0 1 0 256 0zM112 384c-8.8 0-16 7.2-16 16s7.2 16 16 16l224 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-224 0z" />
                </svg>
                <x-input-label for="tipo_documento" :value="__('Tipo de Documento')" />
            </div>

            <select id="tipo_documento" name="tipo_documento" class="block mt-1 w-full border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="cc">Cédula de Ciudadanía</option>
                <option value="passport">Cédula de Extranjería</option>
                <option value="passport">Pasaporte</option>
                <option value="ti">Tarjeta de Identidad</option>
                <option value="permanecence">Permiso Especial de Permanencia</option>
                <!-- Añade más opciones según sea necesario -->
            </select>
            <x-input-error :messages="$errors->get('tipo_documento')" class="mt-2" />
        </div>


        <!-- Documento -->
        <div class="mt-6">
            <div class="flex items-center mb-2">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="#3A6F8F" stroke="black" stroke-width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 288c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128z" />
                </svg>
                <x-input-label for="documento" :value="__('Número de Documento')" />
            </div>

            <x-text-input id="documento" class="block mt-1 w-full border-gray-400" type="text" name="documento" :value="old('documento')" required autofocus autocomplete="documento" placeholder="Ingrese el número de su documento"/>
            <x-input-error :messages="$errors->get('documento')" class="mt-2" />
        </div>


        <!-- Telefono -->
        <div class="mt-6">
            <div class="flex items-center mb-2">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="#3A6F8F" stroke="black" stroke-width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <x-input-label for="telefono" :value="__('Número de Celular')" />
            </div>

            <x-text-input id="telefono" class="block mt-1 w-full border-gray-400" type="text" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" placeholder="Ingrese el número de su celular"/>
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>


        <!-- Fecha de Ingreso -->
        <div class="mt-6">
            <div class="flex items-center mb-2">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="#3A6F8F" stroke="black" stroke-width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z" />
                </svg>
                <x-input-label for="fecha_ingreso" :value="__('Fecha de Ingreso a la Empresa Día/Mes/Año')" />
            </div>

            <x-text-input id="fecha_ingreso" class="block mt-1 w-full border-gray-400" type="date" name="fecha_ingreso" :value="old('fecha_ingreso')" required autofocus autocomplete="fecha_ingreso" />
            <x-input-error :messages="$errors->get('fecha_ingreso')" class="mt-2" />
        </div>




        <!-- Email Address -->
        <div class="mt-6 mb-2">
            <div class="flex items-center mb-2">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="#3A6F8F" stroke="black" stroke-width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                </svg>
                <x-input-label for="email" :value="__('Correo Electrónico')" />
            </div>

            <x-text-input id="email" class="block mt-1 w-full border-gray-400" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Ingrese su correo electrónico"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-6">
            <div class="flex items-center mb-2">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="#3A6F8F" stroke="black" stroke-width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17l0 80c0 13.3 10.7 24 24 24l80 0c13.3 0 24-10.7 24-24l0-40 40 0c13.3 0 24-10.7 24-24l0-40 40 0c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                </svg>
                <x-input-label for="password" :value="__('Contraseña')" />
            </div>

            <div class="relative">
                <x-text-input id="password" class="block mt-1 w-full border-gray-400"
                    type="password"
                    name="password"
                    required autocomplete="new-password" placeholder="Ingrese su contraseña"/>
                <svg onclick="togglePasswordVisibility('password')" class="w-6 h-6 text-gray-500 absolute right-2 top-2 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M572.52 241.4C518.7 135.5 407.5 64 288 64 168.5 64 57.3 135.5 3.48 241.4a48.07 48.07 0 0 0 0 29.2C57.3 376.5 168.5 448 288 448c119.5 0 230.7-71.5 284.52-177.4a48.07 48.07 0 0 0 0-29.2zM288 400c-93.3 0-178.7-55.2-222.5-144C109.3 167.2 194.7 112 288 112c93.3 0 178.7 55.2 222.5 144-43.8 88.8-129.2 144-222.5 144zm0-224a80 80 0 1 0 80 80 80.09 80.09 0 0 0-80-80zm0 128a48 48 0 1 1 48-48 48.05 48.05 0 0 1-48 48z" />
                </svg>
            </div>


            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-6">
            <div class="flex items-center mb-2">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="#3A6F8F" stroke="black" stroke-width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17l0 80c0 13.3 10.7 24 24 24l80 0c13.3 0 24-10.7 24-24l0-40 40 0c13.3 0 24-10.7 24-24l0-40 40 0c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                </svg>
                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
            </div>

            <div class="relative">
                <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-400"
                    type="password"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña"/>
                <svg onclick="togglePasswordVisibility('password_confirmation')" class="w-6 h-6 text-gray-500 absolute right-2 top-2 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M572.52 241.4C518.7 135.5 407.5 64 288 64 168.5 64 57.3 135.5 3.48 241.4a48.07 48.07 0 0 0 0 29.2C57.3 376.5 168.5 448 288 448c119.5 0 230.7-71.5 284.52-177.4a48.07 48.07 0 0 0 0-29.2zM288 400c-93.3 0-178.7-55.2-222.5-144C109.3 167.2 194.7 112 288 112c93.3 0 178.7 55.2 222.5 144-43.8 88.8-129.2 144-222.5 144zm0-224a80 80 0 1 0 80 80 80.09 80.09 0 0 0-80-80zm0 128a48 48 0 1 1 48-48 48.05 48.05 0 0 1-48 48z" />
                </svg>
            </div>


            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ms-4 bg-blue-500 text-white hover:bg-custom-green-hover transition-colors duration-300">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Ya estás Registrado ? Inicia Sesión') }}
            </a>
        </div>
    </form>
</x-guest-layout>


<script>
    function togglePasswordVisibility(id) {
        const passwordInput = document.getElementById(id);
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    }
</script>