<?php
class NoteController {

    public function list() {
        require_once 'Models/note.php';

        // Instancia
        $note = new Note();
        $note->setTitulo('Mis Notas personales');
        $note->setDescripcion('Esta es una nota personal');
        $notas = $note->getAll('entradas');

        // Vista
        require_once 'Views/notes/list.php';
    }

    public function create() {
        // Modelo
        require_once 'Models/note.php';

        $note = new Note();
        $note->setTitulo($_POST['titulo']);
        $note->setDescripcion($_POST['descripcion']);
        $note->save();

        header("Location: index.php?controller=Note&action=list");
    }

    public function update() {
    }

    public function delete() {
    }

    public function showAll() {
        return "Mostrando todas las notas";
    }
}