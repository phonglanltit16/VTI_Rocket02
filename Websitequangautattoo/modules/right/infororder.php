<div class="container">
  <h2>Thông tin nhận hàng</h2>
  <?php
  function addNew($table,$data){
	  
  	if(isset($_POST['addNew'])){
		global $conn;
		$field='';
		$values='';
		if(is_array($data)){
			$i=0;
			foreach($data as $key => $val){
				if($key !='addNew'){
					$i++;
					if($id==1){
						$field.=$key;
						$values.=''.$val.'';
					}else{
						$field.=','.$key;
						$values.=','.$val.'';
					}
				}
			}
			$sqlInsert='INSERT INTO $table ($field) VALUES($values)';
			mysqli_query($conn,$sqlInsert) or die ('Lỗi câu lệnh truy vấn');
			$id=mysqli_insert_id($conn);
			return $id;
		} 
						
		
		$currenDate=date('Y-m-d H:i:s');
		$_POST['id_cus']=0;
		$_POST['status']=1;
		$_POST['date_create']=$currenDate;
		$_POST['totalall']=$totalall;
		$table='order';
		$id=addNew($table,$_POST);
	}
		
  ?>
  <form action="">
      <div class="form-group">
          <label for="name">Họ và tên khách hàng:</label>
          <input type="name" class="form-control" id="name" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="email">Số điện thoại:</label>
        <input type="phone" class="form-control" id="phone" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="email">Địa chỉ email:</label>
        <input type="email" class="form-control" id="email" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="pwd">Địa chỉ:</label>
        <input type="address" class="form-control" id="address" style="width:1000px">
      </div>
      <div class="form-group">
        <label for="pwd">Note:</label>
        <input type="note" class="form-control" id="note" style="width:1000px">
      </div>
      
  <div align="center"><button type="submit" class="btn btn-primary">Xác nhận đơn</button></div>
  </form>
</div>