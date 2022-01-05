<x-guest-layout class="h-full">
     
     

      <div class="flex flex-col items-center justify-center p-4 space-y-4  text-gray-900 h-full m-6 ">
        <!-- Brand -->
        <a
          href="#"
          class="inline-block mb-6 text-3xl font-bold tracking-wider  text-primary-dark dark:text-light"
        >
          App Doctor
        </a>
<main class="border border-7 dark:border-gray-700">
          <div class="w-full max-w-sm px-4 py-6 space-y-6 bg-white rounded-md dark:bg-darker">
            <h1 class="text-xl font-semibold text-center">Login</h1>
            <form class="space-y-6" method="POST" action="{{ route('login') }}">
              @csrf
              <input
                class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                type="email"
                id="email" 
                name="email"
                :value="old('email')"
                placeholder="Email address"
                required
                autofocus
              />
              <input
                class="w-full px-4 py-2 border rounded-md dark:bg-darker dark:border-gray-700 focus:outline-none focus:ring focus:ring-primary-100 dark:focus:ring-primary-darker"
                type="password"
                name="password"
                id="password" 
                placeholder="Password"
                autocomplete="current-password"
                required
              />
              <div>
                <button
                  type="submit"
                  class="w-full px-4 py-2 font-medium text-center text-white transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 dark:focus:ring-offset-darker"
                >
                  Login
                </button>
              </div>
            </form>
            <!-- Register link -->
            <div class="text-sm text-gray-600 dark:text-gray-400">
              Don't have an account yet? <a href="register.html" class="text-blue-600 hover:underline">Register</a>
            </div>
             <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                
            </div>
          </div>
          
        </main>
         </div>
          
 
</x-guest-layout>

