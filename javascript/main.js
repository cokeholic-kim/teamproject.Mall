console.log(1);
const imglists = document.querySelector("#imglists");
const prevBtn = document.querySelector("#prevbtn");
const nextBtn = document.querySelector("#nextbtn");
const indiDiv = document.querySelector("#indi");
let spanstr = "";
//setIntervar을 담을 변수
let timer;
//현재 보이는 div번호
let current = 1;

// 노드의 마지막 자식 요소 노드
let lastImg = imglists.lastElementChild;
// 노드의 첫번째 자식 요소 노드
let firstImg = imglists.firstElementChild;
// 노드 복사하기
let cloneFirst = firstImg.cloneNode(true);
let cloneLast = lastImg.cloneNode(true);
imglists.append(cloneFirst);
imglists.prepend(cloneLast);

// 슬라이더 이미지
const slidImgs = document.querySelectorAll("#imglists li");

let lastIndex = slidImgs.length - 1;

// 스타일 수정하기
imglists.style.width = (slidImgs.length) * 100 + "%";
imglists.style.left = -(current * 100) + "%";
slidImgs.forEach((img, index) => {
    img.style.width = (100 / slidImgs.length) + "%";
    img.style.left = `${index * (100 / slidImgs.length)}%`;
    // indigator 만들기
    spanstr = spanstr + `<span>${index}</span>`;
    // console.log(index);
});
// span 화면에 출력
indiDiv.innerHTML = spanstr;

// span선택해서 클래스 달아주기 
let indilists = document.querySelectorAll("#indi span");
indilists[0].classList.add("on");

//indigator 이벤트 연결 (클릭했을 때 클릭한 인덱스 이미지로 감)
indiDiv.addEventListener("click",function(e){
    let targetnum = Number(e.target.innerHTML);
    moveDiv(targetnum);
})

// indigator에 마우스 올렸을 때 / 땠을 때 
indiDiv.addEventListener("mouseenter",function(){
    stopIt();
})
indiDiv.addEventListener("mouseleave",function(){
    startIt();
})

// 버튼에 마우스 올렸을 때 / 땠을 때  
prevBtn.addEventListener("mouseenter",function(){
    stopIt();
})
nextBtn.addEventListener("mouseenter",function(){
    stopIt();
})
prevBtn.addEventListener("mouseleave",function(){
    startIt();
})
nextBtn.addEventListener("mouseleave",function(){
    startIt();
})

// 버튼을 클릭했을 때
prevBtn.addEventListener("click",function(){
    let prevNum = current === 0? lastIndex : current - 1;
    moveDiv(prevNum);
    console.log(prevNum);
})
nextBtn.addEventListener("click",function(){
    let nextNum = current === lastIndex ? 0 : current + 1;
    moveDiv(nextNum);
})

// 맨 앞으로 lists를 이동해주는 함수
function firstMove() {
    setTimeout(function() {
        imglists.style.transition = "0s";
        imglists.style.left = "0%";
        current = 0;
    }, 500); // 3번 이미지에서 바로 첫번째 이미지로 가는 시간 0.5s
}

//lists를 이동시키는 함수
function moveDiv(divnum){
    imglists.style.transition = "0.5s";
    imglists.style.left = `${-(divnum * 100)}%`
    current= divnum;
    if(divnum == 4) {
        firstMove();
    }
    // lists움직일 때 indigator도 같이 움직여줌 
    indilists.forEach(indi=>{
        indi.classList.remove("on");
    })
    indilists[current].classList.add("on");
}
//자동이미지 전환 실행함수
function startIt(){
    //3초마다 moveDiv()실행
    timer = setInterval(function(){
        moveDiv(current + 1);
        //current 0 일때 =>1
        //current 1 일때 =>2
        //current 2 일때 =>3
        //current 3 일때 =>0
        // next = current === lastIndex ? 0 : current+1;
        // moveDiv(next);
        console.log(current);
    }, 3000);
}
startIt();

//자동이미지전환 정지함수
function stopIt(){
    clearInterval(timer);
}
 