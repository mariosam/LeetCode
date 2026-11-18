# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/CountNonDecreasingSubarraysAfterKOperations_test.exs
# $ elixir CountNonDecreasingSubarraysAfterKOperations_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("CountNonDecreasingSubarraysAfterKOperations.ex", __DIR__)

defmodule CountNonDecreasingSubarraysAfterKOperationsTest do
  use ExUnit.Case, async: true

  alias CountNonDecreasingSubarraysAfterKOperations

  test "longest subsequence with non-zero bitwise XOR" do
    # Test 1
    want = 17
    got = CountNonDecreasingSubarraysAfterKOperations.count_non_decreasing_subarrays([6,3,1,2,4,4], 7)
    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = 12
    got = CountNonDecreasingSubarraysAfterKOperations.count_non_decreasing_subarrays([6,3,1,3,6], 4)
    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
