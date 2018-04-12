<?php
  header("Expires: Wed, 14 Mar 1990 05:00:00 GMT");

  $name = $_GET['name'];
  $position = $_GET['position'];
  $position_en = $_GET['position_en'];
  $t = $_GET['t'];
  $m = $_GET['m'];
  $s = $_GET['s'];
  $e = $_GET['e'];

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
  $m = telClean($m);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu-HU" lang="hu-HU">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Magyar Díszletgyártó</title>
  </head>

  <body style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: #000; -webkit-font-smoothing: antialiased;">
        <div style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: #000; -webkit-font-smoothing: antialiased;">
      <div>
        <p style="margin: 0px;">Üdvözlettel / Best Regards:</p>
        <p style="margin: 0px;">&nbsp;</p>
      </div>
      <div style="font-weight: 900;">
        <p style="margin: 0px;"><span style="text-transform: uppercase;"><?php echo "$name"; ?></span><br />
          <?php echo "$position"; if ($position_en != '') { echo (' / ' . $position_en); } ?>
        </p>
      </div>
      <div>
        <p style="margin: 0px;">&nbsp;</p>
        <?php if ($t != '') { echo('<p style="margin: 0px;">Tel/fax: ' . $t . '</p>'); } ?>
        <?php if ($m != '') { echo('<p style="margin: 0px;">Mobil: ' . $m . '</p>'); } ?>
        <?php if ($s != '') { echo('<p style="margin: 0px;">Skype: <a href="skype:' . $s . '" style="color: #002672;">' . $s . '</a></p>'); } ?>
        <p style="margin: 0px;"><a href="mailto:<?php echo "$e"; ?>" style="color: #002672;"><?php echo "$e"; ?></a></p>
        <p style="margin: 0px;">&nbsp;</p>
      </div>
      <div style="font-weight: 900;">
        <p style="margin: 0px; color: #000;">Magyar Díszletgyártó Kft.</p>
      </div>
      <div>
        <p style="margin: 0px;">6000 Kecskemét • Izsáki út 8.</p>
        <p style="margin: 0px;">Telephely: 2142 Nagytarcsa • Szilas Ipari Park<br />
          Cinkotai utca 4.<br />
        </p>
      </div>
    </div>

  </body>

</html>
