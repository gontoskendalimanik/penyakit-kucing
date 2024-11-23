<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pertolongan Setiap Penyakit') }}
        </h2>
    </x-slot>

    <div class="flex flex-col w-full py-4">
        <div class=" table-container">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-4 py-3 text-xs font-medium text-gray-100 uppercase">No
                        </th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-100 uppercase tracking-wider">Penyakit Kucing
                        </th>
                        <th class="px-4 py-3 text-xs font-medium text-gray-100 uppercase tracking-wider">Obat yang diperlukan
                        </th>
                    </tr>
                </thead>

                <tbody class="text-left">
                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">1</td>
                        <td class="px-4 py-3 text-sm text-gray-500">Koksidiosis</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Ormetoprim<br>Tribrisen<br>Tortrazuril</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">2</td>
                        <td class="px-4 py-3 text-sm text-gray-500">Tripanosomiasis</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Injeksi<br>Diminazene<br>Isometamedi</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">3</td>
                        <td class="px-4 py-3 text-sm text-gray-500">
                            Hepatozoonosis</td>
                        <td class="px-4 py-3 text-sm text-gray-800">
                            Trimetho<br>Pyrimethami<br>Clindamycin<br>Decoquinate</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">4</td>
                        <td class="px-4 py-3 text-sm text-gray-500">Babesiosis</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Clindamycin<br></td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">5</td>
                        <td class="px-4 py-3 text-sm text-gray-500">Distemper</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Cairan<br>Injeksi<br>Vitamin B</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">6</td>
                        <td class="px-4 py-3 text-sm text-gray-500">Ankilostomiosis</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Telmin/Cane</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">7</td>
                        <td class="px-4 py-3 text-sm text-gray-500">Tungau Otodectes</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Dipping<br>Injeksi</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">8</td>
                        <td class="px-4 py-3 text-sm text-gray-500">Phthiriasis</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Memandikan<br>Larutan<br>Bayticol</td>
                    </tr>

                    <tr>
                        <td class="px-4 py-3 text-sm text-gray-500">9</td>
                        <td class="px-4 py-3 text-sm text-gray-500">Pedikulosis</td>
                        <td class="px-4 py-3 text-sm text-gray-800">Selamektin<br>Injeksi</td>
                    </tr>


        </div>
</x-guest-layout>
