<?php require_once("../resources/config.php");

if(isset($_GET['add']))
{

   
    redireccion("index.php");

   $query =query("SELECT * FROM productos WHERE prod_id=".escape($_GET['add']));
   confirmacionquery($query);

    while($row =fetch_array($query))
    {
        if($row['prod_cantidad'] != $_SESSION['producto'.$_GET['add']])
        {
            $_SESSION['producto'.$_GET['add']] += 1;     
            redireccion("../public/checkout.php");
   
        }else{
            set_message("NO CONTAMOS CON STOCK SUFICIENTE (".$row['prod_cantidad'].")" );
            redireccion("../public/checkout.php");
        }
    }
}

if(isset($_GET['remover']))
{
    $_SESSION['producto'.$_GET['remover']] --;
    if( $_SESSION['producto'.$_GET['remover']] < 1 )
    {
        redireccion("../public/checkout.php");
    }else
    {
        redireccion("../public/checkout.php");
    }
}

if(isset($_GET['borrar']))
{
    $_SESSION['producto'.$_GET['borrar']]= '0';
   
    redireccion("../public/checkout.php");
    
}

function carrito()
{
    $totalCarrito = 0;
    $totalItems = 0;
    
    foreach($_SESSION as $name => $value)
    {
        
        if($value>0)
        {
            if(substr($name,0,8) == "producto")
            {

                $largo = strlen($value-8);
                $id = substr($name,8,$largo);

                $query = query("SELECT * FROM productos WHERE prod_id=".escape($id)."");
                confirmacionquery($query);
        
                while($row = fetch_array($query))
                {
                    $precio=$row['prod_price'];
                    $subTotal = $value*$precio;
                    
                    $producto = "
                    <tr>
                    <td>{$row['prod_titulo']}</td>
                    <td>{$row['prod_price']}</td>
                    <td>{$value}</td>
                    <td>$ {$subTotal}</td>
            
                    
                    <td>
                        <a class='btn btn-warning p-3' href='../resources/carrito.php?remover={$row['prod_id']}'><span class='glyphicon glyphicon-minus'></span></a>
                        <a  class='btn btn-success p-3' href='../resources/carrito.php?add={$row['prod_id']}'><span class='glyphicon glyphicon-plus'></span></a>
                        <a  class='btn btn-danger p-3' href='../resources/carrito.php?borrar={$row['prod_id']}'><span class='glyphicon glyphicon-remove'></span></a>
            
                    </td>
                    </tr>
                    ";
            
                    echo $producto;

                    $totalCarrito += $subTotal;
                    $totalItems += $value;
                   
                }
            }
        }

        

        
    }

        $totalCuadro = "
         <div class='col-xs-4 pull-right'>
            

            <table class='table table-bordered' cellspacing='0'>

            <tr class='cart-subtotal'>
            <th>Items:</th>
            <td><span class='amount'>  {$totalItems} </span></td>
            </tr>
            <tr class='shipping'>
            <th>Envio</th>
            <td>Envio gratis</td>
            </tr>

            <tr class='order-total'>
            <th>Order Total</th>
            <td><strong><span class='amount'> $ {$totalCarrito} </span></strong> </td>
            </tr>
            
            </tbody>

            </table>

            </div><!-- CART TOTALS-->
        ";

    echo $totalCuadro;
    

    $_SESSION['totalItem'] = $totalItems;
    $_SESSION['totalCosto'] = $totalCarrito;
    
}


?>
  