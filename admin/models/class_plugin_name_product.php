<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Plugin_Name_Product
{
    private $sku;
    private $name;
    private $description;
    private $reg_price;
    private $sale_price;
    private $cost_price;
    private $width;
    private $height;
    private $length;
    private $weight;
    private $visibility;
    private $featured;
    private $stock_status;
    private $period;
    private $gallery;
    private $thumbnail;
    private $stock;
    private $extra_att;
    
    public function __construct() {
        ;
    }
    
    public function get_sku() {
        return $this->sku;
    }

    public function get_reg_price() {
        return $this->reg_price;
    }

    public function get_sale_price() {
        return $this->sale_price;
    }

    public function get_cost_price() {
        return $this->cost_price;
    }

    public function get_width() {
        return $this->width;
    }

    public function get_height() {
        return $this->height;
    }

    public function get_length() {
        return $this->length;
    }

    public function get_weight() {
        return $this->weight;
    }

    public function get_visibility() {
        return $this->visibility;
    }

    public function get_featured() {
        return $this->featured;
    }

    public function get_stock_status() {
        return $this->stock_status;
    }

    public function get_period() {
        return $this->period;
    }

    public function get_gallery() {
        return $this->gallery;
    }

    public function get_thumbnail() {
        return $this->thumbnail;
    }

    public function get_stock() {
        return $this->stock;
    }

    public function get_extra_att() {
        return $this->extra_att;
    }

    public function set_sku($sku) {
        $this->sku = $sku;
    }

    public function set_reg_price($reg_price) {
        $this->reg_price = $reg_price;
    }

    public function set_sale_price($sale_price) {
        $this->sale_price = $sale_price;
    }

    public function set_cost_price($cost_price) {
        $this->cost_price = $cost_price;
    }

    public function set_width($width) {
        $this->width = $width;
    }

    public function set_height($height) {
        $this->height = $height;
    }

    public function set_length($length) {
        $this->length = $length;
    }

    public function set_weight($weight) {
        $this->weight = $weight;
    }

    public function set_visibility($visibility) {
        $this->visibility = $visibility;
    }

    public function set_featured($featured) {
        $this->featured = $featured;
    }

    public function set_stock_status($stock_status) {
        $this->stock_status = $stock_status;
    }

    public function set_period($period) {
        $this->period = $period;
    }

    public function set_gallery($gallery) {
        $this->gallery = $gallery;
    }

    public function set_thumbnail($thumbnail) {
        $this->thumbnail = $thumbnail;
    }

    public function set_stock($stock) {
        $this->stock = $stock;
    }

    public function set_extra_att($extra_att) {
        $this->extra_att = $extra_att;
    }
    
    public function get_name() {
        return $this->name;
    }

    public function get_description() {
        return $this->description;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function set_description($description) {
        $this->description = $description;
    }

    

  
}
