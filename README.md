# Trilateration
Trilateration system using 3 latitude and longitude points, and 3 radius distances in PHP, C#, Java and Javascript

Where can Trilateration and Triangulation be used in general?
- Get the location of a device that sends signals to an antenna (GPS).
- Get the location of any device connected to a Wi-Fi network.
- Get the epicenter of seismic events (Earthquakes).

And several other uses, with this library so simple you can perform the calculation, of course, this library does not know the parameters and these have to apply to you.

---
### Class parameters and functions
***Point Class:***
```php
new Point(Latitude,Longitude,RadiusDistanceInKilometers);
```
***Trilateration Class:***
```php
new Trilateration();
```
***Trilateration Class: Functions***
```php
Compute(Point1,Point2,Point3);
```
---
### PHP Version Example
```php
<?php
require("Point.php");
require("Trilateration.php");
$p1=new Point(-19.6685,-69.1942,84);
$p2=new Point(-20.2705,-70.1311,114);
$p3=new Point(-20.5656,-70.1807,120);
$a=new Trilateration();
$b=$a->Compute($p1,$p2,$p3);
echo "LatLon: ".$b[0].", ".$b[1];
?>
```
### Result
```
LatLon: -20.543330689197, -69.276067574908
```

---
### C# Version Example
```c#
using System;

namespace net.TBMSP.Code.Trilateration{
  class Program{
    static void Main(string[] args){
      Point p1=new Point(-19.6685,-69.1942,84);
      Point p2=new Point(-20.2705,-70.1311,114);
      Point p3=new Point(-20.5656,-70.1807,120);
      double[] a=Trilateration.Compute(p1,p2,p3);
      Console.WriteLine("LatLon: "+a[0]+", "+a[1]);
    }
  }
}
```
### Result
```
LatLon: -20.543330689197, -69.276067574908
```

---
### Java Version Example
```java
package net.TBMSP.Code.Trilateration;

public class Main{
  public static void main(String[] args){
    Point p1=new Point(-19.6685,-69.1942,84);
    Point p2=new Point(-20.2705,-70.1311,114);
    Point p3=new Point(-20.5656,-70.1807,120);
    double[] a=Trilateration.Compute(p1,p2,p3);
    System.out.print("LatLon: "+a[0]+", "+a[1]);
  }
}
```
### Result
```
LatLon: -20.543330689197, -69.276067574908
```

---
### Javascript Version Example
```html
<!DOCTYPE html>
<html>
  <body>
    <p id="latlon"></p>
    <script src="Trilateration.js"></script> 
    <script>
      //Array[Latitude,Longitude,RadiusDistanceInKilometers]
      var p1=[-19.6685,-69.1942,84];
      var p2=[-20.2705,-70.1311,114];
      var p3=[-20.5656,-70.1807,120];
      var a=Compute(p1,p2,p3);
      document.getElementById("latlon").innerHTML="LatLon: "+a;
    </script>
  </body>
</html>
```
### Result
```
LatLon: -20.543330689197, -69.276067574908
```

***Autor:*** <a href="https://twitter.com/TBMSP">@TBMSP</a>
<a href="http://tbmsp.net/">TBM SP</a>
<soporte@tbmsp.net>
