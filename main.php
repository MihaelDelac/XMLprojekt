<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>XML Mihael Delac</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <h1>MOBINFO.HR</h1>
    </header>
    <div id="wrapper">
        <!--samsung mobiteli-->
        <h2>Samsung mobiteli</h2>
        </br>
        <section id="samsung">
            <!--s21-->
            <article id="s21" class="specs">
                <div class="mob">
                    <?php
                    $s21 = simplexml_load_file("mobiteli.xml");
                    foreach ($s21->s21 as $S21) {
                        echo "<h3 align=center>" . (string)$S21->naziv . "</h3><br/>";
                    }
                    ?>
                    <img class="mobimg" src="slike/s21.png">
                </div>
                <?php
                $s21 = simplexml_load_file("mobiteli.xml");
                foreach ($s21->s21 as $S21) {
                    echo "<p align=center>" . (string)$S21->cpu . "</p><br/>";
                    echo "<p align=center>" . (string)$S21->ram . "</p><br/>";
                    echo "<p align=center>" . (string)$S21->ekran . "</p><br/>";
                    echo "<p align=center>" . (string)$S21->kamera . "</p><br/>";
                    echo "<p align=center>" . (string)$S21->baterija . "</p><br/>";
                    echo "<p style='font-weight:600;font-size:20px;text-align:center;'>" . (string)$S21->cijena . "</p>";
                }
                ?>
            </article>
            <!--s21plus-->
            <article id="s21plus" class="specs">
                <div class="mob">
                    <?php
                    $s21plus = simplexml_load_file("mobiteli.xml");
                    foreach ($s21plus->s21plus as $S21plus) {
                        echo "<h3 align=center>" . (string)$S21plus->naziv . "</h3><br/>";
                    }
                    ?>
                    <img class="mobimg" src="slike/s21.png">
                </div>
                <?php
                $s21plus = simplexml_load_file("mobiteli.xml");
                foreach ($s21plus->s21plus as $S21plus) {
                    echo "<p align=center>" . (string)$S21plus->cpu . "</p><br/>";
                    echo "<p align=center>" . (string)$S21plus->ram . "</p><br/>";
                    echo "<p align=center>" . (string)$S21plus->ekran . "</p><br/>";
                    echo "<p align=center>" . (string)$S21plus->kamera . "</p><br/>";
                    echo "<p align=center>" . (string)$S21plus->baterija . "</p><br/>";
                    echo "<p style='font-weight:600;font-size:20px;text-align:center;'>" . (string)$S21plus->cijena . "</p>";
                }
                ?>
            </article>
            <!--s21ultra-->
            <article id="s21ultra" class="specs">
                <div class="mob">
                    <?php
                    $s21ultra = simplexml_load_file("mobiteli.xml");
                    foreach ($s21ultra->s21ultra as $S21ultra) {
                        echo "<h3 align=center>" . (string)$S21ultra->naziv . "</h3><br/>";
                    }
                    ?>
                    <img class="mobimg" src="slike/s21ultra.png">
                </div>
                <?php
                $s21ultra = simplexml_load_file("mobiteli.xml");
                foreach ($s21ultra->s21ultra as $S21ultra) {
                    echo "<p align=center>" . (string)$S21ultra->cpu . "</p><br/>";
                    echo "<p align=center>" . (string)$S21ultra->ram . "</p><br/>";
                    echo "<p align=center>" . (string)$S21ultra->ekran . "</p><br/>";
                    echo "<p align=center>" . (string)$S21ultra->kamera . "</p><br/>";
                    echo "<p align=center>" . (string)$S21ultra->baterija . "</p><br/>";
                    echo "<p style='font-weight:600;font-size:20px;text-align:center;'>" . (string)$S21ultra->cijena . "</p>";
                }
                ?>
            </article>
        </section>
        <h2>Xiaomi mobiteli</h2>
        </br>
        <section id="xiaomi">
            <!--mi11lite-->
            <article id="mi11lite" class="specs">
                <div class="mob">
                    <?php
                    $mi11lite = simplexml_load_file("mobiteli.xml");
                    foreach ($mi11lite->mi11lite as $Mi11lite) {
                        echo "<h3 align=center>" . (string)$Mi11lite->naziv . "</h3><br/>";
                    }
                    ?>
                    <img class="mobimg" src="slike/mi11lite.png">
                </div>
                <?php
                $s21 = simplexml_load_file("mobiteli.xml");
                foreach ($mi11lite->mi11lite as $Mi11lite) {
                    echo "<p align=center>" . (string)$Mi11lite->cpu . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11lite->ram . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11lite->ekran . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11lite->kamera . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11lite->baterija . "</p><br/>";
                    echo "<p style='font-weight:600;font-size:20px;text-align:center;'>" . (string)$Mi11lite->cijena . "</p>";
                }
                ?>
            </article>
            <!--mi11-->
            <article id="mi11" class="specs">
                <div class="mob">
                    <?php
                    $mi11 = simplexml_load_file("mobiteli.xml");
                    foreach ($mi11->mi11 as $Mi11) {
                        echo "<h3 align=center>" . (string)$Mi11->naziv . "</h3><br/>";
                    }
                    ?>
                    <img class="mobimg" src="slike/mi11.png">
                </div>
                <?php
                $mi11 = simplexml_load_file("mobiteli.xml");
                foreach ($mi11->mi11 as $Mi11) {
                    echo "<p align=center>" . (string)$Mi11->cpu . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11->ram . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11->ekran . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11->kamera . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11->baterija . "</p><br/>";
                    echo "<p style='font-weight:600;font-size:20px;text-align:center;'>" . (string)$Mi11->cijena . "</p>";
                }
                ?>
            </article>
            <!--mi11ultra-->
            <article id="mi11ultra" class="specs">
                <div class="mob">
                    <?php
                    $mi11ultra = simplexml_load_file("mobiteli.xml");
                    foreach ($mi11ultra->mi11ultra as $Mi11ultra) {
                        echo "<h3 align=center>" . (string)$Mi11ultra->naziv . "</h3><br/>";
                    }
                    ?>
                    <img class="mobimg" src="slike/mi11ultra.png">
                </div>
                <?php
                $s21ultra = simplexml_load_file("mobiteli.xml");
                foreach ($mi11ultra->mi11ultra as $Mi11ultra) {
                    echo "<p align=center>" . (string)$Mi11ultra->cpu . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11ultra->ram . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11ultra->ekran . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11ultra->kamera . "</p><br/>";
                    echo "<p align=center>" . (string)$Mi11ultra->baterija . "</p><br/>";
                    echo "<p style='font-weight:600;font-size:20px;text-align:center;'>" . (string)$Mi11ultra->cijena . "</p>";
                }
                ?>
            </article>
        </section>
        <h2>Apple mobiteli</h2>
        </br>
        <section id="iphone">
            <!--iphone12-->
            <article id="iphone12" class="specs">
                <div class="mob">
                    <?php
                    $iphone12 = simplexml_load_file("mobiteli.xml");
                    foreach ($iphone12->iphone12 as $Iphone12) {
                        echo "<h3 align=center>" . (string)$Iphone12->naziv . "</h3><br/>";
                    }
                    ?>
                    <img class="mobimg" src="slike/iphone12.png">
                </div>
                <?php
                $iphone12 = simplexml_load_file("mobiteli.xml");
                foreach ($iphone12->iphone12 as $Iphone12) {
                    echo "<p align=center>" . (string)$Iphone12->cpu . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12->ram . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12->ekran . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12->kamera . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12->baterija . "</p><br/>";
                    echo "<p style='font-weight:600;font-size:20px;text-align:center;'>" . (string)$Iphone12->cijena . "</p>";
                }
                ?>
            </article>
            <!--iphone12pro-->
            <article id="iphone12pro" class="specs">
                <div class="mob">
                    <?php
                    $iphone12pro = simplexml_load_file("mobiteli.xml");
                    foreach ($iphone12pro->iphone12pro as $Iphone12pro) {
                        echo "<h3 align=center>" . (string)$Iphone12pro->naziv . "</h3><br/>";
                    }
                    ?>
                    <img class="mobimg" src="slike/iphone12pro.png">
                </div>
                <?php
                $iphone12pro = simplexml_load_file("mobiteli.xml");
                foreach ($iphone12pro->iphone12pro as $Iphone12pro) {
                    echo "<p align=center>" . (string)$Iphone12pro->cpu . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12pro->ram . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12pro->ekran . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12pro->kamera . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12pro->baterija . "</p><br/>";
                    echo "<p style='font-weight:600;font-size:20px;text-align:center;'>" . (string)$Iphone12pro->cijena . "</p>";
                }
                ?>
            </article>
            <!--iphone12promax-->
            <article id="iphone12promax" class="specs">
                <div class="mob">
                    <?php
                    $iphone12promax = simplexml_load_file("mobiteli.xml");
                    foreach ($iphone12promax->iphone12promax as $Iphone12promax) {
                        echo "<h3 align=center>" . (string)$Iphone12promax->naziv . "</h3><br/>";
                    }
                    ?>
                    <img class="mobimg" src="slike/iphone12promax.png">
                </div>
                <?php
                $iphone12promax = simplexml_load_file("mobiteli.xml");
                foreach ($iphone12promax->iphone12promax as $Iphone12promax) {
                    echo "<p align=center>" . (string)$Iphone12promax->cpu . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12promax->ram . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12promax->ekran . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12promax->kamera . "</p><br/>";
                    echo "<p align=center>" . (string)$Iphone12promax->baterija . "</p><br/>";
                    echo "<p style='font-weight:600;font-size:20px;text-align:center;'>" . (string)$Iphone12promax->cijena . "</p>";
                }
                ?>
            </article>
        </section>
    </div>
    <footer>
        <p>Mihael Delač</p>
        </br>
        <p>XML Projekt 2021.</p>
    </footer>

</body>

</html>