/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { decodeCiphertext } from './DecodeTheSlantedCiphertext.js'

TEST('Starting DecodeTheSlantedCiphertext test...', (t) => {
    //Test 1
    let want = "cipher"
    let got = decodeCiphertext( "ch   ie   pr", 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "i love leetcode"
    got = decodeCiphertext( "iveo    eed   l te   olc", 4 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "coding"
    got = decodeCiphertext( "coding", 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
