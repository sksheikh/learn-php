<?php


namespace App\classes;


class Products
{
    public $pdt_ctg_id;
    public $pdt_name;
    public $pdt_price;
    public $pdt_des;
    public $dbPath;
    public $pdt_image;
    public $imgPath;
    public $file;

    public function __construct($post,$files=0)
    {
        $this->pdt_ctg_id = $post['product_category_id'];
        $this->pdt_name = $post['product_name'];
        $this->pdt_price = $post['product_price'];
        $this->pdt_des = $post['product_description'];
       if ($files)
       {
           $this->pdt_image = $files['product_image'];
       }
    }
    public function uploadFile()
    {
        $this->imgPath = 'assets/image/upload/'.$this->pdt_image['name'];
        move_uploaded_file($this->pdt_image['tmp_name'],$this->imgPath);
        return 'uploaded successfully';
    }

    public function saveAllProducts()
    {
       $this->dbPath ='db/db.txt';
       $this->file = fopen($this->dbPath, 'a');
       fwrite($this->file, 'hello world');
       fclose($this->file);
        return $this->uploadFile();
    }

}