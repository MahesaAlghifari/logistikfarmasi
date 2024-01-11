@extends('pages.admin.index')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1 class="h2">Obat</h1>
        </div>

        <!-- Add Obat Modal -->
        <form class="col-lg-4">
            
            <div class="mb-3">
                <label for="namaObat" class="form-label">Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control" id="namaObat" placeholder="input nama obat">
            </div>
            <div class="mb-3">
                <label for="akronim" class="form-label">Akronim</label>
                <input type="text" name="akronim" class="form-control" id="akronim" placeholder="input akronim">
            </div>
            <div class="mb-3">
                <label for="satuan" class="form-label">Satuan</label>
                <input type="text" name="satuan" class="form-control" id="satuan" placeholder="input satuan (box)">
            </div>
            <div class="mb-3">
                <label for="jenisObat" class="form-label">Jenis Obat</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_obat" id="medis" value="Medis">
                    <label class="form-check-label" for="medis">
                        Medis
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_obat" id="nonMedis" value="Non-Medis">
                    <label class="form-check-label" for="nonMedis">
                        Non-Medis
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="input keterangan"></textarea>
            </div>

            <a href="/obat">
                <button type="submit" class="btn btn-secondary">Cancel</button>

            </a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </main>
@endsection
