<?php
function encontrarAlunoMaiorMedia($alunos)
{
    $maiorMedia = -1;
    $dadosAlunoMaiorMedia = [];

    foreach ($alunos as $matricula => $dados) {
        if ($dados['media'] > $maiorMedia) {
            $maiorMedia = $dados['media'];
            $dadosAlunoMaiorMedia = [
                'matricula' => $matricula,
                'nome' => $dados['nome'],
                'media' => $dados['media'],
            ];
        }
    }

    return $dadosAlunoMaiorMedia;
}

$alunos = [
    $_POST['matricula1'] => [
        'nome' => $_POST['nome1'],
        'media' => $_POST['media1'],
    ],
    $_POST['matricula2'] => [
        'nome' => $_POST['nome2'],
        'media' => $_POST['media2'],
    ],
    $_POST['matricula3'] => [
        'nome' => $_POST['nome3'],
        'media' => $_POST['media3'],
    ],
];

$alunoMaiorMedia = encontrarAlunoMaiorMedia($alunos);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aluno com Maior Média</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="cartao tabela">
        <h1>Aluno com maior média</h1>

        <table>
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nome</th>
                    <th>Média final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo number_format($alunoMaiorMedia['matricula'], 0, ',', '.'); ?></td>
                    <td><?php echo $alunoMaiorMedia['nome']; ?></td>
                    <td><?php echo number_format($alunoMaiorMedia['media'], 2, ',', '.'); ?></td>
                </tr>
            </tbody>
        </table>

        <a href="index.html">Cadastrar outros alunos</a>
    </main>
</body>

</html>
