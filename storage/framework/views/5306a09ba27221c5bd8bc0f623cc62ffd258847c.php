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
    <h1>Please Udate the Form</h1>


    <form method="POST" action="<?php echo e(url('update')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="container">
            <div class="col col-mb-6">
                <label class="form-label">Name</label>
                <input type="hidden" name="id" class="form-control" placeholder="Name" value="<?php echo e($company->id); ?>">
            </div>
            <div class="row container">
                <div class="col col-mb-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e($company->name); ?>">
                </div>
                <div class="col col-mb-6">
                    <label class="form-label">Father Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="Father Name" value="<?php echo e($company->fname); ?>">
                </div>

            </div>
            <div class="row container">

                <div class="col col-mb-6">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo e($company->address); ?>">
                </div>
                <div class="col col-mb-6">
                    <label class="form-label">Upload Image</label>
                    <input type="file" name="imgpath" class="form-control" value="<?php echo e($company->imgpath); ?>">
                </div>
            </div>
            <div class="p-3"></div>
        </div>
        <button type="submit" class="btn btn-warning p-2">Update</button>
        <a href="<?php echo e(url('company')); ?>" class="btn btn-danger p-2">Back</a>
    </form>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Office work\company_crud\resources\views/editform.blade.php ENDPATH**/ ?>