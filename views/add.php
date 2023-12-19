<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../asset/bootstrap-5.3.2/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
    <div class="row p-3">
        <h4 class="text-center fw-bold text-success">Add new customer</h4>
        <form method="POST" action="index.php?controller=customer&action=save">
            <div class="input-group">
                <span class="input-group-text fw-bold bg-light">Name</span>
                <input required name = 'name' type="text" class="form-control" placeholder="">
            </div>
            
            
            <!-- <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">User</span>
                <select class="form-select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">Status</span>
                <select class="form-select">
                    <option>Publicsher</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div> -->

            <div class="form-floating my-2">
                <input required type="text" class="form-control" id="pwd" placeholder="Description..." name="describes">
                <label for="pwd">describes...</label>
            </div>
            <div class="input-group mb-2">
                <span class="input-group-text fw-bold bg-light">Import</span>
                <input required name = 'import' type="date" class="form-control" placeholder="">
            </div>
            <!-- <div class="form-floating mt-2">
                <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Message</label>
            </div> -->
        
            <button type="submit" class="btn btn-primary mt-4">Add</button>
        </form>
    </div>
   </div>

    <script src="../asset/fontawesome/js/all.min.js"></script>
    <script src="../asset/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/jquery-3.7.1.min.js"></script>
</body>
</html>