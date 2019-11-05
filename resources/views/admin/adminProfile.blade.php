@extends('layouts.master')

@section('title_das_str')
        Profiles
    
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registered Entries</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody calss="table">
                                <thead class="text-primary">
                                    <th>S no.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                            </tbody>
                            @foreach ($users as $item)
                                
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td><a href="#" class="btn btn-warning">Edit</a></td>
                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div 
@endsection

@section('scripts')
    
@endsection