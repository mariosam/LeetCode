/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findTheDifference } from './FindTheDifference.js'

TEST('Starting FindTheDifference test...', (t) => {
    //Test 1
    let want = "e"
    let got = findTheDifference( "abcd", "abcde" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "y"
    got = findTheDifference( "", "y" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
