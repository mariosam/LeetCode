/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { romanToInt } from './RomanToInteger.js'

TEST('Starting RomanToInteger test...', (t) => {
    //Test 1
    let want = 3
    let got = romanToInt( "III" )
    t.assert( want === got, "Expect: 3")
    //Test 2
    want = 58
    got = romanToInt( "LVIII" )
    t.assert( want === got, "Expect: 58")
    //Test 3
    want = 1994
    got = romanToInt( "MCMXCIV" )
    t.assert( want === got, "Expect: 1994")

    t.end()
})
