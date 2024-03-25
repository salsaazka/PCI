@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-4">About Page</h5>
                <a href="{{ route('about.create') }}" class="btn add-new btn-primary m-1 float-end">Edit</a>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                No
                            </th>
                            <th class="border-bottom-0">
                                Logo
                            </th>
                            <th class="border-bottom-0">
                                Alamat
                            </th>
                            <th class="border-bottom-0">
                                No telp
                            </th>
                            <th class="border-bottom-0">
                                Email
                            </th>
                            <th class="border-bottom-0">
                                Desc
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($dataAbout as $about)
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{ $no++ }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <img src="{{ asset('assets/images/data/' . $about->logo) }}" alt="img"
                                        width="100" height="80">
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $about->address }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $about->no_telp }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $about->email }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $about->desc }}</h6>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
