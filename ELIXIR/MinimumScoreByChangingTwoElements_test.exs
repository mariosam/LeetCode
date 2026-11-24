# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/MinimumScoreByChangingTwoElements_test.exs
# $ elixir MinimumScoreByChangingTwoElements_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("MinimumScoreByChangingTwoElements.ex", __DIR__)

defmodule MinimumScoreByChangingTwoElementsTest do
  use ExUnit.Case, async: true

  alias MinimumScoreByChangingTwoElements

  test "longest subsequence with non-zero bitwise XOR" do
    # Test 1
    want = 3
    got = MinimumScoreByChangingTwoElements.minimize_sum([1, 4, 7, 8, 5])

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = 0
    got = MinimumScoreByChangingTwoElements.minimize_sum([1, 4, 3])

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
