<?php

$b = array(
    ///////////////////////////////////A
    "Aadi",
    "Abril",
    "Ace",
    "Aletta",
    "Alex",
    "Axel",
    ///////////////////////////////////B
    "Baka",
    "Ban",
    "Baker",
    "Banjo",
    "Bali",
    "Bert",
    "Blythe",
    ///////////////////////////////////C
    "Cactus",
    "Cali",
    "Cal",
    "Chip",
    "Ciel",
    "Clark",
    "Connor",
    "Czar",
    ///////////////////////////////////D
    "Dan",
    "Darrel",
    "Dax",
    "Dell",
    "Diane",
    "Disco",
    "Draco",
    "Dwight",
    ///////////////////////////////////E
    "Ed",
    "Earl",
    "Egor",
    "Eli",
    "Emily",
    "Eric",
    "Ever",
    "Ezra",
    ///////////////////////////////////F
    "Falcon",
    "Felt",
    "Fifi",
    "Flip",
    "Fred",
    "Friday",
    "Freedom",
    ///////////////////////////////////G
    "Gale",
    "Gabe",
    "Gang",
    "Gatlin",
    "Gary",
    "Geo",
    "Gerard",
    "Glen",
    "Gore",
    "Gus",
    "Guy",
    "Gwen",
    ///////////////////////////////////H
    "Haf",
    "Hal",
    "Harry",
    "Harper",
    "Hector",
    "Henri",
    "Honey",
    "Hop",
    "Hosa",
    "Hugo",
    ///////////////////////////////////I
    "Ice",
    "Igor",
    "Iggy",
    "Ily",
    "Ilse",
    "Imir",
    "Inna",
    "Ises",
    "Ivo",
    ///////////////////////////////////J
    "Jade",
    "Jelle",
    "Jiraya",
    "Juno",
    "Justin",
    "Juri",
    "Juli",
    ///////////////////////////////////K
    "Kali",
    "Kai",
    "Kaito",
    "Kato",
    "King",
    "Kitty",
    ///////////////////////////////////L
    "Lacy",
    "Lake",
    "Lee",
    "Lisa",
    "Liz",
    "Lotte",
    ///////////////////////////////////M
    "Maddock",
    "Mai",
    "Mario",
    "Mark",
    "Matty",
    "Mello",
    "Meme",
    "Mia",
    "Mike",
    "Mirai",
    "Mitty",
    "Mo",
    ///////////////////////////////////N
    "Nana",
    "Nate",
    "Neil",
    "Nell",
    "Nick",
    "Nir",
    "Noah",
    "Nuke",
    ///////////////////////////////////O
    "Oba",
    "Oliver",
    "Olaf",
    "Onyx",
    "Ozzy",
    ///////////////////////////////////P
    "Pablo",
    "Pan",
    "Pieter",
    "Pink",
    "Pluto",
    ///////////////////////////////////Q
    "Quilla",
    "Qwin",
    ///////////////////////////////////R
    "Rain",
    "Ram",
    "Raven",
    "Rem",
    "Renee",
    "Rick",
    "Roxy",
    ///////////////////////////////////S
    "Sadi",
    "Saki",
    "Sal",
    "Sam",
    "Sanne",
    "Shelly",
    ///////////////////////////////////T
    "Tai",
    "Tam",
    "Theo",
    ///////////////////////////////////U
    "Umi",
    "Ura",
    "Uzi",
    ///////////////////////////////////V
    "Vail",
    "Vade",
    "Varro",
    "Veroica",
    "Victor",
    ///////////////////////////////////W
    "Wade",
    "Walt",
    "Wanda",
    "Wies",
    "Wouter".
    ///////////////////////////////////X
    "Xaria",
    "Xara",
    "Xio",
    "Xiong",
    ///////////////////////////////////Y
    "Yaal",
    "Yan",
    "Yaoi",
    "Yeet",
    "Yuri",
    ///////////////////////////////////Z
    "Zabuza",
    "Zack",
    "Zain",
    "Zan",
    "Zara",
    "Zorro",
    "Zulu",
);

$w = $_REQUEST["w"];

$hint = "";

if ($w !== "") {
    $w = strtolower($w);
    $len=strlen($w);
    foreach($b as $name) {
        if (stristr($w, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                 $hint .= ", $name";
            }
        }
    }
}


echo $hint === "" ? "no suggestion" : $hint;