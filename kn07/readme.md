## A) Begriffe und Konzepte erlernen (40%)

### 1. Erklären Sie den Unterschied zwischen Pods und Replicas mit eigenen Worten.

• Pod: 

Ein Pod ist die kleinste und einfachste Kubernetes-Objekt-Einheit, die einen oder mehrere Container umfasst. Container innerhalb eines Pods   teilen sich dieselbe Netzwerkadresse und Speicherressourcen, was es ihnen ermöglicht, effizient zusammenzuarbeiten. Pods werden meist für Anwendungen verwendet, die in einem Container laufen.

• Replica:

Eine Replica bezeichnet eine Instanz eines Pods. Kubernetes verwendet das Konzept der ReplicaSets, um sicherzustellen, dass eine gewünschte Anzahl von Pods jederzeit ausgeführt wird. Wenn ein Pod ausfällt, wird eine neue Replica dieses Pods erstellt, um die gewünschte Anzahl zu erreichen. Replicas gewährleisten Skalierbarkeit und Hochverfügbarkeit.

### 2. Erklären Sie den Unterschied zwischen Service und Deployment mit eigenen Worten.

• Service: 

Ein Service ist ein Kubernetes-Objekt, das eine abstrakte Schnittstelle für den Zugriff auf Pods bereitstellt. Ein Service sorgt dafür, dass Anfragen an die richtigen Pods weitergeleitet werden, auch wenn sich die Pods ändern oder skalieren. Ein Service kann auch als Load Balancer fungieren, der den Datenverkehr an verschiedene Instanzen von Pods verteilt.

• Deployment: 

Ein Deployment ist eine höhere Abstraktion, die verwendet wird, um sicherzustellen, dass eine bestimmte Anzahl von Pod-Replikaten zu jeder Zeit läuft. Es bietet eine deklarative Möglichkeit, Anwendungen zu aktualisieren und zu skalieren, ohne manuell Pods erstellen und löschen zu müssen. Das Deployment sorgt auch für Rollbacks und stellt sicher, dass bei einem Ausfall von Pods neue Instanzen erstellt werden.

### 3. Welches Problem löst Ingress?

• Ingress ist eine Kubernetes-Ressource, die für das Routing des externen HTTP(S)-Verkehrs zu internen Services verwendet wird. Das Problem, das Ingress löst, ist die Notwendigkeit, den eingehenden Datenverkehr auf mehrere Services innerhalb eines Clusters zu leiten, ohne für jeden Service eine separate öffentliche IP-Adresse oder Load Balancer zu benötigen. Mit Ingress können Sie Routen definieren, die basierend auf dem URL-Pfad oder der Host-Adresse den Datenverkehr an verschiedene Services weiterleiten.

### 4. Für was ist ein StatefulSet? Geben Sie ein mögliches Beispiel - aber keine Datenbank.

• Ein StatefulSet wird in Kubernetes verwendet, um Anwendungen mit zustandsbehafteten Anforderungen zu verwalten. Es gewährleistet, dass jeder Pod eine eindeutige Identität und stabile Netzwerkidentifikation (wie DNS-Namen) behält, selbst wenn der Pod neu gestartet wird. Ein StatefulSet ist besonders nützlich für Anwendungen, bei denen die Reihenfolge und Identität der Pods wichtig sind, zum Beispiel bei der Verwaltung von Zookeeper-Instanzen für verteilte Systeme.

### 1. Fehlerhafte Umsetzung des Services

• In der Aufgabe wird auf das Thema Datenbank und die Art und Weise hingewiesen, wie Services in Kubernetes konzipiert werden. Wenn der Fehler in der Datenbankumsetzung besteht, könnte es daran liegen, dass die Datenbank nicht korrekt als StatefulSet definiert wurde, obwohl dies nötig gewesen wäre, um persistenten Zustand und Identität der Pods zu garantieren. Oft wird in Tutorials und Beispielen stattdessen ein Deployment verwendet, das für zustandslose Anwendungen gedacht ist.

### 2. Erklärung des korrekten MongoUrl-Werts in der ConfigMap.yaml

• Der angegebene Wert für die MongoDB-URL in der ConfigMap.yaml ist korrekt, wenn die URL den richtigen Hostnamen und Port für die Verbindung zur MongoDB enthält, der im Cluster zur Verfügung steht. Beispiel: mongodb://mongo-service:27017, wobei mongo-service der Name des Services ist, der auf die MongoDB verweist, und 27017 der Standardport für MongoDB. Kubernetes übernimmt das Service Discovery, sodass der Pod automatisch den richtigen Service-Hostname auflösen kann.