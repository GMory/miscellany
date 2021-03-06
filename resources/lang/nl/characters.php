<?php

return [
    'actions'       => [
        'add_appearance'    => 'Voeg een uiterlijk toe',
        'add_organisation'  => 'Voeg een organisatie toe',
        'add_personality'   => 'Voeg een persoonlijkheid toe',
    ],
    'conversations' => [
        'description'   => 'Conversaties waaraan het personage deelneemt.',
        'title'         => 'Personage :name Conversaties',
    ],
    'create'        => [
        'description'   => 'Maak een nieuw personage',
        'success'       => 'Personage \':name\' gemaakt.',
        'title'         => 'Nieuw Personage',
    ],
    'destroy'       => [
        'success'   => 'Personage \':name\' verwijderd',
    ],
    'dice_rolls'    => [
        'description'   => 'Dobbelsteen worpen toegewezen aan het personage.',
        'hint'          => 'Dobbelsteen worpen kunnen worden toegewezen aan een personage voor in het spel.',
        'title'         => 'Personage :name Dobbelsteen Worpen',
    ],
    'edit'          => [
        'description'   => 'Wijzig een personage',
        'success'       => 'Personage \':name\' bijgewerkt.',
        'title'         => 'Wijzig Personage :name',
    ],
    'fields'        => [
        'age'                       => 'Leeftijd',
        'family'                    => 'Familie',
        'image'                     => 'Afbeelding',
        'is_dead'                   => 'Dood',
        'is_personality_visible'    => 'Persoonlijkheid zichtbaar',
        'life'                      => 'Leven',
        'location'                  => 'Locatie',
        'name'                      => 'Naam',
        'physical'                  => 'Fysiek',
        'race'                      => 'Ras',
        'relation'                  => 'Relatie',
        'sex'                       => 'Geslacht',
        'title'                     => 'Titel',
        'traits'                    => 'Eigenschappen',
        'type'                      => 'Type',
    ],
    'helpers'       => [
        'age'   => 'Je kunt deze entiteit koppelen aan een kalender van je campaign om in plaats daarvan automatisch hun leeftijd te berekenen. :more.',
    ],
    'hints'         => [
        'is_dead'                   => 'Dit personage is dood',
        'is_personality_visible'    => 'Schakel deze optie uit om het hele persoonlijkheidsgedeelte te verbergen voor niet-beheerders.',
        'personality_not_visible'   => 'Persoonlijkheidskenmerken van dit personage zijn momenteel alleen zichtbaar voor Beheerders',
        'personality_visible'       => 'Persoonlijkheidskenmerken van dit personage zijn voor iedereen zichtbaar.',
    ],
    'index'         => [
        'actions'       => [
            'random'    => 'Nieuw Willekeurig Personage',
        ],
        'add'           => 'Nieuw Personage',
        'description'   => 'Beheer de personages van :name.',
        'header'        => 'Personages in :name',
        'title'         => 'Personages',
    ],
    'items'         => [
        'description'   => 'Items die in het bezit zijn van of eigendom zijn van het personage.',
        'hint'          => 'Voorwerpen kunnen worden toegewezen aan personages en worden hier weergegeven.',
        'title'         => 'Personage :name Voorwerpen',
    ],
    'journals'      => [
        'description'   => 'Logboeken waarvan het personage een auteur is.',
        'title'         => 'Personage :name Logboeken',
    ],
    'maps'          => [
        'description'   => 'Relatie kaart voor een personage',
        'title'         => 'Personage :name Relatie Kaart',
    ],
    'organisations' => [
        'actions'       => [
            'add'   => 'Voeg organisatie toe',
        ],
        'create'        => [
            'description'   => 'Koppel een organisatie aan een personage',
            'success'       => 'Personage toegevoegd aan organisatie.',
            'title'         => 'Nieuwe Organisatie voor :name',
        ],
        'description'   => 'Organisaties waar het personage deel van uitmaakt.',
        'destroy'       => [
            'success'   => 'Personage organisatie verwijderd.',
        ],
        'edit'          => [
            'description'   => 'Werk de organisatie van een personage bij',
            'success'       => 'Personage organisatie bijgewerkt.',
            'title'         => 'Werk organisatie voor :name bij',
        ],
        'fields'        => [
            'organisation'  => 'Organisatie',
            'role'          => 'Rol',
        ],
        'hint'          => 'Personages kunnen deel uitmaken van veel organisaties, die vertegenwoordigen voor wie ze werken of van welk geheime samenleving ze deel uitmaken.',
        'placeholders'  => [
            'organisation'  => 'Kies een organisatie...',
        ],
        'title'         => 'Personage :name Organisaties',
    ],
    'placeholders'  => [
        'age'               => 'Leeftijd',
        'appearance_entry'  => 'Beschrijving',
        'appearance_name'   => 'Haar, Ogen, Huid, Lengte',
        'family'            => 'Selecteer een personage',
        'image'             => 'Afbeelding',
        'location'          => 'Selecteer een locatie',
        'name'              => 'Naam',
        'personality_entry' => 'Details',
        'personality_name'  => 'Doelen, Manieren, Angsten, Verplichtingen',
        'physical'          => 'Fysiek',
        'race'              => 'Ras',
        'sex'               => 'Geslacht',
        'title'             => 'Titel',
        'traits'            => 'Eigenschappen',
        'type'              => 'NPC, Speler Personage, Godheid',
    ],
    'quests'        => [
        'description'   => 'Quests waar een personage deel van uitmaakt.',
        'helpers'       => [
            'quest_giver'   => 'Quests waarvan het personage een quest gever is.',
            'quest_member'  => 'Quests waarvan het personage lid is.',
        ],
        'title'         => 'Personage :name Quests',
    ],
    'sections'      => [
        'appearance'    => 'Uiterlijk',
        'general'       => 'Algemene informatie',
        'personality'   => 'Persoonlijkheid',
    ],
    'show'          => [
        'description'   => 'Een gedetailleerd overzicht van een personage',
        'tabs'          => [
            'conversations' => 'Conversaties',
            'dice_rolls'    => 'Dobbelsteen Worpen',
            'items'         => 'Voorwerpen',
            'journals'      => 'Logboeken',
            'map'           => 'Relatie Kaart',
            'organisations' => 'Organisaties',
            'personality'   => 'Persoonlijkheid',
            'quests'        => 'Quests',
        ],
        'title'         => 'Personage :name',
    ],
    'warnings'      => [
        'personality_hidden'    => 'Het is niet toegestaan om persoonlijkheidskenmerken van dit personage te bewerken.',
    ],
];
