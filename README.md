# ohmprofessional - wordpress theme

TODO: Write a project description

## Installation - Windows

1. Wechsel im Explorer in das theme-Verzeichnis deiner Wordpress Installation
  1.  z.B: `C:/MAMP/htdocs/wordpress/wp-content/themes`
2. Rechte Maus `Git Bash Here` öffnet die git-bash vom aktuellen Verzeichnis
3. Führe den Befehl in der git-bash aus: `git clone https://github.com/schrammIT-ohm/ohmprofessional.git`
  1. nun wird das repository in das Verzeichnis `../htdocs/wordpress/wp-content/themes/ohmprofessional` heruntergeladen
4. Öffne das neue Verzeichnis `ohmprofessional` im "Atom" (oder einer IDE deiner Wahl)
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
- new .gitignore: ignore `node_modules` on git commit
- new 404.php: FehlerSeite für invalide URLs
- new front-page.php: Template File for Landing Page (FullScreen Layout with FullScreenBackground)
- new gulpfile.js: Taskrunner (browserSync + LessCompiler ...) -> run with `gulp watch`
- new package.json: NPM installer für TaskRunner (terminal: `npm install` in this folder)
- new searchform.php: SearchForm for searching - atm: used in sidebar-front-page.php
- new sidebar-front-page.php: right sidebar on front-page
- new /img: includes logo and backgroundImage
- new /less: used for writing less instead of css (needs `gulp watch` running)

- updated style.css: (contains basic css for front-page)
- updated functions.php: WidgetArea für Sidebar; CustomPost Type
- updated header.php: removed `<header>` tag

## Credits

TODO: Write credits

## License

TODO: Write license
