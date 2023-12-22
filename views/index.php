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
    <h2 class="text-center text text-success my-4 text-uppercase text-decoration-underline">Sách</h2>


    <div class="container">
        
        <a href="?action=create">
            <button class="btn btn-success mb-3"><i class="fa-regular fa-square-plus"></i> Thêm sách</button>
        </a>
        <div class="row">

        <table class="table table-primary table-hover align-middle">
        <thead class="table-dark">
            <tr>
            <th scope="col">Mã sách</th>
            <th scope="col">Tên sách</th>
            <th scope="col">Tác giả</th>
            <th scope="col">Năm Xuất bản</th>
            <th scope="col">Tên thể loại</th>
           
            <th scope="col" class="text-center" colspan="3">Chỉnh sửa</th>

            </tr>
        </thead>
        <tbody>
                <?php foreach($arr as $obj):?>
                    <tr>
                        <th scope="row"><?=$obj->getId()?></th>
                        <td><?=$obj->getTitle()?></td>
                        <td><?=$obj->getAuthor()?></td>
                        <td><?=$obj->getPublic()?></td>
                        <td><?=$obj->getGenresName()?></td>
                        
                        <!-- <td ><a class="btn btn-success" href="?controller=book&action=show&id=<?=$obj->getId()?>"><i class="fa-regular fa-eye"></i></a></td> -->
                        <td ><a class="btn btn-danger" href="?controller=book&action=edit&id=<?=$obj->getId()?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td ><button class="btn btn-warning" data-bs-toggle='modal'   data-bs-target='#A<?= $obj->getId(); ?>'><i class="fa-regular fa-trash-can"></i></button></td>
                        

                        <!-- Modal -->
                        <div class='modal fade' id='A<?= $obj->getId(); ?>' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h1 class='modal-title fs-5' id='exampleModalLabel'>Xác nhận xóa</h1>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        Bạn có muốn xóa sách có id: <?= $obj->getId(); ?>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Trở lại</button>
                                        <a href='?controller=book&action=delete&id=<?=$obj->getId()?>' class='btn btn-primary'>Đồng ý</a>
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