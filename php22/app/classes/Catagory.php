<?php


namespace App\classes;


class Catagory
{

    public function category ()
    {
        return[
            0 =>[
                'id'=>1,
                'name'=>'Man fashion',
            ],
            1 =>[
                'id'=>2,
                'name'=>'Woman fashion',
            ],
            3 =>[
                'id'=>3,
                'name'=>'Kids fashion',
            ]
        ];
    }

    public function  getProductDetails ($productID)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['id'] == $productID)
            {
                return $product;
            }
        }
    }
}