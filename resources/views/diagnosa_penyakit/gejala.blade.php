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
                    <div class="font-semibold text-center py-2 border-gray-800">Gejala yang di alami</div>
                    <div class="grid grid-cols-4 gap-4 justify-center mt-4 px-auto">
                        <div>
                            <input id="G1" type="checkbox"
                                class="rounded border-gray-300  text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Dehidrasi') }}</span>
                        </div>

                        <div>
                            <input id="G2" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Kekurusan') }}</span>
                        </div>

                        <div>
                            <input id="G3" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span
                                class="ms-2 text-sm  text-gray-800">{{ __('Malas bergerak') }}</span>
                        </div>

                        <div>
                            <input id="G4" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Anemik') }}</span>
                        </div>

                        <div>
                            <input id="G5" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Diare') }}</span>
                        </div>

                        <div>
                            <input id="G6" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Demam') }}</span>
                        </div>

                        <div>
                            <input id="G7" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Pucat') }}</span>
                        </div>

                        <div>
                            <input id="G8" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Anoreksia') }}</span>
                        </div>

                        <div>
                            <input id="G9" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Epifora') }}</span>
                        </div>

                        <div>
                            <input id="G10" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Melena') }}</span>
                        </div>

                        <div>
                            <input id="G11" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Ikterus') }}</span>
                        </div>

                        <div>
                            <input id="G12" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span
                                class="ms-2 text-sm text-gray-800">{{ __('Kutu di badan') }}</span>
                        </div>

                        <div>
                            <input id="G13" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Kelumpuhan') }}</span>
                        </div>

                        <div>
                            <input id="G14" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Pincang') }}</span>
                        </div>

                        <div>
                            <input id="G15" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Keturunan') }}</span>
                        </div>

                        <div>
                            <input id="G16" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Halitosis') }}</span>
                        </div>

                        <div>
                            <input id="G17" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Muntah') }}</span>
                        </div>

                        <div>
                            <input id="G18" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Lesi anggota') }}</span>
                        </div>

                        <div>
                            <input id="G19" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span class="ms-2 text-sm text-gray-800">{{ __('Batuk') }}</span>
                        </div>

                        <div>
                            <input id="G20" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name=""><span
                                class="ms-2 text-sm text-gray-800">{{ __('Radang kulit') }}</span>
                        </div>
                    </div>

                    <div class=" text-sm text-left py-2  border-gray-800">* Maksimal 4 checklist untuk mendeteksi
                        penyakit
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
