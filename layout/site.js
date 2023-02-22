//a simple function that triggers alert box
function hello(){
    alert("Welcome to my website");
}
//a simple funcion to add 2 numbers
function add(){
    document.write(5+6);
}


//display or like echo
//document.write
//windows.alert
//inner.html
//CONSOLE.LOG

//function to change the background color of the page

function changeColor(where,newColor){
  if (where == "background"){
    document.body.style.backgroundColor = newColor;

}
}
function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;    
}
function changeFcolor(){
    let fcolor=document.getElementById('fcolor').value;
    document.body.style.color=fcolor;
}
//java script validaiton
//crud

function crud(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<5){
        alert("First Name must have atleast 5 characters");
        return false;
    }

}

function crud1(){
    let lname=(document.form1.lname.value).trim();
    if(fname.length<5){
        alert("First Name must have atleast 5 characters");
        return false;
    }

}

function fnameVal(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length<5){
        alert("First Name must have atleast 5 characters");
        return false;
    }

}
