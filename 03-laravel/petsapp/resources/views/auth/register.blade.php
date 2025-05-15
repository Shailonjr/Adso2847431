<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Document -->
        <div>
            <x-input-label for="Document" :value="__('Document')" />
            <x-text-input id="Document" class="block mt-1 w-full" type="text" name="Document" :value="old('Document')" required autofocus autocomplete="Document" />
            <x-input-error :messages="$errors->get('Document')" class="mt-2" />
        </div>
        <!-- FullName -->
        <div>
            <x-input-label for="FullName" :value="__('FullName')" />
            <x-text-input id="FullName" class="block mt-1 w-full" type="text" name="FullName" :value="old('FullName')" required autofocus autocomplete="FullName" />
            <x-input-error :messages="$errors->get('FullName')" class="mt-2" />
        </div>

        <!-- Gender -->
        <div>
            <x-input-label for="Gender" :value="__('Gender')" />
            <x-text-input id="Gender" class="block mt-1 w-full" type="text" name="Gender" :value="old('Gender')" required autofocus autocomplete="Gender" />
            <x-input-error :messages="$errors->get('Gender')" class="mt-2" />
        </div>

        <!-- BirthDate -->
        <div>
            <x-input-label for="BirthDate" :value="__('BirthDate')" />
            <x-text-input id="BirthDate" class="block mt-1 w-full" type="text" name="BirthDate" :value="old('BirthDate')" required autofocus autocomplete="BirthDate" />
            <x-input-error :messages="$errors->get('BirthDate')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="Phone" :value="__('Phone')" />
            <x-text-input id="Phone" class="block mt-1 w-full" type="text" name="Phone" :value="old('Phone')" required autofocus autocomplete="Phone" />
            <x-input-error :messages="$errors->get('Phone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mx-auto flex justify-center items-center"  >
            <x-primary-button class="ms-4" >
                {{ __('Register') }}
            </x-primary-button>
        </div>
        </div>
    </form>
</x-guest-layout>
