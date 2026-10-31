# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/CountDaysSpentTogether_test.exs
# $ elixir CountDaysSpentTogether_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("CountDaysSpentTogether.ex", __DIR__)

defmodule CountDaysSpentTogetherTest do
  use ExUnit.Case, async: true

  alias CountDaysSpentTogether

  test "longest subsequence with non-zero bitwise XOR" do
    # Test 1
    want = 3
    got = CountDaysSpentTogether.count_days_together("08-15", "08-18", "08-16", "08-19")

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = 0
    got = CountDaysSpentTogether.count_days_together("10-01", "10-31", "11-01", "12-31")

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
