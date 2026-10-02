@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')

<div class="max-w-2xl mx-auto">

    <!-- Judul -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-brown-800">
            Tambah Mahasiswa
        </h1>

        <p class="text-brown-500 mt-1">
            Tambahkan data mahasiswa baru.
        </p>
    </div>


    <!-- Form -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-brown-100">

        <form action="{{ route('mahasiswa.store') }}" method="POST">

            @csrf

            <!-- NPM -->
            <div class="mb-5">

                <label for="npm"
                       class="block text-sm font-medium text-brown-700 mb-2">
                    NPM
                </label>

                <input type="text"
                       id="npm"
                       name="npm"
                       value="{{ old('npm') }}"
                       placeholder="Masukkan NPM"
                       class="w-full border border-brown-200 rounded-lg
                              px-4 py-3 focus:outline-none bg-brown-50
                              focus:ring-2 focus:ring-brown-500 focus:border-brown-500
                              transition-all duration-200">

                @error('npm')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Nama -->
            <div class="mb-5">

                <label for="nama"
                       class="block text-sm font-medium text-brown-700 mb-2">
                    Nama Lengkap
                </label>

                <input type="text"
                       id="nama"
                       name="nama"
                       value="{{ old('nama') }}"
                       placeholder="Masukkan nama lengkap"
                       class="w-full border border-brown-200 rounded-lg
                              px-4 py-3 focus:outline-none bg-brown-50
                              focus:ring-2 focus:ring-brown-500 focus:border-brown-500
                              transition-all duration-200">

                @error('nama')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Jurusan -->
            <div class="mb-5">

                <label for="jurusan"
                       class="block text-sm font-medium text-brown-700 mb-2">
                    Jurusan
                </label>

                <select id="jurusan"
                        name="jurusan"
                        class="w-full border border-brown-200 rounded-lg
                               px-4 py-3 focus:outline-none bg-brown-50
                               focus:ring-2 focus:ring-brown-500 focus:border-brown-500
                               transition-all duration-200">

                    <option value="">
                        -- Pilih Jurusan --
                    </option>

                    <option value="Teknik Informatika S-1"
                        {{ old('jurusan') == 'Teknik Informatika S-1' ? 'selected' : '' }}>
                        Teknik Informatika S-1
                    </option>

                    <option value="Teknik Informatika D3"
                        {{ old('jurusan') == 'Teknik Informatika D3' ? 'selected' : '' }}>
                        Teknik Informatika D3
                    </option>

                </select>

                @error('jurusan')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Alamat -->
            <div class="mb-5">

                <label for="alamat"
                       class="block text-sm font-medium text-brown-700 mb-2">
                    Alamat
                </label>

                <textarea id="alamat"
                          name="alamat"
                          rows="3"
                          placeholder="Masukkan alamat"
                          class="w-full border border-brown-200 rounded-lg
                                 px-4 py-3 focus:outline-none bg-brown-50
                                 focus:ring-2 focus:ring-brown-500 focus:border-brown-500
                                 transition-all duration-200">{{ old('alamat') }}</textarea>

                @error('alamat')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Nomor HP -->
            <div class="mb-6">

                <label for="no_hp"
                       class="block text-sm font-medium text-brown-700 mb-2">
                    Nomor HP
                </label>

                <input type="text"
                       id="no_hp"
                       name="no_hp"
                       value="{{ old('no_hp') }}"
                       placeholder="Contoh: 081234567890"
                       class="w-full border border-brown-200 rounded-lg
                              px-4 py-3 focus:outline-none bg-brown-50
                              focus:ring-2 focus:ring-brown-500 focus:border-brown-500
                              transition-all duration-200">

                @error('no_hp')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <!-- Tombol -->
            <div class="flex gap-3">

                <a href="{{ route('mahasiswa.index') }}"
                   class="px-5 py-3 bg-brown-100 text-brown-700
                          rounded-lg hover:bg-brown-200 transition-colors duration-200">
                    Kembali
                </a>

                <button type="submit"
                        class="px-5 py-3 bg-brown-600 text-white
                               rounded-lg hover:bg-brown-700 transition-all duration-200
                               shadow-md hover:shadow-lg">
                    Simpan Data
                </button>

            </div>

        </form>

    </div>

</div>

@endsection
