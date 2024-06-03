<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('admin/users/') .'create' }}">Create</a>
    <table>
        <thead>
            <tr>
                <th>Trường</th>
                <th>Giá trị</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $users => $value)
                <tr>
                    <td>{{$users}}</td>
                    <td>{{$value}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>