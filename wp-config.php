<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'circular' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0@sLp@78@CaDtKiPh{Zph*>*pzro:JL-2:`eFNJ(*2St%-W,|1m!Q3@x?RB,:>O-' );
define( 'SECURE_AUTH_KEY',  'Ct^&5Ak<Fy`<|qb6>^.)aBOc@V2CeqjUZWd,VJ%YjT31@DUtqCHxIH%MJ%#=2K:`' );
define( 'LOGGED_IN_KEY',    'zi/a2!cQA9wBC_p>Tj?[C1^>TzH0|1#M%!wtLL_X57ngb$-pzo3bgkP-;eA,B/Ek' );
define( 'NONCE_KEY',        'Rhfl4WkD%W5rg:|>w$=NR-lEZ`({jOhGsm<;gan=}o){4R?,#CS^ 7m=9|>kzD6u' );
define( 'AUTH_SALT',        'j)nRqUh eTD/_=OSB~!DaU.h3,+jVlvnlu|FsCzL@S_/kpK#11B2vmt[Y=)wSAhK' );
define( 'SECURE_AUTH_SALT', '!bN9FT+;9+b,1iuwKpk4_55vKK)By![n<pA>8~bPl!P,M=iyvlSty.FL /0$L:0P' );
define( 'LOGGED_IN_SALT',   '9u016mE_%[OeQ j^Dl:.H5 ~K#8n# +?l@o>sJ|0VS^%vPve[9^dt!AkD2PM$;=;' );
define( 'NONCE_SALT',       '<#Axr{J{}h#Q4 U>2Unp))8xW:a(TML6xuw&x3,hoXQLwt}$c9>:BtYmaQly_nH>' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
