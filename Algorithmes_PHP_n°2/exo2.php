<?php

$capitales =    
    [
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome"
    ];

function afficherTableauAssociatifHTML(string $keyHeader, string $valueHeader, array $associativeArray) {
    ksort($associativeArray);
    $toDisplay =
        "<table>
            <thead>
                <tr>
                    <th>$keyHeader</th>
                    <th>$valueHeader</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($associativeArray as $key => $value) {
        $toDisplay .=
                "<tr>
                    <td>".mb_strtoupper($key)."</td>
                    <td>".ucfirst($value)."</td>
                </tr>";
    }
    $toDisplay .= 
            "</tbody>
        </table>";
    return $toDisplay ;
}