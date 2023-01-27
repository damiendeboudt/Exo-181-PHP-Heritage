<?php
class princesse extends Personnage {
    private $save;

    public function __construct() {

        parent::__construct();

        $this->x = 450;
        $this->y = 450;
        $this->save = 0;
    }
}