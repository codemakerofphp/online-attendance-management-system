<?php
include 'database.php';
 //$filepath=realpath(dirname(__FILE__));
//include_once($filepath.'/database.php');
?>

<?php
 class student {
 	private $db;
 	
 public	function __construct()
 	{
 		$this->db=new database();
 		
 	}
     public function getstudent(){
       $query="SELECT * FROM tbl_student";
       $result=$this->db->select($query);
       return $result;
     }
     public function insertstudent($name,$roll)
     {
     	$name=mysqli_real_escape_string($this->db->link,$name);
     	$roll=mysqli_real_escape_string($this->db->link,$roll);

     	if (empty($name)||empty($roll)) {
     		$msg="<div class='alert alert-danger' ><strong>Error !</strong>Field must not be empty</div>";
     		return $msg;
     		
     	}else{
     		$stu_query="INSERT INTO tbl_student(name,roll)VALUES('$name','$roll')";
     		$stu_insert=$this->db->insert($stu_query);

     		$stu_query="INSERT INTO tbl_attendance(roll)VALUES('$roll')";
     		$stu_insert=$this->db->insert($stu_query);


     		if ($stu_insert) {
     			$msg="<div class='alert alert-success !' ><strong>Success</strong>Student data inserted successfully</div>";
     		return $msg;
     		}else{
     			$msg="<div class='alert alert-danger' ><strong>Error !</strong>Student data not inserted </div>";
     		return $msg;
     		}
     	}
     }

     public function insertattendence($cur_date,$attend =array() )
     {
     	$query="SELECT DISTINCT att_time FROM tbl_attendance";
     	$getdata=$this->db->select($query);

     	while ($result=$getdata->fetch_assoc()) {
     		$db_date=$result['att_time'];

     		if ($cur_date==$db_date) {
     			$msg="<div class='alert alert-danger' ><strong>Error !</strong>Attendance already taken </div>";
     		return $msg;
     		}
     	}
     	foreach ($attend as $atn_key => $atn_value) {
     		if ($atn_value=="present") {
     			$stu_query="INSERT INTO tbl_attendance(roll,attend,att_time)VALUES('$atn_key','present',now())";

     			$data_insert=$this->db->insert($stu_query);

     		}elseif ($atn_value=="absent") {
     				$stu_query="INSERT INTO tbl_attendance(roll,attend,att_time)VALUES('$atn_key','absent',now())";
     				$data_insert=$this->db->insert($stu_query);
     		}
     	}

     	if ($data_insert) {
     			$msg="<div class='alert alert-success !' ><strong>Success</strong>Attendance data inserted successfully</div>";
     		return $msg;
     		}else{
     			$msg="<div class='alert alert-danger' ><strong>Error !</strong>Attendance data not inserted </div>";
     		return $msg;
     		}
     }


public function getdatelist()
{
	$query="SELECT DISTINCT att_time FROM tbl_attendance";
     	$result=$this->db->select($query);
     	return $result;

 }

 public function getalldata($dt)
 {
       $query="SELECT tbl_student.name ,tbl_attendance.* From tbl_student
                 INNER JOIN tbl_attendance
                 ON tbl_student.roll=tbl_attendance.roll
                 WHERE att_time='$dt'

       ";
          $result=$this->db->select($query);
          return $result;
  }


  public function updateattendence($dt,$attend)
  {
            foreach ($attend as $atn_key => $atn_value) {
            if ($atn_value=="present") {
               $query="UPDATE tbl_attendance
                      SET attend='present'
                      WHERE roll='.$atn_key' AND att_time='.$dt.'";
                      $data_update=$this->db->update($query);

            }elseif ($atn_value=="absent") {
                    $query="UPDATE tbl_attendance
                      SET attend='absent'
                      WHERE roll='.$atn_key' AND att_time='.$dt.'";
                      $data_update=$this->db->update($query);
            }
        }

        if ($data_update) {
                $msg="<div class='alert alert-success !' ><strong>Success</strong>Attendance data update successfully</div>";
            return $msg;
            }else{
                $msg="<div class='alert alert-danger' ><strong>Error !</strong>Attendance data not update </div>";
            return $msg;
            }
  }





  /////////////////////////
public function insertmsg($name,$id,$subject)
  {
      $name=mysqli_real_escape_string($this->db->link,$name);
        $id=mysqli_real_escape_string($this->db->link,$id);
        $subject=mysqli_real_escape_string($this->db->link,$subject);

        if (empty($name)||empty($id)) {
            $msg="<div class='alert alert-danger' ><strong>Error !</strong>Field must not be empty</div>";
            return $msg;
            
        }else{
            $stu_query="INSERT INTO user(name,id,msg)VALUES('$name','$id','$subject')";
            $stu_insert=$this->db->insert($stu_query);

            


            if ($stu_insert) {
                $msg="<div class='alert alert-success !' ><strong>Success</strong>Messages Sent</div>";
            return $msg;
            }else{
                $msg="<div class='alert alert-danger' ><strong>Error !</strong>Messages not Send </div>";
            return $msg;
            }
        }
  } 

  public function getmsg()
   {
     $query="SELECT id,name,msg FROM user";
      $result=$this->db->select($query);
      return $result;
   } 

  

}
  ?>
