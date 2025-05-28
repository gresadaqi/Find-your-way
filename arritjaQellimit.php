<?php include 'cookie-box.php';?>
<?=session_start();?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>&Ccedilka nevojitet p&#235rve&#231 motivimit
        p&#235r ti arritur q&#235llimet?</title>
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
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #e6e3e3fa;
        }
        .container {
            margin: 20px;
        }
        .arritja-h1, .arritja-h2 {
            color: #264653;
        }
        .qellimi-p {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 20px;
            font-style: italic;
        }
        .qellimi-img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
            display: block;
            border-radius: 8px;
        }
        section {
            width: 120%;
            margin-bottom: 40px;
            padding: 20px;
            border-radius: 12px;
            background: #264653;
            transition: transform 0.5s, background 0.5s;
            color: white;
        }

        section:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgb(38, 70, 83.2);
            background-color: #264653
        }
        .qellimi-h1 {
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #264653;
         }

        .qellimi-h2 {
            font-size: 2em;
            text-transform: capitalize;
            margin-bottom: 20px;
        }

        .qellimi-p {
            font-size: 1.2em;
            line-height: 1.8;
            color: white;
        }

        .qellimi-img {
            border: 4px solid #264653;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
        
        .qellimi-li {
            position: relative;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeIn 1.2s forwards;
        }

        .qellimi-li::before {
        
            position: absolute;
            left: -30px;
            
            font-size: 24px;
            display: inline-block;
            opacity: 0;
            transform: scale(0);
            animation: bulletAnim 1.2s forwards;
        }

        .qellimi-li:nth-child(1) {
            animation-delay: 0.2s;
        }

        .qellimi-li:nth-child(2) {
            animation-delay: 0.6s;
        }

        .qellimi-li:nth-child(3) {
            animation-delay: 1s;
        }

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}

