<?php
if (!$_POST['data_nascimento']){
    echo "1|-|Informe a sua data de nascimento corretamente!";
}
else{
    $dataConfere = date('m-d', strtotime($_POST['data_nascimento']));
    $signos = simplexml_load_file("signos.xml");
        foreach ($signos as $key => $value){
            $vet = explode('/', $value->dataInicio);
            $dataInicio = date('m-d', strtotime("2024-".$vet[1]."-".$vet[0]));
            $vet = explode('/', $value->dataFim);
            $dataFim = date('m-d', strtotime("2024-".$vet[1]."-".$vet[0]));
            if ($value->nomeSigno != 'Capricórnio'){
                if ($dataConfere >= $dataInicio && $dataConfere <= $dataFim){
                    $nomeSigno = $value->nomeSigno;
                    $descricao = $value->descricao;
                }
            }
            else{
                if ($dataConfere >= $dataInicio || $dataConfere <= $dataFim){         
                    $nomeSigno = $value->nomeSigno;
                    $descricao = $value->descricao;
                }
            }
        }
    ?>
    1|-|<h1><?=$nomeSigno?></h1>
<p><?=$descricao?></p>
<?php 
}
?>