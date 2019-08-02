<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>List Categories</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                List Cat
            </div>
            <form action="{{ route('store-cat') }}" method="post">
                @csrf
                <label for="">Name:</label>
                <input type="text" name="name"><br>
                <label for="">Age:</label>
                <input type="text" name="age"><br>
                <label for="">Breed ID</label>
                    <select name="breed_id" id="">
                    {{-- {!! Form::select('breed_id',  $listID , $selectedID , ['class' => 'form-control']) !!} --}}
                     @foreach ($listBreeds as $key => $value)
                     <option value="{{ $value->id }}" {{ $selectedID == $value->id ? 'selected="selected"' : '' }} >
                            {{ $value->id }}
                        </option>

                     @endforeach }}
                    </select>
                <button type="submit">Create</button>
            </form>
        </div>
    </body>
</html>
