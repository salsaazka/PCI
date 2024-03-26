@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('user.update', $dataUser->id) }}" method="POST"  enctype="multipart/form-data" class="mb-3 mt-4">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Name</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    value="{{ $dataUser->name }}"
                    aria-describedby="publisher"
                    placeholder="Masukan name"
                />
                </div>
            </div>
            {{-- <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Username</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="username"
                    value="{{ $dataUser->username }}"
                    aria-describedby="username"
                    placeholder="Masukan username"
                />
                </div>
            </div> --}}
           
        </div>
        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Division</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="division"
                    value="{{ $dataUser->division }}"
                    aria-describedby=""
                    placeholder="Masukan division"
                />
                </div>
            </div>
            <div class="col-6">
                <label
                    class="form-label text-muted">Role</label>
                <select class="form-select" aria-label="Default select example" name="role" value="{{ $dataUser->role }}">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="coach">Coach</option>
                </select>
              </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Address</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="address"
                    value="{{ $dataUser->address }}"
                    aria-describedby="publisher"
                    placeholder="Masukan Address"
                />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >No Telp</label
                >
                <input
                    type="number"
                    class="form-control"
                    name="no_telp"
                    value="{{ $dataUser->no_telp }}"
                    aria-describedby="no_telp"
                    placeholder="Masukan No Telp"
                />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Email</label
                >
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    value="{{ $dataUser->email }}"
                    aria-describedby="publisher"
                    placeholder="Masukan email"
                />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Password</label
                >
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    value="{{ $dataUser->password }}"
                    aria-describedby=""
                    placeholder="Masukan Password"
                />
                </div>
            </div>
        </div>
        
        <button
        type="submit"
        class="btn text-white mb-5"
        style="background-color: #B46060"
        >
        Submit
        </button>
    </form>
    </div>
</div>
@endsection