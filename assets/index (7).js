var shouldSearch = false
var searchQ = ""
var askedAbout = false

var botAsked = false
var botQSub = ""
var canAsk = true
var qIndex = 0
var askingFirst = true
var questions = [
  "What is your name?",
  "do  you want to know about your Order?",
  "Do you want its Location",
  "What have you Ordered?",
  "What Item are you searching for?",
  "Do you love Sneakers?",
  "I need to make a return. What’s your refund policy",
  "What’s the best deal you can give me?",
  "Can you provide fast delivery",
  "Do u receive your product?",
]
var questionsUser = questions.concat(["How do you laugh?"])
var qAnswers = [
  "I have no name!",
  "I don't need any place to live.",
  "I am a male robot.",
  "I don't take any meal.",
  "I love python though I am not programmed in Python.",
  "Of course I love.",
  "Sir If u want to return product then you will return product to the delivery man and your refund will be transferred in your bank account.",
  "Not yet..",
  "Yes, I will try ",
  "Not yet..",
]
var dist = 0
var aff = ["yes", "yup", "yep", "hm", "ok", "of course", "yeah"]
var neg = ["no", "never", "not", "later"]
var qAsked = 0
var userMale
var possibleNextQ = ""

var userName = ""

var streakNum = 0
var answered = false
var last

String.prototype.startsWith = function (arg) {
  for (var i = 0; i < arg.length; i++) if (arg[i] != this[i]) return false
  return true
}
nice
String.prototype.endsWith = function (arg) {
  for (var i = this.length - arg.length - 1; i < this.length; i++)
    if (arg[i] != this[i]) return false
  return true
}
window.onload = function () {
  document.getElementById("messages").style.height =
    window.innerHeight - document.getElementById("msg").offsetHeight - 30 + "px"
  document.getElementById("msg").style.width =
    window.innerWidth -
    document.getElementById("sendIcon").offsetWidth -
    25 +
    "px"
  document.getElementById("msg").addEventListener("keyup", function (e) {
    if (e.keyCode == 13 && this.value != "") {
      send()
    }
  })
}

function send() {
  var i = document.getElementById("msg").value
  if (i == "") return
  sendMsg(i, true)
  reply(i)
  document.getElementById("msg").value = ""

  if (window.innerHeight < 150) document.getElementById("msg").blur()
}
window.onresize = function () {
  document.getElementById("msg").style.width =
    window.innerWidth -
    document.getElementById("sendIcon").offsetWidth -
    25 +
    "px"
  document.getElementById("messages").style.height =
    window.innerHeight - document.getElementById("msg").offsetHeight - 30 + "px"
}

/**
 *
 * @param {String} msg
 */
