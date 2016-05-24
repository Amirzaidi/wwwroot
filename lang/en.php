<?php
date_default_timezone_set('America/New_York');

function lang(&$t)
{
	$t['lang'] = 'English';
	$t['advertisehere'] = 'Advertise Here';

	$t['nav_home'] = 'Home';
	$t['nav_adv'] = 'Advertise';
	$t['nav_about'] = 'About us';
	$t['nav_themechange'] = 'Change theme';
	$t['nav_langchange'] = 'Change language';
	$t['nav_contact'] = 'Contact us';

	$t['privacy'] = 'Privacy Policy';
	$t['terms'] = 'Terms and Conditions';
	$t['hoster'] = 'Hoster';
}

function lang_index(&$t)
{
	$t['nav_vote'] = 'Vote';
	$t['nav_leaderboard'] = 'Leaderboard';

	$t['indexmsg'] = 'This is the index of CSO';
	$t['qwhatisthis'] = 'What is this?';
	$t['exp_whatisthis'] = 'This is a website that lets you vote on the country you like or you think should win the contest. You can read the reasons to vote on a country down below or you can vote on your own country.';
	$t['qhowdoesthiswork'] = 'How does this work?';
	$t['exp_howdoesthiswork'] = 'You can vote on five countries during a period of a week. After a period of five weeks the season ends and a final week starts. The winners of those weeks will now enter the final end and compete with each other. The winner of the final week will receive a medal. It will be honoured on the ranking list. ';
	$t['qwhatisthegoalofthis'] = 'What is the goal of this?';
	$t['exp_whatisthegoalofthis'] = 'The goal of this website is to entertain and to understand which country is more prefered by the majority. Votings will result in season winners and thus countries will be able to score medals, become higher in the ranking list and be honoured on our list.';
	$t['qhowdoestheleaderboardwork'] = 'How does the leaderboard work?';
	$t['exp_howdoestheleaderboardwork'] = 'Whenever a country wins a voting (i.e. the one-week voting), it autmatically receives a medal for winning a competition. When a country wins a medal, it will be displayed next to the country\'s name. Winning a season (six weeks), the country will receive a trophy. All medals/trophies or other awards will be displayed next to the country\'s name.';
	$t['qhowdoesvotingwork'] = 'How does voting work?';
	$t['exp_howdoesvotingwork'] = 'Voting is pretty easy. Scroll down till you see the rows of the countries in which you can read the reasons why you should vote on that country. Or you can just vote on your own country. If you wish to vote, click on the country\'s name you want to vote on. The vote will be counted, added to the total, and displayed next to the name.';
	$t['qwhatnow'] = 'What now?';
	$t['exp_whatnow'] = 'Now you understand how this voting game works you can now go and vote on the country you think deserves the medals or in future trophies! If you don\'t understand something or still have a question, be sure to read the FAQ or contact us via e-mail.';


}

function lang_index2(&$t)
{
	$t['infinale'] = 'In Finale';
	$t['preround'] = 'Preliminaries';
	$t['previousvote'] = 'You have previously voted for';
	$t['timetovote'] = 'seconds until you can vote again';
	$t['newvote'] = 'You have now voted for';
	$t['invalidvote'] = 'You can\'t vote for this';
	$t['endat'] = 'Voting ends at';
	$t['votes'] = 'votes';
	$t['whyvote'] = 'We have listed some facts about why you should vote for this country';
}

function lang_langtest(&$t)
{
	$t['currlang'] = 'Current language';
	$t['welcome'] = 'Welcome to page!';
	$t['exit'] = 'Leave page';
	$t['change'] = 'Change language';
}

function lang_ads(&$t)
{
	$t['your_name'] = 'Your Name';
	$t['your_mail'] = 'Your Email';
	$t['subject'] = 'Subject';
	$t['comment'] = 'Comment';
	$t['send_mail'] = 'Send Email';
}
?>