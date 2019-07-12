<?php
  header("Expires: Wed, 14 Mar 1990 05:00:00 GMT");

  $name = $_GET['name'];
  $position = $_GET['position'];
  $position_en = $_GET['position_en'];
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
  $m = telClean($m);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu-HU" lang="hu-HU">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gépbér-Színpad</title>
  </head>

  <body style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: #002672; -webkit-font-smoothing: antialiased;">
        <div style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; color: #002672; -webkit-font-smoothing: antialiased;">
      <div>
        <p style="margin: 0px; font-weight: 700;">
          Üdvözlettel / Best Regards:
        </p>
        <p style="margin: 0px;">&nbsp;</p>
      </div>
      <div style="font-weight: 900;">
        <p style="margin: 0px;"><span style="text-transform: uppercase;"><?php echo "$name"; ?></span><br />
          <?php echo "$position"; if ($position_en != '') { echo (' / ' . $position_en); } ?>
        </p>
      </div>
      <div>
        <p style="margin: 0px;">&nbsp;</p>
        <?php if ($m != '') { echo('<p style="margin: 0px;">Mobil: ' . $m . '</p>'); } ?>
        <?php if ($s != '') { echo('<p style="margin: 0px;">Skype: <a href="skype:' . $s . '" style="color: #002672;">' . $s . '</a></p>'); } ?>
        <p style="margin: 0px;"><a href="mailto:<?php echo "$e"; ?>" style="color: #002672;"><?php echo "$e"; ?></a></p>
        <p style="margin: 0px;">&nbsp;</p>
      </div>
      <div style="font-weight: 900;">
        <p style="margin: 0px; color: #002672;">Gépbér-Színpad Kft.</p>
      </div>
      <div>
        <p style="margin: 0px;">1048 Budapest • Tenkefürdő u. 5., 1. em.</p>
        <p style="margin: 0px;"><a href="https://www.gepberszinpad.hu/" style="color: #002672;">www.gepberszinpad.hu</a></p>
        <p style="margin: 0px;">&nbsp;</p>
        <p style="margin: 0px;">Iroda nyitvatartása:<br />
          Hétfő-péntek: 08:30 - 17:00<br />
        </p>
      </div>
      <img id="logo" style="width: 184px; margin: 6px 0px 6px 0px; padding: 2px 0px 2px 0px; border: 0px; display:block;" src="https://gepberszinpad.hu/sites/default/files/gepbersz_184.png" alt="Gépbér Színpad logó" /><br/>
      <div style="color: #339966;">
        <p style="margin: 0px;"><span style="font-size: 32px; font-family: Webdings;">P</span> <i>Think before print.</i></p>
      </div>
      <div style="color: #999999; font-size: 10px;">
        <hr style="border: 0px; color: #999999; background-color: #999999; height: 1px;" />
        <p style="margin: 0px;">Ezen üzenet kizárólag a címzettnek szól, és olyan bizalmas jellegű információkat tartalmazhat, amelyek kiadását jogszabály vagy szerződés tiltja. Amennyiben jelen üzenetet Ön téves kézbesítés folytán kapta, kérjük, haladéktalanul értesítsen bennünket, és törölje az üzenetet annak csatolmányaival együtt! Amennyiben Ön nem címzettje a jelen üzenetnek, az üzenet és mellékleteinek elolvasása, másolása, továbbítása, vagy bármely célra történő felhasználása szigorúan tilos.</p>
        <p style="margin: 0px;">&nbsp;</p>
        <p style="margin: 0px;">This message is intended exclusively for its addressee and may contain confidential information protected from disclosure by law or contract. If you have received this message in error, please immediately notify us and delete it together with its attachments. If you are not an addressee of this message, reading, copying, distribution or use for any purpose of the contents of this message or its attachments is strictly forbidden.</p>
      </div>
    </div>

  </body>

</html>
