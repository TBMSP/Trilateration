/*
 * This file is part of the Trilateration package.
 *
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * @author Matias Gutierrez <soporte@tbmsp.net>
 * @file Program.java
 *
 * Project home:
 *   https://github.com/tbmsp/trilateration
 *
 */
package net.TBMSP.Code.Trilateration;
public class Program{
public static void main(String[] args){
Point p1=new Point(-19.6685,-69.1942,84);
Point p2=new Point(-20.2705,-70.1311,114);
Point p3=new Point(-20.5656,-70.1807,120);
double[] a=Trilateration.Compute(p1,p2,p3);
System.out.print("LatLon: "+a[0]+", "+a[1]);
}
}