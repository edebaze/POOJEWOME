<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 15:53
 */

namespace Core\Model;


    abstract class DbTable
    {
           protected $_primary;
           protected $_classToMap;
           protected $_table;
           private $_db;

           public function __construct() {
               # Je récupère l'instance PDO
               $this->_db = DbFactory::PdoFactory();
           }

           public function fetchAll() {
                $sql = "SELECT * FROM " . $this->_table;
                $sth = $this->_db->prepare($sql);
                $sth->execute();
                return $sth->fetchAll(\PDO::FETCH_CLASS, $this->_classToMap);
           }
    }