/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { smallestRepunitDivByK } from './SmallestIntegerDivisibleByK.js'

TEST('Starting SmallestIntegerDivisibleByK test...', (t) => {
    //Test 1
    let want = 1
    let got = smallestRepunitDivByK( 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = smallestRepunitDivByK( 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 3
    got = smallestRepunitDivByK( 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
