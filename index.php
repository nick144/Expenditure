<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" href="css/style.css" type="text/css" />

</head>

<body>
<div id="wrapper">

    <div class="secondary">
    <ul>
        <li>Details</li>
        <li>Add Expenditure</li>
        <li>Edit Expenditure</li>
        <li>Remove Expenditure</li>
        
    </ul>
    </div>
    
    
    <div class="primary">
        <div class="calender">
        
        <?php
		
		$date = time();
		$day = date('d', $date);
		$month = date('m', $date);
		$year = date('y', $date);
		$first_day = mktime(0,0,0, $month, 1, $year);
		$title = date('F', $first_day);
		
		
		?>
        
        
        
        </div>
        
        <div class="details">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
    
    
</div>
</body>
</html>