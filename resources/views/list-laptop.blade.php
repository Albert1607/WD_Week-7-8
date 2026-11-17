<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <table border="1" class=" bg-blue-500 alignment-center" style="border-radius: 10px;">
        <thead>
            <tr>
                <th class="text-center">Brand</th>
                <th class="text-center">Model</th>
                <th class="text-center">Processor</th>
                <th class="text-center">RAM</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laptops as $laptop)
                <tr>
                    <td class=" text-center" style="padding: 10px;">{{ $laptop->brand }}</td>
                    <td class=" text-center" style="padding: 10px;">{{ $laptop->model }}</td>
                    <td class=" text-center" style="padding: 10px;">{{ $laptop->processor }}</td>
                    <td class=" text-center" style="padding: 10px;">{{ $laptop->ram }} GB</td>
                    <td class="text-center" style="padding: 10px;">
                        <div class="flex items-center justify-center space-x-2">
                            <form method="POST" action="{{ route('delete-laptop', $laptop) }}">
                                @csrf
                                <input class="bg-red-500 text-white-500 cursor-pointer" style="padding: 10px; border-radius: 10px;" type="submit" value="hapus">
                            </form>
                            <a href="{{ route('edit-laptop', $laptop) }}" class="bg-yellow-500 text-white-500 inline-block" style="padding: 10px; border-radius: 10px;">update</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('create-laptop')}}" class="bg-green-500 text-white-500 inline-block" style="padding: 10px; border-radius: 10px;">tambah</a>
</body>
</html>