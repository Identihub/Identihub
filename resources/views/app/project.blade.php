@extends('layouts.project')

@section('content')

    <div class="bridges big-with-margin-top container">
        <div id="app"></div>
    </div>

@endsection


@push('scripts')
    <script>
        $(document).ready(function () {
            $('textarea').height(0).height($('textarea').prop('scrollHeight'));
            // https://stackoverflow.com/questions/39401504/javascript-react-dynamic-height-textarea-stop-at-a-max
        });
    </script>
@endpush