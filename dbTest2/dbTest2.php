<?php 

/****
 *  requires: 
 *      phpunit : 5.7
 *      dbunit  : 2.0 
 */

class UserTest extends PHPUnit_Extensions_Database_TestCase {

	public function getConnection(){
		$pdo = new PDO(
						$GLOBALS['DB_DSN'],
						$GLOBALS['DB_USER'],
						$GLOBALS['DB_PASSWD']
					);
		return $this->createDefaultDBConnection($pdo, $GLOBALS['DB_DBNAME']);
	}

	protected function getDataSet() {
		$dataSet = new PHPUnit_Extensions_Database_DataSet_CsvDataSet();
		$dataSet->addTable('user', 'user.csv');
		return $dataSet;
	}

	public function testDummy () {
		$this->assertTrue(true);
	}

}

?>