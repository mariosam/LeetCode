/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numTilePossibilities } from './LetterTilePossibilities.js'

TEST('Starting LetterTilePossibilities test...', (t) => {
    //Test 1
    let want = 8
    let got = numTilePossibilities( "AAB" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 188
    got = numTilePossibilities( "AAABBC" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 1
    got = numTilePossibilities( "V" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
