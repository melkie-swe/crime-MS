<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<br><br><br><br><br>

<!-- <div class="row justify-content-center mt-100 pt-100">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Role
                </div>
                <div class="float-end">
                    <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('roles.update', $role->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $role->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="permissions" class="col-md-4 col-form-label text-md-end text-start">Permissions</label>
                        <div class="col-md-6">           
                            <select class="form-select @error('permissions') is-invalid @enderror" multiple aria-label="Permissions" id="permissions" name="permissions[]" style="height: 210px;">
                                @forelse ($permissions as $permission)
                                    <option value="{{ $permission->id }}" {{ in_array($permission->id, $rolePermissions ?? []) ? 'selected' : '' }}>
                                        {{ $permission->name }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                            @if ($errors->has('permissions'))
                                <span class="text-danger">{{ $errors->first('permissions') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Role">
                    </div>  
                </form>
            </div>
        </div>
    </div>    
</div>   -->


<div class="container">
    <div class="justify-content-center">
       @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <div class="card">
          
        <div class="card mt-4" id="permissions">
                <div class="card-header">

                    {!! Form::model($role, ['route' => ['roles.update', $role->id],'method' => 'PATCH']) !!}
                    <div class="form-group">
                        <label>Name </label>
                        {!! Form::text('name', null, array('type' => 'text','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="card-header">
                    <h5>Permissions</h5>
                    <p class="text-sm">Give permissions to user.</p>
                </div>

                <div class="card-body pt-0">
                    <div class="row">
                        @foreach ($permissions as $value)
                        <div class="form-check col-md-3">
                            <label class="custom-control-label">{{ Form::checkbox('permission[]', $value->id,
                                in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name
                                form-check-input')) }} {{ $value->name }}</label>
                            <label data-bs-toggle="modal" data-bs-target="#exampleModalToggle2{{ $value->id }}"
                                data-id="{{ $value->id }}">
                                <div class="nav-link text-dark">
                                    <i class="fas fa-info-circle  ps-3"></i>
                                </div>
                            </label>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2{{  $value->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalSignTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Description</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $value->description }}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn bg-gradient-primary btn-sm float-end mt-6 mb-0 btn btn-primary">Update</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


