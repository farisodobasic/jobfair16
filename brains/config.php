<?php
	session_start();
	date_default_timezone_set("Europe/Sarajevo");

	$debug = false;

	if($debug) {
		error_reporting(E_ALL);
 		ini_set('display_errors',1);
		ini_set('display_startup_errors',1);
 		error_reporting(-1);

		$url_home = 'http://www.jobfair.ba/';
		$dir_root = '/var/www/html/jobfair16/';

		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = 'orhan321';
	}else{
		$url_home = 'http://www.jobfair.ba/';
		$dir_root = '/home/eestecsa/src/jobfair14/';

		$db_host = 'localhost';
		$db_user = 'eestecsa_jf2012';
		$db_pass = 'Prozor0U';
	}


	$db_name_cv = 'eestecsa_jf2012';
	$db_name_jf = 'jf_baza';
	$db_name 	= 'jf_ultimate';

	/*
		media path varijable
			> $media_path: mjesto na serveru gdje su smještene naslovne slike; n_velika, n_srednja, n_mala
			> $media_url: url putem kojeg se pristupa slici
	*/

	$media_path = $dir_root.'media/';
	$media_url 	= $url_home.'media/';

	// Path za naslovne slike
	$n_velika 	= $media_path."naslovna/jfmedia.v_";
	$n_srednja 	= $media_path."naslovna/jfmedia.s_";
	$n_mala		= $media_path."naslovna/jfmedia.m_";

	// Path za galeriju
	$gal_path 	= $media_path."gal/";
	$gal_thumb	= $media_path."gal/th_";

	/* Url naslovnih slika */
	$url_velika 	= $media_url."naslovna/jfmedia.v_";
	$url_srednja 	= $media_url."naslovna/jfmedia.s_";
	$url_mala		= $media_url."naslovna/jfmedia.m_";

	/* Url galerije */
	$url_gal 		= $media_url."gal/";
	$url_gal_thumb 	= $media_url."gal/th_";

	/*  Dimenzije glavne slike
		Par1: image width;
		Par2: image height;
		Par3: image location;
	*/
	$dimensions = array(
		array(1200, 450, $n_velika),
		array(300, 150, $n_srednja),
	);
?>
