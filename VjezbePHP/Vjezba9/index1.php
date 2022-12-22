<?php

function ducan($stanje = "otvoren")
{
    $date = new DateTimeImmutable();
    if($date->format('N') > 0 && $date->format('N') < 6)
    {
        if($date->format('H:i') >= '08:00' && $date->format('H:i') <= '20:00')
        {
            echo "Ducan je $stanje.";
        }
        else
        {
            $stanje = "zatvoren";
            echo "Ducan je $stanje.";
        }
    }
    elseif($date->format('N') == 6)
    {
        if($date->format('H:i') >= '09:00' && $date->format('H:i') <= '14:00')
        {
            echo "Ducan je $stanje.";
        }
        else
        {
            $stanje = "zatvoren";
            echo "Ducan je $stanje.";
        }
    }
    else
    {
        $stanje = "zatvoren";
        echo "Ducan je $stanje.";
    }
    
}
ducan();

?>