<?php
namespace app\models;

use yii\base\Model;
use yii\db\Connection;

class MetroModel extends Model
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
		$posts = $this->db->createCommand('SELECT * FROM Metro WHERE Metro.idCity IN (SELECT id FROM City WHERE City.city LIKE '.$this->db->quoteValue($data['sity']).') ')->queryAll();
		return $posts;
	}
}

?>
