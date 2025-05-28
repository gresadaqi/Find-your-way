<?=session_start();?>
<?php include 'cookie-box.php';?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Historia e Elevator Pitch</title>
    <style>
        ::-webkit-scrollbar{
            width: 10px;
        }
        ::-webkit-scrollbar-track{
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb{
            background:#264653;
            border-radius: 10px;
        }
        section {
            background: #264653;
            color: white;
            border-radius: 12px; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            padding: 20px; 
            margin-bottom: 40px; 
            transition: transform 0.5s, background 0.5s;
        }
        section:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgb(38, 70, 83.2);
            background-color: #264653
        }         

        section h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        section img {
            border: 3px solid #264653; /* Kufiri për imazhet */
            margin: 15px;
        }

        section ul {
            padding: 15px;
            border-radius: 8px;
            color: white;
        }

        section ul li {
            margin-bottom: 10px;
        }

        .elevator-body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #e6e3e3fa;
        }
        .elevator-main {
            margin: 20px;
        }
        .p-elevator {
            font-size: 1.2em;
            color:white;
            margin-bottom: 20px;
            font-style: italic;
        }
        .elevator-img {
            max-width: 100%; /* Siguron që imazhi të mos dalë jashtë dritares */
            height: auto; /* Ruajti raportin origjinal të imazhit */
            margin: 20px 0; /* Hapesirë mbi dhe poshtë imazhit */
            display: block; /* Përdorim display:block për të larguar ndonjë hapësirë të panevojshme */
            border-radius: 8px; /* Këndet e zbutura për imazhin */
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #264653;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s, transform 0.2s;
        }

        .back-btn:hover {
            background-color: #21867a;
            transform: scale(1.05);
        }

        .back-btn::before {
            content: "←"; 
            font-size: 18px;
        }

        .back-btn-floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            padding: 12px 25px;
            background-color: #264653;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .back-btn-floating:hover {
            background-color: #21867a;
            transform: scale(1.05);
        }

        .back-btn-floating::before {
            content: "←"; 
            font-size: 18px;
        }
        .h3-elevator {
            font-size: 5em;
        }
    </style>
</head>
<body class="elevator-body">
    <div id="header-container"></div>
    <script src="navHandler.js"></script>
    <?php include 'nav.php'; ?>
    <!-- Main content -->
    <main class="elevator-main">
        <section id="section1">
            <h2 class="h2-elevator" style="margin-top:25px;">Çfarë është Elevator Pitch?</h2>
            <img class=elevator-img src="foto/elevatorpitch.jpeg" alt="Elevator Pitch Image" style="float:right; width:500px; margin-right:30px;">
            <p class="p-elevator" style="height:300px; width: 700px;text-align: center; margin-top: 90px;">
                Elevator Pitch është një përshkrim i shkurtër dhe i qartë i një ideje, një projekti ose një personi,
                i cili mund të komunikohen në një periudhë të shkurtër kohe – zakonisht në kohën që zgjat një udhëtim me lift (për këtë arsye quhet "Elevator Pitch").
                Ky lloj përshkrimi është shumë i rëndësishëm, sepse ndihmon të prezantosh ide apo projekte në një mënyrë të shpejtë dhe efikase.
            </p>
        </section>

        <section id="section2">
            <h2 class="h2-elevator">Origjina e Elevator Pitch</h2>
            <img class=elevator-img src="foto/elevatorpitch1.jpg" alt="Origjina e Elevator Pitch" style="float: left; max-width: 500px; margin-right:50px">
            <p class="p-elevator" style=" height:300px; width: 1200px; text-align: center; margin-top: 70px;">
                Historia e Elevator Pitch fillon në vitet 1980, kur një profesionist i fushës së marketingut dhe komunikimit,
                genaqsi kërkonte një mënyrë për të prezantuar një produkt ose një ide në mënyrë të shpejtë dhe të fuqishme.
                Për të krijuar një përshkrim të tillë, duhej të merrej parasysh që të transmetohej informacioni kyç pa humbur kohë.
                Kjo ide e thjeshtë u bë mjaft e popullarizuar dhe u përdor nga shumë profesionistë në biznes dhe marketing.
            </p>
        </section>

        <section id="section3">
            <h2 class="h2-elevator" style="padding-top: 50px;">Si të krijoni një Elevator Pitch</h2>
            <img class=elevator-img src="foto/elevatorpitch2.webp" alt="Si të krijoni Elevator Pitch" style="float: right; max-width: 500px;">
            <p class="p-elevator" style="margin-top: 40px;">
                Një Elevator Pitch efektiv duhet të përmbajë disa elemente të rëndësishme:
                <ul>
                    <li class="li-elevator"><strong class="strong-elevator">Prezantimi i vetes</strong>: Kush jeni ju dhe çfarë bëni?</li>
                    <li class="li-elevator"><strong class="strong-elevator">Problemi ose mundësia</strong>: Cili është problemi që po zgjidhni ose mundësia që po ofroni?</li>
                    <li class="li-elevator"><strong class="strong-elevator">Solutioni</strong>: Si do ta zgjidhni atë problem ose do të shfrytëzoni mundësinë?</li>
                    <li class="li-elevator"><strong class="strong-elevator">Ftesë për veprim</strong>: Çfarë dëshironi që tjetri të bëjë pas dëgjimit të pitch-it tuaj? (p.sh., një takim, një telefonatë, etj.)</li>
                </ul>
                Një Elevator Pitch i suksesshëm është i qartë, i shkurtër dhe bindës. Duhet të mundësojë që dikush të kuptojë menjëherë vlerën që ofroni.
            </p>
        </section>
        <div>
            <section id="section4">
                <h2 class="h2-elevator">Përfundim</h2>
                <img class=elevator-img src="foto/elevatorpitch3.png" alt="Përfundim" style="float: left; width:500px; margin-right:50px">
                <p class="p-elevator" style=" height:300px; width: 1200px; text-align: center; margin-top: 70px;">
                    Elevator Pitch është një mjet i fuqishëm komunikimi që mund të përdoret në shumë situata, duke përfshirë takime biznesi,
                    intervista pune, dhe mundësitë për të prezantuar ide në një mënyrë efikase. Kjo teknikë mund të bëjë diferencën në
                    arritjen e suksesit në një botë ku koha është shumë e vlefshme.
                </p>
            </section>
    </div>
    </main>
    <!-- Shigjeta flotuese për kthim -->
     <a href="#" class="back-btn-floating" onclick="kthehu();"></a>
</body>
<script>
    const sections = document.querySelectorAll('section');
    let currentIndex = 1;

    function moveToNextSection() {
        // Lëviz te seksioni aktual
        sections[currentIndex].scrollIntoView({ behavior: 'smooth', block: 'center' });

        // Përditëso indeksin: nëse është te fundi, kthehu te fillimi
        currentIndex = (currentIndex + 1) % sections.length;

        // Kalo në seksionin tjetër pas 3 sekondash
        setTimeout(moveToNextSection, 3000);
    }

    // Fillo animacionin automatikisht
    window.onload = () => {
        setTimeout(moveToNextSection, 3000);
    };
</script>
<?php include 'footer.php';?>
    <script>    
    // Funksioni për navigim te faqja e re
     function kthehu() {
        window.location.href = "keshilla.php"; // Këtu vendos destinacionin tënd
    }
    </script>
    <script src="loginPopup.js"></script>
</html>
