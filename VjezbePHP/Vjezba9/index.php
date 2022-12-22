<?php

$date=date_create();

    if(date_format($date,"N") > 0 && date_format($date,"N") < 6)
    {
        if (date_format($date,"H:i") >= "08:00" && date_format($date,"H:i") <= "20:00")
        {
            echo "Otvoren";
        }
        else
        {
            echo "Zatvoren";
        }
    }
    
    elseif(date_format($date,"N") == 6)
    {
        if (date_format($date,"H:i") >= "09:00" && date_format($date,"H:i") <= "14:00")
        {
            echo "Otvoren";
        }
        else
        {
            echo "Zatvoren";
        }
    }
    
    else
    {
        echo "Zatvoren";
    }




?>