<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList Collaborative</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>TodoList W.A.D</h1>
        </header>

        <!-- Formulaire d'ajout -->
        <div class="add-task-form">
            <h2>Ajouter une tâche</h2>
            <form action="traitement.php" method="POST">
                <input type="text" name="task_description" placeholder="Description..." required>
                <select name="priority" required>
                    <option value="">Priorité</option>
                    <option value="urgent">Urgent</option>
                    <option value="moins_urgent">Moins urgent</option>
                    <option value="osef">Osef</option>
                </select>
                <button type="submit" name="action" value="add">Ajouter</button>
            </form>
        </div>

        <!-- 3 colonnes -->
        <div class="columns-container">
            <!-- Urgent -->
            <div class="column urgent-column">
                <h3>Urgent</h3>
                <div class="tasks-list" id="urgent-tasks">
                    <?php
                    // Antoine : Boucle foreach pour tâches urgentes --------------
                    // William : getUrgentTasks() - plus récent en premier ----------------------------
                    ?>
                </div>
            </div>

            <!-- Moins urgent -->
            <div class="column moins-urgent-column">
                <h3>Moins urgent</h3>
                <div class="tasks-list" id="moins-urgent-tasks">
                    <?php
                    // Antoine : Boucle foreach pour tâches moins urgentes
                    // William : getMoinsUrgentTasks() - plus récent en premier
                    ?>
                </div>
            </div>

            <!-- Osef -->
            <div class="column osef-column">
                <h3>Osef</h3>
                <div class="tasks-list" id="osef-tasks">
                    <?php
                    // Antoine : Boucle foreach pour tâches osef
                    // William : getOsefTasks() - plus récent en premier
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- partie js --------------------------------------------------------------- -->
    <script>
        // Antoine : Fonctions JavaScript pour rafraîchir
        function refreshTasks() {
            // Rafraîchir toutes les tâches
        }
    </script>
</body>
</html> 