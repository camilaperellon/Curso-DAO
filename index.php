<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

$usuario = new Usuario();

$usuario->loadById(3);

echo $usuario;