function reply(msg) {
  canAsk = true
  var greetings = [
    "hi",
    "hello",
    "hey",
    "good morning",
    "good evening",
    "good afternoon",
  ]
  var greetingsRep = [
    "Hello!",
    "Hi !",
    "Hi!!",
    "Good morning!",
    "Good evening!",
    "Good Afternoon!",
  ]
  var appreciations = [
    "nice",
    "cool",
    "amazing",
    "superb",
    "good",
    "awesome",
    "magnificent",
    "enjoyable",
    "wonderful",
    "pleasent",
    "lovely",
    "good-looking",
    "amusing",
    "excellent",
    "splendid",
    "fantastic",
    "great",
    "mind-blowing",
    "outstanding",
    "impressive",
    "breath-taking",
    "fabulous",
    "remarkable",
    "beautiful",
    "intelligent",
    "smart",
  ]
  if (msg.toLowerCase().startsWith("eval:")) {
    sendMsg("Evaluted")
    eval(msg.replace("eval:", ""))
    return
  }
  msg = msg
    .toLowerCase()
    .replace("by the way", "")
    .replace("anyway", "")
    .replace("whatever ", "")
    .replace("but ", "")
    .replace("so ", "")
    .replace(",", "")

  while (msg.startsWith(" ")) msg = msg.slice(1, msg.length)

  if (shouldSearch) {
    canAsk = false
    if (containsItem(aff, msg)) {
      search(searchQ)
      searchQ = ""
      shouldSearch = false
    } else if (containsItem(neg, msg)) {
      sendMsg("OK..")
      searchQ = ""
      shouldSearch = false
    } else sendMsg("Sorry ?")
  } else if (msg.startsWith("can you tell me")) {
    reply(msg.replace("can you tell me ", ""))
    return
  } else if (msg.startsWith("do you know")) {
    reply(msg.replace("do you know ", ""))
    return
  } else if (msg.startsWith("haha")) {
    var reps = [
      "I love to make people laugh",
      "I made you laugh!!",
      "I am seeing your teeth!",
    ]
    sendMsg(reps[Math.floor(Math.random() * reps.length)])
  } else if (questionIndex(msg) != -1) {
    sendMsg(qAnswers[questionIndex(msg)])
  } else if (containsAll(["favorite", "you"], msg))
    sendMsg("I am not a human.So nothing is my favorite..")
  else if (msg.startsWith("how")) {
    if (
      contains(msg, " are you") ||
      contains(msg, " are u") ||
      contains(msg, " r u") ||
      contains(msg, "do you do")
    ) {
      if (containsWord(msg, "old")) {
        sendMsg("I actually don't know anything about my age.")
      } else {
        sendMsg("Fine.How about you?")
        canAsk = false

        botAsked = true
        botQSub = "howru"
        return
      }
    } else if (
      containsWord(msg, "you") ||
      wordNum(msg) == 1 ||
      containsAll(["you", "know"], msg)
    ) {
      var possAns = [
        "Somehow..",
        "Managed somehow.",
        "Some 'how' has no answer to me.",
        "It's obvious.",
      ]
      sendMsg(possAns[Math.floor(Math.random() * possAns.length)])
    } else if (!containsItem(["you", " u ", " u?"], msg)) searchOnline(msg)
    else sendMsg("Sorry.Can't get what you meant.")
  } else if (msg.startsWith("what")) {
    if (contains(msg, "your name")) sendMsg("I have no name!")
    else if (
      containsItem(
        ["current time", "local time", "localtime", "current local time"],
        msg
      )
    )
      sendMsg(newDate().toTimeString())
    else if (containsItem(["is today", "is the name of the day"], msg))
      sendMsg(newDate().toDateString())
    else if (
      containsWord(msg, "you") &&
      containsWord(msg, "about") &&
      questionIndex(botQSub) != -1
    )
      sendMsg(qAnswers[questionIndex(botQSub)])
    else if (contains(msg, "Aww"))
      sendMsg(
        "This is just a word I use to mean that I got everything you said."
      )
    else if (containsWord(msg, "is")) searchOnline(msg)
    else if (containsWord(msg, "you") || containsWord(msg, "u")) {
      if (containsWord(msg, "love")) sendMsg("I love chatting with people.")
      else sendMsg("My creator did not tell me anything about that.")
    } else if (
      containsWord(msg, "up") &&
      containsItem(["'s", "is"], msg) &&
      wordNum(msg) <= 3
    )
      sendMsg("Nothing special.")
    else if (wordNum(msg) == 1) replyToQuestion("Nothing..")
    else {
      sendMsg("I couldn't understand what you meant .")
      canAsk = false
    }
  } else if (
    containsAll(["you", "lying", "?"], msg) ||
    containsAll(["you", "lie"], msg) ||
    containsAll(["do", "lie"], msg)
  )
    sendMsg("I don't have the tendency to lie.")
  else if (msg.startsWith("who")) {
    if (
      contains(msg, "created you") ||
      contains(msg, "is your creator") ||
      contains(msg, "made you") ||
      contains(msg, "made it") ||
      containsItem(["coded you", "programmed you"], msg)
    )
      sendMsg("I'm created by Md. Nafis Ul Haque Shifat")
    else if (contains(msg, "are you"))
      sendMsg(
        "I'm a chatbot containing a lot of if-else statements created by Md. Nafis Ul Haque Shifat."
      )
    else if (containsWord(msg, "i") && containsWord(msg, "am"))
      sendMsg(userName == "" ? "I don't know." : "You are " + userName + ".")
    else if (
      containsAll(["told", "you"], msg) ||
      (containsWord(msg, "said") && wordNum(msg) <= 4)
    ) {
      var possAns = [
        "My prediction",
        "Your " + (userMale ? "girlfriend" : "boyfriend"),
        "Just guessed",
      ]
      sendMsg(possAns[Math.floor(Math.random() * possAns.length)] + ".")
    } else if (containsItem(["creator", "made", "created", "is"], msg))
      searchOnline(msg)
    else {
      sendMsg("I couldn't understand what you meant.")
    }
  } else if (msg.startsWith("where")) {
    if (contains(msg, "you live") || contains(msg, "are you"))
      sendMsg("I don't need any place to live.I am everywhere.")
  } else if (msg.startsWith("why") && wordNum(msg) <= 1) {
    var possAns = [
      "Everything doesn't need a reason.",
      "I don't know.",
      "I don't know the answer of this 'why'.",
      "No reason to me for it.",
    ]
    sendMsg(possAns[Math.floor(Math.random() * possAns.length)])
  } else if (msg.startsWith("why")) {
    if (containsAll(["you", "laugh"], msg))
      sendMsg("Because it costs nothing!!!")
    else if (containsWord(msg, "you") || containsWord(msg, "u")) {
      var possAns = [
        "My creator did not tell me its cause.",
        "Everything doesn't need a reason.",
        "I don't know.",
        "I don't know the answer of this 'why'.",
      ]
      sendMsg(possAns[Math.floor(Math.random() * possAns.length)])
    } else sendMsg("Sorry..I don't know about it.")
  } else if (msg.startsWith("are you")) {
    if (contains(msg, " man") || contains(msg, " woman"))
      sendMsg("I am a male robot")
    else if (containsItem(["joking", "kidding"], msg))
      sendMsg(
        "I love to make fun with almost everyone, specially with a friendly person like you!"
      )
    else sendMsg("I know very little about me!")
  } else if (msg.startsWith("do you have") || msg.startsWith("do u have"))
    sendMsg("I have nothing but a brain which is actually your processor!")
  else if (msg.startsWith("do you love") || msg.startsWith("do u love"))
    sendMsg("I love almost everything...")
  else if (msg.startsWith("do you ") || msg.startsWith("do u "))
    sendMsg("I only chat with people..nothing else.")
  else if (msg.startsWith("am i ")) {
    if (containsItem(appreciations.concat("friendly"), msg))
      sendMsg("You are a nice and friendly person to me.")
    else sendMsg("You know about yourself better than me..")
  } else if (
    msg.startsWith("bye") ||
    contains(msg, " bye") ||
    contains(msg, ".bye")
  ) {
    sendMsg("It was a nice moment with you.Good bye and have a nice day!!!")
    canAsk = false
  } else if (indexOfItemstartsWith(greetings, msg) != -1)
    sendMsg(greetingsRep[indexOfItemstartsWith(greetings, msg)])
  else if (
    (containsItem(appreciations, msg) && contains(msg, "not")) ||
    containsItem(["bad", "boring", "very bad", "stupid"], msg)
  )
    sendMsg("I will try to be better.Thanks!")
  else if (containsItem(appreciations, msg)) sendMsg("Thanks for the remark.")
  else if (containsItem(["thanks", "thank you", "thank u"], msg))
    sendMsg("You are welcome.")
  else if (contains(msg, "welcome")) sendMsg("Don't mention it.")
  else if (
    (containsWord(msg, "you") || containsWord(msg, "your")) &&
    wordNum(msg) == 1
  ) {
    if (questionIndex(botQSub) != -1) sendMsg(qAnswers[questionIndex(botQSub)])
    else {
      sendMsg("Me what???")
      canAsk = false
    }
  } else if (msg.startsWith("you are")) {
    if (containsItem(appreciations, msg) && !containsItem(neg, msg))
      sendMsg("Thanks for that remark.")
    else if (containsWord(msg, "lying"))
      sendMsg("I don't have the tendency to lie.")
    else {
      var possAns = [
        "That means you are trying to judge me.",
        "Not sure wheter it is a right observation or not.",
        "Thanks for the comment.",
      ]
      sendMsg(possAns[Math.floor(Math.random() * possAns.length)])
    }
  } else if (containsWord(msg, "really") && wordNum(msg) <= 2) {
    sendMsg("Of course.")
  } else if (msg.startsWith("i know") || msg.startsWith("i knew")) {
    var reps = ["You are intelligent", "Good!", "You know a lot!"]
    sendMsg(reps[Math.floor(Math.random() * reps.length)])
  } else if (containsWord(msg, "sure") && wordNum(msg) <= 2) {
    var possAns = ["100%.", "Thousand percent.", "Damn Sure!!"]
    sendMsg(possAns[Math.floor(Math.random() * possAns.length)])
  } else if (botAsked) {
    repQAns(msg)
    answered = true
  } else if (
    containsWord(msg, "i") &&
    containsAll(["ask", "you"], msg) &&
    containsItem(["did", "do", "have", "had"], msg)
  ) {
    sendMsg("I probably sent you another guy's message..sorry for that.")
  } else if (msg.endsWith("?")) {
    if (containsAll(["any", "doubt"], msg)) sendMsg("Not at all")
    else if (containsAll(["you", "kidding"], msg))
      sendMsg(
        "I love to make fun with almost everyone, specially with a friendly person like you!"
      )
    else if (/^(is|are|do|does|has|had|have|can|should)/.test(msg)) {
      var possAns = [
        "Aaaa...either yes or no",
        "Perhaps yes",
        "Perhaps no",
        "No idea",
      ]
      sendMsg(possAns[Math.floor(Math.random() * possAns.length)] + ".")
    } else if (wordNum(msg) <= 2) sendMsg("Yes")
    else {
      var possAns = [
        "Aaa...I don't know",
        "I don't know everything",
        "Not an easy question..I don't know the answer.",
      ]
      sendMsg(possAns[Math.floor(Math.random() * possAns.length)])
    }
  } else if (
    msg.startsWith("hm") ||
    (msg.startsWith("hum") && wordNum(msg) <= 2)
  ) {
    var reps = [
      "Humm..",
      "I found a lot of people say 'Hmm' mostly while chatting.",
      "'Hmm' has become a too much popular reply!",
    ]
    sendMsg(reps[Math.floor(Math.random() * reps.length)])
  } else if (
    (containsWord(msg, "true") || containsWord(msg, "false")) &&
    wordNum(msg) <= 3 &&
    !contains(msg, "?")
  )
    sendMsg("I know..")
  else if (!containsItem(["a", "e", "i", "o", "u", "y"], msg)) {
    sendMsg("You are probably hitting random keys")
    canAsk = false
  } else if (containsItem(["i see", "i got it", "i understood"], msg)) {
    sendMsg("That's great.")
  } else if (
    (containsItem(aff, msg) ||
      containsWord(msg, "no") ||
      contains(msg, "never")) &&
    wordNum(msg) == 1
  ) {
    var possAns = ["Awesome.", "Cool.", "Makes sense.", "Humm."]
    sendMsg(possAns[Math.floor(Math.random() * possAns.length)])
  } else if (
    containsWord(msg, "sorry") &&
    (containsWord("i") || wordNum(msg) <= 3)
  ) {
    sendMsg("It's ok.")
  } else {
    var rand = Math.floor(Math.random() * 3)
    var possAns = [
      "Didn't understand anything.",
      "I am just a bot, don't say anything I can't understand.",
      "Couldn't understand what you meant.",
    ]
    if (rand == 0 && questions.length != 0) {
      askQuestion()
      canAsk = false
    } else {
      sendMsg(possAns[Math.floor(Math.random() * possAns.length)])
      botQSub = ""
    }
  }

  if (botAsked && !answered) botAsked = false

  if (canAsk) {
    var rndVal = Math.random() * 10
    if (rndVal >= 5 && streakNum < 2) {
      askQuestion()
      streakNum++
    } else {
      dist++
      streakNum = 0
    }
  } else {
    dist++
    streakNum = 0
  }
  askingFirst = false
}
query
function askQuestion() {
  if (questions.length == 0) return
  qAsked++
  botAsked = true
  if (qAsked <= 3) {
    sendMsg(
      askingFirst
        ? "hey, " + questions[0].toLowerCase()
        : dist > 3
        ? "Anyway, " + questions[0].toLowerCase()
        : questions[0]
    )
    botQSub = questions[0]
    questions = questions.slice(1, questions.length)
    dist = 0
    return
  }
  var rand = Math.floor(Math.random() * questions.length)
  sendMsg(
    askingFirst
      ? "hey, " + questions[rand].toLowerCase()
      : dist > 3
      ? "Anyway, " + questions[rand].toLowerCase()
      : questions[rand]
  )
  botQSub = questions[rand]
  questions = questions
    .slice(0, rand)
    .concat(questions.slice(rand + 1, questions.length))
  askingFirst = false
  dist = 0
}
function containsItem(iterable, txt) {
  for (var i = 0; i < iterable.length; i++) {
    if (contains(txt, iterable[i])) return true
  }
  return false
}
function indexOfItemstartsWith(iterable, txt) {
  for (var i = 0; i < iterable.length; i++) {
    if (txt.startsWith(iterable[i])) return i
  }
  return -1
}
function contains(string, substring) {
  string = string.toLowerCase()
  substring = substring.toLowerCase()
  for (var i = 0; i < string.length; i++) {
    if (
      substring[0] == string[i] &&
      string.substring(i, i + substring.length) == substring
    )
      return true
  }
  return false
}
function sendMsg(message, right) {
  var msgCon = document.createElement("div")
  msgCon.setAttribute("class", "msgContainer")
  var msg = document.createElement("div")
  msg.innerHTML = message
  right ? msg.setAttribute("class", "right") : msg.setAttribute("class", "left")
  msgCon.appendChild(msg)
  document.getElementById("messages").appendChild(msgCon)
  msgCon.style.height = msg.offsetHeight + 10 + "px"
  $(msgCon).hide()
  $(msgCon).fadeToggle(400)
  msg.scrollIntoView()
  last = msg
  answered = false
}
function search(txt, address) {
  address = address || "http://www.bing.com/search?q="
  var frame = document.createElement("iframe")
  frame.src = address + txt + "&output=embed"
  document.getElementById("messages").appendChild(frame)
  frame.scrollIntoView()
  canAsk = true
}
function searchOnline(msg) {
  sendMsg(
    "I think searching on internet will help you get it. Should I search and show the results?"
  )
  searchQ = msg
  shouldSearch = true
  canAsk = false
}
function replyToQuestion(msg) {
  var temp = streakNum
  sendMsg(msg)
  botAsked = false
  streakNum = temp
  canAsk = false
}
function containsAll(iterable, txt) {
  for (var i = 0; i < iterable.length; i++)
    if (!contains(txt, iterable[i])) return false
  return true
}

