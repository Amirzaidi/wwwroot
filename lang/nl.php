<?php
date_default_timezone_set('Europe/Amsterdam');

function lang(&$t)
{
	$t['metadesc'] = '';
	$t['lang'] = 'Nederlands';
	$t['advertisehere'] = 'Adverteer Hier';
	$t['timezone'] = 'GMT+1';

	$t['nav_home'] = 'Startpagina';
	$t['nav_adv'] = 'Adverteer';
	$t['nav_about'] = 'Over ons';
	$t['nav_themechange'] = 'Verander thema';
	$t['nav_langchange'] = 'Verander taal';
	$t['nav_contact'] = 'Contact';

	$t['privacy'] = 'Anonimiteit';
	$t['terms'] = 'Algemene Voorwaarden';
	$t['hoster'] = 'Hoster';
	$t['togglegoogle'] = 'Zet Google Vertalen Aan/Uit';
}

function lang_404(&$t)
{
	$t['404'] = '404 fout!';
	$t['nopanic'] = 'Geen paniek! We begrepen je gewoon niet goed :(';
	$t['notfound'] = 'De pagina die je zocht is niet in dit universum...';
	$t['previous'] = 'Vorige pagina';
}

function lang_index(&$t)
{
	$t['nav_vote'] = 'Stem';
	$t['nav_leaderboard'] = 'Prijzen';

	$t['indexmsg'] = 'Dit is de voorpagina van CSO';
	$t['expl'] = 'We zullen je uitleggen wat deze site is en wat we op deze site doen!';
	$t['qwhatisthis'] = 'Wat is dit?';
	$t['exp_whatisthis'] = 'Dit is een website waarop je kan stemmen op het land dat je vind dat de huidige wedstrijd moet winnen. Je kan redenen om op het land te stemmen vinden onder het land, of stemmen op je eigen land.';
	$t['qhowdoesthiswork'] = 'Hoe werkt het?';
	$t['exp_howdoesthiswork'] = 'Er zijn vijf landen waarop je een week lang dagelijks kan stemmen tijdens de voorrondes. Na een week gaat het land met de meeste stemmen door naar de finale. De winnaars van de finale in de laatste week van de wedstrijd zullen prijzen winnen.';
	$t['qwhatisthegoalofthis'] = 'Wat is het doel hiervan?';
	$t['exp_whatisthegoalofthis'] = 'Het doel van de website is om te entertainen en om een visie te krijgen over welk land de meeste aanhangers heeft. Wedstrijden zorgen voor winnaren en kunnen landen met veel aanhangers hoger in de ranglijsten plaatsen.';
	$t['qhowdoestheleaderboardwork'] = 'Hoe werkt de ranglijst?';
	$t['exp_howdoestheleaderboardwork'] = 'Als een land een wedstrijd wint of op de tweede of derde plaats komt krijgt het een prijs die op de ranglijst te zien is. Al de prijzen zullen te zien zijn bij de naam van het land.';
	$t['qhowdoesvotingwork'] = 'Hoe stem je op een land?';
	$t['exp_howdoesvotingwork'] = 'Stemmen op een land is makkelijk. Ga naar de de rij van het land waarop je wilt stemmen met de redenen waarom je op het land kan stemmen en klik op de grote naam waarnaast staat hoeveel stemmen het land al heeft. De stem zal geteld worden en bij het totaal worden gevoegd.';
	$t['qwhatnow'] = 'En nu?';
	$t['exp_whatnow'] = 'Nu je begrijpt hoe dit stemspel werkt kan je stemmen op het land waarvan je vind dat het de prijzen verdient en waarvan je wilt dat het duidelijk te zien is in de ranglijst. Als je iets niet begrijpt, kan je ons altijd een e-mail sturen.';

	$t['infinale'] = 'In Finale';
	$t['preround'] = 'Voorrondes';
	$t['voteby'] = 'Stem op een land door op de naam te klikken';
	$t['previousvote'] = 'Je hebt al gestemd voor';
	$t['timetovote'] = 'seconde tot je weer kan stemmen';
	$t['newvote'] = 'Je hebt nu gestemd voor';
	$t['invalidvote'] = 'Je kan hier niet op stemmen';
	$t['endat'] = 'Stemmen eindigt op';
	$t['votes'] = 'stemmen';
	$t['whyvote'] = 'We hebben wat redenen waarom je op dit land moet stemmen';
	$t['medals'] = 'Medailles';

	$t['leaderboarddesc'] = 'Hier wordt je geinformeerd over hoeveel prijzen elk land heeft gewonnen!';
	$t['medalstotal'] = 'prijzen';
	$t['ofwhich'] = 'Waarvan';
	$t['caption'] = 'Legenda';
	$t['year'] = 'Meeste medailles gewonnen binnen een jaar';
	$t['1st'] = 'Op nummer 1 eindigen in de competitie';
	$t['2nd'] = 'Op nummer 2 eindigen in de competitie';
	$t['3rd'] = 'Op nummer 3 eindigen in de competitie';
	$t['gold'] = 'Goud';
	$t['silver'] = 'Zilver';
	$t['bronze'] = 'Brons';
	$t['crown'] = 'Kroon';
	$t['medal'] = 'Medaille';
	$t['emperor'] = 'Keizer van';
}

