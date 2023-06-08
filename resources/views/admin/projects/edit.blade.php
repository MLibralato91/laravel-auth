@extends('layouts.admin')
@section('content')
    <div class="container">


        <h1>Modifica il progetto</h1>

        <form action="{{ route('admin.projects.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" required maxlength="150" minlength="3"
                    value="{{ old('title', $projects->title) }}">
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image"
                    value="{{ old('image', $projects->image) }}">
            </div>
            <div class="mb-3">
                <label for="description">Body</label>
                <textarea name="description" id="description" rows="10" class="form-control">{{ old('image', $projects->description) }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Crea</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </div>
@endsection
