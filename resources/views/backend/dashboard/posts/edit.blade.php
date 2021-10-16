@extends('backend.dashboard.layouts.main')

@section('container_backend')

@push('custom-css')
<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>
@endpush
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="mb-5" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" required autofocus>
            <!-- Error Not Required -->
            @error('title')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" readonly required>
            <!-- Error Not Required -->
            @error('slug')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $item)
                @if (old('category_id', $post->category_id) == $item->id)
                <option value="{{ $item->id }}" selected>{{ $item->name }} </option>
                @else
                <option value="{{ $item->id }}">{{ $item->name }} </option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <!-- menampilkan gambar lama -->
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            @if ($post->image)
            <img src="{{ asset('storage/'. $post->image) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-3">
            @endif
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            <!-- Error Not Required -->
            @error('image')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
        </div>

        <div class=" mb-3">
            <label for="body" class="form-label">Body</label>
            <!-- Error Not Required -->
            @error('body')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

@push('vendor-js')
<script type="text/javascript" src="{{ asset('backend/js/trix.js') }}"></script>
@endpush
<script>
    // Ketika title ditulis maka slug akan otomatais terisi
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    // Menghapus file attac di texteditor
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
