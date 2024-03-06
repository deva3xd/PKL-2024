@extends('layouts.master')

@section('content')
    <div class="flex h-screen">
        <div class="w-1/2 flex items-center justify-center">
            <div class="text-white">
                <img src="{{ asset('images/icon.png') }}" width="100px" />
                <h1 class="mt-4 font-bold text-4xl">Selamat Datang, <br /> Di Aplikasi Si Pandu Resik</h1>
                <h2 class="mt-2 font-medium text-2xl">Sistem Informasi Pelayanan Administrasi <br /> Kependudukan Registrasi Ktp-El</h2>
            </div>
        </div>
        <div class="w-1/2 flex justify-center items-center bg-white rounded-s-3xl">
            <div class="text-center text-black w-7/12">
                <div class="text-4xl font-bold">
                    <h1>Buat akun</h1>
                </div>
                <form method="POST" action="{{ route('storeRegister') }}">
                    @csrf
                    <label class="mt-5 h-12 rounded-xl input input-primary border-gray-200 flex items-center gap-2" style="background-color: #f1f1f1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
                        <input type="text" class="grow" placeholder="Username" name="username" required />
                    </label>
                    <label class="mt-4 h-12 rounded-xl input input-primary border-gray-200 flex items-center gap-2" style="background-color: #f1f1f1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
                        <input type="password" class="grow" placeholder="Password minimal 8" name="password" required />
                    </label>
                    <label class="mt-4 h-12 rounded-xl input input-primary border-gray-200 flex items-center gap-2" style="background-color: #f1f1f1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
                        <input type="password" class="grow" placeholder="Konfirmasi Password" name="password_confirmation" required />
                    </label>
                    <button type="submit" class="btn border-none mt-5 p-4 rounded-xl text-white w-full bg-blue-700 hover:bg-blue-800 font-bold text-1xl">REGISTER</button>
                </form>
                <p class="mt-2">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-700">Masuk</a> Sekarang</p>
            </div>
        </div>
    </div>
@endsection