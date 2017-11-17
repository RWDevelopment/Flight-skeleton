<?php
define("ROOT", $_SERVER['SERVER_NAME'] . '/travel2georgia/assets/');
class Site {

    // echo Site::css('css/blog.css'); //
    // echo Site::css(array('css/file1.css', 'css/file2.css')); //
	
    public static function css($files)
	{
		
		if( !is_array($files) ) {
			$files = array($files);
		}
		$links = '';
		echo'<!-- site css styles -->'.PHP_EOL.'  ';
		foreach($files as $file) {
			$links .= '<link rel="stylesheet" type="text/css" href="http://'.ROOT.'css/'.$file.'">'.PHP_EOL.'  ';
		}
		return $links;
	}
	
	public static function javascript($files)
	{
		if( !is_array($files) ) {
			$files = array($files);
		}
		$scripts = '';
		echo PHP_EOL.'<!-- site js scripts -->'.PHP_EOL;
		foreach($files as $file) {
			$scripts .= '<script src="http://'.ROOT.'js/'.$file.'"></script>'.PHP_EOL;
		}
		return $scripts;
	}
	
	// echo Site::js('js/main.js'); //
	// echo Site::js(array('js/file1.js', 'js/file2.js')); //
	public static function js($files)
	{
		return self::javascript($files);
	}
	
	// echo Site::fontAwesome(); //
	// echo Site::fontAwesome(true); //
	public static function fontAwesome($cdn=false)
	{
		if ($cdn) {
			return '<!-- site fontAwesome css -->'.PHP_EOL.'  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">'.PHP_EOL;
		}
		return '<!-- site fontAwesome css -->'.PHP_EOL.'  <link rel="stylesheet" href="http://'.ROOT.'font-awesome/css/font-awesome.min.css'.'">'.PHP_EOL;
	}
	
	// echo Site::jquery(); //
	// echo Site::jquery(true); //
	public static function jquery($cdn=false)
	{
		if ($cdn) {
			return '<!-- site jquery, popper & bootstrap -->'.PHP_EOL.'<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>'.PHP_EOL;
		}
		return '<!-- site jquery, popper & bootstrap -->'.PHP_EOL.'<script src="http://'.ROOT.'js/jquery.min.js'.'"></script>'.PHP_EOL;
	}
	
	// echo Site::bootstrap_js(); //
	// echo Site::bootstrap_js(true); //
	public static function bootstrap_js($cdn=false)
	{
		if ($cdn) {
			return '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>'.PHP_EOL;
		}
		return '<script src="http://'.ROOT.'js/poper.js'.'"></script>
<script src="http://'.ROOT.'js/bootstrap.min.js'.'"></script>'.PHP_EOL;
	}
	
	public static function twitter_cards($tcard,$tsite,$ttitle,$tdescription,$timage)
	{
		
		return '<!-- twitter cards -->
  <meta name="twitter:card" content="'.$tcard.'" />
  <meta name="twitter:site" content="'.$tsite.'" />
  <meta name="twitter:title" content="'.$ttitle.'" />
  <meta name="twitter:description" content="'.$tdescription.'" />
  <meta name="twitter:image" content="'.$timage.'" />'.PHP_EOL;
		
	}
	
	public static function open_graph()
	{
		
		return '<!-- open graph -->
  <meta property="og:locale" content="" />
  <meta property="og:type" content="" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:image:type" content="" />
  <meta property="og:image:alt" content="" />';
		
	}


}
?>