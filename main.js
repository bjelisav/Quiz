var options = document.querySelectorAll('.options');
var confirmBtn = document.querySelector('#confirm');
var question = document.querySelector('#question');
var wrapper = document.querySelector('#wrapper');
var startBtn = document.querySelector('#start');
var jsonData = [];
var allQuestions = [];
var currentQuestion = [];
var answer = [];
var counter = 0;
var categoryDiv = document.querySelectorAll('input[name="category"]');
var category = "";


var xml = new XMLHttpRequest;
startBtn.style.display = "none";
xml.open("GET","data.php");
xml.addEventListener("readystatechange",function(){
  if (xml.status === 200 && xml.readyState ===4 ) {
    getData(xml);
  }
})


xml.send();

function getData(xml){
  console.log(xml.responseText);
  var data = xml.responseText;
  jsonData = JSON.parse(data);
  console.log(jsonData);
  askQuestion();
}

function askQuestion(){
  currentQuestion.unshift(jsonData.splice(0,1));
  console.log(currentQuestion[0][0].question);
  question.innerHTML = currentQuestion[0][0].question;
  options[0].innerHTML = currentQuestion[0][0].options[0];
  options[1].innerHTML = currentQuestion[0][0].options[1];
  options[2].innerHTML = currentQuestion[0][0].options[2];
  options[3].innerHTML = currentQuestion[0][0].options[3];
  confirmBtn.addEventListener('click',checkAnswer);
}

for (var i = 0; i < categoryDiv.length; i++) {
  categoryDiv.addEventListener('click',selectCategory)
}
function selectCategory(e){
  category = e.target.value;
  console.log(category);
}



function checkAnswer(){
  var selected = "";
  for (var i = 0; i < options.length; i++) {
    if (options[i].style.background === "cadetblue") {
      selected = options[i].innerHTML;
    }
  }
  console.log(selected);
  if (currentQuestion[0][0].answer === selected) {
    counter++;
  }
  console.log(counter);
  if (jsonData.length === 0) {
    for (var i = 0; i < options.length; i++) {
      options[i].style.display = "none";
      confirmBtn.style.display = "none";
      startBtn.style.display = "block";
      wrapper.className = "jumbotron";
      wrapper.innerHTML = "<h1>Imate "+counter+" tacnih odgovora od "+currentQuestion.length+" pitanja</h1>";
    }
  }else{
    askQuestion();
  }

}

for (var i = 0; i < options.length; i++) {
  options[i].addEventListener('click',function(e){
    for (var i = 0; i < options.length; i++) {
      options[i].style.background = "rgb(168, 177, 177)";
    }
    e.target.style.background = "cadetblue";
  })
}
