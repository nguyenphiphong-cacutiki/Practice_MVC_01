<?php 
class Book{
    private $id;
    private $title;
    private $author;
    private $public;
    private $genresName; // ten the loai
    private $genresID;

    private $conn = null;
    public function __construct($db)
    {
        if($db != null){
            $this->conn = $db->getConn();
        }
    }
    

    function all(){
        $arrRes = [];
        $stmt = $this->conn->prepare("select b.bookID, b.title, b.author, b.publicationYear, g.genreName as genres, g.genreId from books b inner join geners g on b.genreID = g.GenreID order by b.bookId desc");
        $stmt->execute();
        $arr = $stmt->fetchAll();
        if($stmt->rowCount())
        foreach($arr as $obj){
            $book = new Book(new Database());
            // $customer->setConn($this->conn);
            $book->setData($obj['bookID'], $obj['title'], $obj['author'], $obj['publicationYear'], $obj['genreId']);
            $book->setGenresName($obj['genres']);
            $arrRes[] = $book;
        }
        return $arrRes;
    }
    function find($id){
        $stmt = $this->conn->prepare("select bookid, title, author, publicationYear, genreid  from books where bookID = :id");
        $stmt->execute(['id' => $id]);
        $res = $stmt->fetch();
        if($res){
            $book = new Book(new Database());
            // $customer->setConn($this->conn);
            $book->setData($res['bookid'], $res['title'], $res['author'], $res['publicationYear'], $res['genreid']);
            $genre = new Genre(new Database());
            $genre = $genre->find($book->getGrenresId());
            $book->setGenresName($genre->getName());
            // echo 'oke'; exit(1);
            return $book;
        } 
        echo 'null'; exit(1);
        return null;
    }
    function save(){
        $stmt = $this->conn->prepare("insert into books values(0,'".$this->title."', '".$this->author."', '".$this->public."', '".$this->genresID."')");
        $stmt->execute();
    }
    function update(){
        $stmt = $this->conn->prepare("update books set title = :title, author = :author, publicationYear = :public, genreId = :genre where bookId = :id");
        $stmt->execute(['title' => $this->title, 'author' => $this->author, 'public' => $this->public, 'id' => $this->id, 'genre' => $this->genresID]);
        // echo $stmt->rowCount() . '';
        // exit(1);
    }
    function delete(){
        // echo $this->id;
        $stmt = $this->conn->prepare('delete from books where BookID=:id');
        $stmt->execute(['id' => $this->id]);
    }



    public function setData($id, $title, $author, $public, $genresID){
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->public = $public;
        $this->genresID = $genresID;
    }
    function getTitle(){
        return $this->title;
    }
    function getAuthor(){
        return $this->author;
    }
    function getId(){
        return $this->id;
    }
    function getPublic(){
        return $this->public;
    }
    function getGenresName(){
        return $this->genresName;
    }
    function setGenresName($genresName){
        $this->genresName = $genresName;
    }

    function setGenresId($genresId){
        $this->genresID = $genresId;
    }
    function getGrenresId(){
        return $this->genresID;
    }


    function setId($id){
        $this->id = $id;
    }

    // function setTitle($name){
    //     $this->name = $name;
    // }
    // function setDescripbes($describes){
    //     $this->describes = $describes;
    // }
    // function setImport($import){
    //     $this->import = $import;
    // }
    // function setConn($conn){
    //     $this->conn = $conn;
    // }
}