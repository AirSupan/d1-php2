<?php
    class countrise {
        public $proivince;
        public $hit


        function set_Countries($proivince){
            $this->proivince = $proivince;
        }
        function get_proivince();
            return $this->proivince;
    }
$newTour = new Countries();
$newHit = new Countries();
$newTour->set_proivince('Trat');
$newHit = set_proivince('khaochang');
echo $newTour->get_proivince ();
echo "<br />";
echo $newHit->get_proivince ();
?>