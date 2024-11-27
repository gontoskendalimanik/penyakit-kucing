<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Analisa Penyakit') }}
        </h2>
    </x-slot>

    <div class="w-1/2 p-4">
        <div class="content">
            <table>
                <tr>
                    <th colspan="2">data pasien :</th>
                </tr>
                <tr>
                    <td>nama</td>
                    <td>: cinta</td>
                </tr>
                <tr>
                    <td>kelamin</td>
                    <td>: pria</td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>: alamanda</td>
                </tr>
                <tr>
                    <td>pemilik</td>
                    <td>: yaya</td>
                </tr>
                <tr>
                    <th colspan="2">hasil analisa terakhir :</th>
                </tr>
                <tr>
                    <td>nama latin</td>
                    <td>: tripanosomiasis</td>
                </tr>
                <tr>
                    <td>gejala</td>
                    <td>:
                        <ol>
                            <li>malas bergerak</li>
                            <li>anemik</li>
                            <li>anoreksia</li>
                            <li>epifora</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>definisi</td>
                    <td>: merupakan penyakit yang menyerang pada hewan kucing yang disebabkan oleh protozoa trypanozooma evansi. Adapun gejala-gejalanya kucing akan mengalami malas bergerak karena badan terasa lemas, anemik, anoreksia, epifora. terapi penyembuhan dan pengobatan dg injeksi suramin, diminazene aceturat, isometamedium.</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</x-app-layout>
