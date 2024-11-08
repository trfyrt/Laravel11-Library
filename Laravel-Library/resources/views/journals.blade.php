<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Journals</title>
</head>
<body>
    <table>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Publication Year</th>
        </tr>
        @foreach ($datas as $index=>$data)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->author }}</td>
                <td>{{ $data->publisher }}</td>
                <td>{{ $data->publicationYear }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>