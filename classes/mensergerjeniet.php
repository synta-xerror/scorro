<?php
class board {
    private $blauw = '';
    private $geel = '';
    private $groen = '';
    private $rood = '';

    public function __constructor($blauw, $geel, $groen, $rood)
    {
        $this->blauw=$blauw
        $this->geel=$geel
        $this->groen=$groen
        $this->rood=$rood
    }
}

class player {
    private $name = '';

    public function __constructor($name)
    {
        $this->name=$name
    }
}

class pion {
    private $pion1 = '';
    private $pion2 = '';
    private $pion3 = '';
    private $pion4 = '';

    public function __constructor($pion1, $pion2, $pion3, $pion4, $name)
    {
        $this->pion1=$pion1
        $this->pion2=$pion2
        $this->pion3=$pion3
        $this->pion4=$pion4
    }
}
?>