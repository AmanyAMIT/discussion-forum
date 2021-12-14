let sohwanswer = document.getElementsByClassName('showanswer'),
ShowAnswer = document.getElementsByClassName('ShowAnswer'),
HideAnswer = document.getElementsByClassName('HideAnswer'),
Up = document.getElementsByClassName("up"),
down = document.getElementsByClassName("down");

function showMore() {
for(i = 0; i < sohwanswer.length; i++){
  sohwanswer[i].classList.remove("hidden");
}
for(x = 0; x < ShowAnswer.length; x++){
  ShowAnswer[x].classList.add('hidden');
}
for(z = 0; z < HideAnswer.length; z++){
  HideAnswer[z].classList.remove('hidden');
}
}


function hideShowLess(){
  for(y = 0; y < sohwanswer.length; y++){
    sohwanswer[y].classList.add("hidden");
  }
  for(c = 0; c < ShowAnswer.length; c++){
    ShowAnswer[c].classList.remove('hidden');
  }
  for(d = 0; d < HideAnswer.length; d++){
    HideAnswer[d].classList.add('hidden');
  }
  }

// function increase(){
//   let p = document.getElementById("Toup"),
//   g = 0;
//   for(g; g < 10; g++){
//     p.innerHTML = g+=1;
//   }
// }