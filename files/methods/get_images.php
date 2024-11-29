 <html>

 
    <?php
        include "conn.php";
        
        // Dados a ser buscado no banco de dados
        $itens_por_pagina = 9;
        $pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
        $offset = ($pagina_atual - 1) * $itens_por_pagina;

        $sql = "SELECT * FROM files LIMIT $offset, $itens_por_pagina ";
        $query = $conn->query($sql);

        //Faz a busca do número de resultados no banco de dados
        $count = $query->rowCount();

        if($count > 0){
            echo "<div class='container-teste'>";
            while($results = $query->fetch(PDO::FETCH_ASSOC)){
                $imglink = str_replace("..", "/projetos/img_uploader/files", $results['nome']);
                echo "<div class='image-box'>";   
                echo "<img src=$imglink class='block'>";
                echo "<br>";
                echo "</div>";   
            };
            // include "a.php";
            echo "</div>";

            // ##########################
            // PAGINAÇÃO
            $result = $conn->query($sql);

            $total_itens = $conn->query("SELECT COUNT(*) AS total FROM files")->fetch(PDO::FETCH_ASSOC)['total'];
            $total_paginas = ceil($total_itens / $itens_por_pagina);

            $inicio = max(1, $pagina_atual - 1);
            $fim = min($total_paginas, $pagina_atual + 1);

            ?>

            <div id="paginacao">
            <?php if($pagina_atual > 1): ?>
                <a href="?pagina=<?php echo $pagina_atual - 1; ?>"> <<</a>
            <?php endif; ?>
    
            <?php for($i = $inicio; $i <= $fim; $i++): ?>
                <a href="?pagina=<?php echo $i; ?>" class="<?php echo ($i == $pagina_atual) ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>
    
            <?php if($pagina_atual < $total_paginas): ?>
                <a href="?pagina=<?php echo $pagina_atual + 1; ?>">>> </a>
            <?php endif; ?>
        </div>
                <!-- FIM PAGINAÇÃO -->


        <?php

            $conn = null;
        }else{
            echo "Nenhuma imagem encontrada";
        }

    ?>

</html>