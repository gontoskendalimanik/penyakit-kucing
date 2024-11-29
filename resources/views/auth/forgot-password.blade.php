<x-guest-layout>
    <div class=" min-h-full justify-center px-6 py-12 lg:px-8">
        <div class="sm-mx-auto sm:w-full sm:max-w-sm m-auto">
            <div class="mb-4 text-sm mt-10 text-left font-bold tracking-tight text-gray-900 ">
                {{ __('Lupa kata sandi? Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan tautan untuk menyetel ulang kata sandi yang akan memungkinkan Anda memilih kata sandi baru.') }}
            </div>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full rounded-md" type="email" name="email"
                    :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
