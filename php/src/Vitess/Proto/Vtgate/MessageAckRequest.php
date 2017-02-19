<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtgate.proto

namespace Vitess\Proto\Vtgate {

  class MessageAckRequest extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Vtrpc\CallerID */
    public $caller_id = null;
    
    /**  @var string */
    public $keyspace = null;
    
    /**  @var string */
    public $name = null;
    
    /**  @var \Vitess\Proto\Query\Value[]  */
    public $ids = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vtgate.MessageAckRequest');

      // OPTIONAL MESSAGE caller_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "caller_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtrpc\CallerID';
      $descriptor->addField($f);

      // OPTIONAL STRING keyspace = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "keyspace";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE ids = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Query\Value';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <caller_id> has a value
     *
     * @return boolean
     */
    public function hasCallerId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <caller_id> value
     *
     * @return \Vitess\Proto\Vtgate\MessageAckRequest
     */
    public function clearCallerId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <caller_id> value
     *
     * @return \Vitess\Proto\Vtrpc\CallerID
     */
    public function getCallerId(){
      return $this->_get(1);
    }
    
    /**
     * Set <caller_id> value
     *
     * @param \Vitess\Proto\Vtrpc\CallerID $value
     * @return \Vitess\Proto\Vtgate\MessageAckRequest
     */
    public function setCallerId(\Vitess\Proto\Vtrpc\CallerID $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <keyspace> has a value
     *
     * @return boolean
     */
    public function hasKeyspace(){
      return $this->_has(2);
    }
    
    /**
     * Clear <keyspace> value
     *
     * @return \Vitess\Proto\Vtgate\MessageAckRequest
     */
    public function clearKeyspace(){
      return $this->_clear(2);
    }
    
    /**
     * Get <keyspace> value
     *
     * @return string
     */
    public function getKeyspace(){
      return $this->_get(2);
    }
    
    /**
     * Set <keyspace> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\MessageAckRequest
     */
    public function setKeyspace( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <name> value
     *
     * @return \Vitess\Proto\Vtgate\MessageAckRequest
     */
    public function clearName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(3);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\MessageAckRequest
     */
    public function setName( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <ids> has a value
     *
     * @return boolean
     */
    public function hasIds(){
      return $this->_has(4);
    }
    
    /**
     * Clear <ids> value
     *
     * @return \Vitess\Proto\Vtgate\MessageAckRequest
     */
    public function clearIds(){
      return $this->_clear(4);
    }
    
    /**
     * Get <ids> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Query\Value
     */
    public function getIds($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <ids> value
     *
     * @param \Vitess\Proto\Query\Value $value
     * @return \Vitess\Proto\Vtgate\MessageAckRequest
     */
    public function setIds(\Vitess\Proto\Query\Value $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <ids>
     *
     * @return \Vitess\Proto\Query\Value[]
     */
    public function getIdsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <ids>
     *
     * @param \Vitess\Proto\Query\Value $value
     * @return \Vitess\Proto\Vtgate\MessageAckRequest
     */
    public function addIds(\Vitess\Proto\Query\Value $value){
     return $this->_add(4, $value);
    }
  }
}
