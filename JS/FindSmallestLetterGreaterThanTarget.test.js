/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { nextGreatestLetter } from './FindSmallestLetterGreaterThanTarget.js'

TEST('Starting FindSmallestLetterGreaterThanTarget test...', (t) => {
    //Test 1
    let want = "c"
    let got = nextGreatestLetter( ["c","f","j"], "a" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "f"
    got = nextGreatestLetter( ["c","f","j"], "c" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "x"
    got = nextGreatestLetter( ["x","x","y","y"], "z" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
