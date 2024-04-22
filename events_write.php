<?php
    $fnev = "events.txt";
    $tomb = feldolgoz($fnev);
    foreach($tomb as $sor){
        echo "<div class='concert' onclick='location.href=".$sor->href.";' >
        <h3>".$sor->name."</h3>
        <p>
            Időpont: <i>".$sor->date."</i><br>
            Helyszín: <i>".$sor->place."</i><br>
            Belépő: <i>".$sor->prise."</i>
        </p>
    </div>";
    }
    class TanuloOsztaly
    {
        public $name, $date, $place, $prise, $href;
        public function __construct($sor)
        {
            $sv = explode(";",$sor);
            $this->name = $sv[0];
            $this->date = $sv[1];
            $this->place = $sv[2];
            $this->prise = $sv[3];
            $this->href = $sv[4];
        }
    }
    function feldolgoz($fnev)
    {
        $tomb = [];//ürestömb
        $f = fopen($fnev, "r"); //file megnyitás
        if($f!==false)
        {
            while(!feof($f)) // filemutató, azt vizsgálja, hogy elértünk-e a fájl végére
            {
                $tomb[] = new TanuloOsztaly(fgets($f));
            }
        }
        else{
            return false;
        } 
        fclose($f); //file bezárás  
        return $tomb;
    }
?>