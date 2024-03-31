/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { sortedSquares } from './SquaresOfSortedArray.js'

TEST('Starting SquaresOfSortedArray test...', (t) => {
    //Test 1
    let want = [0,1,9,16,100]
    let got = sortedSquares( [-4,-1,0,3,10] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [4,9,9,49,121]
    got = sortedSquares( [-7,-3,2,3,11] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
 
