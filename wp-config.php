<?php
/** 
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} 
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni 
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', 'wordpress');

/** MySQL felhasználónév */
define('DB_USER', 'root');

/** MySQL jelszó. */
define('DB_PASSWORD', '');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8mb4');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '{<jy#sul*9;7M.),klpu_dN.edNpo1Z^+?2h(*)pgM:/O1b_2a4?.,SO{RAl#jAF');
define('SECURE_AUTH_KEY', ')h*i3(*AVR/6RM?ZPhZkgux( &^[!jFjMW$c(>c?B5;Ns>`oN(HX]`#|kFU*3/$y');
define('LOGGED_IN_KEY', 'noQGCGobKr0kBP?zXye^*fsJ)F K!},@Ng:)HfEw$Lf}qW/&V#vHv[*??+)LDui ');
define('NONCE_KEY', 'X2PK&j(2L%M#72I8#41}q/,X,X:/2G2KjCFF 4m@5VbpmZ|p4@Z >(dQy&,y@><w');
define('AUTH_SALT',        'D*99&?^qPG[fpP5Ys Vuy*hZa.V$aM9|o62=R?L089jd]1k.D`[%Z~gnZ67xH%|q');
define('SECURE_AUTH_SALT', '5Ka,3[fBgwdAINFO,]3RyhC?<TT6eYw_qdN}ZDKr#d3MA*:)kj-.k5o~FpU}`Tiz');
define('LOGGED_IN_SALT',   '#_q?gsx[SCdwWPYE3[>;kxFxV2C)*yfjC!sv6%pq//Z.@xHb<RQ=1F>(t2zGXysz');
define('NONCE_SALT',       'c8=XupCyqrC6|~bR3wsrn(_!mYf04Y(%Zeim ]uJLPuIycLP)@u%`vbqXt1m9?7g');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során. 
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
