@extends('layouts.master')

@section('content')
    <div class="flex items-center justify-center" style="height: 100vh">
        <div class="bg-white/30 w-1/3 p-10 rounded-3xl border border-white text-black">
            <div class="flex justify-end w-100">
                <div class="p-2 bg-white rounded-xl hover:bg-slate-300">
                    <img src="{{ asset('images/logout.png') }}" width="20px"/>
                </div>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/icon.png') }}" width="90px" />
            </div>
            <form>
                <div class="mt-8 flex items-center p-3 rounded-xl" style="background-color: #F1F1F1">
                        <input type="number" placeholder="Nomor KK" class= focus:outline-none w-full" style="background-color: #F1F1F1" />
                </div>
                <div class="mt-4 flex items-center p-3 rounded-xl" style="background-color: #F1F1F1">
                    <input type="number" placeholder="NIK" class= focus:outline-none w-full" style="background-color: #F1F1F1" />
                </div>
                <div class="mt-4 flex items-center">
                    <label class="form-control w-full">
                        <select class="select select-bordered rounded-xl" style="background-color: #F1F1F1">
                            <option disabled selected>Permohonan</option>
                            <option>Elemen</option>
                            <option>Rusak</option>
                            <option>Hilang</option>
                            <option>Baru</option>
                        </select>
                    </label>
                </div>
                <button class="mt-8 p-4 rounded-xl text-white w-full bg-orange-500 hover:bg-orange-600 font-bold text-1xl">Daftar</button>
                <button class="mt-4 p-4 rounded-xl text-white w-full bg-blue-700 hover:bg-blue-800 font-bold text-1xl">Lihat Status Registrasi</button>
            </form>
        </div>
    </div>
@endsection