const quizDB = [
    {
        question: "Q.1: In the past 1 month, have you experienced a feeling of numbness or tingling?",
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"

    },
    {
        
        question: "Q.2: In the past 1 month, have you been bothered by Hot Flashes?",
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"
    },
    {

        question: "Q.3: In the past 1 month, have you felt wobbly in your legs at any time?",
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"
    },
    {

        question: "Q.4: In the past 1 month, have you found yourself unable to relax?",
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"
    },
    {

        question: "Q.5: In the past 1 month, have you been afraid that you’ll lose control?",
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"
    },
    {
        question: "Q.6: In the past 1 month, have you experienced a feeling of shakiness?",
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"
    },
    {
        question: "Q.7: In the past 1 month, have you felt your face flushing?",    
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"
    },
    {
        question: "Q.8: In the past 1 month, have you experienced a difficulty in breathing?",
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"
    },
    {
        question: "Q.9: In the past 1 month, have you found yourself fearing the worst happening?",
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"
    },
    {
        question: "Q.10: In the past 1 month, have you experienced a feeling of unsteadiness?",
        a: "Not at all",
        b: "Mildly, but it didn’t bother me much",
        c: "Moderately – it wasn’t pleasant at times",
        d: "Severely – it bothered me a lot",
        ans: "ans4"

    }
];
 const question = document.querySelector('.question');
 const option1 = document.querySelector('#option1');
 const option2 = document.querySelector('#option2');
 const option3 = document.querySelector('#option3');
 const option4 = document.querySelector('#option4');
 const submit = document.querySelector('#submit');

 const answers = document.querySelectorAll('.answer');

 const showScore = document.querySelector('#showScore');

 let questionCount = 0;
 let score = 0;

 const loadQuestion = () => {
     const questionList = quizDB[questionCount];

     question.innerText = questionList.question;

     option1.innerText = questionList.a;
     option2.innerText = questionList.b;
     option3.innerText = questionList.c;
     option4.innerText = questionList.d;
     
    
 }
 
 loadQuestion();
 
 const getCheckAnswer = () => {
     let answer;

     answers.forEach((curAnsElem) => {
         if(curAnsElem.checked){
             answer = curAnsElem.id;
         }
      
     });

     return answer;
 };

 
 submit.addEventListener('click', () => {
     const checkedAnswer = getCheckAnswer();
     console.log(checkedAnswer);

     if(checkedAnswer === quizDB[questionCount].ans){
     score++;
 };
 questionCount++;

 

    if(questionCount < quizDB.length){
        loadQuestion();
    }else{
        
        showscore.innerHTML = `
        <button class="btn"><a href="score.php"> Get Score</a> </button>
        `;
        
        showscore.classList.remove('scoreArea');
    }
 });
