@extends('layouts.master')

@section('title')
    Danh sách User
@endsection

@section('content')
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
    <table class="table table-striped">
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
@endsection
