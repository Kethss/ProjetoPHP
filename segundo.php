<?php
$data = "20 de agosto de 2020";
$salario = 850.00;
$cargo = "Estagiário";

echo "Arquivo criado em $data <br/>";
printf ("Salário mínimo:  R$ %.2f <br/>", $salario);
$texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);
echo $texto;
?>