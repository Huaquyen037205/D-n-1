let hour = 4; // dem nguoc mot dot sale la 4 tieng
let min = 0;
let sec = 0;
let countDown = setInterval(
    function () {
        // xu ly dem nguoc
        sec--;
        if (sec < 0) {
            sec = 59;
            min--;
            if (min < 0) {
                min = 59;
                hour--;
                if (hour == 0) {
                    hour = 4;
                    min = sec = 0; // dem nguoc mot dot sale la 4 tieng
                }
            }
        }
        // hien thi dem nguoc
        if (sec < 10) {
            document.querySelector(".count-down-cell > .sec").innerText = "0" + sec;
        } else {
            document.querySelector(".count-down-cell > .sec").innerText = sec;
        }
        if (min < 10) {
            document.querySelector(".count-down-cell > .min").innerText = "0" + min;
        } else {
            document.querySelector(".count-down-cell > .min").innerText = min;
        }
        document.querySelector(".count-down-cell > .hour").innerText = "0" + hour;
    },
    1000 // cu sau 1s se thay doi dem nguoc
);



var index = 1;
changeIMG = function () {
    var imgs = ["./public/img/bac4.webp", "./public/img/bac1.webp", "./public/img/bac3.webp", "./public/img/bac5.webp"];
    document.getElementById("imge").src = imgs[index];
    index++;
    if (index == 4) {
        index = 0;
    }

}
setInterval(changeIMG, 2500);





function overimg(id, hinhHover) {
    document.getElementById(id).src = hinhHover;
    document.getElementById(id).style.border = "1px solid #fff";
}
function outimg(id, hinh) {
    document.getElementById(id).src = hinh;
    document.getElementById(id).style.border = "0";
}
function clickimg(id, hinhClick) {
    document.getElementById(id).src = hinhClick;
}


