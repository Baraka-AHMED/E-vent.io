
<?php
class Bd extends PDO {
  private static $instance;
  private function __construct (){
    try{
$pdo = new PDO('mysql:dbname=eeventio_db; host=mysql-eeventio.alwaysdata.net', 'eeventio', 'projetweb13');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
    catch(PDOException $excep){
      die($excep->getMessage());
    }
  }
public static function getinstance(){
  if (self::$instance === null){
  self::$instance =new $instance;
  }
  else return self::$instance();
}
}
?>
