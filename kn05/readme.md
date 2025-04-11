### Named Volumes
Ein named volume ist ein Volumen das von Docker verwaltet wird. Es wird in Dockers Volumenverwaltungssystem gespeichert (/var/lib/docker/volumes/). Named Volumes sind einfacher zu handhaben und bieten mehr Funktionalität als Bind Mounts.

### Bind Mounts
Ein bind mount ist ein Dateisystempfad auf dem Host, der in den Container gemountet wird. Der Pfad auf dem Host wird beim Starten des Containers angegeben.

### Tmpfs Mounts
Ein tmpfs mount ist ein temporäres Dateisystem, das im Arbeitsspeicher des Hosts gespeichert wird. Es wird gelöscht, wenn der Container beendet wird.