<?php

/****
 *  requires: 
 *      phpunit : 6.0
 *      dbunit  : 3.0 
 */

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

/* not included by default in TestCaseTrait
 * as preferd source is XML
 */
use PHPUnit\DbUnit\DataSet\CsvDataSet;   

class dbTest3 extends TestCase {

    use TestCaseTrait;

    public function getConnection() {
        $pdo = new PDO(
                        $GLOBALS['DB_DSN'],
                        $GLOBALS['DB_USER'],
                        $GLOBALS['DB_PASSWD']
                    );
        return $this->createDefaultDBConnection($pdo, $GLOBALS['DB_DBNAME']);
    }

    public function getDataSet() {
        /* until dbunit 3.0 class name was:
         * HPUnit_Extensions_Database_DataSet_CsvDataSet
         */
        $dataSet = new CsvDataSet();
        $dataSet->addTable('user', 'user.csv');
        return $dataSet;
    }

    public function testDummy() {
        $this->assertTrue(true);
    }

}
?>