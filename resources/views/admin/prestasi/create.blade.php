@extends('admin.template')
@section('container')
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Postingan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/admin/prestasi" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Judul Postingan</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                            placeholder="Input Judul" name="judul" value="{{ old('judul') }}" required>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            placeholder="Slug" name="slug" value="{{ old('slug') }}" readonly="readonly">
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">Isi Postingan</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" id="editor" rows="3" name="isi"
                            value="" required>{{ old('isi') }}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="exampleInputPassword1">Isi Postingan</label>
                        {{-- <input id="x" type="hidden" name="isi"> --}}
                        <textarea class="form-control @error('isi') is-invalid @enderror" id="editor" rows="3" name="isi"
                            value="" required>{{ old('isi') }}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" class="form-control @error('category_id') is-invalid @enderror" id=""
                            placeholder="Input Kategori" value="{{ old('category_id') }}" name="category_id" required>
                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id=""
                            placeholder="Input nama" value="{{ old('nama') }}" name="nama" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('foto') is-invalid @enderror"
                                    id="exampleInputFile" name="foto">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            @error('foto')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const title = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admin/post/check_slug?judul=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>

@endsection
