<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diagnosa Penyakit') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen py-4">
        <div class="bg-white bg-opacity-80 p-6 rounded-lg shadow-lg w-3/4">

            <div class="p-4">
                <div class="mb-4">
                    <h2 class="font-semibold">Data Pasien :</h2>
                    <div class="mt-5 sm:mx-auto  sm:w-full sm:max-w-sm">
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="nama"
                            class="block w-full rounded-md bg-white px-3 py-1 text-base text-gray-900 outline outline-1 -outline-offset-1  focus:outline-2 focus:-outline-offset-2  sm:text-sm/6"
                            type="text" name="nama" :value="old('nama')" />
                    </div>

                    <div class="mt-5 sm:mx-auto  sm:w-full sm:max-w-sm">
                        <x-input-label for="kelamin" :value="__('Kelamin')" />
                        <x-text-input id="kelamin"
                            class="block w-full rounded-md bg-white px-3 py-1 text-base text-gray-900 outline outline-1 -outline-offset-1  focus:outline-2 focus:-outline-offset-2  sm:text-sm/6"
                            type="text" name="kelamin" :value="old('kelamin')" />
                    </div>

                    <div class="mt-5 sm:mx-auto  sm:w-full sm:max-w-sm">
                        <x-input-label for="alamat" :value="__('Alamat')" />
                        <x-text-input id="alamat"
                            class="block w-full rounded-md bg-white px-3 py-1 text-base text-gray-900 outline outline-1 -outline-offset-1  focus:outline-2 focus:-outline-offset-2  sm:text-sm/6"
                            type="text" name="alamat" :value="old('alamat')" />
                    </div>

                    <div class="mt-5 sm:mx-auto  sm:w-full sm:max-w-sm">
                        <x-input-label for="pemilik" :value="__('Pemilik')" />
                        <x-text-input id="pemilik"
                            class="block w-full rounded-md bg-white px-3 py-1 text-base text-gray-900 outline outline-1 -outline-offset-1  focus:outline-2 focus:-outline-offset-2  sm:text-sm/6"
                            type="text" name="pemilik" :value="old('pemilik')" />
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
