<?php
date_default_timezone_set('America/New_York');

function lang(&$t)
{
	$t['metadesc'] = 'countriesstandoff.com is a website where people can vote on their/or other countries during a standoff. Every six months the voting resets and new countries will be picked. The country that wins, will be honoured in a special rankinglist that keeps forever!';
	$t['lang'] = 'English';
	$t['advertisehere'] = 'Advertise Here';
	$t['timezone'] = 'DST';

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

	$t['infinale'] = 'In Finals';
	$t['preround'] = 'Preliminaries';
	$t['previousvote'] = 'You have previously voted for';
	$t['timetovote'] = 'seconds until you can vote again';
	$t['newvote'] = 'You have now voted for';
	$t['invalidvote'] = 'You can\'t vote for this';
	$t['endat'] = 'Voting ends at';
	$t['votes'] = 'votes';
	$t['whyvote'] = 'We have listed some facts about why you should vote for this country';
	$t['medals'] = 'Medals';
}

function lang_example_langtest(&$t)
{
	$t['currlang'] = 'Current language';
	$t['welcome'] = 'Welcome to page!';
	$t['exit'] = 'Leave page';
	$t['change'] = 'Change language';
}

function lang_about(&$t)
{
	$t['learnmore'] = 'Learn more about the makers of cso.com!'; 
	$t['developers'] = 'Developers';
	$t['devtext'] = 'We, the developers of this site, do our utmost best to keep up the site updated and well coded. We check for eventual code bugs or problems with the site. We always learn new ways to code things, that is why we always keep on making the site faster. We would like to her your feedback about the site!';
	$t['designers'] = 'Designers';
	$t['destext'] = 'The designers of this website do the styling part. Mostly they design the website or change/add/optimize the CSS. They daily check the sources and see what they can code better so you can enter the site faster. The designers try to find new design styles so they can work on making the site more stylish. Design is very important. Leave us your feedback through mail!';
}

function lang_ads(&$t)
{
	$t['advertiseon'] = 'Advertise on cso.com';
	$t['advertiser'] = 'Are you an advertiser?';
	$t['advertisertext'] = 'And are you willing to advertise on our website? Then you are on the right page! We are always searching for new advertisers that would like to advertise on our website. We have a wide viewing population throughout the world. This website is basically an internet "game". Well actually better described as an international voting system where you can vote for the country you think is better. This site is time consuming since you are always wondering who will win.';
	$t['adskind'] = 'What kind of ads are we searching for?';
	$t['adskindtext'] = 'We first would like to negotiate about the type of ad you would like to show on cso.com. This way we can sure understand both sides better and make a good deal. We do have a few rules about the containments of the ad. We do not accept any NSFW, gore, sexual, or any sort of 18+ ad. We would like to keep our website clean from sexual interference with our viewers. Please do not come over with these sort of ads. We will not accept the offer.';
	$t['adskindtext2'] = 'On the other hand, we accept ads that are or text or banner form. If you have a video ad and still would like to advertise on cso.com, be sure to contact us about it. There is room for negiotiation about video ads.';
	$t['adplacement'] = 'Ads placement on cso.com';
	$t['adplacetext'] = 'Since we accept different forms of ads, we also offer you places for the ads based on their form. Banner ads will be placed between the grey/white boxes that contain information. See the example below. If you see a row like this with "Advertise here!", there is a big chance we are still searching for an advertiser who can put his banner form ad there.';
	$t['adplacetext2'] = 'However, if you only have text-based ads, then you still are on the right address! We also offer places for text ads. You can put your text ad in the header (under "Must see also:"). Or there is space on the bottom of the page where you can find "Privacy policy" etc. Please contact us about the form of ad, how many you would like to have on cso.com, pricing, type of ad (PPC, CPM) etc.';
}

function lang_contact(&$t)
{
	$t['sendmailtitle'] = 'Send us an email!';
	$t['sendmailtext'] = 'Send us an email about it!';
	$t['your_name'] = 'Your name';
	$t['your_mail'] = 'Your email';
	$t['subject'] = 'Subject';
	$t['comment'] = 'Comment';
	$t['send'] = 'Send';
}
?>