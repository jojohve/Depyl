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
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'Depyl' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );


/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WimIU}_tVz]8a_2e&{TY;}{;(:%t#^5b>HAOA!Gfbw7fnn_*n4V)})ot3,e7u]7+' );
define( 'SECURE_AUTH_KEY',  '+=vM}^-Xvg=H1a(T`^SOHX/t cuPj^7=sIfW`elCB97L<2zo1qrKzyftP3Ss9:Lc' );
define( 'LOGGED_IN_KEY',    'vktAG14N5L(TNDke*FriC,x3mk%p6Ckc-YdcwHv=H|Qpx?DhyiiZiB~@@U=VyT)$' );
define( 'NONCE_KEY',        ';:M*zn%gcD/!Y@?oSO+I|Wp/0LL662G{U-d83@R,n-,x^Hg=KiXo(q*OieqZ-JgB' );
define( 'AUTH_SALT',        ':1~U[xXV6_ZYrB$`(q)MTR9^{`mAhAxPaYgJ.DCFg%Lkg5V Rt>iq-:P@prFyg%c' );
define( 'SECURE_AUTH_SALT', '[Q!|5~DKT0lxw7VaQ|4k[4JlXMI:prwy~(&;8xgR2lyCk_P`hjOEz1/DI5qHMK/-' );
define( 'LOGGED_IN_SALT',   '#Y!`Ihu~Gzs?S;<f@nP,WVcGOv-mnR/lP*ju.D/=hG1]&6dwQv3w@}Vr`p|3eX%S' );
define( 'NONCE_SALT',       'tqTZ A B!R{[DR>Rp~.CH>kx}iNX|f<h >j=xG1)4Z+AV{Rs=Hm7~[z>aT0pCB;d' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli sviluppatori di temi e plugin di utilizzare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Aggiungi qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */


define('WP_HOME', 'http://depyl.local');
define('WP_SITEURL', 'http://depyl.local');
/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
