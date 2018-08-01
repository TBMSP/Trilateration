/*
 * This file is part of the Trilateration package.
 *
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * @author Matias Gutierrez <soporte@tbmsp.net>
 * @file Trilateration.java
 *
 * Project home:
 *   https://github.com/tbmsp/trilateration
 *
 */
package net.TBMSP.Code.Trilateration;
public class Trilateration{
public static double[] Compute(Point p1,Point p2,Point p3){
double[] a=new double[3]; 
double[] b=new double[3]; 
double c,d,f,g,h;
double[] i=new double[2];
double k;
c=p2.glt()-p1.glt();
d=p2.gln()-p1.gln();
f=(180/Math.PI)*Math.acos( Math.abs(c)/Math.abs(Math.sqrt(Math.pow(c,2)+Math.pow(d,2))));
if((c>0&&d>0)){f=360-f;}
else if((c<0&&d>0)){f=180+f;}
else if((c<0&&d<0)){f=180-f;}
a=C(c,d,B(A(D(p2.gr()))),f);
b=C(p3.glt()-p1.glt(),p3.gln()-p1.gln(),B(A(D(p3.gr()))),f);
g=(Math.pow(B(A(D(p1.gr()))),2)-Math.pow(a[2],2)+Math.pow(a[0],2))/(2*a[0]);
h=(Math.pow(B(A(D(p1.gr()))),2)-Math.pow(b[2],2)-Math.pow(g,2)+Math.pow(g-b[0],2)+Math.pow(b[1],2))/(2*b[1]);
i=C(g,h,0,-f);
i[0]=i[0]+p1.glt()-0.086;
i[1]=i[1]+p1.gln()-0.004;
k=E(i[0],i[1],p1.glt(),p1.gln();
if(k>p1.gr()*2){i=null;}else{
if(i[0]<-90||i[0]>90||i[1]<-180||i[1]>180){i=null;}}
return i;
}
private static double A(double a){return a*7.2;}
private static double B(double a){return a/900000;}
private static double[] C(double a,double b,double c,double d){return new double[]{a*Math.cos((Math.PI/180)*d)-b*Math.sin((Math.PI/180)*d),a*Math.sin((Math.PI/180)*d)+b*Math.cos((Math.PI/180)*d),c};}
private static double D(double a){return 730.24198315+52.33325511*a+1.35152407*Math.pow(a,2)+0.01481265*Math.pow(a,3)+0.00005900*Math.pow(a,4)+0.00541703*180;}
private static double E(double a,double b,double c,double d){double e=Math.PI,f=e*a/180,g=e*c/180,h=b-d,i=e*h/180,j=Math.sin(f)*Math.sin(g)+Math.cos(f)*Math.cos(g)*Math.cos(i);if(j>1){j=1;}j=Math.acos(j);j=j*180/e;j=j*60*1.1515;j=j*1.609344;return j;}
}
