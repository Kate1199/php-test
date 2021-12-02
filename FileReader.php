<?php
require_once 'Reader.php';
	class FileReader implements Reader {

			private function getPointArray($points = null)
			{
				foreach($points as $point)
				{
				$pointCoordinate = explode(',', $point);
				$pointArray[] = new Point((float)$pointCoordinate[0], (float)$pointCoordinate[1]);
				unset($pointCoordinate);
				}
				return $pointArray;
			}

			public function readAllPoints($filename)
			{
				// $filename = 'D:\OpenServer\domains\test\tria-pt.txt';
				$pointsAsString = file($filename);
				$points = $this->getPointArray($pointsAsString);
				return $points;
			}
	}
?>