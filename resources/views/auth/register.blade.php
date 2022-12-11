<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                
            </a>
            
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" style="width: 1000;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">REGISTRO COMIDAS NOYSITA</h4>
                </div>
    
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('NOMBRE')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('CORREO')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('CONTRASEÑA')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('CONFIRME CONTRASEÑA')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900"  href="{{ route('login') }}">
                    {{ __('DESEA INICIAR SESION?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('REGISTRARSE') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
