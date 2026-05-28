/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numberOfSpecialChars } from './CountTheNumberOfSpecialCharactersII.js'

TEST('Starting CountTheNumberOfSpecialCharactersII test...', (t) => {
    //Test 1
    let want = 3
    let got = numberOfSpecialChars( "aaAbcBC" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = numberOfSpecialChars( "abc" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = numberOfSpecialChars( "AbBCab" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
