/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isPalindrome } from './ValidPalindrome.js'

TEST('Starting ValidPalindrome test...', (t) => {
    //Test 1
    let want = true
    let got = isPalindrome( "A man, a plan, a canal: Panama" )
    t.assert( want === got, "Expect: true")
    //Test 2
    want = false
    got = isPalindrome( "race a car" )
    t.assert( want === got, "Expect: false")
    //Test 3
    want = true
    got = isPalindrome( " " )
    t.assert( want === got, "Expect: true")
    //Test 4
    want = true
    got = isPalindrome( "A man, a plan, a canal -- Panama" )
    t.assert( want === got, "Expect: true")
    //Test 5
    want = false
    got = isPalindrome( "0P" )
    t.assert( want === got, "Expect: false")

    t.end()
})
