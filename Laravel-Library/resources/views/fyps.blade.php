<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final Year Projects</title>
</head>
<body>
    <table>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Author</th>
            <th>Student ID</th>
            <th>Department</th>
            <th>Year</th>
            <th>Abstract</th>
            <th>Status</th>
            <th>Grade</th>
        </tr>
        @foreach ($datas as $index=>$data)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->author }}</td>
                <td>{{ $data->student_id }}</td>
                <td>{{ $data->department }}</td>
                <td>{{ $data->year }}</td>
                <td>{{ $data->abstract }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->grade }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>