<?php
/*
 * This file is part of the Trilateration package.
 *
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * @author Matias Gutierrez <soporte@tbmsp.net>
 * @file Point.php
 *
 * Project home:
 *   https://github.com/tbmsp/trilateration
 *
 */
//namespace net\TBMSP\Code\Trilateration;
class Point{
private $lt;private $ln;private $r;
public function __construct($lt,$ln,$r){$this->lt=$lt;$this->ln=$ln;$this->r=$r;}
public function glt(){return $this->lt;}
public function gln(){return $this->ln;}
public function gr(){return $this->r;}
}
?>