<div class="path-route">
    <a href="">Dashboard /</a>
    <a href="#" onclick="location.reload(); return false;">Explore</a>
</div>

<!-- filtro che cambia km di raggio fornitori intorno a me -->

<div class="explorer-forn">
    <div class="box-row">
        <!-- COROPO TOTALE FORNITORE IN LISTA 1 es-->
        <div id="DIA" class="box-expl" onclick="showDettaglioForn('DIA')">
            <div class="box-expl-img">
                <img src="./img/placeholder1.png">
                <img src="./img/placeholder2.png">
                <img src="./img/placeholder3.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DIA</span>
                <img src="./img/loghi/placeholder1.png">
            </div>
        </div>
        <div id="DIA-popup" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.5); z-index:9999; align-items:center; justify-content:center;">
            <div style="background:#fff; padding:40px 30px; border-radius:10px; min-width:200px; min-height:100px; text-align:center; position:relative;">
                Prova DIA
                <button onclick="chiudiDettaglioForn()" style="position:absolute; top:10px; right:10px; background:none; border:none; font-size:1.2em; cursor:pointer;">&times;</button>
            </div>
        </div>
        <!---------------------------------->

        <!-- COROPO TOTALE FORNITORE IN LISTA 2 es-->
        <div id="DACOM" class="box-expl" onclick="showDettaglioForn('DACOM')">
            <div class="box-expl-img">
                <img src="./img/placeholder7.png">
                <img src="./img/placeholder8.png">
                <img src="./img/placeholder9.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DACOM</span>
                <img src="./img/loghi/placeholder2.png">
            </div>
        </div>
        <div id="DACOM-popup" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.5); z-index:9999; align-items:center; justify-content:center;">
            <div style="background:#fff; padding:40px 30px; border-radius:10px; min-width:200px; min-height:100px; text-align:center; position:relative;">
                Prova DACOM
                <button onclick="chiudiDettaglioForn()" style="position:absolute; top:10px; right:10px; background:none; border:none; font-size:1.2em; cursor:pointer;">&times;</button>
            </div>
        </div>
        <!------------------------------------>

        <!-- COROPO TOTALE FORNITORE IN LISTA 3 es-->
        <div id="PLANTYFOOD" class="box-expl" onclick="showDettaglioForn('PLANTYFOOD')">
            <div class="box-expl-img">
                <img src="./img/placeholder4.png">
                <img src="./img/placeholder5.png">
                <img src="./img/placeholder6.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">PlantyFood</span>
                <img src="./img/loghi/placeholder3.png">
            </div>
        </div>
        <div id="PLANTYFOOD-popup" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.5); z-index:9999; align-items:center; justify-content:center;">
            <div style="background:#fff; padding:40px 30px; border-radius:10px; min-width:200px; min-height:100px; text-align:center; position:relative;">
                Prova PLANTYFOOD
                <button onclick="chiudiDettaglioForn()" style="position:absolute; top:10px; right:10px; background:none; border:none; font-size:1.2em; cursor:pointer;">&times;</button>
            </div>
        </div>
        <!------------------------------------>

        <!-- COROPO TOTALE FORNITORE IN LISTA 4 es-->
        <div id="CHIQUITA" class="box-expl" onclick="showDettaglioForn('CHIQUITA')">
            <div class="box-expl-img">
                <img src="./img/placeholder10.png">
                <img src="./img/placeholder11.png">
                <img src="./img/placeholder12.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">Chiquita</span>
                <img src="./img/loghi/placeholder4.png">
            </div>
        </div>
        <div id="CHIQUITA-popup" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.5); z-index:9999; align-items:center; justify-content:center;">
            <div style="background:#fff; padding:40px 30px; border-radius:10px; min-width:200px; min-height:100px; text-align:center; position:relative;">
                Prova CHIQUITA
                <button onclick="chiudiDettaglioForn()" style="position:absolute; top:10px; right:10px; background:none; border:none; font-size:1.2em; cursor:pointer;">&times;</button>
            </div>
        </div>
        <!------------------------------------>
    </div>

    <!-- altre row d'esempio -->

    <div class="box-row" style="margin-top: -35px;">
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder10.png">
                <img src="./img/placeholder11.png">
                <img src="./img/placeholder12.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">Chiquita</span>
                <img src="./img/loghi/placeholder4.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder4.png">
                <img src="./img/placeholder5.png">
                <img src="./img/placeholder6.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">PlantyFood</span>
                <img src="./img/loghi/placeholder3.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder7.png">
                <img src="./img/placeholder8.png">
                <img src="./img/placeholder9.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DACOM</span>
                <img src="./img/loghi/placeholder2.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder1.png">
                <img src="./img/placeholder2.png">
                <img src="./img/placeholder3.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DIA</span>
                <img src="./img/loghi/placeholder1.png">
            </div>
        </div>
    </div>
    <div class="box-row" style="margin-top: -35px;">
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder4.png">
                <img src="./img/placeholder5.png">
                <img src="./img/placeholder6.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">PlantyFood</span>
                <img src="./img/loghi/placeholder3.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder7.png">
                <img src="./img/placeholder8.png">
                <img src="./img/placeholder9.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DACOM</span>
                <img src="./img/loghi/placeholder2.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder10.png">
                <img src="./img/placeholder11.png">
                <img src="./img/placeholder12.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">Chiquita</span>
                <img src="./img/loghi/placeholder4.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder1.png">
                <img src="./img/placeholder2.png">
                <img src="./img/placeholder3.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DIA</span>
                <img src="./img/loghi/placeholder1.png">
            </div>
        </div>
    </div>
    <div class="box-row" style="margin-top: -35px;">
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder1.png">
                <img src="./img/placeholder2.png">
                <img src="./img/placeholder3.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DIA</span>
                <img src="./img/loghi/placeholder1.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder7.png">
                <img src="./img/placeholder8.png">
                <img src="./img/placeholder9.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DACOM</span>
                <img src="./img/loghi/placeholder2.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder4.png">
                <img src="./img/placeholder5.png">
                <img src="./img/placeholder6.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">PlantyFood</span>
                <img src="./img/loghi/placeholder3.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder10.png">
                <img src="./img/placeholder11.png">
                <img src="./img/placeholder12.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">Chiquita</span>
                <img src="./img/loghi/placeholder4.png">
            </div>
        </div>
    </div>
    <div class="box-row" style="margin-top: -35px;">
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder10.png">
                <img src="./img/placeholder11.png">
                <img src="./img/placeholder12.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">Chiquita</span>
                <img src="./img/loghi/placeholder4.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder4.png">
                <img src="./img/placeholder5.png">
                <img src="./img/placeholder6.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">PlantyFood</span>
                <img src="./img/loghi/placeholder3.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder7.png">
                <img src="./img/placeholder8.png">
                <img src="./img/placeholder9.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DACOM</span>
                <img src="./img/loghi/placeholder2.png">
            </div>
        </div>
        <div class="box-expl">
            <div class="box-expl-img">
                <img src="./img/placeholder1.png">
                <img src="./img/placeholder2.png">
                <img src="./img/placeholder3.png">
            </div>
            <hr>
            <div class="box-expl-content">
                <span class="expl-box-name">DIA</span>
                <img src="./img/loghi/placeholder1.png">
            </div>
        </div>
    </div>
</div>

<script>
    //apri chiudi popup dettagli fornitori dinamico con id del forn messo nel box (div main box)
    function showDettaglioForn(name) {
        var popup = document.getElementById(name + '-popup');
        if (!popup) return;
        popup.style.display = 'flex';
        setTimeout(function() {
            popup.style.opacity = '1';
            popup.style.transition = 'opacity 0.3s';
        }, 10);
    }
    function chiudiDettaglioForn() {
        var popups = document.querySelectorAll('[id$="-popup"]');
        popups.forEach(function(popup) {
            popup.style.opacity = '0';
            popup.style.transition = 'opacity 0.3s';
            setTimeout(function() {
                popup.style.display = 'none';
            }, 300);
        });
    }
    document.querySelectorAll('[id$="-popup"]').forEach(function(popup) {
        popup.style.opacity = '0';
        popup.style.transition = 'opacity 0.3s';
    });
</script>