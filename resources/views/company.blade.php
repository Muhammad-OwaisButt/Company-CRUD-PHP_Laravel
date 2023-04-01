<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Company</title>
</head>
<body class="text-center container">

    <h1>Company</h1>

    <a class="btn btn-primary" href={{url('addform')}}>Add Company</a>

    <table class="table table-hover container">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Father Name</th>
            <th scope="col">Address</th>
            <th scope="col" colspan="2">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 1
            @endphp

            @foreach ($companies as $data)

            <tr>
              <th scope="row">{{$i++}}</th>
              <th scope="row">{{$data->id}}</th>
              <td><img width="80px" height="80px" src="upload/{{$data->imgpath}}" alt="{{$data->name}}"></td>
              <td>{{$data->name}}</td>
              <td>{{$data->fname}}</td>
              <td>{{$data->address}}</td>
              <td><a class="btn btn-warning" href="{{ 'edit/'.$data->id }}">Edit</a></td>
              <td><a class="btn btn-danger" href="{{'delete/'. $data->id }}">Delete</a></td>
            </tr>

            @endforeach
        </tbody>
      </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
