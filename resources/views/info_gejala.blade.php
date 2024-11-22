<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gejala Penyakit') }}
        </h2>
    </x-slot>

    <div class="flex flex-col w-full py-4">
        <div class=" table-container">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-4 py-3 text-xs font-medium text-gray-100 uppercase">No
                        </th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-100 uppercase tracking-wider">Daftar
                            Nama Penyakit</th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-100 uppercase tracking-wider">Pilih
                        </th>
                    </tr>
                </thead>

                <tbody class="text-left">
                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">1</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Dehidrasi</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md"><a
                                    href="#">
                                    Lihat </a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">2</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Terlalu Kurus</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md"><a
                                    href="#">
                                    Lihat </a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">3</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Malas Bergerak</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md"><a
                                    href="#">
                                    Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">4</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Malas Bergerak</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">5</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Anemik</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">6</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Diare</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">7</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Demam</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">8</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Pucat</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">9</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Anoreksia</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">10</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Melena</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">11</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Ikterus</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">12</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Kutu di badan</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">13</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Kelumpuhan</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">14</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Pincang</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">15</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Penyakit Menurun</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">16</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Halitosis</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">17</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Muntah</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">18</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Lesi Anggota</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">19</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Batuk</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">20</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Radang Kulit</td>
                        <td class="px-4 py-3 text-sm">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 rounded-md">
                                <a href="#">Lihat</a>
                            </button>
                        </td>
                    </tr>
        </div>

</x-guest-layout>
