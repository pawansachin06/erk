@extends('admin.master')

@section('content')
<post-edit-component v-bind:posts='{{$post}}'></post-edit-component>
@endsection
