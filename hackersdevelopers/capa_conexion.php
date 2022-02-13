<?php

// Capa de abstracción a un conector sqli

class DBConnector {
  protected static $conn;
  protected static $stmt;
  protected static $reflection;
  protected static $sql;
  protected static $data;
  public static $results;

  protected static function conectar() {
    self::$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  }

  protected static function preparar() {
    self::$stmt = self::$conn->prepare(self::$sql);
    self::$reflection = new ReflectionClass('mysqli_stmt');
  }

  protected static function set_params() {
    $method = self::$reflection->getMethod('bind_param');
    $method->invokeArgs(self::$stmt, self::$data);
  }

  protected static function get_dat($fields) {
    $method = self::$reflection->getMethod('bind_result');
    $method->invokeArgs(self::$stmt, $fields);
    while(self::$stmt->fetch()) {
      self::$resutls[] = unserialize(serialize($fields));
    }
  }

  protected static function finalizar() {
    self::$stmt->close();
    self::$conn->close();
  }

  public static function ejecutar($sql, $data, $fields=False) {
    self::$sql = $sql;
    self::$data = $data;
    self::conectar();
    self::preparar();
    self::set_params();
    self::$stmt->execute();
    if($fields) {
      self::get_data($fields);
    } else {
      if(strpos(self::$sql, strtoupper('INSERT'))=== 0) {
        return self::$stmt->insert_id;
      }
    }
    self::finalizar();
  }

}

// ¿Cómo utiliar la capa de abstracción creada?

// En todos los casos, siempre será necesario invocar
// estáticamente al método ejecutar, pasándole al menos
// 2 parámetros: la sentencia SQL a preparar y un array
// con los datos a enlazar

$sql = "INSERT INTO productos (categoria, nombre, descripcion, precio) VALUES (?,?,?,?)";
$data = array("isbd", "{$categoria}", "{$nombre}", "{$descripcion}", "{$precio}");
$insert_id = DBConnector::ejecutar($sql, $data);

// Cuando se realiza una consulta de selección se adiciona un tercer parámetro

$sql = "SELECT nombre, descripcion, precio FROM productos WHERE categoria = ?";
$data = array("i", "{$categoria}");
$fields = array("Producto" => "", "Descripción" => "", "Precio" => "");
DBConnector::ejecutar($sql, $data, $fields);
print_r(DBConnector::$results);

// La última muestra como acceder a los resultados de la consulta
// mediante la propiedad estática $results