<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil analisa penyakit kucing') }}
        </h2>
    </x-slot>
    <div class="mb-4">
        <h2 class="font-semibold">hasil analisa terakhir :</h2>
        <p>nama latin : tripanosomiasis</p>
        <p>gejala :</p>
        <ul class="list-decimal list-inside">
            <li>malas bergerak</li>
            <li>anemik</li>
            <li>anoreksia</li>
            <li>epifora</li>
        </ul>
    </div>
    <div>
        <h2 class="font-semibold">definisi</h2>
        <p>merupakan penyakit yang menyerang pada hewan kucing yang disebabkan oleh protozoa
            trypanozooma
            evansi. Adapun gejala-gejalanya kucing akan mengalami malas bergerak karena badan terasa
            lemas,
            anemik, anoreksia, epifora. terapi penyembuhan dan pengobatan dg injeksi suramin, diminazene
            aceturat, isometamedium.</p>
    </div>

</x-app-layout>
