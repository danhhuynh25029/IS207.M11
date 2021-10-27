<?php
	class nhanvien{
		private $name;
		private $count_day;
		private $quantity;
		private $ms;
		public function __construct($ms,$name,$count_day,$quantity){
			$this->ms = $ms;
			$this->name = $name;
			$this->ms = $ms;
			$this->count_day = $count_day;
			$this->quantity = $quantity;
		}
		public function inNhanVien(){
			echo "Ma so : ".$this->ms."<br>";
			echo "Ten : ".$this->name."<br>";
			echo "So ngay lam : ".$this->count_day."<br>";
			echo "Luong ngay : ".$this->quantity."<br>";
			echo "Luong thang : ".($this->quantity*$this->count_day)."<br>";
		}
		public function TinhLuong(){
			return $this->quantity*$this->count_day;
		}
		
	}
	class nhanvienql extends nhanvien{
		private $phucap = 2000;
		public function __construct($ms,$name,$count_day,$quantity){
			parent::__construct($ms,$name,$count_day,$quantity);
		}
		public function inNhanVien(){
			parent::inNhanVien();
			echo "Phu cap : ".$this->phucap;
		}
		public function TinhLuong(){
			return parent::TinhLuong() + $this->phucap;
		}
	}
?>