/*
less than &lt;<br />
greater than &gt;<br />
*/

(function() {
  var allQuestions = [{
      question: "Who is making the Web standards?",
      options: ["Mozilla", "Microsoft", "Google", "The World Wide Web Consortium"],
      answer: 3
    },
    {
      question: "Choose the correct HTML element for the largest heading:",
      options: ["&lt;h1&gt;", "&lt;h6&gt;", "&lt;heading&gt;", "&lt;head&gt;"],
      answer: 0
    },
    {
      question: "What is the correct HTML element for inserting a line break?",
      options: ["&lt;lb&gt;", "&lt;rb&gt;", "&lt;break&gt;", "&lt;br&gt;"],
      answer: 3
    }, {
      question: "Which attribute specifies the maximum number<br> of characters allowed in the &lt;input&gt; element ?",
      options: ["maxchars", "maxlength", "maxwidth", "setlength"],
      answer: 1
    },{
      question: "Choose the correct HTML element to define important text?",
      options: ["&lt;important&gt;", "&lt;b&gt;", "&lt;strong&gt;", "&lt;i&gt;"],
      answer: 2
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
