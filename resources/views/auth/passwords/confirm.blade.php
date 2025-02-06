@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-100 px-6 py-4 rounded-t-lg border-b border-gray-200">
                    <h2 class="text-xl font-semibold">{{ __('Confirm Password') }}</h2>
                </div>

                <div class="p-6">
                    <p class="mb-4 text-gray-700">
                        {{ __('Please confirm your password before continuing.') }}
                    </p>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <!-- Campo de contraseña -->
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 font-bold mb-2">
                                {{ __('Password') }}
                            </label>
                            <input
                                id="password"
                                type="password"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror"
                                name="password"
                                required
                                autocomplete="current-password">
                            @error('password')
                            <span class="text-red-500 text-sm mt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Botón de confirmación y enlace de olvidé mi contraseña -->
                        <div class="flex items-center justify-between">
                            <button
                                type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                {{ __('Confirm Password') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a
                                class="text-blue-500 hover:text-blue-700 font-bold no-underline"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection