<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pertolongan Setiap Penyakit') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen py-4 items-center justify-center bg-gray-100">
        <table class="table table-auto border-collapse border-slate-800 table-container">
            <thead>
                <tr class="text-center text-base text-gray-100 px-4 py-3 w-3/4">
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
                    <td class="px-4 py-3 text-center">1</td>
                    <td class="px-4 py-3 ">Koksidiosis</td>
                    <td class="px-4 py-3 ">Ormetoprim<br>Tribrisen<br>Tortrazuril</td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">2</td>
                    <td class="px-4 py-3">Tripanosomiasis</td>
                    <td class="px-4 py-3">Injeksi<br>Diminazene<br>Isometamedi</td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">3</td>
                    <td class="px-4 py-3">
                        Hepatozoonosis</td>
                    <td class="px-4 py-3">
                        Trimetho<br>Pyrimethami<br>Clindamycin<br>Decoquinate</td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">4</td>
                    <td class="px-4 py-3">Babesiosis</td>
                    <td class="px-4 py-3">Clindamycin<br></td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">5</td>
                    <td class="px-4 py-3">Distemper</td>
                    <td class="px-4 py-3">Cairan<br>Injeksi<br>Vitamin B</td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">6</td>
                    <td class="px-4 py-3">Ankilostomiosis</td>
                    <td class="px-4 py-3">Telmin/Cane</td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">7</td>
                    <td class="px-4 py-3">Tungau Otodectes</td>
                    <td class="px-4 py-3">Dipping<br>Injeksi</td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">8</td>
                    <td class="px-4 py-3">Phthiriasis</td>
                    <td class="px-4 py-3">Memandikan<br>Larutan<br>Bayticol</td>
                </tr>

                <tr>
                    <td class="px-4 py-3 text-center">9</td>
                    <td class="px-4 py-3">Pedikulosis</td>
                    <td class="px-4 py-3">Selamektin<br>Injeksi</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-guest-layout>
