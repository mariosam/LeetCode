/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximumHappinessSum } from './MaximizeHappinessOfSelectedChildren.js'

TEST('Starting MaximizeHappinessOfSelectedChildren test...', (t) => {
    //Test 1
    let want = 4
    let got = maximumHappinessSum( [1,2,3], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = maximumHappinessSum( [1,1,1,1], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 5
    got = maximumHappinessSum( [2,3,4,5], 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
