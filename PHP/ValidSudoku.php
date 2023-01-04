<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ValidSudoku {    

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        //verifica se as linhas sao validas
        $check = $this->isValidSequence(0, 0, 9, 9, "lin", $board);
        if (! $check) return false;

        //verifica se as colunas sao validas
        $check = $this->isValidSequence(0, 0, 9, 9, "col", $board);
        if (! $check) return false;

        //verifica se o quadrante 1 eh valido
        $check = $this->isValidSequence(0, 0, 3, 3, "", $board);
        if (! $check) return false;

        //verifica se o quadrante 2 eh valido
        $check = $this->isValidSequence(0, 3, 3, 3, "", $board);
        if (! $check) return false;

        //verifica se o quadrante 3 eh valido
        $check = $this->isValidSequence(0, 6, 3, 3, "", $board);
        if (! $check) return false;

        //verifica se o quadrante 4 eh valido
        $check = $this->isValidSequence(3, 0, 3, 3, "", $board);
        if (! $check) return false;

        //verifica se o quadrante 5 eh valido
        $check = $this->isValidSequence(3, 3, 3, 3, "", $board);
        if (! $check) return false;

        //verifica se o quadrante 6 eh valido
        $check = $this->isValidSequence(3, 6, 3, 3, "", $board);
        if (! $check) return false;

        //verifica se o quadrante 7 eh valido
        $check = $this->isValidSequence(6, 0, 3, 3, "", $board);
        if (! $check) return false;

        //verifica se o quadrante 8 eh valido
        $check = $this->isValidSequence(6, 3, 3, 3, "", $board);
        if (! $check) return false;

        //verifica se o quadrante 9 eh valido
        return  $this->isValidSequence(6, 6, 3, 3, "", $board);
    }

    /**
     * @param int $iniI de onde inicia a contagem de linha
     * @param int $iniJ de onde inicia a cnotagem de coluna
     * @param int $x onde encerra a contagem de linha
     * @param int $y onde encerra a contagem de coluna
     * @param String $quadros como o array deve ser percorrido
     * @param String[][] $board contem os dados a serem analisados
     * @return Boolean
     */
    function isValidSequence($iniI, $iniJ, $x, $y, $quadros, $board) {
        $arTemp = [];
        $numero = ".";
        $x = $x + $iniI;
        $y = $y + $iniJ;

        //percorre o quadro
        for ( $i=$iniI; $i < $x; $i++ ) {
            for ( $j=$iniJ; $j < $y; $j++ ) {
                //valor do quadradinho
                $quadros == "col" ? $numero = $board[$j][$i] : $numero = $board[$i][$j];
                //ignora os espacos vazios '.'
                if ( $numero == '.' ) continue;
                //se o valor ja foi lido antes, sudoku invalido
                if ( in_array( $numero, $arTemp ) ) return false;
                //guarda o valor temporariamente
                array_push( $arTemp, $numero );
            }
            if ( $quadros != "" ) $arTemp = [];
        }
        return true;
    }
}
