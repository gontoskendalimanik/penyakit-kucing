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
                    <p>nama : cinta</p>
                    <p>kelamin : pria</p>
                    <p>alamat : alamanda</p>
                    <p>pemilik : yaya</p>
                </div>

                <div class="font-semibold text-center py-2 border-t-2 border-gray-800">Gejala yang di alami</div>
                <div class="grid grid-cols-4 gap-4 justify-center mt-4 px-auto">
                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300  text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Dehidrasi') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Kekurusan') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm  text-gray-800">{{ __('Malas bergerak') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Anemik') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Diare') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Demam') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Pucat') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Anoreksia') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Epifora') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Melena') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Ikterus') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Kutu badan') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Lumpuh') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Pincang') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Keturunan') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Halitosis') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Muntah') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Lesi anggota') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Batuk') }}</span>
                    </div>

                    <div>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"><span class="ms-2 text-sm text-gray-800">{{ __('Radang') }}</span>
                    </div>
                </div>

                <div class=" text-sm text-left py-2  border-gray-800">Maksimal 4 checklist untuk mendeteksi penyakit
                </div>

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
                    <p>merupakan penyakit yang menyerang pada hewan kucing yang disebabkan oleh protozoa trypanozooma
                        evansi. Adapun gejala-gejalanya kucing akan mengalami malas bergerak karena badan terasa lemas,
                        anemik, anoreksia, epifora. terapi penyembuhan dan pengobatan dg injeksi suramin, diminazene
                        aceturat, isometamedium.</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
