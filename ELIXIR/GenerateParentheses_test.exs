# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/GenerateParentheses_test.exs
# $ elixir GenerateParentheses_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("GenerateParentheses.ex", __DIR__)

defmodule GenerateParenthesesTest do
  use ExUnit.Case, async: true

  alias GenerateParentheses

  test "testing generate parentheses" do
    # Test 1
    want = ["((()))","(()())","(())()","()(())","()()()"]
    got = GenerateParentheses.generate_parenthesis( 3 )
    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = ["()"]
    got = GenerateParentheses.generate_parenthesis( 1 )
    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
