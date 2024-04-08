  <html>
  <head>
  <title>String Function</title>
  </head>
  <body>
  <h4><u>STRING FUNCTIONS</u></h4>
    <h5>1.STRLEN()</h5>
    <?php
    $str = "welcome";
    echo "The Length of String is :" . strlen($str);
    ?>

    <h5>2.STR_REPLACE()</h5>
    <?php
    $a = "aruna78atgmail.com";
    echo str_replace('at', '@', $a);
    ?>

    <h5>3.STRTOLOWER()</h5>
    <?php
    $str = "NANDHINI";
    echo strtolower($str);
    ?>

    <h5>4.STRTOUPPER()</h5>
    <?php
    $str = "aruna";
    echo strtoupper($str);
    ?>

    <h5>5.STR_WORD_COUNT()</h5>
    <?php
    $str = "Hi! Hello Iam Aruna";
    echo str_word_count($str);
    ?>

    <h5>6.STRCMP()</h5>
    <?php
    $a = "vijayalakshmi";
    $b = "VIjayalakshmi";
    $c = "viJayalakshmi";
    $d = "vijayalakshmi";
    echo strcmp($a, $b) . "<br><br>";
    echo strcmp($a, $c) . "<br><br>";
    echo strcmp($a, $d) . "<br><br>";
    ?>

    <h5>8.STR_REPEAT()</h5>
    <?php
    $str = "Janani Sree ";
    echo str_repeat($str, 4);
    ?>

    <h5>9.STRREV()</h5>
    <?php
    $str = "Mahalakshmi";
    echo strrev($str);
    ?>

    <h5>10.UCFIRST()</h5>
    <?php
    $str = "hurrah!";
    echo ucfirst($str);
    ?>

    <h5>11.UCWORDS()</h5>
    <?php
    $str = "hi! hello iam nandhini";
    echo ucwords($str);
    ?>

    <h5>12.SUBSTR_COUNT()</h5>
    <?php
    echo substr_count("welcome to php hello php", "php");
    ?>

    <h5>13.SUBSTR()</h5>
    <?php
    $str = "welcome to PHP";
    echo substr($str, 4, 6);
    ?>

    <h5>14.TRIM()</h5>
    <?php
    $str = " abi  banu  charu";
    echo trim($str);
    ?>

    <h5>15.STR_SPLIT()</h5>
    <?php
    $str = "Nandhini";
    print_r(str_split($str));
    ?>

    <h5>16.STR_PAD()</h5>
    <?php
    $str = "Ponraj";
    echo str_pad($str, 10, '@');
    ?>

    <h5>17.STRPOS()</h5>
    <?php
    echo strpos("PHP Tutorial", "Tutorial");
    ?>

    <h5>18.STRBRK()</h5>
    <?php
    echo strpbrk("Lorem ipsum", "mp") . "<br><br>";
    ?>

    <?php
    echo strpbrk("Lorem ipsum", "s");
    ?>

    <h4><u>ADDITIONAL FUNCTIONS IN STRING</u></h4>
    <h5>1.STRIP_TAGS()</h5>
    <?php
    $html = "<h3>Welcome</h3>";
    echo $html;
    echo strip_tags($html);
    ?>

    <h5>2.STRIP SLASHES()</h5>
    <?php
    $str = "Sam\'Kumar say\'s catch you later.\'";
    echo stripslashes($str);
    ?>

    <h5>3.ADDSLASHES()</h5>
    <?php
    $str = "your friend's are awake aren't you?";
    echo addslashes($str);
    ?>

    <h5>4.EMPTY()</h5>
    <?php
    $str = "arun";
    echo (boolean) empty($str);
    ?>

    <h5>5.NL2BR</h5>
    <?php
    $line = "Ram Kumar";
    echo $line . "<br><br>";
    echo nl2br($line);
    ?>
	</body>
	</html>