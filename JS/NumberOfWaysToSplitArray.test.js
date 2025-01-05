/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { waysToSplitArray } from './NumberOfWaysToSplitArray.js'

TEST('Starting NumberOfWaysToSplitArray test...', (t) => {
    //Test 1
    let want = 2
    let got = waysToSplitArray( [10,4,-8,7] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = waysToSplitArray( [2,3,1,0] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
