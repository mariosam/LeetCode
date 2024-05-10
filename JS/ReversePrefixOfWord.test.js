/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { reversePrefix } from './ReversePrefixOfWord.js'

TEST('Starting ReversePrefixOfWord test...', (t) => {
    //Test 1
    let want = "dcbaefd"
    let got = reversePrefix( "abcdefd", "d" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "zxyxxe"
    got = reversePrefix( "xyxzxe", "z" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "abcd"
    got = reversePrefix( "abcd", "z" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
