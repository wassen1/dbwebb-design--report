<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",
 
    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Dagens bloggar",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Skridskor",
                        "url" => "blogg/dagens-bild-1",
                        "title" => "Skridskor.",
                    ],
                    [
                        "text" => "Segelfartyg",
                        "url" => "blogg/dagens-bild-2",
                        "title" => "Segelfartyg.",
                    ],
                    [
                        "text" => "Moped",
                        "url" => "blogg/dagens-bild-3",
                        "title" => "Moped.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom10.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapporter",
            "url" => "rapport",
            "title" => "Rapporttexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färgschema",
                        "url" => "rapport/fargschema",
                        "title" => "Färgschema.",
                    ],
                    [
                        "text" => "Laddningstid",
                        "url" => "rapport/laddningstid",
                        "title" => "Laddningstid.",
                    ],
                    [
                        "text" => "Designprinciper utvärdering",
                        "url" => "rapport/designprincip",
                        "title" => "Designprinciper utvärdering.",
                    ],
                    [
                        "text" => "Designelement",
                        "url" => "rapport/designelement",
                        "title" => "Designelement.",
                    ],
                    [
                        "text" => "Designprinciper",
                        "url" => "rapport/designprinciper",
                        "title" => "Designprinciper.",
                    ],
                    [
                        "text" => "Designtrender",
                        "url" => "rapport/webbplatsdesign",
                        "title" => "Designtrender.",
                    ],
                    [
                        "text" => "Prestanda",
                        "url" => "rapport/design-och-webbplatser",
                        "title" => "Prestanda.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Testsida",
            "url" => "test",
            "title" => "Min fina testsida",
        ],
    ],
];
