<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <ul>
           
        </ul>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Create At</th>
                    <th>Update At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listCats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->age}}</td>
                        <td>{{$cat->created_at}}</td>
                        <td>{{$cat->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
</body>
</html>