/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumIndex } from './MinimumIndexOfValidSplit.js'

TEST('Starting MinimumIndexOfValidSplit test...', (t) => {
    //Test 1
    let want = 2
    let got = minimumIndex( [1,2,2,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = minimumIndex( [2,1,3,1,1,1,7,1,2,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -1
    got = minimumIndex( [3,3,3,3,7,2,2] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
