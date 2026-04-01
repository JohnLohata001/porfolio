<?php

// ==============================================================
//                        session start
// ==============================================================

    session_start();


// ==============================================================
//                        connection in database
// ==============================================================

    require 'connect.php';


// ==============================================================
//                        function to test the data
// ==============================================================


    function test($value){

        echo"<pre>";
            print_r($value);
        echo"</pre>";
        
    }

// ==============================================================
//                        function to execute the query
// ==============================================================

    function executeQuery($sql, $data){

        global $conn;
        $stmt = $conn->prepare($sql);
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        return $stmt;


    }

 // ==============================================================
//          function select all the data from database 
// ==============================================================

    function selectAll($table, $conditions = []){
        
        global $conn;
        $sql = "SELECT * FROM $table";

        if (empty($conditions)) {

            $sql = $sql . " ORDER BY id DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;

        }else{

            $i=0;

            foreach ($conditions as $key => $value) {
                
                if ($i === 0) {
                    $sql = $sql . " WHERE $key?";
                }else{
                    $sql = $sql . " AND $key?";
                }
                $i++;
            }

            $stmt = executeQuery($sql, $conditions);
            $record = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $record;
        }
        

    }


// ==============================================================
//                select one record from database
// ==============================================================


    function selectOne($table, $conditions=[]){

        global $conn;
        $sql = "SELECT * FROM $table";

        $i=0;

        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql =  $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key";
            }
            $i++;
        }

        $sql = $sql . " LIMIT 1";
        $stmt = executeQuery($sql, $conditions);
        $record = $stmt->get_result()->fetch_assoc();
        return $record;

    }


// ==============================================================
//                    update data form database
// ==============================================================


    function update($table, $id, $data){

        global $conn;
        $sql = "UPDATE $table SET ";
        $i=0;
        foreach ($data as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";
            }
            $i++;

            $sql = $sql . " WHERE id=?";
            $data['id'] = $id;
            $stmt = executeQuery($sql, $data);
            return $stmt->affected_rows;
        }


    } 



// ==============================================================
//              function add new data to database
// ==============================================================



    function create($table, $data){

        global $conn;
        $sql = "INSERT INTO $table SET ";
        $i=0;
        foreach ($data as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";
            }
            $i++;
        }

        $stmt = executeQuery($sql, $data);
        $id = $stmt->insert_id;
        return $id;


    }


// ==============================================================
//                  function delete record from database
// ==============================================================


    function delete($table, $id){
        global $conn;
        $sql = "DELETE FROM $table WHERE id=?";
        $stmt = executeQuery($sql, ['id' => $id]);
        return $stmt->affected_rows;
        

    }