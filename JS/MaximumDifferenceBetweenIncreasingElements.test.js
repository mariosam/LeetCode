/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximumDifference } from './MaximumDifferenceBetweenIncreasingElements.js'

TEST('Starting MaximumDifferenceBetweenIncreasingElements test...', (t) => {
    //Test 1
    let want = 4
    let got = maximumDifference([7,1,5,4])
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = maximumDifference([9,4,3,2])
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 9
    got = maximumDifference([1,5,2,10])
    t.assert( want === got, "Expect: "+want)

    t.end()
})
