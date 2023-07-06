@extends('layouts.dashboard')

@section('head_content')
<link href="{{url('/assets/css/quill.snow.css')}}" rel="stylesheet">
@endsection

@section('script_content')
<script src="{{url('/assets/js/quill.min.js')}}"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    function syncTextareaDiv(){
        var myTextarea = document.getElementById('myTextarea');
        if( myTextarea!=null ){
            myTextarea.value = quill.root.innerHTML;
        }
    }
    
    var myTextarea = document.getElementById('myTextarea');
    if( myTextarea!=null ){
        setInterval(syncTextareaDiv, 500);
    }

</script>
@endsection