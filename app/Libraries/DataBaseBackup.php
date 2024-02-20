<?php

namespace App\Libraries;


Class DataBaseBackup

{
    public $localizeModel;
    protected $db;

    public function __construct()
    {

        $this->db      = \Config\Database::connect();
    }
    public function dataBackup()
    {
       
        helper('filesystem');

		$map = directory_map(ROOTPATH.'public/',1);
	

		$valTest = 0;
		foreach ($map as $key => $value) {
			
	 		$res = preg_replace('#[^\w()/.%\-&]#',"",$value);
			

			//if ($res == "DB") {
				//$valTest = 1;
			//}

			// server side code 

			 if ($res == "DB/") {
			 	$valTest = 1;
			 }
			// server side code 
			
		}
		
        if ($valTest == 1) {

		}

		else
		{

            mkdir(ROOTPATH.'public/DB',0777,TRUE);
            

		}



        
        

       
        $fileName = date('Y-m-d-Hms').'.sql';

        $path = ROOTPATH.'public/DB/';

		
		$data =  $this->backup();
	

        // $handle = fopen($path.'\\'.$fileName, "c+");
        
        $handle = fopen($path.$fileName, "w");
        fclose($handle);

      

            if ( ! write_file('DB/'.$fileName, $data)) {

                echo 'Unable to write the file';
            } else {
              
				
				return $fileName;
				// return $path.'\\'.$fileName;
                
            }

			
        
    }




	public function backup()
	{
		$hostname = $this->db->hostname;
		$username = $this->db->username;
		$password = $this->db->password;
		$database = $this->db->database;
		
		$batchSize = 1000;
		

		$connection = mysqli_connect(
				$hostname,
				$username,
				$password,
				$database,
		  );
        

		$tables = array();
        
        $result = mysqli_query($connection, 'SHOW TABLES');
      
        while($row = mysqli_fetch_row($result)) {
			$tables[] = $row[0];
		}
       
		$sql = "SET foreign_key_checks = 0;\n\n";
        
		foreach($tables as $table) {
			
			
			$sql .= 'DROP TABLE IF EXISTS `'.$table.'`;';
			$row = mysqli_fetch_row(mysqli_query($connection, 'SHOW CREATE TABLE `'.$table.'`'));
			$sql .= "\n\n".$row[1].";\n\n";

			/**
			 * INSERT INTO
			 */

			$row = mysqli_fetch_row(mysqli_query($connection, 'SELECT COUNT(*) FROM `'.$table.'`'));
			$numRows = $row[0];

			// Split table in batches in order to not exhaust system memory 
			$numBatches = intval($numRows / $batchSize) + 1; // Number of while-loop calls to perform

			for ($b = 1; $b <= $numBatches; $b++) {
				
				$query = 'SELECT * FROM `' . $table . '` LIMIT ' . ($b * $batchSize - $batchSize) . ',' . $batchSize;
				$result = mysqli_query($connection, $query);
				$realBatchSize = mysqli_num_rows ($result); // Last batch size can be different from $this->batchSize
				$numFields = mysqli_num_fields($result);

				if ($realBatchSize !== 0) {
					$sql .= 'INSERT INTO `'.$table.'` VALUES ';

					for ($i = 0; $i < $numFields; $i++) {
						$rowCount = 1;
						while($row = mysqli_fetch_row($result)) {
							$sql.='(';
							for($j=0; $j<$numFields; $j++) {
								if (isset($row[$j])) {
									$row[$j] = addslashes($row[$j]);
									$row[$j] = str_replace("\n","\\n",$row[$j]);
									$row[$j] = str_replace("\r","\\r",$row[$j]);
									$row[$j] = str_replace("\f","\\f",$row[$j]);
									$row[$j] = str_replace("\t","\\t",$row[$j]);
									$row[$j] = str_replace("\v","\\v",$row[$j]);
									$row[$j] = str_replace("\a","\\a",$row[$j]);
									$row[$j] = str_replace("\b","\\b",$row[$j]);
									if ($row[$j] == 'true' or $row[$j] == 'false' or preg_match('/^-?[1-9][0-9]*$/', $row[$j]) or $row[$j] == 'NULL' or $row[$j] == 'null') {
										$sql .= $row[$j];
									} else {
										$sql .= '"'.$row[$j].'"' ;
									}
								} else {
									$sql.= 'NULL';
								}

								if ($j < ($numFields-1)) {
									$sql .= ',';
								}
							}

							if ($rowCount == $realBatchSize) {
								$rowCount = 0;
								$sql.= ");\n"; //close the insert statement
							} else {
								$sql.= "),\n"; //close the row
							}

							$rowCount++;
						}
					}

					
					
				}
			}

			

			$sql.="\n\n";

			
		}
        
        $sql .= "SET foreign_key_checks = 1;\n";

		return  $sql;
       
    }


}




?>