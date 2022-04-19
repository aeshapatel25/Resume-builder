function addNewWEField() {
    //console.log("Adding new field");
    let newNode = document.createElement('textarea');
    newNode.classList.add("form-control");
    newNode.classList.add("weField");
    newNode.classList.add('mt-2');
    newNode.setAttribute("rows",3);
    newNode.setAttribute('placeholder', 'Enter here');
    let weOb = document.getElementById('we');
    let weAddButtonOb =  document.getElementById('weAddButton');
    
    weOb.insertBefore(newNode ,weAddButtonOb);
}

function addNewAQField() {
    //console.log("Adding new field");

    let newNode = document.createElement('textarea');
    newNode.classList.add("form-control");
    newNode.classList.add("eqField");
    newNode.classList.add('mt-2');
    newNode.setAttribute("rows",3);
    newNode.setAttribute('placeholder', 'Enter here');
    let aqOb = document.getElementById('aq');
    let aqAddButtonOb =  document.getElementById('aqAddButton');
    
    aqOb.insertBefore(newNode , aqAddButtonOb);
}

function addNewpqField() {
    //console.log("Adding new field");

    let newNode = document.createElement('textarea');
    newNode.classList.add("form-control");
    newNode.classList.add("rqField");
    newNode.classList.add('mt-2');
    newNode.setAttribute("rows",3);
    newNode.setAttribute('placeholder', 'Enter here');
    let pqOb = document.getElementById('pq');
    let pqAddButtonOb =  document.getElementById('pqAddButton');
    
    pqOb.insertBefore(newNode , pqAddButtonOb);
}

function generateCV(){
    let nameField = document.querySelector('#nameField').value;
    let nameT = document.getElementById("nameT");
    nameT.innerHTML = nameField; 

   document.getElementById('nameT1').innerHTML = nameField;

   document.getElementById("contactT").innerHTML = document.getElementById("contactField").value;
   
   document.getElementById("addressT").innerHTML = document.getElementById("addressField").value;
    
   document.getElementById("insta").innerHTML = document.getElementById("fbfield").value;

   document.getElementById("linkedln").innerHTML = document.getElementById("lnfield").value;

   document.getElementById("twitter").innerHTML = document.getElementById("Twfield").value;

   document.getElementById("github").innerHTML = document.getElementById("GHfield").value;

   document.getElementById("objectiveT").innerHTML = document.getElementById("objectiveField").value;

   let wes= document.getElementsByClassName("weField");

   let str="";

   for(let e of wes) {
    str = str + `<li> ${e.value} </li>`;
   }
   
   document.getElementById("weT").innerHTML = str;

   let aqs = document.getElementsByClassName("eqField");

   let str1="";

   for(let e of aqs) {
       str1 += `<li> ${e.value} </li>`;
   }

   document.getElementById("aqT").innerHTML = str1;

   let pqs = document.getElementsByClassName("rqField");

   let str2="";

   for(let r of pqs) {
       str2 += `<li> ${r.value} </li>`;
   }

   document.getElementById("pqT").innerHTML = str2;
   let file = document.getElementById("imgField").files[0];
   console.log(file);

   let reader = new FileReader();

   reader.readAsDataURL(file);
   console.log(reader.result);

   reader.onloadend = function () {
       document.getElementById("imgTemplate").src = reader.result;
};
  
   document.getElementById('cv-form').style.display ='none';
   document.getElementById('cv-template').style.display='block';
}

function printCV(){
    window.print();
}












