<?php

function getNum($EnterNum)
{
    try {
        $conn = new mysqli('localhost', 'root', 'root', 'test');
        if ($conn->connect_error) {
            die('Connection failed: '.$conn->connect_error);
        }

        for ($x = 1; $x <= strlen($EnterNum); $x++) {
            $tmpString .= ' SUBSTR(name,'.$x.', 1) in (select string from NumToString where num=SUBSTR('.$EnterNum.','.$x.', 1)) and ';
        }

        $sql = 'select name from main where '.$tmpString.' 1=1';

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo 'result: '.$row['name'].'<br>';
            }
        } else {
            echo '0 results';
        }
        $conn->close();
    } catch (PDOException $e) {
        error_log('Database Error'.$e->getMessage());
    }
}

$text = (string) $_POST['sometext'];
    if ($_POST['submit']==0 &&strlen($_POST['submit']) != 0 && strlen($text) == 0 && strlen($thetext) == 0) {
        if (strlen($text) == 0 && strlen($thetext) == 0) {
            $thetext = (string) $text.'0';
            getNum($thetext);
        }
    } elseif ($_POST['submit'] == 1) {
        $text = (string) $_POST['sometext'];
        $thetext = (string) $text;
        getNum($thetext);
    } elseif ($_POST['submit'] == 2) {
        $text = (string) $_POST['sometext'];
        $thetext = (string) $text.'2';
        getNum($thetext);
    } elseif ($_POST['submit'] == 3) {
        $text = (string) $_POST['sometext'];
        $thetext = (string) $text.'3';
        getNum($thetext);
    } elseif ($_POST['submit'] == 4) {
        $text = (string) $_POST['sometext'];
        $thetext = (string) $text.'4';
        getNum($thetext);
    } elseif ($_POST['submit'] == 5) {
        $text = (string) $_POST['sometext'];
        $thetext = (string) $text.'5';
        getNum($thetext);
    } elseif ($_POST['submit'] == 6) {
        $text = (string) $_POST['sometext'];
        $thetext = (string) $text.'6';
        getNum($thetext);
    } elseif ($_POST['submit'] == 7) {
        $text = (string) $_POST['sometext'];
        $thetext = (string) $text.'7';
        getNum($thetext);
    } elseif ($_POST['submit'] == 8) {
        $text = (string) $_POST['sometext'];
        $thetext = (string) $text.'8';
        getNum($thetext);
    } elseif ($_POST['submit'] == 9) {
        $text = (string) $_POST['sometext'];
        $thetext = (string) $text.'9';
        getNum($thetext);
    }

?>
<html>
<head>
<title>PHP</title></head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
      <tr>
        <td colspan="1">
          <button name='submit' value='1' style="width:100%;">1 - </button>
        </td>
        <td colspan="1">
          <button name='submit' value='2' style="width:100%;">2 - ABC</button>
        </td>
        <td colspan="1">
          <button name='submit' value='3' style="width:100%;">3 - DEF</button>
        </td>
      </tr>
      <tr>
        <td colspan="1">
          <button name='submit' value='4' style="width:100%;">4 - GHI</button>
        </td>
        <td colspan="1">
          <button name='submit' value='5' style="width:100%;">5 - JKL</button>
        </td>
        <td colspan="1">
          <button name='submit' value='6' style="width:100%;">6 - MNO</button>
        </td>
      </tr>
      <tr>
        <td colspan="1">
          <button name='submit' value='7' style="width:100%;">7 - PQRS</button>
        </td>
        <td colspan="1">
          <button name='submit' value='8' style="width:100%;">8 - TUV</button>
        </td>
        <td colspan="1">
          <button name='submit' value='9' style="width:100%;">9 - WXYZ</button>
        </td>
      </tr>
      <tr>
        <td colspan="1">

        </td>
        <td colspan="1">
          <button name='submit' value='0' style="width:100%;">0 - XT</button>
        </td>
      </tr>
    </table>
  <input style="display:none;" type="text" name="sometext" value="<?php echo $thetext ?>" />
  </form>
  <label style="display:none;" id="resulttext"><?php echo $thetext ?></label>

</body>

</html>
