<?php
include_once $_SERVER['DOCUMENT_ROOT'] ."/config.php";
?>
<div class="card-body">
    <h5 class="card-title fw-semibold mb-4">Lista</h5>

    <table class="table table-striped table-hover caption-top">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
            
            </tr>
        </thead>
        <tbody id="listx">
            <?php
            include_once $controller."user-controller.php";
            $res = $UserTarefa->searchAll();
            $cont = 1;
            foreach($res as $obj ){   
            ?>
            <tr>
                <th scope="row"><?=$cont?></th>
                <td><?=$obj->name?></td>
                <td>
                    <a class="mouse-pointer" onclick="editar(<?=$obj->id?>)"><i class="bi bi-pencil-square fs-6"></i></a>
                    <a class="mouse-pointer" onclick="del(<?=$obj->id?>, '<?=$obj->name?>.')"><i class="bi bi-trash fs-6"></i></a>
                </td>
            </tr>
            <?php
                $cont++;
            }
            ?>
        </tbody>
    </table>
</div>

<script>
function del(id, nome){
    var res = confirm('Deseja realmente excluir este usuário: \n '+nome+' ?');
    if(res){
        abrir('controller/user-controller.php', {acao: 'delete', id: id} , '#conteudo');
    }
}

function editar(id){
    abrir('view/user-update.php', {id: id} , '#conteudo');
}
</script>


