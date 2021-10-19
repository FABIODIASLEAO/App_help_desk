
<?php
  session_start();

// variavel que verifica se usuario do sistema foi autenticado
$usuario_autenticado= false;

//usuario do sistema  
 $usuarios_app=[
   ['email'=> 'adm@teste.com.br', 'senha' => '123456'],
   ['email'=> 'user@teste.com.br', 'senha' => 'abcd'],
 ];
 
  foreach($usuarios_app as $user){
     if($user['email'] == $_POST['email'] && $user['senha'] ==  $_POST['senha']){
        $usuario_autenticado= true;
     }
    }

     if($usuario_autenticado){
    
     $_SESSION['autenticado']='SIM';
       header('Location: home.php');

   
    }else{
         $_SESSION['autenticado']='NÃO';
      header('Location: index.php?login=erro');
   
     }
  


 
 //  echo '<pre>';
 //  print_r($usuarios_app);
 //  echo '<pre />';
 //  echo '<pre>';
 //  print_r($_GET);
 //  echo '<pre />';
 
?>