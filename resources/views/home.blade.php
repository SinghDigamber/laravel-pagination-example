<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Pagination Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-bordered mb-4">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->firstname }}</td>
                    <td>{{ $data->lastname }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->dob }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {{-- {!! $employees->links() !!} --}}

            {{-- {!! $employees->appends(['sort' => 'department'])->links() !!} --}}

            {!! $employees->appends(Request::all())->links() !!}
        </div>
    </div>
</body>

</html>
