<?php
    include('verificar_logado.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            include('link_head.html');
        ?>
        <title>Mensagens</title>
        <link rel="stylesheet" href="css/email.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <?php
            include('menu2.php');
        ?>
        <div class="banner">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="text-center fonte_branca texto_sombra"><strong>Mensagens</strong></h1> 
                    <p class="text-center fonte_branca texto_sombra">
                        <?php include('texto_banner_msg.php'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="panel sombra">
                        <div class="header_menu  bg_cinza_escuro">
                            <img src="img/perfil_icon.png" alt="" class="img-circle img-responsive">
                        </div>  
                        <?php
                            include('menu_msg.php');
                        ?>                      
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="" method="POST" class="no-radius">
                        <div class="input-group input-group-lg bg_branco sombra mg_bt">
                            <input type="text"  name="pesquisa_texto" class="form-control bg_branco_w sem_borda" placeholder="Pesquisar pessoa ou email" aria-describedby="pesquisar">
                            <span class="input-group-btn" id="pesquisar">
                                <button type="submit" name="pesquisar_btn" class="btn btn-lg bg_branco_w sem_borda"><span class="glyphicon glyphicon-search fonte_azul_escuro" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </form>
                    <div class="mg_bt">
                        <div>
                            <button onclick="location.href='escrever_mensagem.php'" class="btn bg_azul_escuro fonte_branca" href="escrever_mensagem.php">Escrever Mensagem <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            <form action="#" method="POST">
                                <button type="submit" class="btn bg_azul_escuro fonte_branca" name="ext">Limpar Caixa <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                            </form>
                            <?php
                                if (isset($_POST['ext'])) {
                                    $sqlup='update mensagem set favorito_env="F",excluido_env="V" where (id_enviar='.$con['id_usuario'].' AND favorito_env="V");';
                                    mysqli_query($conexao,$sqlup);
                                    $sqlup='update mensagem set favorito_rec="F",,excluido_rec="V" where (id_receber='.$con['id_usuario'].' AND favorito_env="V");';
                                    mysqli_query($conexao,$sqlup);
                                    echo('<script>swal("Itens excluídos com sucesso", "", "success");</script>');
                                }
                            ?>
                        </div>
                    </div>
                                <?php
                                     $sqlsel='select * from mensagem where (((id_receber="'.$con['id_usuario'].'") AND (excluido_rec="F")) AND ((id_receber="'.$con['id_usuario'].'") AND (favorito_rec="V"))) OR (((id_enviar="'.$con['id_usuario'].'") AND (excluido_env="F")) AND ((id_enviar="'.$con['id_usuario'].'") AND (favorito_env="V")) AND ((id_enviar="'.$con['id_usuario'].'") AND (rascunho="F")));';
                                    
                                    $resul=mysqli_query($conexao,$sqlsel);
                                    echo
                                    ('
                                        <div class="bg_branco cx_em sombra">
                                    ');
                                    if(mysqli_num_rows($resul))
                                    {
                                        while ($con_msg=mysqli_fetch_array($resul))
                                        {
                                           $sqlsel='select * from usuario where id_usuario="'.$con_msg['id_enviar'].'";';
                                            $resul2=mysqli_query($conexao,$sqlsel);
                                            $con_nick=mysqli_fetch_array($resul2);
                                            echo 
                                            ('
                                                <a href="conteudo_msg.php?msg='.$con_msg['id_mensagem'].'" >
                                                    <div class="panel bg_branco_w mg_bt">
                                                        <div class="panel-body">
                                                            <div class="col-xs-2 col-sm-1">
                                                                <img src="img/perfil_icon.png" alt="" class="img-circle img_env">
                                                            </div>
                                                            <div class="col-xs-2 col-sm-3">
                                                                <h4 class="fonte_cinza_escuro nome_user">De: <strong>'.$con_nick['nick'].'</strong></h4>
                                                                <p class="fonte_cinza_claro">'.$con_msg['assunto'].'</p>
                                                            </div>
                                                            <div class="col-xs-offset-2 col-sm-offset-2 col-xs-6">
                                                               <a class="btn sem_bg borda_azul fonte_azul_claro mg_btn" href="mensagens_fav.php?fav_1='.$con_msg['id_mensagem'].'">Desfavoritar Mensagem <span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
                                                                <a class="btn sem_bg borda_azul fonte_azul_claro mg_btn" href="mensagens_fav.php?ex_1='.$con_msg['id_mensagem'].'">Apagar Mensagem <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                                           <p class="col-xs-offset-11">
                                           '); 
                                            if ($con_msg['view']=="F") {
                                                echo
                                                ('
                                                            <i class="fa fa-eye-slash" aria-hidden="true"></i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                ');
                                            }
                                            if ($con_msg['view']=="V") {
                                                echo
                                                ('
                                                            <i class="fonte_azul_claro fa fa-eye" aria-hidden="true"></i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                ');
                                            }
                                            if (isset($_GET['fav_1']))
                                            {
                                                $fav=$_GET['fav_1'];
                                                $sqlup='update mensagem set favorito_env="F" where id_enviar='.$con['id_usuario'].' AND id_mensagem='.$fav.'';
                                                mysqli_query($conexao,$sqlup);
                                                $sqlup='update mensagem set favorito_rec="F" where id_receber='.$con['id_usuario'].' AND id_mensagem='.$fav.'';
                                                mysqli_query($conexao,$sqlup);
                                                echo('<script>swal("Item desfavoritado com sucesso", "", "success");</script>');
                                                echo('<script>window.location="mensagens_fav.php";</script>');
                                            }
                                            if (isset($_GET['ex_1'])) 
                                            {
                                                $ex=$_GET['ex_1'];
                                                $sqlup='update mensagem set excluido_env="V" where id_enviar='.$con['id_usuario'].' AND id_mensagem='.$ex.'';
                                                mysqli_query($conexao,$sqlup);
                                                $sqlup='update mensagem set excluido_rec="V" where id_receber='.$con['id_usuario'].' AND id_mensagem='.$ex.'';
                                                mysqli_query($conexao,$sqlup);
                                                echo('<script>swal("Item excluído com sucesso", "", "success");</script>');
                                                echo('<script>window.location="mensagens_exc.php";</script>');
                                            }
                                        }
                                            
                                    }
                                    else{
                                        echo('<h4>Você não possui mensagens no momento</h4>');
                                    }
                                    echo
                                    ('
                                        </div>
                                    ');
                                ?>    
                                
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
            include('rodape.html');
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>