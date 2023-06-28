function nic_lanka($insered_nic) {
  $str = trim($insered_nic);

  if (strlen($str) == 10) {
    $nic = trim($str, "V");

    $arr2 = str_split($nic, 5);

    $nic1 = $arr2[0];
    $nic2 = $arr2[1];
    $nic3 = "19".$nic1."0".$nic2;

  } elseif (strlen($str) == 12) {
    $nic4 = substr($str, 0, 2);

    if ($nic4 == "19") {
      $nic = substr($str, 2, 5);
      $nic1 = substr($str, 8, 12);

      $nic3 = $nic . $nic1 . "V";
    } elseif ($nic4 == "20") {
      $nic3 = $str;
    }

  }
  return $nic3;
}

function es_birthday_calc($nic3)
{
    if (strlen($_POST['nic']) == 10) {
        $year = "19" . substr($nic3, 0, 2);

        if (substr($nic3, 2, 3) > 500) {
            $days = substr($nic3, 2, 3) - 500;
        } else {
            $days = substr($nic3, 2, 3);
        }
    } elseif (strlen($_POST['nic']) == 12) {
        $year = substr($nic3, 0, 4);
        
        if (substr($nic3, 4, 3) > 500) {
            $days = substr($nic3, 4, 3) - 500;
        } else {
            $days = substr($nic3, 4, 3);
        }
    }    

    if ($year % 400 === 0) {
        $feb = 29;
    } elseif ($year % 100 === 0) {
        $feb = 28;
    } elseif ($year % 4 === 0) {
        $feb = 29;
    } else {
        $feb = 28;
    }

    if ($days <= 31) {
        // Jannuary
        $date_set = $year ."-"."1"."-".intval($days);
        $date = date($date_set);
    } elseif ($days > 31 && $days <= 31 + $feb) {
        // February
        $date_set = $year ."-"."2"."-".intval($days - 31);
        $date = date($date_set);
    } elseif ($days > 31 + $feb && $days <= $feb + 62) {
        // March
        $date_set = $year ."-"."3"."-".intval($days - (31 + $feb));
        $date = date($date_set);
    } elseif ($days > 62 + $feb && $days <= $feb + 92) {
        // April
        $date_set = $year ."-"."4"."-".intval($days - (62 + $feb));
        $date = date($date_set);
    } elseif ($days > 92 + $feb && $days <= $feb + 123) {
        // May
        $date_set = $year ."-"."5"."-".intval($days - (92 + $feb));
        $date = date($date_set);
    } elseif ($days > 123 + $feb && $days <= $feb + 153) {
        // June
        $date_set = $year ."-"."6"."-".intval($days - (123 + $feb));
        $date = date($date_set);
    } elseif ($days > 153 + $feb && $days <= $feb + 184) {
        // July
        $date_set = $year ."-"."7"."-".intval($days - (153 + $feb));
        $date = date($date_set);
    } elseif ($days > 184 + $feb && $days <= $feb + 215) {
        // Augest
        $date_set = $year ."-"."8"."-".intval($days - (184 + $feb));
        $date = date($date_set);
    } elseif ($days > 215 + $feb && $days <= $feb + 245) {
        // September
        $date_set = $year ."-"."9"."-".intval($days - (215 + $feb));
        $date = date($date_set);
    } elseif ($days > 245 + $feb && $days <= $feb + 276) {
        // October
        $date_set = $year ."-"."10"."-".intval($days - (245 + $feb));
        $date = date($date_set);
    } elseif ($days > 276 + $feb && $days <= $feb + 306) {
        // November
        $date_set = $year ."-"."11"."-".intval($days - (276 + $feb));
        $date = date($date_set);
    } elseif ($days > 306 + $feb && $days <= $feb + 337) {
        // December
        $date_set = $year ."-"."12"."-".intval($days - (306 + $feb));
        $date = date($date_set);
    }

    return $date;
}