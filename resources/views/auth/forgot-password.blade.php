<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            <div class="col-lg-6"> 
                <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-olvide-contrasena_114360-1010.jpg?w=740&t=st=1669742911~exp=1669743511~hmac=1fbf96d9ac0ea61a2fbf3e5eb0a973aa815fbcdaa15990e4a572b0c0f1b1db11" class="rounded img-shadow img-fluid" alt="wrapkit" /> 
            </div>
            <div>
                <h3>¿Olvidaste tu contraseña?</h3>
            </div>
            
            {{ __('Simplemente háganos saber su dirección de correo electrónico y le envaremos un enlace de restablecimientio de contraseña.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('RESTABLECER CONTRASEÑA') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
