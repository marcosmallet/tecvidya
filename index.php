<?php 
/*ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);
$json_str = '{"nome":"Paulo da Silva", "idade":38, "sexo": "M"}';
// disponibilizando para consumo 
echo $json_str;
*/
class Users {
    public $user_id;
    public $user_name;
    public $user_photo;
    public $isFollowing;
    public $ranking;
}

class ListUsers {
	public $user;

	function __construct() {
		$this->user = new Users();
		$this->user->user_id = 1;
		$this->user->user_name = 'Marcos';	
		$this->user->user_photo = '/foto/marcos.jpg';
		$this->user->isFollowing = true;
		$this->user->ranking = 10;	

		echo json_encode($this->user);	
	}
}

new ListUsers();
?> 