<!doctype html>
<?php
class Book {
	
	public function __construct($id,$author,$title,$desc,$price)
	{
		
		$this->id = $id;
		$this->author = $author;
		$this->title = $title;
		$this->desc = $desc;
		$this->price = $price;
	}
	public function show()
	{
		$id = $this->id;
		$auth = $this->author;
		$title = $this->title;
		$desc = $this ->desc;
		$price = number_format($this->price,2);
			
	 return "<p style='padding-bottom:15px;'>$id: <strong>$title</strong> by $auth $$price<br />$desc</p>";	 
    }
	  	
	public function sortAuthor($otherBook)
	{
	   return $this->author > $otherBook->author;
	}
	public function sortTitle($otherBook)
	{
	   return $this->title > $otherBook->title;
	}
} //end class book

function sortAuthor($book1, $book2)
{
   return $book1->sortAuthor($book2);
}
		
function sortTitle($book1, $book2)
{
   return $book1->sortTitle($book2);
}

$books = array(
    new Book(4000,'Alder','The Finding of The Third Eye',
    'Summarizes ancient wisdom along with modern science; breathing, diet and color and development of the third eye.',
     14.95),
    new Book(4001,'Alexander','Proof of Heaven',
    'Neurosurgeon\'s journey into the afterlife.',16),
    new Book(4002,'Allen','As a Man Thinketh',
    'This book discusses success and health through the power of thought and its effect on life.',
     3.5)
);

function catalog($arr)
{
	$s = "";
	$s .="<div id='by-author'>";
	for ($i=0;$i<count($arr); $i++)
    	$s .= $arr[$i]->show();
	$s.="</div><div id='by-title'>";
	usort($arr, "sortTitle");
	for ($i=0;$i<count($arr); $i++)
    	$s .= $arr[$i]->show();
	$s .="</div>";
	return $s;
}

?>
<html>
<head>
<meta charset="utf-8">
<title>PHP Objects</title>
<style type="text/css">
    #by-author{display:none;}

</style>
<script>
function showSortTitle()
{
    document.getElementById('by-title').style.display='block';
    document.getElementById('by-author').style.display='none';

}
function showSortAuthor()
{
    document.getElementById('by-author').style.display='block';
    document.getElementById('by-title').style.display='none';

}

</script>
</head>

<body>
    <button onclick = 'showSortTitle()'>Sort By Title</button>
    <button onclick = 'showSortAuthor()'>Sort By Author</button>
    <hr />
    <?php  echo catalog($books);  ?>


	
</body>
</html>