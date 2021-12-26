@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($media as $medias)
        <div class="col-sm-4 col-md-6 col-lg-5 col-xl-4 gap-2">
            <img
                src="{!! env('APP_URL') . '/' . $medias->url !!}"
                style="max-width: 100%; max-height: auto"
            />
            <div class="justify-content-left">nama: {{ $medias->name }}</div>
            <div class="justify-content-left">mime: {{ $medias->mime }}</div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('footer')
<div class="d-flex justify-content-center">
    {{$media->links()}}
</div>
@endsection
