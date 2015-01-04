<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Chelsea Schedule Model
 * 
 * @package	bni4id
 * @author 	andriansandi
 * @since	17 December 2012
 */
class schedule_model extends MY_Model {

    protected $table        = 'fixtures';
    protected $key          = 'id';
    protected $soft_deletes = true;
    protected $date_format  = 'datetime';
    
    public function __construct(){
        parent::__construct();
    }
    
}