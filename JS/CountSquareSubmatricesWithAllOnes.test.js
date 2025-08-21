/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countSquares } from './CountSquareSubmatricesWithAllOnes.js'

TEST('Starting CountSquareSubmatricesWithAllOnes test...', (t) => {
    //Test 1
    let want = 15
    let got = countSquares( [[0,1,1,1],[1,1,1,1],[0,1,1,1]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 7
    got = countSquares( [[1,0,1],[1,1,0],[1,1,0]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
