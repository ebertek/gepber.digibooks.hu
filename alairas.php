<?php
  header("Expires: Wed, 14 Mar 1990 05:00:00 GMT");

  $csv    = array_map('str_getcsv', file('adatok.csv'));
  $header = array_shift($csv);
  $adatok = array();
  foreach($csv as $adat) {
    $adatok[] = array_combine($header, $adat);
  }

  $id            = strtolower($_GET['id']);
  $key           = array_search($id, array_column($adatok, 'id'));
  if ($id != '' && $key !== FALSE) {
    $name        = $adatok[$key]['name'];
    $position    = $adatok[$key]['position'];
    $position_en = $adatok[$key]['position_en'];
    $t           = $adatok[$key]['t'];
    $m           = $adatok[$key]['m'];
    $e           = $adatok[$key]['e'];
    $location    = $adatok[$key]['location'];
  } else {
    $name        = $_GET['name'];
    $position    = $_GET['position'];
    $position_en = $_GET['position_en'];
    $t           = $_GET['t'];
    $m           = $_GET['m'];
    $e           = $_GET['e'];
    $location    = $_GET['location'];
  }
  if ($position == '' && $position_en != '') {
    $position = $position_en;
    $position_en = '';
  }

  $baseurl = $_GET['baseurl'];

  function telClean($phone) {
    $tel=preg_replace("/[^0-9]/", "", $phone);
    if (substr($tel, 0, 2) === '06') {
      $tel = '3' . substr($tel, 1);
    }
    if (strlen($tel) < 10) {
      $tel = '36' . $tel;
    }
    if (preg_match('/^(\d{2})(\d{2})(\d{3})(\d{4})$/', $tel, $tel2)) {
      return '+' . $tel2[1] . ' ' . $tel2[2] . ' ' . $tel2[3] . ' ' . $tel2[4];
    } else
    if (preg_match('/^(\d{2})(1)(\d{3})(\d{4})$/', $tel, $tel2)) {
      return '+' . $tel2[1] . ' ' . $tel2[2] . ' ' . $tel2[3] . ' ' . $tel2[4];
    } else
    if (preg_match('/^(\d{2})(\d{2})(\d{3})(\d{3})$/', $tel, $tel2)) {
      return '+' . $tel2[1] . ' ' . $tel2[2] . ' ' . $tel2[3] . ' ' . $tel2[4];
    } else {
      return $phone;
    }
  }
  $t = telClean($t);
  $f = telClean($f);
  $m = telClean($m);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu-HU" lang="hu-HU">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gépbér – <?php echo "$name"; ?></title>
  </head>

  <body style="font-size: 11px; font-family: Verdana, 'Bitstream Vera Sans', 'DejaVu Sans', Geneva, Tahoma, Arial, sans-serif; color: #515151; -webkit-font-smoothing: antialiased;">
    <div style="font-size: 11px; font-family: Verdana, 'Bitstream Vera Sans', 'DejaVu Sans', Geneva, Tahoma, Arial, sans-serif; color: #515151; -webkit-font-smoothing: antialiased;">
      <div style="color: #be1128; font-weight: 900;">
        <p style="margin: 0px; text-transform: uppercase;"><?php echo "$name"; ?></p>
      </div>
      <div style="color: #515151;">
        <p style="margin: 0px;"><span style="font-weight: 900;"><?php echo "$position"; if ($position_en != '') { echo ' / ' . $position_en; } ?></span></p>
        <p style="margin: 0px;">&nbsp;</p>
<?php if ($t != '') { echo '        <p style="margin: 0px;">T ' . $t . '</p>' . PHP_EOL; } ?>
<?php if ($m != '') { echo '        <p style="margin: 0px;">M ' . $m . '</p>' . PHP_EOL; } ?>
        <p style="margin: 0px;"><a href="mailto:<?php echo "$e"; ?>"><?php echo "$e"; ?></a></p>
      </div>
      <a href="https://www.gepber.hu/"><img id="logo" style="width: 128px; height: 24px; margin: 6px 0px 6px 0px; padding: 2px 0px 2px 0px; border: 0px;" width="128" height="24" src="<?php echo "$baseurl"; ?>/gepber_128.png" srcset="<?php echo "$baseurl"; ?>/gepber_128.png 1x, <?php echo "$baseurl"; ?>/gepber_128_@2X.png 2x, <?php echo "$baseurl"; ?>/gepber_128_@3X.png 3x" alt="Gépbér logó" /></a>
      <div style="color: #be1128; font-weight: 900;">
        <p style="margin: 0px; text-transform: uppercase;">Gépbér Hungária Kft.</p>
      </div>
      <div style="color: #515151;">
