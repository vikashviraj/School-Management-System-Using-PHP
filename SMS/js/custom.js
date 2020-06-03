function showMenu1(){

    if(document.getElementById("studentsubmenu").style.display == "none"){
        document.getElementById("studentsubmenu").style.display = "block";
        document.getElementById("stddropicon").className = "fa fa-caret-down";
        document.getElementById("teachersubmenu").style.display = "none";
        document.getElementById("teadropicon").className = "fa fa-caret-right";
        document.getElementById("staffsubmenu").style.display = "none";
        document.getElementById("stafdropicon").className = "fa fa-caret-right";
    }else{
        document.getElementById("studentsubmenu").style.display = "none";
        document.getElementById("stddropicon").className = "fa fa-caret-right";
    }
}
function formatAadhaar() {
    var Aadhaar = document.getElementById("documentno");
    var len = Aadhaar.value.length;
    var sp = " ";
    if(len == 4 || len == 9){
        Aadhaar.value = Aadhaar.value.concat(sp);
    }
}
function clearAadhaar(){
    document.getElementById("documentno").value = "";
}
function ShowImage(){
    var upload = document.getElementById("upload_image");
    var url = URL.createObjectURL(upload.files[0]);
    var image = document.getElementById("student_image");
    image.src = url;
    image.style.display = "block";
}

function ShowDocument(){
    var upload = document.getElementById("upload_document");
    var url = URL.createObjectURL(upload.files[0]);
    var image = document.getElementById("student_document");
    image.src = url;
    image.style.display = "block";
}

function showMenu2(){

    if(document.getElementById("teachersubmenu").style.display == "none"){
        document.getElementById("teachersubmenu").style.display = "block";
        document.getElementById("teadropicon").className = "fa fa-caret-down";
        document.getElementById("studentsubmenu").style.display = "none";
        document.getElementById("stddropicon").className = "fa fa-caret-right";
        document.getElementById("staffsubmenu").style.display = "none";
        document.getElementById("stafdropicon").className = "fa fa-caret-right";
    }else{
        document.getElementById("teachersubmenu").style.display = "none";
        document.getElementById("teadropicon").className = "fa fa-caret-right";
    }
}

function showMenu3(){

    if(document.getElementById("staffsubmenu").style.display == "none"){
        document.getElementById("staffsubmenu").style.display = "block";
        document.getElementById("stafdropicon").className = "fa fa-caret-down";
        document.getElementById("studentsubmenu").style.display = "none";
        document.getElementById("stddropicon").className = "fa fa-caret-right";
        document.getElementById("teachersubmenu").style.display = "none";
        document.getElementById("teadropicon").className = "fa fa-caret-right";
    }else{
        document.getElementById("staffsubmenu").style.display = "none";
        document.getElementById("stafdropicon").className = "fa fa-caret-right";
    }
}

function validateForm(){
    var documentno = document.getElementById("documentno");
    var pincode = document.getElementById("pincode");
    var phone1 = document.getElementById("phone1");
    var phone2 = document.getElementById("phone2");

    $check = true;

    if(documentno.value != ""){
       var len = documentno.value.length;
        if(len != 14){
            document.getElementById("errorAadhaar").style.display = "block";
            $check = false;
        } else{
            document.getElementById("errorAadhaar").style.display = "none";
        }
        
    }

    if(pincode.value != ""){
        var len = pincode.value.length;
        if(len != 6){
            document.getElementById("errorPincode").style.display = "block";
            $check = false;
        }else{
            document.getElementById("errorPincode").style.display = "none";
        }
    }

    if(phone1.value != ""){
        var len = phone1.value.length;
        if(len != 10){
            document.getElementById("errorPhone1").style.display = "block";
            $check = false;
        }else{
            document.getElementById("errorPhone1").style.display = "none";
        }
    }

    if(phone2.value != ""){
       var len = phone2.value.length;
        if(len != 10){
            document.getElementById("errorPhone2").style.display = "block";
            $check = false;
        }else{
            document.getElementById("errorPhone2").style.display = "none";
        } 
    }

    return $check;
}