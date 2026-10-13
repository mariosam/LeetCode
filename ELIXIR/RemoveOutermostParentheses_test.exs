# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/RemoveOutermostParentheses_test.exs
# $ elixir RemoveOutermostParentheses_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("RemoveOutermostParentheses.ex", __DIR__)

defmodule RemoveOutermostParenthesesTest do
  use ExUnit.Case, async: true

  alias RemoveOutermostParentheses

  test "testing sum game" do
    # Test 1
    want = "()()()"
    got = RemoveOutermostParentheses.remove_outer_parentheses("(()())(())")

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = "()()()()(())"
    got = RemoveOutermostParentheses.remove_outer_parentheses("(()())(())(()(()))")

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 3
    want = ""
    got = RemoveOutermostParentheses.remove_outer_parentheses("()()")

    IO.puts("Test 3: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
