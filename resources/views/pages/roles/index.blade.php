@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Role Management'])
<div class="row mt-5 mx-4">
    <div class="col-12">
        <div class="card mt-5">
           
            <div class="card-body">
                @can('create-role')
                <span class="card-header text-uppercase text-primary text-strong"> Manage All Roles </span> 
                    <a href="{{ route('roles.create') }}" class="btn bg-gradient-primary btn-sm mb-0 float-end" >+&nbsp;
                    New Role</a>
                @endcan               
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Name
                            </th>
                            <th width="280px"
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                        <tr>
                            <th scope="row">{{ $role->id }}</th>
                            <td>
                                <h6 class="ms-3 my-auto">{{ $role->name }}</h6>
                            </td>
                            <td>
                                <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('roles.show', $role->id) }}" class="mx-3">
                                        <i class="fa fa-eye"></i>

                                    </a>

                                    <a href="{{ route('roles.edit', $role->id) }}" class="mx-3" data-bs-toggle="tooltip"
                                        data-bs-original-title="Edit product">
                                        <i class="fa fa-edit">i</i>
                                    </a>

                                    @can('delete-role')
                                    @if ($role->name!=Auth::user()->hasRole($role->name))
                                    <span type="submit" class="mx-3"
                                        onclick="return confirm('Do you want to delete this role?');">
                                        <i class="fa fa-trash"></i>
                                        @endif
                                        @endcan
                                </form>
                            </td>
                        </tr>
                        @empty
                        <td colspan="3">
                            <span class="text-danger">
                                <strong>No Role Found!</strong>
                            </span>
                        </td>
                        @endforelse
                    </tbody>
                </table>
                {{ $roles->links() }}
            </div>
        </div>
    </div>
</div>
@endsection