<?php

namespace Solcre\Mariamia\Service;

use Exception;
use \Solcre\Mariamia\Entity\ProductEntity;
use Solcre\SolcreFramework2\Service\BaseService;

class ProductService extends BaseService {
          
    public function add($data, $strategies = null){
        
      $product = $this->repository->ProductExists($data); 
      if($product > 0)
      {
          throw new Exception("Product already exists", 409);   
      } 
      else 
      {
        return parent::add($data, $strategies);
      }
    }
    
    public function put($id, $data){
        
        $product = parent::fetch($id);
        if($product instanceof ProductEntity){
           
            $product->setName($data['name']);
            $product->setType($data['type']);
            $product->setThc($data['thc']);
            $product->setCbd($data['cbd']);
            $product->setDescription($data['description']);
            
            $isProduct = $this->repository->ProductExistsWithOtherId($id, $data);
            
            if($isProduct > 0)
            {
               throw new Exception("ProductEntity already exists", 404); 
            }
            else
            {
                $this->entityManager->flush();
                return $product;
            }
            
        }
    }
}
