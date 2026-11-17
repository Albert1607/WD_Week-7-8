<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <form method="POST" action="{{ route('save-laptop') }}">
        @csrf
        <div class="flex flex-col items-center">
            <div>input brand</div>
            <input type="text" name="brand" class="border-black border-2 text-black">
            <div>input model</div>
            <input type="text" name="model" class="border-black border-2 text-black">
            <div>input Processor</div>
            <input type="text" name="processor" class="border-black border-2 text-black">
            <div>input RAM</div>
            <input type="number" name="ram" class="border-black border-2 text-black">
            <div class="margin-top-10px"><input class="text-center bg-blue-500" type="submit" value="Save Laptop"></div>
        </div>
    </form>
</body>
</html>