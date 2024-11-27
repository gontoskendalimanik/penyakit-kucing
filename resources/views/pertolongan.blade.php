<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pertolongan Setiap Penyakit') }}
        </h2>
    </x-slot>

    <div class="flex flex-col w-full py-4">
        <div class="table-container">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="text-center text-base text-gray-100">
                        <th class="px-4 py-3 uppercase">No
                        </th>
                        <th class="px-4 py-3 uppercase tracking-wider">Penyakit Kucing
                        </th>
                        <th class="px-4 py-3 uppercase tracking-wider">Obat yang
                            diperlukan
                        </th>
                    </tr>
                </thead>

                <tbody class="text-left text-gray-800 text-base">
                    <tr>
                        <td class="px-4 py-3 ">1</td>
                        <td class="px-4 py-3 ">Koksidiosis</td>
                        <td class="px-4 py-3 ">Ormetoprim<br>Tribrisen<br>Tortrazuril</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3">Tripanosomiasis</td>
                        <td class="px-4 py-3">Injeksi<br>Diminazene<br>Isometamedi</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">3</td>
                        <td class="px-4 py-3">
                            Hepatozoonosis</td>
                        <td class="px-4 py-3">
                            Trimetho<br>Pyrimethami<br>Clindamycin<br>Decoquinate</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">4</td>
                        <td class="px-4 py-3">Babesiosis</td>
                        <td class="px-4 py-3">Clindamycin<br></td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">5</td>
                        <td class="px-4 py-3">Distemper</td>
                        <td class="px-4 py-3">Cairan<br>Injeksi<br>Vitamin B</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">6</td>
                        <td class="px-4 py-3">Ankilostomiosis</td>
                        <td class="px-4 py-3">Telmin/Cane</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">7</td>
                        <td class="px-4 py-3">Tungau Otodectes</td>
                        <td class="px-4 py-3">Dipping<br>Injeksi</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">8</td>
                        <td class="px-4 py-3">Phthiriasis</td>
                        <td class="px-4 py-3">Memandikan<br>Larutan<br>Bayticol</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3">9</td>
                        <td class="px-4 py-3">Pedikulosis</td>
                        <td class="px-4 py-3">Selamektin<br>Injeksi</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <x-footer></x-footer>
</x-guest-layout>
