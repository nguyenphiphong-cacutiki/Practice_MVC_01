<?php 
require_once 'models/Book.php';
require_once 'models/Genre.php';
class BookController{
    private $db;
    private $book = null;
    private $genre = null;
    function __construct()
    {
        $this->db = new Database();
        $this->book = new Book($this->db);
        $this->genre = new Genre($this->db);
    }
    function index(){
        $arr = $this->book->all();
        include 'views/index.php';
    }


    function create(){
        $genre = new Genre(new Database());
        $genreNames = $genre->all();
        include 'views/add.php';
    }
    function save(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $book = new book($this->db);
            // $date = DateTime::createFromFormat('d/m/Y', $_POST['import']);
            // echo $_POST['import'];
            // $formattedDate = $date->format('Y/m/d');
            $book->setData(0, $_POST['title'], $_POST['author'], $_POST['public'], $_POST['genre']);
            $book->save();
            header("Location:index.php?message=Thêm thành công");
            exit(1);
        }
        header("Location:index.php?message=Thêm thất bại");
        exit(1);

    }


    function edit(){
        $id = $_GET['id'];
        $book = $this->book->find($id);
        $genres= $this->genre->all();
        $genreFocus = $this->genre->find($book->getGrenresId());
        // echo $book;
        if($book !== null)
            require_once 'views/update.php';
        else echo 'find by id fail';
    }
    function update(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $book = new book($this->db);
            $id = $_GET['id'];
            $book->setData($id, $_POST['title'], $_POST['author'], $_POST['public'], $_POST['genre']);
            $book->update();
            header('Location:index.php?message=Sửa thành công');
            exit(1);
        }
    }


    // function show(){
    //     $id = $_GET['id'];
    //     $book = $this->book->find($id);
    //     require_once 'views/show.php';
    // }



    function delete(){
        $id = $_GET['id'];
        $book = $this->book->find($id);
        $book->delete();
        header('Location:index.php?message=Xóa thành công!');
        exit(1);
    }
}