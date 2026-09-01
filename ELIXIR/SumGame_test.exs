# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/SumGame_test.exs
# $ elixir SumGame_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("SumGame.ex", __DIR__)

defmodule SumGameTest do
  use ExUnit.Case, async: true

  alias SumGame

  test "testing sum game" do
    # Test 1
    want = false
    got = SumGame.sum_game("5023")

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = true
    got = SumGame.sum_game("25??")

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 3
    want = false
    got = SumGame.sum_game("?3295???")

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
