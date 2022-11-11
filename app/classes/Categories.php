<?php


namespace App\classes;


class Categories
{
    private $category;

    public function __construct()
    {
        $this->category =[
            0 =>[
                'id'=>1,
                'name'=>'Mens Fashion'
            ],
            1 =>[
                'id'=>2,
                'name'=>'Womens Fashion'
            ],
            2 =>[
                'id'=>3,
                'name'=>'Kids Fashion'
            ]
        ];
    }

    public function getAllCategory()
    {
//        echo '<pre>';
//        print_r($this->category);
        return $this->category;
    }

}