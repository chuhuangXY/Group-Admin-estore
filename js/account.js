document.getElementById("contactform").addEventListener("submit", function(event){
    if (!validateForm()) {  // if the validation of the form fails, we will not submit the form.                             
        event.preventDefault(); // prevents the form from submitting.
    }
    else {
        if (!confirm("Confirm adding of product?")) { // if form not confirmed to submit , we will not submit the form         
          event.preventDefault(); // prevents the form from submitting.
        }
      }
    // if we get to this line, the form will be ok to be submitted to server
});

function validateForm(){
    var formOK = true;
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;
    var quantity = document.getElementById("quantity").value;


    clearErrorMsgs();

    // email field validations
    if (name.length==0){
        formOK=false;
        showError(document.getElementById("error_msg"),"Please enter a product.");
    }
    else if (price.length==0){
        formOK=false;
        showError(document.getElementById("error_msg"),"Please enter product price.");
    }
    else if (quantity.length==0){
        formOK=false;
        showError(document.getElementById("error_msg"),"Please enter product quantity.");
    }
    return formOK;
}

function clearErrorMsgs(){    
    document.getElementById("error_msg").innerHTML="";
    document.getElementById("error_msg").style.display="none";
}

function showError(element,msg) {
    element.style.display="block"; // set the element to be visible
    element.innerHTML=msg; // set the error message in the HTML element
}