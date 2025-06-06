/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { smallestEquivalentString } from './LexicographicallySmallestEquivalentString.js'

TEST('Starting LexicographicallySmallestEquivalentString test...', (t) => {
    //Test 1
    let want = "makkek"
    let got = smallestEquivalentString( "parker", "morris", "parser" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "hdld"
    got = smallestEquivalentString( "hello", "world", "hold" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "aauaaaaada"
    got = smallestEquivalentString( "leetcode", "programs", "sourcecode" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
