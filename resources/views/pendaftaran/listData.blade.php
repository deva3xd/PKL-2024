@extends('layouts.master')

@section('content')
<div class="py-16 px-32" style="height: 100vh">
    <div class="bg-white/30 w-10 flex justify-center rounded-xl p-4 hover:bg-white/20">
        <img src="{{ asset('images/arrow.png') }}" width="10px" />
    </div>
    <p class="text-center text-white font-bold text-4xl">Status Pendaftaran</p>
    <div class="mt-10 py-5 px-11 flex align-center justify-center border border-white rounded-xl bg-white/30 text-white">
        <div class="overflow-x-auto w-full">
            <table class="table border border-white text-center">
                <!-- head -->
                <thead class="bg-black text-white font-semibold">
                    <tr>
                        <th>NO.</th>
                        <th>Nomor KK</th>
                        <th>NIK</th>
                        <th>Permohonan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-base-200">
                    <tr>
                        <th>1</th>
                        <td>1234566789</td>
                        <td>1234566789</td>
                        <td>Elemen</td>
                        <td>
                            <button class="bg-red-500 py-1 px-4 text-white rounded-sm">Ambil</button>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>1234566789</td>
                        <td>1234566789</td>
                        <td>Rusak</td>
                        <td>
                            <button class="bg-red-500 py-1 px-4 text-white rounded-sm">Ambil</button>
                        </td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>1234566789</td>
                        <td>1234566789</td>
                        <td>Baru</td>
                        <td>
                            <button class="bg-red-500 py-1 px-4 text-white rounded-sm">Ambil</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection