<h1>Funtion Style</h1>
<?php 
$adata = ['a', 'b', 'c'];
// array('a', 'b', 'c') 와 같음
array_push($adata, 'd');
foreach($adata as $item) {
  echo $item.'<br/>';
  // JS와 비슷한 방법
}
var_dump(count($adata));
// 카운트에 대상을 지정해줘야 했었다.

?>
<h1>Object Style</h1>
<?php 
$odata = new ArrayObject(array('a', 'b', 'c'));
$odata->append('d');

foreach($odata as $item) {
  echo $item.'<br/>';
}
var_dump($odata->count());
// 메소드를 사용하기 때문에 불러올때부터 대상이 이미 정해져 있다.

?>