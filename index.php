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
<p>Below is a starter page for the AJAX Pet Adoption Agency assignment.</p>
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

  
   <div><input type="submit" value="submit it!" /></div>
</form>
</div>
  
<p><a href="index.php">RESET</a></p>
<script>


  
    $("document").ready(function(){
        
        //hide likes and eats 
        $('#pet_likes').hide();
        $('#pet_eats').hide();
        $('#pet_name').hide();

      
        //on click of feels, likes is shown 
        $('#pet_feels').click(function(){
          $('#pet_likes').slideDown(200);
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
            let pet = "";

                   




          

            //135
            if(feels == "fluffy" && likes == "petted" && eats == "carrots"){
              pet = "rabbit";

              output += `<p>Your pet's name is ${titleName}`;
              output += `<p>Your pet is a Bulldog</p>`;
              output += `<p>Your pet feels ${feels}</p>`;
              output += `<p>Your pet likes to be ${likes}</p>`;
              output += `<p>Your pet likes to eat ${eats}</p>`;
            }

                      //136
            if(feels == "fluffy" && likes == "petted" && eats == "pets"){
              pet = "pom";

              output += `<p>Your pet's name is ${titleName}`;
              output += `<p>Your pet is a Pom</p>`;
              output += `<p>Your pet feels ${feels}</p>`;
              output += `<p>Your pet likes to be ${likes}</p>`;
              output += `<p>Your pet likes to eat ${eats}</p>`;
            }

                      //145
            if(feels == "fluffy" && likes == "ridden" && eats == "carrots"){
              pet = "lab";
              
              output += `<p>Your pet's name is ${titleName}`;
              output += `<p>Your pet is a Lab</p>`;
              output += `<p>Your pet feels ${feels}</p>`;
              output += `<p>Your pet likes to be ${likes}</p>`;
              output += `<p>Your pet likes to eat ${eats}</p>`;
            }
          
            //146
            if(feels == "fluffy" && likes == "ridden" && eats == "pets"){
              pet = "hedgehog";
              
              output += `<p>Your pet's name is ${titleName}`;
              output += `<p>Your pet is a Hedgehog/p>`;
              output += `<p>Your pet feels ${feels}</p>`;
              output += `<p>Your pet likes to be ${likes}</p>`;
              output += `<p>Your pet likes to eat ${eats}</p>`;
            }

                      //235
            if(feels == "scaly" && likes == "petted" && eats == "carrots"){
              pet = "dane";
              
              output += `<p>Your pet's name is ${titleName}`;
              output += `<p>Your pet is a Dane</p>`;
              output += `<p>Your pet feels ${feels}</p>`;
              output += `<p>Your pet likes to be ${likes}</p>`;
              output += `<p>Your pet likes to eat ${eats}</p>`;
            }

                      //236
            if(feels == "scaly" && likes == "petted" && eats == "pets"){
              pet = "pig";
               output += `<p>Your pet's name is ${titleName}`;
              output += `<p>Your pet is a Pig</p>`;
              output += `<p>Your pet feels ${feels}</p>`;
              output += `<p>Your pet likes to be ${likes}</p>`;
              output += `<p>Your pet likes to eat ${eats}</p>`;
            }

                      //245
            if(feels == "scaly" && likes == "ridden" && eats == "carrots"){
              pet = "bad-dog";
              
              output += `<p>Your pet's name is ${titleName}`;
              output += `<p>Your pet is a Bad Dog</p>`;
              output += `<p>Your pet feels ${feels}</p>`;
              output += `<p>Your pet likes to be ${likes}</p>`;
              output += `<p>Your pet likes to eat ${eats}</p>`;
            }
          
            //246
            if(feels == "scaly" && likes == "ridden" && eats == "pets"){
              pet = "velociraptor";
                   
                       }


           //Where data will be stored
            var output = "";
            output += `<p> Congrats! You have a new pet ${pet} named ${name}.</p>`;
            output += `<p> Your pet feels ${feels}</p>`;
            output += `<p> Your pet likes to be ${likes}</p>`;
            output += `<p> Your pet likes eat ${eats}</p>`;

          
           //135
            if(feels == "fluffy" && likes == "petted" && eats == "carrots"){
              pet = "rabbit";
            }

                      //136
            if(feels == "fluffy" && likes == "petted" && eats == "pets"){
              pet = "pom";
            }

                      //145
            if(feels == "fluffy" && likes == "ridden" && eats == "carrots"){
              pet = "lab";
            }
          
            //146
            if(feels == "fluffy" && likes == "ridden" && eats == "pets"){
              pet = "hedgehog";
            }

                      //235
            if(feels == "scaly" && likes == "petted" && eats == "carrots"){
              pet = "dane";
            }

                      //236
            if(feels == "scaly" && likes == "petted" && eats == "pets"){
              pet = "pig";
            }

                      //245
            if(feels == "scaly" && likes == "ridden" && eats == "carrots"){
              pet = "bad-dog";
            }
          
            //246
            if(feels == "scaly" && likes == "ridden" && eats == "pets"){
              pet = "velociraptor";
            }
            output += `<p>Your pet is a ${pet}.</p>`;
            output += `<p>Your pet feels ${feels}.</p>`;
            output += `<p>Your pet likes to be ${likes}.</p>`;
            output += `<p>Your pet likes to eat ${eats}.</p>`;
            //alert(feels);

            $.get( "includes/get_pet.php", { critter: pet} )
            .done (function( data ){

              //output submitted info and replace form
            $('#output').html(data + output);
              
              //alert( "Data Loaded: " + data );
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