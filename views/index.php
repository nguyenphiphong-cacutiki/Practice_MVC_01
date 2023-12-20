<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="asset/bootstrap-5.3.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href=<?=ROOT.'/asset/bootstrap-5.3.2/css/bootstrap.min.css'?>> -->
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
</head>
<body>
    <h2 class="text-center text-success my-4 text-uppercase text-decoration-underline">Khách hàng</h2>


    <div class="container">
        
        <a href="?action=create">
            <button class="btn btn-success mb-3"><i class="fa-regular fa-square-plus"></i> Add Customer</button>
        </a>
        <div class="row">

        <table class="table table-primary table-hover align-middle">
        <thead class="table-dark">
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
                        <td ><button class="btn btn-warning" data-bs-toggle='modal'   data-bs-target='#A<?= $obj->getId(); ?>'><i class="fa-regular fa-trash-can"></i></button></td>
                        

                        <!-- Modal -->
                        <div class='modal fade' id='A<?= $obj->getId(); ?>' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h1 class='modal-title fs-5' id='exampleModalLabel'>Confirm Delete the Customer</h1>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        Are you sure delete the user with id: <?= $obj->getId(); ?>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                                        <a href='?controller=customer&action=delete&id=<?=$obj->getId()?>' class='btn btn-primary'>Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>

                <?php endforeach;?>
        </tbody>
    </table>       
        </div>
    </div>
    
    <script src="asset/fontawesome/js/all.min.js"></script>
    <script src="asset/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>