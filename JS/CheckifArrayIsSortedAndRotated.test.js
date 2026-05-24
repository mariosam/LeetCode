/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { check } from './CheckifArrayIsSortedAndRotated.js'

TEST('Starting CheckifArrayIsSortedAndRotated test...', (t) => {
    //Test 1
    let want = true
    let got = check( [3,4,5,1,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = check( [2,1,3,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = true
    got = check( [1,2,3] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
