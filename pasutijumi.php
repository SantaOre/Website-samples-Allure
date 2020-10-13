<!DOCTYPE html>
<html>


        <?php require_once("standarts/galvene.php"); ?>

<body>

        <?php require_once("standarts/navigacija.php"); ?>


        <h2 class="pukes" style="text-align:center"> I</h2><br/>


        <div class="kaste">
            <div>
                <img class="kastes_bilde" src="img/3bild.jpg">
            </div>
            <div class="teksts_parAllure2">
            
                <h2 class="parAllure2"> Piedāvājam:</h2>
                <p class="paragrafs2"> Kāzu, kristību un svinību ielūgumi, galda kartes, apsveikuma kartiņas, <br/>aploksnes, dāvanu kartes u.c.
                    <br/>Cenas - Atkarībā no ieguldītā darba un izmantotajiem materiāliem
                    <br/>Galda kartes: 0,80 - 1,50 € 
                    Ielūgumi: 3,00 - 4,50 €
                    <br/>
                    P.S. - Standarta cena, kas norādīta pie bildēm sākas no 10 gab., ja nepieciešams mazāks 
                    ielūgumu skaits, tad katram ielūgumam klāt nāk 0,50 eur.  
                    <br/>Minimālais ielūgumu skaits ir 5gab.
                    <br/><br/>
                    Pasūtījuma izstrādes laiks -  2 nedēļas (nenoslogotajos mēnešos)
                    (ir iespēja sagatavot steidzamos pasūtījumus 4 - 7 dienās)
                    Piegādes veids - ir iespēja nosūtīt pa pastu vai vienoties par Jums izdevīgu piegādes veidu.</p>
            </div>
        </div>

        <div class="kaste2">
            <div>
                <img class="kastes_bilde" src="img/grieztie.jpg">
            </div>
            <div class="teksts_parAllure2">
           
                <h2 class="parAllure2"> Kā pasūtīt:</h2>
                <p class="paragrafs2"> * Apskatiet paraugus sadaļā Galerija<br/>
                    * Sadaļā Kontakti atradīsiet e-pastu uz kuru varat nosūtīt vēlamo pasūtījumu 
                    <br><br>
                     <strong>Tekstā norādiet:</strong> <br/> * Vēlamo modeli
                     <br/> * Vēlamo krāsu
                     <br/> * Daudzumu
                     <br/> * Datumu, kad vēlaties saņemt pasūtījumu 
                     <br/> * Vārdu un telefona Nr.
                     <br/><br/>Saņemot e-pastu sazināsimies ar Jums par tālāko pasūtījuma gaitu
                    </p>
            </div>
        </div>

        <br/><br/><br/>
    
    <div>
            <h2 class="parAllure3"> Kalkulators Jūsu aprēķiniem</h2><br/><br/>
            <div class="calborder">
                <div class="display">
                    <input type="text" id="calbox">
                </div>
                <div class="calbtn">
                    <ul>
                        <li><button onclick="add('+')">+</button></li>
                        <li><button onclick="add('-')">-</button></li>
                        <li><button onclick="add('*')">x</button></li>
                        
                    </ul>
                    <ul>
                        <li><button onclick="add('7')">7</button></li>
                        <li><button onclick="add('8')">8</button></li>
                        <li><button onclick="add('9')">9</button></li>
                        <li><button onclick="add('/')">÷</button></li>
                    </ul>
                    <ul>
                        <li><button onclick="add('4')">4</button></li>
                        <li><button onclick="add('5')">5</button></li>
                        <li><button onclick="add('6')">6</button></li>
                        <li><button onclick="add('.')">.</button></li>
                    </ul>
                    <ul>
                        <li><button onclick="add('1')">1</button></li>
                        <li><button onclick="add('2')">2</button></li>
                        <li><button onclick="add('3')">3</button></li>
                        <li><button onclick="cal()">=</button></li>
                    </ul>
                    <ul>
                        <li><button onclick="clean()">C</button></li>
                        <li><button onclick="add('0')">0</button></li>
                        <li><button onclick="back()">⌫ </button></li>
                        
                    </ul>
                </div>
                <br/>
            </div>

   </div>

   <br/><br/><br/><br/><br/>

        <?php require_once("standarts/kajene.php"); ?>


        <script src="./js/kalkulators.js"></script>

</body>
</html>