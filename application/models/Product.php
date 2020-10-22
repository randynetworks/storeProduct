<?

class Product extends CI_Model {

    public function get_all()
    {
            $query = $this->db->get('products')->result_array();
            return $query;
    }
    public function inputData($data, $table)
    {
        return $this->db->insert($table, $data);
    }
    public function deleteData($id, $table)
    {
        $this->db->delete($table, ['id' => $id]);
    }


}