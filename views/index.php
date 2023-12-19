<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../asset/bootstrap-5.3.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href=<?=ROOT.'/asset/bootstrap-5.3.2/css/bootstrap.min.css'?>> -->
    <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
</head>
<body>
    <h2 class="text-center text-success">Khách hàng</h2>


    <div class="container">
        
        <a href="?action=create">
            <button class="btn btn-success mb-3"><i class="fa-regular fa-square-plus"></i> Add Customer</button>
        </a>
        <div class="row">

        <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">import</th>
           
            <th scope="col" class="text-center" colspan="3">Modify</th>

            </tr>
        </thead>
        <tbody>
                <?php foreach($arr as $obj):?>
                    <tr>
                        <th scope="row"><?=$obj->getId()?></th>
                        <td><?=$obj->getName()?></td>
                        <td><?=$obj->getDescribes()?></td>
                        <td><?=$obj->getImport()?></td>
                        
                        <td ><a class="btn btn-success" href="?controller=customer&action=show&id=<?=$obj->getId()?>"><i class="fa-regular fa-eye"></i></a></td>
                        <td ><a class="btn btn-danger" href="?controller=customer&action=edit&id=<?=$obj->getId()?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td ><a class="btn btn-warning" href="?controller=customer&action=delete&id=<?=$obj->getId()?>"><i class="fa-regular fa-trash-can"></i></a></td>
                        
                    </tr>

                <?php endforeach;?>
        </tbody>
    </table>       
        </div>
    </div>
    
    <script src="../asset//fontawesome/js/all.min.js"></script>
    <script src="../asset/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>