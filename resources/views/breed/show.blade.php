<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
                    Breed Details
                </div>
                <p>{{ $breed->name }}</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Create At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($breed->cats as $cat)
                            <tr id="{{ $cat->id }} ">
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->age }}</td>
                                <td>{{ $cat->create_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(document).on('click','tr',function(){
                        var catId = $(this).attr('id');
                        //alert(catId);
                       // ajax call api delete cat sau đó viết Route::get('/cats/{id}','API\CatController@destroy');

                        $.ajax({
                            url : '/api/cats/' + catId,
                            type : 'GET',
                            data : {},
                            success : function(data){
                                console.log(data);//hien thị đata
                               // show ra cat list mà không phải load lại trang
                                var html = '';//
                                $.each(data.listCats , function(key,value){
                                    html += '<tr id="' + value.id +  '">' +
                                                '<td>' + value.id + '</td>' +
                                                '<td>' + value.name + '</td>' +
                                                '<td>' + value.age + '</td>' +
                                                '<td>' + value.created_at + '</td>' +
                                            '</tr>';
                                });
                                $('tbody').html('');// xóa tất cả html có tbody
                                $('tbody').append(html);// truyền html mới vào
                            },
                            error : function(error){
                                console.log(error);
                            }
                        });
                    });
                });
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </body>
</html>
