<?php

class StudentDAO {
    private array $arrayStudent;
    public function __construct(array $arrayStudent){
        $this->arrayStudent = $arrayStudent;
    }
    public function create(Student $student){
        $this->arrayStudent[] = $student;
    }
    public function read(string $path){
        $file_handle = fopen($path , 'r');
        $file_content = fread($file_handle , filesize($path));
        $array = @file(str_replace(',','',$file_content));
        foreach($array as $value){
            $this->arrayStudent[] = $value;
        }
        fclose($file_handle);
    }
    public function update(int $index ,Student $value){
        $this->arrayStudent[$index] = $value;
    }
    public function delete(int $index){
        unset($this->arrayStudent[$index]);
    }
    public function getAll(){
        
        for($i = 0 ; $i < count($this->arrayStudent) - 1 ; $i++){
            echo $this->arrayStudent[$i].'<br>';
        } 
    }
}
?>