<?php
/*
 * This file is part of the Trilateration package.
 *
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * @author Matias Gutierrez <soporte@tbmsp.net>
 * @file Trilateration.php
 *
 * Project home:
 *   https://github.com/tbmsp/trilateration
 *
 */
//namespace net\TBMSP\Code\Trilateration;
class Trilateration{
function Compute($p1,$p2,$p3){
$a;$b;$c;$d;$f;$g;$h;$i;
$j=3.14159265359;
$c=$p2->glt()-$p1->glt();
$d=$p2->gln()-$p1->gln();
$f=(180/$j)*acos(abs($c)/abs(sqrt(pow($c,2)+pow($d,2))));
if(($c>0&&$d>0)){$f=360-$f;}else if(($c<0&&$d>0)){$f=180+$f;}else if(($c<0&&$d<0)){$f=180-$f;}
$a=$this->C($c,$d,$this->B($this->A($this->D($p2->gr()))),$f);
$b=$this->C($p3->glt()-$p1->glt(),$p3->gln()-$p1->gln(),$this->B($this->A($this->D($p3->gr()))),$f);
$g=(pow($this->B($this->A($this->D($p1->gr()))),2)-pow($a[2],2)+pow($a[0],2))/(2*$a[0]);
$h=(pow($this->B($this->A($this->D($p1->gr()))),2)-pow($b[2],2)-pow($g,2)+pow($g-$b[0],2)+pow($b[1],2))/(2*$b[1]);
$i=$this->C($g,$h,0,-$f);
$i[0]=$i[0]+$p1->glt();
$i[1]=$i[1]+$p1->gln(); 
return $i;
}
function A($a){return $a*0.3048;}
function B($a){return $a/82602.89223259855;}
function C($a,$b,$c,$d){$e=3.14159265359;return array($a*cos(($e/180)*$d)-$b*sin(($e/180)*$d),$a*sin(($e/180)*$d)+$b*cos(($e/180)*$d),$c);}
function D($a){return 730.24198315+52.33325511*$a+1.35152407*pow($a,2)+0.01481265*pow($a,3)+0.00005900*pow($a,4)+0.00541703*180;}
}
?>