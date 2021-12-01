<?php
require_once 'Point.php';
require_once 'Triangle.php';
    class PointHandler {

        private function checkSide(Point $point1, Point $point2, Point $point3)
        {
            return (($point2->x - $point1->x) * ($point3->y - $point2->y) - 
            ($point3->x - $point2->x) * ($point2->y - $point1->y));
        }

        private function doesPointBelongToTriangle(Triangle $triangle, Point $point)
        {
            $side1 = $this->checkSide($point, $triangle->point1, $triangle->point2);
            $side2 = $this->checkSide($point, $triangle->point2, $triangle->point3);
            $side3 = $this->checkSide($point, $triangle->point3, $triangle->point1);
            
            return ($side1 < 0 && $side2 < 0 && $side3 < 0) ||
            ($side1 > 0 && $side2 > 0 && $side3 > 0) ||
            ($side1 == 0 || $side2 == 0 || $side3 == 0);
        }

        public function outputIfBelongs($points = null)
        {
            for($i = 0; $i < count($points); $i += 4)
            {
                $triangle = new Triangle($points[$i], $points[$i + 1], $points[$i + 2]);
                $point3 = $points[$i + 3];
                echo $this->doesPointBelongToTriangle($triangle, $point3) ? 'Да'.'<br>' : 'Нет' . '<br>';
            }
        }
    }
 ?>
