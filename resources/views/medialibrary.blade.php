@extends('layouts.app')

@section('head_resources')

    @parent
    <link href="{{ asset('vendor/dropzone/dropzone.min.css') }}" rel="stylesheet">

@endsection

@section('content')
        <div class="container-fluid">
            @include('modals.modal_upload')
            <div class="row">
                <div class="col-md-10 col-xl-12">
                    <div class="col-md-12 mb-4">
                        <button type="button" class="btn btn-primary btn-ico" data-toggle="modal" data-target="#uploaderModal">
                            <i class="fa fa-files-o"></i> {{ __('File Upload') }}</button>
                    </div>
                    <div class="container">
                        <div class="row">
                            @foreach ($media_obj as $media)
                                <div class="col-sm-4 col-md-6 col-lg-8 col-xl-3">
                                    <img src="{!! env('APP_URL') . '/' . $media->url !!}" style="width:100%; height:auto">
                                    <div>name: {{ $media->name }}</div>
                                    <div>mime: {{ $media->mime}}</div>
                                    <div>size: {{ $media->humanFileSize() }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footer_resources')
    @parent
    <!-- Scripts -->
    <script src="{{ asset('vendor/dropzone/dropzone.min.js') }}" defer></script>
    <script src="{{ asset('js/file_upload.js') }}" defer></script>

    <script>
        var home_url = "{{ env('APP_URL') }}";
        var deleteAction = '{{ route('file-delete') }}';
        var generalTS = document.getElementById('dataTS').value;
        var generalDATE = document.getElementById('dataDATE').value;
        var token = '{!! csrf_token() !!}';
    </script>

@endsection
