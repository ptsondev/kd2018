<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        
<title>Phát hiện click ảo</title>

    <meta name="description" content="Phát hiện click ảo" />
    
<link rel="shortcut icon" type="image/x-icon" href="images/kingdom.ico" />
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/responsive_slide.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/responsiveslides.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/parallax.js"></script>
<script type="text/javascript" src="js/jquery.bighover.js"></script>        
<script type="text/javascript" src="js/js.js"></script>


<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

</head>
 
<body>
    
    <?php 
        require_once('mylib.php');
        $ip = htmlspecialchars($_REQUEST['IP']);
        $results = $db->queryAllRows('SELECT * FROM k_visit WHERE IP=?', $ip);     
        foreach($results as $item){
            echo $item['IP'].' - '.date('H:i:s d/m/y', $item['time']). ' - '.$item['url'].'<br />';
        }
    ?>
    
</body>
</html>