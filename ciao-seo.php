<?php
/**
Plugin Name: Ciao SEO
Plugin URI: https://wordpress.org/plugins/ciao-seo
Description: Ciao SEO riporta dei semplici ma efficaci consigli SEO, in italiano, che rispettano a pieno le linee guida di Google e dei motori di ricerca. Il nome "Ciao SEO" deriva dal fatto che questo plugin si basa sul plugin "Hello Dolly".
Version: 1.0.1
Author: Yuri Carlenzoli
Author URI: https://yuricarlenzoli.it/
License: GPLv3
*/

function hello_seo_get_quote() {
$quotes = "Scrivi per le persone ma ricordati che se non ti trovano online stai scrivendo per niente.
Cerca di fare un titolo corto e descrittivo.
Non avere fretta, i risultati (visite/posizionamento) arrivano con il tempo.
Controlla bene i contenuti prima di pubblicarli, evita il più possibile gli errori.
Non importa se è una news, un blog non è Twitter, scrivi contenuti.
Ricordati di scrivere tutti i dettagli che possono essere utili alle persone.
Monitora saltuariamente le performance del sito web con la Google Search Console.
Non occore mettere sempre il nofollow, per affilizioni/per i links a pagamento mettilo però.
Anche se i commenti hanno il nofollow/l'ugc sui links il testo è dei commenti è indicizzabile, non approvare tutti i commenti.
Non focalizzarti solo su parole chiave o varianti nel titolo e nella descrizione, invoglia a leggere l'articolo o la pagina.
Non usare titoli o descrizioni uguali o troppo simili tra loro.
Se possibile implementa i dati strutturati. Solo quelli utili per il tuo sito web.
Non serve a nulla assegnare ad un articolo troppe categorie o tag.
Se un sito web ha scritto qualcosa di simile, magari meno in certi versi e più in altri può essere un approfondimento, linkalo.
Testa stili di scrittura diversi, anche lunghezze di articoli di versi, poi controlla le metriche, anche in base il dispositivo.
Non diventare matto/a nella ricerca di parole chiave, tanto devi scrivere naturalmente.
Non hai tempo, idee o voglia di scrivere?, fai senza, meglio fare un bell'articolo che uno pessimo.
Hai pubblicato?, non occorre spammarlo in 1000 community, social, ecc.
La casa che sta sotto la casa è una casa in parte ad una casa ... a te piacerebbe leggerlo?, non fare ripetizioni inutili.
Non scambiare links.
Non pensare agli aggiornamenti algoritmici, pensa a fare un buon sito per le persone.
Se hai detto tutto non dire altro solo per aumentare il numero di caratteri.
Non copiare contenuti di altri siti web.
Rispetta il copyright anche delle immagini.
";
$quotes = explode( "\n", $quotes );
return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}


function hello_seo() {
$chosen = hello_seo_get_quote();
echo "<p id='seo'>$chosen</p>";
}


add_action( 'admin_notices', 'hello_seo' );
function seo_css() {
$x = is_rtl() ? 'left' : 'right';
echo "
<style type='text/css'>
#seo {
float: $x;
padding-$x: 15px;
padding-top: 5px;
margin: 0;
color: #0073aa;
}
</style>
";
}

add_action( 'admin_head', 'seo_css' );
?>