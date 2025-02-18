<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
{{--            <x-authentication-card-logo />--}}
        </x-slot>

        <x-validation-errors class="mb-4" />
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="px-6 py-8">
                    <h2 class="text-center text-3xl font-bold text-pink-600 mb-8">Créez votre compte</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" class="block text-sm font-medium text-purple-700" value="{{ __('Name') }}" />
                <x-input id="name"  class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" class="block text-sm font-medium text-purple-700" value="{{ __('Email') }}" />
                <x-input id="email"  class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" class="block text-sm font-medium text-purple-700" value="{{ __('Password') }}" />
                <x-input id="password"  class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" class="block text-sm font-medium text-purple-700" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation"  class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm from-pink-500 to-purple-500 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="bg-gradient-to-r from-pink-500 to-purple-500 text-white px-8 py-3 rounded-lg hover:from-pink-600 hover:to-purple-600">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
