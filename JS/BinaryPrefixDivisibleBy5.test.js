/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { prefixesDivBy5 } from './BinaryPrefixDivisibleBy5.js'

TEST('Starting BinaryPrefixDivisibleBy5 test...', (t) => {
    //Test 1
    let want = [0,1,1]
    let got = prefixesDivBy5( [true,false,false] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [1,1,1]
    got = prefixesDivBy5( [false,false,false] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
