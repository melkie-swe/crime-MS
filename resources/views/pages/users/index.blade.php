@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Role Management'])

<div class="row mt-4 mx-4">
    <div class="col-12">
        <div class="alert alert-light" role="alert">
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto mb-1">
                    <div class="btn btn-sm btn btn-sm mb-0">
                        <form action="{{ route('users.index') }}" method="GET" role="search">
                            <input type="search" name="search" value="{{ request()->input('search') }}"
                                onchange="this.form.submit()" class="border rounded-pill px-3 py-1 table-tewos-color"
                                placeholder="search...">
                            <button type='submit' class='rounded-pill px-2 py-1 mx-n4'>
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div style="float:right">
                        <!-- <a class="btn btn-sm btn bg-gradient-success btn-sm mb-0"
                            href=""
                            style="background: #EC1276;color:white;">Export
                            Data
                        </a> -->
                        <!-- @can('create_role')
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalAddteacher"
                            class="btn bg-gradient-success btn-sm mb-0">+&nbsp; New User</a>
                        @endcan -->
                    </div>

                </div>
            </div>
        </div>
        <div class="card mt-3">

            <div class="card-body">
                <div class="float-end"> @can('create-user')
                    <!-- <a href="{{ route('users.create') }}" class="btn btn-success btn-sm "><i -->
                    <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModalAddUsers" class="bi bi-plus-circle"></i> Add New User</a>
                    @endcan
                </div>

                <div class="modal fade" id="exampleModalAddUsers" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div
                            class="modal-content {{Auth::user() ? Auth::user()->dark_mode == 1 ? 'dark-version' : '' : ''}}">
                            <div class="modal-header">
                                <h5 class="modal-title " id="exampleModalLabel">+ Add new user</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('users.store')}}" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col ps-4">

                                        <div class="row ">
                                            <div class="col-3">
                                                <span class="ps-3"> Username</span>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="username" type="text" placeholder="user name"
                                                    class="form-control form-control-sm" required
                                                    value="{{ old('username') }}" />
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <span class="ps-3"> firstname</span>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="firstname" type="text" placeholder="firstname "
                                                    class="form-control form-control-sm" required
                                                    value="{{ old('firstname') }}" />
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <span class="ps-3"> lastname</span>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="lastname" type="text" placeholder="lastname"
                                                    class="form-control form-control-sm" required
                                                    value="{{ old('lastname') }}" />
                                            </div>
                                        </div>

                                        <div class="row mt-2">

                                            <div class="col-3">
                                                <span class="ps-3"> Email :</span>
                                            </div>
                                            <div class="col-md-6">
                                                <input name="email" type="email" class="form-control form-control-sm"
                                                    id="exampleFormControlInput1" placeholder="name@example.com"
                                                    value="{{ old('email') }}">

                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <span class="ps-3"> Role :</span>
                                            </div>


                                            <div class="col-md-6">

                                                <select id="create-role" class="form-control form-control-sm"
                                                    placeholder="roles" name="roles" required>
                                                    @foreach ($roles as $roles)
                                                    <option value="{{$roles}}">{{$roles}}</option>
                                                    @endforeach
                                                </select>

                                            </div>

                                        </div>
                                        <!-- <div class="row mt-2">
                                            <div class="col-3">
                                                <span class="ps-3"> Image :</span>
                                            </div>

                                            <div class="col-md-6">
                                                <input type="file" name="avatar" id="avatar"
                                                    class="form-control form-control-sm"
                                                    placeholder="select profile image">
                                            </div>

                                        </div> -->

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
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>

                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S#
                            </th>

                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Email
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Roles</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>
                                <div class="d-flex px-3 py-1">
                                    <div>
                                        <!-- <img src="./img/team-1.jpg" class="avatar me-3" alt="image"> -->
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $user->username }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>

                                <p class="text-sm font-weight-bold mb-0">{{ $user->email }}</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                @forelse ($user->getRoleNames() as $role)
                                <span class="badge bg-dark">{{ $role }}</span>
                                @empty
                                @endforelse
                            </td>
                            <td class="align-middle text-end">
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('users.show', $user->id) }}" class="mx-3"><i
                                            class="fa fa-eye"></i> </a>

                                    @if (in_array('Super Admin', $user->getRoleNames()->toArray() ?? []) )
                                    @if (Auth::user()->hasRole('Super Admin'))
                                    <a href="{{ route('users.edit', $user->id) }}" class="mx-3"><i
                                            class="fa fa-edit"></i> </a>
                                    @endif
                                    @else
                                    @can('edit-user')
                                    <a href="{{ route('users.edit', $user->id) }}" class="mx-3"><i
                                            class="fa fa-edit"></i> </a>
                                    @endcan

                                    @can('delete-user')
                                    @if (Auth::user()->id!=$user->id)
                                    <a href="#" id="deleteContact" data-bs-toggle="modal"
                                        data-bs-target="#exampleModaledelete{{ $user->id }}" data-id="{{ $user->id }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    @endif
                                    @endcan
                                    @endif

                                </form>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModaledelete{{ $user->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalSignTitle" aria-hidden="true">
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
                                                <h4 class="swal2-title" id="swal2-title" style="display: block;">Are you
                                                    sure?
                                                </h4>
                                                <div class="swal2-html-container" style="display: block;">You won't be
                                                    able to
                                                    revert this!</div>
                                                    <input class="swal2-input"
                                                    style="display: none;"><input type="file" class="swal2-file"
                                                    style="display: none;">

                                            </div>
                                            <div class="swal2-actions float-center">
                                                <button type="button" data-bs-dismiss="modal"
                                                    class="swal2-cancel btn btn-sm bg-gradient-danger" aria-label=""
                                                    style="display: inline-block; margin-right: 10px;">No,
                                                    cancel!</button>

                                                {!! Form::open([
                                                'method' => 'DELETE',
                                                'id' => 'myform',
                                                'route' => ['users.destroy', $user->id],
                                                'style' => 'display:inline',
                                                ]) !!}
                                                <button type="submit" class="swal2-confirm btn btn-sm bg-gradient-success"
                                                    aria-label="" style="display: inline-block; margin-left: 10px;">Yes,
                                                    delete
                                                    it!</button>

                                                {!! Form::close() !!}


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <td colspan="5">
                            <span class="text-danger">
                                <strong>No User Found!</strong>
                            </span>
                        </td>
                        
                        @endforelse
                    </tbody>
                </table>

                {{ $users->links() }}

            </div>
        </div>
    </div>
</div>
@endsection