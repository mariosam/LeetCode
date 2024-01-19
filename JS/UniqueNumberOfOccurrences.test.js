/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { uniqueOccurrences } from './UniqueNumberOfOccurrences.js'

TEST('Starting UniqueNumberOfOccurrences test...', (t) => {
    //Test 1
    let want = true
    let got = uniqueOccurrences( [1,2,2,1,1,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = uniqueOccurrences( [1,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = true
    got = uniqueOccurrences( [-3,0,1,-3,1,1,1,-3,10,0] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
