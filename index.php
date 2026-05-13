<?php
echo "Exemplo  \n";
$nota1 = readline("Digite a nota da primeira prova: ");
$nota2 = readline("Digite a nota da segunda prova: ");
$nota3 = readline("Digite a nota da terceira prova: ");
$nota4 = readline("Bigite a nota da quarta prova: ");
$media = ($nota1 + $nota2 + $nota3 + $nota4)/ 4;
$freq = readline("Digite Frequência: ");

echo "Sua media é = $media";

if($media >= 6 && $freq >= 75){
    echo "Aluno Aprovado!";
}
elseif($media <= 6 && $freq >= 75){
    echo "Aluno Reprovado por Nota!";
    
    $notaR = readline("Digite a nota de recuperação:");
    $mediaf = $media + $notaR;
    if($mediaf > 5){
        echo "Voce foi Aprovado";
    }else{
        echo "Reprovado, nós vemos ano que vem! :3";
    }
}
elseif($media >= 6 && $freq <= 75){
    echo "Aluno Reprovado por Falta!Lamento nada pode ser feito";
}
else{
}

?>