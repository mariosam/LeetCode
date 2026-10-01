# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/EvaluateTheBracketPairsOfString_test.exs
# $ elixir EvaluateTheBracketPairsOfString_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("EvaluateTheBracketPairsOfString.ex", __DIR__)

defmodule EvaluateTheBracketPairsOfStringTest do
  use ExUnit.Case, async: true

  alias EvaluateTheBracketPairsOfString

  test "longest subsequence with non-zero bitwise XOR" do
    # Test 1
    want = "bobistwoyearsold"
    got = EvaluateTheBracketPairsOfString.evaluate("(name)is(age)yearsold", [["name","bob"],["age","two"]])

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = "hi?"
    got = EvaluateTheBracketPairsOfString.evaluate("hi(name)", [["a","b"]])

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 3
    want = "yesyesyesaaa"
    got = EvaluateTheBracketPairsOfString.evaluate("(a)(a)(a)aaa", [["a","yes"]])

    IO.puts("Test 3: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
