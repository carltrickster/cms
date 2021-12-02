<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

        <!-- Styles -->
<style>
.header {
  background-image: linear-gradient(to bottom right, #33FF98, #41A9A5);
  padding: 8px;
  text-align: left;
  width: 1500px;
  margin: auto;

}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;   
    font-family:Arial, Helvetica, sans-serif
}

.container{
    border: gray 0.1px solid;
    margin: 10px 20%;
    padding: 10px;
    text-align: center;
}

p{
    font-size: 10px;
}

.title{
    color:rgb(84, 201, 162); 
    font-size: 2em;
    font-weight: 200;   
    text-align: left;
}
.text{
    margin-top: 20px;
    font-size: 10px;
    font-weight: bold;
    text-align: left;
}
.type{
    margin: 20px 0;
    font-size: 10px;
    font-weight: bold;
    color:rgb(84, 201, 162);
    text-align: left;
}
a{
    text-decoration: none;
    color:palevioletred;
}
button{
    margin-top: 20px;
    background-color:rgb(84, 201, 162);
    width: 100%;
    border-style: none;
    padding: 5px 0;
    font-size: 10px;
    font-weight: 600;
    cursor: pointer;
    border-radius: 2px;
}
h1 {
  
  color: #F0FFFF;
 
}
button:hover{
    background-color:rgb(68, 175, 139);
    width: 100%;
    border-style: none;
    padding: 5px 0;
    font-size: 10px;
    font-weight: 600;
}
input {
    width: 100%;
    color: gray;
    background: rgb(214, 214, 214);
    border:gray solid 0.5px;
    border-radius: 2px; 
}
.row{
    display: flex;
    justify-content: space-between;
}
.row-inside{
    flex-basis: 48%;
    text-align: left;
}
select{
    margin: 0;
    width: 100%;
    color: gray;
    border-radius: 2px;
}


</style>




</head>

<body>
<div class="header">

<h1>Account Information</h1>

        
        
</div>
<section class="booking">
        <div class="container">
            <h1 class="title">BOOKING DETAILS</h1> 
            <p class="text">Fill up the need information to continue</p> 

            <p class="type">Appointment Date</p>
            <input type="date" id="checkin-date" name="checkin" required>
        
            <p class="text">Morning</p>
            <br><br>
                
            <p class="text">Afternoon</p>
            <br><br><br>
            <p class="type">Service Type</p>  
            <div class="row">
                   
                <div class="row-inside">

                    <select>
                        <option value="">Choose Here</option>
                    </select>
                </div>
                <div class="row-inside">
                    <p class="text">Please Download And Fill Up this File</p>
                    <p>Health Form<a href="#">-Click Here</a></p>
                    <p>Home Service Protocol Form<a href="#">-Click Here</a></p>
                </div>
               
            </div>           <button>NEXT</button>      
        </div>

    </section>
    <section class="footer">

    </section>
</body>
</html>