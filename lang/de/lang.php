<?php

return [
    'plugin' => [
        'name' => 'Xitara Nexus',
        'description' => 'Nexus-Plugin für alle Xitara-Plugins, inkl. Backend Seitenmenü',
        'author' => 'Xitara, Manuel Burghammer',
        'homepage' => 'https://xitara.com',
    ],
    'submenu' => [
        'label' => 'Xitara Nexus',
    ],
    'nexus' => [
        'mainmenu' => 'Hauptmenü',
        'dashboard' => 'Dashboard',
        'menu' => 'Menü-Sortierung',
    ],
    'settings' => [
        'label' => 'Grundeinstellungen',
        'description' => 'Einstellungen global für alle Plugins',
    ],
    'install' => [
        'heading' => 'Installation des Xitara Nexus nicht abgeschlossen',
        'text' => 'Vor Beginn müssen einige Grundeinstellungen abgeschlossen werden.',
        'button' => 'Einstellungen',
    ],
    'custommenu' => [
        'label' => 'Benutzerdefinierte Menüs',
        'name' => 'Name',
        'is_submenu' => 'Im Seitenmenü anzeigen',
        'is_active' => 'Aktiv',
        'links' => 'Links',
        'link' => 'Link',
        'text' => 'Text',
        'is_blank' => 'Link im neuen Fenster/Tab öffnen',
        'icon' => 'Icon',
        'icon_comment' => 'Entweder aus dem <a href="https://octobercms.com/docs/ui/icon" target="_blank">Iconpool</a> oder eine Datei aus dem Medienpool. Beides ist optional.',
    ],
    'deleteAccount' => [
        'label' => 'Account löschen',
        'comment' => 'Der Account wird deaktiviert. Anschliessend ist kein Login mehr möglich. Nach 14 Tagen wird der Account unwiderruflich gelöscht.',
        'confirm' => 'Wollen Sie ihren Account wirklich löschen?',
    ],
];
