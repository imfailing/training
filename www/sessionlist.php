<html>
<head>
	<meta http-equiv="Content-Type" content="charset=utf-8">
    <title>Список семинаров</title>
<style>
	body {
		  width: 95%;
		  margin: 0px auto 0 auto;
		  font-family: Arial, Helvetica;
		  font-size: small;
		  background-color: #eee;
		  background-image: url(data:image/gif;base64,R0lGODlhCAAIAJEAAMzMzP///////wAAACH5BAEHAAIALAAAAAAIAAgAAAINhG4nudroGJBRsYcxKAA7);
		}
		
table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 100%;    
}

.bordered tr:hover {
    background: #7cbfff;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 0px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;    
}

.bordered th {
    text-align: left;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
    border-bottom: 1px solid #ccc;
    background-color: #eee;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
    background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
    background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
    background-image:      -o-linear-gradient(top, #f5f5f5, #eee); 
    background-image:         linear-gradient(top, #f5f5f5, #eee);
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}



    /* ------------------------------------------------- */

    #tabs {
      overflow: hidden;
      width: 100%;
      margin: 0;
      padding: 0;
      list-style: none;
    }

    #tabs li {
      float: left;
      margin: 0 -15px 0 0;
    }

    #tabs a {
      float: left;
	  position: relative;
	  padding: 0 40px;
      height: 0; 
	  line-height: 30px;
      text-transform: uppercase;
      text-decoration: none;
      color: #fff;	  
      border-right: 30px solid transparent;
      border-bottom: 30px solid #3D3D3D;
      border-bottom-color: #777\9;
      opacity: .3;
      filter: alpha(opacity=30);	  
    }

    #tabs a:hover,
    #tabs a:focus {
      border-bottom-color: #2ac7e1;
      opacity: 1;
      filter: alpha(opacity=100);
    }

    #tabs a:focus {
      outline: 0;
    }

    #tabs #current {
      z-index: 3;
      border-bottom-color: #3d3d3d;
      opacity: 1;
      filter: alpha(opacity=100);	  
    }

    /* ----------- */
    #content {
        background: #fff;
        border-top: 2px solid #3d3d3d;
        padding: 0em;
        /*height: 220px;*/
    }

    #content h2,
  	#content h3,
  	#content p {
        margin: 0 0 15px 0;
    }  
	
    .button
    {        
        display: inline-block;
        white-space: nowrap;
        background-color: #ddd;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ccc));
        background-image: -webkit-linear-gradient(top, #eee, #ccc);
        background-image: -moz-linear-gradient(top, #eee, #ccc);
        background-image: -ms-linear-gradient(top, #eee, #ccc);
        background-image: -o-linear-gradient(top, #eee, #ccc);
        background-image: linear-gradient(top, #eee, #ccc);
        border: 1px solid #777;
        padding: 0 1.5em;
        margin: 0.5em;
        font: bold 1em/2em Arial, Helvetica;
        text-decoration: none;
        color: #333;
        text-shadow: 0 1px 0 rgba(255,255,255,.8);
        -moz-border-radius: .2em;
        -webkit-border-radius: .2em;
        border-radius: .2em;
        -moz-box-shadow: 0 0 1px 1px rgba(255,255,255,.8) inset, 0 1px 0 rgba(0,0,0,.3);
        -webkit-box-shadow: 0 0 1px 1px rgba(255,255,255,.8) inset, 0 1px 0 rgba(0,0,0,.3);
        box-shadow: 0 0 1px 1px rgba(255,255,255,.8) inset, 0 1px 0 rgba(0,0,0,.3);
    }
    
    .button:hover
    {
        background-color: #eee;        
        background-image: -webkit-gradient(linear, left top, left bottom, from(#fafafa), to(#ddd));
        background-image: -webkit-linear-gradient(top, #fafafa, #ddd);
        background-image: -moz-linear-gradient(top, #fafafa, #ddd);
        background-image: -ms-linear-gradient(top, #fafafa, #ddd);
        background-image: -o-linear-gradient(top, #fafafa, #ddd);
        background-image: linear-gradient(top, #fafafa, #ddd);
    }
    
    .button:active
    {
        -moz-box-shadow: 0 0 4px 2px rgba(0,0,0,.3) inset;
        -webkit-box-shadow: 0 0 4px 2px rgba(0,0,0,.3) inset;
        box-shadow: 0 0 4px 2px rgba(0,0,0,.3) inset;
        position: relative;
        top: 1px;
    }
    
    .button:focus
    {
        outline: 0;
        background: #fafafa;
    }    
    
    .button:before
    {
        background: #ccc;
        background: rgba(0,0,0,.1);
        float: left;        
        width: 1em;
        text-align: center;
        font-size: 1.5em;
        margin: 0 1em 0 -1em;
        padding: 0 .2em;
        -moz-box-shadow: 1px 0 0 rgba(0,0,0,.5), 2px 0 0 rgba(255,255,255,.5);
        -webkit-box-shadow: 1px 0 0 rgba(0,0,0,.5), 2px 0 0 rgba(255,255,255,.5);
        box-shadow: 1px 0 0 rgba(0,0,0,.5), 2px 0 0 rgba(255,255,255,.5);
        -moz-border-radius: .15em 0 0 .15em;
        -webkit-border-radius: .15em 0 0 .15em;
        border-radius: .15em 0 0 .15em;     
        pointer-events: none;		
    }
	
	    .add:before
    {
        content: "\271A";
    }
</style>
<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
</head>

<body>
<script src="jquery.js"></script>
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.easing-1.4.pack.js"></script>


<ul id="tabs">
    <li><a href="getsessions.php?state=2&limit=20">Текущие семинары</a></li>
    <li><a href="getsessions.php?state=3&limit=20">Будущие семинары</a></li>
    <li><a href="getsessions.php?state=1&limit=20">Прошедшие семинары</a></li>
</ul>

<div id="content">
</div>
<a href="addsession.php" class="button add">Добавить семинар</a>
  <script type="text/javascript">
    var limit=20;
	
    function resetTabs(){
		$("#content").hide(); //Hide all content
        $("#tabs a").attr("id",""); //Reset id's      
    }
	

	function loadcontent(url,limit)
	{
		$.get(url, function(data) {$("#content").html(data);$("#content").fadeIn();});	
	}
	
	
	$(document).ready(function () {
		loadcontent('getsessions.php?state=2',limit);
		$("a.button").fancybox({
                'width': 800,
                'height': 600,
                'enableEscapeButton' : false,
                'overlayShow' : true,
                'overlayOpacity' : 0,
                'hideOnOverlayClick' : false,
                'type': 'iframe',
            });
		
		
	});

    (function(){
        $("#tabs li:first a").attr("id","current"); // Activate first tab
        
        $("#tabs a").on("click",function(event) {
            event.preventDefault();
            if ($(this).attr("id") == "current"){ //detection for current tab
             return       
            }
            else{             
				resetTabs();
				$(this).attr("id","current"); // Activate this				
				url=$(this).attr("href");
				loadcontent(url,limit);
            }
        });
    })()
  </script>
</body>
</html>