<?php if ($location == 'D') {
        echo '        <p style="margin: 0px;">4031 Debrecen • Richter Gedeon u. 0367/71 hrsz.</p>' . PHP_EOL;
      } else
      if ($location == 'Gy') {
        echo '        <p style="margin: 0px;">9028 Győr • Égerfa u. 8.</p>' . PHP_EOL;
      } else
      if ($location == 'Szombathely') {
        echo '        <p style="margin: 0px;">9700 Szombathely • Sági út 4.</p>' . PHP_EOL;
      }
      if ($location != 'Sz') {
        echo '        <p style="margin: 0px;">• Központ:</p>' . PHP_EOL;
      } ?>
        <p style="margin: 0px;"><?php if ($location != 'Sz') { echo '&nbsp;&nbsp;&nbsp;&nbsp;'; } ?>2310 Szigetszentmiklós • Leshegy út 9/d.</p>
        <p style="margin: 0px;"><?php if ($location != 'Sz') { echo '&nbsp;&nbsp;&nbsp;&nbsp;'; } ?>T +36 24 222 222 • F +36 24 222 221</p>
        <p style="margin: 0px;"><a href="https://www.gepber.hu/">www.gepber.hu</a></p>
        <p style="margin: 0px;">&nbsp;</p>
      </div>
      <div>
        <img id="iso9001" style="width: 60px; height: 36px; border: 0px; vertical-align: middle;" width="60" height="36" src="<?php echo "$baseurl"; ?>/iso9001.png" srcset="<?php echo "$baseurl"; ?>/iso9001.png 1x, <?php echo "$baseurl"; ?>/iso9001_@2X.png 2x" alt="ISO 9001" />
        <img id="iso14001" style="width: 60px; height: 36px; border: 0px; vertical-align: middle;" width="60" height="36" src="<?php echo "$baseurl"; ?>/iso14001.png" srcset="<?php echo "$baseurl"; ?>/iso14001.png 1x, <?php echo "$baseurl"; ?>/iso14001_@2X.png 2x" alt="ISO 14001" />
        <a href="https://www.ipaf.org"><img id="ipaf" style="width: 48px; height: 36px; border: 0px; vertical-align: middle;" width="48" height="36" src="<?php echo "$baseurl"; ?>/ipaf.jpg" alt="IPAF Member" /></a>
        <a href="https://www.facebook.com/gepberhungaria"><img id="fb" style="width: 24px; height: 24px; border: 0px; vertical-align: middle;" width="24" height="24" src="<?php echo "$baseurl"; ?>/fb.png" srcset="<?php echo "$baseurl"; ?>/fb.png 1x, <?php echo "$baseurl"; ?>/fb_@2X.png 2x" alt="Facebook" /></a>
      </div>
      <div style="color: #777777;">
        <hr style="border: 0px; color: #777777; background-color: #777777; height: 1px;" />
        <p style="margin: 0px;"><i>A Gépbér Hungária Kft. Általános Szerződéses Feltételei felelősségkorlátozást tartalmaznak, továbbá alkalmazásra kell, hogy kerüljenek minden egyes, a Gépbér Hungária Kft.-vel kapcsolatos árajánlat, szerződés, valamint egyéb jogviszony esetén. A szóban forgó általános szerződéses feltételek hozzáférhetők, kinyomtathatók, valamint letölthetők a <a href="https://gepber.hu/hu/downloads">www.gepber.hu</a> címről.</i><br />
        <i>A Gépbér Hungária Kft. bejegyzett székhelye Kecskeméten található, továbbá a cég a 03-09-108514-es cégjegyzékszámon szerepel a Bács-Kiskun Megyei Kereskedelmi és Iparkamara Cégnyilvántartásában.</i></p>
        <p style="margin: 0px;">&nbsp;</p>
        <p style="margin: 0px;"><i>Gépbér Hungária Kft. general terms and condition contain a limitation of liability and are applicable to all quotations, contracts and other legal relationships with Gépbér Hungária Kft. These general terms and conditions can be accessed, printed and downloaded at <a href="https://gepber.hu/en/downloads">www.gepber.hu</a>.</i><br />
        <i>Gépbér Hungária Kft. has its registered office in Kecskemét and is listed in the Commercial Register of the Chamber of Commerce in Bács-Kiskun under file number 03-09-108514.</i></p>
        <p style="margin: 0px;">&nbsp;</p>
        <p style="margin: 0px;">Disclaimer: <a href="https://www.tvh.com/glob/en/email-disclaimer">https://www.tvh.com/glob/en/email-disclaimer</a> <br />
          This message is delivered to all addressees subject to the conditions set forth in the attached disclaimer, which is an integral part of this message.</p>
        <hr style="border: 0px; color: #777777; background-color: #777777; height: 1px;" />
      </div>
    </div>

  </body>

</html>
