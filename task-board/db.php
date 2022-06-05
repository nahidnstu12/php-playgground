<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "<h1>Hello nahid</h1>";
return $pdo;


// class DB02 {
//     private $host = "localhost";
//     private $user = "root";
//     private $password = "";
//     private $database = "products_crud";
//     private $connection;

//     public function __construct() {
//         $this->connection = $this->connectDB();
//     }
//     function connectDB(){
//         $connection = mysqli_connect($this->host,$this->user,$this->password,$this->database);
//         return $connection;
//     }

//     function runBaseQuery($query) {
//         $result = $this->connection->query($query);	
//         if ($result->num_rows > 0) {
//             while($row = $result->fetch_assoc()) {
//                 $resultset[] = $row;
//             }
//         }
//         return $resultset;
//     }
//     function runQuery($query, $param_type, $param_value_array) {
//         $sql = $this->connection->prepare($query);
//         $this->bindQueryParams($sql, $param_type, $param_value_array);
//         $sql->execute();
//         $result = $sql->get_result();
        
//         if ($result->num_rows > 0) {
//             while($row = $result->fetch_assoc()) {
//                 $resultset[] = $row;
//             }
//         }
        
//         if(!empty($resultset)) {
//             return $resultset;
//         }
//     }
//     function bindQueryParams($sql, $param_type, $param_value_array) {
//         $param_value_reference[] = & $param_type;
//         for($i=0; $i<count($param_value_array); $i++) {
//             $param_value_reference[] = & $param_value_array[$i];
//         }
//         call_user_func_array(array(
//             $sql,
//             'bind_param'
//         ), $param_value_reference);
//     }
//     function insert($query, $param_type, $param_value_array) {
//         $sql = $this->connection->prepare($query);
//         $this->bindQueryParams($sql, $param_type, $param_value_array);
//         $sql->execute();
//     }
//     function update($query, $param_type, $param_value_array) {
//         $sql = $this->connection->prepare($query);
//         $this->bindQueryParams($sql, $param_type, $param_value_array);
//         $sql->execute();
//     }
// }

class DB{
    public $pdo = null;
    // public static ?Database $db = null;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // self::$db = $this;
    }
}



?>