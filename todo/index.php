<?
$data = @json_decode(file_get_contents('data.json'), true);
if(!is_array($data)) {
    $data = [
        'items' =>[]
    ];
}
 
if(count($_POST) > 0) {
 
if(isset($_POST['addNew']) && !empty($_POST['addNew'])) {
    $data['items'][] = [
      'text' =>$_POST['addNew'],
      'done' => false
   ];
}
   
    if(isset($_POST['editId'])) {
        $id = $_POST['editId'];
    if(isset($_POST['delete'])) {
        unset($data['items'][$id]);
    } else {
        $data['items'][$id]['done'] = isset($_POST['done']);
    }
}
   

file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
   
}
 
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
        <title> ToDo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <ul>
 
<? foreach($data['items'] as $index => $item) { ?>
        <li>
           <form method="POST">
                <input type="checkbox" name="done" onchange="this.form.submit()" <?=($item['done'] ? 'checked="checked"' : '')?>/>
                <?=$item['text']?>
 		<button name="delete">Dzest</button>
                <input type="hidden" name="editId" value="<?=$index?>"/>   
           </form>
        </li>
<?} ?>
        </ul>
   <form method="POST">
        <input type="text" name="addNew" placeholder="Pievienojiet uzdevumu" autofocus/>
        <button class="button"><span>Pievienot</span></button>
   </form>
  </body>
</html>