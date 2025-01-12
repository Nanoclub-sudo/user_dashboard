@extends('layouts.master')

@section('main-body')
<!-- main body area -->
<div class="main px-lg-4 px-md-4">

    <!-- Body: Header -->
    @include('layouts.includes.overalls.header')

    <!-- Body: Body -->
    @include('layouts.includes.gadgets.body')

    <!-- Modal Members-->
    @include('layouts.includes.gadgets.modal-members')
</div>
@endsection
