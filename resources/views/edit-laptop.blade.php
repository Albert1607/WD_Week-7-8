<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>edit laptop</h3>
    <form action="{{ route('update-laptop', $laptop) }}" method="post">
        @csrf
        <label for="brand">brand</label>
        <br>
        <input type="text" name="brand" id="brand" value="{{ $laptop->brand }}">
        <br>
        <label for="model">model</label>
         <br>
        <input type="text" name="model" id="model" value="{{ $laptop->model }}">
        <br>
        <label for="processor">processor</label>
        <br>
        <input type="text" name="processor" id="processor" value="{{ $laptop->processor }}">
        <br>
        <label for="ram">ram</label>
        <br>
        <input type="number" name="ram" id="ram" value="{{ $laptop->ram }}">
        <br>
        <input type="submit" value="update">
    </form>
</body>
</html>