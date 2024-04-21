@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold mb-4">Halaman Kategori</h5>
            {{-- <a href="{{ route('category.create') }}" class="btn add-new btn-primary m-1 float-end">Tambah Kategori</a> --}}
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="">
                                <h6 class="fw-semibold mb-0">No</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Title</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Desc</h6>
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
                        @foreach ($dataCategory as $category)
                            <tr>
                                <td class="">
                                    <p>{{ $no++ }}</p>
                                </td>
                                <td class="">
                                    <p>{{ $category->title }}</p>
                                    {{-- <span class="fw-normal">Web Designer</span> --}}
                                </td>
                                <td class="" style="max-width: 350px;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $category->desc }}</p>
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('category.edit', $category->id) }} " class="btn btn-warning" style="margin-right: 5px"><i class="ti ti-edit"></i></a>
                                    <form action="/category/delete/{{ $category->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="ti ti-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
