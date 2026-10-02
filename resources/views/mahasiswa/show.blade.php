@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')

<div class="max-w-2xl mx-auto">

    <!-- Judul -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-brown-800">
            Detail Mahasiswa
        </h1>

        <p class="text-brown-500 mt-1">
            Informasi lengkap data mahasiswa.
        </p>
    </div>


    <!-- Detail -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-brown-100">

        <div class="space-y-5">

            <!-- NPM -->
            <div>
                <p class="text-sm text-brown-500 mb-1">
                    NPM
                </p>

                <p class="text-lg font-semibold text-brown-800">
                    {{ $mahasiswa->npm }}
                </p>
            </div>


            <!-- Nama -->
            <div>
                <p class="text-sm text-brown-500 mb-1">
                    Nama Lengkap
                </p>

                <p class="text-lg font-semibold text-brown-800">
                    {{ $mahasiswa->nama }}
                </p>
            </div>


            <!-- Jurusan -->
            <div>
                <p class="text-sm text-brown-500 mb-1">
                    Jurusan
                </p>

                <p class="text-lg font-semibold text-brown-800">
                    {{ $mahasiswa->jurusan }}
                </p>
            </div>


            <!-- Alamat -->
            <div>
                <p class="text-sm text-brown-500 mb-1">
                    Alamat
                </p>

                <p class="text-lg text-brown-700">
                    {{ $mahasiswa->alamat ?? '-' }}
                </p>
            </div>


            <!-- Nomor HP -->
            <div>
                <p class="text-sm text-brown-500 mb-1">
                    Nomor HP
                </p>

                <p class="text-lg text-brown-700">
                    {{ $mahasiswa->no_hp ?? '-' }}
                </p>
            </div>

        </div>


        <!-- Tombol -->
        <div class="flex gap-3 mt-8">

            <a href="{{ route('mahasiswa.index') }}"
               class="px-5 py-3 bg-brown-100 text-brown-700
                      rounded-lg hover:bg-brown-200 transition-colors duration-200">
                Kembali
            </a>

            <a href="{{ route('mahasiswa.edit', $mahasiswa) }}"
               class="px-5 py-3 bg-yellow-500 text-white
                      rounded-lg hover:bg-yellow-600 transition-colors duration-200">
                Edit Data
            </a>

        </div>

    </div>

</div>

@endsection
