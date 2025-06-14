/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxAdjacentDistance } from './MaximumDifferenceBetweenAdjacentElementsInACircularArray.js'

TEST('Starting MaximumDifferenceBetweenAdjacentElementsInACircularArray test...', (t) => {
    //Test 1
    let want = 3
    let got = maxAdjacentDistance([1,2,4])
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 5
    got = maxAdjacentDistance([-5,-10,-5])
    t.assert( want === got, "Expect: "+want)

    t.end()
})
