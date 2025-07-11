@extends('layouts.master')

@section('main-body')
<div class="main px-lg-4 px-md-4">
    @include('layouts.includes.overalls.header')

    @include('layouts.includes.gadgets.body')

    @include('layouts.includes.gadgets.modal-members')

    @include('layouts.includes.gadgets.cookie-consent')
</div>
@endsection
