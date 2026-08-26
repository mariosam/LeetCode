# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ elixir KthSmallestAmountWithSingleDenominationCombination_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("KthSmallestAmountWithSingleDenominationCombination.ex", __DIR__)

defmodule KthSmallestAmountWithSingleDenominationCombinationTest do
  use ExUnit.Case, async: true

  alias KthSmallestAmountWithSingleDenominationCombination

  test "kth smallest amount with single denomination combination" do
    # Test 1
    want = 9
    got = KthSmallestAmountWithSingleDenominationCombination.find_kth_smallest([3, 6, 9], 3)

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = 12
    got = KthSmallestAmountWithSingleDenominationCombination.find_kth_smallest([5, 2], 7)

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
