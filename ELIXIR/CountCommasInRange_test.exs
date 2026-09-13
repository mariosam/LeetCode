# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/CountCommasInRange_test.exs
# $ elixir CountCommasInRange_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("CountCommasInRange.ex", __DIR__)

defmodule CountCommasInRangeTest do
  use ExUnit.Case, async: true

  alias CountCommasInRange

  test "longest subsequence with non-zero bitwise XOR" do
    # Test 1
    want = 3
    got = CountCommasInRange.count_commas(1002)

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = 0
    got = CountCommasInRange.count_commas(998)

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
