<?

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

//carrega um usuario
/*$usuario = new Usuario();
$usuario->loadById(3);
echo $usuario;
*/

//carrega uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);
*/

//carrega uma lista de usuarios buscando pelo login
/*$search = Usuario::search("ca");
echo json_encode($search);
*/

//Autentica usuarios
$usuario = new Usuario();
$usuario->login("camila", "12315");
echo $usuario;