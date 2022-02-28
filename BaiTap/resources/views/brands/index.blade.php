<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>brands</title>
</head>

<body>
    <a href="{{ route('brand.create')}}">Create</a>
    <table border="10">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $key => $brand)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $brand->name }}</td>
                    <td><a href="{{ route('brand.detail', $brand->id)}}">Detail</a></td>
                    <td><a href="{{ route('brand.eidt', $brand->id)}}">Update</a></td>
                    <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{ route('brand.delete', $brand->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
