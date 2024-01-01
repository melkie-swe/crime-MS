<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<br><br><br><br><br>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    User Information
                </div>
                <div class="float-end">
                    <a href="{{ route('logactivity.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="card text-start">

                        <div class="card-body">
                            <h4 class="card-title">log details :</h4>

                            <table class="table">
                                <th>causer</th>
                                <th>action</th>
                                <th>modefied</th>
                                <th>details</th>
                                <th>time stamp</th>
                                <tbody class="container">
                                    @foreach ($details as $detail)
                                    <tr>
                                        <td>
                                            <p>{{$detail->username}}</p>
                                        </td>
                                        <td>
                                            <p>{{$detail->description}}</p>
                                        </td>
                                        <td>
                                            <p>{{$detail->subject_type}}</p>
                                        </td>
                                        <td>
                                            <p class="text-break text-wrap ">{{$detail->properties}} </p>
                                        </td>
                                        <td>
                                            <p>{{$detail->created_at}}</p>
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
    </div>
</div>