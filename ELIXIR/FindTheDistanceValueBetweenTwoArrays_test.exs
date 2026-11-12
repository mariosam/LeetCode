# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ elixir FindTheDistanceValueBetweenTwoArrays_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("FindTheDistanceValueBetweenTwoArrays.ex", __DIR__)

defmodule FindTheDistanceValueBetweenTwoArraysTest do
  use ExUnit.Case, async: true

  alias FindTheDistanceValueBetweenTwoArrays

  test "kth smallest amount with single denomination combination" do
    # Test 1
    want = 2
    got = FindTheDistanceValueBetweenTwoArrays.find_the_distance_value([4,5,8], [10,9,1,8], 2)
    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = 2
    got = FindTheDistanceValueBetweenTwoArrays.find_the_distance_value([1,4,2,3], [-4,-3,6,10,20,30], 3)
    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 3
    want = 1
    got = FindTheDistanceValueBetweenTwoArrays.find_the_distance_value([2,1,100,3], [-5,-2,10,-3,7], 6)
    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
