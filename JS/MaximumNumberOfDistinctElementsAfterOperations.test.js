/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxDistinctElements } from './MaximumNumberOfDistinctElementsAfterOperations.js'

TEST('Starting MaximumNumberOfDistinctElementsAfterOperations test...', (t) => {
    //Test 1
    let want = 6
    let got = maxDistinctElements( [1,2,2,3,3,4], 2 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 3
    got = maxDistinctElements( [4,4,4,4], 1 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
