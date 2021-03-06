<?php

return [
    'create'        => [
        'description'   => 'Criar um novo jornal',
        'success'       => 'Jornal criado.',
        'title'         => 'Criar novo jornal',
    ],
    'destroy'       => [
        'success'   => 'Jornal removido',
    ],
    'edit'          => [
        'success'   => 'Jornal atualizado',
        'title'     => 'Editar Jornal :name',
    ],
    'fields'        => [
        'author'    => 'Autor',
        'date'      => 'Data',
        'image'     => 'Imagem',
        'journal'   => 'Jornal Principal',
        'journals'  => 'Jornais secundários',
        'name'      => 'Nome',
        'relation'  => 'Relação',
        'type'      => 'Tipo',
    ],
    'helpers'       => [
        'journals'  => 'Mostrar todos ou somente os jornais secundários deste Jornal',
        'nested'    => 'Mostrando Jornais sem jornais secundários primeiro. Clique em uma linha para explorar os jornais secundários de um Jornal.',
    ],
    'index'         => [
        'add'           => 'Novo Jornal',
        'description'   => 'Gerencie os jornais de :name.',
        'header'        => 'Jornais de :name',
        'title'         => 'Jornais',
    ],
    'journals'      => [
        'title' => 'Jornais secundários do Jornal :name',
    ],
    'placeholders'  => [
        'author'    => 'Quem escreveu o jornal',
        'date'      => 'Data do jornal',
        'journal'   => 'Escolha um Jornal Principal',
        'name'      => 'Nome do jornal',
        'type'      => 'Sessão, One Shot, Rascunho',
    ],
    'show'          => [
        'description'   => 'Uma visão detalhada de um jornal',
        'tabs'          => [
            'journals'  => 'Jornais',
        ],
        'title'         => 'Jornal :name',
    ],
];
