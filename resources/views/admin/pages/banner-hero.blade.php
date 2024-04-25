@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-4">Banner Hero Page</h5>
                {{-- <a href="{{ route('banner.create') }}" class="btn add-new btn-primary m-1 float-end">Add</a> --}}
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
                                <h6 class="fw-semibold mb-0">Image</h6>
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
                            <tr>
                                <td class="">
                                    <p>{{ $no }}</p>
                                </td>
                                <td class="">
                                    <p>{{ $data->title }}</p>
                                    {{-- <span class="fw-normal">Web Designer</span> --}}
                                </td>
                                <td class="" style="max-width: 400px;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $data->description }}</p>
                                </td>
                                <td class="">
                                    <button type="button" class="border-0 bg-white">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/data/' . $data->image) }}"
                                                class="image-table" alt="">
                                            <div class="image-more">View</div>
                                        </div>
                                    </button>
                                </td>
                                <td class="">
                                    <div class="d-flex">
                                    <a href="{{ route('banner-hero.edit', $data->id) }} " class="btn btn-warning" style="margin-right: 5px"><i class="ti ti-edit"></i></a>
                                    {{-- <form action="/banner/delete/{{ $banner->id }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="ti ti-trash"></i></button>
                                    </form> --}}
                                </div>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
