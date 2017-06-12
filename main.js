var options = document.querySelectorAll('.options');
var confirmBtn = document.querySelector('#confirm');
var question = document.querySelector('#question');
var jsonData = [];
var allQuestions = [];
var answer = [];
var xml = new XMLHttpRequest;
xml.open("GET","data.php");
xml.addEventListener("readystatechange",function(){
  if (xml.status === 200 && xml.readyState ===4 ) {
    getData(xml);
  }
})

xml.send();

function getData(xml){

  var data = xml.responseText;
  jsonData = JSON.parse(data);
  askQuestion();
}

function askQuestion(){
  question.innerHTML= jsonData.question;

}


for (var i = 0; i < options.length; i++) {
  options[i].addEventListener('click',function(e){
    for (var i = 0; i < options.length; i++) {
      options[i].style.background = "rgb(168, 177, 177)";
    }
    e.target.style.background = "cadetblue";
  })
}
