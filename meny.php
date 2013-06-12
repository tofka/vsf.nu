<div id="header">
    <div id="rubriken">
        <a href="index.php" title="Startsidan">
        <div id="header_text"><h1>Västergötlands</h1><h2>Spelmansförbund</h2>
        </div>
        </a>
    </div>
    <div id="meny">
        <div id="show-hide">MENY</div>
        <div id="nav">
        <ul>
            <li>
                <a href="index.php">Startsidan </a>
            </li>   
            <li>
                <a href="kontakt.php" title="Kontakt">Kontakt </a>
            </li>
            <li>
                <a href="ne_minnesfond.php" title="Minnesfond">Minnesfond</a>  
                <ul>
                    <li>
                        <a href="ne_minnesfond.php" title="">Minnesfond</a>
                    </li>
                    <li>
                        <a href="ne_gava.php" title="">Ge en gåva</a>
                    </li>
                    <li>
                        <a href="ne_minnesgava.php" title="">Minnesgåva</a>
                    </li>
                    <li>
                        <a href="ne_hyllning.php" title="">Hyllningsgåva</a>
                    </li>
                </ul>                
            </li>
           
            <li>
                <a href="verksamhet.php" title="Verksamhet">Verksamhet</a>
                <ul>
                    <li>
                        <a href="verksamhet.php" title="Om VSF">Om VSF</a>
                    </li>
                    <li>
                        <a href="kalendarium.php" title="Kalendarium">Kalendarium</a>
                    </li>
                    <li>
                        <a href="tidning.php" title="Tidning">Tidning</a>
                    </li>
                    <li>
                        <a href="arsmoten.php" title="Årsmöten">Årsmöten</a>
                    </li>
                    <li>
                        <a href="kurser.php" title="Kurser">Kurser</a>
                    </li>
                    <li>
                        <a href="latarvisor.php" title="Låtar och visor">Låtar och visor</a>
                    </li>
                    <li>
                        <a href="inventering.php" title="Hitta Folkmusiken">Hitta Folkmusiken</a>
                    </li>
                    <li>
                        <a href="spelmanslag.php" title="Spelmanslag">Spelmanslag</a>
                    </li> 
                </ul>
            </li>
             <li>
                <a href="medlem.php" title="Medlem">Medlem</a>
                <ul>
                    <li>
                        <a href="medlem.php">Medlem</a>
                    </li>
                    <li>
                        <a href="hedersmedlemmar.php" title="Hedersmedlemmar">Hedersmedlemmar</a>
                    </li>
                    <li>
                        <a href="utmarkelser.php" title="Utmärkelser">Utmärkelser</a>
                    </li>
                    <li>
                        <a href="logged_in.php" title="Styrelsens sidor">Styrelsens sidor</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="foto2011.php" title="Foton">Foton </a>
                <ul>
                    <li>
                        <a href="foto2012.php">2012</a>
                    </li>
                    <li>
                        <a href="foto2011.php">2011</a>
                    </li>
                    <li>
                        <a href="foto2010.php">2010</a>
                    </li>
                    <li>
                        <a href="foto2009.php">2009</a>
                    </li>
                    <li>
                        <a href="foto2008.php">2008</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="forsaljning.php" title="Försäljning">Försäljning </a>
            </li>
             <li>
                <a href="lankar.php" title="Länkar">Länkar </a>
            </li>
        </ul>
    </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script>

$(document).ready(function() {
    $('#show-hide').hide();
    var width = document.body.clientWidth;
    if(width < 750 ) {            
        $('#nav').hide();
        $('#show-hide').show(); 
        $('#show-hide').click(function() {
        $('#nav').slideToggle(200);       
        });         
    }
    else {
        $('#nav').show();
        $('#show-hide').hide();
    }       
});
</script>
