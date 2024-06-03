<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>HTML Table</h2>
    <a href="{{ url('admin/users/create') }}">create</a>
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">
            {{ $_SESSION['msg'] }}
        </div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td>
                        <img src="{{ asset($user['avatar']) }}" alt="" width="100px">
                    </td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <a href="{{ url('admin/users/') . $user['id'] . '/show' }}">Show</a>
                        <a href="{{ url('admin/users/') . $user['id'] . '/delete' }}"
                            onclick="return confirm('Chắc chắn xóa không?');">delete</a>
                        <a href="{{ url('admin/users/') . $user['id'] . '/edit' }}">Edit</a>
                    
                        </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>
