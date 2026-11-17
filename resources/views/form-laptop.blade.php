<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Laptop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6 flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Tambah Laptop</h1>
            <p class="text-sm text-gray-500 mt-1">Masukkan data spesifikasi laptop baru</p>
        </div>

        <form method="POST" action="{{ route('save-laptop') }}" class="space-y-4">
            @csrf
            <div>
                <label for="brand" class="block text-sm font-medium text-gray-700 mb-1">Brand</label>
                <input type="text" id="brand" name="brand" required placeholder="Contoh: Asus, Dell, Apple"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
            </div>

            <div>
                <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Model</label>
                <input type="text" id="model" name="model" required placeholder="Contoh: Zenbook 14, XPS 15"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
            </div>

            <div>
                <label for="processor" class="block text-sm font-medium text-gray-700 mb-1">Processor</label>
                <input type="text" id="processor" name="processor" required placeholder="Contoh: Intel Core i7, Apple M2"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
            </div>

            <div>
                <label for="ram" class="block text-sm font-medium text-gray-700 mb-1">RAM (GB)</label>
                <input type="number" id="ram" name="ram" required placeholder="Contoh: 16" min="1"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
            </div>

            <div class="pt-2 flex items-center justify-end space-x-3">
                <a href="{{ url('/') }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 text-sm font-medium transition duration-150">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium transition duration-150 shadow-sm cursor-pointer">
                    Simpan Laptop
                </button>
            </div>
        </form>
    </div>
</body>
</html>
