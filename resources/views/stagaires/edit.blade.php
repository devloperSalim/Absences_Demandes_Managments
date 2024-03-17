@extends('adminlte::page')

@section('title', 'Edit Stagiaire | Laravel Stagiaire')

@section('content_header')
    <h1>Edit {{ $stagaire->name }}</h1>
@endsection

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>Update Stagiaire</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('stagaires.update', $stagaire->registration_number) }}" method="POST" class="mt-3">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="registration_number">Registration Number</label>
                            <input type="text" name="registration_number" class="form-control" placeholder="Registration Number" value="{{ old('registration_number', $stagaire->registration_number) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="name" class="form-control" placeholder="Fullname" value="{{ old('name', $stagaire->name) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $stagaire->email) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password_confirmation">Confirmation Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone', $stagaire->phone) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="hire_date">Hire Date</label>
                            <input type="date" name="hire_date" class="form-control" placeholder="Hire Date" value="{{ old('hire_date', $stagaire->hire_date) }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

