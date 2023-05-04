
<x-guest-layout>
    
    <img src="http://lineadecodigo.com/imagenes/logo.jpg" alt="" />

  
     <x-auth-card>
    
      
        <x-slot name="logo">
            <a href="/">
             
            </a>
            

        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        

         <form method="POST" action="{{ route('login') }}">
            @csrf
             <div class="text-center">
                <img src="https://img.freepik.com/vector-gratis/concepto-abstracto-sistema-control-acceso_335657-3180.jpg?w=740&t=st=1669743057~exp=1669743657~hmac=d7ee95e73446ad6122ffa16d8b92eb01e8f6330041cef50dce45434f73013457" style="width: 1000;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">LOGIN COMIDAS NOYSITA</h4>
                </div>
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('EMAIL')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('CONTRASEÑA')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            <div class="mt-4">
                <x-label for=" ReCaptcha " :value="__('RECAPTCHA')" />
                <html>
                    <!DOCTYPE HTML>
                    <html>
                        <head>
                          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                          <script src='https://www.google.com/recaptcha/api.js'></script>
                        </head>
                        <body>
                            <form class="form-signin" method="post" action="post.php">
                                <!-- Site-key for automated tests -->
                                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                             <x-button class="ml-3" >
                    {{ __('ENTRAR') }}
                </x-button>
                            </form>
                        </body>
                    </html>

            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('REGISTRARSE AHORA ') }}  
                </label>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('OLVIDE MI CONTRASEÑA?') }}
                    </a>
                @endif 
            </div>

            <div class="flex items-center justify-end mt-4">
                
                </a>

               

             

              
            </div>
         </form>
    </x-auth-card>
    
</x-guest-layout>
