Utvärdering av laddningstid och användbarhet
=======================

Genom att analysera olika webbsidors laddningstider så skapar vi en djupare förståelse för hur prestandan påverkar sidornas användbarhet.

Urval
-----------------------

Syftet har varit att hitta etablerade filmbolag som producerar dokumentärfilmer i Sverige.

Urvalet är gjort utifrån beviljade MEDIA-stöd till Sverige 2019 enligt Svenska filminstitutets hemsida. De webbplatser som valts ut har alla fått utvecklingsstöd från EU (slate funding) [^1].

Att ett filmbolag har fått slate funding är en indikator för att bolaget är etablerat i branchen eftersom det bland annat ställs krav på finansiella- och operationellaresurser samt även kvalitet.

Följande webbsidor har valts ut:

+ WG Film[^2]
+ B-Reel Films[^3]
+ Momento Film[^4]

Metod
-----------------------

Först har webbplatserna analyserats med *Google Pagespeed* [^5] varefter dess utvalda sidor har analyserats med *devtools* flik *networks* under 3 upprepade test. Varje test i devtools har föregåtts av rensning av cache och hard reload men *Disable cache* har inte använts.

Resultat
-----------------------
[Rådata](https://docs.google.com/spreadsheets/d/1sinZAvPyuTR_6zE1h0_5pvKI31GUHe52QkI9CSZq5Sk/edit?usp=sharing "Rådata")


#### WG film

[FIGURE src="image/wg-film.png?w=300" class="left" caption="WG-film"]
[FIGURE src="image/wg-film_2.png?w=300" class="clearfix" caption="WG-film startsida"]

##### Länk
    http://www.wgfilm.com/

Sidan laddar långsamt pga att den även laddar dolda bilder vilket skulle kunna avhjälpas med lazy loading.

#### B-Reel Films

[FIGURE src="image/b-reel_films.png?w=300" class="left" caption="B-reel films"]
[FIGURE src="image/b-reel_films_2.png?w=300" class="clearfix" caption="BR-F startsida"]

##### Länk
    https://brf.co/

Sidan använder gamla format på bilder och har kod som blockerar renderingen av sidan.

#### Momento Film

[FIGURE src="image/momento-film.png?w=300" class="left" caption="Momento-film"]
[FIGURE src="image/momento-film_2.png?w=300" class="clearfix" caption="Momento-film"]

##### Länk
    http://momentofilm.se/

Sidan använder inte HTTPS och använder sig av sårbar jQuery-kod.

Analys
-----------------------
Alla tre webbplatser ser ut att använda sig av Wordpress. En vanlig åkomma ser ut att vara att det finns renderingsblockerande filer. För att avhjälpa detta skulle man behöva försöka ladda viktig Javascript och CSS före mindre viktiga filer som kan laddas in senare när sidan har renderats.

Det är också vanligt att använda sig av bildformat som skulle kunna ersättas med nyare format så som JPEG 2000, JPEG XR och WebP för att få sidan att ladda snabbare.

Rangordning av webbplatserna
---------------------------
1. Momento film
2. B-reel films
3. WG film

Momento Film får bäst betyg på Google Pagespeed och laddar sidan mycket snabbare än övriga sidor.

Webbplatsernas snabbhet
-------------------
För att en sida skall anses ladda snabbt så anser jag att den bör ladda inom 2 sekunder.
WG film och B-reel films klarar inte denna gräns medan Momento film gör väldigt bra ifrån sig i förhållande till de andra webbplatserna.

Generellt så är spridningen stor mellan webbplatsernas snabbhet. Men det är anmärkningsvärt hur långa laddningstider de två långsammare webbplatserna har där den värsta aldrig slutar att ladda ett filmklipp.

Referenser
-----------------------

[^1]: [Beviljade MEDIA-stöd till Sverige 2019](https://www.filminstitutet.se/globalassets/1.-sok-stod/kreativa-europa/beviljade-media-stod/beviljade-media-stod/beviljade-media-stod-till-sverige-2019.pdf "Beviljade MEDIA-stöd till Sverige 2019")


[^2]: [WG Film](http://www.wgfilm.com/ "WG Film")

[^3]: [B-Reel Films](https://brf.co/ "B-Reel Films")

[^4]: [Momento Film](http://momentofilm.se/ "Momento Film")

[^5]: [Google Pagespeed](https://developers.google.com/speed/pagespeed/insights/ "Google Pagespeed")

Se fotnoter längst ned på sidan.

Övrigt
-----------------------

Rapporten är skriven av Fredrik Wassermeyer.
