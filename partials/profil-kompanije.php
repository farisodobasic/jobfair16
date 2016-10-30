<div class="header-profil">
		<div class = "shadow"></div>
		<div class="text"><?=$item->name;?></div>
	</div>
	   

	<div class="container-fluid" style="margin-top:13%!important">
	<div class="profil-podaci" >
        <a href="<?$item->web;?>"  target="_blank" ><img src="http://api.jobfair.ba/static/kompanije/<?=$item->id;?>.png" style="width:250px; margin-left:18%" class="slika-kompanije" alt="API"></a>
        <div>
            

            <p class="djelatnost-kompanije-labela">Djelatnost kompanije</p>
            <p class="djelatnost-kompanije"><?=$item->occupation?></p>
        </div>
        <div class="kompanije-kontakt">
            <p class="mail-kompanije-labela">Email</p>
            <p class="mail-kompanije"><?=$item->email?></p>

            <p class="web-kompanije-labela">Web</p>
            <p class="web-kompanije"><a href= "<?$item->web?>"  target="_blank"><?=$item->web?></a></p>

            <p class="adresa-kompanije-labela">Adresa</p>
            <p class="adresa-kompanije"><?=$item->address?></p>


            <p class="telefon-kompanije-labela">Telefon</p>
            <p class="telefon-kompanije"><?=$item->phone?></p>
        </div>
        <br>
        <label>Opis kompanije</label>
        <br><br>
            <p class="brzaposlenih-kompanije-labela">Broj zaposlenih</p>
            <p class="brzaposlenih-kompanije"> <?=$item->emply?> </p>

            <p class="trziste-kompanije-labela">Tržište</p>
            <p class="trziste-kompanije"><?=$item->market?></p>

        <br><br>
        <label>Opis kadrova kompanije</label>
        <br><br>
            <p class="obrazovniprofil-kompanije-labela">Obrazovni profil</p>
            <p class="obrazovniprofil-kompanije"> <?=$item->obrazovniprofili?></p>

            <p class="godinestudija-kompanije-labela">Broj završenih godina studija</p>
            <p class="godinestudija-kompanije"><?=$item->brojzavrsenihgodina?></p>

            <p class="skillovi-kompanije-labela">Poželjne dodatne osobine, znanja i vještine</p>
            <p class="skillovi-kompanije"><?=$item->pozeljnevjestine?></p>

            <p class="jezici-kompanije-labela">Zahtijevani nivo poznavanja stranih jezika</p>
            <p class="jezici-kompanije"><?=$item->nivojezika?> </p>

            <p class="iskustvo-kompanije-labela">Prethodno radno iskustvo</p>
            <p class="iskustvo-kompanije"><?=$item->prethodnoiskustvo?> </p>

<!--
        <br><br>
        <label>Opis potrebnih kadrova</label>
        <br>
        <br>

            <p class="obrazovniprofilnovog-kompanije-labela">Potreban obrazovni profil</p>
            <p class="obrazovniprofilnovog-kompanije">n/a</p>

            <p class="godinestudijanovog-kompanije-labela">Zahtijevani broj godina studija</p>
            <p class="godinestudijanovog-kompanije">n/a</p>

            <p class="skillovinovog-kompanije-labela">Poželjne dodatne osobine, znanja i vještine</p>
            <p class="skillovinovog-kompanije">n/a</p>

            <p class="jezicinovog-kompanije-labela">Zahtijevani nivo poznavanja stranih jezika</p>
            <p class="jezicinovog-kompanije">n/a</p>

            <p class="iskustvonovog-kompanije-labela">Radno iskustvo</p>
            <p class="iskustvonovog-kompanije">n/a</p>
    -->
        <br>
        <br>
            </div>
			</div>