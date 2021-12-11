<?php
require_once './models/asset.php';

class AssetController extends Asset{
    
    function getAllAssets(){
        return $this->getAll();
    }

    function getAsset($id){
        return $this->get($id);
    }
}
