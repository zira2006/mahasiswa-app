<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brown: {
                            50: '#FAF6F0',
                            100: '#F5EDE4',
                            200: '#E8D5C4',
                            300: '#D4B896',
                            400: '#C4A882',
                            500: '#A0785A',
                            600: '#8B6F47',
                            700: '#6B4F3A',
                            800: '#5C4033',
                            900: '#3D2B1F',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-brown-50 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-brown-100">

            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-brown-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-brown-800">Data Mahasiswa</h1>
                <p class="text-brown-500 mt-1">Masuk sebagai administrator</p>
            </div>

            @if(session('error'))
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                {{ session('error') }}
            </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-brown-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full border border-brown-200 rounded-lg px-4 py-3 focus:outline-none bg-brown-50 focus:ring-2 focus:ring-brown-500 focus:border-brown-500 transition-all duration-200"
                           placeholder="admin@example.com">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-brown-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full border border-brown-200 rounded-lg px-4 py-3 focus:outline-none bg-brown-50 focus:ring-2 focus:ring-brown-500 focus:border-brown-500 transition-all duration-200"
                           placeholder="Masukkan password">
                </div>

                <button type="submit"
                        class="w-full bg-brown-600 text-white py-3 rounded-lg hover:bg-brown-700 transition-all duration-200 shadow-md hover:shadow-lg font-semibold">
                    Masuk
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-brown-100 text-center">
                <p class="text-brown-400 text-sm">
                    Sistem Informasi Mahasiswa v1.0
                </p>
            </div>
        </div>
    </div>

</body>
</html>
