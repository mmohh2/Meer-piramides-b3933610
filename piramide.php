<html>

  <body>
<table width="400px" cellspacing="0px" cellpadding="0px" border="0px">
    <?php

    for ($i = 0; $i <= 10; $i++) {
      echo ('<tr>');
      for ($j = 1; $j <= $i; $j++) {

        echo ('<td height=50px width=80px bgcolor=#000000></td>');
      }

    echo ('</tr>');
  }


     ?>
</table>
  </body>

</html>
