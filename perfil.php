<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <style type="text/css">

            #imagem{
                float: left;
            }

            body{
                background-color: #e8eaf6;

            }
        </style>
    </head>

<body>
<?php

    $dados_pessoais = array(
        'img' => 'https://i.pinimg.com/236x/17/37/90/173790415cff34d3f515ccb9d936d64a.jpg',
        'Nome' => '<h3>Rodrigo S. Lima</h3>',
        'Apelido' => '<h3>Rod</h3>',

    );

    $dados_locais = array(
        'Rua' => 'Rua D',
        'N°_da_casa' => '320',
        'Bairro' => 'Bonfim',
        'Cidade' => 'Palmas de M. Alto',

    );

    $dado_escolares = array(
        'Email' => 'digocnn84@Gmail.com',
        'Curso' => 'Informática',
        'Disciplinas' => array('Webdesing', 'Banco de Dados', 'Projeto Integrador', 'Análise de Sistemas'),

    );

    echo ('<img src=' . $dados_pessoais['img'] . ' id="imagem">');
    echo ('<br>');
    echo ('<h4>Nome:</h4>' . $dados_pessoais['Nome']);
    echo ('<h4>Apelido:</h4>' . $dados_pessoais['Apelido']);

    echo ('<br>');
    echo ('<br>');


    echo ('<h4>Endereço:</h4>');
    echo ('Rua: ' . $dados_locais['Rua']);
    echo ('<br>');
    echo ('N° da casa: ' . $dados_locais['N°_da_casa']);
    echo ('<br>');
    echo ('Bairro: ' . $dados_locais['Bairro']);
    echo ('<br>');
    echo ('Cidade: ' . $dados_locais['Cidade']);

    echo ('<br>');
    echo ('<br>');

    echo('<h4>Dados:</h4>');
    echo ('E-mail: ' . $dado_escolares['Email']);
    echo ('<br>');
    echo ('Curso: ' . $dado_escolares['Curso']);
    echo ('<br>');
    echo ('<h4>Disciplinas</h4>');
    echo ($dado_escolares['Disciplinas'][0]);
    echo ('<br>');
    echo ($dado_escolares['Disciplinas'][1]);
    echo ('<br>');
    echo ($dado_escolares['Disciplinas'][2]);
    echo ('<br>');
    echo ($dado_escolares['Disciplinas'][3]);

?>
</body>
</html>