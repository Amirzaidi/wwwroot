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
}

function lang_index(&$t)
{
	$t['nav_vote'] = 'Stem';
	$t['nav_leaderboard'] = 'Stemstatus';

	$t['indexmsg'] = '';
	$t['qwhatisthis'] = '';
	$t['exp_whatisthis'] = '';
	$t['qhowdoesthiswork'] = '';
	$t['exp_howdoesthiswork'] = '';
	$t['qwhatisthegoalofthis'] = '';
	$t['exp_whatisthegoalofthis'] = '';
	$t['qhowdoestheleaderboardwork'] = '';
	$t['exp_howdoestheleaderboardwork'] = '';
	$t['qhowdoesvotingwork'] = '';
	$t['exp_howdoesvotingwork'] = '';
	$t['qwhatnow'] = '';
	$t['exp_whatnow'] = '';

	$t['infinale'] = 'In Finale';
	$t['preround'] = 'Voorrondes';
	$t['previousvote'] = 'You hebt al gestemd voor';
	$t['timetovote'] = 'seconde tot je weer kan stemmen';
	$t['newvote'] = 'Je hebt nu gestemd voor';
	$t['invalidvote'] = 'Je kan hier niet op stemmen';
	$t['endat'] = 'Stemmen eindigt op';
	$t['votes'] = 'stemmen';
	$t['whyvote'] = 'We hebben wat redenen waarom je op dit land moet stemmen';
	$t['medals'] = 'Medailles';
}

function lang_example_langtest(&$t)
{
	$t['currlang'] = 'Huidige taal';
	$t['welcome'] = 'Welkom op de pagina!';
	$t['exit'] = 'Pagina verlaten';
	$t['change'] = 'Taal veranderen';
}

function lang_ads(&$t)
{
	$t['your_name'] = 'Je Naam';
	$t['your_mail'] = 'Je Email';
	$t['subject'] = 'Onderwerp';
	$t['comment'] = 'Bericht';
	$t['send_mail'] = 'Verzend';
}
?>