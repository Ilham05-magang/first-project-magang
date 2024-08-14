<x-layout.homelayout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="max-w-screen-xl mx-auto p-7">
        <div class="flex justify-between py-5">
            <a href="/" class="px-3 py-2 rounded-xl hover:bg-[#A0A0A0] bg-[#D9D9D9] font-semibold text-xl">Kembali</a>
            <h1 class="text-xl font-bold text-left md:text-3xl w-none md:max-w-3xl">
                Data Siswa sekolah</h1>
            <button data-modal-target="tambah-data" data-modal-toggle="tambah-data" class="bg-[#D9D9D9] max-w-44 font-semibold px-3 py-1 text-base md:text-xl rounded-xl hover:bg-[#A0A0A0]">Tambah
                Data</button>
        </div>
        @if ($siswas->isNotEmpty())
            <div class="grid items-center justify-center grid-cols-1 gap-6 pt-10 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-4">
                <x-data-tables :siswas="$siswas" />
            </div>
        @else
            <div class="flex flex-col items-center justify-center w-full gap-8 p-32 text-xl font-semibold text-center md:text-4xl">
                <h2>Tidak ada data siswa yang dicari....</h2>
            </div>
        @endif
    </div>
    <x-popup-modal id="tambah-data" title="Tambah Data" :action="route('siswas.create')" method="POST" />
</x-layout.homelayout>
