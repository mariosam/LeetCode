/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findDuplicates } from './FindAllDuplicatesInAnArray.js'

TEST('Starting FindAllDuplicatesInAnArray test...', (t) => {
    //Test 1
    let want = [2,3]
    let got = findDuplicates( [4,3,2,7,8,2,3,1] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [1]
    got = findDuplicates( [1,1,2] )
    t.assert( want.toString == got.toString, "Expect: "+want)
    //Test 3
    want = []
    got = findDuplicates( [1] )
    t.assert( want.toString == got.toString, "Expect: "+want)

    t.end()
})
