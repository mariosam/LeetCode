/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { sortJumbled } from './SortTheJumbledNumbers.js'

TEST('Starting SortTheJumbledNumbers test...', (t) => {
    //Test 1
    let want = [338,38,991]
    let got = sortJumbled( [8,9,4,0,2,1,3,5,7,6], [991,338,38] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [123,456,789]
    got = sortJumbled( [0,1,2,3,4,5,6,7,8,9], [789,456,123] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
 
