<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="title m-b-md">
            List Breed
        </div>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <label for=""><a href="{{ route('form-create-cat')}}">Create</label>
                @foreach($listBreeds as $breed)
                    <tr>
                        <td>
                            <a href="{{ route('cateOfBreed',$breed->id) }}">{{$breed->name}}</a>
                        </td>
                        <td>
                            <form action="{{ route('breed-destroy', $breed->id) }} " method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
