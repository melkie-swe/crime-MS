@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Activity log Management'])
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
            <div class="card" id="permissions">
                <span class="text-center"><i> <strong> show all activity log</strong></i> </span>
            </div>
        </div><br><br>
        <div class="card" >
            <div class="card" id="permissions">
                <div class="table-responsive">
                    <table class="table table-white align-items-center mb-0">
                        <thead>
                            <th>

                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Log Name
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">
                                Action Type
                            </th>

                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">
                                Subject
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">
                                User Id
                            </th>

                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">
                                Log Detail
                            </th>
                            <th class="ps-5"><span
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></span>
                                Action</th>



                            </th>

                        </thead>
                        <tbody class="container">
                            @foreach ($data as $key => $activitylog)
                            <tr>

                                <td class="ps-5 dropend"> <a href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fas fa-ellipsis-v"></i>

                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink zindex-dropdown">


                                    </ul>
                                </td>
                                <td>
                                    <p>{{$activitylog->created_at}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-normal mb-2">{{ $activitylog->log_name }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-normal mb-2">{{ $activitylog->description }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-normal mb-2">{{ $activitylog->subject_type }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-normal mb-2">{{ $activitylog->username }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-normal mb-2">
                                        {{ Str::limit($activitylog->properties,20)}}
                                    </p>
                                </td>
                                <td>
                                <a href="{{ route('logactivity.show', $activitylog->id) }}">
                                        <i
                                            class="material-icons text-info position-relative text-lg ps-5">visibility</i>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
     
    </div>
</div>
@endsection