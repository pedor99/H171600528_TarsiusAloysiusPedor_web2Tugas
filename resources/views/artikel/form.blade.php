@csrf

<div class="form-group row">
    <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

        <div class="col-md-6">
            <input id="nama" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>

                @error('judul')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
</div>

<div class="form-group row">
    <label for="isi" class="col-md-4 col-form-label text-md-right">{{ __('Isi') }}</label>

        <div class="col-md-6">
            <input id="isi" type="text" class="form-control @error('isi') is-invalid @enderror" name="isi" value="{{ old('judul') }}" required autofocus>

                @error('isi')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
</div>

<div class="form-group row">
    <label for="kategori_artikel_id" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Artikel') }}</label>

        <div class="col-md-6">
            <input id="kategori_artikel_id" type="text" class="form-control @error('kategori_artikel_id') is-invalid @enderror" name="kategori_artikel_id" value="{{ old('kategori_artikel_id') }}" required autofocus>

                @error('kategori_artikel_id')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
</div>

<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{Auth::user()->id }}" required autofocus>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
                 {{ __('Simpan Data') }}
        </button>
         <a href="{!! route('artikel.index')  !!}"class="btn btn-danger">
                 {{ __('Batal') }}</a>
        </button>
    </div>
    </div>
</div>
