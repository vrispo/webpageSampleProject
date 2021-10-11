<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" media="screen" href="./screenstyle.css"/>
        <link rel="stylesheet" href="destination.css"/>
        
        <title>Destination</title>
    </head>
    <body>
        <div class="cities">
        <?php 
            include './dbconfig.php';

            $query_destination = "SELECT * FROM destinations";
            $res_destination = mysqli_query($connessione, $query_destination)
                    or die("Query destination fallita". mysql_error());
            $num_dest = mysqli_num_rows($res_destination);

            $elemento = array();

            for($i = 0 ; $i < $num_dest ; $i++){
                $row = mysqli_fetch_assoc($res_destination);
                $query_cities = "SELECT * FROM cities WHERE id_city =".$row['id_city'];
                $res_cities = mysqli_query($connessione, $query_cities)
                        or die("Query cities fallita". mysql_error());
                $num_cities = mysqli_num_rows($res_cities);   
                $city = mysqli_fetch_assoc($res_cities);

                $elemento[0] = $city['name'];
                $photo = $city['photo_name'];
                $percorso = <<<DH
                 './Images/$photo.png'
                DH;
                $DIVimg = <<<DH
                 <div class="image" style="background-image: url($percorso)"></div>
                DH; 
                $elemento[1] = $percorso;
                $elemento[2] = $city['descr'];
                $elemento[3] = $row['trip'];
                $elemento[4] = $row['food'];
                $elemento[5] = $row['hotel'];
                $costo = "".$row['cost'];
                if($city['id_currency'] == 0){
                    $costo .= "&euro;";
                }else{
                    $costo .= "&pound;";
                }                           
                $elemento[6] = $costo;
                $distanza = $city['distance']." Kms";
                $elemento[7] = $distanza;
                $durata = "approx ".$row['nights']." night ".$row['days']." day trip";
                $elemento[8] = $durata;

                echo "<div class='city'>";
                    echo $DIVimg;
                    echo "<div class='name'>".$elemento[0]."</div>";
                    echo "<div class='description'>".$elemento[2]."</div>";
                    echo "<div class='info1'>";
                        echo "<div class='servizi'>";
                            if($elemento[3] == 1){
                                echo "<img src='./Images/Raggruppa 19.png'></img>";  
                            }
                            if($elemento[4] == 1){
                                echo "<img src='./Images/Raggruppa 19.png'></img>";  
                            }
                            if($elemento[5] == 1){
                                echo "<img src='./Images/Raggruppa 19.png'></img>";  
                            }
                        echo "</div>";
                        echo "<div class='costo'>".$elemento[6]."</div>";
                    echo "</div>";
                    echo "<div class='info2'>";
                        echo "<div class='dist'>".$elemento[7]."</div>";
                        echo "<div class='tempo'>".$elemento[8]."</div>";
                    echo "</div>";
                echo "</div>";
            }
        ?>                    
        </div>
    </body>
</html>
