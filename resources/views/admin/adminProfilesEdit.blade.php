@extends('layouts.master')

@section('title_das_str')
        Profiles | Update
    
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Entry</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <form action="../profilesUpdate/{{ $users->id }}" method="post">
                            @csrf
                            @method('PUT')
                            {{-- {{method_field()}} --}}
                        <table class="table">
                            <tbody calss="table">
                                <thead class="text-primary">                                    
                                    <th>Name</th>
                                    <th>Email</th>                                                                     
                                </thead>
                            </tbody>
                                                           
                            <tr>
                                <td>
                                    <input type="text" name='username' value = "{{ $users->name }}" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name='email' value = "{{ $users->email }}" class="form-control">
                                </td>   
                            </tr>
                           
                            
                        </table>
                            <input type="submit" class="btn btn-success ml-2" value='Update'>
                            <a href="{{route("profiles")}}" class="btn btn-danger ml-2">Cancel</a>
                        </form>
                    </div>
                </div>
@endsection

@section('scripts')
    
@endsection