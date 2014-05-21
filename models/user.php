<?php

Class User extends CI_Model {

    function login($username, $password) {
        $this->db->select('user_id, nickname, password');
        $this->db->from('users');
        $this->db->where('nickname', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getUsers() {
        $this->db->select('user_id , nickname, first_name , last_name , address , city, postcode, bio');
        $this->db->from('users');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $result[] = array(
                    "id" => $row->user_id,
                    "cell" => array(
                        0 => $row->user_id,
                        1 => $row->nickname,
                        2 => $row->first_name,
                        3 => $row->last_name,
                        4 => $row->address,
                        5 => $row->city,
                        6 => $row->postcode,
                        7 => $row->bio
                    ),
                );
            }


            return array(
                "rows" => $result
            );
        } else {
            return false;
        }
    }

    public function addUser() {
        $pData = $this->input->post();
        //return $pData["firstName"];

        $DBdata = array(
            'nickname' => isset($pData["Nickname"]) == true ? $pData["Nickname"] : "N/A",
            'first_name' => isset($pData["Firstname"]) == true ? $pData["Firstname"] : "N/A",
            'last_name' => isset($pData["Lastname"]) == true ? $pData["Lastname"] : "N/A",
            'address' => isset($pData["Street"]) == true ? $pData["Street"] : "N/A",
            'city' => isset($pData["City"]) == true ? $pData["City"] : "N/A",
            'postcode' => isset($pData["Postcode"]) == true ? $pData["Postcode"] : "N/A",
            'bio' => isset($pData["Bio"]) == true ? $pData["Bio"] : "N/A",
            'password' => isset($pData["Password"]) == true ? MD5($pData["Password"]) : "N/A"
        );

        $this->db->insert('users', $DBdata);
    }

    public function editUser() {
        $pData = $this->input->post();
        //return $pData["firstName"];

        $DBdata = array(
            'nickname' => isset($pData["Nickname"]) == true ? $pData["Nickname"] : "N/A",
            'first_name' => isset($pData["Firstname"]) == true ? $pData["Firstname"] : "N/A",
            'last_name' => isset($pData["Lastname"]) == true ? $pData["Lastname"] : "N/A",
            'address' => isset($pData["Street"]) == true ? $pData["Street"] : "N/A",
            'city' => isset($pData["City"]) == true ? $pData["City"] : "N/A",
            'postcode' => isset($pData["Postcode"]) == true ? $pData["Postcode"] : "N/A",
            'bio' => isset($pData["Bio"]) == true ? $pData["Bio"] : "N/A",
            'password' => isset($pData["Password"]) == true ? MD5($pData["Password"]) : "N/A"
        );

        $this->db->where('user_id', $pData["id"]);
        $this->db->update('users', $DBdata);
        return true;
    }

    public function delUser() {
        $pData = $this->input->post();
        $this->db->where('user_id', $pData["id"]);
        $this->db->delete('users');
    }

}
?>

