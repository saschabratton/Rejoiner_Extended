<?php
class Rejoiner_Extended_Block_Product extends Rejoiner_Acr_Block_Product
{
    public function getCurrentProductInfo()
    {
        $store = Mage::app()->getStore();
        $storeName = (string) $store->getName();

        $product = parent::getCurrentProductInfo();
        $product = json_decode($product);
        $product['store_name'] = $storeName;

        return str_replace('\\/', '/', json_encode($product));
    }
}
