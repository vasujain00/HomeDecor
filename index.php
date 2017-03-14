<?php
    include('fetch_category.php');

?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeDecor</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="css/first.css">
    <link rel="stylesheet" href="./css/figure.css">

	 <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <style>
	   body{
        padding: 0;
        margin: 0;
       }
       
        .arkhip{
             font-family: Arkhip;
            font-size: 50px;
        }
		 .video-fluid{
            width :1349px;
            height:auto;
            position: relative;
            z-index:0;
        }
        @media screen and (max-device-width:500px) and (min-device-width:300px){
            .video-fluid{
                width:100%;
                height: auto;
            }
            
        }
        .caps{
        	text-transform: uppercase;
        }
        #search-panel{
			width:100%;
        }
         .top{
            margin-top: 5%;
            margin-bottom: 5%;
        }
        .right{
            margin-left: 25%;
        }
        .left{
            float:left;
        }
        #textdiv{
            font-family: Arkhip;
            position: absolute;
            z-index: 1;
            color:black;
            text-align: center;
            top:25%;
            left:25%;              
        }
        #textdiv h1{
            font-size: 100px;  
            color:black;  
        }
       
        @media only screen and (max-device-width:600px) and (min-device-width:300px){
            #textdiv h1{
                font-size: 25px;
            }
            #textdiv #form-css{
                width:100%;
                height:100%;
                padding:20px 10px 20px 10px;
            }
            #textdiv{
                top:5%;
            }
            
        } 
        /*---------------*/
        
        input[type=text]{
          background-color: transparent;
          border: none;
          border-bottom: 1px solid #9e9e9e;
          border-radius: 0;
          outline: none;
          height: 3rem;
          width: 100%;
          font-size: 2rem;
          margin: 0 0 15px 0;
          padding: 0;
          box-shadow: none;
          -webkit-box-sizing: content-box;
          -moz-box-sizing: content-box;
          box-sizing: content-box;
          transition: all .3s;
        }
        input[type=text]:focus:not([readonly]) {
              border-bottom: 1px solid #4285F4;
              box-shadow: 0 1px 0 0 #4285F4;
            }
            button:focus {
              outline: none;
              background-color: #b275d1;
            }
            .form-inline{
                background-color: rgba(0,0,0,0.6);
            }
        .inline li{
            display: inline-block;
            text-decoration: none;
        }
        .btn-custm{
            min-width:120px;
        }

	</style>
</head>
<body>
	
    <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

          <div class="overlay-content">
            <a class="arkhip" href="index.php">HomeDecor</a>
            <a href="Seller_Add.html">Add Sellers</a>
            <a href="showproducts.php">Show Products</a>
            <a href="additem.php">Add Items</a>
            <a href="#">Fetch Category</a>
          </div>
    </div>
    <nav class="nav navbar navbar-fixed-top">
        <font color="red"><span style="font-size:30px;cursor:pointer;margin-left:20px;" onclick="openNav()">&#9776;</span></font>  
    </nav>
        <script>
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }

        
        </script>

        <div class="bgvid">
                <div id="textdiv">
                    <h1>HomeDecor</h1>
                    
                </div>
                <video muted class="video-fluid" autoplay loop>
                    <source src="#" type="video/mp4" />
                    <source src="#" type="video/webm">
                </video>       
    	</div>
        
        
    	<script id="mytemplate" type="text/template"> 
                    <div class="col-md-3" > 
                        <figure>
                            <img alt="{{st_name}}" style="width:100%;height:100%;" src="./img/images/{{img}}">

                            <figcaption>
                                <h3>{{st_name}}</h3>

                                <p>hygine rate: {{hyg}}<br>
                                    phone : {{phne}}<br>
                                    cose : {{cost}}
                                </p>

                                <p><a href="viewmore.html?pid={{pid}}" target="_blank">Read More</a></p>
                            </figcaption>
                        </figure>
                    </div>                            
        </script>
    	<!--script type="text/javascript">
    	function submitForm(){
    		//alert("form submit");
    		deleteContent();    		
    		var txt=$('#searchcat').val();
	    		//console.log(txt);
	    		$.ajax({			//works good
	    			url:'cat-search.php',
	    			type:'GET',
	    			data:{action:txt},
	    			dataType:'json',
	    			success:function(arr){
	    				var len=arr.length;
	    				//console.log(len);
	    				for(var i=0;i<len;i++){
	    					var template = $("#mytemplate").html(); //declare and define template variable
							var data={
								pid:arr[i].p_id,
                                st_name:arr[i].stal_name,
                                img:arr[i].img,
                                desc:arr[i].desc,
                                phne:arr[i].phn,
                                cost:arr[i].cost,
                                hyg:arr[i].hygn
							};
							var html = Mustache.render(template, data);
							$('#other').append(html);
	    					//console.log(arr[i]);

	    				}
	    				/*for(var i=0;i<len;i++){
	    					putData(arr[i],i);
	    				}*/
	    				/*$.each(arr,function(key,arr){
	    					console.log(key,arr);
	    					putData(arr);
	    				});*/
	    				
	    			},
	    			error:function(arr){
	    				alert('No data available...');
	    			}
	    		});
	    		return false;
	    }

	    	function deleteContent(){
				$("div#other").html(""); // deleting existing data
			}

            function getdata(txt){
                alert(txt);
            }
			
    	</script-->
		

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <?php
                        $ftch=new Fetch();
                        $ftch->fetch_cat();
                    ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    

                </div>
            </div>
        </div>

    </div>

      <footer class="page-footer special-color-dark center-on-small-only">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">Here you can use rows and columns here to organize your footer content.<br>Contact:</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="footer-copyright text-center rgba-black-light">
                <div class="container-fluid">
                    <a href="#"> homedecor.com </a>
                </div>
            </div>
        </footer>
    
	<!--script type="text/javascript">
		document.addEventListener("load",submitForm());
	</script-->


</body>
</html>