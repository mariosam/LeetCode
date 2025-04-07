/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { largestDivisibleSubset } from './LargestDivisibleSubset.js'

TEST('Starting LargestDivisibleSubset test...', (t) => {
    //Test 1
    let want = [1,2]
    let got = largestDivisibleSubset( [1,2,3] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [1,2,4,8]
    got = largestDivisibleSubset( [1,2,4,8] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
