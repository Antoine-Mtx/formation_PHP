<?php

$capitales2 = 
    [
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
        "Espagne" => "Madrid"
    ];

function afficherTableauAssociatifHTML2(string $keyHeader, string $valueHeader, string $linkHeader, array $associativeArray) {
    ksort($associativeArray);
    $toDisplay =
        "<table>
            <thead>
                <tr>
                    <th>$keyHeader</th>
                    <th>$valueHeader</th>
                    <th>$linkHeader</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($associativeArray as $key => $value) {
        $toDisplay .=
                "<tr>
                    <td>".mb_strtoupper($key)."</td>
                    <td>".ucfirst($value)."</td>
                    <td>".afficherLienHypertexte("Lien","https://fr.wikipedia.org/wiki/$value")."</td>
                </tr>";
    }
    $toDisplay .= 
            "</tbody>
        </table>";
    return $toDisplay ;
}