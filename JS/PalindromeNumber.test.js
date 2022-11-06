/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isPalindrome } from './PalindromeNumber.js'

TEST('Starting PalindromeNumber test...', (t) => {
    //Test 1
    let want = true
    let got = isPalindrome( 121 )
    t.assert( want === got, "Expect: true")
    //Test 2
    want = false
    got = isPalindrome( -121 )
    t.assert( want === got, "Expect: false")
    //Test 3
    want = false
    got = isPalindrome( 10 )
    t.assert( want === got, "Expect: false")

    t.end()
})
