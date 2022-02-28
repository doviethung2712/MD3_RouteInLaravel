<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('brand.index')}}">Back</a>
    <table>
        <tr>
            <th>STT</th>
            <td>{{ $brand->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $brand->name }}</td>
        </tr>
    </table>
</body>

</html>
