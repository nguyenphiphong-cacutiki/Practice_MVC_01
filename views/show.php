<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="asset/bootstrap-5.3.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href=<?=ROOT.'/asset/bootstrap-5.3.2/css/bootstrap.min.css'?>> -->
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
</head>
<body>
    <h2 class="text-center text-success">Customer</h2>


    <div class="container">
        
        
        <div class="row">

        <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Properties</th>
                <th scope="col">Values</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Id</td>
                <td><?=$customer->getId()?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?=$customer->getName()?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><?=$customer->getDescribes()?></td>
            </tr>
            <tr>
                <td>Import</td>
                <td><?=$customer->getImport()?></td>
            </tr>
           
        </tbody>
    </table>       
    <p class="d-flex justify-content-end"><a href="index.php" class=""><button class="btn btn-primary fw-bold">Go back</button></a></p>
        </div>
    </div>
    
    <script src="asset//fontawesome/js/all.min.js"></script>
    <script src="asset/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>