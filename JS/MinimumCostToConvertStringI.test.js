/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumCost } from './MinimumCostToConvertStringI.js'

TEST('Starting MinimumCostToConvertStringI test...', (t) => {
    //Test 1
    let want = 28
    let got = minimumCost( "abcd", "acbe", ["a","b","c","c","e","d"], ["b","c","b","e","b","e"], [2,5,5,1,2,20] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 12
    got = minimumCost( "aaaa","bbbb", ["a","c"], ["c","b"], [1,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -1
    got = minimumCost( "abcd", "abce", ["a"], ["e"], [10000] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
