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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                        
                    @endif
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
                                <td><a href="../profilesEdit/{{ $item->id }}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="../profilesDelete/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                       
                                        <button type="submit" class="btn btn-danger" >Delete</button>
                                        
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-info">
        <a href="/register" class="btn btn-primary btn-xl col-lg-12">New User</a>
    </div>

@endsection

@section('scripts')
    <style>
    .btn-xl {
    padding: 10px 20px;
    font-size: 30px;
    border-radius: 10px;
    }   
    </style>
@endsection