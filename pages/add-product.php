<?php include 'includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-bg-dark">
                        <h3 class="text-center ">Add products</h3>
                    </div>
                    <div class="card-body">
                        <span class="text-success"><?php  echo  isset($product)?$product : ''?></span>
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Category</label>
                                <div class="col-md-8">
                                    <select name="product_category_id" id="" class="form-control">
                                        <option value="">Select a category</option>
                                        <?php foreach ($category as $categories){?>
                                        <option value="<?php echo $categories['id'] ?>"><?php echo $categories['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Price</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_price" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Description</label>
                                <div class="col-md-8">
                                    <textarea name="product_description" id=""  rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="product_image" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-outline-success" value="Add product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
