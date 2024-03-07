@extends('layouts.master')

@section('content')
    <div class="flex justify-center items-center h-screen w-full" style="background-color: #e8e8e8">
        <div class="container w-8/12 bg-white flex justify-center items-center h-5/6 rounded-s-3xl rounded-e-3xl shadow-xl">
            <div class="w-1/2 bg-img flex items-center justify-center rounded-e-3xl rounded-s-3xl h-full">
                <div class="text-white">
                    <img src="{{ asset('images/icon.png') }}" width="80px" />
                    <h1 class="mt-4 font-bold text-2xl">Selamat Datang, <br /> Di Aplikasi Si Pandu Resik</h1>
                    <h2 class="mt-2 font-medium text-lg">Sistem Informasi Pelayanan <br /> Administrasi Kependudukan
                        <br />Registrasi Ktp-El
                    </h2>
                </div>
            </div>
            <div class="w-1/2 flex justify-center items-center rounded-e-3xl h-full">
                <div class="text-center text-black w-8/12">
                    <h1 class="text-2xl font-bold">Daftar akun baru</h1>
                    <form method="POST" action="{{ route('storeRegister') }}">
                        @csrf
                        <label class="mt-5 h-12 rounded-xl input input-primary border-gray-200 flex items-center gap-2"
                            style="background-color: #f1f1f1">
                            <input type="text" class="grow" placeholder="Username" name="username" required />
                        </label>
                        <label class="mt-4 h-12 rounded-xl input input-primary border-gray-200 flex items-center gap-2"
                            style="background-color: #f1f1f1">
                            <input type="password" class="grow" placeholder="Password minimal 8" name="password"
                                minlength="8" required />
                        </label>
                        <label class="mt-4 h-12 rounded-xl input input-primary border-gray-200 flex items-center gap-2"
                            style="background-color: #f1f1f1">
                            <input type="password" class="grow" placeholder="Konfirmasi Password"
                                name="password_confirmation" minlength="8" required />
                        </label>
                        <button type="submit"
                            class="btn border-none mt-5 p-4 rounded-xl text-white w-full bg-blue-700 hover:bg-blue-800 font-bold ">Daftar</button>
                    </form>
                    <p class="mt-2 text-sm">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-700">Masuk</a>
                        Sekarang</p>
                </div>
            </div>
        </div>
    </div>
@endsection
