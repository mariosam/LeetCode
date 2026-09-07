# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!
# $ mix test test/ConstructUniformParityArrayI_test.exs
# $ elixir ConstructUniformParityArrayI_test.exs

# 1. Inicializa o framework de testes no escopo global
ExUnit.start()

# 2. Carrega o arquivo da regra de negocio (assumindo que esta na mesma pasta)
Code.require_file("ConstructUniformParityArrayI.ex", __DIR__)

defmodule ConstructUniformParityArrayITest do
  use ExUnit.Case, async: true

  alias ConstructUniformParityArrayI

  test "testing sum game" do
    # Test 1
    want = true
    got = ConstructUniformParityArrayI.uniform_array([2,3])

    IO.puts("\nTest 1: retornou #{got} == esperado: #{want}")
    assert got == want

    # Test 2
    want = true
    got = ConstructUniformParityArrayI.uniform_array([4,6])

    IO.puts("Test 2: retornou #{got} == esperado: #{want}")
    assert got == want
  end
end
