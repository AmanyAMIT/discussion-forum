let sohwanswer = document.querySelector('.showanswer'),
ShowAnswer = document.querySelector('.ShowAnswer'),
HideAnswer = document.querySelector('.HideAnswer');
function showMore() {
    sohwanswer.classList.remove("hidden");
    ShowAnswer.classList.add('hidden');
    HideAnswer.classList.remove('hidden');
}

HideAnswer.addEventListener('click',hideShowLess);
      function hideShowLess(){
        sohwanswer.classList.add("hidden");
        ShowAnswer.classList.remove('hidden');
        HideAnswer.classList.add('hidden');
      }
// function HideAnswer() {
//     HideAnswer.classList.add('hidden');
//     ShowAnswer.classList.remove('hidden');
// }
//   showless.addEventListener('click',hideShowLess);
//   function hideShowLess(){
//       showless.classList.add("hide");
//       showmore.classList.remove("hide")
//   }