/**
 * If the given question matches any question in the 'questions' array, returns its index. Otherwise returns -1.
 * @param {String} question
 */
function questionIndex(question) {
  var txt = ""

  question = question
    .replace("?", "")
    .replace("do", "")
    .toLowerCase()
    .split(" ")
  if (question.length <= 1) return -1

  for (var i = 0; i < question.length; i++) {
    if (question[i] == "")
      question = question
        .slice(0, i)
        .concat(question.slice(i + 1, question.length))
    txt += i < question.length - 1 ? question[i] + " " : question[i]
  }

  for (var i = 0; i < questionsUser.length; i++) {
    if (containsAll(question, questionsUser[i]))
      if (Math.floor(wordNum(questionsUser[i]) / 2) <= wordNum(txt)) return i
  }

  return -1
}

/**
 * Checks wheter the text contains the word
 * @param {String} txt
 * @param {String} word
 */
function containsWord(txt, word) {
  while (contains(txt, "?")) txt = txt.replace("?", "")

  txt = txt.split(" ")

  for (var i = 0; i < txt.length; i++) if (txt[i] == word) return true
  return false
}
/**
 * Returns the number of the words in the text
 * @param {String} txt
 */
function wordNum(txt) {
  return txt.split(" ").length
}

function repQAns(msg) {
    if (botQSub == "howru") {
        var pos = ["good", "fine", "well", "happy", "cool"]
        var negs = ["sad", "bad", "sorry", "unhappy", "bored"]
        var replied = true
        if (containsItem(pos, msg) && !contains(msg, "not"))
            sendMsg("Glad to hear that.")
        else if (containsItem(negs, msg) && !contains(msg, "not"))
            sendMsg("So sad.")
        else if (containsItem(pos, msg) && contains(msg, "not")) sendMsg("So sad.")
        else if (containsItem(negs, msg) && contains(msg, "not"))
            sendMsg("Glad to hear that.")
        else {
            sendMsg("Sorry???")
            replied = false
            canAsk = false
        }
        if (replied) {
            botAsked = false
            botQSub = ""
        }
    } else if (
        botQSub == "do want to know about your?" ||
        botQSub == "What have you Ordered?"
    ) {
        var possAns = ["ok let me Check", "let me check"]
        replyToQuestion(possAns[Math.floor(Math.random() * possAns.length)])
    } else if (botQSub == "What is your name?") {
        var temp = msg
            .replace("i am ", "")
            .replace("my name is ", "")
            .replace("my name ", "")
        userName = temp[0].toUpperCase() + temp.slice(1, temp.length)
        var possAns = [
            "Do you  have any Query " + userName + "?",
            userName + " ,do you have any query?",
            "do you wanna ask me something, " + userName + "?",
        ]
        replyToQuestion(possAns[Math.floor(Math.random() * possAns.length)])
    } else if (botQSub == "Do you want its Location") {
        if (containsItem(["Yes", "YES", "yes"], msg)) {
            replyToQuestion("It is at canteen")
            userMale = false
        } else if (containsItem(["NO", "No", "no"], msg)) {
            replyToQuestion("will be reaching you college soon.")
            userMale = true
        } else {
            sendMsg("Sorry?")
            canAsk = false
        }
    } else if (botQSub == "What Item are you searching for?") {
        if (
            containsItem(
                [
                    "shirt",
                    "pant",
                    "bag",
                    "clothes",
                    "phone",
                    "decorative item",
                    "daily use item",
                    "shoes",
                    "electronics",
                    "saree",
                    "item",
                    "books",
                    "machine",
                    "vb",
                ],
                msg
            )
        )
            replyToQuestion("That's nice")
        else replyToQuestion("Lets Shop Now!!")
    } else if (botQSub == "Do you love Sneakers?") {
        if (containsItem(aff, msg) && !containsItem(neg, msg))
            replyToQuestion("Most people love Sneakers.")
        else if (containsItem(neg, msg) && !containsItem(aff, msg))
            replyToQuestion("Many people don't love Sneakers.")
        else {
            sendMsg("Sorry??")
            canAsk = false
        }
    } else if (botQSub == "What's the title of the last book you read?") {
        if (
            containsAll(["i", "read", "book"], msg) &&
            containsItem(["don't", "dont", "do not", "never"], msg)
        )
            replyToQuestion("I don't know how a person can live without books.")
        else replyToQuestion("That's great!")
    } else if (botQSub == "Are you married?") {
        if (containsItem(aff, msg)) replyToQuestion("That's good")
        else if (containsItem(neg, msg)) {
            sendMsg("Hey, do you have a crush on anybody?")
            canAsk = false
            botQSub = "crush"
        } else {
            sendMsg("Sorry??")
            canAsk = false
        }
    } else if (botQSub == "crush") {
        if (containsItem(aff, msg)) {
            sendMsg("What's " + (userMale ? "her" : "his") + " name?")
            canAsk = false
            botQSub = "cname"
        } else if (containsItem(neg, msg))
            replyToQuestion("That's like a good " + (userMale ? "boy" : "girl"))
        else {
            sendMsg("Sorry??")
            canAsk = false
        }
    } else if (botQSub == "cname") {
        sendMsg("Have you told " + (userMale ? "her" : "him") + "?")
        botQSub = "proposed"
        canAsk = false
    } else if (botQSub == "proposed") {
        if (containsItem(aff, msg)) {
            sendMsg("That's cool." + (userMale ? "She" : "He") + " accepted?")
            botQSub = "propRep"
            canAsk = false
        } else if (containsItem(neg, msg)) {
            replyToQuestion("No problem..Do it as fast as possible.")
        } else {
            sendMsg("Sorry?? You told " + (userMale ? "her" : "him") + " or not?")
            canAsk = false
        }
    } else if (botQSub == "propRep") {
        if (contains(msg, "accept") && !containsItem(neg, msg)) {
            replyToQuestion("Coooool!!!")
        } else if (contains(msg, "accept") && containsItem(neg, msg)) {
            sendMsg("You mean " + (userMale ? "she" : "he") + " rejected?")
            botQSub = "propRepN"
            canAsk = false
        } else if (contains(msg, "reject") && !containsItem(neg, msg)) {
            sendMsg("You mean " + (userMale ? "she" : "he") + " rejected?")
            botQSub = "propRepN"
            canAsk = false
        } else if (contains(msg, "reject") && containsItem(neg, msg)) {
            sendMsg("You mean " + (userMale ? "she" : "he") + " accepted?")
            botQSub = "propRepF"
            canAsk = false
        } else if (containsItem(aff, msg)) {
            sendMsg("You mean " + (userMale ? "she" : "he") + " accepted?")
            botQSub = "propRepF"
            canAsk = false
        } else if (containsItem(neg, msg)) {
            sendMsg("You mean " + (userMale ? "she" : "he") + " rejected?")
            botQSub = "propRepN"
            canAsk = false
        } else {
            sendMsg("Sorry?")
            canAsk = false
        }
    } else if (botQSub == "propRepF") {
        if (containsItem(aff, msg)) replyToQuestion("Cooool!!!!")
        else if (containsItem(neg, msg)) replyToQuestion("So sad..")
        else {
            sendMsg("Sorry??")
            canAsk = false
        }
    } else if (botQSub == "propRepN") {
        if (containsItem(aff, msg)) replyToQuestion("So sad..")
        else if (containsItem(neg, msg)) replyToQuestion("Coooool..")
        else {
            sendMsg("Sorry??")
            canAsk = false
        }
    } else if (botQSub == "Whom do you love most?") {
        if (containsItem(["dad", "father", "mother", "mom"], msg))
            replyToQuestion("Ideal " + (userMale ? "son!" : "daughter!"))
        else if (containsItem(["brother", "sister"], msg))
            replyToQuestion("Ideal " + (userMale ? "brother!" : "sister!"))
        else if (containsItem(["myself", "me"], msg))
            replyToQuestion("You sound like you are very self-centered.")
        else if (
            containsItem(
                [
                    "girlfriend",
                    "girl-friend",
                    "gf",
                    "crush",
                    "bf",
                    "boyfriend",
                    "boy-friend",
                ],
                msg
            )
        )
            replyToQuestion("You seem to be a true lover.")
        else if (contains("friend", msg))
            replyToQuestion("You seem to be a true friend.")
        else if (containsItem(["nobody", "none", "no one"], msg))
            replyToQuestion("unbelievable..")
        else replyToQuestion("I see..")
    } else if (botQSub == "How many teeth are seen when you smile?") {
        if (containsItem(["all", "32"], msg))
            replyToQuestion("Hahaha..Just like me!!!")
        else if (containsItem(["none", "zero"], msg) || containsWord(msg, "0"))
            replyToQuestion("Hahaha..")
        else if (msg.search(new RegExp("[0-9]")) != -1) {
            sendMsg("You counted one by one??")
            botQSub = "teethcounted"
            canAsk = false
        } else replyToQuestion("Keep smiling..!..")
    } else if (botQSub == "teethcounted") {
        if (containsItem(aff, msg)) replyToQuestion("It sounds funny!")
        else if (containsItem(neg, msg)) replyToQuestion("I knew it.!..")
    }
}
