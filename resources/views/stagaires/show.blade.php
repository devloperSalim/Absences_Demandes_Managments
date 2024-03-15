@extends('adminlte::page')

@section('title')
    Show Stagaire | Laravel Stagaire
@endsection

@section('content_header')
    <h1>Hey Stagaire {{ $stagaire->name }}</h1>
@endsection

@section('content')
<section class="vh-100" style="background-color: #9de2ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">
                            <div class="flex-shrink-0">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                    alt="Generic placeholder image" class="img-fluid"
                                    style="width: 180px; border-radius: 10px;">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">{{ $stagaire->name }}</h5>
                                <p class="mb-2 pb-1" style="color: #2b2a2a;">Stagiaire {{ $stagaire->id }}</p>
                                <!-- Existing information -->
                                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                    style="background-color: #efefef;">
                                    <!-- ... -->
                                </div>
                                <!-- Additional information -->
                                <div style="background-color: white; padding: 15px; border-radius: 10px; margin-top: 10px;">
                                    <p class="small text-muted mb-1">Registartion Number</p>
                                    <p class="mb-0">{{ $stagaire->registration_number }}</p>

                                    <p class="small text-muted mb-1">Email</p>
                                    <p class="mb-0">{{ $stagaire->email }}</p>

                                    <p class="small text-muted mb-1">Phone</p>
                                    <p class="mb-0">{{ $stagaire->phone }}</p>

                                    <p class="small text-muted mb-1">Hire Date</p>
                                    <p class="mb-0">{{ $stagaire->hire_date }}</p>
                                </div>
                                <!-- Buttons -->
                                <div class="d-flex pt-1">

                                    <a href="{{ route('stagaires.index') }}" class="btn btn-outline-primary me-1 flex-grow-1">show</a>
                                    <a href="" class="btn btn-primary flex-grow-1">cc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
