/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestBalanced } from './LongestBalancedSubstringI.js'

TEST('Starting LongestBalancedSubstringI test...', (t) => {
    //Test 1
    let want = 4
    let got = longestBalanced( "abbac" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = longestBalanced( "zzabccy" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 2
    got = longestBalanced( "aba" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
