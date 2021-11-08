@extends('layouts.master')

@section('content')
    <h4 style="color:blue">This is Admin Page</h4>
    <br>
    <h6>List of users</h6>
    <div>
        <table class="table table-hover">
            <tr>
                 <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>User</th>
                <th>Editor</th>
                <th>Admin</th>
            </tr>
            
            @foreach ($users as $user)
                <form action="/add_role" methode='POST'>
                    @csrf
                    <input type="hidden" name="email" value="{{$user->email}}">
                    <tr>
                        <th>{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <input type="checkbox" onChange="this.form.submit()" name="role_user" {{$user->hasRole('User') ? 'checked' : ' ' }}>
                        </td>
                        <td>
                            <input type="checkbox" onChange="this.form.submit()" name="role_editor" {{$user->hasRole('Editor') ? 'checked' : ' ' }}>
                        </td>
                        <td>
                            <input type="checkbox" onChange="this.form.submit()" name="role_admin" {{$user->hasRole('Admin') ? 'checked' : ' ' }}>
                        </td>
                    </tr>  
                </form>
            @endforeach  
        </table>
    </div>
@stop