Analys av laddningstid
=======================

Genom att analysera olika webbsidors laddningstider så skapar vi en djupare förståelse för hur prestandan påverkar sidornas användbarhet.

Urval
-----------------------
Tanken var att välja stora kommuners webbplatser eftersom de troligtvis har störst möjligheter till att lägga resurser på sin webbnärvaro.

Sveriges tre största[^1] kommuners webbplatser har valts ut utifrån SCB statistik[^6]. Stockholms stad med 972 647 invånare är störst följt av Göteborgs stad med 578 327 invånare och tredje största kommun Malmö stad med 343 650. 

Följande webbsidor har således valts ut:

+ Stockholms stad[^2]
+ Göteborgs stad[^3]
+ Malmö stad[^4]

Metod
-----------------------

[FIGURE src="image/audit-settings.png?w=300" class="right" caption="Inställningar för Audits"]

Webbplatserna har analyserats med *Google Pagespeed*[^5] därefter har *startsida*, sida för *skola/utbildning* och sist sida för *kontakt* analyserats med *devtools* flik *Audits* även kallat *Lighthouse* för respektive mobil och dator.

Inställningar för Audits se bild.






Resultat
-----------------------
[Rådata](https://docs.google.com/spreadsheets/d/1pe8Lwa6KqbcpkRm1UJ0W2vOFjzQSYTQe5lpAdUX5kjY/edit?usp=sharing    "Rådata")


#### Stockholms stad

[FIGURE src="image/stockholm_start.png?w=300" class="left" caption="Startsida"]
[FIGURE src="image/stockholm_school.png?w=300" class="clearfix" caption="Förskola och skola"]

##### Länk
    https://start.stockholm/

Sidan tar 8 sec innan den blir interaktiv i mobilläge pga att den även laddar dolda bilder vilket skulle kunna avhjälpas med lazy loading.

#### Göteborgs stad

[FIGURE src="image/goteborg_start.png?w=300" class="left" caption="Startsida"]
[FIGURE src="image/goteborg_school.png?w=300" class="clearfix" caption="Förskola och utbildning"]

##### Länk
    https://goteborg.se/

Sidan tar 7,1 sec innan den blir interaktiv i mobilläge pga att den även laddar onödig css vilket blockerar första renderingen. Skulle kunna avhjälpas genom att leverera kritisk css inline.

#### Malmö stad

[FIGURE src="image/malmo_start.png?w=300" class="left" caption="Startsida"]
[FIGURE src="image/malmo_school.png?w=300" class="clearfix" caption="Utbildning och förskola"]

##### Länk
    https://malmo.se/

Sidan tar 9,4 sec innan den blir interaktiv i mobilläge pga att den även laddar onödig css vilket blockerar första renderingen. Skulle kunna avhjälpas genom att leverera kritisk css inline vilket kan spara 3,17 sec.

Analys
-----------------------


Rangordning av webbplatserna
---------------------------
1. Stockholms stad (87)
2. Göteborgs stad (81)
3. Malmö stad (72)

Stockholms stad förljs hack i häl av Göteborgs stad och Malmö stad presterar här sämst då ett genomsnitt av alla värden, både för Google Pagespeed och för Google Lighthouse tas fram. Det är intressant att iaktta att rangordningen speglar antal invånare och man kan fundera över om det finns någon koppling mellan resursunderlaget för webbplatsen och dess prestation.

En vanlig brist verkar vara att sidorna tar lång tid på sig innan de blir interaktiva vilket drar ned betyget för *speed*. Detta kan oftast avhjälpas med lacy loading av bilder och att kritisk css laddas först medan oanvänd css laddas senare.

Referenser
-----------------------

[^1]: Störst till befolkningsmängd.

[^2]: [Stockholms stad](https://start.stockholm/ "Stockholms stad")

[^3]: [Göteborgs stad](https://goteborg.se/ "Göteborgs stad")

[^4]: [Malmö stad](https://malmo.se/ "Malmö stad")

[^5]: [Google Pagespeed](https://developers.google.com/speed/pagespeed/insights/ "Google Pagespeed")

[^6]: [SCB](https://www.scb.se/hitta-statistik/statistik-efter-amne/befolkning/befolkningens-sammansattning/befolkningsstatistik/pong/tabell-och-diagram/kvartals--och-halvarsstatistik--kommun-lan-och-riket/kvartal-13-2019/)

Se fotnoter längst ned på sidan.

Övrigt
-----------------------

Rapporten är skriven av Fredrik Wassermeyer.
