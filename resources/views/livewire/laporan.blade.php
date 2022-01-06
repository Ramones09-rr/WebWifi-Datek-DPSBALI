<div>
    <form class="row g-3" method="POST" action="{{ route('laporan.store') }}">
        @csrf

        <div class="col-12 mt-3">
            <label for="" class="font-weight-bold">Notik</label>
            <input type="text" value="{{ Request::old('notik') }}" class="form-control" name="notik" id="notik">
        </div>

        <div class="col-sm-6 mt-3">
            <label for="" class="font-weight-bold">Assign</label>
            <input type="text" wire:model='assign' value="{{ Request::old('assign') }}" class="form-control" name="assign" id="assign">
        </div>

        <div class="col-sm-6 mt-3">
            <label for="" class="font-weight-bold">Nama</label>
            <input type="text" wire:model='nama' value="{{ Request::old('nama') }}" class="form-control" name="nama" id="nama">
        </div>

        <div class="col-md-4 mt-3">
            <label for="" class="font-weight-bold">SN AP</label>
            <input type="text" wire:model='sn_ap' value="{{ Request::old('snap') }}" class="form-control" name="snap" id="snap">
        </div>

        <div class="col-md-3 mt-3">
            <label for="" class="font-weight-bold">SN ONT</label>
            <input type="text" wire:model='sn_ont' value="{{ Request::old('snont') }}" class="form-control" name="snont" id="snont">
        </div>

        <div class="col-md-5 mt-3">
            <label for="" class="font-weight-bold">Site ID</label>
            <input type="text" wire:model='site_id' value="{{ Request::old('site') }}" class="form-control" name="site" id="site">
        </div>

        <div class="col-md-5 mt-3">
            <label for="" class="font-weight-bold">CP</label>
            <input list="cpOptions" value="{{ Request::old('cp') }}" class="form-control" name="cp" id="cp" placeholder="Pilih CP">
            <datalist id="cpOptions">
                <option value="Open By Tech">
            </datalist>
        </div>

        <div class="col-md-4 mt-3">
            <label for="" class="font-weight-bold">Status Tiket</label>
            <input list="stOptions" value="{{ Request::old('st') }}" class="form-control" name="st" id="st" placeholder="Pilih Status Tiket">
            <datalist id="stOptions">
                <option value="AKTIF">
                <option value="REAKTIF">
            </datalist>
        </div>

        <div class="col-md-3 mt-3">
            <label for="" class="font-weight-bold">Tanggal Terbit Tiket</label>
            <input type="text" value="{{ Request::old('ttt') }}" class="form-control" name="ttt" id="ttt" placeholder="dd-mm-yyyy hh:mm:ss">
        </div>

        <div class="col-12 mt-3">
            <label for="" class="font-weight-bold">Lokasi</label>
            <input type="text" value="{{ Request::old('lokasi') }}" class="form-control" name="lokasi" id="lokasi" placeholder="Ruang | Gedung | Jalan">
        </div>

        <div class="col-sm-6 mt-3">
            <label for="" class="font-weight-bold">Status</label>
            <input list="statusOptions" value="{{ Request::old('status') }}" class="form-control" name="status" id="status" placeholder="Pilih Status">
            <datalist id="statusOptions">
                <option value="Close">
            </datalist>
        </div>

        <div class="col-sm-6 mt-3 mb-2">
            <label for="" class="font-weight-bold">Keterangan</label>
            <input type="text" value="{{ Request::old('ket') }}" class="form-control" name="ket" id="ket">
        </div>

        <div class="col-sm-12 mt-4">
            <a href="{{ route('laporan.index') }}" class="btn btn-secondary">Back</a>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>

    </form>
</div>
