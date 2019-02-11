function submit() {
   var myObj, myJSON, text, obj;
   var msg = document.getElementById('message').value;
   var name = document.getElementById('name').value;
   var email = document.getElementById('mail').value;

   myObj = { name: `${name}`, email: `${mail}` message: `${msg}`}
   myJSON = JSON.stringify(myObj);
   localStorage.setItem("test",myJSON)
   //console.log(msg);
}
