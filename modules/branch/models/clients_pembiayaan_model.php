<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Pembiayaan Model
 * 
 * @package	amartha
 * @author 	fikriwirawan
 * @since	1 January 2014
 */
 
class clients_pembiayaan_model extends MY_Model {

    protected $table        = 'tbl_pembiayaan';
    protected $key          = 'data_id';
    protected $soft_deletes = true;
    protected $date_format  = 'datetime';
    
    public function __construct()
	{
        parent::__construct();
    }    
	
	public function get_all($limit, $offset, $search='', $key='')
	{
		if($search != '')
		{
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->where('tbl_pembiayaan.deleted','0')
						->like("client_$key",$search)
						->limit($limit,$offset)
						->order_by('client_id','DESC')
						->get()
						->result();
		}else
		{		
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->where('tbl_pembiayaan.deleted','0')
						->limit($limit,$offset)
						->order_by('client_id','DESC')
						->get()
						->result();
		}
	}
	
	public function get_pembiayaan($id)
	{
		$this->db->where('data_id', $id);		
		return $this->db->get($this->table);
	}
	
	public function get_pembiayaan_by_client($id)
	{
		$this->db->where('data_client', $id);		
		return $this->db->get($this->table);
	}
	
	public function get_pembiayaan_aktif($id)
	{
		$this->db->where('data_client', $id)
				 ->where('data_status', '1');		
		return $this->db->get($this->table);
	}
	
	public function get_all_pengajuan($limit, $offset, $search='', $key='')
	{
		if($search != '')
		{
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.deleted','0')
						->like("client_$key",$search)
						->limit($limit,$offset)
						->order_by('data_id','DESC')
						->get()
						->result();
		}else
		{		
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.deleted','0')
						->limit($limit,$offset)
						->order_by('data_id','DESC')
						->get()
						->result();
		}
	}
	
	public function get_all_pengajuan_by_branch($limit, $offset, $search='', $key='', $branch)
	{
		if($search != '')
		{
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->join('tbl_group', 'tbl_group.group_id = tbl_clients.client_group', 'left')
						->where('tbl_clients.client_branch',$branch)
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.deleted','0')
						->like("client_$key",$search)
						->limit($limit,$offset)
						->order_by('data_id','DESC')
						->get()
						->result();
		}else
		{		
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->join('tbl_group', 'tbl_group.group_id = tbl_clients.client_group', 'left')
						->where('tbl_clients.client_branch',$branch)
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.deleted','0')
						->limit($limit,$offset)
						->order_by('data_id','DESC')
						->get()
						->result();
		}
	}
	
	public function count_all_pengajuan_by_branch($search,$branch)
	{
		return $this->db->select("count(*) as numrows")
						->from($this->table)
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->join('tbl_group', 'tbl_group.group_id = tbl_clients.client_group', 'left')
						->where('tbl_clients.client_branch',$branch)
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.deleted','0')
						->like('client_fullname',$search)
						//->or_like('content',$search)
						->get()
						->row()
						->numrows;
	}
	public function count_all_pengajuan($search)
	{
		return $this->db->select("count(*) as numrows")
						->from($this->table)
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->join('tbl_group', 'tbl_group.group_id = tbl_clients.client_group', 'left')
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.deleted','0')
						->like('client_fullname',$search)
						//->or_like('content',$search)
						->get()
						->row()
						->numrows;
	}
	
	public function update_status_pembiayaan($id, $data){
        $this->db->where('data_id', $id);
        $this->db->update($this->table, $data);
    } 
	
	public function get_where_data($table,$where)
	{
			$query=$this->db->get_where($table,$where);
			return $query->result_array();
	}
	
	public function get_all_approved_pengajuan($limit, $offset, $search='', $key='')
	{
		if($search != '')
		{
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.data_status_pengajuan','v')
						->where('tbl_pembiayaan.deleted','0')
						->like("client_$key",$search)
						->limit($limit,$offset)
						->order_by('data_id','DESC')
						->get()
						->result();
		}else
		{		
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.data_status_pengajuan','v')
						->where('tbl_pembiayaan.deleted','0')
						->limit($limit,$offset)
						->order_by('data_id','DESC')
						->get()
						->result();
		}
	}
	
	public function get_all_approved_pengajuan_by_branch($limit, $offset, $search='', $key='', $branch)
	{
		if($search != '')
		{
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->join('tbl_group', 'tbl_group.group_id = tbl_clients.client_group', 'left')
						->where('tbl_clients.client_branch',$branch)
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.data_status_pengajuan','v')
						->where('tbl_pembiayaan.deleted','0')
						->like("client_$key",$search)
						->limit($limit,$offset)
						->order_by('data_id','DESC')
						->get()
						->result();
		}else
		{		
			return $this->db->select('*')
						->from('tbl_pembiayaan')
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->join('tbl_group', 'tbl_group.group_id = tbl_clients.client_group', 'left')
						->where('tbl_clients.client_branch',$branch)
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.data_status_pengajuan','v')
						->where('tbl_pembiayaan.deleted','0')
						->limit($limit,$offset)
						->order_by('data_id','DESC')
						->get()
						->result();
		}
	}
	
	public function count_all_approved_pengajuan_by_branch($search,$branch)
	{
		return $this->db->select("count(*) as numrows")
						->from($this->table)
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->join('tbl_group', 'tbl_group.group_id = tbl_clients.client_group', 'left')
						->where('tbl_clients.client_branch',$branch)
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.deleted','0')
						->like('client_fullname',$search)
						//->or_like('content',$search)
						->get()
						->row()
						->numrows;
	}
	public function count_all_approved_pengajuan($search)
	{
		return $this->db->select("count(*) as numrows")
						->from($this->table)
						->join('tbl_clients', 'tbl_clients.client_id = tbl_pembiayaan.data_client', 'left')
						->join('tbl_group', 'tbl_group.group_id = tbl_clients.client_group', 'left')
						->where('tbl_pembiayaan.data_status','2')
						->where('tbl_pembiayaan.deleted','0')
						->like('client_fullname',$search)
						//->or_like('content',$search)
						->get()
						->row()
						->numrows;
	}
	
	public function update_pencairan($id, $data){
        $this->db->where('data_id', $id);
        $this->db->update($this->table, $data);
    } 
}