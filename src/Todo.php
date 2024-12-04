<?php
require "DB.php";

class Todo {
    public $pdo;
    public function __construct () {
        $db = new DB();
        $this->pdo = $db->conn;
    }
    public function store (string $title, string $dueDate): bool {
        $query = "INSERT INTO todo(title, status, due_date, created_at, updated_at) 
                VALUES (:title, 'pending', :due_date, NOW(), NOW())
        ";
        return $this->pdo->prepare($query)->execute([
            ":title" => $title,
            ":due_date" => $dueDate
        ]);
    }
    public function getAllTodos () {
        $query = "SELECT * FROM todo";
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll();
    }
    public function complete (int $id): bool {
        $query = "UPDATE todo set status='completed', updated_at = NOW() where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }
    public function inProgress (int $id): bool {
        $query = "UPDATE todo set status='in_progress' where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }
    public function pending (int $id): bool {
        $query = "UPDATE todo set status='pending' where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function destroy (int $id): bool {
        $query = "DELETE FROM todo WHERE id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function getTodo (int $id) {
        $query = "SELECT * FROM todo WHERE id=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ":id" => $id
        ]);
        return $stmt->fetch();
    }
    public function update (int $id, string $title, string $status, string $dueDate) {
        $query = "UPDATE todo set
             title=:title, status=:status, due_date=:due_date, updated_at = NOW() where id=:id";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([
            ":id" => $id,
            ":title" => $title,
            ":status" => $status,
            ":due_date" => $dueDate
        ]);
    }
}