@extends('layouts.app')
@section('content')
    <header class="content__title">
        <h1>Account List</h1>
        <small>This page allows the user to view the list of email accounts either automatically imported or manually added.</small>
    </header>
    <div class="card">
        <div class="card-body">
        </div>
    </div>
@endsection

@section('pre-styles')
<link rel="stylesheet" href="/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
@endsection

@section('post-scripts')
<script src="/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
@endsection