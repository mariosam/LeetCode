/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minIncrementForUnique } from './MinimumIncrementToMakeArrayUnique.js'

TEST('Starting MinimumIncrementToMakeArrayUnique test...', (t) => {
    //Test 1
    let want = 1
    let got = minIncrementForUnique( [1,2,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = minIncrementForUnique( [3,2,1,2,1,7] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
