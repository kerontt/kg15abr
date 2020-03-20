<?php
/**
 *
 */
class Products {
    private $Id;
    private $Brand;
    private $ProductName;
    private $ProductDescription;
    private $ProductImageMain;
    private $Price;
    public $dbConn;
    
    function setId($Id) { $this->Id = $Id; }
    function getId() { return $this->id; }
    function setBrand($Brand) { $this->Brand = $Brand; }
    function getBrand() { return $this->Brand; }
    function setProductName($ProductName) { $this->ProductName = $ProductName; }
    function getProductName() { return $this->pProductName; }
    function setProductDescription($ProductDescription) { $this->ProductDescription = $ProductDescription; }
    function getProductDescription() { return $this->ProductDescription; }
    function setProductImageMain($ProductImageMain) { $this->ProductImageMain = $ProductImageMain; }
    function getProductImageMain() { return $this->ProductImageMain; }
    function setPrice($Price) { $this->Price = $Price; }
    function getPrice() { return $this->Price; }
    
    public function __construct($conn) {
        $this->dbConn = $conn;
    }
    
    public function getAllProducts() {
        $sql  = "SELECT * FROM Products";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->execute();
        $Products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $Products;
    }
    
    public function getProductsById() {
        $sql  = "SELECT * FROM Products WHERE Id = :wid";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam('wid', $this->id);
        $stmt->execute();
        $Products = $stmt->fetch(PDO::FETCH_ASSOC);
        return $Products;
    }
}
?>