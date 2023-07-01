/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countNegatives } from './CountNegativeNumbersInSortedMatrix.js'

TEST('Starting CountNegativeNumbersInSortedMatrix test...', (t) => {
    //Test 1
    let want = 8
    let got = countNegatives( [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countNegatives( [[3,2],[1,0]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
