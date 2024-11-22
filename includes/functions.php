<?php
    require_once __DIR__ .'/../config/database.php';

    function obtenerTareas() {
        global $tasksCollection;
        return $tasksCollection->find();
    }

    function formatDate($date) {
        return $date->toDateTime()->format('Y-m-d');
    }
?>