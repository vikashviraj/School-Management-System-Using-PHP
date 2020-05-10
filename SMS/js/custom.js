function showMenu1(){

    if(document.getElementById("studentsubmenu").style.display == "none"){
        document.getElementById("studentsubmenu").style.display = "block";
        document.getElementById("teachersubmenu").style.display = "none";
        document.getElementById("staffsubmenu").style.display = "none";
    }else{
        document.getElementById("studentsubmenu").style.display = "none";
    }
}

function showMenu2(){

    if(document.getElementById("teachersubmenu").style.display == "none"){
        document.getElementById("teachersubmenu").style.display = "block";
        document.getElementById("studentsubmenu").style.display = "none";
        document.getElementById("staffsubmenu").style.display = "none";
    }else{
        document.getElementById("teachersubmenu").style.display = "none";
    }
}

function showMenu3(){

    if(document.getElementById("staffsubmenu").style.display == "none"){
        document.getElementById("staffsubmenu").style.display = "block";
        document.getElementById("studentsubmenu").style.display = "none";
        document.getElementById("teachersubmenu").style.display = "none";
    }else{
        document.getElementById("staffsubmenu").style.display = "none";
    }
}