<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fetch API</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./templates/css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top">

        <!-- Masthead-->
        <header>
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Fetch API & AJAX</h1>
                        <h2 class="text-black-50 mx-auto mt-2 mb-5">FETCH-Funktion - zum effizienten Abrufen und Verarbeiten der in Datenbanken gespeicherten Daten.</h2>
                    </div>
                </div>
            </div>
        </header>

        <!-- p1 -->
        <section class="about-section text-center" id="p1">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h4 class="text-white-50">FETCH API</h4>
                        <p class="text-white-50">
                        Das Abrufen von Daten ist der Prozess der Extraktion von Zeilen aus einer Datenbank nach der Ausführung einer Abfrage. Nach der Abfrage der Datenbank ermöglichen die FETCH-Funktionen den Zugriff auf die Daten in verschiedenen Formaten.
                        </p>
                        <p class="text-white-50">Beispiel für FETCH aus unserem TODO-Listen-Code
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-left">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-6">
                    <p class="text-white-50">
                        <pre>$todoDB = new TodoDB();
class TodoDB {
    private $connection;
    private $stmt;
    /** Constructor of the TodoDB class. */
    public function __construct() {
        global $host, $db, $user, $pass;
        try {
            $this->connection = new PDO(
                "mysql:host=$host;dbname=$db;",
                $user,
                $pass
            );
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
    public function getTodos() {
        $statement = $this->connection->query("SELECT id, text, completed from todos");
        $todo_items = $statement->fetchAll();
        return $todo_items;
    }
}
                        </pre>
                    </p>
                </div>
            </div>
        </section>

        <!-- analyse of code snippets-->
        <section class="projects-section bg-light" id="projects">
            <!-- setAttribute()-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6">
                        <div class="bg-white text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100">
                                    <p class="mb-0 text-black-50">
                                        <pre>$this->connection->setAttribute<mark>(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC)</mark>;</pre>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <p class="mb-0 text-white-50">setAttribute() legt den Standard-FETCH-Modus fest, also die Art und Weise, wie Datenbankabfragen zurückgegeben werden. PDO::FETCH_ASSOC gibt Daten als assoziatives Array zurück - Schlüssel sind Namen der Spalten.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        <!-- $statement-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6">
                        <div class="bg-white text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100">
                                    <p class="mb-0 text-black">
                                        <pre>$statement = $this->connection->query("<mark>SELECT id, text, completed from todos</mark>");</pre>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <p class="mb-0 text-white-50">Dies ist die genaue Abfrage, die an SQL übergeben wird. Sie wählt die Spalten ID, Text und Completed aus der Tabelle 'todos' in der Datenbank aus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- fetchAll()-->
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6">
                        <div class="bg-white text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100">
                                    <p class="mb-0 text-black">
                                        <pre>$todo_items = $statement-><mark>fetchAll();</mark></pre>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <p class="mb-0 text-white-50">$todo_items werden alle zurückgesendet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- AJAX -->
        <section class="about-section text-center">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h4 class="text-white-50">AJAX</h4>
                        <p class="text-white-50">AJAX (Asynchronous JavaScript and XML) ist eine Technik zum asynchronen Senden und Empfangen von Daten von einem Server, ohne die gesamte Webseite neu zu laden.</p>
                        <p class="text-white-50">Mit FETCH werden AJAX-Anfragen an den Server im Hintergrund gestellt, um Daten abzurufen oder zu senden. Oft in Formaten wie JSON oder HTML. In einer ToDo-Listen-Anwendung beispielsweise können FETCH-Anfragen Elemente aus einer Datenbank abrufen und die Webseite mit neuen ToDos aktualisieren, ohne die Seite zu aktualisieren. </p>
                        <p class="text-white-50">Dies schafft eine reibungslose Benutzererfahrung.</p>
                    </div>
                </div>
                <img class="img-fluid" src="templates/assets/img/http-vs-ajax-request.png" alt="..." />
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Rybacka &copy; 2024</div></footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="templates/js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
