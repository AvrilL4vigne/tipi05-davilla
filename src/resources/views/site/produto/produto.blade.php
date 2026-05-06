@extends('layout.site')

@section('content')

@include('site.produto.page-title')
@include('site.produto.slidebar-produto')

@endsection

@push('plugins')
<script src="{{ asset('davilla/js/sticky_sidebar.min.js') }}"></script>
@endpush