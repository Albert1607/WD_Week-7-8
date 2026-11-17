<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laptop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <!-- Header Card -->
            <div class="p-6 border-b border-gray-200 flex justify-between items-center bg-white">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Daftar Laptop</h1>
                    <p class="text-sm text-gray-500 mt-1">Kelola data spesifikasi laptop</p>
                </div>
                <a href="{{ route('create-laptop') }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-lg transition duration-150 inline-flex items-center shadow-sm text-sm">
                    + Tambah Laptop
                </a>
            </div>

            <!-- Tabel Data -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-600 uppercase text-xs tracking-wider border-b border-gray-200">
                            <th class="py-3 px-6">Brand</th>
                            <th class="py-3 px-6">Model</th>
                            <th class="py-3 px-6">Processor</th>
                            <th class="py-3 px-6">RAM</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                        @forelse($laptops as $laptop)
                            <tr class="hover:bg-gray-50 transition duration-150">
                                <td class="py-4 px-6 font-medium text-gray-900">{{ $laptop->brand }}</td>
                                <td class="py-4 px-6">{{ $laptop->model }}</td>
                                <td class="py-4 px-6">{{ $laptop->processor }}</td>
                                <td class="py-4 px-6">{{ $laptop->ram }} GB</td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center justify-center space-x-2">
                                        <a href="{{ route('edit-laptop', $laptop) }}" 
                                           class="bg-amber-500 hover:bg-amber-600 text-white text-xs font-medium px-3 py-1.5 rounded-md transition duration-150">
                                            Edit
                                        </a>
                                        <form method="POST" action="{{ route('delete-laptop', $laptop) }}" onsubmit="return confirm('Yakin ingin menghapus laptop ini?')">
                                            @csrf
                                            <button type="submit" 
                                                    class="bg-red-500 hover:bg-red-600 text-white text-xs font-medium px-3 py-1.5 rounded-md transition duration-150 cursor-pointer">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-gray-400">
                                    Belum ada data laptop. Silakan tambah data baru.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
