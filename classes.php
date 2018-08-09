<?php 

	class Books {
		/* Member variables */
		var $price ;
		var $title ;

		/*Member functions */ 
		function setPrice ($par)
		{
			$this->price = $par;

		} 
		function getPrice ()
		{
			echo $this->price."<br/>" ;
		}
		function setTitle($par)
		{
			$this->title = $par;
		}
		function getTitle () 
		{
			echo $this->title."<br/>";
		}	

	}


	$physics= new Books;
	$maths= new Books;
	$chemistry= new Books;


	$physics->setTitle("Physics for High School");
	$chemistry->setTitle("chemistry for High School");
	$maths->setTitle("Maths for High School");

	$physics->setPrice("5");
	$maths->setPrice("10");
	$chemistry->setPrice("17");

	$physics->getTitle();
	$maths->getTitle();
	$chemistry->getTitle();

	$physics->getPrice();
	$maths->getPrice();
	$chemistry->getPrice();


	class Novel extends Books 
	{
		var $publisher ;
		function setPublisher($par) 
		{
			$this->publisher = $par ;
		}
		function getPublisher ($par)
		{
			echo $this->publisher."<br/>";
		}

	}

	$author = new Novel;

	$author->setPublisher("Steven King");
	$author->getPublisher();


	// class MyClass 
	// {
	// 	private $car = "Skoda";
	// 	$driver="SRK" ;


	// 	function __construct($par)
	// 	{

	// 	}

	// 	function myPublicFunction()
	// 	{
	// 		return("I'm visible");
	// 	}
	// 	private function myPrivateFunction()
	// 	{
	// 		return("I'm not visible outside ! ");
	// 	}

	


	// }


	class MyClass 
	{
		private $font_size;
		private $font_color;
		private $string_value;

		function __construct($font_size,$font_color,$string_value)
		{
			$this->font_size=$font_size;
			$this->font_color=$font_color;
			$this->string_value=$string_value;
			 $this->customize_print();
		}

		function customize_print()
		{
			echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
		}
	}


	$f= new MyClass('20px','red','Object Oriented Programming');



	

 ?>