<?php
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu-HU" lang="hu-HU">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Gépbér-Színpad aláírások</title>
    <meta name="Description" content="Aláírásgeneráló a GÉPBÉR-Színpad Kft.-nek" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />

    <link href="https://ebertek.com/" rel="home" />
    <link href="css/gepber.css" rel="stylesheet" type="text/css" />
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
  </head>

  <body>
    <div id="main">
      <form action="alairas.php" method="get">
        <fieldset>
          <table>
            <tr>
              <td><label for="name">Név: </label>
              </td>
              <td><input type="text" name="name" />
              </td>
            </tr>
            <tr>
              <td><label for="position">Beosztás (HU): </label>
              </td>
              <td><input type="text" name="position" />
              </td>
            </tr>
            <tr>
              <td><label for="position_en">Beosztás (EN): </label>
              </td>
              <td><input type="text" name="position_en" />
              </td>
            </tr>
            <tr>
              <td><label for="m">Mobil: </label>
              </td>
              <td><input type="tel" name="m" />
              </td>
            </tr>
            <tr>
              <td><label for="s">Skype: </label>
              </td>
              <td><input type="text" name="s" />
              </td>
            </tr>
            <tr>
              <td><label for="e">E-mail: </label>
              </td>
              <td><input type="email" name="e" value="@gepberszinpad.hu" />
              </td>
            </tr>
          </table>
          <input type="submit">
        </fieldset>
      </form>
    </div>
  </body>

</html>
