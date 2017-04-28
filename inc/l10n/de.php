<?
    $_L10N = array(
        'chart-type.annotated-timeline' => 'Zeitleiste annotiert',
        'chart-type.bar' => 'Balkendiagramm',
        'chart-type.candlestick' => 'Candlestick-Diagramm',
        'chart-type.geo' => 'Geo-Karte',
        'chart-type.leaflet' => 'Leaflet-Karte',
        'chart-type.network-visjs' => 'Netzwerk (vis.js)',
        'chart-type.sankey' => 'Sankey-Diagramm',
        'chart-type.table' => 'Tabelle',
        'chart-type.timeline' => 'Zeitleiste',

        'chart.annotated-timeline.settings' => <<<HTML
            <p>Erzeugt eine annotierte Zeitleiste. Die erste Spalte muss Datumsformat haben, alle Folgespalten müssen numerisch sein (<a href="https://developers.google.com/chart/interactive/docs/gallery/annotationchart#data-format" target="_blank">Infos</a>).</p>
            <div class="form-group">
                <label class="control-label">Optionen</label>
                <div class='checkbox top-margin-zero'>
                    <label>$1 Separate Skala für 2. Zeitleiste anzeigen</label>
                </div>
            </div>
HTML
        ,

        'chart.bar.settings' => <<<HTML
            <p>Erzeugt ein Balkendiagramm. Gruppenüberschriften müssen in der 1. Spalte sein, gefolgt von einer Spalte pro Gruppenmerkmal (<a target="_blank" href="https://developers.google.com/chart/interactive/docs/gallery/barchart#data-format">Details</a>).</p>
            <div class="form-group">
                <label class="control-label">Balkenrichtung</label>
                <div>
                    <label class="radio-inline">$1 Horizontal</label>
                    <label class="radio-inline">$2 Vertikal</label>
                </div>
            </div>
            <!-- STACKED DOES NOT WORK !
            <div class="form-group">
                <label class="control-label">Balken stapeln</label>
                <div>$3</div>
            </div>-->
HTML
        ,

        'chart.candlestick.settings' => <<<HTML
            <p>Zeigt Eröffnungs- und Schlusswert über einer Varianz. Benötigt <a target=_blank href="https://developers.google.com/chart/interactive/docs/gallery/candlestickchart#data-format">4 Spalten</a> im Abfrageergebnis.</p>
HTML
        ,

        'chart.geo.region-helptext' => <<<HELPTEXT
            Folgende Werte können hier verwendet werden:
            <ul style="padding-left:1.25em">
                <li><code>world</code> - Gesamte Welt.</li>
                <li>
                  Kontinent oder Subkontinent, idenfiziert durch seinen
                  <a target="_blank" href="https://developers.google.com/chart/interactive/docs/gallery/geochart#Continent_Hierarchy">3-stelligen Code</a>, z.B. <code>011</code> für Westafrika.
                </li>
                <li>
                  Ein Land, identifiziert durch einen
                  <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>-Code,
                  z.B., <code>AU</code> für Australien.
                </li>
                <li>
                  Ein Staat in den USA, identifiziert durch einen
                  <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_3166-2:US">ISO 3166-2:US</a>-Code, z.B.,
                  <code>US-AL</code> für Alabama.
                </li>
            </ul>
HELPTEXT
        ,

        'chart.geo.settings' => <<<HTML
            <p>Erzeugt eine Karte eines Landes, eines Kontinents oder einer Region mit Markierungen oder Farbflächen, je nach Darstellungstyp.</p>
            <div class="form-group">
            <label class="control-label">Darstellungstyp</label>
                <div class="radio"  style="margin-top:0">
                    <label class="">$1 <i>Markierungen</i> &mdash; Kreise für Regionen, die mit gegebenen Werten skaliert werden (<a target="_blank" href="https://developers.google.com/chart/interactive/docs/gallery/geochart#markers-mode-format">benötigte Spalten</a>)</label>
                </div>
                <div class="radio">
                    <label class="">$2 <i>Regionen</i> &mdash; färbt ganze Regionen (<a target="_blank" href="https://developers.google.com/chart/interactive/docs/gallery/geochart#regions-mode-format">benötigte Spalten</a>)</label>
                </div>
                <div class="radio">
                    <label class="">$3 <i>Text</i> &mdash; beschriftet Regionen mit Text wie z.B. "Asien" oder "Russland" (<a target="_blank" href="https://developers.google.com/chart/interactive/docs/gallery/geochart#text-mode-format">benötigte Spalten</a>)</label>
                </div>
            </div>
            <div class="form-group">
                <label for="$4" class="control-label">Dargestellte Region $5</label> $6
            </div>
HTML
        ,

        'chart.leaflet.settings' => <<<HTML
            <p><a target="_blank" href="http://leafletjs.com/">Leaflet</a> erzeugt interaktive mobilgerät-taugliche Karten.</p>
            <div class='form-group'>
                <label class="control-label">Koordinatenformat</label>
                <div class="radio"  style="margin-top:0">
                    <label class="">$1 <i>Punktkoordinaten</i> &mdash; die ersten beiden Spalten müssen Breite (<i>y</i>) und Länge (<i>x</i>) angeben</label>
                </div>
                <div class="radio"  style="margin-top:0">
                    <label class="">$2 <i>Well-Known-Text</i> &mdash; die erste Spalte enthält eine <a target="_blank" href="https://de.wikipedia.org/wiki/Simple_Feature_Access#Well-known_Text">WKT-Repräsentation</a> (dies erlaubt neben Punkten weitere Geometriearten wie z.B. Polygone)</label>
                </div>
                <p>Alle weiteren Spalten kommen tabellarisch in das Popup-Fenster für den Marker des jeweiligen Datensatzes. Nur Datensätze mit nichtleeren Koordinaten werden angezeigt.</p>
            </div>
            <div class='form-group'>
                <label class="control-label">Anbieter von Kartenkacheln</label>
                <p>$3</p>
                <div>Benutzerdefinierte URL-Schablone für Kartenkacheln (optional; überschreibt obige Auswahl):</div>
                <div>$4</div>
            </div>
            <div class="form-group">
                <label class="control-label">Anzeigeoptionen</label>
                <div class='checkbox top-margin-zero'><label>$5 Maßstab</label></div>
                <div class='checkbox'><label>$6 Übersichtskarte</label></div>
                <div class='checkbox'>Maximaler Zoomfaktor (leer für Standardwert): $7</div>
                <div class='checkbox'>Lizenzangaben (HTML): $8</div>
                <label class="control-label">Koordinatenreferenzsystem</label>
                <p>Die Koordinaten im Abfrageergebnisses müssen ggf. in dieses Referenzsystem transformiert werden.</p>
                <div class='form-group'>$9</div>
            </div>
HTML
        ,
        'chart.leaflet.no-data' => '<b>Achtung:</b> Die Abfrage lieferte keine Ergebnisse.',

        'chart.network-visjs.options-help' => 'Dieses JSON-Objekt anpassen, um benutzerdefinierte Netzwerkoptionen zu definieren (vgl. <a target="_blank" href="http://visjs.org/docs/network/#options">Dokumentation</a>).',
        'chart.network-visjs.nodequery-help' => <<<HTML
            <p>SQL-Abfrage, die Informationen über Knoten liefert (optional). Die Spalten müssen wie folgt benannt sein::</p>
            <ol class='columns'>
                <li><code>id</code>Knoten-ID (string oder integer)</li>
                <li><code>label</code>Knotenname (string)</li>
                <li><code>options</code>: <a target="_blank" href="http://visjs.org/docs/network/nodes.html">Knotenoptionen</a> (JSON-Objekt) - optional; definiert individuelle Optionen für jeden Knoten. Individuelle Optionen sind vorrangig gegenüber den allgemeinen Knotenoptionen, die unter "Benutzerdefinierte Optionen" angegeben sind.</li>
            </ol>
HTML
        ,
        'chart.network-visjs.settings' => <<<HTML
            <p>Erzeugt einen Netzwerkgraph. Das Abfrageergebnis muss eine Kantenliste sein mit folgenden Spalten:</p>
            <ol class='columns'>
                <li><code>source</code>: Quellknoten-ID (string oder integer)</li>
                <li><code>target</code>: Zielknoten-ID (string oder integer)</li>
                <li><code>weight</code>: Kantengewicht (optional), entspricht Kantenbreite in Pixel (numerischer Wert), Standardwert: 1</li>
                <li><code>label</code>: Kantenbeschriftung (string) - optional</li>
                <li><code>options</code>: <a target="_blank" href="http://visjs.org/docs/network/edges.html">Kantenoptionen</a> (JSON-Objekt) - optional; definiert individuelle Optionen für jede Kante. Individuelle Optionen sind vorrangig gegenüber den allgemeinen Kantenoptionen, die unter "Benutzerdefinierte Optionen" angegeben sind.</li>
            </ol>
            <p><a target="_blank" href="http://ionicons.com/">ionicons</a> werden als Knotensymbole unterstützt.</p>
            <label class='control-label'>Knotenabfrage $1</label>
            <p>$2</p>
            <div class='checkbox top-margin-zero'>
                <label>$3 Entferne Knoten, die nicht im Ergebnis der Knotenabfrage vorkommen</label>
            </div>
            <label class='control-label'>Benutzerdefinierte Optionen $4</label>
            <p>$5</p>
HTML
        ,
        'chart.network-visjs.node-query-invalid' => 'Ungültige Knotenabfrage. Nur SELECT-Abfragen sind erlaubt. Abfrage wird ignoriert.',
        'chart.network-visjs.node-query-prep' => 'Vorbereiten der Knotenabfrage scheitert.',
        'chart.network-visjs.node-query-exec' => 'Ausführen der Knotenabfrage scheitert.',
        'chart.network-visjs.stabilizing-info' => 'Das Netzwerk stabilisiert sich noch, kann aber schon verwendet werden.',
        'chart.network-visjs.stabilizing-stop' => 'Hier klicken um Stabiliserung zu stoppen.',

        'chart.sankey.settings' => <<<HTML
            <p>Erzeugt ein Flussdiagram zwischen zwei Wertmengen.</p>
            <p><a target="_blank" href="https://developers.google.com/chart/interactive/docs/gallery/sankey#data-format">Benötigte Spalten</a>:
            <ul class='columns'>
                <li>1. Quellwert (string)</li>
                <li>2. Zielwert (string)</li>
                <li>3. Gewichtung (numerisch)</li>
            </ul>
            </p>

HTML
        ,

        'chart.table.settings' => <<<HTML
            <p>Erzeugt eine Tabelle mit Daten.</p>
            <div class="form-group">
                <label class="control-label">Optionen</label>
                <div class='checkbox top-margin-zero'>
                    <label>$1 Erlaube HTML in den Zellen</label>
                </div>
            </div>
HTML
        ,

        'chart.timeline.settings' => <<<HTML
        <p>Erzeugt eine scrollbare Zeitleiste mit Zeitabschnitten und -balken. Die benötigten Spalten im Abfrageergebnis sind <a target="_blank" href="https://developers.google.com/chart/interactive/docs/gallery/timeline#data-format">hier erläutert</a>.</p>
        <div class="form-group">
            <label class="control-label">Optionen</label>
            <div class='checkbox top-margin-zero'>
                <label>$1 Zeilenbezeichner anzeigen</label>
            </div>
            <div class='checkbox'>
                <label>$2 Farbe für alle Balken: $3</label>
            </div>
            <div class='checkbox'>
                <label>$4 Tooltips anzeigen</label>
            </div>
        </div>
HTML
        ,

        'delete.success' => 'Datensatz wurde erfolgreich gelöscht.',
        'delete.confirm-head' => 'Löschen bestätigen',
        'delete.confirm-msg' => 'Bitte bestätigen Sie, dass Sie diesen Datensatz löschen möchten. Diese Aktion kann nicht rückgängig gemacht werden. Das Löschen funktioniert nur, wenn dieser Datensatz von keinem anderen Datensatz referenziert wird.',
        'delete.button-cancel' => 'Abbrechen',
        'delete.button-delete' => 'Löschen',

        'error.db-connect' => 'Kann keine Verbindung zur Datenbank herstellen.',
        'error.db-prepare' => 'Fehler beim Vorbereiten der Datenbankabfrage.',
        'error.db-execute' => 'Fehler beim Ausführen der Datenbankabfrage.',
        'error.delete-exec' => 'Das Löschen ist gescheitert. Vermutlich wird dieser Datensatz noch von einem anderen Datensatz referenziert.',
        'error.delete-count' => 'Der Datensatz konnte nicht gelöscht werden, weil er vermutlich gar nicht mehr existiert. Bitte prüfen Sie das.',
        'error.delete-file-warning' => 'Eine oder mehrere Dateien konnten jedoch nicht vom Server gelöscht werden.',
        'error.edit-obj-not-found' => 'Der angeforderte Datensatz konnte nicht gefunden werden.',
        'error.exception' => 'Ausnahmefehler: $1',
        'error.field-value-missing' => 'Es ist kein Wert für das Feld "$1" definiert.',
        'error.field-required' => 'Bitte geben Sie einen Wert für das Pflichtfeld <b>$1</b> an.',
        'error.field-multi-required' => 'Bitte wählen Sie mindestens einen Wert für das Mehrfachauswahlfeld <b>$1</b>.',
        'error.password-too-short' => 'Das Passwort ist zu kurz, die minimale Länge ist $1.',
        'error.password-hash-missing' => 'Konfigurationsfehler: Die Passwort-Hashfunktion <i>$1</i> existiert nicht.',
        'error.upload-err-ini-size' => "Der Upload überschreitet die Einstellung upload_max_filesize in php.ini",
        'error.upload-err-form-size' => "Der Upload überschreitet die MAX_FILE_SIZE Einstellung im Formular",
        'error.upload-err-partial' => "Die Datei konnte nur teilweise hochgeladen werden",
        'error.upload-err-no-file' => "Keine Datei hochgeladen",
        'error.upload-err-no-tmp-dir' => "Kein temporäres Verzeichnis am Server vorhanden",
        'error.upload-err-cant-write' => "Fehler beim Speichern der Datei auf den Datenträger",
        'error.upload-err-extension' => "Dateiupload durch Erweiterung gestoppt",
        'error.upload-err-unknown' => "Unbekannter Fehler beim Hochladen",
        'error.upload-filesize' => 'Die hochgeladene Datei überschreitet die maximale Uploadgröße von $1 Bytes.',
        'error.upload-invalid-ext' => "Dateierweiterung '$1' ist nicht erlaubt. Folgende Erweiterungen sind erlaubt: $2",
        'error.upload-location' => 'Konfigurationsfehler: Zielverzeichnis für Uploads ist nicht angegeben.',
        'error.upload-create-dir' => 'Zielverzeichnis konnte nicht erstellt werden.',
        'error.upload-file-exists' => 'Konnte Datei nicht hochladen, weil im Zielverzeichnis bereits eine Datei mit dem gleichen Namen existiert.',
        'error.upload-move-file' => 'Konnte hochgeladene Datei nicht speichern.',
        'error.upload-store-db' => 'Konfigurationsfehler: Speichern von Dateien in die Datenbank ist (noch) nicht möglich.',
        'error.upload-no-file-provided' => 'Keine Datei für Pflichtfeld <b>$1</b> angegeben.',
        'error.invalid-dbtype' => "Konfigurationsfehler: Ungültiger Datenbanktyp '$1'.",
        'error.invalid-display-expression' => 'Konfigurationsfehler: Der Anzeigeausdruck in <code>display-expression</code> ist ungültig.',
        'error.invalid-function' => "Ungültige Funktion '$1'.",
        'error.invalid-login' => '$1 und/oder $2 sind ungültig.',
        'error.invalid-mode' => "Unbekannte Aktion '$1'.",
        'error.invalid-params' => 'Ein oder mehrere Parameter sind ungültig oder fehlen.',
        'error.invalid-pk-value' => "Ungültiger Primärschlüsselwert '$1'.",
        'error.invalid-lookup-table' => "Ungültige referenzierte Tabelle '$1'.",
        'error.invalid-lookup-field' => "Ungültiges referenziertes Feld '$1'.",
        'error.invalid-table' => "Ungültige Tabelle '$1'.",
        'error.invalid-wkt-input' => 'Ungültige WKT-Eingabe.',
        'error.missing-pk-value' => "Fehlender Wert für Primärschlüssel '$1'.",
        'error.no-plugin-functions' => 'Konfigurationsfehler: Es gibt keine registrierten Plugin-Funktionen, die aufgerufen werden können.',
        'error.no-values' => 'Keine zu speichernden Daten vorhanden.',
        'error.not-allowed' => 'Sie haben keine Berechtigung für diese Aktion.',
        'error.query-withouth-qualifier' => 'Abfrage ohne Qualifier',
        'error.missing-login-data' => 'Bitte geben Sie $1 und $2 ein.',
        'error.map-picker-wkt' => '<b>Fehler:</b> Der angegebene Wert <code>$1</code> ist ungültig und kann nicht dargestellt werden.',
        'error.map-picker-single-marker' => 'Sie müssen genau eine Markierung auf die Karte setzen.',
        'error.edit-inline-form-id-missing' => 'ID von übergeordnetem Formlar fehlt.',
        'error.sequence-name' => 'Konfigurationsfehler: Wert für <code>id_sequence_name</code> ist vermutlich ungültig.',
        'error.edit-update-rels-prep' => 'Vorbereiten der Aktualisierung der Beziehungen für Feld $1 ist gescheitert (Schritt $2).',
        'error.edit-update-rels-exec' => 'Ausführen der Aktualisierung der Beziehungen für Feld $1 ist gescheitert (Schritt $2).',
        'error.sql-linkage-defaults' => 'Zuweisen vordefinierter Werte für Beziehungsattribute ist fehlgeschlagen.',
        'error.update-record-gone' => 'Der bearbeitete Datensatz konnte nicht geladen werden. Möglicherweise wurde er in der Zwischenzeit gelöscht.',
        'error.storedquery-fetch' => 'Konnte die Abfrage nicht laden.',
        'error.storedquery-config-table' => 'Konfigurationsfehler: In <code>$APP</code> fehlt die Einstellung für <code>querypage_stored_queries_table</code>.',
        'error.storedquery-create-table' => 'Tabelle für gespeicherte Abfragen konnte nicht erstellt werden.',
        'error.storedquery-exec-params' => 'Abfrage konnte nicht ausgeführt werden mit $1',
        'error.storedquery-invalid-sql' => 'Ungültige Abfrage. Nur SELECT-Abfragen sind erlaubt!',
        'error.storedquery-invalid-params' => 'Ungültige Tabelle und/oder Feld in parametrisierter Abfrage.',
        'error.chart-duplicate-cols' => 'Die Abfrageergebnisse können nicht dargestellt werden. Vermutlich haben Sie mehrere Spalten mit dem gleichen Namen im Abfrageergebnis. Bitte verwenden Sie Aliase für Spalten, um dieses Problem zu lösen.',

        'geom-field.map-picker-button-tooltip' => 'Zuweisen von Koordinaten über eine Karte',
        'geom-field.map-picker-view-tooltip' => 'Zeige diese Geometrie auf einer Karte',

        'global-search.cache-notice' => '<b>Hinweis:</b> Diese Suchergebnisse kommen aus einem Zwischenspeicher, der in $1 Minuten wieder erneuert wird.',
        'global-search.input-placeholder' => 'Suche',
        'global-search.results-for' => 'Suchergebnisse für',
        'global-search.term-too-short' => '<p>Dieser Suchbegriff ist zu kurz, er muss mind. $1 Zeichen beinhalten.</p>',
        'global-search.no-results' => 'Keine Ergebnisse für diese Suche.',
        'global-search.one-result' => 'Ein Suchergebnis gefunden.',
        'global-search.results-info' => 'Suchergebnisse wurden in $1 $2 gefunden. $3',
        'global-search.results-one' => 'einer',
        'global-search.results-table-singluar' => 'Tabelle',
        'global-search.results-table-plural' => 'Tabellen',
        'global-search.results-jump' => 'Springe zu Tabelle',
        'global-search.results-found-detail' => '$1 Suchergebnisse gefunden.',
        'global-search.show-more-preview' => 'Alle Ergebnisse zeigen',
        'global-search.show-more-detail' => 'Bitte passen Sie den Suchbegriff an, um die Ergebnismenge einzuschänken.',
        'global-search.limited-results-hint' => 'Nur die ersten $1 Suchergebnisse sind hier gelistet.',
        'global-search.goto-top' => 'Nach oben',

        'helper.html-text-clipped' => 'Text wegen Überlänge abgeschnitten. Klicke um gesamten Text einzublenden.',
        'helper.help-popup-title' => 'Eingabehilfe',

        'info.new-edit-update-rels-prep-problems' => 'Beziehung zu Datensatz $1 in Feld $2 konnten nicht aktualisiert werden (P).',
        'info.new-edit-update-rels-exec-problems' => 'Beziehung zu Datensatz $1 in Feld $2 konnten nicht aktualisiert werden (E).',
        'info.new-edit-update-rels-inline-defaults' => 'Datensatz wurde gespeicher, aber der verknüpfte Datensatz $1 in Feld $2 konnte nicht gespeichert werden.',
        'info.new-edit-update-rels-inline-prep' => 'Beziehungsdetails Feld $1 konnten für Datensatz $2 nicht aktualisiert werden (P).',
        'info.new-edit-update-rels-inline-exec' => 'Beziehungsdetails Feld $1 konnten für Datensatz $2 nicht aktualisiert werden (E).',

        'info-box.success-head' => 'Erfolg',
        'info-box.error-head' => 'Fehler',
        'info-box.sql-codes' => 'Fehlercodes',
        'info-box.info-head' => 'Information',

        'list.num-indicator' => 'Zeige Datensätze <b>$1</b>&ndash;<b>$2</b> von <b>$3</b>',
        'list.total-indicator' => 'Gesamtanzahl in der Tabelle: <b>$1</b>',
        'list.button-new' => 'Neuer Datensatz',

        'login.button' => 'Anmelden',
        'login.head' => 'Anmelden',
        'login.logout-navbar-label' => 'Abmelden',

        'lookup-field.create-new-tooltip' => 'Wenn Sie den gewünschten Datensatz nicht in der Dropdown-Liste finden, klicken Sie diesen Knopf, um einen neuen Datensatz anzulegen.',
        'lookup-field.placeholder' => 'Klicken zum Auswählen',
        'lookup-field.linkage-details-edit-tooltip' => 'Beziehungsdetails bearbeiten',
        'lookup-field.linkage-assoc-edit-tooltip' => 'Referenzierten $1-Datensatz bearbeiten',
        'lookup-field.linkage-assoc-delete-tooltip' => 'Beziehung zu diesem/r $1 entfernen',
        'lookup-field.linked-records-clipped-tooltip' => 'Text wegen Überlänge abgeschnitten. Klicke um gesamten Text einzublenden.',
        'lookup-field.linked-record-no-display-value' => 'Für diesen refernzierten Datensatz konnte keine Anzeigewert ermittelt werden, daher wird sein Identifikationswert dargestellt',

        'main-page.html' => '<p>Wählen Sie eine Aktion aus dem Menü aus.</p>',

        'map-picker.done-button' => 'Fertig',
        'map-picker.edit-instructions' => " Platzieren Sie eine Markierung an der gewünschten Positiion. Um eine Markierung zu erzeugen, klicken Sie auf eine der Form-Icons (z.B. die <span class='glyphicon glyphicon-map-marker'></span> Punktmarkierung), und zeichnen Sie dann die Markierung auf die Karte. Um eine bestehende Markierung zu ändern, klicken Sie das Icon <span class='glyphicon glyphicon-edit'></span> und folgen Sie den Anweisungen, die dann erscheinen. Wenn Sie fertig sind, klicken Sie auf den Knopf <span class='glyphicon glyphicon-check'></span> Fertig.",

        'menu.browse+edit' => 'Durchsuchen & Bearbeiten',
        'menu.new' => 'Neuer Datensatz',

        'new-edit.heading-new' => 'Neu: $1',
        'new-edit.heading-edit' => 'Bearbeiten: $1',
        'new-edit.heading-edit-inline' => 'Details von $1 bearbeiten',
        'new-edit.save-button' => 'Speichern',
        'new-edit.clear-button' => 'Formular leeren',
        'new-edit.intro-help' => "Füllen Sie das Formular aus und drücken Sie dann den Knopf <span class='glyphicon glyphicon-floppy-disk'></span> <b>Speichern</b>. Felder mit dem Indikator <span class='required-indicator'>&#9733;</span> sind Pflichtfelder.",
        'new-edit.save-inline-hint' => 'Bitte beachten Sie, dass diese Änderungen nur gespeichert werden, wenn das übergeordnete Formular gespeichert wird.',
        'new-edit.field-optional-tooltip' => 'Dieses Feld ist optional',
        'new-edit.field-required-tooltip' => 'Dieses Feld muss ausgefüllt werden',
        'new-edit.success-new' => 'Datensatz wurde in der Datenbank gespeichert.',
        'new-edit.success-edit' => 'Datensatz wurde in der Datenbank aktualisiert.',

        'querypage.sql-label' => 'SQL-Abfrage',
        'querypage.exec-button' => 'Ausführen',
        'querypage.sql-help-head' => 'Hilfe für SQL-Abfrage',
        'querypage.sql-help-text' => <<<HTML
            <p>Geben Sie hier Ihre SQL-Abfrage ein. Nur <code>SELECT</code>-Abfragen sind erlaubt.</p>
            <p><b>Parametrisierte Abfrage</b>: Sie können benannte Platzhalter mit vorbelegten Werten statt konkreten Wertden in Ihrer Abfrage verwenden. Ein Parameter wird wie folgt verwendet: <code>#{my_param|default_val}</code>, wobei <code>my_param</code> der Name des Parameters ist und <code>default_val</code> ist der vorbelegte Wert. Letzterer kann auch leer sein, aber das Trennzeichen <code>|</code> muss trotzdem gesetzt werden.</p>
            <p><b>Beispiel</b>: <code>select * from users where lastname = #{Name|Norris}</code></p>
HTML
        ,
        'querypage.store-settings-heading' => 'Einstellungen',
        'querypage.store-settings-cache-expires' => 'Zwischenspeichern aktivieren. Erneuerungsintervall (Sekonden)',
        'querypage.store-settings-cache-public' => 'Diese Visualisierung ist öffentlich (mit Vorsicht verwenden).',
        'querypage.store-button-save' => 'Speichern',
        'querypage.store-button-new' => 'Speichern als Neu',
        'querypage.store-button-update' => 'Aktualisieren',
        'querypage.store-description-placeholder' => 'Beschreibung',
        'querypage.store-title-placeholder' => 'Titel',
        'querypage.store-intro' => 'Geben Sie optional Titel und Beschreibung für die Abfrage an:',
        'querypage.store-success' => 'Abfrage wurde gespeichert. Live-Visualisierung sichbar unter folgendem Link:',
        'querypage.store-error' => 'Beim Speichern der Abfrage ist ein Fehler aufgetreten.',
        'querypage.store-button-label' => 'Speichern & Visualisierungs-Link erzeugen',
        'querypage.settings-head' => 'Einstellungen für Ergebnisvisualisierung',
        'querypage.settings-viz-label' => 'Visualisierungstyp',
        'querypage.param-query-refresh' => 'Eregbnisse aktualisieren',
        'querypage.results-head' => 'Ergebnisvisualisierung',

        'record-renderer.view-icon' => 'Diesen $1-Datensatz ansehen',
        'record-renderer.edit-icon' => 'Diesen $1-Datensatz bearbeiten',
        'record-renderer.delete-icon' => 'Diesen $1-Datensatz löschen',
        'record-renderer.sort-asc' => 'Aufsteigend sortieren',
        'record-renderer.sort-desc' => 'Absteigend sortieren',
        'record-renderer.search-icon' => 'Suchen',

        'search.transformation-invalid' => 'Konfigurationsfehler: <code>$APP[search_string_transformation]</code> beinhaltet keinen Platzhalter <code>%s</code>',
        'search.popover-option-any' => 'Feld enthält',
        'search.popover-option-word' => 'Feld enthält Wort',
        'search.popover-option-exact' => 'Field gleicht',
        'search.popover-option-start' => 'Field beginnt mit',
        'search.popover-option-end' => 'Field endet mit',
        'search.popover-placeholder' => 'Suchtext',
        'search.infotext-any' => "Suche alle Datensätze, in denen <span class='bg-success'><strong>$2</strong></span> in <b>$1</b> enthalten ist.",
        'search.infotext-word' => "Suche alle Datensätze, in denen <span class='bg-success'><strong>$2</strong></span> in <b>$1</b> als Wort enthalten ist.",
        'search.infotext-exact' => "Suche alle Datensätze, in denen <b>$1</b> genau den Wert <span class='bg-success'><strong>$2</strong></span> hat.",
        'search.infotext-start' => "Suche alle Datensätze, in denen <b>$1</b> mit <span class='bg-success'><strong>$2</strong></span> beginnt.",
        'search.infotext-end' => "Suche alle Datensätze, in denen <b>$1</b> mit <span class='bg-success'><strong>$2</strong></span> endet.",
        'search.button-clear' => 'Suche löschen',
        'search.no-results' => 'Keine Suchergebnisse gefunden.',
        'search.num-indicator' => 'Zeige Suchergebnisse <b>$1</b>&ndash;<b>$2</b> von <b>$3</b>',

        'upload-field.browse' => 'Durchsuchen',
        'upload-field.hint-empty' => 'Hinweis: Wenn Sie die bestehende Datei am Server nicht überschreiben wollen, können Sie dieses Feld leer lassen.',

        'view.invalid-record' => 'Dieser Datensatz kann nicht angezeigt werden. Möglicherweise wurde er gelöscht.',
        'view.add-related-data-button' => 'Verknüpfen mit',
        'view.edit-icon' => 'Diesen $1-Datensatz bearbeiten',
        'view.edit-button' => 'Bearbeiten',
        'view.delete-icon' => 'Diesen $1-Datensatz löschen',
        'view.delete-button' => 'Löschen',
        'view.list-icon' => 'Alle $1 anzeigen',
        'view.list-button' => 'Alle anzeigen',
        'view.new-icon' => 'Neuen $1-Datensatz anlegen',
        'view.new-button' => 'Neu',
        'view.related-icon' => 'Verknüpfte Datensätze anzeigen (klicken, um Auswahl zu bekommen)',
        'view.related-button' => 'Verknüpfte Datensätze',
        'view.related-menu-item' => '$1 (via $2)',
        'view.hidden-fields-hint-1' => 'Dieser $1-Datensatz hat ein leeres Feld.',
        'view.hidden-fields-hint-N' => 'Dieser $1-Datensatz hat $2 leere Felder.',
        'view.show-hidden-field-1' => 'Leeres Feld anzeigen',
        'view.show-hidden-field-N' => 'Leere Felder anzeigen',
    );
?>