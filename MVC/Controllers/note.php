<?php

class NoteController {

    public function list() {
        require_once 'Models/note.php';

        // Instancia
        $note = new Note();
        $note->setTitulo('Mis Notas personales');
        $note->setContenido('Esta es una nota personal');

        // Vista
        require_once 'Views/notes/list.php';
    }

    public function create() {
    }

    public function update() {
    }

    public function delete() {
    }

    public function showAll() {
        return "Mostrando todas las notas";
    }
}