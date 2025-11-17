/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numSub } from './NumberOfSubstringsWithOnly1s.js'

TEST('Starting NumberOfSubstringsWithOnly1s test...', (t) => {
    //Test 1
    let want = 9
    let got = numSub( "0110111" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = numSub( "101" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 21
    got = numSub( "111111" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
