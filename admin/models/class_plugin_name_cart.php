<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author cmshelplive
 */

class plugin_name_cart 
{
    private $product_count;
    private $total_price;
    private $total_discount;
    private $taxes;
    private $shipping_charge;
    private $product_array;
    
    public function get_product_count() {
        return $this->product_count;
    }

    public function get_total_price() {
        return $this->total_price;
    }

    public function get_total_discount() {
        return $this->total_discount;
    }

    public function get_taxes() {
        return $this->taxes;
    }

    public function get_shipping_charge() {
        return $this->shipping_charge;
    }

    public function get_product_array() {
        return $this->product_array;
    }

    public function set_product_count($product_count) {
        $this->product_count = $product_count;
    }

    public function set_total_price($total_price) {
        $this->total_price = $total_price;
    }

    public function set_total_discount($total_discount) {
        $this->total_discount = $total_discount;
    }

    public function set_taxes($taxes) {
        $this->taxes = $taxes;
    }

    public function set_shipping_charge($shipping_charge) {
        $this->shipping_charge = $shipping_charge;
    }

    public function set_product_array($product_array) {
        $this->product_array = $product_array;
    }


    
}
