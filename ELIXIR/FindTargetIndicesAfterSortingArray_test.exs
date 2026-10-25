# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/FindTargetIndicesAfterSortingArray_test.exs
# $ elixir FindTargetIndicesAfterSortingArray_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("FindTargetIndicesAfterSortingArray.ex", __DIR__)

defmodule FindTargetIndicesAfterSortingArrayTest do
  use ExUnit.Case, async: true

  alias FindTargetIndicesAfterSortingArray

  test "longest subsequence with non-zero bitwise XOR" do
    # Test 1
    want = [1,2]
    got = FindTargetIndicesAfterSortingArray.target_indices([1,2,5,2,3], 2)

    IO.puts("\nTest 1: retornou #{inspect(got)} == esperado: #{inspect(want)}")
    assert got == want

    # Test 2
    want = [3]
    got = FindTargetIndicesAfterSortingArray.target_indices([1,2,5,2,3], 3)

    IO.puts("Test 2: retornou #{inspect(got)} == esperado: #{inspect(want)}")
    assert got == want

    # Test 3
    want = [4]
    got = FindTargetIndicesAfterSortingArray.target_indices([1,2,5,2,3], 5)

    IO.puts("Test 3: retornou #{inspect(got)} == esperado: #{inspect(want)}")
    assert got == want
  end
end
