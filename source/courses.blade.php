@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Courses {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
<h1>Cursos</h1>

<p class="mb-8">
    Em breve.
</p>

@stop
