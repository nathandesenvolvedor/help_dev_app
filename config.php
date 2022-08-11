<?php
session_start();

$usuario_autenticado = false;
$user_id = null; 
$usuario_perfil_id = null;

$perfil = array(
    1 => 'administrador',
    2 => 'usuário'
);

$usuarios_app = array(
    array(
    'id' => 1,
    'email' => 'user@adm.com.tech',
    'senha' => '321',
    'perfil_id' => 1
    ),
    array(
        'id' => 2,
        'email' => 'jose@gmail.com',
        'senha' => '147',
        'perfil_id' => 2
    ),
        array(
        'id' => 3,
        'email' => 'maria@gmail.com',
        'senha' => '159',
        'perfil_id' => 2
    )
);

//echo $_POST['email'];
//echo $_POST['senha'];

foreach($usuarios_app as $user){

    if($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']){
       $usuario_autenticado = true;
       $user_id = $user['id'];
       $usuario_perfil_id = $user['perfil_id'];
    }
}

if($usuario_autenticado){
    $_SESSION['autenticado'] = 'true';
    $_SESSION['id'] = $user_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
}else{
     header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'false';
}

?>