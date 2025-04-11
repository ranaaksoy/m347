### KN06: Kubernetes I

A) Installation

Drei Instanzen erstellt und auf einem 2 mal microk8s add node ausgeführt und die Instanzen verbunden.

Erlaube Kommunikation auf Ports: 16443,25000,10250,10255,12379,19001,32000/tcp

microk8s kubectl get nodes Ausgabe:

![alt text](<Bildschirmfoto 2025-04-11 um 09.49.44.png>)

Abbildung1: Ausgabe von microk8s kubectl get nodes

B) Verständnis für Cluster

microk8s status Ausgabe:

![alt text](<Bildschirmfoto 2025-04-11 um 09.42.10.png>)

Abbildung 2: Ausgabe von microk8s status

**addons Definition:**

Rufen Sie den Befehl microk8s status auf und schauen Sie die ersten paar Zeilen an (vor "addons"). Was bedeuten diese. Sie finden mehr Information in der Installationsanleitung des Herstellers der Sie gefolgt sind im Kapitel High Availability. Erstellen Sie einen Screenshot und einen Erklärungstext

Wenn Ihr Cluster aus drei oder mehr Knoten besteht, wird der Datenbank über die Knoten repliziert und ist gegen einen einzelnen Ausfall resistent (wenn ein Knoten ein Problem entwickelt, werden Workloads ohne Unterbrechung fortgesetzt).

Das heisst du hast Redundanz und kannst einen Ausfall verkraften.

**Erklärung:**

Sobald du einen Node als Worker hinzufügst (microk8s join --worker), verliert der Cluster die High Availability (HA)-Funktionalität, weil nur der Master-Node (datastore master) die etcd-Datenbank verwalt

Ein Worker-Node (--worker) übernimmt keine Steuerungsaufgaben, daher verliert der Cluster HA.

Um HA zurückzubekommen, müssen mindestens drei Nodes als Control Plane Nodes vorhanden sein.

Warum stimmen die Resultate von kubectl get nodes und microk8s status überein?

microk8s kubectl get nodes zeigt eine Liste aller Nodes im Kubernetes-Cluster.

microk8s status zeigt den aktuellen Zustand von MicroK8s, einschließlich welche Nodes Teil des Clusters sind.

Da beide Befehle auf die gleiche Cluster-Datenbank zugreifen, stimmen ihre Ergebnisse überein.

**Unterschied:** microk8s status zeigt zusätzliche Cluster-Informationen wie HA-Status, laufende Add-ons und den Datastore-Master.

Erkläre den Unterschied zwischen microk8s und microk8s kubectl mit eigenen Worten

### Befehl  Bedeutung
```
microk8s
```

Verwaltung des MicroK8s-Clusters (Starten, Stoppen, Add-ons, Nodes verwalten).

```
microk8s kubectl
```

Ein in MicroK8s eingebettetes kubectl, um Kubernetes-Ressourcen zu verwalten (Pods, Nodes, Deployments).

microk8s ist das Hauptverwaltungswerkzeug für den Cluster, mit dem man ihn starten, stoppen und konfigurieren kann.

microk8s kubectl ist ein in MicroK8s eingebautes Kubernetes-CLI-Tool, das verwendet wird, um Cluster-Ressourcen zu verwalten (z. B. Nodes, Pods, Services).