@extends('layouts.master')

@section('content')
<div class="py-16 px-32 min-h-screen bg-img">
    <a href="{{ route('pendaftaran') }}" class="btn border-none bg-white/30 w-10 flex justify-center rounded-xl p-4 hover:bg-white/20">
        <img src="{{ asset('images/arrow.png') }}" width="10px" />
    </a>
    <h1 class="text-center text-white font-bold text-4xl">Status Pendaftaran</h1>
    <div class="mt-10 py-5 px-11 flex align-center justify-center">
        <div class="overflow-x-auto w-full">
            <table class="table text-center">
                <!-- head -->
                <thead class="text-white font-bold text-base" style="background-color: #0A2C4C">
                    <tr>
                        <th>NO.</th>
                        <th>Nomor KK</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Permohonan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-base-200 text-white font-semibold" style="background-color: #07426C">
                    @foreach ($pendaftarans as $pendaftaran)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $pendaftaran->nokk }}</td>
                            <td>{{ $pendaftaran->nik }}</td>
                            <td>{{ $pendaftaran->nama }}</td>
                            <td>{{ $pendaftaran->permohonan }}</td>
                            <td>
                                <a onclick="confirmDelete(this)" data-url="{{route('updateStatus', ['id' => $pendaftaran->id])}}" class="btn btn-sm text-white border-none {{ $pendaftaran->status=="aktif" ? "bg-green-600 hover:bg-green-700" : "" }}" role="button" {{ $pendaftaran->status=="tidak aktif" ? "disabled" : "" }}>Ambil</a>
                                <a onclick="confirmDelete(this)" data-url="{{route('deleteStatus', ['id' => $pendaftaran->id])}}" class="btn btn-sm text-white border-none bg-red-600 hover:bg-red-700 ms-1" role="button" {{ $pendaftaran->status=="aktif" ? "disabled" : "" }}>Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('addJavascript')
    <script>
        confirmDelete = function(button) {
            var url = $(button).data('url');
            swal({
                'icon' : 'warning',
                'title' : 'Apakah Kamu Yakin?',
                'text' : 'Tindakan tidak dapat di ulangi!',
                'dangermode' : true,
                'buttons' : true
            }).then(function(value) {
                if(value) {
                    window.location = url;
                }
            })
        }
    </script>
@endsection