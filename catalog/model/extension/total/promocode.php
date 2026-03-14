<?php
class ModelExtensionTotalPromocode extends Model{
    public function getPromo($code){
        $promo_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "promocode WHERE code = '" . $this->db->escape($code) . "' AND status_promocode = 1");
                                        // SELECT promocode FROM      oc          promocode WHERE code = "gdfsg" AND

        if ($promo_query->num_rows) {
             return $promo_query->row;
        }
        return false;
    }
}