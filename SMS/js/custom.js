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