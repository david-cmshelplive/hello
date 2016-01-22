<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class_plugin_name_user
 *
 * @author cmshelplive
 */
class class_plugin_name_user 
{
    
    private $name;
    private $password;
    private $address;
    private $email;
    private $contact_number;
    
    public function get_name() {
        return $this->name;
    }

    public function get_password() {
        return $this->password;
    }

    public function get_address() {
        return $this->address;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_contact_number() {
        return $this->contact_number;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function set_password($password) {
        $this->password = $password;
    }

    public function set_address($address) {
        $this->address = $address;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function set_contact_number($contact_number) {
        $this->contact_number = $contact_number;
    }
    
}
