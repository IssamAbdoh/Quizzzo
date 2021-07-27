(function() {
  var allQuestions = [{
      question: "What does CSS stand for?",
      options: ["Computer Style Sheets", "Cascading Style Sheets", "Colorful Style Sheets", "Creative Style Sheets"],
      answer: 1
    },
    {
      question: "Which HTML attribute is used to define inline styles?",
      options: ["styles", "style", "class", "font"],
      answer: 1
    },
    {
      question: "Which is the correct CSS syntax?",
      options: ["body{color:black;}", "{body;color:black;}", "body:color=black;", "{body:color=black;}"],
      answer: 0
    }, {
      question: "How do you insert a comment in a CSS file?",
      options: ["//this is a comment", "'this is a comment'", "//this is a comment//", "/*this is a comment*/"],
      answer: 3
    },{
      question: "Which property is used to change the background color?",
      options: ["color", "background:color", "bgcolor", "background-color"],
      answer: 3
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
