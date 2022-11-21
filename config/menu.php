<?php
return [
    [
        "icon" => "dashboard",
        "title" => "menu.home",
        "title_small" => "menu.home",
        "path" => "user_home",
        "pathOther" => [],
        "permission" => "ROLE_DASHBOARD_MENU",
        "hr" => true
    ],
     [
         "icon" => "settings",
         "title" => "menu.setting",
         "title_small" => "menu.setting",
         "path" => "users",
         "pathOther" => [
         ],
         "permission" => "ROLE_SETTINGS_MENU",
         "hr" => true
     ]
];
