/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { lexicalOrder } from './LexicographicalNumbers.js'

TEST('Starting LexicographicalNumbers test...', (t) => {
    //Test 1
    let want = [1,10,11,12,13,2,3,4,5,6,7,8,9]
    let got = lexicalOrder( 13 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [1,2]
    got = lexicalOrder( 2 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
