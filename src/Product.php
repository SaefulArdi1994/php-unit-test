<?php 

namespace webdev\Test;

class Product 
{
    /**
     * @private string $id, $name, $description;
     */
    private string $id;
    private string $name;
    private string $description;

    /**
     * @private int $price, $quantity;
     */
    private string $price;
    private int $quantity;


    public function getId() 
    {
        return $this->id;
    }

    public function setId(string $id) 
    {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

}
