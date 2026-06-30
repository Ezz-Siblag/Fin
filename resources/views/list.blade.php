<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lists</title>
</head>
<body>
    <table>
        @foreach($sellers as $seller)
        <tr>
            <td>{{$seller['GcashNumber']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>