# ohmprofessional - wordpress theme

Ohm Professional Landing Page:
Für ein Projekt im Rahmen der Ohm-Professional-School soll eine Landingpage entstehen, die sowohl statische Elemente wie zentraler Inforaum mit Werbe-Sprüchen/Keymessage sowie in Menüpunkten Informationen zum Studienprogramm, Termine, Ansprechpartner, Links zu Modulen/Anrechenbarkeit etc. enthalten soll.

## Wichtige Links (Anforderung + Konzeption)
- Trello Board: https://trello.com/b/P1Ey6F0C/ohm-professional-school-landing-page
- Anforderung: https://usecanvas.com/mirko/ia-ohm-professional-school-landingpage/3vm1xzXO5oJrSepcyU3Yzl

## Installation - Windows

1. Wechsel im Explorer in das theme-Verzeichnis deiner Wordpress Installation
  1.  z.B: `C:/MAMP/htdocs/wordpress/wp-content/themes`
2. Rechte Maus `Git Bash Here` öffnet die git-bash vom aktuellen Verzeichnis
3. Führe den Befehl in der git-bash aus: `git clone https://github.com/schrammIT-ohm/ohmprofessional.git`
  1. nun wird das repository in das Verzeichnis `../htdocs/wordpress/wp-content/themes/ohmprofessional` heruntergeladen
4. Öffne das neue Verzeichnis `ohmprofessional` im "Atom" (oder einer IDE deiner Wahl)
  1. in git-bash: wechsel in das ohmprofessional verzeichnmiz mittels: `cd ohmpreofessional` 
5. Erstelle einen neuen branch
  1. über git-bash: `git checkout -b <branchName>` (<branchName> z.B. Nachname + V1)
  2. über atom mit git plus package: `Checkout New Branch`
6. Änderungen lokal committen
  1. über git-bash: `git commit -am "Kurze beschreibung der Aenderungen"`
  2. über atom: `Add All and Commit`
7. Upstream einstellen
  1. über git-bash: `git push -u origin <branchName>`
8. Änderungen des branches an den Server pushen (senden)
  1. über git-bash: `git push`
  2. über atom: `Push` (klappt evtl. nicht!)


## History

### 13.12.2016

#### new
- .gitignore: ignore `node_modules` on git commit
- 404.php: FehlerSeite für invalide URLs
- front-page.php: Template File for Landing Page (FullScreen Layout with FullScreenBackground)
- gulpfile.js: Taskrunner (browserSync + LessCompiler ...) -> run with `gulp watch`
- package.json: NPM installer für TaskRunner (terminal: `npm install` in this folder)
- searchform.php: SearchForm for searching - atm: used in sidebar-front-page.php
- sidebar-front-page.php: right sidebar on front-page
- /img: includes logo and backgroundImage
- /less: used for writing less instead of css (needs `gulp watch` running)

#### updated
- style.css: (contains basic css for front-page)
- functions.php: WidgetArea für Sidebar; CustomPost Type
- header.php: removed `<header>` tag

## Credits

TODO: Write credits

## License

TODO: Write license
