function resetInput(){
    var clear_inputs=confirm("Are you sure you would like to clear the entered text?");
    if(clear_inputs){
        document.getElementById("userInput").value='';
        document.getElementById("userTitle").value='';
    }
}

function checkEmpty(event){
    if(document.getElementById("userInput").value==''||document.getElementById("userTitle").value==''){
        event.preventDefault();
        window.alert("You have not filled in all the required fields.");
        if(document.getElementById("userInput").value==''){
            if(document.getElementById("userTitle").value==''){
                document.getElementById("userInput").style.border = "solid #FF0000";
                document.getElementById("userTitle").style.border = "solid #FF0000";
            }
        }
        if (document.getElementById("userTitle").value==''){
            document.getElementById("userTitle").style.border = "solid #FF0000";
        }
        else if(document.getElementById("userInput").value==''){
            document.getElementById("userInput").style.border = "solid #FF0000";
        }
        if(document.getElementById("userInput").value.length>0){
            document.getElementById("userInput").style.border = "solid #FFFFFF";
        }
        if(document.getElementById("userTitle").value.length>0){
            document.getElementById("userTitle").style.border = "solid #FFFFFF";
        }
    }
}
