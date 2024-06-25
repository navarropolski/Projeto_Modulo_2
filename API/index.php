<?php
$jogos = [
    [
        "id" => "darklegacy",
        "img" => "imagens/darklegacy.jpg",
        "url" => "/jogo/darklegacy",
        "descricao" => "descrição do jogo",
        "url_steam" => "https://projeto-jogo-blush.vercel.app/index3.html"
    ],
    [
        "id" => "labfygize",
        "img" => "imagens\labfygizelogo.jpg",
        "url" => "/jogo/darklegacy",
        "descricao" => "LabFy Gize",
        "url_steam" => "https://projeto-jogo-blush.vercel.app/index3.html"
    ]
];

echo json_encode($jogos);
