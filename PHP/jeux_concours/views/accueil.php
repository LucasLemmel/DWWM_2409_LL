<table class='table table-bordered table-striped '  >


    <?PHP         
        echo "<tr><th>id_user</th>";
        for ($i=0; $i <count($nomCol); $i++)
        { 
            if ($nomCol[$i] != "pass_user")
            {
                echo "<th>". $nomCol[$i] . "</th>";
            }
            
        }
        echo "<th>modification</th></tr>";

        for ($i = 0; $i < count($tabData); $i++)
        {

            echo "<tr>";

            foreach ($tabData[$i] as $key => $value)
            {
                echo "<td>" . $value . "</td>";
            }
            echo "<td><a href='index.php?page=modification&num=".$tabData[$i]["id_user"]."' target='_self'>Modifier</a></td>";
            echo"</tr>";
        }
    ?>

</table>