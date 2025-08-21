<?php 

$data = json_decode(file_get_contents("php://input"), 1);

$pontuacao = 0;

if (isset($data['um']) && strtolower(trim($data['um'])) == "paris") $pontuacao++;

if (isset($data['dois']) && trim($data['dois']) == "40") $pontuacao++;

if (isset($data['tres']) && strtolower(trim($data['tres'])) === "áfrica") $pontuacao++;

if (isset($data['quatro']) && strtolower(trim($data['quatro'])) === "júpiter") $pontuacao++;

if (isset($data['cinco']) && strtolower(trim($data['cinco'])) === "iene") $pontuacao++;

if (isset($data['seis']) && strtolower(trim($data['seis'])) === "alemanha") $pontuacao++;

if (isset($data['sete']) && strtolower(trim($data['sete'])) === "oxigênio") $pontuacao++;

if (isset($data['oito']) && trim($data['oito']) === "26") $pontuacao++;

if (isset($data['nove']) && strtolower(trim($data['nove'])) === "leonardo da vinci") $pontuacao++;

if (isset($data['dez']) && strtolower(trim($data['dez'])) === "everest") $pontuacao++;

if (isset($data['onze']) && strtolower(trim($data['onze'])) === "charles darwin") $pontuacao++;

if (isset($data['doze']) && strtolower(trim($data['doze'])) === "miguel de cervantes") $pontuacao++;

if (isset($data['treze']) && trim($data['treze']) === "1969") $pontuacao++;

if (isset($data['quatorze']) && strtolower(trim($data['quatorze'])) === "rio de janeiro") $pontuacao++;

if (isset($data['quinze']) && strtolower(trim($data['quinze'])) === "alumínio") $pontuacao++;

if (isset($data['dezesseis']) && strtolower(trim($data['dezesseis'])) === "george washigton") $pontuacao++;

if (isset($data['dezessete'])){
    $acertos = 0;
    foreach ($data['dezessete'] as $nome) {
        if(strtolower(trim($nome)) == 'karl marx' || strtolower(trim($nome)) == 'vladimir lenin' || strtolower(trim($nome)) == 'joseph stalin') $acertos++;
        else $acertos--;
    }
    if($acertos == 3) $pontuacao++;
}


exit(json_encode(['code' => 200, 'pontuacao' => $pontuacao]));