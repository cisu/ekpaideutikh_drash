<?php
/**
 * Οι βασικές ρυθμίσεις για to WordPress
 *
 * Το wp-config.php χρησιμοποιείται από την δέσμη ενεργειών κατά την
 * διαδικασία εγκατάστασης. Δεν χρειάζεται να χρησιμοποιήσετε τον ιστότοπο, μπορείτε
 * να αντιγράψετε αυτό το αρχείο ως "wp-config.php" και να συμπληρώσετε τις παραμέτρους.
 *
 * Αυτό το αρχείο περιέχει τις ακόλουθες ρυθμίσεις:
 *
 * * MySQL ρυθμίσεις
 * * Κλειδιά ασφαλείας
 * * Πρόθεμα πινάκων βάσης δεδομένων
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL ρυθμίσεις - Μπορείτε να λάβετε αυτές τις πληροφορίες από τον φιλοξενητή σας ** //
/** Το όνομα της βάσης δεδομένων του WordPress */
define( 'DB_NAME', 'site_tis_giwtas' );

/** Ψευδώνυμο χρήσης MySQL */
define( 'DB_USER', 'root' );

/** Συνθηματικό βάσης δεδομένων MySQL */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Charset της βάσηςη δεδομένων που θα χρησιμοποιηθεί στην δημιουργία των πινάκων. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Τύπος Collate της βάσης δεδομένων. Μην το αλλάζετε αν έχετε αμφιβολίες. */
define('DB_COLLATE', '');

/**#@+
 * Μοναδικά κλειδιά πιστοποίησηςη και Salts.
 *
 * Αλλάξτε τα σε διαφορετικά μοναδικές φράσεις!
 * Μπορείτε να δημιουργήσετε χρησιμοποιώντας {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Μπορείτε να τα αλλάξετε οποτεδήποτε για να ακυρώσετε τα υπάρχοντα cookies. Θα υποχρεώσει όλους χρήστες να επανασυνδεθούν.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9o+90oTDCHxEQN a_|To{3EqhXBA8tNS3jFez6M]F|*_Je[i?%%Lcx^[vts^CDC:' );
define( 'SECURE_AUTH_KEY',  'aG/ie0~_~}g}x1EpxPcNix^@7dR,E>jfDLg{xD~IT!.XG|Zr~>H=J,iATsYePZ)a' );
define( 'LOGGED_IN_KEY',    ';6TFox> |[;r+=B0tV*hA4%=bKNa{nId$q4dA!1cyt8j#wjeXuMhWGYRQP%3ctNT' );
define( 'NONCE_KEY',        'B>EX*q;+Ob8FB$pY7Hd)y>S(rcSB&+|W*l)g2Gig&6YaOKG3t.WtA SgZ,}KhIo=' );
define( 'AUTH_SALT',        'PpvvG}8a2`NbCTnF#eG+v]bSp%UBYT4kM$Wh i!:dbGs:4=$+$3~Df]- PBPVL/]' );
define( 'SECURE_AUTH_SALT', 'gPLKn,vB)`J;3A=k?q$8Nt s=!K#vgC6+Vlc~X6S.zR1}YT}NM2c|K.j{h=89v>u' );
define( 'LOGGED_IN_SALT',   'Q-Q*W{d7U%O%$jQVc,69jT;4:G6E8DEIRo{FDPC/<[^6#aeTc@6yee`=z(8=}dCg' );
define( 'NONCE_SALT',       '=c !ps+(fZlu4Zh}y_?q&cL*OWDUkB6D{o( P~s?f3SP{D:C@pF*P[ClFe,WfuNi' );

/**#@-*/

/**
 * Πρόθεμα Πίνακα Βάσης Δεδομένων του WordPress.
 *
 * Μπορείτε να έχετε πολλαπλές εγκαταστάσεις σε μια βάση δεδομένων αν δώσετε σε κάθε μία
 * ένα μοναδικό πρόθεμα. Μόνο αριθμοί, γράμματα και κάτω παύλα παρακαλούμε!
 */
$table_prefix = 'wp_';

/**
 * Για προγραμματιστές: Κατάσταση Απασφαλμάτωσης WordPress (Debugging Mode).
 *
 * Αλλάξτε το σε true για να ενεργοποιήσετε την εμφάνισης ειδοποιήσεων για την διαδικασία ανάπτυξης.
 * Η χρήση WP_DEBUG προτείνεται για τους δημιουργούς προσθέτων και θεμάτων
 * στο περιβάλλον ανάπτυξης τους.
 *
 * Για πληροφορίες για άλλες σταθερές που μπορούν να χρησιμοποιηθούν για απασφαλμάτωση,
 * επισκευθείτε το Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Αυτό είναι όλο, σταματήστε γράφετε! Χαρούμενο blogging. */

/** Η απόλυτη διαδρομή τον κατάλογο του WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ορίζει τις μεταβλητές και τα περιλαμβανόμενα αρχεία WordPress. */
require_once(ABSPATH . 'wp-settings.php');
