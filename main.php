<link rel="stylesheet" href="">
<style>
  
.button {
    border: none;
    color: white;
    padding: 20px 34px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
  }
  
  .button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #221b4b;
  }
  
  .button1:hover {
    background-color:  #221b4b;
    color: white;
  }
  @import url('https://fonts.googleapis.com/css?family=Roboto');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Roboto', sans-serif;
}

body{
  background: url('jiit.jpg') no-repeat top center;
  background-size: cover;
  height: 100vh;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  max-width: 450px;
  background: rgba(0,0,0,0.8);
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}
h1 {
  position: relative;
  color: white; /* White text color for contrast */
  margin: 90px auto; /* Center the heading horizontally */
  font-size: 80px;
  text-align: center;
  font-weight: bold; /* Make the text bold */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add a subtle shadow for depth */
}



  </style>
<h1> WELCOME TO VOODLE </h1>
<div class="wrapper">
    <td><a href="STUDENT_LOGIN.php" ><button class="button button1">Student</button></a></td>
    <td><a href="STAFF.php" ><button class="button button1">Faculty</button></a></td>
    <td><a href="ADMIN_LOGIN.php" ><button class="button button1">Admin</button></a></td>
  </div>