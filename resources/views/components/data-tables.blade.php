@props(['siswas'])
@foreach ($siswas as $siswa)
<div class="bg-[#D9D9D9] p-6 rounded-lg relative overflow-x-auto w-full h-70 h-full">
    <table class="text-sm text-left rtl:text-right text-black w-full">
        <tbody class="h-40">
            <tr>
                <th scope="row" class="pr-5">Nama</th>
                <td class="pr-3">:</td>
                <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
                <th scope="row" class="pr-5">Ttl</th>
                <td class="pr-3">:</td>
                <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <th scope="row" class="pr-5">Sekolah</th>
                <td class="pr-3">:</td>
                <td>{{ $siswa->sekolah }}</td>
            </tr>
            <tr>
                <th scope="row" class="pr-5">Keterangan</th>
                <td class="pr-3">:</td>
                <td>{{ $siswa->keterangan }}</td>
            </tr>
        </tbody>
    </table>
    <div class="flex gap-3 pt-8">
        <button data-modal-target="edit-data{{ $siswa->id }}" data-modal-toggle="edit-data{{ $siswa->id }}" class="text-center w-full text-white bg-[#747474] py-1 rounded-xl hover:bg-[#969696]">Edit</button>
        <button data-modal-target="delete-data{{ $siswa->id }}" data-modal-toggle="delete-data{{ $siswa->id }}" class="text-center w-full text-white bg-[#747474] py-1 rounded-xl hover:bg-[#969696]">Delete</button>
    </div>
</div>

<x-popup-modal id="edit-data{{ $siswa->id }}" title="Edit Data" siswa='{{ $siswa }}' :action="route('siswas.update', $siswa->id)" method="PUT" />
<x-popup-modal id="delete-data{{ $siswa->id }}" title="Delete Data" siswa='{{ $siswa }}' :action="route('siswas.delete', $siswa->id)" method="DELETE" />
@endforeach
