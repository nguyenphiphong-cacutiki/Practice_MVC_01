<?php 
class Customer{
    private $id;
    private $name;
    private $describes;
    private $import;
    private $conn = null;
    public function __construct($db)
    {
        if($db != null){
            $this->conn = $db->getConn();
        }
    }
    

    function all(){
        $arrRes = [];
        $stmt = $this->conn->prepare("select * from khach_hang order by id desc");
        $stmt->execute();
        $arr = $stmt->fetchAll();
        if($stmt->rowCount())
        foreach($arr as $obj){
            $customer = new Customer(new Database());
            // $customer->setConn($this->conn);
            $customer->setData($obj['id'], $obj['name'], $obj['describes'], $obj['import']);
            $arrRes[] = $customer;
        }
        return $arrRes;
    }
    function find($id){
        $stmt = $this->conn->prepare("select * from khach_hang where id = :id");
        $stmt->execute(['id' => $id]);
        $res = $stmt->fetch();
        if($res){
            $customer = new Customer(new Database());
            // $customer->setConn($this->conn);
            $customer->setData($res['id'], $res['name'], $res['describes'], $res['import']);
            return $customer;
        } 
        return null;
    }
    function save(){
        $stmt = $this->conn->prepare("insert into khach_hang values(0,'".$this->name."', '".$this->describes."', '".$this->import."')");
        $stmt->execute();
    }
    function update(){
        $stmt = $this->conn->prepare("update khach_hang set name = :name, describes = :describes, import = :import where id = :id");
        $stmt->execute(['name' => $this->name, 'describes' => $this->describes, 'import' => $this->import, 'id' => $this->id]);
    }
    function delete(){
        // echo $this->id;
        $stmt = $this->conn->prepare('delete from khach_hang where id=:id');
        $stmt->execute(['id' => $this->id]);
    }



    public function setData($id, $name, $describes, $import){
        $this->id = $id;
        $this->name = $name;
        $this->describes = $describes;
        $this->import = $import;
    }
    function getName(){
        return $this->name;
    }
    function getDescribes(){
        return $this->describes;
    }
    function getId(){
        return $this->id;
    }
    function getImport(){
        return $this->import;
    }
    function setId($id){
        $this->id = $id;
    }
    function setName($name){
        $this->name = $name;
    }
    function setDescripbes($describes){
        $this->describes = $describes;
    }
    function setImport($import){
        $this->import = $import;
    }
    function setConn($conn){
        $this->conn = $conn;
    }
}