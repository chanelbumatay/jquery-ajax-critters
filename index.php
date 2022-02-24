<!doctype html>
<html>
<head>
   <meta name="robots" content="noindex,nofollow">
   <title>AJAX Pet Adoption Agency</title>
   <style>
       #myForm div{
        margin-bottom:2%;
        }
   </style>
   <script src="https://code.jquery.com/jquery-latest.js"></script> 
</head>


  
<body>
<h2>AJAX Pet Adoption Agency</h2>
<p>This page uses AJAX to choose images and answers from the form. You'll get a new pet once the form is completed.</p>
<div id="output">
<form id="myForm" action="" method="get">

        
   <div id="pet_feels">
       <h3>Feels</h3>
       <p>Please choose how you would like your pet to feel:</p>
       <input type="radio" name="feels" value="fluffy" required="required">fluffy <br />
       <input type="radio" name="feels" value="scaly">scaly <br />
   </div>
  
   <div id="pet_likes">
       <h3>Likes</h3>
       <p>Please tell us what your pet will like:</p>
       <input type="radio" name="likes" value="petted" required="required">to be petted <br />
       <input type="radio" name="likes" value="ridden">to be ridden <br />
   </div>
  
    <div id="pet_eats">
       <h3>Eats</h3>
       <p>Please tell us what your pet likes to eat:</p>
       <input type="radio" name="eats" value="carrots" required="required">carrots <br />
       <input type="radio" name="eats" value="pets">other people's pets <br />
   </div>

    <div id="pet_name">
       <h3>Pet Name</h3>
       <p>Type your pet's name:</p>
       <input type="text" id="name" name="name" value="submit it!"/>
   </div>

  
   <div><input type="submit" value="text" /></div>
</form>
</div>
  
<p><a href="index.php">RESET</a></p>
<script>



		function titleCase(str) {
				str = str.toLowerCase().split(' ');
				for (var i = 0; i < str.length; i++) {
					str[i] = str[i].charAt(0).toUpperCase() + str[i].slice(1); 
				}
				return str.join(' ');
		}
    $("document").ready(function(){
        
        // Hide likes and eats
        $('#pet_likes').hide();
        $('#pet_eats').hide();
				$('#pet_name').hide();
        // on click of feels, likes is shown
        $('#pet_feels').click(function(){
           $('#pet_likes').slideDown(200);
        });

        // on click of likes, eats is shown
        $('#pet_likes').click(function(){
           $('#pet_eats').slideDown(200);
        });

				$('#pet_likes').click(function(){
           $('#pet_eats').slideDown(200);
        });

					$('#pet_eats').click(function(){
           $('#pet_name').slideDown(200);
        });
				
        $('#myForm').submit(function(e){
            e.preventDefault();//no need to submit as you'll be doing AJAX on this page
            let feels = $("input[name=feels]:checked").val();
            let likes = $("input[name=likes]:checked").val();
            let eats = $("input[name=eats]:checked").val();
						let name = $("input[name=name]").val();
						name = titleCase(name);
          
						let pet = "";
						//alert(pet);
            

            if(feels=="fluffy" && likes=="petted" && eats=="carrots"){
              pet = 'rabbit';
            }
						if(feels=="fluffy" && likes=="petted" && eats=="other people's pets"){
							pet = 'bermese';
						}
						if(feels=="fluffy" && likes=="ridden" && eats=="carrots"){
							pet = 'pig';
						}
						if(feels=="fluffy" && likes=="ridden" && eats=="other people's pets"){
							pet = 'dane';
						}
						if(feels=="scaly" && likes=="petted" && eats=="carrots"){
              pet = 'bird';
            }
						
						 if(feels=="scaly" && likes=="petted" && eats=="other people's pets"){
              pet = 'hedgehog';
            }
						if(feels=="scaly" && likes=="ridden" && eats=="carrots"){
              pet = 'bulldog';
            }
						 if(feels=="scaly" && likes=="ridden" && eats=="other people's pets"){
              pet = 'velociraptor';
            }
            

            // where we will store all data to show
            var output = '';
            output += `<p> Congrats! You have a new pet ${pet} named ${name}. ${name} is ${feels}, they like to be ${likes} and their favorite food to eat is ${eats}.  </p>`;
       
						//Get server side data using AJAX
						$.get( "includes/get_pet.php", { critter: pet } )
 						.done(function( data ) {
  				  //alert( "Data Loaded: " + data );
						 $('#output').html(data + output);
 						})

              
						 .fail(function(xhr, status, error) {
               //Ajax request failed.
               var errorMessage = xhr.status + ': ' + xhr.statusText
               alert('Error - ' + errorMessage);
           });

          
           
          
          

        });

    });

   
    
   </script>
</body>
</html>

