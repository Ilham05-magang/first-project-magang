<x-layout.homelayout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class=" max-w-screen-xl p-7 mx-auto">
        <div class="flex justify-between py-5">
            <h1 class="font-bold md:text-3xl w-none md:max-w-3xl md:w-full md:text-center text-left text-xl lg:text-right">
                Data Siswa sekolah.....</h1>
            <button data-modal-target="tambah-data" data-modal-toggle="tambah-data" class="bg-[#D9D9D9] max-w-44 font-semibold px-3 py-1 text-base md:text-xl rounded-xl hover:bg-[#A0A0A0]">Tambah
                Data</button>
        </div>
        @if ($siswas->isNotEmpty())
            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 lg:grid-cols-4 gap-6 pt-10 justify-center items-center">
                <x-data-tables :siswas="$siswas" />
            </div>
        @else
            <div class="flex flex-col gap-8 justify-center text-center text-xl md:text-4xl w-full items-center p-32 font-semibold">
                <h2>Tidak ada data siswa yang dicari....</h2>
                <a href="/" class="px-3 py-2 rounded-xl hover:bg-[#A0A0A0] bg-[#D9D9D9] font-semibold text-xl">Kembali</a>
            </div>
        @endif
    </div>
    <x-popup-modal id="tambah-data" title="Tambah Data" :action="route('siswas.create')" method="POST" />
</x-layout.homelayout>

