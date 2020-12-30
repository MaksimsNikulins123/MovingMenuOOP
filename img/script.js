var contentRight = document.getElementById("myAnimationGoingRight-content")
var show = document.getElementById("login")
var hide = document.getElementById("sign_up")

show.addEventListener("click", () => {
    contentRight.style.display = "block"
})

hide.addEventListener("click", () => {
    contentRight.style.display = "none"
})


var contentLeft = document.getElementById("myAnimationGoingLeft-content")
var show = document.getElementById("sign_up")
var hide = document.getElementById("login")

show.addEventListener("click", () => {
    contentLeft.style.display = "block"
})

hide.addEventListener("click", () => {
    contentLeft.style.display = "none"
})


function myMoveRight() {
    var elem = document.getElementById("myAnimation");
    var pos = 0;
    var id = setInterval(frameLeft, 20);
    function frameLeft() {
        if(pos == 50) {
            clearInterval(id);
        } else {
            pos++;
            elem.style.left = pos + '%';
        }
    }
}

function myMoveLeft() {
    var elem = document.getElementById("myAnimation");
    var pos = 50;
    var id = setInterval(frameRight, 20);
    function frameRight() {
        if(pos == 0) {
            clearInterval(id);
        } else {
            pos--;
            elem.style.left = pos + '%';
        }
    }
}