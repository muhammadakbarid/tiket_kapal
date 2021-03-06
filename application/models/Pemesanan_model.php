<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{

    public $table = 'pemesanan';
    public $id = 'id_pemesanan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('id_pemesanan', $q);
        $this->db->or_like('id_user', $q);
        $this->db->or_like('id_jadwal', $q);
        $this->db->or_like('status_pemesanan', $q);
        $this->db->or_like('tanggal_pemesanan', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    function total_rows_kasir($q = NULL, $id_user)
    {
        // $this->db->like('id_pemesanan', $q);
        // $this->db->or_like('id_user', $q);
        // $this->db->or_like('id_jadwal', $q);
        // $this->db->or_like('status_pemesanan', $q);
        // $this->db->or_like('tanggal_pemesanan', $q);
        $this->db->where('id_user', $id_user);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    function total_rows_penumpang($q = NULL, $id_user)
    {
        // $this->db->like('id_pemesanan', $q);
        // $this->db->or_like('id_user', $q);
        // $this->db->or_like('id_jadwal', $q);
        // $this->db->or_like('status_pemesanan', $q);
        // $this->db->or_like('tanggal_pemesanan', $q);
        $this->db->where('id_user', $id_user);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_pemesanan', $q);
        $this->db->or_like('id_user', $q);
        $this->db->or_like('id_jadwal', $q);
        $this->db->or_like('status_pemesanan', $q);
        $this->db->or_like('tanggal_pemesanan', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    function get_limit_data_penumpang($limit, $start = 0, $q = NULL, $id_user)
    {
        $this->db->order_by($this->id, $this->order);
        // $this->db->like('id_pemesanan', $q);
        // $this->db->or_like('id_user', $q);
        // $this->db->or_like('id_jadwal', $q);
        // $this->db->or_like('status_pemesanan', $q);
        // $this->db->or_like('tanggal_pemesanan', $q);
        $this->db->where('id_user', $id_user);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    function get_limit_data_kasir($limit, $start = 0, $q = NULL, $id_user)
    {
        $this->db->order_by($this->id, $this->order);
        // $this->db->like('id_pemesanan', $q);
        // $this->db->or_like('id_user', $q);
        // $this->db->or_like('id_jadwal', $q);
        // $this->db->or_like('status_pemesanan', $q);
        // $this->db->or_like('tanggal_pemesanan', $q);
        $this->db->where('id_user', $id_user);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    // delete bulkdata
    function deletebulk()
    {
        $data = $this->input->post('msg_', TRUE);
        $arr_id = explode(",", $data);
        $this->db->where_in($this->id, $arr_id);
        return $this->db->delete($this->table);
    }
}

/* End of file Pemesanan_model.php */
/* Location: ./application/models/Pemesanan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-03 02:35:23 */
/* http://harviacode.com */