<?php

include_once '../database/database.php';

class User extends Databases {

    public function insert($email, $pname, $gmember, $gm_name, $startdate, $enddate, $status, $password) {
        $ret = mysqli_query($this->con, "insert into user(email,pname,gmember,gm_name,startdate,enddate,status,password) values('$email','$pname','$gmember','$gm_name', '$startdate','$enddate','$status','$password')");
        return $ret;
    }

}

class database1 extends Databases {

    public function required_validation($field) {
        $count = 0;
        foreach ($field as $key => $value) {
            if (empty($value)) {
                $count++;
                $this->error .= "<p>" . $key . " is required</p>";
            }
        }
        if ($count == 0) {
            return true;
        }
    }

    public function can_login($table_name, $where_condition) {
        $condition = '';
        foreach ($where_condition as $key => $value) {
            $condition .= $key . " = '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        /* This code will convert array to string like this-  
          input - array(
          'id'     =>     '5'
          )
          output = id = '5' */
        $query = "SELECT * FROM " . $table_name . " WHERE " . $condition;
        $result = mysqli_query($this->con, $query);
        if (mysqli_num_rows($result)) {
            return true;
        } else {
            $this->error = "Wrong Data";
        }
    }

}

class display extends Databases {

    public function select($table_name) {
        $array = array();
        $query = "select *from " . $table_name . "";
        $result = mysqli_query($this->con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }

        return $array;
    }

}

class update extends Databases {

    public function select_record($table, $where) {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
// id = '5' AND m_name = 'something'
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "SELECT * FROM " . $table . " WHERE " . $condition;
        $query = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($query);
        return $row;
    }

    public function update_record($table, $where, $fields) {
        $sql = "";
        $condition = "";

        foreach ($where as $key => $value) {
            $condition .= $key . " = '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        foreach ($fields as $key => $value) {
            $sql .= $key . "='" . $value . "', ";
        }
        $sql = substr($sql, 0, -2);
        $sql = "UPDATE " . $table . " SET " . $sql . " WHERE " . $condition;
        echo $sql;

        if (mysqli_query($this->con, $sql)) {

            return true;
        }
    }

    public function delete_record($table, $where) {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql = "DELETE FROM " . $table . " WHERE " . $condition;
        if (mysqli_query($this->con, $sql)) {
            return true;
        }
    }

}

class export extends Databases {

    public function select($table) {
        $array = array();

        $query = "SELECT * FROM " . $table . "";
        $result = mysqli_query($this->con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = array(
                "email" => $row["email"],
                "pname" => $row["pname"],
                "gmember" => $row["gmember"],
                "gm_name" => $row["gm_name"],
                "startdate" => $row["startdate"],
                "enddate" => $row["enddate"],
                "status" => $row["status"]
            );
        }


        return json_encode($array);
    }

}


class import extends Databases {

    public function importdata($table){ 
            $data = file_get_contents("../Model/data.json");
        $array = json_decode($data, TRUE);
        /* echo '<pre>';
          print_r($data);
          echo '</pre>'; */

        foreach ($array as $row) {
            echo "Project Name : ";
            echo $row['pname'];
            echo '<br>';
            echo "Email: ";
            echo $row['email'];
            echo '<br>';
            echo "Group Member: ";
            echo $row['gmember'];
            echo '<br>';
            echo "Member Name: ";
            echo $row['gm_name'];
            echo '<br>';
            echo "Start Date: ";
            echo $row['startdate'];
            echo '<br>';
            echo "End Date: ";
            echo $row['enddate'];
            echo '<br>';
            echo "Status: ";
            echo $row['Status'];
            echo '<br>';
            echo '<br>';
            /*if (mysqli_query($this->con, $sql)) {
                echo"data inserted";
                header('location:../View/table.php');
            }*/
        }

}
}

?>