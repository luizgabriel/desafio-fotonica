$(document).ready ->

  calculator_out = $('.calculator-output')
  calculator = new Calculator()
  operand1 = 0
  operation = '+'

  appendCalculatorOut = (char) ->
    current = calculator_out.html()
    firstChar = current[0]
    hasDot = current.indexOf('.') >= 0
    if firstChar == '0' and not hasDot and char != '.'
      calculator_out.html current.slice(0, -1) + char
    else if not (hasDot and char == '.')
      calculator_out.append char

  processAction = (opcode) ->
    current = calculator_out.html()
    if not isNaN(parseInt(opcode))
      appendCalculatorOut(opcode)
    else if opcode == '.'
      appendCalculatorOut(opcode)
    else if opcode == 'backspace'
      if (current.length == 1)
        calculator_out.html(0)
      else
        calculator_out.html(current.slice(0, -1))
    else if opcode == 'clear'
      calculator_out.html("0")
    else if opcode == '='
      calculator_out.html(calculator.calculate(operation, operand1, current))
      console.log operand1, operation, parseFloat(current), '=', parseFloat(calculator_out.html())
    else
      operation = opcode
      operand1 = parseFloat(current)
      processAction('clear')

  $('.calculator .btn').click ->
    opcode = $(this).html()
    if ($(this).data('action')?)
      opcode = $(this).data('action')
    processAction(opcode)

pusher = new Pusher 'dc62f2019de851ad9f1b', encrypted: true
channel = pusher.subscribe('number.create')
channel.bind "Fotonica\\Events\\CreateRandomNumber", (data) ->
  console.log data.number.value
