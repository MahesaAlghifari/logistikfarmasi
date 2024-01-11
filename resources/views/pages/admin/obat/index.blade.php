@extends('pages.admin.index')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1 class="h2">Obat</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button"
                    class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                    <i class="bi bi-calendar"></i>
                    This week
                </button>
            </div>
        </div>

        <!-- Search bar and Add Obat button -->
        <div class="d-flex justify-content-between mb-4 pb-4 border-bottom">
            <div class="input-group" style="max-width: 400px;">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
            </div>
            <a href="/addobat">
            <button type="button" class="btn btn-primary">Add Obat</button></a>
        </div>

        <div class="table-responsive small">
            @php
                $obatData = [
                    ['nama_obat' => 'Paracetamol', 'akronim' => 'Par', 'satuan' => 'Box', 'jenis_obat' => 'Medis', 'keterangan' => 'Painkiller'],
                    ['nama_obat' => 'Aspirin', 'akronim' => 'Asp', 'satuan' => 'Bottle', 'jenis_obat' => 'Non-Medis', 'keterangan' => 'Painkiller'],
                    ['nama_obat' => 'Amoxicillin', 'akronim' => 'Amo', 'satuan' => 'Strip', 'jenis_obat' => 'Medis', 'keterangan' => 'Antibiotic'],
                    ['nama_obat' => 'Ibuprofen', 'akronim' => 'Ibu', 'satuan' => 'Bottle', 'jenis_obat' => 'Non-Medis', 'keterangan' => 'Painkiller'],
                    ['nama_obat' => 'Ciprofloxacin', 'akronim' => 'Cip', 'satuan' => 'Strip', 'jenis_obat' => 'Medis', 'keterangan' => 'Antibiotic'],
                    ['nama_obat' => 'Loratadine', 'akronim' => 'Lor', 'satuan' => 'Box', 'jenis_obat' => 'Non-Medis', 'keterangan' => 'Antihistamine'],
                    ['nama_obat' => 'Omeprazole', 'akronim' => 'Ome', 'satuan' => 'Bottle', 'jenis_obat' => 'Medis', 'keterangan' => 'Acid Reducer'],
                    ['nama_obat' => 'Diazepam', 'akronim' => 'Dia', 'satuan' => 'Box', 'jenis_obat' => 'Medis', 'keterangan' => 'Anxiolytic'],
                    ['nama_obat' => 'Codeine', 'akronim' => 'Cod', 'satuan' => 'Bottle', 'jenis_obat' => 'Non-Medis', 'keterangan' => 'Painkiller'],
                    ['nama_obat' => 'Hydrochlorothiazide', 'akronim' => 'Hyd', 'satuan' => 'Strip', 'jenis_obat' => 'Medis', 'keterangan' => 'Diuretic'],
                ];
            @endphp


            <table class="table table-striped table-sm">
                <thead>
                    <tr class="align-middle">
                        <th scope="col">No</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Akronim</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Jenis Obat</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obatData as $key => $obat)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $obat['nama_obat'] }}</td>
                            <td>{{ $obat['akronim'] }}</td>
                            <td>{{ $obat['satuan'] }}</td>
                            <td>{{ $obat['jenis_obat'] }}</td>
                            <td>{{ $obat['keterangan'] }}</td>
                            <td>
                                <!-- Ikon untuk melihat -->
                                <span class="badge bg-primary fs-5"><i class="bi bi-eye"></i></span>
                                <!-- Ikon untuk mengedit -->
                                <span class="badge bg-warning fs-5"><i class="bi bi-pencil"></i></span>
                                <!-- Ikon untuk menghapus -->
                                <span class="badge bg-danger fs-5"><i class="bi bi-trash"></i></span>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <!-- Show entries and pagination -->
            <div class="mt-5 d-flex justify-content-between">
                <div class="dataTables_length" id="example_length">
                    <label>Show
                        <select name="example_length" aria-controls="example" class="form-select form-select-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        entries
                    </label>
                </div>
                <div id="example_paginate" class="dataTables_paginate paging_simple_numbers">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example_previous">
                            <a href="#" aria-controls="example" data-dt-idx="0" tabindex="0"
                                class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active">
                            <a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item">
                            <a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                        </li>
                        <li class="paginate_button page-item next" id="example_next">
                            <a href="#" aria-controls="example" data-dt-idx="3" tabindex="0"
                                class="page-link">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
