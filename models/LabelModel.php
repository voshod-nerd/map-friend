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
		$data = \Yii::$app->request->get();
		$posts = $this->db->createCommand('SELECT * FROM labalAddress INNER JOIN User ON labalAddress.idUsers = User.id WHERE price >='.$data['minPrice'].' AND price <='.$data['maxPrice'])->queryAll();
		return $posts;
	}
}

?>
