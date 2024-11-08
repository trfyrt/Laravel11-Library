<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newspapers</title>
</head>
<body>
    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Publisher</th>
            <th>Publication Date</th>
            <th>Editor</th>
            <th>Language</th>
            <th>Page Count</th>
        </tr>
        @foreach ($datas as $index=>$data)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->publisher }}</td>
                <td>{{ $data->publicationDate }}</td>
                <td>{{ $data->editor }}</td>
                <td>{{ $data->language }}</td>
                <td>{{ $data->pageCount }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>