<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add form</title>
</head>

<body class="text-center container">
    <h1>Please Fill the Form</h1>


    <form method="POST" action="{{url('save')}}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row container">
                <div class="col col-mb-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="col col-mb-6">
                    <label class="form-label">Father Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="Father Name">
                </div>

            </div>
            <div class="row container">

                <div class="col col-mb-6">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                <div class="col col-mb-6">
                    <label class="form-label">Upload Image</label>
                    <input type="file" name="imgpath" class="form-control">
                </div>
            </div>
            <div class="p-3"></div>
        </div>
        <button type="submit" class="btn btn-success p-2">Submit</button>
        <a href="{{url('company')}}" class="btn btn-danger p-2">Back</a>
    </form>

</body>

</html>