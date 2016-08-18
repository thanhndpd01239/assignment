<?php  
class database{   
    protected $_conn = "";
    protected $_result = "";  
    public function __construct(){ // Kết nối csdl đầu tiên
        $this->_conn = mysql_connect("localhost","root","") 
        or die("Can't connect database");
        mysql_select_db("assignmentphp",$this->_conn); // Lựa chọn csdl
        mysql_query("SET NAMES utf8"); // Chuyển dữ liệu trả về sang kiểu utf8
    }
    public function query($sql){
        if($this->_conn){ // nếu đã kết nối csdl
            $this->_result = mysql_query($sql); /* Gán kết quả trả về của câu truy
                                                 vấn cho biến $_result */
        }                                
    }
    public function num_rows(){
        if($this->_result){ // nếu đã có kết quả trả về từ câu truy vấn
            $rows = mysql_num_rows($this->_result);
        }else{
            $rows = 0;
        }
        return $rows; // trả về số dòng tìm được
    }
    public function fetch(){
        if($this->_result){ // nếu có kết quả trả về của câu truy vấn
            $data = mysql_fetch_assoc($this->_result);
        }else{
            $data = array();
        }
        return $data;
    }
    public function fetchAll(){
		$data = array();
        if($this->_result){ // nếu có kết quả trả về của câu truy vấn
            while($db = mysql_fetch_assoc($this->_result)){
                $data[] = $db; 
            }
        }
        return $data;
    }
}
?>