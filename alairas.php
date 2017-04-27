<?php
  header("Expires: Wed, 14 Mar 1990 05:00:00 GMT");

  $name = $_GET['name'];
  $position = $_GET['position'];
  $position_en = $_GET['position_en'];
  $t = $_GET['t'];
  $f = $_GET['f'];
  $m = $_GET['m'];
  $e = $_GET['e'];
  $location = $_GET['location'];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu-HU" lang="hu-HU">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Gépbér</title>
  </head>

  <body style="font-size: 11px; font-family: Verdana, 'Bitstream Vera Sans', 'DejaVu Sans', Tahoma, Geneva, Arial, sans-serif; color: #636466; -webkit-font-smoothing: antialiased;">

    <div style="font-size: 11px; font-family: Verdana, 'Bitstream Vera Sans', 'DejaVu Sans', Tahoma, Geneva, Arial, sans-serif; color: #636466; -webkit-font-smoothing: antialiased;">
      <div style="color: #c41425; font-weight: 900;">
        <p style="margin: 0px; text-transform: uppercase;"><?php echo "$name"; ?></p>
      </div>
      <div style="color: #636466;">
        <p style="margin: 0px;"><span style="font-weight: 900;"><?php echo "$position"; if ($position_en != '') { echo (' / ' . $position_en); } ?></span></p>
        <p style="margin: 0px;">&nbsp;</p>
        <?php if ($t != '') { echo('<p style="margin: 0px;">T ' . $t . '</p>'); } ?>
        <?php if ($f != '') { echo('<p style="margin: 0px;">F ' . $f . '</p>'); } ?>
        <?php if ($m != '') { echo('<p style="margin: 0px;">M ' . $m . '</p>'); } ?>
        <p style="margin: 0px;"><a href="mailto:<?php echo "$e"; ?>"><?php echo "$e"; ?></a></p>
      </div>
      <a href="http://www.gepber.hu/"><img id="logo" style="width: 128px; margin: 6px 0px 6px 0px; padding: 2px 0px 2px 0px; border: 0px;" src="http://www.gepber.hu/img/gepber_128.png" alt="Gépbér logó" /></a>
      <div style="color: #c41425; font-weight: 900;">
        <p style="margin: 0px; text-transform: uppercase;">Gépbér Hungária Kft.</p>
      </div>
      <div style="color: #636466;">
        <?php if ($location == 'D') { echo('<p style="margin: 0px;">4030 Debrecen • Mikepércsi u. 116.</p>'); } ?>
        <?php if ($location == 'Gy') { echo('<p style="margin: 0px;">9028 Győr • Juharfa u. 1.</p>'); } ?>
        <?php if ($location != 'Sz') { echo('<p style="margin: 0px;">• Központ:</p>'); } ?>
        <p style="margin: 0px;"><?php if ($location != 'Sz') { echo('&nbsp;&nbsp;&nbsp;&nbsp;'); } ?>2310 Szigetszentmiklós • Leshegy út 9/d.</p>
        <p style="margin: 0px;"><?php if ($location != 'Sz') { echo('&nbsp;&nbsp;&nbsp;&nbsp;'); } ?>T +36 24 222 222 • F +36 24 222 221</p>
        <p style="margin: 0px;"><a href="http://www.gepber.hu/">www.gepber.hu</a></p>
      </div>
      <div>
        <a href="http://www.ipaf.org"><img id="ipaf" style="width: 48px; border: 0px; vertical-align: middle;" src="http://www.gepber.hu/img/ipaf.jpg" alt="IPAF Member" /></a>
        <a href="https://www.facebook.com/gepberhungaria"><img id="fb" style="width: 24px; border: 0px; vertical-align: middle;" src="http://www.gepber.hu/img/fb.png" alt="Facebook" /></a>
      </div>
      <div style="color: #999999;">
        <hr style="border: 0px; color: #999999; background-color: #999999; height: 1px;" />
        <p style="margin: 0px;"><i>A Gépbér Hungária Kft. Általános Szerződéses Feltételei felelősségkorlátozást tartalmaznak, továbbá alkalmazásra kell, hogy kerüljenek minden egyes, a Gépbér Hungária Kft.-vel kapcsolatos árajánlat, szerződés, valamint egyéb jogviszony esetén. A szóban forgó általános szerződéses feltételek hozzáférhetők, kinyomtathatók, valamint letölthetők a <a href="http://www.gepber.hu/">www.gepber.hu</a> címről.</i></p>
        <p style="margin: 0px;"><i>A Gépbér Hungária Kft. bejegyzett székhelye Kecskeméten található, továbbá a cég a 03-09-108514-es cégjegyzékszámon szerepel a Bács-Kiskun Megyei Kereskedelmi és Iparkamara Cégnyilvántartásában.</i></p>
        <p style="margin: 0px;">&nbsp;</p>
        <p style="margin: 0px;"><i>Gépbér Hungária Kft. general terms and condition contain a limitation of liability and are applicable to all quotations, contracts and other legal relationships with Gépbér Hungária Kft. These general terms and conditions can be accessed, printed and downloaded at <a href="http://www.gepber.hu/">www.gepber.hu</a>.</i></p>
        <p style="margin: 0px;"><i>Gépbér Hungária Kft. has its registered office in Kecskemét and is listed in the Commercial Register of the Chamber of Commerce in Bács-Kiskun under file number 03-09-108514.</i></p>
        <hr style="border: 0px; color: #999999; background-color: #999999; height: 1px;" />
      </div>
    </div>

  </body>

</html>