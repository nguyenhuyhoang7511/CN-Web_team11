
// var curDate = new Date();
// const weekday = ["Chủ nhật","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7"];
// const d = new Date()
// let day = weekday[d.getDay()];
// // Ngày hiện tại
// var curDay = curDate.getDate();
                 
// // Tháng hiện tại
// var curMonth = curDate.getMonth()+1 ;
                      
// // Năm hiện tại
// var curYear = curDate.getFullYear();
                   
// // Gán vào thẻ HTML
// document.getElementById('current-time').innerHTML =day + ", " + curDay + "/" + curMonth + "/" + curYear;


// CODE W3
// function myFunction(id) {
//     var x = document.getElementById(id);
//     if (x.className.indexOf("w3-show") == -1) {
//       x.className += " w3-show";
//       x.previousElementSibling.className = 
//       x.previousElementSibling.className.replace("w3-black", "w3-red");
//     } else { 
//       x.className = x.className.replace(" w3-show", "");
//       x.previousElementSibling.className = 
//       x.previousElementSibling.className.replace("w3-red", "w3-black");
//     }
//   }

// let Show_btn = document.getElementById('status_show_btn'); 

// let btn_hienthi = document.getElementById('btn_hienthi');


// do {
//     if(Show_btn.style.display = "none")
// {
//     btn_hienthi.addEventListener('click',fn_show_btn);
// }
// else
// {
//     btn_hienthi.addEventListener('click',fn_hide_btn);
// }
// } while (Show_btn.style.display != "none");
    
// function fn_show_btn(){
//     document.getElementById("status_show_btn").style.display = "flex";
// }

// function fn_hide_btn(){
//     document.getElementById("status_show_btn").style.display = "none";   
// }




// START CHỨC NĂNG REACTION
let Changes = document.getElementById('Changes');
// let Changes_img_icon = document.getElementById('Changes_img_icon');
// icon like
// let Changes = document.getElementById('Changes');
Changes.addEventListener('click',fct_Changes_like);
function fct_Changes_like(){
    Changes.innerHTML = "like";
    Changes_img_icon.src='img_Interactive/img2_like.png';
}

// icon_haha
let click_forChanges_haha = document.getElementById('click_forChanges_haha');
click_forChanges_haha.addEventListener('click',fct_Changes_haha);
function fct_Changes_haha(){
    // document.getElementById('Changes_img_icon').src='img_Interactive/img_like.png';
    Changes.innerHTML = "Haha";
    Changes_img_icon.src='img_Interactive/img_like.png';
}

// icon love
let click_forChanges_love = document.getElementById('click_forChanges_love');
click_forChanges_love.addEventListener('click',fct_Changes_love);
function fct_Changes_love(){
    Changes.innerHTML = "Love";
    Changes_img_icon.src='img_Interactive/img_tim.PNG';
}

// icon lolo
let click_forChanges_lolo = document.getElementById('click_forChanges_lolo');
click_forChanges_lolo.addEventListener('click',fct_Changes_lolo);
function fct_Changes_lolo(){
    Changes.innerHTML = "Lolo";
    Changes_img_icon.src='img_Interactive/img_haha.png';
    
}

// icon Surprise
let click_forChanges_Surprise = document.getElementById('click_forChanges_Surprise');
click_forChanges_Surprise.addEventListener('click',fct_Changes_Surprise);
function fct_Changes_Surprise(){
    Changes.innerHTML = "Surprise";
    Changes_img_icon.src='img_Interactive/img_wow.png';

}

// icon Sad
let click_forChanges_Sad = document.getElementById('click_forChanges_Sad');
click_forChanges_Sad.addEventListener('click',fct_Changes_Sad);
function fct_Changes_Sad(){
    Changes.innerHTML = "Sad";
    Changes_img_icon.src='img_Interactive/img_sad.png';

}

// icon Angry
let click_forChanges_Angry = document.getElementById('click_forChanges_Angry');
click_forChanges_Angry.addEventListener('click',fct_Changes_Angry);
function fct_Changes_Angry(){
    Changes.innerHTML = "Angry";
    Changes_img_icon.src='img_Interactive/img_phanno.png';

}

// END CHỨC NĂNG REACTION




