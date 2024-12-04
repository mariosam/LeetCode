/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { addSpaces } from './AddingSpacesToString.js'

TEST('Starting AddingSpacesToString test...', (t) => {
    //Test 1
    let want = "Leetcode Helps Me Learn"
    let got = addSpaces( "LeetcodeHelpsMeLearn", [8,13,15] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "i code in py thon"
    got = addSpaces( "icodeinpython", [1,5,7,9] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = " s p a c i n g"
    got = addSpaces( "spacing", [0,1,2,3,4,5,6] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
