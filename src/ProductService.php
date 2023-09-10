<?php 

namespace webdev\Test;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {
        
    }

    public function register(Product $product)
    {
        if($this->repository->findById($product->getId()) != null)
        {
            throw new \Exception("Product is already exists");
        }

        return $this->repository->save($product);
    }
}
