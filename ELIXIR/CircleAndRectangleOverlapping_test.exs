# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/CircleAndRectangleOverlapping_test.exs
# $ elixir CircleAndRectangleOverlapping_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("CircleAndRectangleOverlapping.ex", __DIR__)

defmodule CircleAndRectangleOverlappingTest do
  use ExUnit.Case, async: true

  alias CircleAndRectangleOverlapping

  test "testing sum game" do
    # Test 1
    want = true
    got = CircleAndRectangleOverlapping.check_overlap(1, 0, 0, 1, -1, 3, 1)

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = false
    got = CircleAndRectangleOverlapping.check_overlap(1, 1, 1, 1, -3, 2, -1)

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 3
    want = true
    got = CircleAndRectangleOverlapping.check_overlap(1, 0, 0, -1, 0, 0, 1)

    IO.puts("Test 3: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
