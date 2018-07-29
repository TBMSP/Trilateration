<?php
/*
 * This file is part of the Trilateration package.
 *
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * @author Matias Gutierrez <soporte@tbmsp.net>
 * @file index.php
 *
 * Project home:
 *   https://github.com/tbmsp/trilateration
 *
 */
//namespace net\TBMSP\Code\Trilateration;
require("Point.php");
require("Trilateration.php");
$p1=new Point(-19.6685,-69.1942,84);
$p2=new Point(-20.2705,-70.1311,114);
$p3=new Point(-20.5656,-70.1807,120);
$a=new Trilateration();
$b=$a->Compute($p1,$p2,$p3);
echo "LatLon: ".$b[0].", ".$b[1];
?>