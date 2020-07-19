<a href="index.php?page=add-product">Add Product</a>
<table>
    <tr>
        <th> Product STT</th>
        <th> Product name</th>
        <th> Product Price</th>
        <th></th>
    </tr>

    <?php foreach($products as $key=>$product ) : ?> 
        <tr>
            <td><?php echo $product->getId() ?></td>
            <td><?php echo $product->getName() ?></td>
            <td><?php echo $product->getPrice() ?></td>
            <td><a href="index.php?page=edit-product&id=<?php echo $product->getId()?>">Edit</a><a href="">Delete</a></td>
        </tr>

    <?php endforeach;?> 

</table>