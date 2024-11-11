<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .no-data {
            text-align: center;
            font-style: italic;
        }
    </style>
</head>
<body>

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Price</th>
            <th>Location</th>
            <th>Description</th>
            <th>Organisateur</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $e)
            <tr>
                <td>{{$e->title}}</td>
                <td>{{$e->start_date}}</td>
                <td>{{$e->end_date}}</td>
                <td>{{$e->price}}</td>
                <td>{{$e->location}}</td>
                <td>{{$e->description}}</td>   
                <td>{{$e->user->name}}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr></tr>
    </tfoot>
</table>

</body>
</html>
