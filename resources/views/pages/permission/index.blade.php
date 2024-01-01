@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'permission'])
<div class="container-fluid py-4 mt-4">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-light" role="alert">
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto mb-1">
                        <div class="btn btn-sm btn btn-sm mb-0">
                            <h3>All Permission Lists</h3>
                        </div>

                        <div style="float:right" class="mt-3">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#AddPermisionModal"
                                class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Add New Permission</a>

                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0">All Permissions</h5>
                        </div>
                       
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Description
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Guard Name
                                        </th>
                                        <th width="280px"
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $permission)
                                    <tr>
                                    <td>
                                            <h6 class="ms-3 my-auto">{{ $permission->id }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="ms-3 my-auto">{{ $permission->name }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="ms-3 my-auto">{{ $permission->description }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="ms-3 my-auto">{{ $permission->guard_name }}</h6>
                                        </td>
                   
                                        <td class="text-sm">
                                            <a href="#" data-bs-toggle="tooltip"
                                                data-bs-original-title="Preview product">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="#" id="EditPermission" data-bs-toggle="modal"
                                                data-bs-target="#Modaleditpermission{{$permission->id}}"
                                                data-id="{{ $permission->id }}" style="margin: 8px;">
                                                <i class="fa fa-edit"></i>
                                            </a>



                                            <a href="#" id="deleteContact" data-bs-toggle="modal"
                                                data-bs-target="#exampleModaledelete{{ $permission->id }}"
                                                data-id="{{ $permission->id }}">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModaledelete{{ $permission->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">

                                            <div
                                                class="modal-content {{Auth::user()->dark_mode == 1 ? 'bg-default' : 'bg-white'}}">
                                                <div class="modal-body p-0">
                                                    <div class="card card-plain">

                                                        <div class="swal2-icon swal2-warning swal2-icon-show"
                                                            style="display: flex;">
                                                            <div class="swal2-icon-content">!</div>
                                                        </div>
                                                        <div class="swal2-icon" style="display: none;"></div><img
                                                            class="swal2-image" style="display: none;">
                                                        <h2 class="swal2-title" id="swal2-title"
                                                            style="display: block;">Are
                                                            you
                                                            sure?
                                                        </h2>
                                                        <div class="swal2-html-container" style="display: block;">You
                                                            won't
                                                            be
                                                            able to
                                                            revert this!</div><input class="swal2-input"
                                                            style="display: none;"><input type="file" class="swal2-file"
                                                            style="display: none;">

                                                    </div>
                                                    <div class="swal2-actions">
                                                        <button type="button" data-bs-dismiss="modal"
                                                            class="swal2-cancel btn bg-gradient-danger" aria-label=""
                                                            style="display: inline-block; margin-right: 10px;">No,
                                                            cancel!</button>

                                                        {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'id' => 'myform',
                                                        'route' => ['permissions.destroy', $permission->id],
                                                        'style' => 'display:inline',
                                                        ]) !!}
                                                        <button type="submit"
                                                            class="swal2-confirm btn bg-gradient-success" aria-label=""
                                                            style="display: inline-block; margin-left: 10px;">Yes,
                                                            delete
                                                            it!</button>

                                                        {!! Form::close() !!}


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="Modaleditpermission{{$permission->id}}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div
                                                class="modal-content {{Auth::user() ? Auth::user()->dark_mode == 1 ? 'dark-version' : '' : ''}}">
                                                <div class="modal-header">
                                                    <h5 class="modal-title " id="exampleModalLabel">+ Edit Permission
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($permission, ['route' => ['permissions.update',
                                                    $permission->id], 'method'
                                                    =>
                                                    'PATCH']) !!}
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $permission->id }}">

                                                    <div class="col ps-4">

                                                        <div class="row ">
                                                            <div class="col-4">
                                                                <span class="ps-3"> name</span>
                                                            </div>


                                                            <div class="col-md-6">

                                                                <input value="{{ $permission->name }}" name="name"
                                                                    type="text" placeholder="Permission name"
                                                                    class="form-control form-control-sm" required />

                                                            </div>

                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-4">
                                                                <span class="ps-3"> description :</span>
                                                            </div>

                                                            <div class="col-md-6">

                                                                <input value="{{ $permission->description }}"
                                                                    name="description" type="text"
                                                                    class="form-control form-control-sm"
                                                                    id="exampleFormControlInput1"
                                                                    placeholder="description" required>

                                                            </div>


                                                        </div>



                                                    </div>


                                                    <hr class="text-secondary">

                                                    <div style="float:right" class="pe-5">
                                                        <input type="button" class="btn btn-sm btn-secondary  mt-3"
                                                            data-bs-dismiss="modal" value="cancel">
                                                        <input type="submit" class="btn btn-sm  mt-3" value="submit"
                                                            style="background: #EC1276;color:white;">
                                                    </div>


                                                    {!! Form::close() !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>

                    <div class="modal fade" id="AddPermisionModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div
                                class="modal-content {{Auth::user() ? Auth::user()->dark_mode == 1 ? 'dark-version' : '' : ''}}">
                                <div class="modal-header">
                                    <h5 class="modal-title " id="exampleModalLabel">+ Add new permission</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('permissions.store')}}" method="POST" class="form">
                                        @csrf
                                        <div class="col ps-4">

                                            <div class="row ">
                                                <div class="col-4">
                                                    <span class="ps-3"> Name</span>
                                                </div>


                                                <div class="col-md-6">

                                                    <input name="name" type="text" placeholder="permission name"
                                                        class="form-control form-control-sm" required />

                                                </div>

                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-4">
                                                    <span class="ps-3"> description :</span>
                                                </div>

                                                <div class="col-md-6">

                                                    <input name="description" type="text"
                                                        class="form-control form-control-sm"
                                                        id="exampleFormControlInput1" placeholder="description"
                                                        required>

                                                </div>


                                            </div>

                                        </div>
                                        <hr class="text-secondary">

                                        <div style="float:right" class="pe-5">
                                            <input type="button" class="btn btn-sm btn-secondary  mt-3"
                                                data-bs-dismiss="modal" value="cancel">
                                            <input type="submit" class="btn btn-sm  mt-3" value="submit"
                                                style="background: #EC1276;color:white;">
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
    @endsection