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
                    <form action="{{ route('data_pasien.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-900 ">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="bg-gray-100 border border-gray-300 text-gray-900 p-2 rounded-md w-full">
                        </div>

                        <div class="mb-4">
                            <label for="kelamin" class="block text-sm font-medium text-gray-900 ">Kelamin</label>
                            <input type="text" name="kelamin" id="kelamin"
                                class="bg-gray-100 border border-gray-300 text-gray-900 p-2 rounded-md w-full">
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="block text-sm font-medium text-gray-900 ">Alamat</label>
                            <input type="text" name="alamat" id="alamat"
                                class="bg-gray-100 border border-gray-300 text-gray-900 p-2 rounded-md w-full">
                        </div>

                        <div class="mb-4">
                            <label for="pemilik" class="block text-sm font-medium text-gray-900 ">Pemilik</label>
                            <input type="text" name="pemilik" id="pemilik"
                                class="bg-gray-100 border border-gray-300 text-gray-900 p-2 rounded-md w-full">
                        </div>
                        @endforeach
                </div>
            </div>
        </div>

</x-app-layout>
