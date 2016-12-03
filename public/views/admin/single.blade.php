@extends('admin.layout.admin')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <section class="content-header">
        <h1>
            Admin template
        </h1>
        <ol class="breadcrumb">
            <li><a href="/">Administration</a></li>
            <li class="active"><a href="#">Article n° {{$datas->id}}</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

            <h1>{{ $datas->titre }}</h1>
            <p>{{ $datas->contenu }}</p>

    </section>
@endsection
