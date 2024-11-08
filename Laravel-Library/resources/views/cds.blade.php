<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CDs</title>
</head>
<body>
    <table>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Producer</th>
            <th>Genre</th>
            <th>Release Year</th>
            <th>Duration</th>
            <th>Studio</th>
        </tr>
        @foreach ($datas as $index=>$data)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->producer }}</td>
                <td>{{ $data->genre }}</td>
                <td>{{ $data->releaseYear }}</td>
                <td>{{ $data->duration }}</td>
                <td>{{ $data->studio }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>