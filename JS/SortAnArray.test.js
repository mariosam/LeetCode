/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { sortArray } from './SortAnArray.js'

TEST('Starting SortAnArray test...', (t) => {
    //Test 1
    let want = [1,2,3,5]
    let got = sortArray( [5,2,3,1] )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)
    //Test 2
    want = [0,0,1,1,2,5]
    got = sortArray( [5,1,1,2,0,0] )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)

    t.end()
})
