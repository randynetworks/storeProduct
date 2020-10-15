<?

class Product extends CI_Model {


public function get_all()
{
        $query = $this->db->get('products')->result_array();
        return $query;
}

}