<!doctype html>

<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

    <table border="2px solid black">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>

        <?php $count =0;?>
        @foreach($dataArray as $data)
            <?php $count++;?>
            <tr>
                <td>{{$count}}</td>
                <td>{{$data['name']}}</td>
                <td>{{$data['age']}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>



</body>
</html>