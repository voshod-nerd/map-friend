<?php
namespace app\models;

use yii\base\Model;
use yii\db\Connection;

class LabelModel extends Model
{
	private $db ;
	function __construct() {
	 	 $this->db = new Connection([
   	 		'dsn' => 'mysql:host=localhost;dbname=mapFrend',
   	 		'username' => 'root',
   	 		'password' => '277422',
   	 		'charset' => 'utf8',
		]);
	}
	public  function getLabelAddress(){
		$posts = $this->db->createCommand('SELECT * FROM labalAddress')->queryAll();
		return $posts;
	}
}

?>
