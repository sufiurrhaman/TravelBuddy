function searchUser(){

	let name = document.getElementById('name').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', '../views/searchUser.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('table').innerHTML = this.responseText;	
		}
	}
}

function searchAdmin(){
	let name = document.getElementById('name').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', '../views/searchAdmin.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('table').innerHTML = this.responseText;	
		}
	}
}

function searchTransAdmin(){
	let name = document.getElementById('name').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', '../views/searchTransAdmin.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('table').innerHTML = this.responseText;	
		}
	}
}

function searchPBooking(){

	let name = document.getElementById('name').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', '../views/searchPBooking.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);


	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('pbooking').innerHTML = this.responseText;	
		}
	}
}

function searchTBooking(){

	let name = document.getElementById('name1').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', '../views/searchTBooking.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);


	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('tbooking').innerHTML = this.responseText;	
		}
	}
}

function searchSBooking(){

	let name = document.getElementById('name2').value;
	let xhttp= new XMLHttpRequest();

	//xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.open('POST', '../views/searchSBooking.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);


	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('sbooking').innerHTML = this.responseText;	
		}
	}
}

function verify(){

	let name = document.getElementById('name').value;
	let username = document.getElementById('username').value;
	let email = document.getElementById('email').value;
	let num = document.getElementById('num').value;
	let password = document.getElementById('password').value;
	let Cpassword = document.getElementById('Cpassword').value;
	

	let json = {
		'name' 	: name,
		'username' : username,
		'email'	: email,
		'num' : num,
		'password'	: password,
		'Cpassword'	: Cpassword
	}

	let myjson = JSON.stringify(json);

	
	let xhttp= new XMLHttpRequest();

	xhttp.open('POST', '../controller/regcheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+myjson);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('login').innerHTML = this.responseText;		
			
		}
	}
}

function verifyAdmin(){

	let name = document.getElementById('name').value;
	let username = document.getElementById('username').value;
	let email = document.getElementById('email').value;
	let num = document.getElementById('num').value;
	let password = document.getElementById('password').value;
	let Cpassword = document.getElementById('Cpassword').value;
	

	let json = {
		'name' 	: name,
		'username' : username,
		'email'	: email,
		'num' : num,
		'password'	: password,
		'Cpassword'	: Cpassword
	}

	let myjson = JSON.stringify(json);

	
	let xhttp= new XMLHttpRequest();

	xhttp.open('POST', '../controller/admincheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+myjson);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			 alert(this.responseText);
			document.getElementById('name').value = "";
			document.getElementById('username').value = "";
			document.getElementById('email').value = "";
			document.getElementById('num').value = "";
			document.getElementById('password').value = "";
			document.getElementById('Cpassword').value = "";		
			
		}
	}
}

function validateTAdmin(){
   
	let name = document.getElementById('name').value;
	let username = document.getElementById('username').value;
	let email = document.getElementById('email').value;
	let num = document.getElementById('num').value;
	let password = document.getElementById('password').value;
	let Cpassword = document.getElementById('Cpassword').value;
	
	let json = {
		'name' 	: name,
		'username' : username,
		'email'	: email,
		'num' : num,
		'password'	: password,
		'Cpassword'	: Cpassword
	}

	let myjson = JSON.stringify(json);

	
	let xhttp= new XMLHttpRequest();

	xhttp.open('POST', '../controller/transadmincheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+myjson);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			 alert(this.responseText);
			document.getElementById('name').value = "";
			document.getElementById('username').value = "";
			document.getElementById('email').value = "";
			document.getElementById('num').value = "";
			document.getElementById('password').value = "";
			document.getElementById('Cpassword').value = "";		
			
		}
	}
}