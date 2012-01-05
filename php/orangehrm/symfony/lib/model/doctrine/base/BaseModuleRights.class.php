<?php

/**
 * BaseModuleRights
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $userg_id
 * @property string $mod_id
 * @property integer $addition
 * @property integer $editing
 * @property integer $deletion
 * @property integer $viewing
 * @property Module $Module
 * 
 * @method string       getUsergId()  Returns the current record's "userg_id" value
 * @method string       getModId()    Returns the current record's "mod_id" value
 * @method integer      getAddition() Returns the current record's "addition" value
 * @method integer      getEditing()  Returns the current record's "editing" value
 * @method integer      getDeletion() Returns the current record's "deletion" value
 * @method integer      getViewing()  Returns the current record's "viewing" value
 * @method Module       getModule()   Returns the current record's "Module" value
 * @method ModuleRights setUsergId()  Sets the current record's "userg_id" value
 * @method ModuleRights setModId()    Sets the current record's "mod_id" value
 * @method ModuleRights setAddition() Sets the current record's "addition" value
 * @method ModuleRights setEditing()  Sets the current record's "editing" value
 * @method ModuleRights setDeletion() Sets the current record's "deletion" value
 * @method ModuleRights setViewing()  Sets the current record's "viewing" value
 * @method ModuleRights setModule()   Sets the current record's "Module" value
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseModuleRights extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_rights');
        $this->hasColumn('userg_id', 'string', 36, array(
             'type' => 'string',
             'primary' => true,
             'length' => 36,
             ));
        $this->hasColumn('mod_id', 'string', 36, array(
             'type' => 'string',
             'primary' => true,
             'length' => 36,
             ));
        $this->hasColumn('addition', 'integer', 2, array(
             'type' => 'integer',
             'unsigned' => 1,
             'default' => '0',
             'length' => 2,
             ));
        $this->hasColumn('editing', 'integer', 2, array(
             'type' => 'integer',
             'unsigned' => 1,
             'default' => '0',
             'length' => 2,
             ));
        $this->hasColumn('deletion', 'integer', 2, array(
             'type' => 'integer',
             'unsigned' => 1,
             'default' => '0',
             'length' => 2,
             ));
        $this->hasColumn('viewing', 'integer', 2, array(
             'type' => 'integer',
             'unsigned' => 1,
             'default' => '0',
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Module', array(
             'local' => 'mod_id',
             'foreign' => 'mod_id'));
    }
}