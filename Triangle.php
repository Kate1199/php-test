<?php
require_once 'Point.php';

    class Triangle {

        public $point1;
        public $point2;
        public $point3;

        public function __construct(Point $point1 = null, Point $point2 = null, Point $point3 = null) 
        {
            $this->point1 = $point1;
            $this->point2 = $point2;
            $this->point3 = $point3;
        }
    }