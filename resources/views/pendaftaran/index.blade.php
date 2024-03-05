@extends('layouts.master')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white/30 w-1/3 p-10 rounded-3xl border border-white text-black">
            <div class="flex justify-end w-100">
                <a href="{{ route('logout') }}" class="btn border-none p-2 bg-white rounded-xl hover:bg-slate-300">
                    <img src="{{ asset('images/logout.png') }}" width="20px"/>
                </a>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/icon.png') }}" width="90px" />
            </div>
            <form method="POST" action="{{ route('storePendaftaran') }}">
                @csrf
                <label class="mt-8 h-12 rounded-xl input input-bordered flex items-center gap-2" style="background-color: #f1f1f1">
                    <input type="text" class="grow" placeholder="Nomor KK" name="nokk" min="16" required />
                </label>
                <label class="mt-3 h-12 rounded-xl input input-bordered flex items-center gap-2" style="background-color: #f1f1f1">
                    <input type="text" class="grow" placeholder="NIK" name="nik" min="16" required />
                </label>
                <label class="mt-3 h-12 rounded-xl input input-bordered flex items-center gap-2" style="background-color: #f1f1f1">
                    <input type="text" class="grow" placeholder="Nama" name="nama" required />
                </label>
                <div class="mt-3 flex items-center">
                    <label class="form-control w-full">
                        <select class="select select-bordered rounded-xl" style="background-color: #F1F1F1" name="permohonan" required>
                            <option value="" hidden disabled selected>Permohonan</option>
                            <option value="Elemen">Elemen</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Hilang">Hilang</option>
                            <option value="Baru">Baru</option>
                        </select>
                    </label>
                </div>
                
                <input type="hidden" name="status" value="aktif" />
                
                <button type="submit" class="btn border-none mt-8 p-4 rounded-xl text-white w-full bg-orange-500 hover:bg-orange-600 font-bold text-1xl">Daftar</button>
            </form>
            <a href="{{ route('status') }}" class="btn border-none mt-4 p-4 rounded-xl text-white w-full bg-blue-700 hover:bg-blue-800 font-bold text-1xl">Lihat Status Pendaftaran</a>
        </div>
    </div>
@endsection