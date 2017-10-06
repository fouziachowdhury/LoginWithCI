<?php

class MemberModel extends CI_Model {

    function __construct() {

        parent::__construct();
    }

    public function userlogin($data) {
        $query = $this->db->query("SELECT * FROM member WHERE (`email` = '" . $data['email'] . "' AND `password` = '" . $data['password'] . "')");
        $var = $query->result();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $session = array(
                    'member_id' => $row->id,
                    'email' => $row->email
                );
                    $return = 1;
            }
        } else {
            $return = 0;
        }

        return $return;
    }

}
