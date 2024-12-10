<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Penyakit') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen py-4 items-center justify-center bg-gray-100">
        <table class="table table-auto border-collapse border-slate-800 table-container">
            <thead>
                <tr class="text-center text-base text-gray-800 w-3/4 px-4 py-3">
                    <th class="px-4 py-3 uppercase border border-gray-800">No
                    </th>
                    <th class="px-4 py-3 uppercase tracking-wider border border-gray-800">
                        Daftar
                        Penyakit</th>
                    <th class="px-4 py-3 uppercase tracking-wider border border-gray-800">
                        Pilih
                    </th>
                </tr>
            </thead>

            <tbody class="text-left text-gray-800 text-base px-4 py-3 border border-gray-800">
                <tr>
                    <td class="px-4 py-3 text-center">1</td>
                    <td class="px-4 py-3">Koksidiosis</td>
                    <td class="px-4 py-3">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md"><a
                                href="{{ url('daftar_penyakit/koksidiosis') }}">
                                Lihat </a>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">2</td>
                    <td class="px-4 py-3">Tripano Somiasis</td>
                    <td class="px-4 py-3">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md"><a
                                href="{{ url('daftar_penyakit/tripanosomiasis') }}">
                                Lihat </a>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">3</td>
                    <td class="px-4 py-3">Hepatozoonosis</td>
                    <td class="px-4 py-3">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md"><a
                                href="{{ url('daftar_penyakit/hepatozoonosis') }}">
                                Lihat</a>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">4</td>
                    <td class="px-4 py-3">Babesiosis</td>
                    <td class="px-4 py-3">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                            <a href="{{ url('daftar_penyakit/babesiosis') }}">Lihat</a>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">5</td>
                    <td class="px-4 py-3">Distemper</td>
                    <td class="px-4 py-3">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                            <a href="{{ url('daftar_penyakit/distemper') }}">Lihat</a>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">6</td>
                    <td class="px-4 py-3">Ankilostomiosis</td>
                    <td class="px-4 py-3">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                            <a href="{{ url('daftar_penyakit/ankilostomiosis') }}">Lihat</a>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">7</td>
                    <td class="px-4 py-3">Tungau Otodectes</td>
                    <td class="px-4 py-3">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                            <a href="{{ url('daftar_penyakit/tungau_otodectes') }}">Lihat</a>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">8</td>
                    <td class="px-4 py-3">Phthiriasis</td>
                    <td class="px-4 py-3">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                            <a href="{{ url('daftar_penyakit/phthiriasis') }}">Lihat</a>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">9</td>
                    <td class="px-4 py-3">Pedikulosis</td>
                    <td class="px-4 py-3">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                            <a href="{{ url('daftar_penyakit/pedikulosis') }}">Lihat</a>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-guest-layout>
