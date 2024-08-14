<x-layout.homelayout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="max-w-screen-xl mx-auto p-7">
        <div class="flex justify-between py-5">
            <h1 class="text-xl font-bold text-left md:text-3xl w-none md:max-w-3xl md:w-full md:text-center lg:text-right">
                Data Siswa sekolah</h1>
            <button data-modal-target="tambah-data" data-modal-toggle="tambah-data" class="bg-[#D9D9D9] max-w-44 font-semibold px-3 py-1 text-base md:text-xl rounded-xl hover:bg-[#A0A0A0]">Tambah
                Data</button>
        </div>
        <div class="grid items-center justify-center grid-cols-1 gap-6 pt-10 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-4">
            <x-data-tables :siswas="$siswas" />
        </div>
    </div>
    <x-popup-modal id="tambah-data" title="Tambah Data" :action="route('siswas.create')" method="POST" />
</x-layout.homelayout>

