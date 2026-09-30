<?php 
include 'conexionp.php';
if(isset($_POST['add_to_cart'])){
    $productos_name=$_POST['product_name'];
    $productos_price=$_POST['product_price'];
    $productos_image=$_POST['product_image'];
     $productos_quantity=1;

     //select cart data based on condition
    $select_cart = mysqli_query($conex, "SELECT * FROM carrito WHERE nombre='$productos_name'");
     if(mysqli_num_rows($select_cart)>0){
 $display_message[]="Producto listo para añadir al carrito";

     }else{
        // insert cart data in cart table
    $insert_productos=mysqli_query($conex, "INSERT INTO carrito (nombre, precio, imagen, quantity)  values
    ('$productos_name', '$productos_price' , '$productos_image', '$productos_quantity')");
 $display_message[]="Producto añadido al carrito";
     }


    
}


?>




<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>

 </head>
    <!-- css file -->
  <link rel="stylesheet" href="style_index.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
 <body>
    <!-- header -->
    <?php include 'header.php'?>
   


    <div  class="container">
         <?php 
  if (isset($display_message)){
    foreach ($display_message as $display_message) {
    echo "<div class='display_message'>
    <span>$display_message</span>
    <i class= 'fas fa-times' onClick='this.parentElement.style.display=´none´';></i>
   </div>";
   }

  }
?>


        <section class ="products">
            <h1 class ="heading">Vamos a Comprar</h1>
            <div class = "product_container">
                <?php
$select_productos = mysqli_query($conex, "SELECT * FROM productos");
if (mysqli_num_rows ($select_productos)>0) {
   while($fetch_product=mysqli_fetch_assoc($select_productos)){
    //echo $fetch_product['nombre'];
    ?>
<form method="post" action="">
                <div class="edit_form">
                    <img src="imagenes/<?php echo $fetch_product['imagen'] ?>" alt="">
                    <h3><?php echo $fetch_product['nombre'] ?></h3>
                    <div class="price">Precio: <?php echo $fetch_product ['precio'] ?></div>
                    <input type="hidden" name= "product_name" value=" <?php echo $fetch_product['nombre'] ?>">
                    <input type="hidden" name= "product_price" value="<?php echo $fetch_product ['precio'] ?>" >
                    <input type="hidden" name="product_image"  value="<?php echo $fetch_product['imagen'] ?>" >
                    <input type="submit" class ="submit_btn cart_btn" value="Añadir al Carro" name="add_to_cart">
                </div>
</form>
<?php
   }
}else{
    echo "<tr><td colspan='7'>No hay productos disponibles.</td></tr>";
}


?>
                
            </div>
        </section>
    </div>
 </body>
 </html>