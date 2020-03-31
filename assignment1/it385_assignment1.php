<html>
    <style>
        #head {
            Background-color:black;
            color:white;
            font-size:120%;
        }
        #misc {
            text-align:center; 
            padding:5px;
        }
    </style>
<body>
<table border='1'>

    <pre>
<?php
$trucks = array(
    array(
        "KrAZ", "Kremenchuk", "Ukraine",
        array(
            array("KrAZ-65055", "6x6", "330Hp"),
            array("KrAZ-6130C4", "6x6", "330Hp"),
            array("KrAZ-5133H2", "4x2", "330Hp"),
            array("KrAZ-7140H6", "8x6", "400Hp")
        )
    ),
    array(
        "EBIAM", "Thessaloniki", "Greece",
        array(
            array("EBIAM MVM", "4x4", "86Hp")
        )
    ),
    array(
        "KaMAZ", "Naberezhnye Chelny", "Tatarstan",
        array(
            array("KAMAZ 54115", "6x4", "240Hp"),
            array("KAMAZ 6560", "8x8", "400Hp"),
            array("KAMAZ 5460", "8x8", "340Hp")
        )
    ),
    array("LIAZ", "Rynovice", "Czechoslovakia", array(
        array("LIAZ 706 RT", "2x4", "160Hp")
    )),
    array(
        "IRUM", "Brasov", "Romania",
        array(
            array("TAF 690", "2x4", "90Hp")
        )
    ),
    array(
        "MAZ", "Minsk", "Belarus",
        array(
            array("MAZ 535", "8x8", "375Hp"),
            array("MAZ 7310", "8x8", "525Hp"),
            array("MAZ 7907", "4x12", "1250Hp"),
            array("MAZ 6317", "6x6", "425Hp"),
            array("MAZ 6430", "6x6", "360Hp"),
            array("MAZ 5551", "4x2", "160Hp")
        )
    ),
    array(
        "BelAz", "Zohodino", "Belarus",
        array(
            array("Belaz 75600", "4x4", "3400Hp")
        )
    ),
    array(
        "Oshkosh", "Oshkosh", "USA",
        array(
            array("Oshkosh P-15", "8x8", "840Hp"),
            array("Oshkosh MK-36", "6x6", "425Hp")
        )
    ),
    array(
        "Tatra", "Koprivnice", "Czechoslovakia",
        array(
            array("Tatra T 813", "4x4", "266Hp"),
            array("Tatra T 815", "10x10", "436Hp"),
        )
    )
);

echo "<tr id='head'><th>Manufacturer</th><th>Brand</th><th>Country</th><th>Misc</th>";
foreach ($trucks as $truck) {
    if($struck[2]='Belarus'){
        echo "<tr style='background:black;'>";
    }else{
        echo "<tr style='background:#fed;'>";        
    }
    echo "<tr>";
    echo "<td style='font-weight:bold;'>".$truck[0]."</td>";
    echo "<td style='font-weight:bold;'>".$truck[1]."</td>";
    echo "<td style='font-weight:bold;'>".$truck[2]."</td>";
    echo "<td>";
    echo "<table>";
    echo "<tr style='text-decoration: underline;'><th>Model</th><th>drive shafts</th><th>Horsepowers</th></tr>";
    foreach ($truck[3] as $brand){
        echo "<tr>";
        echo "<td id='misc'>".$brand[0]."</td>";  
        echo "<td id='misc'>".$brand[1]."</td>";
        echo "<td id='misc'>".$brand[2]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</td>";
    echo "</tr>";
}
?>
</pre>
</body>

</html>