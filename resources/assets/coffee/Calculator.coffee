class @Calculator

  calculate: (opcode, operand1, operand2) ->
    operand1 = parseFloat(operand1)
    operand2 = parseFloat(operand2)
    if opcode == '+' then @sum operand1, operand2
    else if opcode == '-' then @sub operand1, operand2
    else if opcode == '*' then @mul operand1, operand2
    else if opcode == '/' then @div operand1, operand2

  sum: (operand1, operand2) -> operand1 + operand2
  sub: (operand1, operand2) -> operand1 - operand2
  mul: (operand1, operand2) -> operand1 * operand2
  div: (operand1, operand2) -> operand1 / operand2
