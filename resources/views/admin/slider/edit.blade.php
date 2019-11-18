@extends('admin.master')

@section('content')
<slider-edit-component v-bind:sliders="{{$slider}}"></slider-edit-component>
@endsection
