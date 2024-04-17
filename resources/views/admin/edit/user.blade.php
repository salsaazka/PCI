@extends('admin.template.index')

@section('content-admin')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.update', $dataUser->id) }}" method="POST" enctype="multipart/form-data"
                class="mb-3 mt-4">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $dataUser->name }}"
                                aria-describedby="publisher" placeholder="Masukan name" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $dataUser->email }}"
                                aria-describedby="publisher" placeholder="Masukan email" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Division</label>
                            <select class="form-select" aria-label="Default select example" name="division">
                                @if ($dataUser->division == 'general-trading')
                                    <option selected value="general-trading">General Trading</option>
                                    <option value="hr">Hr</option>
                                @else
                                    <option value="general-trading">General Trading</option>
                                    <option selected value="hr">Hr</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label text-muted">Role</label>
                        <select class="form-select" aria-label="Default select example" name="role">
                            @if ($dataUser->role == 'admin')
                                <option selected value="admin">Admin</option>
                                <option value="user">User</option>
                                <option value="coach">Coach</option>
                            @elseif ($dataUser->role == 'user')
                                <option value="admin">Admin</option>
                                <option selected value="user">User</option>
                                <option value="coach">Coach</option>
                            @else
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                                <option selected value="coach">Coach</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <textarea placeholder="Masukan address" name="address" id="" cols="5" rows="5"
                                class="form-control">{{ $dataUser->address }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">No Telp</label>
                            <input type="number" class="form-control" name="no_telp" value="{{ $dataUser->no_telp }}"
                                aria-describedby="no_telp" placeholder="Masukan No Telp" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $dataUser->email }}"
                                aria-describedby="publisher" placeholder="Masukan email" />
                        </div>
                    </div>
                    <div class="col-6 d-none">
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ $dataUser->password }}"
                                aria-describedby="" placeholder="Masukan Password" />
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end align-items-center gap-2">
                    <a href="{{ route('user.index') }}" class="btn btn-danger text-white mb-5">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary text-white mb-5">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
