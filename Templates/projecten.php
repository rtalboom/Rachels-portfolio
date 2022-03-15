<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Rachel's portfolio</title>
<link rel="stylesheet" href="../public/CSS/style.css">
</head>
    <header>
        <a href="#" class="navbar"></a>
        <div class="toggle"></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#hoger lager">Hoger Lager</a></li>
            <li><a href="#rekenmachine">Rekenmachine</a></li>
            <li><a href="#BKE">BKE</a></li>
            <li><a href="#zuzu">Zuzu</a></li>
            <li><a href="#healthone">Healthone</a></li>
        </ul>
    </header>
    <section class="banner" id="home">
            <div class="text">
                <h2>Mijn<br><span>Projecten</span></h2>
                <a href="index.php" class="btn">Terug</a>
            </div>
    </section>
        <!--project 1-->
    <section class="project1" id="hoger lager">
            <div class="heading">
                <h2>Hoger Lager</h2>
                <br>
                <a href="https://github.com/rtalboom/Pointless" class="btn">github</a>
            </div>
        <br>
            <div class="content">
            <div class="contentBx">
            </div>
        <br>
                <img src="../public/images/HL.png" alt="c# uitwerking" class="HL">
                </a>
            </div>
    </section>
        <!--project 2-->
    <section class="project2" id="rekenmachine">
            <div class="heading">
                <h2>Rekenmachine</h2>
                <br>
                <p>Voor dit project heb ik HTML, CSS, Bootstrap en Javascript gebruikt.</p>
        <br>
            <div class="content">
            <div class="contentBx">
            </div>
                <a href="calculator.php" class="rekenmachineImg">
        <br>
                <img src="../public/images/reken.png" alt="rekenmachine">
                </a>
            </div>
                <a href="https://github.com/rtalboom/rekenmachine" class="btn">github</a>
    </section>
        <!--project 3-->
    <section class="project3" id="BKE">
            <div class="heading">
                <h2>Boter, kaas en eieren</h2>
                <br>
                <p>Voor dit project heb ik HTML, CSS, Bootstrap en Javascript gebruikt.</p>
                <br>
            <div class="content">
            <div class="contentBx">
            </div>
                <a href="tictactoe.php" class="BKEimg">
        <br>
                <img src="../public/images/BKE.PNG" alt="boter, kaas en eieren">
                </a>
            </div>
                <a href="https://github.com/ROCMondriaanTIN/sd20-js-p4-classes-rtalboom" class="btn">github</a>
    </section>
     <!--project 4-->
     <section class="project4" id="zuzu">
        <div class="heading">
            <h2>Zuzu</h2>
            <br>
            <p>Voor dit project heb ik HTML, CSS, Php en MySQL gebruikt.</p>
    <br>
        <div class="content">
        <div class="contentBx">
        </div>
            <a href="zuzu.php" class="rekenmachineImg">
    <br>
            <img src="../public/images/zuzu.png" alt="sushi">
            </a>
        </div>
            <a href="https://github.com/rtalboom/zuzu" class="btn">github</a>
            <!--project 5-->
            <section class="project5" id="healthone">
                <div class="heading">
                    <h2>Healthone</h2>
                    <br>
                    <p>Voor dit project heb ik HTML, CSS, Bootstrap, Javascript en PHP gebruikt.</p>
                    <br>
                    <div class="content">
                        <div class="contentBx">
                        </div>
<!--                        ik zal nog proberen om healthone op mn portfolio te krijgen :)-->
<!--                        <a href="../Templates/healthone/Templates/home.php" class="HealthoneImg">-->
                            <br>
                            <img src="../public/images/healthone.png" alt="Healthone">
                        </a>
                    </div>
                    <a href="https://github.com/rtalboom/healthone2" class="btn">github</a>
            </section>
</section>
        <script type="text/javascript">
            window.addEventListener('scroll', function(){
                var header = document.querySelector('header');
                header.classList.toggle('sticky', window.scrollY > 0);
            });
    </script>
</body>
</html>
