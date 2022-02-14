<?php


namespace App\classes;


class Product
{
    protected $allProducts;
    protected $result=[];
    public function index()
    {
        return [
            0 =>[
                'id' =>1,
                'category_id '=> 1,
                'name'=>'Black T-Shirt ',
                'price'=>'500 BDT',
                'description'=>'Description',
                'image'=>'assets/img/img01.jpg',
            ],
            1 =>[
                'id' =>2,
                'category_id '=> 1,
                'name'=>'White T-Shirt',
                'price'=>'300 BDT',
                'description'=>'Description',
                'image'=>'assets/img/img01.jpg',
            ],
            2 =>[
                'id' =>3,
                'category_id '=> 2,
                'name'=>'Red Saree',
                'price'=>'350 BDT',
                'description'=>'Description',
                'image'=>'assets/img/img02.jpg',
            ],
            3 =>[
                'id' =>4,
                'category_id'=> 2,
                'name'=>'Black Saree',
                'price'=>'350 BDT',
                'description'=>'Description',
                'image'=>'assets/img/img02.jpg',
            ],
            4 =>[
                'id' =>5,
                'category_id'=> 3,
                'name'=>'Kids Red T-shirt',
                'price'=>'450 BDT',
                'description'=>'Description',
                'image'=>'assets/img/img03.jpg',
            ],
            5 =>[
                'id' =>6,
                'category_id'=> 3,
                'name'=>'Kids black T-shirt',
                'price'=>'450 BDT',
                'description'=>'Description',
                'image'=>'assets/img/img03.jpg',
            ]
        ];
    }
    public function  shortProducts ($categoryId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['category_id'] == $categoryId)
            {
                array_push($this->result,$product);
            }

        }

      return $this->result;
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