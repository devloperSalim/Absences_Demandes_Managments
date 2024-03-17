@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title','List of stagaires | Laravel Stagaires')
List of stagaires | Laravel Stagaires
@section('content_header')
    <h1>List of Stagaire</h1>
@endsection

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>Stagaires</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FullName</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Hired</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stagaires as $key => $stagaire)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $stagaire->name }}</td>
                                <td>{{ $stagaire->email }}</td>
                                <td>{{ $stagaire->phone }}</td>
                                <td>{{ $stagaire->hire_date }}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('stagaires.show', $stagaire->registration_number) }}" class="btn btn-sm btn-primary mx-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('stagaires.edit', $stagaire->registration_number) }}" class="btn btn-sm btn-primary mx-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    {{-- Uncomment and complete the delete functionality if needed --}}
                                    <form method="POST" id="deleteForm{{ $stagaire->registration_number }}" action="{{ route('stagaires.destroy', $stagaire->registration_number) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="deleteEmp('{{ $stagaire->registration_number }}')" class="btn btn-sm btn-danger" type="button">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
$(document).ready(function() {
    $('#myTable').DataTable({
        dom: 'Bftrip',
        buttons: ['copy', 'excel', 'csv', 'pdf', 'print', 'colvis']
    });
});

function deleteEmp(registrationNumber) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm' + registrationNumber).submit();
            Swal.fire(
                'Deleted!',
                'Employee has been deleted.',
                'success'
            );
        }
    });
}

@if(session()->has('success'))
Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: "{{ session()->get('success') }}",
    showConfirmButton: false,
    timer: 2000
});
@endif
</script>
@endsection
