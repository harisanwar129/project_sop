<?php
defined('BASEPATH') or exit('No direct script access allowed');

class item_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->select('item.*, category.name as category_name,unit.name as unit_name');
        $this->db->from('item');
        $this->db->join('category', 'category.category_id = item.category_id');
        $this->db->join('unit', 'unit.unit_id=item.unit_id');
        if ($id != null) {
            $this->db->where('item_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'barcode' => $post['barcode'],
            'name' => $post['product_name'],
            'category_id' => $post['category'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
            'image' => $post['image'],
        ];
        $this->db->insert('item', $params);
    }

    public function edit($post)
    {
        $params = [
            'barcode' => $post['barcode'],
            'name' => $post['product_name'],
            'category_id' => $post['category'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
            'updated' => date('Y-m-d H:i:s')
        ];
        if ($post['image'] != null) {
            $params['image'] = $post['image'];
        }
        $this->db->where('item_id', $post['id']);
        $this->db->update('item', $params);
    }

    function check_barcode($code, $id = null)
    {
        $this->db->from('item');
        $this->db->where('barcode', $code);
        if ($id != null) {
            $this->db->where('item_id !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function del($id)
    {
        $this->db->where('item_id', $id);
        $this->db->delete('item');
    }
}
