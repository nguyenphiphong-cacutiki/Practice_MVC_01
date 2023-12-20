<?php 
require_once 'models/Customer.php';
class CustomerController{
    private $db;
    private $customer = null;
    function __construct()
    {
        $this->db = new Database();
        $this->customer = new Customer($this->db);
    }
    function index(){
        $arr = $this->customer->all();
        include 'views/index.php';
    }


    function create(){
        include 'views/add.php';
    }
    function save(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $customer = new Customer($this->db);
            // $date = DateTime::createFromFormat('d/m/Y', $_POST['import']);
            // echo $_POST['import'];
            // $formattedDate = $date->format('Y/m/d');
            $customer->setData(0, $_POST['name'], $_POST['describes'], $_POST['import']);
            $customer->save();
            header("Location:index.php?message=add-success");
            exit(1);
        }
        header("Location:index.php?message=add-fail");
        exit(1);

    }


    function edit(){
        $id = $_GET['id'];
        $customer = $this->customer->find($id);
        // echo $customer;
        if($customer !== null)
            require_once 'views/update.php';
        else echo 'find by id fail';
    }
    function update(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $customer = new Customer($this->db);
            $customer->setData($_GET['id'], $_POST['name'], $_POST['describes'], $_POST['import']);
            $customer->update();
            header('Location:index.php?message=Update success');
            exit(1);
        }
    }


    function show(){
        $id = $_GET['id'];
        $customer = $this->customer->find($id);
        require_once 'views/show.php';
    }



    function delete(){
        $id = $_GET['id'];
        $customer = $this->customer->find($id);
        $customer->delete();
        header('Location:index.php?message=Delete success!');
    }
}