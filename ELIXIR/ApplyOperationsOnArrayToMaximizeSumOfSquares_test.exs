# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/ApplyOperationsOnArrayToMaximizeSumOfSquares_test.exs
# $ elixir ApplyOperationsOnArrayToMaximizeSumOfSquares_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("ApplyOperationsOnArrayToMaximizeSumOfSquares.ex", __DIR__)

defmodule ApplyOperationsOnArrayToMaximizeSumOfSquaresTest do
  use ExUnit.Case, async: true

  alias ApplyOperationsOnArrayToMaximizeSumOfSquares

  test "testing sum game" do
    # Test 1
    want = 261
    got = ApplyOperationsOnArrayToMaximizeSumOfSquares.max_sum([2,6,5,8],2)

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = 90
    got = ApplyOperationsOnArrayToMaximizeSumOfSquares.max_sum([4,5,4,7],3)

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
