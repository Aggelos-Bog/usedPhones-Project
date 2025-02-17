function isValidDate(dateObject) {
  return dateObject instanceof Date && !isNaN(dateObject);
}

function looks_like_email(str) {
    var result=true; 

    var ampersatPos = str.indexOf("@");    
    var dotPos = str.indexOf(".");         
    var dotPosAfterAmpersat = str.indexOf(".", ampersatPos); 
    
    if (ampersatPos<=0) result = false; 
    
    if (dotPos<0) result = false; 
    
    if (dotPosAfterAmpersat-ampersatPos==1) result = false; 
    
    if ( str.indexOf(".")==0  ||  str.lastIndexOf(".")==str.length-1 ) result = false; 
    
    return result;
  }

function validate_form() {
var result=true;

// username

var username=document.querySelector(".username").value;

var illegalChars = new RegExp("/\W/");

if (illegalChars.test(username) || username.length<5 || username.length>20) {
  result=false;
  alert("Στο username απαιτούνται 8 ως 20 \n λατινικά γράμματα, αριθμοί ή underscore!");
}

// password

var password=document.querySelector(".password").value;
  if (password.length<8 || password.length>20) {

    result=false;

	  alert("Το password να είναι 8 ως 20 χαρακτήρες!");
  } 

// email

var email=document.querySelector(".email").value;
if ( !looks_like_email(email) ) {   

  result=false;

  alert("Το email δεν είναι αποδεκτό!");
} 

return result; 
}


function validate_adform() {
  var result=true;
  
  // brand
  
  var brand=document.querySelector(".brand").value;

  var illegalChars = new RegExp("/\W/");

  if(brand.length < 2 || illegalChars.test(username)){
    result=false;

    alert("Το brand δεν είναι αποδεκτό!");
  }

  // model
  
  var model=document.querySelector(".model").value;

  if(model.length < 2){
    result=false;

    alert("Το model δεν είναι αποδεκτό!");
  }

  // Release Date

  var releaseDate=document.querySelector(".releaseDate").value;
 
  d1 = new Date("2005-01-01");  
  d2 = new Date( Date.now() );  
  d=new Date(releaseDate);        
 
  if ( (!isValidDate(d))  ||   ((d<d1) || (d>d2))  ){   
    result=false;
    alert("Μη αποδεκτό Release Date! \nΠρέπει να είναι μεταξύ 1-Ιαν-2005 και Σήμερα");
  } 
  
  // Nodes

  var nodes=document.getElementById("nodes").selectedIndex;
  if (incomeIndex<1) {   
    result=false;
    alert("Δεν επιλέξατε nodes!");
  } 

  //RAM

  var RAM=document.getElementById("RAM").selectedIndex;
  if (incomeIndex<1) {   
    result=false;
    alert("Δεν επιλέξατε RAM!");
  } 

  //OS

  var OS=document.getElementById("OS").selectedIndex;
  if (incomeIndex<1) {   
    result=false;
    alert("Δεν επιλέξατε OS!");
  } 

  // Storage Size

  var storageSize=document.querySelector(".storageSize").value;
  // Η συνάρτηση isNaN(X) επιστρέφει true αν ο Χ ΔΕΝ είναι αριθμός, αλλιώς false
  if (storageSize.length < 1 || isNaN(storageSize)) {   
    result=false;
    alert("Μη αποδεκτό Storage Size!");
  } 

  //Colour

  var colour=document.querySelector(".colour").value;
  
  if (colour.length < 1 ) {   
    result=false;
    alert("Μη αποδεκτό Colour!");
  } 

  //Price

  var price=document.querySelector(".price").value;
  // Η συνάρτηση isNaN(X) επιστρέφει true αν ο Χ ΔΕΝ είναι αριθμός, αλλιώς false
  if (price.length < 1 || isNaN(price)) {   
    result=false;
    alert("Μη αποδεκτό Price!");
  } 

  //Ad Release

  var adRelease=document.querySelector(".adRelease").value;
  
  d1 = new Date( Date.now() );  
  d=new Date(adRelease);        
 
  if ( (!isValidDate(d)) || d!=d1) {   
    result=false;
    alert("Μη αποδεκτό Ad Release!");
  } 
  

  return result; 
  }