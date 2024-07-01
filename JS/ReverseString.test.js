/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { reverseString } from './ReverseString.js'

TEST('Starting ReverseString test...', (t) => {
    //Test 1
    let want = ["o","l","l","e","h"]
    let got = reverseString( ["h","e","l","l","o"] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = ["h","a","n","n","a","H"]
    got = reverseString( ["H","a","n","n","a","h"] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