function lang_about(&$t)
{
	$t['learnmore'] = 'Leer meer over de makers van cso.uk!'; 
	$t['developers'] = 'Ontwikkelaars';
	$t['devtext'] = 'Wij, de ontwikkelaars van deze website, doen ons best om de website up-to-date en goed ontwikkeld te houden. We controleren continu op fouten in de code en leren nieuwe dingen, om de site stabieler en sneller te maken. We willen graag jullie feedback over de site horen!';
	$t['designers'] = 'Ontwerpers';
	$t['destext'] = 'De ontwerpers van de website zorgen voor de stijl van de website. Ze verzorgen de CSS en controleren dagelijks of er iets is om te verbeteren om de site intuitiever te maken. De ontwerpers vinden ook nieuwe ontwerpstijlen om de website moderner te maken. Ontwerp is namelijk erg belangrijk voor de populariteit. Geef ons jullie mening via e-mail!';
}

function lang_ads(&$t)
{
	$t['advertiseon'] = 'Adverteer op cso.uk';
	$t['advertiser'] = 'Ben jij een adverteerder?';
	$t['advertisertext'] = 'Wil je adverteren op deze website? Dan ben je op de juiste plaats! We zijn altijd aan het zoeken naar nieuwe adverteerders die op onze website willen adverteren. We hebben een wijde doelgroep over de hele wereld. Deze website is een internetspel, of beter beschreven, een internationaal spel waarbij je kan stemmen voor een land. De website kan mensen actief bezig houden omdat het onduidelijk is wie het spel zal winnen.';
	$t['adskind'] = 'Wat voor advertenties zoeken we?';
	$t['adskindtext'] = 'We zouden graag willen bespreken wat voor advertenties je wilt laten zien op cso.uk. Zo kunnen we beter begrijpen wat het doel is en een goede afspraak maken. We hebben een paar regels over de inhoud van de advertenties. We accepteren geen 18+ advertenties zonder uitzondering. We zouden onze website namelijk graag schoon willen houden van potentieel afstotend materiaal. We zullen zulke advertenties dan ook niet accepteren.';
	$t['adskindtext2'] = 'We accepteren wel advertenties die bestaan uit text of een simpele foto. Als je een video advertentie wilt plaatsen op cso.uk, kan je ons er nog steeds over contacteren. We zullen dan overwegen om de advertentie aan te nemen.';
	$t['adplacement'] = 'Adverteerruimte op cso.uk';
	$t['adplacetext'] = 'Omdat we verschillende soorten advertenties accepteren, hebben we ook verschillende plaatsen voor de verschillende soorten. Simpele foto\'s zullen in de grijze balken worden geplaatst tussen de informatie, zoals het voorbeeld hieronder. Als je zo\'n rij vindt met een link naar deze pagina is er een grote kans dat er nog geen afspraak is gemaakt met een andere adverteerder om die ruimte te gebruiken.';
	$t['adplacetext2'] = 'Als je alleen tekst advertenties hebt aan te bieden, kan je hier nog steeds terecht! We hebben ook genoeg plaats voor zulke advertenties. Je kan je tekst in de hoofdbalk van de stempagina zetten, of helemaal onderaan elke pagina. Vertel in je e-mail over de soort advertentie, hoeveel de advertentie op de website moet voorkomen, hoeveel geld er onderhandeld zal worden en op welke manier.';
}

function lang_contact(&$t)
{
	$t['country'] = 'Land - Nederland';
	$t['phone'] = 'Telefoonnummer';
	$t['altphone'] = 'Alternatief Telefoonnummer';
	$t['sendmailtitle'] = 'Stuur ons een e-mail!';
	$t['sendmailtext'] = 'Stuur ons hierover een e-mail!';
	$t['your_name'] = 'Je naam';
	$t['your_mail'] = 'Je email';
	$t['subject'] = 'Onderwerp';
	$t['comment'] = 'Bericht';
	$t['send_mail'] = 'Verzend';
}
?>