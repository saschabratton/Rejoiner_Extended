<?php
class Rejoiner_Extended_Block_Conversion extends Rejoiner_Acr_Block_Conversion
{
    public function getCartItems()
    {
        $store = Mage::app()->getStore();
        $storeName = (string) $store->getName();

        $items = parent::getCartItems();
        foreach ($items as &$item) {
            $item['store_name'] = $storeName;
        }
        unset($item);

        return $items;
    }
}
