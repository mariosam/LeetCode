/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { closeStrings } from './DetermineIfTwoStringsAreClose.js'

TEST('Starting DetermineIfTwoStringsAreClose test...', (t) => {
    //Test 1
    let want = true
    let got = closeStrings( "abc", "bca" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = closeStrings( "a", "aa" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = true
    got = closeStrings( "cabbba", "abbccc" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
