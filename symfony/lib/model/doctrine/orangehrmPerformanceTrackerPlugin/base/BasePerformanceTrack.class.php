<?php

/**
 * BasePerformanceTrack
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                                               $id                                                     Type: integer(4), primary key
 * @property string                                            $tracker_name                                           Type: string(200)
 * @property int                                               $emp_number                                             Type: integer(4)
 * @property string                                            $added_date                                             Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property string                                            $modified_date                                          Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property int                                               $status                                                 Type: integer(4)
 * @property Employee                                          $Employee                                               
 * @property Doctrine_Collection|PerformanceTrackerLog[]       $PerformanceTrackerLog                                  
 * @property Doctrine_Collection|PerformanceTrackerReviewer[]  $PerformanceTrackerReviewer                             
 *  
 * @method int                                                 getId()                                                 Type: integer(4), primary key
 * @method string                                              getTrackerName()                                        Type: string(200)
 * @method int                                                 getEmpNumber()                                          Type: integer(4)
 * @method string                                              getAddedDate()                                          Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method string                                              getModifiedDate()                                       Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method int                                                 getStatus()                                             Type: integer(4)
 * @method Employee                                            getEmployee()                                           
 * @method Doctrine_Collection|PerformanceTrackerLog[]         getPerformanceTrackerLog()                              
 * @method Doctrine_Collection|PerformanceTrackerReviewer[]    getPerformanceTrackerReviewer()                         
 *  
 * @method PerformanceTrack                                    setId(int $val)                                         Type: integer(4), primary key
 * @method PerformanceTrack                                    setTrackerName(string $val)                             Type: string(200)
 * @method PerformanceTrack                                    setEmpNumber(int $val)                                  Type: integer(4)
 * @method PerformanceTrack                                    setAddedDate(string $val)                               Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method PerformanceTrack                                    setModifiedDate(string $val)                            Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method PerformanceTrack                                    setStatus(int $val)                                     Type: integer(4)
 * @method PerformanceTrack                                    setEmployee(Employee $val)                              
 * @method PerformanceTrack                                    setPerformanceTrackerLog(Doctrine_Collection $val)      
 * @method PerformanceTrack                                    setPerformanceTrackerReviewer(Doctrine_Collection $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePerformanceTrack extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_performance_track');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('tracker_name', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('added_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('modified_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasMany('PerformanceTrackerLog', array(
             'local' => 'id',
             'foreign' => 'performance_track_id'));

        $this->hasMany('PerformanceTrackerReviewer', array(
             'local' => 'id',
             'foreign' => 'performance_track_id'));
    }
}