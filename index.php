<?php
echo "Exemplo  \n";
$nota1 = readline("Digite a nota 1: ");
$nota2 = readline("Digite a nota 2: ");
$nota3 = readline("Digite a nota 3: ");
$nota4 = readline("Bigite a nota 4: ");
$media = ($nota1 + $nota2 + $nota3 + $nota4)/ 4;
$freq = readline("Digite sua Frequencia: ");

echo "Sua media é Media = $media";

if($media >= 6 && $frequencia >= 75){
    echo "Aluno Aprovado!";
}
elseif($media <= 6 && $frequencia >= 75){
    echo "Aluno Reprovado por Nota!";
    
    $notaR = readline("Digite a nota de recuperação");
    $mediaf = $media + $notaR;
    if($mediaf > 5){
        echo "Você foi Aprovado";
    }else{
        echo "Reprovado, nós vemos ano que vem";
    }
}
elseif($media >= 6 && $frequencia <= 75){
    echo "Aluno Reprovado por Falta, nada pode ser feito!";
}
else{
}

?>