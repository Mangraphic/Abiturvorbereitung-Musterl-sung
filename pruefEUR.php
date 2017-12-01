<?php
class Pruefer {

  public function pruefEUR ($pruefNR) {
    if($this->Check($pruefNR) == 1 ) {
      return 1;
    } else {
      return 0;
    }
  } //function end

  private function Check ($pruefNR) {
    $country = array("J","K","L","M","N","P","R","S","T","U","V","W","X","Y","Z");
    if (strlen($pruefNR) == 12) {
      if (ctype_upper($pruefNR[0])) {
        if(in_array($pruefNR[0], $country)) {
          if (is_numeric(substr($pruefNR,-11))) {
            if ($this->Calc($pruefNR) == $pruefNR[11]) {
              return 1;
            } else return 0;
          }
        }
      }
    } elseif (strlen($pruefNR) < 12) {
      // echo "Die Prüfnummer ist zu kurz. ";
      return 0;
    } elseif (strlen($pruefNR) > 12) {
      // echo "Die Prüfnummer ist zu lang. ";
      return 0;
    }
  } //function end
  private function Calc ($pruefNR) {
    $pruefEins = ord($pruefNR[0]) - ord("A") + 1;
    if ($pruefEins % 10 > 0 && $pruefEins % 10 < 20) {
      $pruefEinsA = 1;
      $pruefEinsB = $pruefEins % 10;
    } else if ($pruefEins % 10 > 20) {
      $pruefEinsA = 1;
      $pruefEinsB = $pruefEins % 10;
    }

    $pruefSum =
      $pruefEinsA
    + $pruefEinsB
    + $pruefNR[1]
    + $pruefNR[2]
    + $pruefNR[3]
    + $pruefNR[4]

    + $pruefNR[5]
    + $pruefNR[6]
    + $pruefNR[7]
    + $pruefNR[8]
    + $pruefNR[9]
    + $pruefNR[10];

    if (8-($pruefSum % 9) == 0) {
      $pruefZiffer = 9;
    } else {
      $pruefZiffer = 8 - ($pruefSum % 9);
    }
    return $pruefZiffer;

  } //function end

} //class end
?>