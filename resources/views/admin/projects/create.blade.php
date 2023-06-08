@extends('layouts.admin')
@section('content')
    <div class="container">


        <h1>Create Projects</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" required maxlength="150"
                    minlength="3">
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="mb-3">
                <label for="description">Body</label>
                <textarea name="description" id="description" rows="10" class="form-control"></textarea>
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
