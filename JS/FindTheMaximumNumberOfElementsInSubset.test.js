/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximumLength } from './FindTheMaximumNumberOfElementsInSubset.js'

TEST('Starting FindTheMaximumNumberOfElementsInSubset test...', (t) => {
    //Test 1
    let want = 3
    let got = maximumLength( [5,4,1,2,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = maximumLength( [1,3,2,4])
    t.assert( want === got, "Expect: "+want)

    t.end()
})
