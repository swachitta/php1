<html>
<head>
<title>Form</title>
<style text="stylesheet">
    div{
        margin-left: 50px;
    }
    select{
        position: relative;
        margin-left: 20%;
    }
    input{
        position: relative;
        margin-left: 20%;
    }label{
        position: absolute;
    }
</style>
</head>
<body>
	<form action="table.php" method="post">
    <span><b>Personal Information</b></span>
    <div>
        <label for=fname> First Name: </label>
        <input type="text" id="fname" name="fname"/><br><br>
        <label for=lname> Last Name: </label>
        <input type="text" id="lname" name="lname"/>
        <br><br>
        <label for=dob> Date of Birth: </label>
        <input type="date" id="dob" name="dob"/><br><br>
        <label for=gender>Gender: </label>
        <select id="gender" name="gender">
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
    </div><br>
    <span><b>Account Information</b></span>
    <div>
        <label for=email>Email: </label>
        <input type="email" placeholder="example@example.com" id="email" name="email"><br><br>
        <label for=emailConf>Re-type Email: </label>
        <input type="email" placeholder="example@example.com" id="emailConf"><br><br>
        <label for=password>Password: </label>
        <input type="password" placeholder="password" id="password" name="password"><br>
        <label id="passwrong"></label><br><br>
        <label for=question>Security Question: </label>
        <select id="question" name="question">
            <option>Choose a Security Question</option>
            <option>1. What is your Name</option>
            <option>2. What is your Favorite Food</option>
        </select><br><br>
        <label for=answer>Security Answer: </label>
        <input type="text" id="answer" name="answer">
    </div><br>
    <span><b>Contact Information</b></span><br><br>
    <div>
        <label for=address> Address: </label>
        <input type="text" id="address" name="address" /><br><br>
        <label for=city> City: </label>
        <input type="text" id="city" name="city"/><br><br>
        <label for=state>State: </label>
        <select id="state" name="state">
            <option>Choose a state</option>
            <option>State 1</option>
            <option>State 2</option>
            <option>State 3</option>
        </select><br><br>
        <label for=zip>Zip Code: </label>
        <input type="number" id="zip" name="zip"><br><br>
        <label for=contact>Phone_no: </label>
        <input type="number" id="contact" name="contact">
        <select>
            <option>Mobile</option>
            <option>Land-Line</option>
        </select>
        <br><label id="phnowrong"></label>
    </div>
    <div>
    <br><br>
    <input type="submit" onclick=verify()>
    </div>
</form>
</body>
<script type = "text/javascript">
var password=document.getElementById("password").value;
var passwrong=document.getElementById("passwrong");
function verify(){
    console.log("verify");
    //console.log(document.getElementById("password").value.length);
    numberCheck();
    passCheck();
    
}
function passCheck(){
    for(var i=0;i<document.getElementById("password").value.length;i++){
        console.log(Number.isInteger(document.getElementById("password").value[i]));
        if(Number.isInteger(parseInt(document.getElementById("password").value[i]))==true){
            document.getElementById("passwrong").textContent="";
            break;   
        }else{
            document.getElementById("passwrong").textContent=" Please Type an integer";
        }
    if(document.getElementById("password").value.length<8){
        console.log(document.getElementById("password").value);
        document.getElementById("password").value=null;
        document.getElementById("passwrong").textContent+=" Minimum length of password=8";
        }       
    }
}
function numberCheck(){
    console.log(document.getElementById("contact").value);
    if(document.getElementById("contact").value.length==0){
        document.getElementById("phnowrong").textContent=" *Invalid Phone Number"; 
    }else{
        document.getElementById("phnowrong").textContent="";
    }
}
</script>
</html>