/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumBoxes } from './AppleRedistributionIntoBoxes.js'

TEST('Starting AppleRedistributionIntoBoxes test...', (t) => {
    //Test 1
    let want = 2
    let got = minimumBoxes( [1,3,2], [4,3,1,5,2] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 4
    got = minimumBoxes( [5,5,5], [2,4,2,7] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
