<?php




/*************************************************BASE DE DATOS FUNCION ***********************************************/

    function set_message($msg)
    {
        if(!empty($msg))
        {
            $_SESSION['message'] = $msg;
        }else{
            $msg ="";
        }
    }

    function get_message()
    {
        if(isset($_SESSION['message']))
        {
           echo $_SESSION['message'];

           unset( $_SESSION['message']);
        }
    }

    function redireccion($location)
    {
        header("Location: $location");
    }

    function query($sql)
    {
        global $conexion;
        return mysqli_query($conexion,$sql);
    }

    function confirmacionquery($result)
    {
        global $conexion;

        if(!$result){
            die("FALLO QUERY ->". mysqli_error($conexion));
        }
    }

    function escape($result)
    {
        global $conexion;

        return mysqli_real_escape_string($conexion,$result);
    }

    function fetch_array($result)
    {
        return mysqli_fetch_array($result);
    }

    /*************************************************FRONT END FUNCION ***********************************************/


    //productos funcion

    function get_productos()
    {
       $query = query("SELECT * FROM productos");
       confirmacionquery($query);
       while($row=fetch_array($query))
       {
          $producto = "
          <div class='col-sm-4 col-lg-4 col-md-4 '>
          <div class='thumbnail container-fluid'>
              <a href='item.php?id={$row['prod_id']}' ><img src='{$row['prod_image']}' alt=''></a>
              <div class='caption'>
                  <h4><a href='item.php?id={$row['prod_id']}'>".$row['prod_titulo']."</a>     
                  <h4 >  &#36; {$row['prod_price']}</h4>
                    
                  </h4>
                  <a class='btn btn-success p-3 pull-right' target='_self' href='../resources/carrito.php?add={$row['prod_id']}'>Comprar ahora</a>

                    </div>
                </div>
            </div>
            ";

        echo $producto;
       }
    }



    function get_categorias()
    {
       $query = query("SELECT * FROM categorias");
       confirmacionquery($query);
       while($row = mysqli_fetch_array($query))
       {
        $categoria = " <a href='categorias.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_titulo']} </a>";
        echo $categoria;
       }
    }

    function get_categorias2()
    {
       $query = query("SELECT * FROM categorias WHERE cat_id=".escape($_GET['id'])." ");
       confirmacionquery($query);
       while($row = mysqli_fetch_array($query))
       {
        echo $row['cat_titulo'];
       }
    }

    function get_productos_categoria()
    {
        $query = query("SELECT productos.*, categorias.cat_titulo AS cat_titulo from productos INNER JOIN 
                categorias ON productos.prod_categoria_id=categorias.cat_id WHERE prod_categoria_id=".escape($_GET['id'])."");
    
   
        confirmacionquery($query);
        while($row=fetch_array($query)){

            $producto = "
            <div class='col-md-3 col-sm-6 hero-feature'>
            <div class='thumbnail'>
                <img src='{$row['prod_image']}' alt=''>
                <div class='caption'>
                    <h3>{$row['prod_titulo']}</h3>
                    <p>
                    <a class='btn btn-success p-3 pull-right' target='_self' href='../resources/carrito.php?add={$row['prod_id']}'>Comprar ahora</a>
                    </p>
                </div>
            </div>
            </div>
                ";

            echo $producto;

        }        
    }

    function login_user()
    {
        if(isset($_POST['submit']))
        {
           $username = ($_POST['usuario']);
           $password = ($_POST['password']);

           $query = query("SELECT * FROM usuarios WHERE username ='{$username}' AND user_pass ='$password'");

           
            confirmacionquery($query);

            if(mysqli_num_rows($query)== 0)
            {
                set_message("Su usuario o contraseña no son correctos");
                redireccion("login.php");
            }
            else{
                $_SESSION['username'] = $username;  //para seguridad del admin code
                
                redireccion("admin\index.php");
            }
        }
    }


    function send_message()
    {
        if(isset($_GET['submit']))
        {
            $para = "pvalentinuzzi14@gmail.com";
            $name=$_GET['name'];
            $email=$_GET['email'];
            $telefono=$_GET['telefono'];
            $msg=$_GET['mensaje'];

            //$headers ="From: {$name} {$email}";

           // $result = mail($para,$telefono,$msg,$headers);

            if(true)
            {
                echo "ERROR";
            }else
            {
                echo "Mensaje enviado con exito !";
            }

        }
    }
    

    /*************************************************BACK END FUNCION ***********************************************/

    function mostrarOrdenes()
    {
        $query = query("SELECT * FROM ordenes");
        confirmacionquery($query);

        while ($row = fetch_array($query))
        {
            $ordenes = "
            <tr>
            <td> {$row['orden_id']} </td>
            <td> {$row['orden_precio']} </td>
            <td> {$row['orden_estado']}  </td>


            <td>
            <a  class='btn btn-success p-3' href='../../resources/templates/back/confirm_orden.php?id={$row['orden_id']}'><span class='glyphicon glyphicon-check'></span></a>
            <a  class='btn btn-warning p-3' href='../../resources/templates/back/corregir_orden.php?id={$row['orden_id']}'><span class='glyphicon glyphicon-random'></span></a>
            <a  class='btn btn-danger p-3' href='../../resources/templates/back/borrar_orden.php?id={$row['orden_id']}'><span class='glyphicon glyphicon-remove'></span></a>

            </td>

            </tr>

            ";

            echo $ordenes;
        }
    }

    function mostrarProductos()
    {
        $query = query("SELECT productos.*, categorias.cat_titulo AS cat_titulo from productos INNER JOIN 
        categorias ON productos.prod_categoria_id=categorias.cat_id");
        confirmacionquery($query);

        while ($row = fetch_array($query))
        {
            $producto = "
            <tr>
            <td> {$row['prod_id']} </td>  
            <td> {$row['prod_titulo']} </td>
            <td> {$row['cat_titulo']} </td>
            <td> {$row['prod_price']} </td>
            <td> {$row['prod_descrip']} </td>
            <td> {$row['prod_cantidad']} 
            <td>
            <a  class='btn btn-danger p-3' href='../../resources/templates/back/borrar_producto.php?id={$row['prod_id']}'><span class='glyphicon glyphicon-remove'></span></a>
            </td>
            
            </tr>

            ";

            echo $producto;
        }
    }

    

    






?>

