<?php 
$_ENV = parse_ini_file('.env');

include_once './pages/header.html';

$conexao = new PDO("mysql:host={$_ENV['HOST']};dbname={$_ENV['DATABASE']}", $_ENV['USER'], $_ENV['PASSWORD']);
$query = "SELECT * FROM tb_produto";
$produtos = $conexao->query($query)->fetchAll();

include './pages/produto.php';


// $produtos = [
    //     [
//         'titulo' => 'Baldur\'s Gate 3',
//         'preco' => 290.00,
//         'avaliacao' => 3,
//         'poster' => 'baldurs-gate-3.jpg'
//     ],
//     [
//         'titulo' => 'Death Stranding',
//         'preco' => 139.00,
//         'avaliacao' => 2,
//         'poster' => 'death-stranding.png'
//     ],
//     [
//         'titulo' => 'Jedi Survivor',
//         'preco' => 139.00,
//         'avaliacao' => 5,
//         'poster' => 'jedi-survivor.png'
//     ],
//     [
//         'titulo' => 'Baldur\'s Gate 3',
//         'preco' => 290.00,
//         'avaliacao' => 3,
//         'poster' => 'baldurs-gate-3.jpg'
//     ],
//     [
//         'titulo' => 'Death Stranding',
//         'preco' => 139.00,
//         'avaliacao' => 2,
//         'poster' => 'death-stranding.png'
//     ],
//     [
//         'titulo' => 'Jedi Survivor',
//         'preco' => 139.00,
//         'avaliacao' => 5,
//         'poster' => 'jedi-survivor.png'
//     ],
//     [
//         'titulo' => 'Baldur\'s Gate 3',
//         'preco' => 290.00,
//         'avaliacao' => 3,
//         'poster' => 'baldurs-gate-3.jpg'
//     ],
//     [
//         'titulo' => 'Death Stranding',
//         'preco' => 139.00,
//         'avaliacao' => 2,
//         'poster' => 'death-stranding.png'
//     ]
// ];

// include './pages/produto.php';