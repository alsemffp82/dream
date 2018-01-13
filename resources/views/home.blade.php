@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>File Upload</h1>
        <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
            <label>Select image to upload:</label>
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload" name="submit">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>
    </div>
</div>
@endsection
