<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataUser as $index => $user)
            <tr>
                <td scope="col">{{ ++$index }}</td>
                <td scope="col">{{ $user->name }}</td>
                <td scope="col">{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>