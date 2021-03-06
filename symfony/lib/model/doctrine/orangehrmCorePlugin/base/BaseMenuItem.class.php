<?php

/**
 * BaseMenuItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int       $id                       Type: integer, primary key
 * @property string    $menuTitle                Type: string(255)
 * @property int       $screenId                 Type: integer
 * @property int       $parentId                 Type: integer
 * @property int       $level                    Type: integer
 * @property int       $orderHint                Type: integer
 * @property string    $urlExtras                Type: string(255)
 * @property int       $status                   Type: integer
 * @property Screen    $Screen                   
 *  
 * @method int         getId()                   Type: integer, primary key
 * @method string      getMenutitle()            Type: string(255)
 * @method int         getScreenid()             Type: integer
 * @method int         getParentid()             Type: integer
 * @method int         getLevel()                Type: integer
 * @method int         getOrderhint()            Type: integer
 * @method string      getUrlextras()            Type: string(255)
 * @method int         getStatus()               Type: integer
 * @method Screen      getScreen()               
 *  
 * @method MenuItem    setId(int $val)           Type: integer, primary key
 * @method MenuItem    setMenutitle(string $val) Type: string(255)
 * @method MenuItem    setScreenid(int $val)     Type: integer
 * @method MenuItem    setParentid(int $val)     Type: integer
 * @method MenuItem    setLevel(int $val)        Type: integer
 * @method MenuItem    setOrderhint(int $val)    Type: integer
 * @method MenuItem    setUrlextras(string $val) Type: string(255)
 * @method MenuItem    setStatus(int $val)       Type: integer
 * @method MenuItem    setScreen(Screen $val)    
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMenuItem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_menu_item');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('menu_title as menuTitle', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('screen_id as screenId', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('parent_id as parentId', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('level', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('order_hint as orderHint', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('url_extras as urlExtras', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Screen', array(
             'local' => 'screenId',
             'foreign' => 'id'));
    }
}