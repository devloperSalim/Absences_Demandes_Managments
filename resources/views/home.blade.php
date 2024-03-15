
@extends('adminlte::page')

@section('title')
Home page | laravel stagaire App
@endsection

@section('content_header')
Dashboard
@endsection


@section('content')


<div class="container">
    <div class="col-md-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ \App\Models\Stagaire::count() }}</h3>
                <h2>Stagaire</h2>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
                <a href="{{ url('admin/stagaires') }}" class="small-box-footer">
                    More Info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
