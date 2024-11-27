<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Konsultasi') }}
        </h2>
    </x-slot>

    <div class="flex flex-col w-full py-4">
        <div class="table-container">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="text-center text-base text-gray-100">
                        <th class="px-4 py-3 uppercase">No
                        </th>
                        <th class="px-4 py-3 uppercase tracking-wider">
                            Pertolongan Penyakit</th>
                        <th class="px-4 py-3 uppercase tracking-wider">Pilih
                        </th>
                    </tr>
                </thead>

                <tbody class="text-left text-gray-800 text-base">
                    <tr>
                        <td class="px-4 py-3">1</td>
                        <td class="px-4 py-3">Koksidiosis</td>
                        <td class="px-4 py-3">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md"><a
                                    href="#">
                                    Lihat </a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3">Tripano Somiasis</td>
                        <td class="px-4 py-3">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md"><a
                                    href="#">
                                    Lihat </a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">3</td>
                        <td class="px-4 py-3">Hepatozoonosis</td>
                        <td class="px-4 py-3">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md"><a
                                    href="#">
                                    Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">4</td>
                        <td class="px-4 py-3">Babesiosis</td>
                        <td class="px-4 py-3">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">5</td>
                        <td class="px-4 py-3">Distemper</td>
                        <td class="px-4 py-3">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">6</td>
                        <td class="px-4 py-3">Ankilostomiosis</td>
                        <td class="px-4 py-3">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">7</td>
                        <td class="px-4 py-3">Tungau Otodectes</td>
                        <td class="px-4 py-3">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">8</td>
                        <td class="px-4 py-3">Phthiriasis</td>
                        <td class="px-4 py-3">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">9</td>
                        <td class="px-4 py-3">Pedikulosis</td>
                        <td class="px-4 py-3">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <x-footer></x-footer>
</x-guest-layout>
