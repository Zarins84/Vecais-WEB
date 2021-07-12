<?

$data = @json_decode(file_get_contents('data.json'), true);
if (!is_array($data)) {
    $data = [
        'items' =>[]
    ];
}

	
if(isset($_POST['addNew']) && !empty($_POST['addNew'])) {
		$data['items'][] = [
			'text' => $_POST['addNew']
		];
		
}

file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));

?>
<html>
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 14px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<head>
	<title>ToDo</title>
	<meta http-equiv="Count-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	<ul>

<? foreach($data['items'] as $index => $item) { ?>
		<li>
			<form method="POST">
				<?=$item['text']?>
			</form>
		</li>
	<?} ?>
	</ul>
	<form method="POST">
		<input type="text" name="addNew" placeholder="Pievienot uzdevumu..." autofocus/>
		<button class="button"><span>Pievienot</span></button>
	</form>
</body>
</html>
