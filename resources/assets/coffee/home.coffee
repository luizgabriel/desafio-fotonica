#
# Calculator functions
#
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


#
# Number Generator
#
toogle_btn = $('#toogle-random-generator')
number_out = $('#random-output')
sync = false

toogle_btn.change () ->
  status = if $(this).prop('checked') then 1 else 0
  $.post('/api/servers/1', {_method: 'put', _token: TOKEN, number_generator_status: status})
  .done (config) ->
    if config.number_generator_status == 1 then consoleOut('O serviço foi iniciado.')
    else if config.number_generator_status == 0 then consoleOut('O serviço foi parado.')

  if status == 1 then consoleOut('Iniciando o serviço...')
  else if status == 0 then consoleOut('Parando o serviço...')

consoleClear = () ->
  number_out.html("")

consoleOut = (message) ->
  number_out.find('li').removeClass('current')
  number_out.append("<li class=\"current\">#{message}</li>")

total = $('#total')
incrementTotal = () ->
  current = parseInt(total.html())
  total.html(current + 1)

pusher = new Pusher 'dc62f2019de851ad9f1b', encrypted: true
channel = pusher.subscribe('number.create')
channel.bind 'Fotonica\\Events\\CreateNumberEvent', (data) ->
  if not sync
    sync = true
    consoleClear()
    consoleOut('Sincronizado!')
  date = new Date().toLocaleDateString("pt-BR", {
    hour12: false,
    hour: "numeric",
    minute: "numeric"})
  incrementTotal()
  consoleOut("Número gerado: #{data.number.value} | em #{date}")