@keyframes bulletAnim {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
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
        
    </style>
</head>
<body>
    <div id="header-container"></div>
    <script src="navHandler.js"></script>
    <?php include 'nav.php'; ?>

    <!-- Main content -->
    <main class="container">
        <h1 class="qellimi-h1">Si t&euml Arrini Suksesin</h1>

        <section>
            <h2 class="qellimi-h2">Motivimi si Hapi i Par&euml</h2>
            <img class="qellimi-img" src="foto/arritjaQellimit1.jpeg" alt="Motivimi për sukses" style="width: 400px;">
            <p class="qellimi-p">
                <strong>Motivimi</strong> &eumlsht&euml nj&euml nga faktor&eumlt ky&ccedil q&euml na ndihmon t&euml arrijm&euml suksesin. Pa motivim, &eumlsht&euml e v&eumlshtir&euml t&euml angazhohemi n&euml nj&euml pun&euml t&euml vazhdueshme dhe t&euml arrijm&euml q&eumlllimet tona. Ky &eumlsht&euml hapi i par&euml p&eumlr t&euml b&eumlr&euml &ccedildo &eumlnd&eumlrr t&euml mundur.
            </p>
            <p class="qellimi-p">
                Shpesh, motivimi fillon me nj&euml ide ose nj&euml pasion q&euml na shtyn t&euml ndjekim nj&euml rrug&euml t&euml caktuar. Ky ndjenj&euml &eumlsht&euml e ndryshme p&eumlr &ccedildo individ dhe mund t&euml lind&euml nga:
            </p>
            <ul class="qellimi-ul">
                <li class="qellimi-li">Deshira p&eumlr t&euml arritur di&ccedilka t&euml madhe n&euml jet&euml</li>
                <li class="qellimi-li">P&eumlrkushtimi ndaj nj&euml pasioni ose interesi</li>
                <li class="qellimi-li">D&eumlshira p&eumlr t&euml ndihmuar t&euml tjer&eumlt</li>
            </ul>
        </section>

        <section>
            <h2 class="qellimi-h2">Strategjit&euml p&eumlr T&euml Arritur Suksesin</h2>
            <img class="qellimi-img" src="foto/arritjaQellimit2.jpeg" alt="Strategjitë për Suksesin" style="width: 400px;">
            <p class="qellimi-p">
                Nj&eumlher&euml kur motivimi &eumlsht&euml i pranish&eumlm, &eumlsht&euml e r&eumlnd&eumlsishme t&euml keni nj&euml plan t&euml qart&euml dhe strategji p&eumlr ta arritur suksesin. Disa strategji t&euml p&eumlrdorura shpesh jan&euml:
            </p>
            <ul class="qellimi-ul">
                <li class="qellimi-li"><strong>Vendosja e Q&eumlllimeve t&euml Qarta:</strong> Q&eumlllimet e qarta jan&euml udh&eumlzues q&euml t&euml mbajn&euml n&euml rrug&eumln e duhur.</li>
                <li class="qellimi-li"><strong>P&eumlrs&eumlritja dhe Puna e Palodhur:</strong> Suksesi nuk vjen leht&eumlsisht, dhe duhet t&euml punoni vazhdimisht p&eumlr t&euml arritur at&euml q&euml d&eumlshironi.</li>
                <li class="qellimi-li"><strong>Organizimi i Koh&eumls:</strong> Menaxhimi i koh&eumls &eumlsht&euml nj&euml faktor i r&eumlnd&eumlsish&eumlm q&euml ndihmon n&euml arritjen e suksesit n&euml afat t&euml shkurt&eumlr dhe afatgjat&euml.</li>
            </ul>
            <p class="qellimi-p">
                &Ccedildo hap q&euml merrni duhet t&euml jet&euml nj&euml hap q&euml ju sjell m&euml af&eumlr q&eumlllimeve tuaja. &Eumlsht&euml gjithashtu e r&eumlnd&eumlsishme t&euml jeni t&euml duruesh&eumlm, sepse suksesin shpesh e arrini pas shum&euml p&eumlrpjekjesh.
            </p>
        </section>

        <section>
            <h2 class="qellimi-h2">Q&eumlndrimi Pozitiv dhe P&eumlrshtatshm&eumlria</h2>
            <img class="qellimi-img" src="foto/arritjaQellimit3.jpeg" alt="Qëndrimi Pozitiv" style="width: 400px;">
            <p class="qellimi-p">
                T&euml kesh nj&euml <strong>q&eumlndrim pozitiv</strong> &eumlsht&euml shum&euml e r&eumlnd&eumlsishme p&eumlr t&euml kaluar p&eumlrmes pengesave dhe sfidave q&euml mund t&euml dalin gjat&euml rrug&eumls suaj. Nj&euml q&eumlndrim pozitiv do t'ju ndihmoj&euml t&euml shihni mund&eumlsit&euml edhe n&euml momentet e v&eumlshtira dhe t&euml mos dor&eumlzoheni kur gj&eumlrat b&eumlhen t&euml v&eumlshtira.
            </p>
            <p class="qellimi-p">
                Nj&euml tjet&eumlr element i r&eumlnd&eumlsish&eumlm &eumlsht&euml <strong>p&eumlrshtatshm&eumlria</strong>. Ndryshimet jan&euml t&euml pashmangshme dhe aft&eumlsia p&eumlr t'u p&eumlrshtatur me situata t&euml reja &eumlsht&euml thelb&eumlsore p&eumlr t&euml arritur q&eumlllimet tuaja.
            </p>
        </section>

        <section>
            <h2 class="qellimi-h2">P&eumlrfundim</h2>
            <img class="qellimi-img" src="foto/arritjaQellimit4.jpg" alt="Arritja e Suksesit" style="width: 400px;">
            <p class="qellimi-p">
                Arritja e suksesit &eumlsht&euml nj&euml proces q&euml k&eumlrkon koh&euml, angazhim dhe durim. Motivimi i brendsh&eumlm, strategjit&euml e duhura, dhe q&eumlndrimi pozitiv jan&euml disa nga faktor&eumlt q&euml mund t&euml ndihmojn&euml nj&euml individ t&euml arrij&euml suksesin. Ndaj, filloni tani dhe b&eumlni &ccedildo dit&euml nj&euml hap m&euml af&eumlr &eumlndrr&eumls tuaj.
            </p>
        </section>
    </main>
     <!-- Shigjeta flotuese për kthim -->
     <a href="#" class="back-btn-floating" onclick="kthehu();"></a>
    <!-- Include footer -->
<?php include 'footer.php';?>
<script>
           // Funksioni për navigim te faqja e re
         function kthehu() {
        window.location.href = "keshilla.php"; // Këtu vendos destinacionin tënd
    }
    </script>
    <script src="loginPopup.js"></script>
</body>
</html>
