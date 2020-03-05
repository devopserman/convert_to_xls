<?php

require_once 'db.php';

class Convert 
{
	private $dateFrom;
	private $dateTo;
	
	public function init()
	{
		$df = explode('-', $_POST['datefrom']);
		$dt = explode('-', $_POST['dateto']);

		if ( ! isset($_POST['datefrom']) || ! checkdate($df[1], $df[2], $df[0]) || 
			 ! isset($_POST['dateto']) || ! checkdate($dt[1], $dt[2], $dt[0])){
				 return false;
		}else{
			$this->dateFrom = $_POST['datefrom'];
			$this->dateTo = $_POST['dateto'];

			return true;
		}
	}
	

	public function select(){
		
		$db = new Connect;
		$output = '';	
		$data = $db->query('SELECT * FROM orders WHERE order_date BETWEEN "' . $this->dateFrom .'" AND "' . $this->dateTo .'"');
		if ($data) {
			$output .= '<table>
							<tr>
								<td>Order_date</td>
								<td>Phone</td>
							</tr>
								';
			while ($row = $data->fetch())
			{
				
				$output .= '<tr>
								<td>'.$row['order_date'].'</td>
								<td>'.$row['phone'].'</td>
							</tr>
				';					
			}
			$output .= '</table>';
		}
		$db = null;	
		
		header("Content-Type: application/xls");
		header("Content-Disposition: attachment; filename=download.xls");
		echo $output;

	}
}

$convert = new Convert;
if ($convert->init()){
	$convert->select();
			
			

}
