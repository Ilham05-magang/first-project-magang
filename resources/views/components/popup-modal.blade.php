@props(['title', 'id', 'action' => null, 'method' => 'POST', 'siswa' => null])

@php
    //dekode menjadi array PHP
    if (is_string($siswa)) {
        $jsonStringCleaned = str_replace('&quot;', '"', $siswa);
        $data = json_decode($jsonStringCleaned, true);
    } else {
        $data = $siswa;
    }
@endphp

@if ($title == 'Delete Data')
<div id="{{ $id }}" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full p-4">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="p-4 text-center md:p-5">
                <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Kamu Yakin Mau Hapus Data ini?
                </h3>
                <form method="POST" action="{{ $action }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Hapus
                    </button>
                    <button data-modal-toggle="{{ $id }}" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Batal
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@else
<div id="{{ $id }}" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full p-4">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    {{ $title }}
                </h3>
            </div>
            <form class="p-4 md:p-5" action="{{ $action }}" method="POST">
                @csrf
                @if ($method == 'PUT')
                    @method('PUT')
                @endif
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="col-span-2">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required placeholder="{{ $data['nama'] ?? 'Nama Kamu..' }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tempat_lahir"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required placeholder="{{ $data['tempat_lahir'] ?? 'Tempat Lahir...' }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tanggal_lahir"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required placeholder="{{ $data['tanggal_lahir'] ?? '' }}">
                    </div>
                    <div class="col-span-2">
                        <label for="sekolah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekolah</label>
                        <input type="text" name="sekolah" id="sekolah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required placeholder="{{ $data['sekolah'] ?? 'Sekolah kamu' }}">
                    </div>
                    <div class="col-span-2">
                        <label for="keterangan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea id="keterangan" name="keterangan" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $data['keterangan'] ?? 'Keterangan....' }}"></textarea>
                    </div>
                </div>

                <div class="flex w-full gap-10">
                    <button type="button" data-modal-toggle="{{ $id }}"
                        class="text-center w-full text-white bg-[#747474] py-1 rounded-xl hover:bg-[#969696]">
                        Batal
                    </button>
                    <button type="submit"
                        class="text-center w-full text-white bg-[#747474] py-1 rounded-xl hover:bg-[#969696]">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
