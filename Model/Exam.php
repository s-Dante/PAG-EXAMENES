<?php
require 'Conexion.php';

class Exam{
    private $con;

    public function __construct($config){
        $this->con = new Conexion($config);
    }

    public function getExams(){
        $sql = "SELECT * FROM Examen";
        $stmt = $this->con->getCon()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getExamsCount(){
        $sql = "SELECT COUNT(*) FROM Examen";
        $stmt = $this->con->getCon()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function getMateriasBySemestre($semestre) {
        $sql = "SELECT DISTINCT Materia FROM Examen WHERE Semestre = :semestre";
        $stmt = $this->con->getCon()->prepare($sql);
        $stmt->execute([':semestre' => $semestre]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN); // Retorna un array con solo las materias
    }

    public function getExamsByFilters($semestre, $materia = null, $parcial = null) {
        // Base de la consulta
        $sql = "SELECT * FROM Examen WHERE 1=1";
    
        // Filtrar por semestre si no es "Todos"
        if ($semestre !== 'Todos') {
            $sql .= " AND Semestre = :semestre";
        }
    
        // Filtrar por materia si no es "Todas"
        if ($materia && $materia !== 'Todas') {
            $sql .= " AND Materia = :materia";
        }
    
        // Filtrar por parcial si se proporciona
        if ($parcial && $parcial !== '') {
            $sql .= " AND Parcial = :parcial";
        }
    
        $stmt = $this->con->getCon()->prepare($sql);
    
        // Bind de parámetros solo si son necesarios
        if ($semestre !== 'Todos') {
            $stmt->bindParam(':semestre', $semestre, PDO::PARAM_STR);
        }
        if ($materia && $materia !== 'Todas') {
            $stmt->bindParam(':materia', $materia, PDO::PARAM_STR);
        }
        if ($parcial && $parcial !== '') {
            $stmt->bindParam(':parcial', $parcial, PDO::PARAM_STR);
        }
    
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    public function insertarDesdeCSV($fileTmpPath) {
        if (($handle = fopen($fileTmpPath, "r")) !== FALSE) {
            // Omitimos la primera línea si tiene encabezados
            fgetcsv($handle, 1000, ",");

            $query = "INSERT INTO Examen (Materia, Fecha, Hora, Grupo, Parcial, Carrera, Plan, Semestre) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->con->getCon()->prepare($query);

            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                // Convertir fecha y hora
                $fecha = date("Y-m-d", strtotime(str_replace("/", "-", $data[1]))); 
                $hora = explode("-", $data[2])[0];

                try {
                    $stmt->execute([$data[0], $fecha, $hora, $data[3], $data[4], $data[5], $data[6], $data[7]]);
                } catch (PDOException $e) {
                    fclose($handle);
                    return "Error al insertar datos: " . $e->getMessage();
                }
            }

            fclose($handle);
            return "Datos cargados correctamente.";
        } else {
            return "Error al abrir el archivo.";
        }
        
    }


    public function borrarTodosLosExamenes() {
        try {
            $queryDelete = "DELETE FROM Examen"; // Borra todos los registros
            $queryReset = "ALTER TABLE Examen AUTO_INCREMENT = 1"; // Reinicia el ID a 1
    
            $stmt = $this->con->getCon()->prepare($queryDelete);
            $stmt->execute();
    
            $stmtReset = $this->con->getCon()->prepare($queryReset);
            $stmtReset->execute();
    
            return "✅ Todos los exámenes han sido eliminados y las IDs han sido reiniciadas.";
        } catch (PDOException $e) {
            return "❌ Error al eliminar los exámenes: " . $e->getMessage();
        }
    }
    
    public function obtenerMateriasAgrupadas($busqueda = '', $limit = 5, $offset = 0) {
        $busqueda = "%$busqueda%";
    
        $query = "
            SELECT 
                Materia, Grupo, Plan, Carrera,
                GROUP_CONCAT(DISTINCT Parcial ORDER BY Parcial ASC) as Parciales,
                MAX(CASE WHEN Parcial = 1 THEN Fecha END) as Fecha1P,
                MAX(CASE WHEN Parcial = 2 THEN Fecha END) as Fecha2P,
                MIN(Hora) as Hora
            FROM Examen
            WHERE Materia LIKE :busqueda
            GROUP BY Materia, Grupo, Plan, Carrera
            ORDER BY Materia ASC
            LIMIT :limit OFFSET :offset
        ";
    
        $stmt = $this->con->getCon()->prepare($query);
        $stmt->bindValue(':busqueda', $busqueda, PDO::PARAM_STR);
        $stmt->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function obtenerUnidadParaEditar($materia, $grupo, $plan, $carrera) {
        $query = "
            SELECT * FROM Examen 
            WHERE Materia = :materia AND Grupo = :grupo AND Plan = :plan AND Carrera = :carrera
            LIMIT 1
        ";
    
        $stmt = $this->con->getCon()->prepare($query);
        $stmt->bindValue(':materia', $materia);
        $stmt->bindValue(':grupo', $grupo);
        $stmt->bindValue(':plan', $plan);
        $stmt->bindValue(':carrera', $carrera);
        $stmt->execute();
    
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function actualizarUnidad($om, $og, $op, $oc, $nm, $ng, $np, $nc, $hora) {
        $query = "
            UPDATE Examen
            SET Materia = :nm, Grupo = :ng, Plan = :np, Carrera = :nc, Hora = :hora
            WHERE Materia = :om AND Grupo = :og AND Plan = :op AND Carrera = :oc
        ";
    
        $stmt = $this->con->getCon()->prepare($query);
        $stmt->execute([
            ':nm' => $nm, ':ng' => $ng, ':np' => $np, ':nc' => $nc, ':hora' => $hora,
            ':om' => $om, ':og' => $og, ':op' => $op, ':oc' => $oc
        ]);
    }
    
}