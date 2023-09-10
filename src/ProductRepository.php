<?php 

namespace webdev\Test;

interface ProductRepository 
{
    function save(Product $product);
    function delete(Product $product);
    function findById(string $id);
    function findAll();
}
