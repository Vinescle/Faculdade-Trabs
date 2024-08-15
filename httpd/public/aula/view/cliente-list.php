<div class="card-body">
    <h5 class="card-title fw-semibold mb-4">Lista</h5>

    <table class="table table-striped table-hover caption-top">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            
            </tr>
        </thead>
        <tbody id="listx">
            <?php
            include_once $controller."clientes-controller.php";
            $res = $ClienteTarefa->searchAll();
            $cont = 1;
            foreach($res as $obj ){   
            ?>
            <tr>
                <th scope="row"><?=$cont?></th>
                <td><?=$obj->nome?></td>
            </tr>
            <?php
                $cont++;
            }
            ?>
        </tbody>
    </table>
</div>


