@extends('layout')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>Danh sách thành viên</h3>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createUserModal">
            Thêm mới user
        </button>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Họ và Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button type="button" class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editUserModal"
                            data-user-id="{{ $user->id }}"
                            data-user-name="{{ $user->name }}"
                            data-user-email="{{ $user->email }}">
                            Sửa
                        </button>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Include Modals --}}
    @include('users.create')
    @include('users.edit')
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var editModal = document.getElementById('editUserModal');
        var nameInput = editModal.querySelector('#name');
        var emailInput = editModal.querySelector('#email');
        var form = editModal.querySelector('form');

        document.querySelectorAll('button[data-bs-target="#editUserModal"]').forEach(function(button) {
            button.addEventListener('click', function () {
                var userId = this.getAttribute('data-user-id');
                var userName = this.getAttribute('data-user-name');
                var userEmail = this.getAttribute('data-user-email');

                nameInput.value = userName;
                emailInput.value = userEmail;
                form.action = '/users/' + userId;
            });
        });
    })
</script>
