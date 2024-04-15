@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-4">Halaman User</h5>
                <a href="{{ route('user.create') }}" class="btn add-new btn-primary m-1 float-end">Tambah User</a>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Id</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Name</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Email</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">No telp</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Address</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Role</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Action</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($dataUser as $user)
                            <tr>
                                <td class="">
                                    <h6 class="fw-semibold mb-0">{{ $no++ }}</h6>
                                </td>
                                <td class="">
                                    <h6 class="fw-semibold mb-1">{{ $user->name }}</h6>
                                    <span class="fw-normal">{{ $user->division }}</span>
                                </td>
                                <td class="">
                                    <h6 class="fw-semibold mb-1">{{ $user->email }}</h6>
                                </td>
                                <td class="">
                                    <h6 class="fw-semibold mb-1">{{ $user->no_telp }}</h6>
                                </td>
                                <td class="">
                                    <h6 class="fw-semibold mb-1">{{ $user->address }}</h6>
                                </td>
                                <td class="">
                                    <h6 class="fw-semibold mb-1">{{ $user->role }}</h6>
                                </td>
                                <td class="">
                                    <div class="d-flex">
                                    <a href="{{ route('user.edit', $user->id) }} " class="btn btn-warning"
                                        style="margin-right: 5px"><i class="ti ti-edit"></i></a>
                                    <form action="/user/delete/{{ $user->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="ti ti-trash"></i></button>
                                    </form>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
