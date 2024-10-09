<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Penyakit') }}
        </h2>
    </x-slot>

    <div class="flex flex-col w-full">
        <div class="table-container">
            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">No
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Daftar
                            Nama Penyakit</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pilih
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="px-4 py-3 text-left text-sm text-gray-500">1</td>
                        <td class="px-4 py-3 text-left text-sm text-gray-800">Koksidiosis</td>
                        <td class="px-4 py-3 text-left text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-left text-sm text-gray-500">2</td>
                        <td class="px-4 py-3 text-left text-sm text-gray-800">Tripano Somiasis</td>
                        <td class="px-4 py-3 text-left text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-left text-sm text-gray-500">3</td>
                        <td class="px-4 py-3 text-left text-sm text-gray-800">Hepatozoonosis</td>
                        <td class="px-4 py-3 text-left text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-left text-sm text-gray-500">4</td>
                        <td class="px-4 py-3 text-left text-sm text-gray-800">Babesiosis</td>
                        <td class="px-4 py-3 text-left text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-left text-sm text-gray-500">5</td>
                        <td class="px-4 py-3 text-left text-sm text-gray-800">Distemper</td>
                        <td class="px-4 py-3 text-left text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-left text-sm text-gray-500">6</td>
                        <td class="px-4 py-3 text-left text-sm text-gray-800">Ankilostomiosis</td>
                        <td class="px-4 py-3 text-left text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-left text-sm text-gray-500">7</td>
                        <td class="px-4 py-3 text-left text-sm text-gray-800">Tungau Otodectes</td>
                        <td class="px-4 py-3 text-left text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-left text-sm text-gray-500">8</td>
                        <td class="px-4 py-3 text-left text-sm text-gray-800">Phthiriasis</td>
                        <td class="px-4 py-3 text-left text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-left text-sm text-gray-500">9</td>
                        <td class="px-4 py-3 text-left text-sm text-gray-800">Pedikulosis</td>
                        <td class="px-4 py-3 text-left text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                Lihat
                            </button>
                        </td>
                    </tr>
        </div>

</x-app-layout>
