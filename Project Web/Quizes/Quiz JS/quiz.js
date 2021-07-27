/*
&lt;&gt;
*/

(function() {
  var allQuestions = [{
      question: "Inside which HTML element do we put the JavaScript?",
      options: ["&lt;javascript&gt;", "&lt;js&gt;", "&lt;script&gt;", "&lt;scripting&gt;"],
      answer: 2
    },
    {
      question: "What is the correct syntax for referring to an external script called \"xxx.js\"?",
      options: ["&lt;script href = \"xxx.js\"&gt;", "&lt;script name = \"xxx.js\"&gt;", "&lt;script src = \"xxx.js\"&gt;", "&lt;script url = \"xxx.js\"&gt;"],
      answer: 2
    },
    {
      question: "How do you write \"Hello World\" in an alert box?",
      options: ["msgBox(\"Hello World\");", "alertBox(\"Hello World\");", "msg(\"Hello World\");", "alert(\"Hello World\");"],
      answer: 3
    }, {
      question: "How do you create a function in JavaScript?",
      options: ["function myFunction()", "function = myFunction()", "function:myFunction()", "function-myFunction()"],
      answer: 0
    },{
      question: "How do you call a function named \"myFunction\"?",
      options: ["call function myFunction()", "myFunction()", "call myFunction()", "call:myFunction()"],
      answer: 1
    }
  ];

  var quesCounter = 0;
  var selectOptions = [];
  var quizSpace = $('#quiz');

  nextQuestion();

  $('#next').click(
    function() {
      chooseOption();
      if (isNaN(selectOptions[quesCounter])) {
        alert('Please select an option !');
      } else {
        quesCounter++;
        nextQuestion();
      }
    });

  $('#prev').click(function() {
    chooseOption();
    quesCounter--;
    nextQuestion();
  });

  function createElement(index) {
    var element = $('<div>', {
      id: 'question'
    });
    var header = $('<h2>Question No. ' + (index + 1) + ' :</h2><br>');
    element.append(header);

    var question = $('<p>').append(allQuestions[index].question);
    element.append(question);
    var br='<br>';
    element.append(br);

    var radio = radioButtons(index);
    element.append(radio);

    return element;
  }

  function radioButtons(index) {
    var radioItems = $('<ul>');
    var item;
    var input = '';
    for (var i = 0; i < allQuestions[index].options.length; i++) {
      item = $('<li>');
      input = '<input type="radio" name="answer" value=' + i + ' />';
      input += allQuestions[index].options[i];
      item.append(input);
      radioItems.append(item);
    }
    return radioItems;
  }

  function chooseOption() {
    selectOptions[quesCounter] = +$('input[name="answer"]:checked').val();
  }
  /*
      var a=[];
      console.log( isNaN(a[0]) );
  */
  function nextQuestion() {
    quizSpace.fadeOut(
      function() {
        $('#question').remove();
        if (quesCounter < allQuestions.length) {
          var nextQuestion = createElement(quesCounter);
          quizSpace.append(nextQuestion).fadeIn();
          if (!(isNaN(selectOptions[quesCounter]))) //!(nan = not a number ) = number
          {
            $('input[value=' + selectOptions[quesCounter] + ']').prop('checked', true);
          }
          if (quesCounter === 1) {
            $('#prev').show();
          } else if (quesCounter === 0) {
            $('#prev').hide();
            $('#next').show();
          }
        } else {
          var scoreRslt = displayResult();
          quizSpace.append(scoreRslt).fadeIn();
          $('#next').hide();
          $('#prev').hide();
        }
      }
    );
  }

  function displayResult() {
    var score = $('<p>', {
      id: 'question'
    });
    var correct = 0;
    for (var i = 0; i < selectOptions.length; i++) {
      if (selectOptions[i] === allQuestions[i].answer) {
        correct++;
      }
    }
    score.append('You scored ' + correct + ' out of ' + allQuestions.length);
    return score;
  }
})();
