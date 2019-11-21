@extends('admin.master')

@section('content')
<websitedynamics-edit-component v-bind:websites="{{$website}}"></websitedynamics-edit-component>
@endsection
